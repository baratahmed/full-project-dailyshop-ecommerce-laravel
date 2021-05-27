@extends('front-end.master')
@section('title')
Profile
@endsection
@section('body')

    <section id="aa-catg-head-banner">
        <img src="{{asset('/')}}front-end/img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
        <div class="aa-catg-head-banner-area">
          <div class="container">
           <div class="aa-catg-head-banner-content">
             <h2>Profile Page</h2>
             <ol class="breadcrumb">
               <li><a href="index.html">Home</a></li>                   
               <li class="active">Profile</li>
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
                       <table class="table" style="width: 70%;margin-left: auto; margin-right: auto;">
                            <tr>
                                <td style="width:50%"><b>Name</b></td>
                                <td>{{$customerInfo->first_name}}&nbsp;{{$customerInfo->last_name}}</td>
                            </tr>
                            <tr>
                                <td><b>Image</b></td>
                                <td><img src="" width="100" height="100"></td>
                            </tr>
                            <tr>
                                <td><b>Email Address</b></td>
                                <td>{{$customerInfo->email_address}}</td>
                            </tr>
                            <tr>
                                <td><b>Phone No</b></td>
                                <td>{{$customerInfo->phone_number}}</td>
                            </tr>
                            <tr>
                                <td><div class="text-center"><button class="btn btn-info btn-block">Edit</button></div></td>
                                <td><div class="text-center"><button class="btn btn-danger btn-block">Delete</button></div></td>
                            </tr>
                       </table>
                     </div> 
                </div>
              </div>
            </div>
          </div>  
    
    
        </div>
      </section>


@endsection