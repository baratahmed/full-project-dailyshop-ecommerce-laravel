@extends('admin.master')
@section('admin-body')
<div class="">
    <div class="col-md-10 offset-md-2">
        <div class="card text-center mt-5" style="width: 40rem;">
          <h5 class="card-header font-weight-bold text-primary">Edit Slider Form</h5>
            <div class="card-body">                    
              <form action="{{route('update-slider')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group row">
                  <label class="col-md-4 col-form-label">Slider Title</label>
                  <div class="col-md-8">
                    <input type="text" name="slider_title" value="{{$slider->slider_title}}" class="form-control">
                    <input type="hidden" name="slider_id" value="{{$slider->id}}">
                    <span class="text-danger">{{$errors->has('slider_title') ? $errors->first('slider_title') : ''}}</span>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-4 col-form-label">Slider Offer</label>
                  <div class="col-md-8">
                    <input type="text" name="slider_offer" value="{{$slider->slider_offer}}" class="form-control">
                    <span class="text-danger">{{$errors->has('slider_offer') ? $errors->first('slider_offer') : ''}}</span>
                  </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label">Slider Description</label>
                    <div class="col-md-8">
                      <textarea name="slider_description" id="editor1" cols="30" rows="5" value="{{$slider->slider_description}}" class="form-control"></textarea>
                      <span class="text-danger">{{$errors->has('slider_description') ? $errors->first('slider_description') : ''}}</span>
                    </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-4 col-form-label">Slider Image</label>
                  <div class="col-md-8">
                    <input type="file" name="slider_image" accept="image/*">
                    <img src="{{asset($slider->slider_image)}}" alt="" height="80" width="80">
                    <span class="text-danger">{{$errors->has('slider_image') ? $errors->first('slider_image') : ''}}</span>
                  </div>
              </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label">Publication Status</label>
                    <div class="col-md-8">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" {{$product->publication_status == 1 ? 'checked' : ''}} id="published" type="radio" name="publication_status" value="1">
                            <label class="form-check-label" for="published">Published</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" {{$product->publication_status == 0 ? 'checked' : ''}} id="unpublished" type="radio" name="publication_status" value="0">
                            <label class="form-check-label" for="unpublished">Unpublished</label>
                          </div> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-4">
                      <input type="submit" name="btn"  class="btn btn-primary btn-block" value="Save Slider Info">
                    </div>
                  </div>
              </form>
            </div>
          </div>
    </div>
</div>
@endsection