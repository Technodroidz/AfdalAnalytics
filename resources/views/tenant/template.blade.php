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
                     Tamplates
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
                        <a class="nav-link active" data-toggle="tab" href="#my-temp">My Templates</a>
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
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#coming-temp">Coming Soon</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-12">
               <div class="tab-content">
                  <div class="tab-pane active" id="my-temp">
                     <div class="row">
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 mb-3 text-center">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox1" checked />
                                 <label for="myCheckbox1">
                                 <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                 </label>
                              </div>
                           </div>
                           <h6 class="text-center"><b>Facebook Page Insight</b></h6>
                           <p class="m-0 text-center">Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page</p>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="all-temp">
                     <div class="row">
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox15" />
                                 <label for="myCheckbox15">
                                 <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                 </label>
                              </div>
                           </div>
                           <h6 class="text-center"><b>Facebook Page Insight</b></h6>
                           <p class="m-0 text-center">Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page</p>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox2" />
                                 <label for="myCheckbox2">
                                 <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                 </label>
                              </div>
                           </div>
                           <h6 class="text-center"><b>Facebook Page Insight</b></h6>
                           <p class="m-0 text-center">Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page</p>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox3" />
                                 <label for="myCheckbox3">
                                 <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                 </label>
                              </div>
                           </div>
                           <h6 class="text-center"><b>Facebook Page Insight</b></h6>
                           <p class="m-0 text-center">Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page</p>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox4" />
                                 <label for="myCheckbox4">
                                 <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                 </label>
                              </div>
                           </div>
                           <h6 class="text-center"><b>Facebook Page Insight</b></h6>
                           <p class="m-0 text-center">Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page</p>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox5" />
                                 <label for="myCheckbox5">
                                 <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                 </label>
                              </div>
                           </div>
                           <h6 class="text-center"><b>Twitter Performance</b></h6>
                           <p class="m-0 text-center">Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page</p>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox6" />
                                 <label for="myCheckbox6">
                                 <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                 </label>
                              </div>
                           </div>
                           <h6 class="text-center"><b>Twitter KPI</b></h6>
                           <p class="m-0 text-center">Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page</p>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="social-temp">
                     <div class="row">
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox7" checked />
                                 <label for="myCheckbox7">
                                 <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                 </label>
                              </div>
                           </div>
                           <h6 class="text-center"><b>Facebook Page Insight</b></h6>
                           <p class="m-0 text-center">Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page</p>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox8" checked />
                                 <label for="myCheckbox8">
                                 <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                 </label>
                              </div>
                           </div>
                           <h6 class="text-center"><b>Facebook Post</b></h6>
                           <p class="m-0 text-center">Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page</p>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox9" checked />
                                 <label for="myCheckbox9">
                                 <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                 </label>
                              </div>
                           </div>
                           <h6 class="text-center"><b>Twitter KPI</b></h6>
                           <p class="m-0 text-center">Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page</p>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox10" checked />
                                 <label for="myCheckbox10">
                                 <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                 </label>
                              </div>
                           </div>
                           <h6 class="text-center"><b>Instagram</b></h6>
                           <p class="m-0 text-center">Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page</p>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox11" />
                                 <label for="myCheckbox11">
                                 <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                 </label>
                              </div>
                           </div>
                           <h6 class="text-center"><b>Twitter Performance</b></h6>
                           <p class="m-0 text-center">Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page</p>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="ads-temp">
                     <div class="row">
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox12" />
                                 <label for="myCheckbox12">
                                 <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                 </label>
                              </div>
                           </div>
                           <h6 class="text-center"><b>Facebook Ads</b></h6>
                           <p class="m-0 text-center">Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page</p>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox13" />
                                 <label for="myCheckbox13">
                                 <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                 </label>
                              </div>
                           </div>
                           <h6 class="text-center"><b>Facebook Ads</b></h6>
                           <p class="m-0 text-center">Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page</p>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="app-temp">
                     <div class="row">
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox14" />
                                 <label for="myCheckbox14">
                                 <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                 </label>
                              </div>
                           </div>
                           <h6 class="text-center"><b>Google Play Store Performance</b></h6>
                           <p class="m-0 text-center">Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page</p>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade text-right" id="coming-temp">No Data Available ...</div>
               </div>
            </div>
         </div>
      </div>
   </main>
</div>
@endsection