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
            <h2>Register / Login</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>                   
                <li class="active">Register / Login</li>
            </ol>
            </div>
        </div>
    </div>
</section>
  <!-- / catg header banner section -->



  <!-- Cart view section -->
 <section id="aa-myaccount">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         <div class="aa-myaccount-area">         
             <div class="row">
               <div class="col-md-6">
                 <div class="aa-myaccount-register">                 
                  <h4>Register</h4>
                  <form action="{{route('customer-sign-up')}}" method="post" class="aa-login-form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" name="first_name" class="form-control " placeholder="First Name">
                    </div>

                    <div class="form-group">
                        <input type="text" name="last_name" class="form-control " placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email_address" id="email_address" class="form-control " placeholder="example@gmail.com">
                        <span id="res"></span>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control " placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone_number" class="form-control " placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <textarea name="address" placeholder="Address" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="cus_res_two" class="aa-browse-btn btn-block" id="resBtn2" value="Register">
                    </div>                  
                  </form>
                 </div>
               </div>



               <div class="col-md-6">
                <div class="aa-myaccount-login">
                <h4>Login</h4>
                <h5 class="text-center text-danger">{{Session::get('invalid_email_or_password')}}</h5>
                <form action="{{route('customer-login')}}" method="post" class="aa-login-form">
                    {{ csrf_field() }}
                    <div class="form-group"> 
                        <input type="email" name="email_address" class="form-control " placeholder="example@gmail.com *">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control " placeholder="Password *">
                    </div>

                    <div class="form-group">
                        <input type="checkbox" id="rememberme"> &nbsp; &nbsp;Remember me
                    </div>
                    <div class="form-group">
                        <input type="submit" name="cus_login_two" class=" aa-browse-btn btn-block" value="Log-in">
                    </div>
                    <div class="form-group">
                        <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                    </div>       
                
                </div>
              </div>
              
             </div>          
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Cart view section -->

  <script>
    var email_address = document.getElementById('email_address');
    email_address.onblur = function(){
        var xmlHttp = new XMLHttpRequest();
        var email = document.getElementById('email_address').value;
        var serverPage = 'http://127.0.0.1:8000/ajax-email-check/'+email;
        xmlHttp.open("GET",serverPage);
        xmlHttp.onreadystatechange = function(){
            //alert(xmlHttp.readyState);
            if (xmlHttp.readyState==4 && xmlHttp.status==200) {
                document.getElementById('res').innerHTML = xmlHttp.responseText;
                if (xmlHttp.responseText == "<span style='color:red;'>Already Exists!!!</span>") {
                    document.getElementById('resBtn').disabled = true;
                } else {
                    document.getElementById('resBtn').disabled = false;
                }
            }
        }
        xmlHttp.send(null);
    }
   </script>

@endsection