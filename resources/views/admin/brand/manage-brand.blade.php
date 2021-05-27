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
                <th>Brand Name</th>
                <th>Brand Description</th>
                <th>Publication Status</th>
                <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>SL NO</th>
                <th>Brand Name</th>
                <th>Brand Description</th>
                <th>Publication Status</th>
                <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @php($i=1)
            @foreach($brands as $brand)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$brand->brand_name}}</td>
                <td>{{$brand->brand_description}}</td>
                <td>{{$brand->publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
                <td>
                    @if($brand->publication_status == 1)
                        <a href="{{route('unpublished-brand',['id'=>$brand->id])}}" class="btn btn-info btn-xl">
                            <i class="fas fa-arrow-up"></i>
                        </a>
                    @else
                        <a href="{{route('published-brand',['id'=>$brand->id])}}" class="btn btn-warning btn-xl">
                            <i class="fas fa-arrow-down"></i>
                        </a>
                    @endif
                    <a href="{{route('edit-brand',['id'=>$brand->id])}}" class="btn btn-success btn-xl">
                        <i class="far fa-edit"></i>
                    </a>
                    <a href="{{route('delete-brand',['id'=>$brand->id])}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-xl">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            @endforeach
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection