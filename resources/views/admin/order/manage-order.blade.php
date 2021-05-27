@extends('admin.master')

@section('admin-body')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h5 class="m-0 font-weight-bold text-primary text-center">Manage Order</h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>SL NO</th>
                <th>Customer Name</th>
                <th>Order Total</th>
                <th>Order Date</th>
                <th>Order Status</th>
                <th>Payment Type</th>
                <th>Payment Status</th>
                <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>SL NO</th>
                <th>Customer Name</th>
                <th>Order Total</th>
                <th>Order Date</th>
                <th>Order Status</th>
                <th>Payment Type</th>
                <th>Payment Status</th>
                <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @php($i=1)
            @foreach($orders as $order)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$order->first_name.' '.$order->last_name}}</td>
                <td>{{$order->order_total}}</td>
                <td>{{$order->created_at}}</td>
                <td>{{$order->order_status}}</td>
                <td>{{$order->payment_type}}</td>
                <td>{{$order->payment_status}}</td>
                <td>    
                    <a href="{{route('view-order-detail',['id'=>$order->id])}}" class="btn btn-info btn-sm mt-1" title="View Order Details">
                    <i class="fas fa-search-plus"></i>
                    </a>
                    <a href="{{route('view-order-invoice',['id'=>$order->id])}}" class="btn btn-warning btn-sm mt-1" title="View Order Invoice">
                    <i class="fas fa-search-minus"></i>
                    </a>
                    <a href="{{route('download-order-invoice',['id'=>$order->id])}}" class="btn btn-primary btn-sm mt-1" title="Download Order Invoice">
                    <i class="fas fa-download"></i>
                    </a>                           
                    <a href="{{route('edit-category',['id'=>$order->id])}}" class="btn btn-success btn-sm mt-1" title="Edit Order">
                    <i class="far fa-edit"></i>
                    </a>
                    <a href="{{route('delete-category',['id'=>$order->id])}}" class="btn btn-danger btn-sm mt-1" title="Delete Order">
                    <i class="fas fa-trash"></i>
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