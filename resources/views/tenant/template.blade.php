@extends('layout.userhead')
<style>
    .card {
        border-radius: 6px!important;
        position:relative;
    }
    .image-checkbox label{position:inherit!important;}
    .image-checkbox label:before{bottom:10px;top: inherit!important;}
    .modal-title{font-size:18px;text-align:center;width:100%;}
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
                     {{__('Tamplates')}}
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
                        <a class="nav-link active" data-toggle="tab" href="#my-temp">{{__('My Templates')}}</a>
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
                  <div class="tab-pane active" id="my-temp">
                     <div class="row">
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 mb-3 text-center">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox1" />
                                 <label for="myCheckbox1">
                                 <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                 
                                 <div class="text-content">
                                   <h6 class="text-right"><b>{{__('Facebook Page Insight')}}</b></h6>
                                   <p class="m-0 text-right">{{__('Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page')}}</p>
                                </div>
                                </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="all-temp">
                     <div class="row">
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox15" />
                                 <label for="myCheckbox1">
                                     <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                     <div class="text-content">
                                       <h6 class="text-right"><b>{{__('Facebook Page Insight')}}</b></h6>
                                       <p class="m-0 text-right">{{__('Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page')}}</p>
                                    </div>
                                </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox2" />
                                 <label for="myCheckbox2">
                                     <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                     <div class="text-content">
                                       <h6 class="text-right"><b>{{__('Facebook Page Insight')}}</b></h6>
                                       <p class="m-0 text-right">{{__('Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page')}}</p>
                                    </div>
                                </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox3" />
                                 <label for="myCheckbox3">
                                     <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                     <div class="text-content">
                                       <h6 class="text-right"><b>{{__('Facebook Page Insight')}}</b></h6>
                                       <p class="m-0 text-right">{{__('Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page')}}</p>
                                    </div>
                                </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox4" />
                                 <label for="myCheckbox4">
                                     <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                     <div class="text-content">
                                       <h6 class="text-right"><b>{{__('Facebook Page Insight')}}</b></h6>
                                       <p class="m-0 text-right">{{__('Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page')}}</p>
                                    </div>
                                </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox5" />
                                 <label for="myCheckbox5">
                                     <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                     <div class="text-content">
                                       <h6 class="text-right"><b>{{__('Twitter Performance')}}</b></h6>
                                       <p class="m-0 text-right">{{__('Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page')}}</p>
                                     </div>
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox6" />
                                 <label for="myCheckbox6">
                                    <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                     <div class="text-content">
                                        <h6 class="text-right"><b>{{__('Twitter KPI')}}</b></h6>
                                        <p class="m-0 text-right">{{__('Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page')}}</p>
                                     </div>
                                 </label>
                              </div>
                           </div>
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
                                     <div class="text-content">
                                       <h6 class="text-right"><b>{{__('Facebook Page Insight')}}</b></h6>
                                       <p class="m-0 text-right">{{__('Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page')}}</p>
                                     </div>
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox8" checked />
                                 <label for="myCheckbox8">
                                     <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                     <div class="text-content">
                                       <h6 class="text-right"><b>{{__('Facebook Page Insight')}}</b></h6>
                                       <p class="m-0 text-right">{{__('Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page')}}</p>
                                    </div>
                                </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox9" checked />
                                 <label for="myCheckbox9">
                                    <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                     <div class="text-content">
                                        <h6 class="text-right"><b>{{__('Twitter KPI')}}</b></h6>
                                        <p class="m-0 text-right">{{__('Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page')}}</p>
                                     </div>
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox10" checked />
                                 <label for="myCheckbox10">
                                    <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                     <div class="text-content">
                                        <h6 class="text-right"><b>{{__('Instagram')}}</b></h6>
                                        <p class="m-0 text-right">{{__('Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page')}}</p>
                                     </div>
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox11" />
                                 <label for="myCheckbox11">
                                    <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                     <div class="text-content">
                                        <h6 class="text-right"><b>{{__('Twitter Performance')}}</b></h6>
                                        <p class="m-0 text-right">{{__('Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page')}}</p>
                                     </div>
                                 </label>
                              </div>
                           </div>
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
                                     <div class="text-content">
                                        <h6 class="text-right"><b>{{__('Facebook Ads')}}</b></h6>
                                        <p class="m-0 text-right">{{__('Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page')}}</p>
                                     </div>
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox13" />
                                 <label for="myCheckbox13">
                                    <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                     <div class="text-content">
                                        <h6 class="text-right"><b>{{__('Twitter KPI')}}</b></h6>
                                        <p class="m-0 text-right">{{__('Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page')}}</p>
                                     </div>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="app-temp">
                     <div class="row">
                        <div class="col-lg-3 col-sm-4 col-12">
                           <div class="card my-template mt-3 text-center mb-3">
                              <div class="card-body image-checkbox p-0">
                                 <input type="checkbox" id="myCheckbox14" />
                                 <label for="myCheckbox12">
                                    <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100 border mb-2">
                                     <div class="text-content">
                                       <h6 class="text-center"><b>{{__('Google Play Store Performance')}}</b></h6>
                                       <p class="m-0 text-center">{{__('Relevant KPIs and Metrics Number of Fans, Follower Demographics, Page Views by Sources, Actions on Page')}}</p>
                                     </div>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade text-right" id="coming-temp">{{__('No Data Available ...')}}</div>
               </div>
            </div>
         </div>
      </div>
   </main>
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
                <div class="imgModal">
                    <img src="{!!asset('public/assets/image/dashboard.png')!!}" class="img-fluid w-100">
                </div>
            </div>
            <div class="col-md-4 col-xs-12 text-right">
                <div class="leftCan">
                    <div class="fabS mb-4">
                        <h4 class="overV"> Dashboard Overview <i class="fab fa-facebook ov"></i></h4>
                        <p>Over facebook page performance dashboard template offers on in deapth look into the performance of a Facebook page</p>
                    </div>
                    <h3 class="f20">Select one of your pages</h3>
                    <form class="mb-5">
                      <div class="input-container">
                        <input type="checkbox" name="checkbox-example" id="checkbox-button-1" checked />
                        <label for="checkbox-button-1">Page 1</label>
                      </div>
                    
                      <div class="input-container">
                        <input type="checkbox" name="checkbox-example" id="checkbox-button-2" />
                        <label for="checkbox-button-2">Page 2</label>
                      </div>
                    
                      <div class="input-container">
                        <input type="checkbox" name="checkbox-example" id="checkbox-button-3" />
                        <label for="checkbox-button-3">Page 3</label>
                      </div>
                    </form>
                    <div class="text-center mb-3">
                        <a href="javascript:void(0);" class="Add-dash"> Add Dashboard</a>
                    </div>
                    <div class="text-center">
                        <p style="margin:0">
                            Can't find what you're <br/>looking for
                        </p>
                        <a href="javascript:void(0);" class="addConn">Add New Connector</a>
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