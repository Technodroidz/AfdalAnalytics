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
                        <h3 class="font-weight-bold text-white">{{__('Your Dashboard')}}</h3>
                        <p class="text-white">{{__('Choose what dashboard to use')}}</p>
                        <a href="javascript:void(0);" class="tbBtn f active">Marketing</a>
                        <a href="javascript:void(0);" class="tbBtn s">Development</a>
                        <a href="javascript:void(0);" class="tbBtn t">Analytics</a>
                        <a href="javascript:void(0);" class="tbBtn fo">Social</a>
                        <div class="row markt" >
                           <div class="col-lg-4 col-sm-6 col-12">
                              <div class="card">
                                 <div class="card-body text-center">
                                     <div class="cardImage">
                                         <img src="https://i.pinimg.com/originals/11/f6/a1/11f6a1db1fc35782d9b1a664702c5c33.png">
                                     </div>
                                    <h5 class="font-weight-bold">{{__('Facebook Page')}} {{__('Insight')}}</h5>
                                    <p>{{__('Design your own dashboard with our Drag & Drop Widgets.Fully customizable, with the ability to save it as a')}}
                                       {{__('template for future use.')}}
                                    </p>
                                    <button class="btn btn-warning next btn-sm ml-2">{{__('Select')}}</button>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-6 col-12">
                              <div class="card">
                                 <div class="card-body text-center">
                                     <div class="cardImage">
                                         <img src="https://www.vhv.rs/dpng/d/105-1052116_online-reputation-dashboard-hd-png-download.png">
                                     </div>
                                    <h5 class="font-weight-bold">{{__('Facebook')}} {{__('Ads')}}</h5>
                                    <p>{{__('shows you how your advertising is helping you achieve your business goals across Facebook,Instagram and Audience Network')}}
                                    </p>
                                    <button class="btn btn-warning next btn-sm ml-2">Select</button>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-6 col-12">
                              <div class="card">
                                 <div class="card-body text-center">
                                     <div class="cardImage">
                                         <img src="https://as2.ftcdn.net/v2/jpg/02/32/92/69/500_F_232926981_9k5hyZdmf5fBP1gVO4LS1zbXd0hhOBtO.jpg">
                                     </div>
                                    <h5 class="font-weight-bold">{{__('Facebook')}} {{__('Engagement')}}</h5>
                                    <p>{{__('helps media organizations, brands, and public figures understand their audience, the success of posts, and the health of')}} {{__('their Pages over time')}}</p>
                                    <button class="btn btn-warning next btn-sm ml-2">Select</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--deve-->
                        <div class="row dev" style="display:none;">
                           <div class="col-lg-4 col-sm-6 col-12">
                              <div class="card">
                                 <div class="card-body text-center">
                                     <div class="cardImage">
                                         <img src="https://i.pinimg.com/originals/11/f6/a1/11f6a1db1fc35782d9b1a664702c5c33.png">
                                     </div>
                                    <h5 class="font-weight-bold">{{__('Facebook Page')}} {{__('Insight')}}</h5>
                                    <p>{{__('Design your own dashboard with our Drag & Drop Widgets.Fully customizable, with the ability to save it as a')}}
                                       {{__('template for future use.')}}
                                    </p>
                                    <button class="btn btn-warning next btn-sm ml-2">{{__('Select')}}</button>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-6 col-12">
                              <div class="card">
                                 <div class="card-body text-center">
                                     <div class="cardImage">
                                         <img src="https://www.vhv.rs/dpng/d/105-1052116_online-reputation-dashboard-hd-png-download.png">
                                     </div>
                                    <h5 class="font-weight-bold">{{__('Facebook')}} {{__('Ads')}}</h5>
                                    <p>{{__('shows you how your advertising is helping you achieve your business goals across Facebook,Instagram and Audience Network')}}
                                    </p>
                                    <button class="btn btn-warning next btn-sm ml-2">Select</button>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-6 col-12">
                              <div class="card">
                                 <div class="card-body text-center">
                                     <div class="cardImage">
                                         <img src="https://as2.ftcdn.net/v2/jpg/02/32/92/69/500_F_232926981_9k5hyZdmf5fBP1gVO4LS1zbXd0hhOBtO.jpg">
                                     </div>
                                    <h5 class="font-weight-bold">{{__('Facebook')}} {{__('Engagement')}}</h5>
                                    <p>{{__('helps media organizations, brands, and public figures understand their audience, the success of posts, and the health of')}} {{__('their Pages over time')}}</p>
                                    <button class="btn btn-warning next btn-sm ml-2">Select</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--analytics-->
                        <div class="row analy" style="display:none;">
                           <div class="col-lg-4 col-sm-6 col-12">
                              <div class="card">
                                 <div class="card-body text-center">
                                     <div class="cardImage">
                                         <img src="https://i.pinimg.com/originals/11/f6/a1/11f6a1db1fc35782d9b1a664702c5c33.png">
                                     </div>
                                    <h5 class="font-weight-bold">{{__('Facebook Page')}} {{__('Insight')}}</h5>
                                    <p>{{__('Design your own dashboard with our Drag & Drop Widgets.Fully customizable, with the ability to save it as a')}}
                                       {{__('template for future use.')}}
                                    </p>
                                    <button class="btn btn-warning next btn-sm ml-2">{{__('Select')}}</button>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-6 col-12">
                              <div class="card">
                                 <div class="card-body text-center">
                                     <div class="cardImage">
                                         <img src="https://www.vhv.rs/dpng/d/105-1052116_online-reputation-dashboard-hd-png-download.png">
                                     </div>
                                    <h5 class="font-weight-bold">{{__('Facebook')}} {{__('Ads')}}</h5>
                                    <p>{{__('shows you how your advertising is helping you achieve your business goals across Facebook,Instagram and Audience Network')}}
                                    </p>
                                    <button class="btn btn-warning next btn-sm ml-2">Select</button>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-6 col-12">
                              <div class="card">
                                 <div class="card-body text-center">
                                     <div class="cardImage">
                                         <img src="https://as2.ftcdn.net/v2/jpg/02/32/92/69/500_F_232926981_9k5hyZdmf5fBP1gVO4LS1zbXd0hhOBtO.jpg">
                                     </div>
                                    <h5 class="font-weight-bold">{{__('Facebook')}} {{__('Engagement')}}</h5>
                                    <p>{{__('helps media organizations, brands, and public figures understand their audience, the success of posts, and the health of')}} {{__('their Pages over time')}}</p>
                                    <button class="btn btn-warning next btn-sm ml-2">Select</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--Social-->
                        <div class="row scs" style="display:none;">
                           <div class="col-lg-4 col-sm-6 col-12">
                              <div class="card">
                                 <div class="card-body text-center">
                                     <div class="cardImage">
                                         <img src="https://i.pinimg.com/originals/11/f6/a1/11f6a1db1fc35782d9b1a664702c5c33.png">
                                     </div>
                                    <h5 class="font-weight-bold">{{__('Facebook Page')}} {{__('Insight')}}</h5>
                                    <p>{{__('Design your own dashboard with our Drag & Drop Widgets.Fully customizable, with the ability to save it as a')}}
                                       {{__('template for future use.')}}
                                    </p>
                                    <button class="btn btn-warning next btn-sm ml-2">{{__('Select')}}</button>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-6 col-12">
                              <div class="card">
                                 <div class="card-body text-center">
                                     <div class="cardImage">
                                         <img src="https://www.vhv.rs/dpng/d/105-1052116_online-reputation-dashboard-hd-png-download.png">
                                     </div>
                                    <h5 class="font-weight-bold">{{__('Facebook')}} {{__('Ads')}}</h5>
                                    <p>{{__('shows you how your advertising is helping you achieve your business goals across Facebook,Instagram and Audience Network')}}
                                    </p>
                                    <button class="btn btn-warning next btn-sm ml-2">Select</button>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-6 col-12">
                              <div class="card">
                                 <div class="card-body text-center">
                                     <div class="cardImage">
                                         <img src="https://as2.ftcdn.net/v2/jpg/02/32/92/69/500_F_232926981_9k5hyZdmf5fBP1gVO4LS1zbXd0hhOBtO.jpg">
                                     </div>
                                    <h5 class="font-weight-bold">{{__('Facebook')}} {{__('Engagement')}}</h5>
                                    <p>{{__('helps media organizations, brands, and public figures understand their audience, the success of posts, and the health of')}} {{__('their Pages over time')}}</p>
                                    <button class="btn btn-warning next btn-sm ml-2">Select</button>
                                 </div>
                              </div>
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
                        <li class="active">
                           <span></span>
                           {{__('Dashboard')}}
                        </li>
                        <li>
                           <span></span>
                           {{__('Finish')}}
                        </li>
                     </ul>
                  </div>
                  
                  <a href="{{url('signup-4')}}" style="color:#ed8225;text-decoration:underline;text-align:center;display:block;">Skip dashboard for now</a>
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
      <script>
          $('.f').click(function(){
             $('.markt').show(); 
             $('.dev, .analy, .scs').hide();
          });
          $('.s').click(function(){
             $('.dev').show(); 
             $('.markt, .analy, .scs').hide();
          });
          $('.t').click(function(){
             $('.analy').show(); 
             $('.dev, .markt, .scs').hide();
          });
          $('.fo').click(function(){
             $('.scs').show(); 
             $('.dev, .analy, .markt').hide();
          });
          
          $('.tbBtn').click(function(){
             $(this).addClass('active').siblings().removeClass('active'); 
          });
      </script>
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