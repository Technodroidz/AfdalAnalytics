<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Home</title>
      <meta name="description" content="">
      <meta name="keywords" content="">
      <link rel="icon" type="{!!asset('public/assets/image/logoicon.png')!!}" href="">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <link href="{!!asset('public/assets/css/bootstrap.min.css')!!}" rel="stylesheet">
      <link href="{!!asset('public/assets/css/mdb.min.css')!!}" rel="stylesheet">
      <link href="{!!asset('public/assets/css/owl.carousel.min.css')!!}" rel="stylesheet">
      <link href="{!!asset('public/assets/css/owl.theme.default.min.css')!!}" rel="stylesheet">
      <link href="{!!asset('public/assets/css/style.css')!!}" rel="stylesheet">

      
   </head>
   <body>

      <nav class="navbar navbar-expand-lg shadow">
         <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#crm-navbar" aria-controls="crm-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-align-justify"></span>
            </button>
            <div class="collapse navbar-collapse" id="crm-navbar">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                     <a class="nav-link signin-free text-white" href="#">Try For Free</a>
                  </li>
                  <li class="nav-item active">
                     <a class="nav-link signin-btn" href="{{ url('signin') }}">Sign In</a>
                  </li>
               </ul>
               <ul class="navbar-nav mx-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="#">Contact Us</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Resources</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Why Afdal</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ url('product') }}">Product</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ url('home') }}">Home</a>
                  </li>
               </ul>
            </div>
            <a class="navbar-brand font-weight-bold text-white" href="{{ url('home') }}">Afdal Analytics<img src="{!!asset('public/assets/image/logoicon.png')!!}" height="40" class="ml-2"></a>
         </div>
      </nav>


         @yield('content')
      

     <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="card-group">
                     <div class="card footer-col-card">
                        <div class="card-body">
                           <h5 class="font-weight-bold mb-3">Afdal Analytics</h5>
                           <p class="theme-color"><small>Ready to help launch your project <br> along with our well-designed pages.</small></p>
                           <ul class="social-media-footer">
                              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                           </ul>
                        </div>
                     </div>

                     <div class="card footer-col-card">
                        <div class="card-body text-right">
                           <h5 class="font-weight-bold mb-3">Company</h5>
                           <ul>
                              <li><a href="#">About Us</a></li>
                              <li><a href="#">Pricing</a></li>
                              <li><a href="#">Contact</a></li>
                           </ul>
                        </div>
                     </div>

                     <div class="card footer-col-card">
                        <div class="card-body text-right">
                           <h5 class="font-weight-bold mb-3">Product</h5>
                           <ul>
                              <li><a href="#">Overview</a></li>
                              <li><a href="#">Connections</a></li>
                              <li><a href="#">Dashboard</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="card footer-col-card">
                        <div class="card-body text-right">
                           <h5 class="font-weight-bold mb-3">Resources</h5>
                           <ul>
                              <li><a href="#">Blog</a></li>
                              <li><a href="#">Guides</a></li>
                              <li><a href="#">Glassary</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="card footer-col-card">
                        <div class="card-body text-right">
                           <h5 class="font-weight-bold mb-3">Account</h5>
                           <ul>
                              <li><a href="{{url('/signup')}}">Sign Up</a></li>
                              <li><a href="{{url('/signup')}}">Sign In</a></li>
                              <li><a href="{{url('/forgotpass')}}">Forgot Password</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="copyright-bg">
         <div class="container">
            <div class="row">
            <div class="col-lg-6">
               <p class="m-0 text-white"><i class="fas fa-copyright"></i> 2020 RCCP Inc. All Rights Reserved.</p>
            </div>
            <div class="col-lg-6">
               <p class="m-0 text-right"><a href="{{ url('privacypolicy') }}" class="text-white">Privacy Policy</a> <a href="#" class="text-white">Data Security</a> <a href="#" class="text-white">Legal Notice</a></p>
            </div>
         </div>
         </div>
      </div>

      <script type="text/javascript" src="{!!asset('public/assets/js/jquery-3.4.1.min.js')!!}"></script>
      <script type="text/javascript" src="{!!asset('public/assets/js/popper.min.js')!!}"></script>
      <script type="text/javascript" src="{!!asset('public/assets/js/bootstrap.min.js')!!}"></script>
      <script type="text/javascript" src="{!!asset('public/assets/js/mdb.min.js')!!}"></script>
      <script type="text/javascript" src="{!!asset('public/assets/js/owl.carousel.js')!!}"></script>
      <script type="text/javascript" src="{!!asset('public/assets/js/custom.js')!!}"></script>
    
</body>
</html>
