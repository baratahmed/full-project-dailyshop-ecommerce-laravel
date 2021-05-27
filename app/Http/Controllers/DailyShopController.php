<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Slider;

class DailyShopController extends Controller
{
    public function index(){
        $newProducts =  Product::where('publication_status',1)
                                ->orderBy('id', 'DESC')
                                ->take(12)
                                ->get();
        $sliders = Slider::where('publication_status',1)
                                ->orderBy('id', 'DESC')
                                ->get();

        return view('front-end.home.home',[
         'newProducts' => $newProducts,
         'sliders' => $sliders,
         ]);
    }
    public function categoryProduct($id){
        $categoryProducts = Product::where('category_id', $id)
                                    ->where('publication_status',1)
                                    ->get();
        return view('front-end.category.category-content',[
            'categoryProducts' => $categoryProducts
        ]);
    }

    public function productDetails($id){
        $product = Product::find($id);
        return view('front-end.product.product-details',[
            'product' => $product
        ]);
    }
    
    //    public function mailUs(){
    //        return view('front-end.mail.mail');
    //    }
}
