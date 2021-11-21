@extends('layout.userhead')
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
                     Connections
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
                           Notification<br>
                           <span><small>Lorem ipsum dolor sit amet</small></span>
                        </a>
                        <a class="dropdown-item" href="#">Notification<br>
                           <span><small>Lorem ipsum dolor sit amet</small></span></a>
                        <a class="dropdown-item" href="#">Notification<br>
                           <span><small>Lorem ipsum dolor sit amet</small></span></a>
                     </div>
                  </li>

                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <img src="{!!asset('public/assets/image/user.jpg')!!}" class="rounded-circle" height="40" width="40">
                     </a>
                     <div class="dropdown-menu shadow border-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">
                           Profile
                        </a>
                        <a class="dropdown-item" href="#">Log Out</a>
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
                        <a class="nav-link active" data-toggle="tab" href="#my-connection">My Connections</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#all-temp">All</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#social-temp">Social Media</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#ads-temp">Ads</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#app-temp">App</a>
                     </li>
                     <li class="nav-item disabled">
                        <a class="nav-link" data-toggle="tab" href="#coming-temp">Coming Soon</a>
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
                                 <input type="checkbox" id="myCheckbox1" checked />
                                 <label for="myCheckbox1" class="m-0">
                                    <div class="icon-details text-center shadow rounded bg-white pt-3 pb-3 p-1 mb-3 font-weight-bold">
                                       <img src="{!!asset('public/assets/image/facebook.svg')!!}" class="mb-2" height="40" width="40"><br>Facebook Page <br> Insight
                                    </div>
                                 </label>
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow-0 rounded-0 bg-transparent pt-3 pb-3 p-1 mb-3 font-weight-bold">
                                 <a href="#"  data-toggle="modal" data-target="#facebook2" class="btn btn-white btn-circle text-warning waves-effect waves-light"><i class="fas fa-plus"></i></a>
                              </div>
                           </div>
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
                                    <div class="icon-details text-center shadow rounded bg-white pt-3 pb-3 p-1 mb-3 font-weight-bold">
                                       <img src="{!!asset('public/assets/image/facebook.svg')!!}" class="mb-2" height="40" width="40"><br>Facebook Page <br> Insight
                                    </div>
                                 </label>
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/facebook.svg')!!}" class="mb-2" height="40" width="40"><br>Facebook Ads
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/apple.svg')!!}" class="mb-2" height="40" width="40"><br>Apple App Store
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/twitter.svg')!!}" class="mb-2" height="40" width="40"><br>Twitter Insight
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/twitter.svg')!!}" class="mb-2" height="40" width="40"><br>Twitter Ads
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/youtube.svg')!!}" class="mb-2" height="40" width="40"><br>Youtube Insight
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/youtube.svg')!!}" class="mb-2" height="40" width="40"><br>Youtube Ads
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/linkedin.svg')!!}" class="mb-2" height="40" width="40"><br>Linkedin Page Insight
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/linkedin.svg')!!}" class="mb-2" height="40" width="40"><br>Linkedin Ads
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/googleplay.svg')!!}" class="mb-2" height="40" width="40"><br>Google Play <br> Store
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/insta.svg')!!}" class="mb-2" height="40" width="40"><br>Instagram Insight
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/insta.svg')!!}" class="mb-2" height="40" width="40"><br>Instagram Ads
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/tiktok.svg')!!}" class="mb-2" height="40" width="40"><br>TikTok Insight
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/tiktok.svg')!!}" class="mb-2" height="40" width="40"><br>TikTok Ads
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/ama.svg')!!}" class="mb-2" height="40" width="40"><br>Amazon Insight
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/ama.svg')!!}" class="mb-2" height="40" width="40"><br>Amazon Ads
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/pintrest.svg')!!}" class="mb-2" height="40" width="40"><br>Pinterest Insight
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/pintrest.svg')!!}" class="mb-2" height="40" width="40"><br>Pinterest Ads
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/snapchat.svg')!!}" class="mb-2" height="40" width="40"><br>Snapchat Insight
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/snapchat.svg')!!}" class="mb-2" height="40" width="40"><br>Snapchat Ads
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/google.svg')!!}" class="mb-2" height="40" width="40"><br>Google Search
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/woo.svg')!!}" class="mb-2" height="40" width="40"><br>Woocommerce
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/shopify.svg')!!}" class="mb-2" height="40" width="40"><br>Shopify
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/bing.svg')!!}" class="mb-2" height="40" width="40"><br>Bing Ads
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/googleana.svg')!!}" class="mb-2" height="40" width="40"><br>Google Analytics
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
                                       <img src="{!!asset('public/assets/image/facebook.svg')!!}" class="mb-2" height="40" width="40"><br>Facebook Page <br> Insight
                                    </div>
                                 </label>
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/twitter.svg')!!}" class="mb-2" height="40" width="40"><br>Twitter Insight
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/youtube.svg')!!}" class="mb-2" height="40" width="40"><br>Youtube
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/linkedin.svg')!!}" class="mb-2" height="40" width="40"><br>Linkedin Page <br> Insight
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/insta.svg')!!}" class="mb-2" height="40" width="40"><br>Instagram Insight
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/tiktok.svg')!!}" class="mb-2" height="40" width="40"><br>TikTok Insight
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/pintrest.svg')!!}" class="mb-2" height="40" width="40"><br>Pinterest
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/snapchat.svg')!!}" class="mb-2" height="40" width="40"><br>Snapchat Insight
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
                                 <img src="{!!asset('public/assets/image/facebook.svg')!!}" class="mb-2" height="40" width="40"><br>Facefook Ads
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/twitter.svg')!!}" class="mb-2" height="40" width="40"><br>Twitter Ads
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/youtube.svg')!!}" class="mb-2" height="40" width="40"><br>Youtube Ads
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/linkedin.svg')!!}" class="mb-2" height="40" width="40"><br>Linkedin Ads
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/insta.svg')!!}" class="mb-2" height="40" width="40"><br>Instagram Ads
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/tiktok.svg')!!}" class="mb-2" height="40" width="40"><br>TikTok Ads
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/ama.svg')!!}" class="mb-2" height="40" width="40"><br>Amazon Ads
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/pintrest.svg')!!}" class="mb-2" height="40" width="40"><br>Pinterest Ads
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/snapchat.svg')!!}" class="mb-2" height="40" width="40"><br>Snapchat Ads
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/snapchat.svg')!!}" class="mb-2" height="40" width="40"><br>Snapchat Insight
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
                                 <img src="{!!asset('public/assets/image/apple.svg')!!}" class="mb-2" height="40" width="40"><br>Apple App Store
                              </div>
                           </div>
                           <div class="col-lg-2 col-sm-4 col-6">
                              <div class="icon-details text-center shadow rounded bg-white p-1 pt-3 pb-3 mb-3 font-weight-bold">
                                 <img src="{!!asset('public/assets/image/googleplay.svg')!!}" class="mb-2" height="40" width="40"><br>Google Play <br> Store
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
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">Add New Connection</h5>
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
                           <div class="card-header bg-gray text-right"><b>CONNECTIONS</b></div>
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
                                    <p class="font-weight-bold">Date Connected</p>
                                 </div>
                                 <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                       <select class="form-control bg-gray">
                                          <option>Any</option>
                                          <option>Option</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-fle-data-row">
                                 <div class="modal-fle-data-col text-right">
                                    <h6 class="font-weight-bold">Name</h6>
                                 </div>
                                 <div class="modal-fle-data-col text-left">
                                    <h6 class="font-weight-bold">Accounts</h6>
                                 </div>
                              </div>
                              <p class="text-center mt-3 mb-0"><a href="#" data-toggle="modal" data-target="#facebook2" class="btn btn-white btn-circle text-warning"><i class="fas fa-plus"></i></a></p>
                              <p class="text-center font-weight-bold">Add New</p>
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
                              <img src="{!!asset('public/assets/image/fb.png')!!}" class="rounded-circle mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">Facebook Ads</h6>
                              <p><small>Integrate your Facebook ads account to view campaigns, ad sets, ads and demographics.</small></p>
                           </div>
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/fb.png')!!}" class="rounded-circle mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">Facebook Ads</h6>
                              <p><small>Integrate your Facebook ads account to view campaigns, ad sets, ads and demographics.</small></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>? Need Help</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>Watch Video</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>View Demo</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>Read Help Article</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="apple1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">Add New Connection</h5>
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
                           <div class="card-header bg-gray text-right"><b>CONNECTIONS</b></div>
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
                                    <p class="font-weight-bold">Date Connected</p>
                                 </div>
                                 <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                       <select class="form-control bg-gray">
                                          <option>Any</option>
                                          <option>Option</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-fle-data-row">
                                 <div class="modal-fle-data-col text-right">
                                    <h6 class="font-weight-bold">Name</h6>
                                 </div>
                                 <div class="modal-fle-data-col text-left">
                                    <h6 class="font-weight-bold">Accounts</h6>
                                 </div>
                              </div>
                              <p class="text-center mt-3 mb-0"><a href="#" data-toggle="modal" data-target="#apple2" class="btn btn-white btn-circle text-warning"><i class="fas fa-plus"></i></a></p>
                              <p class="text-center font-weight-bold">Add New</p>
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
                              <img src="{!!asset('public/assets/image/apple.png')!!}" class="rounded-circle mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">Apple Ads</h6>
                              <p><small>Integrate your Facebook ads account to view campaigns, ad sets, ads and demographics.</small></p>
                           </div>
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/apple.png')!!}" class="rounded-circle mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">Apple Ads</h6>
                              <p><small>Integrate your Facebook ads account to view campaigns, ad sets, ads and demographics.</small></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>? Need Help</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>Watch Video</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>View Demo</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>Read Help Article</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="twitter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">Add New Connection</h5>
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
                           <div class="card-header bg-gray text-right"><b>CONNECTIONS</b></div>
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
                                    <p class="font-weight-bold">Date Connected</p>
                                 </div>
                                 <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                       <select class="form-control bg-gray">
                                          <option>Any</option>
                                          <option>Option</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-fle-data-row">
                                 <div class="modal-fle-data-col text-right">
                                    <h6 class="font-weight-bold">Name</h6>
                                 </div>
                                 <div class="modal-fle-data-col text-left">
                                    <h6 class="font-weight-bold">Accounts</h6>
                                 </div>
                              </div>
                              <p class="text-center mt-3 mb-0"><a href="#" data-toggle="modal" data-target="#twitter2" class="btn btn-white btn-circle text-warning"><i class="fas fa-plus"></i></a></p>
                              <p class="text-center font-weight-bold">Add New</p>
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
                              <img src="{!!asset('public/assets/image/twitter.png')!!}" class="rounded-circle mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">Twitter Ads</h6>
                              <p><small>Integrate your Facebook ads account to view campaigns, ad sets, ads and demographics.</small></p>
                           </div>
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/twitter.png')!!}" class="rounded-circle mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">Twitter Ads</h6>
                              <p><small>Integrate your Facebook ads account to view campaigns, ad sets, ads and demographics.</small></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>? Need Help</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>Watch Video</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>View Demo</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>Read Help Article</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="youtube1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">Add New Connection</h5>
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
                           <div class="card-header bg-gray text-right"><b>CONNECTIONS</b></div>
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
                                    <p class="font-weight-bold">Date Connected</p>
                                 </div>
                                 <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                       <select class="form-control bg-gray">
                                          <option>Any</option>
                                          <option>Option</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-fle-data-row">
                                 <div class="modal-fle-data-col text-right">
                                    <h6 class="font-weight-bold">Name</h6>
                                 </div>
                                 <div class="modal-fle-data-col text-left">
                                    <h6 class="font-weight-bold">Accounts</h6>
                                 </div>
                              </div>
                              <p class="text-center mt-3 mb-0"><a href="#" data-toggle="modal" data-target="#youtube2" class="btn btn-white btn-circle text-warning"><i class="fas fa-plus"></i></a></p>
                              <p class="text-center font-weight-bold">Add New</p>
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
                              <img src="{!!asset('public/assets/image/youtube.png')!!}" class="rounded-circle mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">Youtube Ads</h6>
                              <p><small>Integrate your Facebook ads account to view campaigns, ad sets, ads and demographics.</small></p>
                           </div>
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/youtube.png')!!}" class="rounded-circle mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">Youtube Ads</h6>
                              <p><small>Integrate your Facebook ads account to view campaigns, ad sets, ads and demographics.</small></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>? Need Help</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>Watch Video</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>View Demo</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>Read Help Article</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="instagram1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">Add New Connection</h5>
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
                           <div class="card-header bg-gray text-right"><b>CONNECTIONS</b></div>
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
                                    <p class="font-weight-bold">Date Connected</p>
                                 </div>
                                 <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                       <select class="form-control bg-gray">
                                          <option>Any</option>
                                          <option>Option</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-fle-data-row">
                                 <div class="modal-fle-data-col text-right">
                                    <h6 class="font-weight-bold">Name</h6>
                                 </div>
                                 <div class="modal-fle-data-col text-left">
                                    <h6 class="font-weight-bold">Accounts</h6>
                                 </div>
                              </div>
                              <p class="text-center mt-3 mb-0"><a href="#" data-toggle="modal" data-target="#instagram2" class="btn btn-white btn-circle text-warning"><i class="fas fa-plus"></i></a></p>
                              <p class="text-center font-weight-bold">Add New</p>
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
                              <img src="{!!asset('public/assets/image/insta.png')!!}" class="rounded-circle mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">Instagram Ads</h6>
                              <p><small>Integrate your Facebook ads account to view campaigns, ad sets, ads and demographics.</small></p>
                           </div>
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/insta.png')!!}" class="rounded-circle mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">Instagram Ads</h6>
                              <p><small>Integrate your Facebook ads account to view campaigns, ad sets, ads and demographics.</small></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>? Need Help</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>Watch Video</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>View Demo</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>Read Help Article</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="google1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">Add New Connection</h5>
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
                           <div class="card-header bg-gray text-right"><b>CONNECTIONS</b></div>
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
                                    <p class="font-weight-bold">Date Connected</p>
                                 </div>
                                 <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                       <select class="form-control bg-gray">
                                          <option>Any</option>
                                          <option>Option</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-fle-data-row">
                                 <div class="modal-fle-data-col text-right">
                                    <h6 class="font-weight-bold">Name</h6>
                                 </div>
                                 <div class="modal-fle-data-col text-left">
                                    <h6 class="font-weight-bold">Accounts</h6>
                                 </div>
                              </div>
                              <p class="text-center mt-3 mb-0"><a href="#" data-toggle="modal" data-target="#google2" class="btn btn-white btn-circle text-warning"><i class="fas fa-plus"></i></a></p>
                              <p class="text-center font-weight-bold">Add New</p>
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
                              <img src="{!!asset('public/assets/image/google.png')!!}" class="rounded-circle mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">Google Ads</h6>
                              <p><small>Integrate your Facebook ads account to view campaigns, ad sets, ads and demographics.</small></p>
                           </div>
                           <div class="card-body text-center border">
                              <img src="{!!asset('public/assets/image/google.png')!!}" class="rounded-circle mb-3" height="50" width="50">
                              <h6 class="font-weight-bold">Google Ads</h6>
                              <p><small>Integrate your Facebook ads account to view campaigns, ad sets, ads and demographics.</small></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>? Need Help</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>Watch Video</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>View Demo</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>Read Help Article</b></a></p>
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
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">Add New Connection</h5>
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
                        <img src="{!!asset('public/assets/image/fb.png')!!}" class="rounded-circle mb-3" height="50" width="50">
                        <h5 class="font-weight-bold">Facebook Ads</h5>
                        <p>Integrate your Facebook ads account to view <br>campaigns, ad sets, ads and demographics.</p>
                     </div>
                  </div>
                  <div class="text-center">
                     <button class="btn btn-warning btn-sm"  data-toggle="modal" data-target="#facebook1">Connect New Account</button>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>? Need Help</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>Watch Video</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>View Demo</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>Read Help Article</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade tabindex-set9999" id="apple2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">Add New Connection</h5>
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
                        <img src="{!!asset('public/assets/image/apple.png')!!}" class="rounded-circle mb-3" height="50" width="50">
                        <h5 class="font-weight-bold">Apple Ads</h5>
                        <p>Integrate your Facebook ads account to view <br>campaigns, ad sets, ads and demographics.</p>
                     </div>
                  </div>
                  <div class="text-center">
                     <button class="btn btn-warning btn-sm">Connect New Account</button>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>? Need Help</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>Watch Video</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>View Demo</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>Read Help Article</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade tabindex-set9999" id="twitter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">Add New Connection</h5>
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
                        <img src="{!!asset('public/assets/image/twitter.png')!!}" class="rounded-circle mb-3" height="50" width="50">
                        <h5 class="font-weight-bold">Twitter Ads</h5>
                        <p>Integrate your Facebook ads account to view <br>campaigns, ad sets, ads and demographics.</p>
                     </div>
                  </div>
                  <div class="text-center">
                     <button class="btn btn-warning btn-sm">Connect New Account</button>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>? Need Help</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>Watch Video</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>View Demo</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>Read Help Article</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade tabindex-set9999" id="youtube2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">Add New Connection</h5>
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
                        <img src="{!!asset('public/assets/image/youtube.png')!!}" class="rounded-circle mb-3" height="50" width="50">
                        <h5 class="font-weight-bold">Youtube Ads</h5>
                        <p>Integrate your Facebook ads account to view <br>campaigns, ad sets, ads and demographics.</p>
                     </div>
                  </div>
                  <div class="text-center">
                     <button class="btn btn-warning btn-sm">Connect New Account</button>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>? Need Help</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>Watch Video</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>View Demo</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>Read Help Article</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade tabindex-set9999" id="instagram2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">Add New Connection</h5>
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
                        <img src="{!!asset('public/assets/image/insta.png')!!}" class="rounded-circle mb-3" height="50" width="50">
                        <h5 class="font-weight-bold">Instagram Ads</h5>
                        <p>Integrate your Facebook ads account to view <br>campaigns, ad sets, ads and demographics.</p>
                     </div>
                  </div>
                  <div class="text-center">
                     <button class="btn btn-warning btn-sm">Connect New Account</button>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>? Need Help</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>Watch Video</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>View Demo</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>Read Help Article</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade tabindex-set9999" id="google2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">Add New Connection</h5>
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
                        <img src="{!!asset('public/assets/image/google.png')!!}" class="rounded-circle mb-3" height="50" width="50">
                        <h5 class="font-weight-bold">Google Ads</h5>
                        <p>Integrate your Facebook ads account to view <br>campaigns, ad sets, ads and demographics.</p>
                     </div>
                  </div>
                  <div class="text-center">
                     <button class="btn btn-warning btn-sm">Connect New Account</button>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-4 col-12">
                  <div class="text-right border-right h-100 p-3">
                     <p class="m-1 font-weight-bold"><b>? Need Help</b></p>
                     <p class="m-0"><i class="fas fa-video ml-2"></i><a href="#" class="text-warning"><b>Watch Video</b></a></p>
                     <p class="m-0"><i class="fas fa-search ml-2"></i><a href="#" class="text-warning"><b>View Demo</b></a></p>
                     <p class="m-0"><i class="fas fa-info-circle ml-2"></i><a href="#" class="text-warning"><b>Read Help Article</b></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
