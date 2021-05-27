@extends('front-end.master')
@section('body')
<style>
    #aa-myaccount .aa-myaccount-area {
    padding: 10px 0px 50px 0px !important;
}
</style>
<!-- catg header banner section -->
<section id="aa-catg-head-banner">
    <img src="{{asset('/')}}front-end/img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
        <div class="container">
            <div class="aa-catg-head-banner-content">
            <h2>Payment</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>                   
                <li class="active">Payment</li>
            </ol>
            </div>
        </div>
    </div>
</section>
  <!-- / catg header banner section -->



  <!-- Cart view section -->
 <section id="aa-myaccount">
    <div class="container">
        <div class="row" style="margin-top: 30px">
            <div class="col-md-12 well text-center text-success">
                Dear {{ Session::get('customerName') }}. You have to give us your payment method..
            </div>
        </div>

        <div class="aa-myaccount-area">         
             <div class="row">
               <div class="col-md-8 col-md-offset-2">
                 <div class="aa-myaccount-register">                 
                  <h4 class="text-center">Select a payment system</h4>
                  <form action="{{route('new-order')}}" method="post">
                    {{ csrf_field() }}
                    <table class="table table-bordered">
                        <tr>
                            <th>Cash On Delivery</th>
                            <td><input type="radio" name="payment_type" value="cash">&nbsp;&nbsp;Cash On Delivery</td>
                        </tr>
                        <tr>
                            <th>SSL Commerz (bKash/Card/Bank)</th>
                            <td><input type="radio" name="payment_type" value="ssl_commerz">&nbsp;&nbsp;SSL Commerz </td>
                        </tr>
                        <tr>
                            <th>Paypal</th>
                            <td><input type="radio" name="payment_type" value="paypal">&nbsp;&nbsp;Paypal</td>
                        </tr>
                        <tr>                           
                            <td colspan="2"><input type="submit" class="aa-browse-btn btn-block" name="btn" value="Confirm Order"></td>
                        </tr>
                    </table>
                </form>
                 </div>
               </div>              
             </div>          
        </div>
    </div>
  </section>
  <!-- / Cart view section -->

@endsection