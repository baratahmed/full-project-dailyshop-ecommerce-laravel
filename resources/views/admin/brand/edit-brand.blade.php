@extends('admin.master')

@section('admin-body')
<div class="">
    <div class="col-md-10 offset-md-2">

        <div class="card text-center mt-5" style="width: 40rem;">
            <h5 class="card-header font-weight-bold text-primary">Edit Brand Form</h5>
            <div class="card-body">                    
                <form action="{{route('update-brand')}}" method="POST" >
                    {{csrf_field()}}
                    <div class="form-group row">
                      <label class="col-md-4 col-form-label">Brand Name</label>
                      <div class="col-md-8">
                        <input type="text" name="brand_name" value="{{$brand->brand_name}}" class="form-control">
                        <input type="hidden" name="brand_id" value="{{$brand->id}}" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Brand Description</label>
                        <div class="col-md-8">
                          <textarea name="brand_description" id="editor1" cols="30" rows="5" class="form-control">{{$brand->brand_description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Publication Status</label>
                        <div class="col-md-8">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" checked id="published" type="radio" {{$brand->publication_status == 1 ? 'checked' : ''}} name="publication_status" value="1">
                                <label class="form-check-label" for="published">Published</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" id="unpublished" type="radio" {{$brand->publication_status == 0 ? 'checked' : ''}} name="publication_status" value="0">
                                <label class="form-check-label" for="unpublished">Unpublished</label>
                              </div> 
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 offset-md-4">
                          <input type="submit" name="btn"  class="btn btn-primary btn-block" value="Update Brand Info">
                        </div>
                      </div>
                  </form>
            </div>
          </div>

    </div>
</div>
@endsection