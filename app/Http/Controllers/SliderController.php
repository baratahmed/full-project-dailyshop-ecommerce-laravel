<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Image;
use Session;

class SliderController extends Controller
{
    public function index(){
        return view('admin.slider.add-slider');
    }

    protected  function sliderInfoValidate($request){
        $this->validate($request, [
            // 'slider_name' => 'required|regex:/^[\pL\s\-]+$/u|max:20|min:2',
            'slider_title' => 'required|max:40|min:2',
            'slider_offer' => 'required',
            'slider_description' => 'required',
            'slider_image' => 'required',
            'publication_status' => 'required',
        ]);
    }

    protected  function sliderImageUpload($request){ 
        $sliderImage = $request->file('slider_image');
        $filetype = $sliderImage->getClientOriginalExtension();
        $imageName = 'IMG'.time().$request->slider_title.'.'.$filetype;
        $directory = 'slider-images/';
        $imageUrl = $directory.$imageName;
        Image::make($sliderImage)->save($imageUrl);
        return $imageUrl;
    }

    protected function saveSliderBasicInfo($request, $imageUrl ){
        $slider = new Slider();
        $slider->slider_title = $request->slider_title;
        $slider->slider_offer = $request->slider_offer;
        $slider->slider_description = $request->slider_description;
        $slider->slider_image = $imageUrl;
        $slider->publication_status = $request->publication_status;
        $slider->save();
    }

    public function saveSliderInfo(Request $request){
        $this->sliderInfoValidate($request);
        $imageUrl = $this->sliderImageUpload($request);
        $this->saveSliderBasicInfo($request, $imageUrl);
        Session::flash('success','Slider added successfully!');
        return redirect()->back();  
    }

    public function manageSliderInfo(){
        $sliders = Slider::all();
        return view('admin.slider.manage-slider',[
            'sliders'=>$sliders,
        ]);
    }

    public function unpublishedSliderInfo($id){
        $slider = Slider::find($id);
        $slider->publication_status = 0;
        $slider->save();
        Session::flash('success','Slider unpublished successfully!');
        return redirect()->back();
    }

    public function publishedSliderInfo($id){
        $slider = Slider::find($id);
        $slider->publication_status = 1;
        $slider->save();
        Session::flash('success','Slider published successfully!');
        return redirect()->back();
    }

    public function editSliderInfo($id){
        $slider = Slider::find($id);
        return view('admin.slider.edit-slider',[
            'slider'=>$slider,
        ]);
    }


    public function sliderBasicInfoUpdate($request,$product,$imageUrl=null){
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        if ($imageUrl) {
            $product->product_image = $imageUrl;
        }        
        
        $product->publication_status = $request->publication_status;
        $product->save();
    }
    

    public function updateSliderInfo(Request $request){
        $sliderImage = $request->file('slider_image');
        $slider = Slider::find($request->slider_id);
        if ($sliderImage) {
            unlink($slider->slider_image);
            $imageUrl = $this->sliderImageUpload($request);
            $this->sliderBasicInfoUpdate($request,$slider,$imageUrl);
        } 
        else {
            $this->sliderBasicInfoUpdate($request,$slider);
        }
        Session::flash('success','Slider updated successfully!');
        return redirect()->route('manage-slider');
        
    }

    public function deleteSliderInfo($id){
        $slider = Slider::find($id);
        $slider->delete();
        unlink($slider->slider_image);
        Session::flash('success','Slider deleted successfully!');
        return redirect()->route('manage-slider');
        
    }

}


