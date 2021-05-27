@extends('admin.master')

@section('admin-body')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h5 class="m-0 font-weight-bold text-primary text-center">Manage Brand</h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>SL NO</th>
                <th>Category Name</th>
                <th>Brand Name</th>
                <th>Product Name</th>
                <th>Product Image</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Publication Status</th>
                <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>SL NO</th>
                <th>Category Name</th>
                <th>Brand Name</th>
                <th>Product Name</th>
                <th>Product Image</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Publication Status</th>
                <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @php($i=1)
            @foreach($products as $product)
              <tr>
                <td>{{$i++}}</td>
                <td>{{$product->category_name}}</td>
                <td>{{$product->brand_name}}</td>
                <td>{{$product->product_name}}</td>
                <td>
                    <img src="{{asset($product->product_image)}}" alt="" height="100" width="100">
                </td>
                <td>{{$product->product_price}}</td>
                <td>{{$product->product_quantity}}</td>
                <td>{{$product->publication_status}}</td>
                <td>
                    <a href="{{route('view-product-details',['id'=>$product->id])}}" class="btn btn-info btn-sm mt-1" title="View Details">
                        <i class="fas fa-search-plus"></i>
                    </a>
                    @if($product->publication_status == 1)
                        <a href="{{route('unpublished-product',['id'=>$product->id])}}" class="btn btn-info btn-sm mt-1">
                            <i class="fas fa-arrow-up"></i>
                        </a>
                    @else
                        <a href="{{route('published-product',['id'=>$product->id])}}" class="btn btn-warning btn-sm mt-1">
                            <i class="fas fa-arrow-down"></i>
                        </a>
                    @endif
                    <a href="{{route('edit-product',['id' => $product->id])}}" class="btn btn-success btn-sm mt-1" title="Edit">
                        <i class="far fa-edit"></i>
                    </a>
                    <a  href="{{route('delete-product',['id'=>$product->id])}}" class="btn btn-danger btn-sm mt-1" onclick="return confirm('Are you sure to delete?')">
                        <i class="far fa-trash-alt"></i>
                    </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

