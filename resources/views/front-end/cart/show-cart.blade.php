@extends('front-end.master')
@section('body')
    <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="{{asset('/')}}front-end/img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
      <div class="container">
       <div class="aa-catg-head-banner-content">
         <h2>Cart Page</h2>
         <ol class="breadcrumb">
           <li><a href="index.html">Home</a></li>                   
           <li class="active">Cart</li>
         </ol>
       </div>
      </div>
    </div>
   </section>
   <!-- / catg header banner section -->
 
  <!-- Cart view section -->
  <section id="cart-view">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="cart-view-area">
            <div class="cart-view-table">
                <div class="table-responsive">
                   <table class="table">
                     <thead>
                       <tr>
                         <th>Sl No.</th>
                         <th>Name</th>
                         <th>Image</th>
                         <th>Price TK. </th>
                         <th>Quantity</th>
                         <th>Total Price TK. </th>
                         <th>Action</th>
                       </tr>
                     </thead>
                     <tbody>
                        @php($sum = 0)
                        @php($i = 1)
                        @foreach($cartProducts as $cartProduct)
                       <tr>
                         <td>{{$i++}}</td>
                         <td class="aa-cart-title">{{$cartProduct->name}}</td>
                         <td><img src="{{asset($cartProduct->options->image)}}" alt="" height="80px" width="80px"></td>
                         <td>{{$cartProduct->price}}</td>
                         <td>
                          
                            <form action="{{route('update-cart')}}" method="POST">
                                {{ csrf_field() }}
                            <input  class="aa-cart-quantity" type="number" name="qty" min="1" value="{{$cartProduct->qty}}">
                            <input type="hidden" name="rowId" value="{{$cartProduct->rowId}}">
                            <input type="submit" name="btn" value="Update">
                            </form>
                          
                         </td>
                         <td>{{$totalPrice = $cartProduct->price * $cartProduct->qty}}</td>
                         <td><a class="remove" href="{{route('delete-cart-item',['rowId'=>$cartProduct->rowId])}}"><fa class="fa fa-close"></fa></a></td>
                        
                       </tr>
                       @php($sum = $sum + $totalPrice)
                       @endforeach
                     </tbody>
                   </table>
                 </div>
              <hr />
              <!-- Cart Total view -->
              <div class="cart-view-total">
                <div class="text-center h3 text-info">Cart Totals</div>
                <table class="aa-totals-table">
                  <tbody>
                    <tr>
                      <th>Item Total (TK.) </th>
                      <td>{{$sum}} /-</td>
                    </tr>
                     <tr>
                        <th>Vat 3% (TK.) </th>
                        <td>{{$vat = ($sum*0.03)}} /-</td>
                    </tr>
                    <tr>
                        <th>Shipping Cost (TK.) </th>
                        <td>{{$sum == 0 ? $shipping_cost =  0 : $shipping_cost = 100}} /-</td>
                    </tr>
                    <tr>
                        <th>Grand Total (TK.) </th>
                        <td>{{$orderTotal = $sum+$vat+$shipping_cost}} /-</td>
                    {{Session::put('orderTotal',$orderTotal)}}
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12"> 
            @if(Session::get('customerId') && Session::get('shippingId'))
            <a href="{{route('checkout-payment')}}" class="aa-cart-view-btn pull-right">Proceed to Checkout</a>
            @elseif(Session::get('customerId'))
            <a href="{{route('checkout-shipping')}}" class="aa-cart-view-btn pull-right">Proceed to Checkout</a>
            @else
            <a href="{{route('checkout')}}" class="aa-cart-view-btn pull-right">Proceed to Checkout</a>
            @endif
            <a href="{{route('/')}}" class="aa-cart-view-btn pull-left">Continue Shopping</a>
        </div>
      </div>
      <br>




    </div>
  </section>
  <!-- / Cart view section -->
@endsection