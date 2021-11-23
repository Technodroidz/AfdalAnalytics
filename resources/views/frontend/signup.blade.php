<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>{{__('SignUp')}}</title>
      <meta name="description" content="">
      <meta name="keywords" content="">
      <link rel="icon" type="image/png" href="">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <link href="{!!asset('public/assets/css/bootstrap.min.css')!!}" rel="stylesheet">
      <link href="{!!asset('public/assets/css/mdb.min.css')!!}" rel="stylesheet">
      <link href="{!!asset('public/assets/css/style.css')!!}" rel="stylesheet">

   </head>
   <body>
      
      <div class="login-bg">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="text-right">
                     <a class="navbar-brand font-weight-bold text-white" href="{{ url('home') }}">{{__('Afdal Analytics')}}<img src="{!!asset('public/assets/image/logoicon.png')!!}" height="40" class="ml-2"></a>
                  </div>
               </div>
            </div>
            @if ($message = Session::get('success'))
               <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>    
                  <strong>{{ $message }}</strong>
               </div>
             @endif

            @if ($message = Session::get('error'))
               <div class="alert alert-danger alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>    
                  <strong>{{ $message }}</strong>
               </div>
            @endif
            <div class="row">
               <div class="col-lg-5 col-sm-6 col-12 mx-auto">
                 <form class="mt-3" action="{{url('register')}}" method="post">
                     @csrf
                     <h3 class="text-center text-white">{{__('Sign Up')}}</h3>
                     <p class="text-center text-white">{{__('Already an user?')}} <a href="{{ url('signin') }}" class="text-white"><u>Signin</u></a></p>
                     <div class="row">
                        <div class="col-6">
                           <div class="form-group text-right">
                              <label class="d-block text-white">{{__('First Name')}}</label>
                              <input type="text" name="first_name" class="form-control text-right" placeholder="{{__('First Name')}}">
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group text-right">
                              <label class="d-block text-white">{{__('Last Name')}}</label>
                              <input type="text" name="last_name" class="form-control text-right" placeholder="{{__('Last Name')}}">
                           </div>
                        </div>
                     </div>
                     <div class="form-group text-right">
                        <label class="d-block text-white">{{__('Email')}}</label>
                        <input type="text" name="email" class="form-control text-right" placeholder="name@company.com">
                     </div>
                     <div class="form-group text-right">
                        <label class="d-block text-white">{{__('Password')}} <span class="float-left"><a href="#" class="text-warning"><i class="fas fa-eye mr-2"></i>{{__('Show')}}</a></span></label>
                        <input type="password" name="password" class="form-control text-right" placeholder="{{__('Password')}}">
                     </div>
                     <!-- <div class="form-group text-right">
                        <label class="d-block text-white">{{__('Working At')}}</label>
                        <input type="text" name="company" class="form-control text-right" placeholder="{{__('Type your company name')}}">
                     </div> -->
                     <div class="row">
                        <div class="col-6">
                           <div class="form-group text-right">
                              <label class="d-block text-white">{{__('Working As')}}</label>
                              <input type="text" name="working_as" class="form-control text-right" placeholder="{{__('Type your company role')}}">
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group text-right">
                              <label class="d-block text-white">{{__('Company')}}</label>
                              <input type="text" name="company" class="form-control text-right" placeholder="{{__('Type your company name')}}">
                           </div>
                        </div>
                     </div>
                     <div class="form-group form-check text-right">
                        <label class="form-check-label text-white mr-5" for="exampleCheck1">{{__('I agree to the Afdal Analytics Terms.')}}</label>
                        <input type="checkbox" name="terms" class="form-check-input" id="exampleCheck1">
                     </div>

                     <div class="form-group text-center mt-3">
                        <button type="submit" class="btn btn-warning btn-md">{{__('Sign Up')}}</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="container mb-5">
         <div class="row kpx_loginOr">
            <div class="col-lg-5 col-sm-6 col-12 mx-auto">
               <hr class="kpx_hrOr">
               <span class="kpx_spanOr">{{__('Or, sign up with')}}</span>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-2 col-sm-3 col-12 mx-auto">
               <ul class="nav login-social">
                  <li><a href="#"><i class="fab fa-google"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="#"><i class="fab fa-apple"></i></a></li>
               </ul>
            </div>
         </div>
      </div>
      <script type="text/javascript" src="{!!asset('public/assets/js/jquery-3.4.1.min.js')!!}"></script>
      <script type="text/javascript" src="{!!asset('public/assets/js/popper.min.js')!!}"></script>
      <script type="text/javascript" src="{!!asset('public/assets/js/bootstrap.min.js')!!}"></script>
      <script type="text/javascript" src="{!!asset('public/assets/js/mdb.min.js')!!}"></script>
   </body>
</html>