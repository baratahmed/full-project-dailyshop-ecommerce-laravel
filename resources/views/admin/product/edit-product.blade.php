@extends('admin.master')
@section('admin-body')
<div class="row">
    <div class="col-md-10 mx-auto">
        <div class="card text-center">
            <div class="card-header">
                <h4 class="text-center text-success">Edit Product</h4>
            </div>
            <div class="card-body">
                {{-- <h3 class="text-center text-success">{{Session::get('message')}}</h3> --}}
                {{-- {{Form::open(['route'=>'update-product', 'method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data','name'=>'editProductForm'])}} --}}
                <form method="POST" action="{{route('update-product')}}"  name='editProductForm' class="form-horizontal" enctype="multipart/form-data">
                    {{csrf_field()}}
                <div class="form-group row">
                    <label for="" class="control-label col-md-4">Category Name</label>
                    <div class="col-md-8">
                        <select name="category_id" class="form-control">
                            <option>----Select Category----</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}" >{{$category->category_name}}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">{{$errors->has('category_id') ? $errors->first('category_id') : ''}}</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="control-label col-md-4">Brand Name</label>
                    <div class="col-md-8">
                        <select name="brand_id" class="form-control">
                            <option>----Select Brand----</option>
                            @foreach($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">{{$errors->has('brand_id') ? $errors->first('brand_id') : ''}}</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="control-label col-md-4">Product Name</label>
                    <div class="col-md-8">
                        <input type="text" name="product_name" class="form-control" value="{{$product->product_name}}">
                        <input type="hidden" name="product_id" class="form-control" value="{{$product->id}}">
                        <span class="text-danger">{{$errors->has('product_name') ? $errors->first('product_name') : ''}}</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="control-label col-md-4">Product Price</label>
                    <div class="col-md-8">
                        <input type="number" name="product_price" class="form-control" value="{{$product->product_price}}">
                        <span class="text-danger">{{$errors->has('product_price') ? $errors->first('product_price') : ''}}</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="control-label col-md-4">Product Quantity</label>
                    <div class="col-md-8">
                        <input type="number" name="product_quantity" class="form-control" value="{{$product->product_quantity}}">
                        <span class="text-danger">{{$errors->has('product_quantity') ? $errors->first('product_quantity') : ''}}</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="control-label col-md-4">Short Description</label>
                    <div class="col-md-8">
                        <textarea name="short_description" id="" class="form-control">{{$product->short_description}}</textarea>
                        <span class="text-danger">{{$errors->has('short_description') ? $errors->first('short_description') : ''}}</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="control-label col-md-4">Long Description</label>
                    <div class="col-md-8">
                        <textarea name="long_description" id="editor1"  class="form-control">{{$product->long_description}}</textarea>
                        <span class="text-danger">{{$errors->has('long_description') ? $errors->first('long_description') : ''}}</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="control-label col-md-4">Product Image</label>
                    <div class="col-md-8">
                        <input type="file" name="product_image" accept="image/*">                        
                        <img src="{{asset($product->product_image)}}" alt="" height="80" width="80">
                        <span class="text-danger">{{$errors->has('product_image') ? $errors->first('product_image') : ''}}</span>
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
                    <label for="" class="control-label col-md-4"></label>
                    <div class="col-md-8">
                        <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Product Info">
                    </div>
                </div>
            </form>
                {{-- {{Form::close()}} --}}
            </div>
        </div>
    </div>
</div>


<script>    
     document.forms['editProductForm'].elements['category_id'].value = '{{$product->category_id}}';   
     document.forms['editProductForm'].elements['brand_id'].value = '{{$product->brand_id}}';
</script>
@endsection