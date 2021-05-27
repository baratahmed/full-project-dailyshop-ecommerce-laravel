  <!-- wpf loader Two -->
  {{-- <div id="wpf-loader-two">          
  <div class="wpf-loader-two-inner">
    <span>Loading</span>
  </div>
</div>  --}}
<!-- / wpf loader Two -->  

<!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
<!-- END SCROLL TOP BUTTON -->


<!-- Start header section -->
<header id="aa-header">
  <!-- start header top  -->
  <div class="aa-header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-top-area">
            <!-- start header top left -->
            <div class="aa-header-top-left">
              <!-- start language -->
              <div class="aa-language">
                <div class="dropdown">
                  <a class="btn" type="button" >
                    <img src="{{asset('front-end')}}/img/flag/bangladesh.jpg" alt="BD flag">Bangladesh
                  </a>                  
                </div>
              </div>
              <!-- / language -->

              <!-- start currency -->
              <div class="aa-currency">
                <div class="dropdown">
                  <a class="btn" href="#" type="button">
                  <b>৳</b> BDT
                  </a>
                </div>
              </div>
              <!-- / currency -->
              <!-- start cellphone -->
              <div class="cellphone hidden-xs">
                <p><span class="fa fa-phone"></span>+8801706351202</p>
              </div>
              <!-- / cellphone -->
            </div>
            <!-- / header top left -->
            <div class="aa-header-top-right">
              <ul class="aa-head-top-nav-right">
                @if($cusid = Session::get('customerId'))
                <li><a href="{{route('show-my-account',['id'=>$cusid])}}">My Account</a></li>
                @endif
                {{-- <li class="hidden-xs"><a href="wishlist.html">Wishlist</a></li> --}}
                <li class="hidden-xs"><a href="{{route('show-cart')}}">My Cart</a></li>
                @if(Session::get('customerId'))
                <li><a href="#" onclick="document.getElementById('customerLogoutForm').submit()">Logout</a></li>
                    {{-- {{Form::open(['route'=>'customer-logout','method'=>'POST','id'=>'customerLogoutForm'])}} --}}
                    <form action="{{route('customer-logout')}}" method="post" id="customerLogoutForm">
                        {{ csrf_field() }}
                    </form>
                    {{-- {{Form::close()}} --}}
                @else
                <li><a href="{{route('new-customer-login')}}">Login</a></li>
                @endif
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / header top  -->

  <!-- start header bottom  -->
  <div class="aa-header-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-bottom-area">
            <!-- logo  -->
            <div class="aa-logo">
              <!-- Text based logo -->
              <a href="{{route('/')}}">
                <span class="fa fa-shopping-cart"></span>
                <p>daily<strong>Shop</strong> <span>Your Shopping Partner</span></p>
              </a>
              <!-- img based logo -->
              <!-- <a href="index.html"><img src="{{asset('front-end')}}/img/logo.jpg" alt="logo img"></a> -->
            </div>
            <!-- / logo  -->
             <!-- cart box -->
            <div class="aa-cartbox">
            <a class="aa-cart-link" href="{{route('show-cart')}}">
                <span class="fa fa-shopping-basket"></span>
                <span class="aa-cart-title">SHOPPING CART</span>
                <span class="aa-cart-notify">2</span>
              </a>
              <div class="aa-cartbox-summary">
                <ul>
                  <li>
                    <a class="aa-cartbox-img" href="#"><img src="{{asset('front-end')}}/img/woman-small-2.jpg" alt="img"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Product Name</a></h4>
                      <p>1 x $250</p>
                    </div>
                    <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                  </li>
                  <li>
                    <a class="aa-cartbox-img" href="#"><img src="{{asset('front-end')}}/img/woman-small-1.jpg" alt="img"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Product Name</a></h4>
                      <p>1 x $250</p>
                    </div>
                    <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                  </li>                    
                  <li>
                    <span class="aa-cartbox-total-title">
                      Total
                    </span>
                    <span class="aa-cartbox-total-price">
                      $500
                    </span>
                  </li>
                </ul>
                <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Checkout</a>
              </div>
            </div>
            <!-- / cart box -->
            <!-- search box -->
            <div class="aa-search-box">
              <form action="">
                <input type="text" name="" id="" placeholder="Search here ex. 'man' ">
                <button type="submit"><span class="fa fa-search"></span></button>
              </form>
            </div>
            <!-- / search box -->             
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / header bottom  -->
</header>
<!-- / header section -->
<!-- menu -->
<section id="menu">
  <div class="container">
    <div class="menu-area">
      <!-- Navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>          
        </div>
        <div class="navbar-collapse collapse">
          <!-- Left nav -->
          <ul class="nav navbar-nav">
            
            @foreach ($categories as $category)
            <li><a href="{{route('category-product', ['id'=>$category->id])}}">{{$category->category_name}}</a></li>
            @endforeach


            {{-- <li><a href="#">Men <span class="caret"></span></a>
              <ul class="dropdown-menu">                
                <li><a href="{{asset('category-product')}}">Casual</a></li>
                <li><a href="#">Sports</a></li>
                <li><a href="#">Formal</a></li>
                <li><a href="#">Standard</a></li>                                                
                <li><a href="#">T-Shirts</a></li>
                <li><a href="#">Shirts</a></li>
                <li><a href="#">Jeans</a></li>
                <li><a href="#">Trousers</a></li>
                <li><a href="#">And more.. <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Sleep Wear</a></li>
                    <li><a href="#">Sandals</a></li>
                    <li><a href="#">Loafers</a></li>                                      
                  </ul>
                </li>
              </ul>
            </li> --}}
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>       
  </div>
</section>
<!-- / menu -->



  <!-- Login Modal -->  
  {{-- <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login or Register</h4>
          <form class="aa-login-form" action="">
            <label for="">Username or Email address<span>*</span></label>
            <input type="text" placeholder="Username or email">
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password">
            <button class="aa-browse-btn" type="submit">Login</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
            <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
            <div class="aa-register-now">
              Don't have an account?<a href="account.html">Register now!</a>
            </div>
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>     --}}