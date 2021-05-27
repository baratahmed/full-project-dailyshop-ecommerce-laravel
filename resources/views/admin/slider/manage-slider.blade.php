@extends('admin.master')

@section('admin-body')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h5 class="m-0 font-weight-bold text-primary text-center">Manage Slider</h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>Sl no.</th>
                <th>Slider Title</th>
                <th>Slider Offer</th>
                <th>Slider Description</th>
                <th>Slider Image</th>
                <th>Publication Status</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @php($i=1)
            @foreach($sliders as $slider)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$slider->slider_title}}</td>
                <td>{{$slider->slider_offer}}</td>
                <td>{{$slider->slider_description}}</td>
                <td>
                  <img src="{{asset($slider->slider_image)}}" alt="" height="100" width="100">
                </td>
                <td>{{$slider->publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
                <td style="width: 15%">
                    @if($slider->publication_status == 1)
                    <a href="{{route('unpublished-slider',['id'=>$slider->id])}}" class="btn btn-info btn-sm">
                        <i class="fas fa-arrow-up"></i>
                    </a>
                    @else
                    <a href="{{route('published-slider',['id'=>$slider->id])}}" class="btn btn-warning btn-sm">
                        <i class="fas fa-arrow-down"></i>
                    </a>
                    @endif
                    <a href="{{route('edit-slider',['id'=>$slider->id])}}" class="btn btn-success btn-sm">
                        <i class="far fa-edit"></i>
                    </a>
                    <a href="{{route('delete-slider',['id'=>$slider->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')">
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