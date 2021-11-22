@extends('layout.userhead')
<style>
    .card {
        border-radius: 6px!important;
        position:relative;
    }
    .image-checkbox label{position:inherit!important;}
    .image-checkbox label:before{left:25px!important;top: 10px!important;}
    .modal-title{font-size:18px;text-align:center;width:100%;}
    .input-group>.custom-select:not(:first-child), .input-group>.form-control:not(:first-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }
    span.input-group-addon {
        background: #f48a1d;
        color: #ffffff;
        padding: 11px 14px;
        border-top-right-radius: 6px;
        border-bottom-right-radius: 6px;
        cursor: pointer;
    }
    .btn-circle{
        width:25px!important;
        height:25px!important;
        line-height:26px!important;
    }
    @media (min-width: 576px){
        .modal-dialog {
            max-width: 1000px!important;
            width:100%!important;
        }
    }
</style>
@section('title', 'User Home')
<div class="page-wrapper chiller-theme toggled">
   @section('content')
   @extends('layout.usersidenav')
   <main class="page-content pb-5">
      <div class="container-fluid">
          <nav class="navbar navbar-expand-lg bg-transparent user-navbar pl-0 pr-0">
            <div class="container-fluid">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item head-list-heading">
                     {{__('CONNECTIONS')}}
                  </li>
               </ul>
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <span class="main-notify">
                     <i class="fas fa-bell notification-icon"></i>
                     <span class="notify-circle"></span>
                     </span>
                     </a>
                     <div class="dropdown-menu shadow border-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">
                           {{__('Notification')}}<br>
                           <span><small>Lorem ipsum dolor sit amet</small></span>
                        </a>
                        <a class="dropdown-item" href="#">{{__('Notification')}}<br>
                           <span><small>Lorem ipsum dolor sit amet</small></span></a>
                        <a class="dropdown-item" href="#">{{__('Notification')}}<br>
                           <span><small>Lorem ipsum dolor sit amet</small></span></a>
                     </div>
                  </li>

                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <img src="{!!asset('public/assets/image/user.jpg')!!}" class="rounded-circle" height="40" width="40">
                     </a>
                     <div class="dropdown-menu shadow border-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">
                           {{__('Profile')}}
                        </a>
                        <a class="dropdown-item" href="#">{{__('Log Out')}}</a>
                     </div>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" href="#"><img src="{!!asset('public/assets/image/homelogo.jpg')!!}" class="rounded" height="40" width="40"></a>
                  </li>
               </ul>
            </div>
         </nav>
         <div class="row">
            <div class="col-lg-12 col-sm-12 col-12">
               <div class="dashboard-tabs">
                  <ul class="nav nav-pills">
                     <li class="nav-item">
                         <a class="nav-link active" data-toggle="tab" href="#my-connection">{{__('My Connection')}}</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#all-temp">{{__('All')}}</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#social-temp">{{__('Social Media')}}</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#ads-temp">{{__('Ads')}}</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#app-temp">{{__('App')}}</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#coming-temp">{{__('Coming Soon')}}</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-12">
               <div class="tab-content">
                  <div class="tab-pane active" id="my-connection">
                     <div class="home-social-media-detail mt-3">
                        <div class="row">
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="image-checkbox">
                                  <!-- checked -->
                                 <input type="checkbox" id="myCheckbox1" />
                                 <label for="myCheckbox1" class="m-0">
                                    <div class="icon-details text-center shadow rounded bg-white pt-3 pb-3 p-1 mb-3 font-weight-bold">
                                       <img src="{!!asset('public/assets/image/facebook.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Facebook Page')}}
                                    </div>
                                 </label>
                              </div>
                           </div>
                           <!--<div class="col-lg-2 col-sm-4 col-6">-->
                           <!--   <div class="icon-details text-center shadow-0 rounded-0 bg-transparent pt-3 pb-3 p-1 mb-3 font-weight-bold">-->
                           <!--      <a href="#"  data-toggle="modal" data-target="#facebook2" class="btn btn-white btn-circle text-warning waves-effect waves-light"><i class="fas fa-plus"></i></a>-->
                           <!--   </div>-->
                           <!--</div>-->
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="all-temp">
                     <div class="home-social-media-detail mt-3">
                        <div class="row">
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="image-checkbox">
                                 <input type="checkbox" id="myCheckbox2" checked />
                                 <label for="myCheckbox2" class="m-0">
                                    <a href="#" data-toggle="modal" data-target="#facebook4">
                                       <div class="icon-details text-center shadow rounded bg-white pt-3 pb-3 p-1 mb-3 font-weight-bold">
                                          <img src="{!!asset('public/assets/image/facebook.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Facebook Page')}} <br> {{__('Insight')}}
                                       </div>
                                    </a>
                                 </label>
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <a href="#" data-toggle="modal" data-target="#facebook2">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/facebook.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Facebook Ads')}}
                              </div>
                           </a>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <a href="#" data-toggle="modal" data-target="#apple2">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/apple.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Apple App Store')}}
                              </div>
                           </a>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <a href="#" data-toggle="modal" data-target="#twitter3">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/twitter.svg')!!}" class="mb-3" height="40" width="40"><br>Twitter {{__('Insight')}}
                              </div>
                           </a>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <a href="#" data-toggle="modal" data-target="#twitter2">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/twitter.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Facefook Ads')}}
                              </div>
                           </a>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <a href="#" data-toggle="modal" data-target="#youtube2">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/youtube.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Youtube')}} {{__('Insight')}}
                              </div>
                           </a>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <a href="#" data-toggle="modal" data-target="#youtube2">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/youtube.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Youtube Ads')}}
                              </div>
                           </a>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <a href="#" data-toggle="modal" data-target="#linkedin3">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/linkedin.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Linkedin Page')}} {{__('Insight')}}
                              </div>
                           </a>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <a href="#" data-toggle="modal" data-target="#linkedin2">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/linkedin.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Linkedin Ads')}}
                              </div>
                           </a>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <a href="#" data-toggle="modal" data-target="#google2">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/googleplay.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Google Play')}} <br> {{__('Store')}}
                              </div>
                           </a>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <a href="#" data-toggle="modal" data-target="#instagram3">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/insta.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Instagram')}} {{__('Insight')}}
                              </div>
                           </a>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <a href="#" data-toggle="modal" data-target="#instagram2">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/insta.svg')!!}" class="mb-3" height="40" width="40"><br>'{{__('Instagram Ads')}}}
                              </div>
                           </a>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/tiktok.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('TikTok')}} {{__('Insight')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/tiktok.svg')!!}" class="mb-3" height="40" width="40"><br>'{{__('TikTok Ads')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/ama.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Amazon')}} {{__('Insight')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/ama.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Amazon Ads')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/pintrest.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Pinterest')}} {{__('Insight')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/pintrest.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Pinterest Ads')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/snapchat.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Snapchat')}} {{__('Insight')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/snapchat.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Snapchat Ads')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <a href="#" data-toggle="modal" data-target="#google2">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/google.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Google Search')}}
                              </div>
                           </a>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/woo.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Woocommerce')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/shopify.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Shopify')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/bing.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Bing Ads')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/googleana.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Google Analytics')}}
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="social-temp">
                     <div class="home-social-media-detail mt-3">
                        <div class="row">
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="image-checkbox">
                                 <input type="checkbox" id="myCheckbox3" checked />
                                 <label for="myCheckbox3" class="m-0">
                                    <div class="icon-details text-center shadow rounded bg-white pt-3 pb-3 p-1 mb-3 font-weight-bold">
                                       <img src="{!!asset('public/assets/image/facebook.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Facebook Page')}} <br> {{__('Insight')}}
                                    </div>
                                 </label>
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/twitter.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Twitter')}} {{__('Insight')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/youtube.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Youtube')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/linkedin.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Linkedin Page')}} <br> {{__('Insight')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/insta.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Instagram')}} {{__('Insight')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/tiktok.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('TikTok')}} {{__('Insight')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/pintrest.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Pinterest')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/snapchat.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Snapchat')}} {{__('Insight')}}
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="ads-temp">
                     <div class="home-social-media-detail mt-3">
                        <div class="row">
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/facebook.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Facefook Ads')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/twitter.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Twitter Ads')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/youtube.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Youtube Ads')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/linkedin.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Linkedin Ads')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/insta.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Instagram Ads')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/tiktok.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('TikTok Ads')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/ama.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Amazon Ads')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/pintrest.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Pinterest Ads')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/snapchat.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Snapchat Ads')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/snapchat.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Snapchat')}} {{__('Insight')}}
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="app-temp">
                     <div class="home-social-media-detail mt-3">
                        <div class="row">
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/apple.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Apple App Store')}}
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/googleplay.svg')!!}" class="mb-3" height="40" width="40"><br>{{__('Google Play')}} <br> {{__('Store')}}
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="coming-temp">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </main>
</div>
<div class="modal fade tabindex-set9999" id="facebook1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">{{__('Add New Connection')}} </h5>
            <span class="modal-header-fle3">
            <button type="button" class="close float-left btn btn-border border p-2 theme-color" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">{{__('Close')}}</span>
            </button>
            </span>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-9 col-sm-8 col-12">
                  <div class="row">
                     <div class="col-lg-8 col-sm-8 col-12">
                        <div class="card mb-3">
                           <div class="card-header bg-gray text-right"><b>{{__('CONNECTIONS')}}</b></div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-lg-5 col-sm-12 col-12">
                                    <div class="help-form">
                                       <div class="help-form-col2">
                                          <button class="btn bgn-hlp-form waves-effect waves-light"><i class="fas fa-search"></i></button>
                                       </div>
                                       <div class="help-form-col1">
                                          <input type="text" class="form-control m-0" placeholder="Search">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-sm-6 col-12">
                                    <p class="font-weight-bold">{{__('Date Connected')}}</p>
                                 </div>
                                 <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                       <select class="form-control bg-gray">
                                          <option>{{__('Any')}}</option>
                                          <option>Option</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-fle-data-row">
                                 <div class="modal-fle-data-col text-right">
                                    <h6 class="font-weight-bold">{{__('Name')}}</h6>
                                 </div>
                                 <div class="modal-fle-data-col text-left">
                                    <h6 class="font-weight-bold">{{__('Accounts')}}</h6>
                                 </div>
                              </div>
                              <p class="text-center mt-3 mb-0"><a href="#" data-toggle="modal" data-target="#facebook2" class="btn btn-white btn-circle text-warning"><i class="fas fa-plus"></i></a></p>
                              <p class="text-center font-weight-bold">{{__('Add New')}}</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-6">
                              <p class="text-right mt-3"><a href="#" class="text-warning"><i class="fas fa-arrow-right ml-2"></i>{{__('Back')}}</a></p>
                           </div>
                           <div class="col-6">
                              <p class="text-left"><a href="#"  class="btn btn-theme-color btn-sm">{{__('Connect')}}</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4 col-12">
                        <div class="card top-city-scroller pl-1">
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/facebook.svg')!!}" class="mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">{{__('Facebook Ads')}}</h6>
                              <p><small>{{__('Integrate your Facebook Ads account to view campaigns, ad sets, ads and demographics.')}}')}}</small></p>
                           </div>
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/facebook.svg')!!}" class="mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">{{__('Facebook Ads')}}</h6>
                              <p><small>{{__('Integrate your Facebook Ads account to view campaigns, ad sets, ads and demographics.')}}')}}</small></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>{{__('? Need Help')}}</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>{{__('Watch Video')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>{{__('View Demo')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>{{__('Read Help Article')}}</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade tabindex-set9999" id="apple1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">('{{__('Add New Connection')}} </h5>
            <span class="modal-header-fle3">
            <button type="button" class="close float-left btn btn-border border p-2 theme-color" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">{{__('Close')}}</span>
            </button>
            </span>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-9 col-sm-8 col-12">
                  <div class="row">
                     <div class="col-lg-8 col-sm-8 col-12">
                        <div class="card mb-3">
                           <div class="card-header bg-gray text-right"><b>{{__('CONNECTIONS')}}</b></div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-lg-5 col-sm-12 col-12">
                                    <div class="help-form">
                                       <div class="help-form-col2">
                                          <button class="btn bgn-hlp-form waves-effect waves-light"><i class="fas fa-search"></i></button>
                                       </div>
                                       <div class="help-form-col1">
                                          <input type="text" class="form-control m-0" placeholder="Search">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-sm-6 col-12">
                                    <p class="font-weight-bold">{{__('Date Connected')}}</p>
                                 </div>
                                 <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                       <select class="form-control bg-gray">
                                          <option>{{__('Any')}}</option>
                                          <option>{{__('Option')}}</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-fle-data-row">
                                 <div class="modal-fle-data-col text-right">
                                    <h6 class="font-weight-bold">{{__('Name')}}</h6>
                                 </div>
                                 <div class="modal-fle-data-col text-left">
                                    <h6 class="font-weight-bold">{{__('Accounts')}}</h6>
                                 </div>
                              </div>
                              <p class="text-center mt-3 mb-0"><a href="#" data-toggle="modal" data-target="#apple2" class="btn btn-white btn-circle text-warning"><i class="fas fa-plus"></i></a></p>
                              <p class="text-center font-weight-bold">{{__('Add New')}}</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-6">
                              <p class="text-right mt-3"><a href="#" class="text-warning"><i class="fas fa-arrow-right ml-2"></i>{{__('Back')}}</a></p>
                           </div>
                           <div class="col-6">
                              <p class="text-left"><a href="#"  class="btn btn-theme-color btn-sm">{{__('Connect')}}</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4 col-12">
                        <div class="card top-city-scroller pl-1">
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/apple.svg')!!}" class="mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">{{__('Apple Ads')}}</h6>
                              <p><small>{{__('Integrate your Facebook Ads account to view campaigns, ad sets, ads and demographics.')}}</small></p>
                           </div>
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/apple.svg')!!}" class="mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">{{__('Apple Ads')}}</h6>
                              <p><small>{{__('Integrate your Facebook Ads account to view campaigns, ad sets, ads and demographics.')}}</small></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b></b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>{{__('Watch Video')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>{{__('View Demo')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>{{__('Read Help Article')}}</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade tabindex-set9999" id="twitter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">{{__('Add New Connection')}}</h5>
            <span class="modal-header-fle3">
            <button type="button" class="close float-left btn btn-border border p-2 theme-color" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">{{__('Close')}}</span>
            </button>
            </span>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-9 col-sm-8 col-12">
                  <div class="row">
                     <div class="col-lg-8 col-sm-8 col-12">
                        <div class="card mb-3">
                           <div class="card-header bg-gray text-right"><b>{{__('CONNECTIONS')}}</b></div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-lg-5 col-sm-12 col-12">
                                    <div class="help-form">
                                       <div class="help-form-col2">
                                          <button class="btn bgn-hlp-form waves-effect waves-light"><i class="fas fa-search"></i></button>
                                       </div>
                                       <div class="help-form-col1">
                                          <input type="text" class="form-control m-0" placeholder="Search">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-sm-6 col-12">
                                    <p class="font-weight-bold">{{__('Date Connected')}}</p>
                                 </div>
                                 <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                       <select class="form-control bg-gray">
                                          <option>{{__('Any')}}</option>
                                          <option>{{__('Option')}}</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-fle-data-row">
                                 <div class="modal-fle-data-col text-right">
                                    <h6 class="font-weight-bold">{{__('Name')}}</h6>
                                 </div>
                                 <div class="modal-fle-data-col text-left">
                                    <h6 class="font-weight-bold">{{__('Accounts')}}</h6>
                                 </div>
                              </div>
                              <p class="text-center mt-3 mb-0"><a href="#" data-toggle="modal" data-target="#twitter2" class="btn btn-white btn-circle text-warning"><i class="fas fa-plus"></i></a></p>
                              <p class="text-center font-weight-bold">{{__('Add New')}}</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-6">
                              <p class="text-right mt-3"><a href="#" class="text-warning"><i class="fas fa-arrow-right ml-2"></i>{{__('Back')}}</a></p>
                           </div>
                           <div class="col-6">
                              <p class="text-left"><a href="#"  class="btn btn-theme-color btn-sm">{{__('Connect')}}</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4 col-12">
                        <div class="card top-city-scroller pl-1">
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/twitter.svg')!!}" class="mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">{{__('Facefook Ads')}}</h6>
                              <p><small>{{__('Integrate your Facebook Ads account to view campaigns, ad sets, ads and demographics.')}}</small></p>
                           </div>
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/twitter.svg')!!}" class="mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">{{__('Facefook Ads')}}</h6>
                              <p><small>{{__('Integrate your Facebook Ads account to view campaigns, ad sets, ads and demographics.')}}</small></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>{{__('? Need Help')}}</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>{{__('Watch Video')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>{{__('View Demo')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>{{__('Read Help Article')}}</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade tabindex-set9999" id="youtube1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">{{__('Add New Connection')}} </h5>
            <span class="modal-header-fle3">
            <button type="button" class="close float-left btn btn-border border p-2 theme-color" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">{{__('Close')}}</span>
            </button>
            </span>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-9 col-sm-8 col-12">
                  <div class="row">
                     <div class="col-lg-8 col-sm-8 col-12">
                        <div class="card mb-3">
                           <div class="card-header bg-gray text-right"><b>{{__('CONNECTIONS')}}</b></div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-lg-5 col-sm-12 col-12">
                                    <div class="help-form">
                                       <div class="help-form-col2">
                                          <button class="btn bgn-hlp-form waves-effect waves-light"><i class="fas fa-search"></i></button>
                                       </div>
                                       <div class="help-form-col1">
                                          <input type="text" class="form-control m-0" placeholder="Search">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-sm-6 col-12">
                                    <p class="font-weight-bold">{{__('Date Connected')}}</p>
                                 </div>
                                 <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                       <select class="form-control bg-gray">
                                          <option>{{__('Any')}}</option>
                                          <option>Option</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-fle-data-row">
                                 <div class="modal-fle-data-col text-right">
                                    <h6 class="font-weight-bold">{{__('Name')}}</h6>
                                 </div>
                                 <div class="modal-fle-data-col text-left">
                                    <h6 class="font-weight-bold">{{__('Accounts')}}</h6>
                                 </div>
                              </div>
                              <p class="text-center mt-3 mb-0"><a href="#" data-toggle="modal" data-target="#youtube2" class="btn btn-white btn-circle text-warning"><i class="fas fa-plus"></i></a></p>
                              <p class="text-center font-weight-bold">{{__('Add New')}}</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-6">
                              <p class="text-right mt-3"><a href="#" class="text-warning"><i class="fas fa-arrow-right ml-2"></i>{{__('Back')}}</a></p>
                           </div>
                           <div class="col-6">
                              <p class="text-left"><a href="#"  class="btn btn-theme-color btn-sm">{{__('Connect')}}</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4 col-12">
                        <div class="card top-city-scroller pl-1">
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/youtube.svg')!!}" class="mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">{{__('Youtube Ads')}}</h6>
                              <p><small>{{__('Integrate your Facebook Ads account to view campaigns, ad sets, ads and demographics.')}}</small></p>
                           </div>
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/youtube.svg')!!}" class="mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">{{__('Youtube Ads')}}</h6>
                              <p><small>{{__('Integrate your Facebook Ads account to view campaigns, ad sets, ads and demographics.')}}</small></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>{{__('? Need Help')}}</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>{{__('Watch Video')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>{{__('View Demo')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>{{__('Read Help Article')}}</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade tabindex-set9999" id="instagram1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">{{__('Add New Connection')}} </h5>
            <span class="modal-header-fle3">
            <button type="button" class="close float-left btn btn-border border p-2 theme-color" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">{{__('Close')}}</span>
            </button>
            </span>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-9 col-sm-8 col-12">
                  <div class="row">
                     <div class="col-lg-8 col-sm-8 col-12">
                        <div class="card mb-3">
                           <div class="card-header bg-gray text-right"><b>{{__('CONNECTIONS')}}</b></div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-lg-5 col-sm-12 col-12">
                                    <div class="help-form">
                                       <div class="help-form-col2">
                                          <button class="btn bgn-hlp-form waves-effect waves-light"><i class="fas fa-search"></i></button>
                                       </div>
                                       <div class="help-form-col1">
                                          <input type="text" class="form-control m-0" placeholder="Search">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-sm-6 col-12">
                                    <p class="font-weight-bold">{{__('Date Connected')}}</p>
                                 </div>
                                 <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                       <select class="form-control bg-gray">
                                          <option>{{__('Any')}}</option>
                                          <option>Option</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-fle-data-row">
                                 <div class="modal-fle-data-col text-right">
                                    <h6 class="font-weight-bold">{{__('Name')}}</h6>
                                 </div>
                                 <div class="modal-fle-data-col text-left">
                                    <h6 class="font-weight-bold">{{__('Accounts')}}</h6>
                                 </div>
                              </div>
                              <p class="text-center mt-3 mb-0"><a href="#" data-toggle="modal" data-target="#instagram2" class="btn btn-white btn-circle text-warning"><i class="fas fa-plus"></i></a></p>
                              <p class="text-center font-weight-bold">{{__('Add New')}}</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-6">
                              <p class="text-right mt-3"><a href="#" class="text-warning"><i class="fas fa-arrow-right ml-2"></i>Back</a></p>
                           </div>
                           <div class="col-6">
                              <p class="text-left"><a href="#"  class="btn btn-theme-color btn-sm">Connect</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4 col-12">
                        <div class="card top-city-scroller pl-1">
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/insta.svg')!!}" class="mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">{{__('Instagram Ads')}}</h6>
                              <p><small>{{__('Integrate your Facebook Ads account to view campaigns, ad sets, ads and demographics.')}}</small></p>
                           </div>
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/insta.svg')!!}" class="mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">{{__('Instagram Ads')}}</h6>
                              <p><small>{{__('Integrate your Facebook Ads account to view campaigns, ad sets, ads and demographics.')}}</small></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>{{__('? Need Help')}}</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>{{__('Watch Video')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>{{__('View Demo')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>{{__('Read Help Article')}}</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade tabindex-set9999" id="google1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">{{__('Add New Connection')}} </h5>
            <span class="modal-header-fle3">
            <button type="button" class="close float-left btn btn-border border p-2 theme-color" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">Close</span>
            </button>
            </span>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-9 col-sm-8 col-12">
                  <div class="row">
                     <div class="col-lg-8 col-sm-8 col-12">
                        <div class="card mb-3">
                           <div class="card-header bg-gray text-right"><b>{{__('CONNECTIONS')}}</b></div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-lg-5 col-sm-12 col-12">
                                    <div class="help-form">
                                       <div class="help-form-col2">
                                          <button class="btn bgn-hlp-form waves-effect waves-light"><i class="fas fa-search"></i></button>
                                       </div>
                                       <div class="help-form-col1">
                                          <input type="text" class="form-control m-0" placeholder="Search">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-sm-6 col-12">
                                    <p class="font-weight-bold">{{__('Date Connected')}}</p>
                                 </div>
                                 <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                       <select class="form-control bg-gray">
                                          <option>{{__('Any')}}</option>
                                          <option>Option</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-fle-data-row">
                                 <div class="modal-fle-data-col text-right">
                                    <h6 class="font-weight-bold">{{__('Name')}}</h6>
                                 </div>
                                 <div class="modal-fle-data-col text-left">
                                    <h6 class="font-weight-bold">{{__('Accounts')}}</h6>
                                 </div>
                              </div>
                              <p class="text-center mt-3 mb-0"><a href="#" class="btn btn-white btn-circle text-warning"><i class="fas fa-plus"></i></a></p>
                              <p class="text-center font-weight-bold">{{__('Add New')}}</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-6">
                              <p class="text-right mt-3"><a href="#" class="text-warning"><i class="fas fa-arrow-right ml-2"></i>Back</a></p>
                           </div>
                           <div class="col-6">
                              <p class="text-left"><a href="#"  class="btn btn-theme-color btn-sm">Connect</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4 col-12">
                        <div class="card top-city-scroller pl-1">
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/google.svg')!!}" class="mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">Google Ads</h6>
                              <p><small>{{__('Integrate your Facebook Ads account to view campaigns, ad sets, ads and demographics.')}}</small></p>
                           </div>
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/google.svg')!!}" class="mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">Google Ads</h6>
                              <p><small>{{__('Integrate your Facebook Ads account to view campaigns, ad sets, ads and demographics.')}}</small></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>{{__('? Need Help')}}</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>{{__('Watch Video')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>{{__('View Demo')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>{{__('Read Help Article')}}</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="modal fade tabindex-set9999" id="linkedin1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">{{__('Add New Connection')}}</h5>
            <span class="modal-header-fle3">
            <button type="button" class="close float-left btn btn-border border p-2 theme-color" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">{{__('Close')}}</span>
            </button>
            </span>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-9 col-sm-8 col-12">
                  <div class="row">
                     <div class="col-lg-8 col-sm-8 col-12">
                        <div class="card mb-3">
                           <div class="card-header bg-gray text-right"><b>{{__('CONNECTIONS')}}</b></div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-lg-5 col-sm-12 col-12">
                                    <div class="help-form">
                                       <div class="help-form-col2">
                                          <button class="btn bgn-hlp-form waves-effect waves-light"><i class="fas fa-search"></i></button>
                                       </div>
                                       <div class="help-form-col1">
                                          <input type="text" class="form-control m-0" placeholder="Search">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-sm-6 col-12">
                                    <p class="font-weight-bold">{{__('Date Connected')}}</p>
                                 </div>
                                 <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                       <select class="form-control bg-gray">
                                          <option>{{__('Any')}}</option>
                                          <option>Option</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-fle-data-row">
                                 <div class="modal-fle-data-col text-right">
                                    <h6 class="font-weight-bold">{{__('Name')}}</h6>
                                 </div>
                                 <div class="modal-fle-data-col text-left">
                                    <h6 class="font-weight-bold">{{__('Accounts')}}</h6>
                                 </div>
                              </div>
                              <p class="text-center mt-3 mb-0"><a href="#" data-toggle="modal" data-target="#google2" class="btn btn-white btn-circle text-warning"><i class="fas fa-plus"></i></a></p>
                              <p class="text-center font-weight-bold">{{__('Add New')}}</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-6">
                              <p class="text-right mt-3"><a href="#" class="text-warning"><i class="fas fa-arrow-right ml-2"></i>Back</a></p>
                           </div>
                           <div class="col-6">
                              <p class="text-left"><a href="#"  class="btn btn-theme-color btn-sm">Connect</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4 col-12">
                        <div class="card top-city-scroller pl-1">
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/linkedin.svg')!!}" class="mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">{{__('Linkedin Ads')}}</h6>
                              <p><small>{{__('Integrate your Facebook Ads account to view campaigns, ad sets, ads and demographics.')}}</small></p>
                           </div>
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/linkedin.svg')!!}" class="mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">{{__('Linkedin Ads')}}</h6>
                              <p><small>{{__('Integrate your Facebook Ads account to view campaigns, ad sets, ads and demographics.')}}</small></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>{{__('? Need Help')}}</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>{{__('Watch Video')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>{{__('View Demo')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>{{__('Read Help Article')}}</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="linkedin2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">{{__('Add New Connection')}} </h5>
            <span class="modal-header-fle3">
            <button type="button" class="close float-left btn btn-border border p-2 theme-color" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">Close</span>
            </button>
            </span>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-9 col-sm-8 col-12">
                  <div class="card w-75 mx-auto mb-3">
                     <div class="card-body text-center">
                        <img src="{!!asset('public/assets/image/linkedin.svg')!!}" class="mb-3" height="50" width="50">
                        <h5 class="font-weight-bold">{{__('Linkedin Ads')}}</h5>
                        <p>{{__('Integrate your Facebook Ads account to view')}} <br>{{__('campaigns, ad sets, ads and demographics.')}}</p>
                     </div>
                  </div>
                  <div class="text-center">
                     <button class="btn btn-warning btn-sm"  data-toggle="modal" data-target="#linkedin1">{{__('Connect New Account')}}</button>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>{{__('? Need Help')}}</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>{{__('Watch Video')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>{{__('View Demo')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>{{__('Read Help Article')}}</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="linkedin3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">{{__('Add New Connection')}} </h5>
            <span class="modal-header-fle3">
            <button type="button" class="close float-left btn btn-border border p-2 theme-color" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">{{__('Close')}}</span>
            </button>
            </span>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-9 col-sm-8 col-12">
                  <div class="card w-75 mx-auto mb-3">
                     <div class="card-body text-center">
                        <img src="{!!asset('public/assets/image/linkedin.svg')!!}" class="mb-3" height="50" width="50">
                        <h5 class="font-weight-bold">Linkedin {{__('Insight')}}</h5>
                        <p>{{__('Integrate your Facebook Ads account to view')}} <br>{{__('campaigns, ad sets, ads and demographics.')}}</p>
                     </div>
                  </div>
                  <div class="text-center">
                     <button class="btn btn-warning btn-sm"  data-toggle="modal" data-target="#linkedin4">{{__('Connect New Account')}}</button>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>{{__('? Need Help')}}</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>{{__('Watch Video')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>{{__('View Demo')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>{{__('Read Help Article')}}</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


<div class="modal fade tabindex-set9999" id="linkedin4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">{{__('Add New Connection')}} </h5>
            <span class="modal-header-fle3">
            <button type="button" class="close float-left btn btn-border border p-2 theme-color" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">{{__('Close')}}</span>
            </button>
            </span>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-9 col-sm-8 col-12">
                  <div class="row">
                     <div class="col-lg-8 col-sm-8 col-12">
                        <div class="card mb-3">
                           <div class="card-header bg-gray text-right"><b>{{__('CONNECTIONS')}}</b></div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-lg-5 col-sm-12 col-12">
                                    <div class="help-form">
                                       <div class="help-form-col2">
                                          <button class="btn bgn-hlp-form waves-effect waves-light"><i class="fas fa-search"></i></button>
                                       </div>
                                       <div class="help-form-col1">
                                          <input type="text" class="form-control m-0" placeholder="Search">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-sm-6 col-12">
                                    <p class="font-weight-bold">{{__('Date Connected')}}</p>
                                 </div>
                                 <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                       <select class="form-control bg-gray">
                                          <option>{{__('Any')}}</option>
                                          <option>{{__('Option')}}</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-fle-data-row">
                                 <div class="modal-fle-data-col text-right">
                                    <h6 class="font-weight-bold">{{__('Name')}}</h6>
                                 </div>
                                 <div class="modal-fle-data-col text-left">
                                    <h6 class="font-weight-bold">{{__('Accounts')}}</h6>
                                 </div>
                              </div>
                              <p class="text-center mt-3 mb-0"><a href="#" data-toggle="modal" data-target="#google2" class="btn btn-white btn-circle text-warning"><i class="fas fa-plus"></i></a></p>
                              <p class="text-center font-weight-bold">{{__('Add New')}}</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-6">
                              <p class="text-right mt-3"><a href="#" class="text-warning"><i class="fas fa-arrow-right ml-2"></i>Back</a></p>
                           </div>
                           <div class="col-6">
                              <p class="text-left"><a href="#"  class="btn btn-theme-color btn-sm">Connect</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4 col-12">
                        <div class="card top-city-scroller pl-1">
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/linkedin.svg')!!}" class="mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">Linkedin {{__('Insight')}}</h6>
                              <p><small>{{__('Integrate your Facebook Ads account to view campaigns, ad sets, ads and demographics.')}}</small></p>
                           </div>
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/linkedin.svg')!!}" class="mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">Linkedin {{__('Insight')}}</h6>
                              <p><small>{{__('Integrate your Facebook Ads account to view campaigns, ad sets, ads and demographics.')}}</small></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>{{__('? Need Help')}}</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>{{__('Watch Video')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>{{__('View Demo')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>{{__('Read Help Article')}}</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


<div class="modal fade" id="facebook2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">{{__('Add New Connection')}} </h5>
            <span class="modal-header-fle3">
            <button type="button" class="close float-left btn btn-border border p-2 theme-color" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">{{__('Close')}}</span>
            </button>
            </span>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-9 col-sm-8 col-12">
                  <div class="card w-75 mx-auto mb-3">
                     <div class="card-body text-center">
                        <img src="{!!asset('public/assets/image/facebook.svg')!!}" class="mb-3" height="50" width="50">
                        <h5 class="font-weight-bold">{{__('Facebook Ads')}}</h5>
                        <p>{{__('Integrate your Facebook Ads account to view')}} <br>{{__('campaigns, ad sets, ads and demographics.')}}</p>
                     </div>
                  </div>
                  <div class="text-center">
                     <button class="btn btn-warning btn-sm"  data-toggle="modal" data-target="#facebook1">{{__('Connect New Account')}}</button>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>{{__('? Need Help')}}</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>{{__('Watch Video')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>{{__('View Demo')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>{{__('Read Help Article')}}</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="facebook4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">{{__('Add New Connection')}} </h5>
            <span class="modal-header-fle3">
            <button type="button" class="close float-left btn btn-border border p-2 theme-color" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">Close</span>
            </button>
            </span>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-9 col-sm-8 col-12">
                  <div class="card w-75 mx-auto mb-3">
                     <div class="card-body text-center">
                        <img src="{!!asset('public/assets/image/facebook.svg')!!}" class="mb-3" height="50" width="50">
                        <h5 class="font-weight-bold">{{__('Facebook Page')}} {{__('Insight')}}</h5>
                        <p>{{__('Integrate your Facebook Ads account to view')}} <br>{{__('campaigns, ad sets, ads and demographics.')}}</p>
                     </div>
                  </div>
                  <div class="text-center">
                     <button class="btn btn-warning btn-sm"  data-toggle="modal" data-target="#facebook3">{{__('Connect New Account')}}</button>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>{{__('? Need Help')}}</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>{{__('Watch Video')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>{{__('View Demo')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>{{__('Read Help Article')}}</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="modal fade tabindex-set9999" id="facebook3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">{{__('Add New Connection')}} </h5>
            <span class="modal-header-fle3">
            <button type="button" class="close float-left btn btn-border border p-2 theme-color" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">Close</span>
            </button>
            </span>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-9 col-sm-8 col-12">
                  <div class="row">
                     <div class="col-lg-8 col-sm-8 col-12">
                        <div class="card mb-3">
                           <div class="card-header bg-gray text-right"><b>{{__('CONNECTIONS')}}</b></div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-lg-5 col-sm-12 col-12">
                                    <div class="help-form">
                                       <div class="help-form-col2">
                                          <button class="btn bgn-hlp-form waves-effect waves-light"><i class="fas fa-search"></i></button>
                                       </div>
                                       <div class="help-form-col1">
                                          <input type="text" class="form-control m-0" placeholder="Search">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-sm-6 col-12">
                                    <p class="font-weight-bold">{{__('Date Connected')}}</p>
                                 </div>
                                 <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                       <select class="form-control bg-gray">
                                          <option>{{__('Any')}}</option>
                                          <option>Option</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-fle-data-row">
                                 <div class="modal-fle-data-col text-right">
                                    <h6 class="font-weight-bold">{{__('Name')}}</h6>
                                 </div>
                                 <div class="modal-fle-data-col text-left">
                                    <h6 class="font-weight-bold">{{__('Accounts')}}</h6>
                                 </div>
                              </div>
                              <p class="text-center mt-3 mb-0"><a href="#" data-toggle="modal" data-target="#facebook2" class="btn btn-white btn-circle text-warning"><i class="fas fa-plus"></i></a></p>
                              <p class="text-center font-weight-bold">{{__('Add New')}}</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-6">
                              <p class="text-right mt-3"><a href="#" class="text-warning"><i class="fas fa-arrow-right ml-2"></i>Back</a></p>
                           </div>
                           <div class="col-6">
                              <p class="text-left"><a href="#"  class="btn btn-theme-color btn-sm">Connect</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4 col-12">
                        <div class="card top-city-scroller pl-1">
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/facebook.svg')!!}" class="mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">{{__('Facebook Page')}} {{__('Insight')}}</h6>
                              <p><small>Integrate your {{__('Facebook Page')}} {{__('Insight')}} account to view campaigns, ad sets, page {{__('Insight')}} and demographics.</small></p>
                           </div>
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/facebook.svg')!!}" class="mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">{{__('Facebook Page')}} {{__('Insight')}}</h6>
                              <p><small>Integrate your {{__('Facebook Page')}} {{__('Insight')}} account to view campaigns, ad sets, page {{__('Insight')}} and demographics.</small></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>{{__('? Need Help')}}</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>{{__('Watch Video')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>{{__('View Demo')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>{{__('Read Help Article')}}</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="apple2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">{{__('Add New Connection')}} </h5>
            <span class="modal-header-fle3">
            <button type="button" class="close float-left btn btn-border border p-2 theme-color" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">Close</span>
            </button>
            </span>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-9 col-sm-8 col-12">
                  <div class="card w-75 mx-auto mb-3">
                     <div class="card-body text-center">
                        <img src="{!!asset('public/assets/image/apple.svg')!!}" class="mb-3" height="50" width="50">
                        <h5 class="font-weight-bold">Apple Ads</h5>
                        <p>{{__('Integrate your Facebook Ads account to view')}} <br>{{__('campaigns, ad sets, ads and demographics.')}}</p>
                     </div>
                  </div>
                  <div class="text-center">
                     <button class="btn btn-warning btn-sm">{{__('Connect New Account')}}</button>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>{{__('? Need Help')}}</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>{{__('Watch Video')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>{{__('View Demo')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>{{__('Read Help Article')}}</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade " id="twitter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">{{__('Add New Connection')}} </h5>
            <span class="modal-header-fle3">
            <button type="button" class="close float-left btn btn-border border p-2 theme-color" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">Close</span>
            </button>
            </span>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-9 col-sm-8 col-12">
                  <div class="card w-75 mx-auto mb-3">
                     <div class="card-body text-center">
                        <img src="{!!asset('public/assets/image/twitter.svg')!!}" class="mb-3" height="50" width="50">
                        <h5 class="font-weight-bold">{{__('Facefook Ads')}}</h5>
                        <p>{{__('Integrate your Facebook Ads account to view')}} <br>{{__('campaigns, ad sets, ads and demographics.')}}</p>
                     </div>
                  </div>
                  <div class="text-center">
                     <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#twitter1">>{{__('Connect New Account')}}</button>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>{{__('? Need Help')}}</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>{{__('Watch Video')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>{{__('View Demo')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>{{__('Read Help Article')}}</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="modal fade " id="twitter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">{{__('Add New Connection')}} </h5>
            <span class="modal-header-fle3">
            <button type="button" class="close float-left btn btn-border border p-2 theme-color" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">Close</span>
            </button>
            </span>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-9 col-sm-8 col-12">
                  <div class="card w-75 mx-auto mb-3">
                     <div class="card-body text-center">
                        <img src="{!!asset('public/assets/image/twitter.svg')!!}" class="mb-3" height="50" width="50">
                        <h5 class="font-weight-bold">Twitter {{__('Insight')}}</h5>
                        <p>{{__('Integrate your Facebook Ads account to view')}} <br>{{__('campaigns, ad sets, ads and demographics.')}}</p>
                     </div>
                  </div>
                  <div class="text-center">
                     <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#twitter4">{{__('Connect New Account')}}</button>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>{{__('? Need Help')}}</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>{{__('Watch Video')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>{{__('View Demo')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>{{__('Read Help Article')}}</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="modal fade tabindex-set9999" id="twitter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">{{__('Add New Connection')}} </h5>
            <span class="modal-header-fle3">
            <button type="button" class="close float-left btn btn-border border p-2 theme-color" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">Close</span>
            </button>
            </span>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-9 col-sm-8 col-12">
                  <div class="row">
                     <div class="col-lg-8 col-sm-8 col-12">
                        <div class="card mb-3">
                           <div class="card-header bg-gray text-right"><b>{{__('CONNECTIONS')}}</b></div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-lg-5 col-sm-12 col-12">
                                    <div class="help-form">
                                       <div class="help-form-col2">
                                          <button class="btn bgn-hlp-form waves-effect waves-light"><i class="fas fa-search"></i></button>
                                       </div>
                                       <div class="help-form-col1">
                                          <input type="text" class="form-control m-0" placeholder="Search">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-sm-6 col-12">
                                    <p class="font-weight-bold">{{__('Date Connected')}}</p>
                                 </div>
                                 <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                       <select class="form-control bg-gray">
                                          <option>{{__('Any')}}</option>
                                          <option>Option</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-fle-data-row">
                                 <div class="modal-fle-data-col text-right">
                                    <h6 class="font-weight-bold">{{__('Name')}}</h6>
                                 </div>
                                 <div class="modal-fle-data-col text-left">
                                    <h6 class="font-weight-bold">{{__('Accounts')}}</h6>
                                 </div>
                              </div>
                              <p class="text-center mt-3 mb-0"><a href="#" data-toggle="modal" data-target="#twitter2" class="btn btn-white btn-circle text-warning"><i class="fas fa-plus"></i></a></p>
                              <p class="text-center font-weight-bold">{{__('Add New')}}</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-6">
                              <p class="text-right mt-3"><a href="#" class="text-warning"><i class="fas fa-arrow-right ml-2"></i>Back</a></p>
                           </div>
                           <div class="col-6">
                              <p class="text-left"><a href="#"  class="btn btn-theme-color btn-sm">Connect</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4 col-12">
                        <div class="card top-city-scroller pl-1">
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/twitter.svg')!!}" class="mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">Twitter {{__('Insight')}}</h6>
                              <p><small>{{__('Integrate your Facebook Ads account to view campaigns, ad sets, ads and demographics.')}}</small></p>
                           </div>
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/twitter.svg')!!}" class="mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">Twitter {{__('Insight')}}</h6>
                              <p><small>{{__('Integrate your Facebook Ads account to view campaigns, ad sets, ads and demographics.')}}</small></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>{{__('? Need Help')}}</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>{{__('Watch Video')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>{{__('View Demo')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>{{__('Read Help Article')}}</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade " id="youtube2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">{{__('Add New Connection')}} </h5>
            <span class="modal-header-fle3">
            <button type="button" class="close float-left btn btn-border border p-2 theme-color" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">Close</span>
            </button>
            </span>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-9 col-sm-8 col-12">
                  <div class="card w-75 mx-auto mb-3">
                     <div class="card-body text-center">
                        <img src="{!!asset('public/assets/image/youtube.svg')!!}" class="mb-3" height="50" width="50">
                        <h5 class="font-weight-bold">{{__('Youtube Ads')}}</h5>
                        <p>{{__('Integrate your Facebook Ads account to view')}} <br>{{__('campaigns, ad sets, ads and demographics.')}}</p>
                     </div>
                  </div>
                  <div class="text-center">
                     <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#youtube1">{{__('Connect New Account')}}</button>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>{{__('? Need Help')}}</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>{{__('Watch Video')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>{{__('View Demo')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>{{__('Read Help Article')}}</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade " id="instagram2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">{{__('Add New Connection')}} </h5>
            <span class="modal-header-fle3">
            <button type="button" class="close float-left btn btn-border border p-2 theme-color" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">Close</span>
            </button>
            </span>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-9 col-sm-8 col-12">
                  <div class="card w-75 mx-auto mb-3">
                     <div class="card-body text-center">
                        <img src="{!!asset('public/assets/image/insta.svg')!!}" class="mb-3" height="50" width="50">
                        <h5 class="font-weight-bold">{{__('Instagram Ads')}}</h5>
                        <p>{{__('Integrate your Facebook Ads account to view')}} <br>{{__('campaigns, ad sets, ads and demographics.')}}</p>
                     </div>
                  </div>
                  <div class="text-center">
                     <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#instagram1">{{__('Connect New Account')}}</button>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>{{__('? Need Help')}}</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>{{__('Watch Video')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>{{__('View Demo')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>{{__('Read Help Article')}}</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="modal fade " id="instagram3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">{{__('Add New Connection')}} </h5>
            <span class="modal-header-fle3">
            <button type="button" class="close float-left btn btn-border border p-2 theme-color" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">Close</span>
            </button>
            </span>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-9 col-sm-8 col-12">
                  <div class="card w-75 mx-auto mb-3">
                     <div class="card-body text-center">
                        <img src="{!!asset('public/assets/image/insta.svg')!!}" class="mb-3" height="50" width="50">
                        <h5 class="font-weight-bold">Instagram {{__('Insight')}}</h5>
                        <p>Integrate your {{__('Instagram Ads')}} account to view <br>{{__('campaigns, ad sets, ads and demographics.')}}</p>
                     </div>
                  </div>
                  <div class="text-center">
                     <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#instagram4">{{__('Connect New Account')}}</button>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>{{__('? Need Help')}}</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>{{__('Watch Video')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>{{__('View Demo')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>{{__('Read Help Article')}}</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="modal fade tabindex-set9999" id="instagram4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">{{__('Add New Connection')}} </h5>
            <span class="modal-header-fle3">
            <button type="button" class="close float-left btn btn-border border p-2 theme-color" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">{{__('Close')}}</span>
            </button>
            </span>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-9 col-sm-8 col-12">
                  <div class="row">
                     <div class="col-lg-8 col-sm-8 col-12">
                        <div class="card mb-3">
                           <div class="card-header bg-gray text-right"><b>{{__('CONNECTIONS')}}</b></div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-lg-5 col-sm-12 col-12">
                                    <div class="help-form">
                                       <div class="help-form-col2">
                                          <button class="btn bgn-hlp-form waves-effect waves-light"><i class="fas fa-search"></i></button>
                                       </div>
                                       <div class="help-form-col1">
                                          <input type="text" class="form-control m-0" placeholder="Search">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-sm-6 col-12">
                                    <p class="font-weight-bold">{{__('Date Connected')}}</p>
                                 </div>
                                 <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                       <select class="form-control bg-gray">
                                          <option>{{__('Any')}}</option>
                                          <option>Option</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-fle-data-row">
                                 <div class="modal-fle-data-col text-right">
                                    <h6 class="font-weight-bold">{{__('Name')}}</h6>
                                 </div>
                                 <div class="modal-fle-data-col text-left">
                                    <h6 class="font-weight-bold">{{__('Accounts')}}</h6>
                                 </div>
                              </div>
                              <p class="text-center mt-3 mb-0"><a href="#" data-toggle="modal" data-target="#instagram2" class="btn btn-white btn-circle text-warning"><i class="fas fa-plus"></i></a></p>
                              <p class="text-center font-weight-bold">{{__('Add New')}}</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-6">
                              <p class="text-right mt-3"><a href="#" class="text-warning"><i class="fas fa-arrow-right ml-2"></i>Back</a></p>
                           </div>
                           <div class="col-6">
                              <p class="text-left"><a href="#"  class="btn btn-theme-color btn-sm">Connect</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4 col-12">
                        <div class="card top-city-scroller pl-1">
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/insta.svg')!!}" class="mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">Instagram {{__('Insight')}}</h6>
                              <p><small>{{__('Integrate your Facebook Ads account to view campaigns, ad sets, ads and demographics.')}}</small></p>
                           </div>
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/insta.svg')!!}" class="mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">Instagram {{__('Insight')}}</h6>
                              <p><small>{{__('Integrate your Facebook Ads account to view campaigns, ad sets, ads and demographics.')}}</small></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>{{__('? Need Help')}}</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>{{__('Watch Video')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>{{__('View Demo')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>{{__('Read Help Article')}}</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="google2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">{{__('Add New Connection')}} </h5>
            <span class="modal-header-fle3">
            <button type="button" class="close float-left btn btn-border border p-2 theme-color" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">{{__('Close')}}</span>
            </button>
            </span>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-9 col-sm-8 col-12">
                  <div class="card w-75 mx-auto mb-3">
                     <div class="card-body text-center">
                        <img src="{!!asset('public/assets/image/google.svg')!!}" class="mb-3" height="50" width="50">
                        <h5 class="font-weight-bold">{{__('Google Ads')}}</h5>
                        <p>{{__('Integrate your Facebook Ads account to view')}} <br>{{__('campaigns, ad sets, ads and demographics.')}}</p>
                     </div>
                  </div>
                  <div class="text-center">
                     <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#google1">{{__('Connect New Account')}}</button>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>{{__('? Need Help')}}</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>{{__('Watch Video')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>{{__('View Demo')}}</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>{{__('Read Help Article')}}</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Modal -->
<div class="modal fade" id="tempModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Facebook - Page Overview</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <h5 class="text-right">Connections</h5>
                <div class="row mb-3">
                    <div class="col-md-6 text-left">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fas fa-search"></i>
                          </span>
                          <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <select class="form-control">
                            <option value="any">Any</option>
                            <option value="option 1">Option 1</option>
                            <option value="option 2">Option 2</option>
                            <option value="option 3">Option 3</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex justifyContent bob mb-3">
                    <p style="color:#000000;font-size:14px;font-weight:600">Name</p>
                    <p style="color:#000000;font-size:14px;font-weight:600">Accounts</p>
                </div>
                <table class="tbls mb-5">
                    <tr>
                        <td>
                            <select class="nm">
                                <option>Jimbo Brown</option>
                                <option>Robert</option>
                                <option>Thomson</option>
                            </select>
                        </td>
                        <td>تھامسن</td>
                        <td class="text-left">1 Account</td>
                    </tr>
                </table>
                <div class="text-left d-flex pt-3 mt-5" style="justify-content: end;border-top:1px solid #cccccc;">
                    <div class="d-flex justifyContent">
                        <a href="#"  data-toggle="modal" data-target="#facebook2" class="">Add New <i class="fas fa-plus addButton"></i></a>
                    </div>
                    <a href="javascript:void(0);" class="conBtn" style="border-radius:6px;">Connect</a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 text-right">
                <div class="leftCan">
                    <div class="fabS mb-4">
                        <h4 class="overV"> Dashboard Overview <i class="fab fa-facebook ov"></i></h4>
                        <p>Over facebook page performance dashboard template offers on in deapth look into the performance of a Facebook page</p>
                    </div>
                    <h3 class="f20">?Need Help</h3>
                    <div class="mb-3">
                      <div class="input-container">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=pBFQdxA-apI"><i class="fas fa-play" style="color:#f48a1d;"></i> Watch Video</a>
                      </div>
                    
                      <div class="input-container">
                        <a href="javascript:void(0);"><i class="fas fa-search" style="color:#f48a1d;"></i> View Demo</a>
                      </div>
                    
                      <div class="input-container">
                        <a href="javascript:void(0);"><i class="fas fa-question-circle" style="color:#f48a1d;"></i> Read Help Article</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!--<div class="modal-footer">-->
      <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
      <!--  <button type="button" class="btn btn-primary">Save changes</button>-->
      <!--</div>-->
    </div>
  </div>
</div>
@endsection
