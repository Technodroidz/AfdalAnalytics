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
        .modal-dialog .modal-content .modal-header{border:none;}
        .pad0{padding:0px;}
        @media (min-width: 576px){
            .modal-dialog {
                max-width: 840px;
                width:100%;
            }
        }
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
                        <form class="mt-5">
                           <div class="form-group row">
                              <div class="col-lg-5 col-sm-6 col-12">
                                 <div class="final-form-icons text-left">
                                    <img src="{!!asset('public/assets/image/right-icons/conneactive.svg')!!}" class="rounded">
                                 </div>
                              </div>
                              <div class="col-lg-7 col-sm-6 col-12">
                                 <div class="final-form-link text-right">
                                    <span><a href="#" class="back">{{__('Add More Connections')}}</a></span>
                                 </div>
                              </div>
                           </div>

                           <div class="form-group row">
                              <div class="col-lg-5 col-sm-6 col-12">
                                 <div class="final-form-icons text-left">
                                    <img src="{!!asset('public/assets/image/right-icons/conneactive.svg')!!}" class="rounded">
                                 </div>
                              </div>
                              <div class="col-lg-7 col-sm-6 col-12">
                                 <div class="final-form-link text-right">
                                    <span><a href="#" data-toggle="modal" data-target="#invite-member">{{__('Invite Team Members')}}</a></span>
                                 </div>
                              </div>
                           </div>

                           <!--<div class="form-group row">-->
                           <!--   <div class="col-lg-8 col-sm-10 col-12">-->
                           <!--      <div class="final-form-link">-->
                           <!--         <span><a href="#">{{__('Choose Favorite Metrics')}}</a></span>-->
                           <!--      </div>-->
                           <!--   </div>-->
                           <!--   <div class="col-lg-4 col-sm-4 col-12">-->
                           <!--      <div class="final-form-icons text-center">-->
                           <!--         <img src="{!!asset('public/assets/image/right-icons/conneactive.svg')!!}" class="rounded">-->
                           <!--      </div>-->
                           <!--   </div>-->
                           <!--</div>-->
                           <div class="form-group text-center mt-5"> 
                              <a href="{{ url('tenantredirect') }}" class="btn btn-warning btn-sm">{{__('Finish')}}</a>         
                           </div>
                        </form>
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
                        <li class="active">
                           <span></span>
                           {{__('Finish')}}
                        </li>
                     </ul>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>

      <div class="modal fade" id="invite-member" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <!--<span class="modal-header-fle1"><img src="{!!asset('public/assets/image/homelogo.jpg')!!}" height="40" width="40" class="rounded"></span>-->
                  <span class="modal-header-fle2">
                     <h5 class="modal-title text-right font-weight-bold m-0" id="exampleModalLabel">{{__('Invite Members')}}</h5>
                  </span>
                  <span class="modal-header-fle3">
                  <button type="button" class="close float-left" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </span>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-12">
                        <form>
                           <div class="row">
                             
                              <div class="col-md-4 col-xs-12">
                                 <div class="form-group">
                                    <label class="d-block text-right" style="color:#000000;">{{__('Name')}}</label>
                                    <input type="text" class="form-control" placeholder="Name Surname">
                                 </div>
                              </div>
                              <div class="col-md-4 col-xs-12">
                                 <div class="form-group">
                                    <label class="d-block text-right" style="color:#000000;">{{__('Email')}}</label>
                                    <input type="email" class="form-control" placeholder="namesurname@gmail.com">
                                 </div>
                              </div>
                              <div class="col-md-4 col-xs-12">
                                 <div class="form-group">
                                    <label class="d-block text-right" style="color:#000000;">{{__('Job Position')}}</label>
                                    <input type="text" class="form-control" placeholder="Job Position">
                                 </div>
                              </div>
                              <div class="col-md-12" id="apd">
                                  
                              </div>
                                <div class="col-md-10 col-xs-12">
                                    <div class="form-group text-center">
                                        <a class="invBtn">Invite More Members <i class="fas fa-plus"></i></a>
                                    </div>
                                </div>

                              <div class="col-md-2 col-xs-12">
                                 <div class="form-group text-left">
                                    <button class="btn btn-warning btn-sm">{{__('Confirm')}}</button>
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
            $(".invBtn").click(function(){
                $("#apd").append('<div class="row"><div class="col-md-4 col-xs-12"><div class="form-group"><label class="d-block text-right" style="color:#000000;">{{__('Name')}}</label><input type="text" class="form-control" placeholder="Name Surname"></div></div><div class="col-md-4 col-xs-12"><div class="form-group"><label class="d-block text-right" style="color:#000000;">{{__('Email')}}</label><input type="email" class="form-control" placeholder="namesurname@gmail.com"></div></div><div class="col-md-4 col-xs-12"><div class="form-group"><label class="d-block text-right" style="color:#000000;">{{__('Job Position')}}</label><input type="text" class="form-control" placeholder="Job Position"></div></div></div>');
            });
      </script>
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