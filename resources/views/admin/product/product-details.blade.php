@extends('admin.master')
@section('admin-body')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4><b>Product Details</b></h4>
                
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-12">
                <form>
                  <div class="form-group row">
                    <label class="col-4 col-form-label border-bottom border-top"><b>Product Id</b></label> 
                    <div class="col-8 border-bottom border-top">
                        <div>{{$product->id}}</div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-4 col-form-label border-bottom"><b>Category Id</b></label> 
                    <div class="col-8 border-bottom">
                        <div>{{$product->category_id}}</div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-4 col-form-label border-bottom"><b>Brand Id</b></label> 
                    <div class="col-8 border-bottom">
                        <div>{{$product->brand_id}}</div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-4 col-form-label border-bottom"><b>Product Name</b></label> 
                    <div class="col-8 border-bottom">
                        <div>{{$product->product_name}}</div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-4 col-form-label border-bottom"><b>Product Price</b></label> 
                    <div class="col-8 border-bottom">
                        <div>{{$product->product_price}}</div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-4 col-form-label border-bottom"><b>Product Quantity</b></label> 
                    <div class="col-8 border-bottom">
                        <div>{{$product->product_quantity}}</div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-4 col-form-label border-bottom"><b>Short Description</b></label> 
                    <div class="col-8 border-bottom">
                        <div>{{$product->short_description}}</div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-4 col-form-label border-bottom"><b>Long Description</b></label> 
                    <div class="col-8 border-bottom">
                        <div>{{$product->long_description}}</div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-4 col-form-label border-bottom"><b>Product Image</b></label> 
                    <div class="col-8 border-bottom">
                        <div><img src="{{asset($product->product_image)}}" alt="Product Image" width="100" height="100"></div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-4 col-form-label border-bottom"><b>Publication Status</b></label> 
                    <div class="col-8 border-bottom">
                        <div>{{$product->product_price == 1 ? 'Published' : 'Unplblished'}}</div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-4 col-form-label border-bottom"><b>Created at</b></label> 
                    <div class="col-8 border-bottom">
                        <div>{{date($product->created_at->format('d-m-Y'))}}</div>
                    </div>
                  </div>
                  
                  
                </form>
            </div>
        </div>
        
    </div>
</div>
@endsection
