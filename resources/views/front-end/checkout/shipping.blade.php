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
            <h2>Shipping</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>                   
                <li class="active">Shipping</li>
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
                  Dear {{ Session::get('customerName') }}. You have to give us product shipping info to complete your valuable order. If your billing info & shipping info are same then just press on <b>"Save Shipping Info"</b> button.
                </div>
            </div>

         <div class="aa-myaccount-area">         
             <div class="row">
               <div class="col-md-8 col-md-offset-2">
                 <div class="aa-myaccount-register">                 
                  <h4>Shipping Info goes here...</h4>
                  <form action="{{route('new-shipping')}}" method="post" class="aa-login-form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" value="{{ $customer->first_name.' '.$customer->last_name }}" name="full_name" class="form-control " placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <input type="email" value="{{ $customer->email_address }}" name="email_address" class="form-control " placeholder="example@gmail.com">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $customer->phone_number }}" name="phone_number" class="form-control " placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <textarea name="address" placeholder="Address" class="form-control">{{ $customer->address }}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btn" class="aa-browse-btn btn-block"  value="Save Shipping Info">
                    </div>                  
                  </form>
                 </div>
               </div>              
             </div>          
          </div>
    </div>
  </section>
  <!-- / Cart view section -->

@endsection