<!DOCTYPE html>
<html dir="rtl">
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
      <style>
          .form-wizard, .signup-radiobuttons{display:block;}
          .signup-radiobuttons label{display:inline-block;width:14%;}
      </style>
   </head>
   <body class="theme-bg">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-sm-10 col-12 mx-auto">
               <div>
                  <p>
                     <span ><a class="navbar-brand font-weight-bold text-white" href="{{ url('home') }}"><img src="{!!asset('public/assets/image/logoicon.png')!!}" height="40" class="ml-2">{{__('Afdal Analytics')}}</a></span>
                     <span class="float-right">
                     <a href="{{ url('signup') }}" class="text-warning"><i class="fas fa-arrow-right ml-2"></i>{{__('Back')}}</a>     
                     </span>                
                  </p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12 col-sm-12 col-12 mx-auto">
               <div class="form-wizard mt-5">
                  <div class="myContainer">
                     <div class="form-container animated text-center">
                        <h3 class="font-weight-bold text-white">{{__('Your Connections')}}</h3>
                        <p class="text-white">{{__('Choose the platform which you want to')}} <br>{{(__('connect with'))}}</p>
                        <div class="row">
                           <div class="col-lg-12 col-sm-12 col-12 mx-auto">
                              <form>
                                 <div class="mb-3">
                                    <div class="card-body pt-2 pb-2">
                                       <div class="signup-radiobuttons">
                                          <label>
                                             <input type="radio" name="product" class="card-input-element instagram-radio-element" />
                                             <div class="panel panel-default card-input">
                                                 <img src="https://freeiconshop.com/wp-content/uploads/edd/checkmark-flat.png" width="20" class="ch instaicon"/>
                                                <div class="panel-body">
                                                   <img src="{!!asset('public/assets/image/insta.svg')!!}">
                                                   <p style="margin:0">Instagram</p>
                                                </div>
                                             </div>
                                          </label>
                                          <label>
                                          <a href="{{ url('/facebook/login') }}"> 
                                             <input type="radio" name="product" class="card-input-element facebook-radio-element" checked/>
                                             <div class="panel panel-default card-input">
                                                 <img src="https://freeiconshop.com/wp-content/uploads/edd/checkmark-flat.png" width="20" class="ch fbicon" style="display:block;"/>
                                                <div class="panel-body">
                                                   <img src="{!!asset('public/assets/image/facebook.svg')!!}">
                                                   <p style="margin:0">Facebook Page</p>
                                                </div>
                                             </div></a>
                                          </label>
                                          <label>
                                             <input type="radio" name="product" class="card-input-element google-radio-element" />
                                             <div class="panel panel-default card-input">
                                                 <img src="https://freeiconshop.com/wp-content/uploads/edd/checkmark-flat.png" width="20" class="ch googleicon"/>
                                                <div class="panel-body">
                                                   <img src="{!!asset('public/assets/image/google.svg')!!}">
                                                   <p style="margin:0">Facebook Ads</p>
                                                </div>
                                             </div>
                                          </label>
                                          <label>
                                          <a href="{{ url('/login/twitter') }}"> 
                                             <input type="radio" name="product" class="card-input-element twitter-radio-element" />
                                             <div class="panel panel-default card-input">
                                                 <img src="https://freeiconshop.com/wp-content/uploads/edd/checkmark-flat.png" width="20" class="ch twittericon"/>
                                                <div class="panel-body">
                                                   <img src="{!!asset('public/assets/image/twitter.svg')!!}">
                                                   <p style="margin:0">Twitter</p>
                                                </div>
                                             </div></a>
                                          </label>
                                          <label>
                                             <input type="radio" name="product" class="card-input-element linkedin-radio-element" />
                                             <div class="panel panel-default card-input">
                                                 <img src="https://freeiconshop.com/wp-content/uploads/edd/checkmark-flat.png" width="20" class="ch linkicon"/>
                                                <div class="panel-body">
                                                   <img src="{!!asset('public/assets/image/linkedin.svg')!!}">
                                                   <p style="margin:0">Linkedin</p>
                                                </div>
                                             </div>
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="facebook-connection-show">
                                    <h5 class="text-center text-white font-weight-bold">{{__('Facebook Connection')}}</h5>
                                 <p class="text-center text-white">{{__('Integrate your Facebook Page and gain valuable ')}}<br>{{__('insight to help you grow')}}</p>
                                 </div>

                                 <div class="google-connection-show">
                                    <h5 class="text-center text-white font-weight-bold">{{__('Google Connection')}}</h5>
                                 <p class="text-center text-white">{{__('Integrate your Google Page and gain valuable')}} <br>{{__('insight to help you grow')}}</p>
                                 </div>

                                 <div class="twitter-connection-show">
                                    <h5 class="text-center text-white font-weight-bold">{{__('Twitter Connection')}}</h5>
                                 <p class="text-center text-white">{{__('Integrate your Twitter Page and gain valuable')}} <br>{{__('insight to help you grow')}}</p>
                                 </div>

                                 <div class="linkedin-connection-show">
                                    <h5 class="text-center text-white font-weight-bold">Linkedin Connection</h5>
                                 <p class="text-center text-white">Integrate your Linkedin Page and gain valuable <br>{{__('insight to help you grow')}}</p>
                                 </div>

                                 <div class="instagram-connection-show">
                                    <h5 class="text-center text-white font-weight-bold">{{__('Instagram Connection')}}</h5>
                                 <p class="text-center text-white">{{__('Integrate your Instagram Page and gain valuable')}}<br>{{__('insight to help you grow')}}</p>
                                 </div>
                                 <div class="form-group text-center mar-b-0">        
                                 <a href="{{url('signup-3')}}"><input type="button" value="NEXT" class="btn btn-warning btn-sm next "></a>        
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="steps">
                     <ul>
                        <li>
                           <span></span>
                           {{__('About you')}}
                        </li>
                        <li class="active">
                           <span></span> 
                           {{__('Connection')}}
                        </li>
                        <li>
                           <span></span>
                           {{__('Dashboard')}}
                        </li>
                        <li>
                           <span></span>
                           {{__('Finish')}}
                        </li>
                     </ul>
                  </div>
                  
                  <a href="{{url('signup-3')}}" style="color:#ed8225;text-decoration:underline;text-align:center;display:block;">Skip Connections for now</a>
               </div>
            </div>
         </div>
      </div>

      <div class="modal fade" id="invite-member" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <span class="modal-header-fle1"><img src="{!!asset('public/assets/image/homelogo.jpg')!!}" height="40" width="40" class="rounded"></span>
                  <span class="modal-header-fle2">
                     <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">{{__('Invite Members')}}</h5>
                  </span>
                  <span class="modal-header-fle3">
                  <button type="button" class="close float-left" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </span>
               </div>
               <div class="modal-body bg-gray">
                  <div class="row">
                     <div class="col-12">
                        <form>
                           <div class="row">
                             
                              <div class="col-12">
                                 <div class="form-group">
                                    <label class="d-block text-right"><small>{{__('Email')}}</small></label>
                                    <input type="email" class="form-control">
                                 </div>
                              </div>

                              <div class="col-12">
                                 <div class="form-group text-right">
                                    <button class="btn btn-warning btn-sm">{{__('Invite')}}</button>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript" src="{!!asset('public/assets/js/jquery-3.4.1.min.js')!!}"></script>
      <script type="text/javascript" src="{!!asset('public/assets/js/popper.min.js')!!}"></script>
      <script type="text/javascript" src="{!!asset('public/assets/js/bootstrap.min.js')!!}"></script>
      <script type="text/javascript" src="{!!asset('public/assets/js/mdb.min.js')!!}"></script>
      <script type="text/javascript">
          $(".facebook-radio-element").click(function () {
           $(".facebook-connection-show, .fbicon").show();
           $(".google-connection-show, .googleicon").hide();
           $(".twitter-connection-show, .twittericon").hide();
           $(".linkedin-connection-show, .linkicon").hide();
           $(".instagram-connection-show, .instaicon").hide();
         })

         $(".google-radio-element").click(function () {
           $(".facebook-connection-show, .fbicon").hide();
           $(".google-connection-show, .googleicon").show();
           $(".twitter-connection-show, .twittericon").hide();
           $(".linkedin-connection-show, .linkicon").hide();
           $(".instagram-connection-show, .instaicon").hide();
         })

         $(".twitter-radio-element").click(function () {
           $(".facebook-connection-show, .fbicon").hide();
           $(".google-connection-show, .googleicon").hide();
           $(".twitter-connection-show, .twittericon").show();
           $(".linkedin-connection-show, .linkicon").hide();
           $(".instagram-connection-show, .instaicon").hide();
         })

         $(".linkedin-radio-element").click(function () {
           $(".facebook-connection-show, .fbicon").hide();
           $(".google-connection-show, .googleicon").hide();
           $(".twitter-connection-show, .twittericon").hide();
           $(".linkedin-connection-show, .linkicon").show();
           $(".instagram-connection-show, .instaicon").hide();
         })

         $(".instagram-radio-element").click(function () {
           $(".facebook-connection-show, .fbicon").hide();
           $(".google-connection-show, .googleicon").hide();
           $(".twitter-connection-show, .twittericon").hide();
           $(".linkedin-connection-show, .linkicon").hide();
           $(".instagram-connection-show, .instaicon").show();
         })
         var totalSteps = $(".steps li").length;
         
         $(".submit").on("click", function(){
         return false; 
         });
         
         $(".steps li:nth-of-type(1)").addClass("active");
         $(".myContainer .form-container:nth-of-type(1)").addClass("active");
         
         $(".form-container").on("click", ".next", function() { 
         $(".steps li").eq($(this).parents(".form-container").index() + 1).addClass("active"); 
         $(this).parents(".form-container").removeClass("active").next().addClass("active flipInX");   
         });
         
         $(".form-container").on("click", ".back", function() {  
         $(".steps li").eq($(this).parents(".form-container").index() - totalSteps).removeClass("active"); 
         $(this).parents(".form-container").removeClass("active flipInX").prev().addClass("active flipInY"); 
         });
         
         
         /*=========================================================
         *     If you won't to make steps clickable, Please comment below code 
         =================================================================*/
         $(".steps li").on("click", function() {
         var stepVal = $(this).find("span").text();
         $(this).prevAll().addClass("active");
         $(this).addClass("active");
         $(this).nextAll().removeClass("active");
         $(".myContainer .form-container").removeClass("active flipInX");  
         $(".myContainer .form-container:nth-of-type("+ stepVal +")").addClass("active flipInX");     
         });
      </script>
   </body>
</html>