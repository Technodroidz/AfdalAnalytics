@extends('layout.userhead')
@section('title', 'User Home')
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Launch demo modal
      </button>
<div class="page-wrapper chiller-theme toggled">
   @section('content')
   @extends('layout.usersidenav')
   <main class="page-content pb-5">
      <div class="container-fluid">
         <nav class="navbar navbar-expand-lg bg-transparent user-navbar pl-0 pr-0">
            <div class="container-fluid">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item head-list-heading">
                     Settings
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
                              <a class="nav-link active" data-toggle="tab" href="#my-profile">Profile</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#billing">Billing</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#users">Users</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12">
                     <div class="tab-content">
                        <div class="tab-pane active" id="my-profile">
                           <div class="row">
                              <div class="col-lg-12 col-sm-12 col-12">
                              <form action="{{url('updateprofile')}}" method="POST" enctype='multipart/form-data'>
                                @csrf
                                    <div class="card mt-3 text-center">
                                       <div class="card-header bg-gray text-right"><b>Account</b></div>
                                       <div class="card-body">
                                          <div class="row">
                                             <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                   <label class="d-block text-right"><small>Company Name</small></label>
                                                   <input type="text" name="company_name" class="form-control bg-gray font-weight-bold border" placeholder="John Doe">
                                                </div>
                                             </div>
                                             <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                   <label class="d-block text-right"><small>Language</small></label>
                                                   <select class="form-control bg-gray font-weight-bold border" name="language">
                                                      <option selected>Arabic (AR)</option>
                                                      <option>English</option>
                                                      <option>Hindi</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                   <label class="d-block text-right"><small>Country</small></label>
                                                   <input type="text" name="country" class="form-control bg-gray font-weight-bold border" placeholder="Qatar">
                                                </div>
                                             </div>
                                             <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                   <label class="d-block text-right"><small>City</small></label>
                                                   <input type="text" name="city" class="form-control bg-gray font-weight-bold border" placeholder="Doha">
                                                </div>
                                             </div>
                                             <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                   <label class="d-block text-right"><small>Street Address</small></label>
                                                   <input type="text" name="street_address" class="form-control bg-gray font-weight-bold border" placeholder="24 bin mhamoud street">
                                                </div>
                                             </div>
                                             <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                   <label class="d-block text-right"><small>Postal Code</small></label>
                                                   <input type="text" name="postal_code" class="form-control bg-gray font-weight-bold border" placeholder="23424">
                                                </div>
                                             </div>
                                             <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                   <label class="d-block text-right"><small>Phone Number</small></label>
                                                   <input type="text" name="phone" class="form-control bg-gray font-weight-bold border" placeholder="+974 4456280">
                                                </div>
                                             </div>
                                             <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                   <label class="d-block text-right"><small>Email</small></label>
                                                   <input type="email" name="email" class="form-control bg-gray font-weight-bold border" placeholder="info@shnuelshoe.com">
                                                </div>
                                             </div>
                                             <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                   <label class="d-block text-right"><small>Timezone</small></label>
                                                   <input type="text" name="timezone" class="form-control bg-gray font-weight-bold border" placeholder="Asia/Qatar GMT -3">
                                                </div>
                                             </div>
                                             <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                   <label class="d-block text-right"><small>website</small></label>
                                                   <input type="text" name="website_url" class="form-control bg-gray font-weight-bold border" placeholder="www.shnueljoe.com">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <button type="submit" class="btn btn-warning btn-md mt-3">Save</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="billing">
                           <div class="row">
                              <div class="col-lg-4 col-sm-6 col-12">
                                 <div class="card my-template mt-3 text-center">
                                    <div class="card-header bg-gray text-right"><b>BILLING & PAYMENT</b></div>
                                    <div class="card-body">
                                       <div class="payment-setting">
                                          <div class="p-setting-1">
                                             <p class="text-center m-0"><b><i class="fab fa-paypal"></i></b></p>
                                          </div>
                                          <div class="p-setting-2">
                                             <p class="text-right m-0">PayPal</p>
                                          </div>
                                       </div>
                                       <div class="payment-setting">
                                          <div class="p-setting-1">
                                             <p class="text-center m-0"><b><i class="fas fa-calendar-week"></i></b></p>
                                          </div>
                                          <div class="p-setting-2">
                                             <p class="text-right m-0">$100/month Next payment on Oct. 13,2021 Annual plan, paid monthly</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <button class="btn btn-theme-color mt-3 btn-sm" data-toggle="modal" data-target="#exampleModal4">Edit billing and payment</button>
                              </div>
                              <div class="col-lg-4 col-sm-6 col-12">
                                 <div class="card my-template mt-3 text-center">
                                    <div class="card-header bg-gray text-right"><b>YOUR SUBSCRIPTION</b></div>
                                    <div class="card-body">
                                       <div class="payment-setting">
                                          <div class="p-setting-1">
                                             <p class="text-center m-0"><b>L</b></p>
                                          </div>
                                          <div class="p-setting-2">
                                             <p class="text-right m-0">SOLO</p>
                                          </div>
                                       </div>
                                       <div class="payment-setting">
                                          <div class="p-setting-1">
                                             <p class="text-center m-0"><b><i class="fas fa-boxes"></i></b></p>
                                          </div>
                                          <div class="p-setting-2">
                                             <p class="text-right m-0">Data Connections 1</p>
                                          </div>
                                       </div>
                                       <div class="payment-setting">
                                          <div class="p-setting-1">
                                             <p class="text-center m-0"><b><i class="fas fa-user"></i></b></p>
                                          </div>
                                          <div class="p-setting-2">
                                             <p class="text-right m-0">User 1</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <button class="btn btn-theme-color mt-3 btn-sm" data-toggle="modal" data-target="#exampleModal">Edit Subscription</button>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12">
                                 <div class="card card-table mt-5">
                                    <div class="card-header bg-gray text-right"><b>BILLING HISTORY</b></div>
                                    <div class="card-body">
                                       <div class="top-city-scroller dhashbord-table-Team">
                                          <div class="table-responsive-card border-0">
                                             <div class="card-table14">
                                                <h6 class="m-0 text-right"><b>Name</b></h6>
                                             </div>
                                             <div class="card-table15">
                                                <h6 class="m-0 text-right"><b>Transaction</b></h6>
                                             </div>
                                             <div class="card-table16">
                                                <h6 class="m-0 text-right"><b>Amount</b></h6>
                                             </div>
                                             <div class="card-table17">
                                                <h6 class="m-0 text-right"><b>Date Created</b></h6>
                                             </div>
                                             <div class="card-table18">
                                                <h6 class="m-0 text-right"><b>Transaction ID</b></h6>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table14">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table15">
                                                <p class="m-0 text-right">Monthly Base Subscription Payment</p>
                                             </div>
                                             <div class="card-table16">
                                                <p class="m-0 text-right">$39.00</p>
                                             </div>
                                             <div class="card-table17">
                                                <p class="m-0 text-right">25-06-2021 </p>
                                             </div>
                                             <div class="card-table18">
                                                <p class="m-0 text-right">DH626EN602 <a href="#" class="mr-5"><i class="fas fa-file"></i></a> <span class="badge badge-info mr-3 p-2">SUCCESSFUL</span></p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table14">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table15">
                                                <p class="m-0 text-right">Monthly Base Subscription Payment</p>
                                             </div>
                                             <div class="card-table16">
                                                <p class="m-0 text-right">$39.00</p>
                                             </div>
                                             <div class="card-table17">
                                                <p class="m-0 text-right">25-06-2021 </p>
                                             </div>
                                             <div class="card-table18">
                                                <p class="m-0 text-right">DH626EN602 <a href="#" class="mr-5"><i class="fas fa-file"></i></a> <span class="badge badge-info mr-3 p-2">SUCCESSFUL</span></p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table14">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table15">
                                                <p class="m-0 text-right">Monthly Base Subscription Payment</p>
                                             </div>
                                             <div class="card-table16">
                                                <p class="m-0 text-right">$39.00</p>
                                             </div>
                                             <div class="card-table17">
                                                <p class="m-0 text-right">25-06-2021 </p>
                                             </div>
                                             <div class="card-table18">
                                                <p class="m-0 text-right">DH626EN602 <a href="#" class="mr-5"><i class="fas fa-file"></i></a> <span class="badge badge-info mr-3 p-2">SUCCESSFUL</span></p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table14">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table15">
                                                <p class="m-0 text-right">Monthly Base Subscription Payment</p>
                                             </div>
                                             <div class="card-table16">
                                                <p class="m-0 text-right">$39.00</p>
                                             </div>
                                             <div class="card-table17">
                                                <p class="m-0 text-right">25-06-2021 </p>
                                             </div>
                                             <div class="card-table18">
                                                <p class="m-0 text-right">DH626EN602 <a href="#" class="mr-5"><i class="fas fa-file"></i></a> <span class="badge badge-info mr-3 p-2">SUCCESSFUL</span></p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table14">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table15">
                                                <p class="m-0 text-right">Monthly Base Subscription Payment</p>
                                             </div>
                                             <div class="card-table16">
                                                <p class="m-0 text-right">$39.00</p>
                                             </div>
                                             <div class="card-table17">
                                                <p class="m-0 text-right">25-06-2021 </p>
                                             </div>
                                             <div class="card-table18">
                                                <p class="m-0 text-right">DH626EN602 <a href="#" class="mr-5"><i class="fas fa-file"></i></a> <span class="badge badge-info mr-3 p-2">SUCCESSFUL</span></p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table14">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table15">
                                                <p class="m-0 text-right">Monthly Base Subscription Payment</p>
                                             </div>
                                             <div class="card-table16">
                                                <p class="m-0 text-right">$39.00</p>
                                             </div>
                                             <div class="card-table17">
                                                <p class="m-0 text-right">25-06-2021 </p>
                                             </div>
                                             <div class="card-table18">
                                                <p class="m-0 text-right">DH626EN602 <a href="#" class="mr-5"><i class="fas fa-file"></i></a> <span class="badge badge-info mr-3 p-2">SUCCESSFUL</span></p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table14">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table15">
                                                <p class="m-0 text-right">Monthly Base Subscription Payment</p>
                                             </div>
                                             <div class="card-table16">
                                                <p class="m-0 text-right">$39.00</p>
                                             </div>
                                             <div class="card-table17">
                                                <p class="m-0 text-right">25-06-2021 </p>
                                             </div>
                                             <div class="card-table18">
                                                <p class="m-0 text-right">DH626EN602 <a href="#" class="mr-5"><i class="fas fa-file"></i></a> <span class="badge badge-info mr-3 p-2">SUCCESSFUL</span></p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table14">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table15">
                                                <p class="m-0 text-right">Monthly Base Subscription Payment</p>
                                             </div>
                                             <div class="card-table16">
                                                <p class="m-0 text-right">$39.00</p>
                                             </div>
                                             <div class="card-table17">
                                                <p class="m-0 text-right">25-06-2021 </p>
                                             </div>
                                             <div class="card-table18">
                                                <p class="m-0 text-right">DH626EN602 <a href="#" class="mr-5"><i class="fas fa-file"></i></a> <span class="badge badge-info mr-3 p-2">SUCCESSFUL</span></p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table14">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table15">
                                                <p class="m-0 text-right">Monthly Base Subscription Payment</p>
                                             </div>
                                             <div class="card-table16">
                                                <p class="m-0 text-right">$39.00</p>
                                             </div>
                                             <div class="card-table17">
                                                <p class="m-0 text-right">25-06-2021 </p>
                                             </div>
                                             <div class="card-table18">
                                                <p class="m-0 text-right">DH626EN602 <a href="#" class="mr-5"><i class="fas fa-file"></i></a> <span class="badge badge-info mr-3 p-2">SUCCESSFUL</span></p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table14">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table15">
                                                <p class="m-0 text-right">Monthly Base Subscription Payment</p>
                                             </div>
                                             <div class="card-table16">
                                                <p class="m-0 text-right">$39.00</p>
                                             </div>
                                             <div class="card-table17">
                                                <p class="m-0 text-right">25-06-2021 </p>
                                             </div>
                                             <div class="card-table18">
                                                <p class="m-0 text-right">DH626EN602 <a href="#" class="mr-5"><i class="fas fa-file"></i></a> <span class="badge badge-info mr-3 p-2">SUCCESSFUL</span></p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table14">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table15">
                                                <p class="m-0 text-right">Monthly Base Subscription Payment</p>
                                             </div>
                                             <div class="card-table16">
                                                <p class="m-0 text-right">$39.00</p>
                                             </div>
                                             <div class="card-table17">
                                                <p class="m-0 text-right">25-06-2021 </p>
                                             </div>
                                             <div class="card-table18">
                                                <p class="m-0 text-right">DH626EN602 <a href="#" class="mr-5"><i class="fas fa-file"></i></a> <span class="badge badge-info mr-3 p-2">SUCCESSFUL</span></p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <button class="btn btn-theme-color btn-sm mt-3">View All Invoice</button>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="users">
                           <div class="row">
                              <div class="col-lg-5 col-sm-12 col-12">
                                 <div class="card mt-3">
                                    <div class="card-header bg-gray text-right">
                                       <b>TEAM DETAILS</b>
                                    </div>
                                    <div class="card-body">
                                       <p class="text-right"><b>5/5 Users Assigned</b></p>
                                       <div class="row">
                                          <div class="col-lg-6 col-sm-6 col-12">
                                             <p class="text-right">: Current team </p>
                                             <p class="text-right">: Signed in as </p>
                                             <p class="text-right">: Role </p>
                                             <p class="text-right">: Team ID </p>
                                             <p class="text-right">: Joined </p>
                                          </div>
                                          <div class="col-lg-6 col-sm-6 col-12">
                                             <p class="text-right">Team Name </p>
                                             <p class="text-right">user@gmail.com </p>
                                             <p class="text-right">Owner </p>
                                             <p class="text-right">MNG623NH </p>
                                             <p class="text-right">17-06-2020</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-7 col-sm-12 col-12">
                                 <div class="card card-table mt-3">
                                    <div class="card-header bg-gray text-right"><b>LATEST ACTIVITY</b></div>
                                    <div class="card-body">
                                       <div class="top-city-scroller dhashbord-table-Team">
                                          <div class="table-responsive-card border-0">
                                             <div class="card-table4">
                                                <h6 class="m-0 text-right"><b>User</b></h6>
                                             </div>
                                             <div class="card-table5">
                                                <h6 class="m-0 text-right"><b>Activity</b></h6>
                                             </div>
                                             <div class="card-table6">
                                                <h6 class="m-0 text-right"><b>Date</b></h6>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table4">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table5">
                                                <p class="m-0 text-right">Monthly Base Subscription Payment</p>
                                             </div>
                                             <div class="card-table6">
                                                <p class="m-0 text-right">25-06-2021</p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table4">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table5">
                                                <p class="m-0 text-right">Monthly Base Subscription Payment</p>
                                             </div>
                                             <div class="card-table6">
                                                <p class="m-0 text-right">25-06-2021</p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table4">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table5">
                                                <p class="m-0 text-right">Monthly Base Subscription Payment</p>
                                             </div>
                                             <div class="card-table6">
                                                <p class="m-0 text-right">25-06-2021</p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table4">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table5">
                                                <p class="m-0 text-right">Monthly Base Subscription Payment</p>
                                             </div>
                                             <div class="card-table6">
                                                <p class="m-0 text-right">25-06-2021</p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table4">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table5">
                                                <p class="m-0 text-right">Monthly Base Subscription Payment</p>
                                             </div>
                                             <div class="card-table6">
                                                <p class="m-0 text-right">25-06-2021</p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table4">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table5">
                                                <p class="m-0 text-right">Monthly Base Subscription Payment</p>
                                             </div>
                                             <div class="card-table6">
                                                <p class="m-0 text-right">25-06-2021</p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table4">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table5">
                                                <p class="m-0 text-right">Monthly Base Subscription Payment</p>
                                             </div>
                                             <div class="card-table6">
                                                <p class="m-0 text-right">25-06-2021</p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table4">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table5">
                                                <p class="m-0 text-right">Monthly Base Subscription Payment</p>
                                             </div>
                                             <div class="card-table6">
                                                <p class="m-0 text-right">25-06-2021</p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table4">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table5">
                                                <p class="m-0 text-right">Monthly Base Subscription Payment</p>
                                             </div>
                                             <div class="card-table6">
                                                <p class="m-0 text-right">25-06-2021</p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table4">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table5">
                                                <p class="m-0 text-right">Monthly Base Subscription Payment</p>
                                             </div>
                                             <div class="card-table6">
                                                <p class="m-0 text-right">25-06-2021</p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <button class="btn btn-warning btn-sm mt-3">View All</button>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12">
                                 <div class="card card-table mt-5">
                                    <div class="card-header bg-gray"><input type="text" class="form-control w-25 m-0 float-left" name="" placeholder="Search"><span class="float-right"><b>USER LIST</b></span></div>
                                    <div class="card-body">
                                       <div class="top-city-scroller dhashbord-table-Team">
                                          <div class="table-responsive-card border-0">
                                             <div class="card-table7">
                                                <h6 class="m-0 text-right"><b>Personal Information</b></h6>
                                             </div>
                                             <div class="card-table8">
                                                <h6 class="m-0 text-right"><b>Email</b></h6>
                                             </div>
                                             <div class="card-table9">
                                                <h6 class="m-0 text-right"><b>Job Position</b></h6>
                                             </div>
                                             <div class="card-table10">
                                                <h6 class="m-0 text-right"><b>Location</b></h6>
                                             </div>
                                             <div class="card-table11">
                                                <h6 class="m-0 text-right"><b>Role</b></h6>
                                             </div>
                                             <div class="card-table12">
                                                <h6 class="m-0 text-right"><b>Date Created</b></h6>
                                             </div>
                                             <div class="card-table13">
                                                <h6 class="m-0 text-right"><b>User ID</b></h6>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table7">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table8">
                                                <p class="m-0 text-right">namesurname@email.com</p>
                                             </div>
                                             <div class="card-table9">
                                                <p class="m-0 text-right">Manager</p>
                                             </div>
                                             <div class="card-table10">
                                                <p class="m-0 text-right">Dubai</p>
                                             </div>
                                             <div class="card-table11">
                                                <p class="m-0 text-right">Admin</p>
                                             </div>
                                             <div class="card-table12">
                                                <p class="m-0 text-right">25-06-2021 21:20</p>
                                             </div>
                                             <div class="card-table13">
                                                <p class="m-0 text-right">DH626EN602 <span class="ml-3"><a href="#" class="mr-3"><i class="fas fa-trash"></i></a> <a href="#" class="mr-3"><i class="fas fa-cog"></i></a></span></p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table7">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table8">
                                                <p class="m-0 text-right">namesurname@email.com</p>
                                             </div>
                                             <div class="card-table9">
                                                <p class="m-0 text-right">Manager</p>
                                             </div>
                                             <div class="card-table10">
                                                <p class="m-0 text-right">Dubai</p>
                                             </div>
                                             <div class="card-table11">
                                                <p class="m-0 text-right">Admin</p>
                                             </div>
                                             <div class="card-table12">
                                                <p class="m-0 text-right">25-06-2021 21:20</p>
                                             </div>
                                             <div class="card-table13">
                                                <p class="m-0 text-right">DH626EN602 <span class="ml-3"><a href="#" class="mr-3"><i class="fas fa-trash"></i></a> <a href="#" class="mr-3"><i class="fas fa-cog"></i></a></span></p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table7">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table8">
                                                <p class="m-0 text-right">namesurname@email.com</p>
                                             </div>
                                             <div class="card-table9">
                                                <p class="m-0 text-right">Manager</p>
                                             </div>
                                             <div class="card-table10">
                                                <p class="m-0 text-right">Dubai</p>
                                             </div>
                                             <div class="card-table11">
                                                <p class="m-0 text-right">Admin</p>
                                             </div>
                                             <div class="card-table12">
                                                <p class="m-0 text-right">25-06-2021 21:20</p>
                                             </div>
                                             <div class="card-table13">
                                                <p class="m-0 text-right">DH626EN602 <span class="ml-3"><a href="#" class="mr-3"><i class="fas fa-trash"></i></a> <a href="#" class="mr-3"><i class="fas fa-cog"></i></a></span></p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table7">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table8">
                                                <p class="m-0 text-right">namesurname@email.com</p>
                                             </div>
                                             <div class="card-table9">
                                                <p class="m-0 text-right">Manager</p>
                                             </div>
                                             <div class="card-table10">
                                                <p class="m-0 text-right">Dubai</p>
                                             </div>
                                             <div class="card-table11">
                                                <p class="m-0 text-right">Admin</p>
                                             </div>
                                             <div class="card-table12">
                                                <p class="m-0 text-right">25-06-2021 21:20</p>
                                             </div>
                                             <div class="card-table13">
                                                <p class="m-0 text-right">DH626EN602 <span class="ml-3"><a href="#" class="mr-3"><i class="fas fa-trash"></i></a> <a href="#" class="mr-3"><i class="fas fa-cog"></i></a></span></p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table7">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table8">
                                                <p class="m-0 text-right">namesurname@email.com</p>
                                             </div>
                                             <div class="card-table9">
                                                <p class="m-0 text-right">Manager</p>
                                             </div>
                                             <div class="card-table10">
                                                <p class="m-0 text-right">Dubai</p>
                                             </div>
                                             <div class="card-table11">
                                                <p class="m-0 text-right">Admin</p>
                                             </div>
                                             <div class="card-table12">
                                                <p class="m-0 text-right">25-06-2021 21:20</p>
                                             </div>
                                             <div class="card-table13">
                                                <p class="m-0 text-right">DH626EN602 <span class="ml-3"><a href="#" class="mr-3"><i class="fas fa-trash"></i></a> <a href="#" class="mr-3"><i class="fas fa-cog"></i></a></span></p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table7">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table8">
                                                <p class="m-0 text-right">namesurname@email.com</p>
                                             </div>
                                             <div class="card-table9">
                                                <p class="m-0 text-right">Manager</p>
                                             </div>
                                             <div class="card-table10">
                                                <p class="m-0 text-right">Dubai</p>
                                             </div>
                                             <div class="card-table11">
                                                <p class="m-0 text-right">Admin</p>
                                             </div>
                                             <div class="card-table12">
                                                <p class="m-0 text-right">25-06-2021 21:20</p>
                                             </div>
                                             <div class="card-table13">
                                                <p class="m-0 text-right">DH626EN602 <span class="ml-3"><a href="#" class="mr-3"><i class="fas fa-trash"></i></a> <a href="#" class="mr-3"><i class="fas fa-cog"></i></a></span></p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table7">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table8">
                                                <p class="m-0 text-right">namesurname@email.com</p>
                                             </div>
                                             <div class="card-table9">
                                                <p class="m-0 text-right">Manager</p>
                                             </div>
                                             <div class="card-table10">
                                                <p class="m-0 text-right">Dubai</p>
                                             </div>
                                             <div class="card-table11">
                                                <p class="m-0 text-right">Admin</p>
                                             </div>
                                             <div class="card-table12">
                                                <p class="m-0 text-right">25-06-2021 21:20</p>
                                             </div>
                                             <div class="card-table13">
                                                <p class="m-0 text-right">DH626EN602 <span class="ml-3"><a href="#" class="mr-3"><i class="fas fa-trash"></i></a> <a href="#" class="mr-3"><i class="fas fa-cog"></i></a></span></p>
                                             </div>
                                          </div>
                                          <div class="table-responsive-card">
                                             <div class="card-table7">
                                                <p class="m-0 text-right">John Doe</p>
                                             </div>
                                             <div class="card-table8">
                                                <p class="m-0 text-right">namesurname@email.com</p>
                                             </div>
                                             <div class="card-table9">
                                                <p class="m-0 text-right">Manager</p>
                                             </div>
                                             <div class="card-table10">
                                                <p class="m-0 text-right">Dubai</p>
                                             </div>
                                             <div class="card-table11">
                                                <p class="m-0 text-right">Admin</p>
                                             </div>
                                             <div class="card-table12">
                                                <p class="m-0 text-right">25-06-2021 21:20</p>
                                             </div>
                                             <div class="card-table13">
                                                <p class="m-0 text-right">DH626EN602 <span class="ml-3"><a href="#" class="mr-3"><i class="fas fa-trash"></i></a> <a href="#" class="mr-3"><i class="fas fa-cog"></i></a></span></p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <button class="btn btn-warning btn-sm mt-3">Add New User</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
      </div>
   </main>
</div>




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <span class="modal-header-fle1"><img src="{!!asset('public/assets/image/homelogo.jpg')!!}" height="40" width="40" class="rounded"></span>
                  <span class="modal-header-fle2">
                     <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">Manage payment method</h5>
                  </span>
                  <span class="modal-header-fle3">
                  <button type="button" class="close float-left" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </span>
               </div>
               <div class="modal-body bg-gray">
                  <div class="row">
                     <div class="col-lg-6 col-sm-6 col-12">
                        <h6 class="font-weight-bold text-right"><b>YOUR SUBSCRIPTION</b></h6>
                        <div class="card">
                           <div class="card-body text-right">
                              <h6 class="font-weight-bold text-right">Afdal Analytics Sole Plan <img src="{!!asset('public/assets/image/homelogo.jpg')!!}" height="40" width="40" class="rounded float-left"></h6>
                              <p class="m-0">Commitment</p>
                              <p><b>Annual plan, paid monthly</b></p>
                              <p class="m-0">*Next regular payment</p>
                              <p><b>$545/mo (incl tax) October 15, 2021</b></p>
                              <hr>
                              <p class="m-0">*Requires use with only one account <i class="fas fa-info-circle"></i></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6 col-12">
                        <h6 class="font-weight-bold text-right"><b>AVAILABLE ACTIONS</b></h6>
                        <div class="card">
                           <div class="card-body">
                              <div class="base-help-row">
                                 <div class="help-row-col11">
                                    <i class="fas fa-search" style="font-size: 25px;"></i>
                                 </div>
                                 <div class="help-row-col22">
                                    <h6 class="m-0 font-weight-bold"><b>Find a better plan</b></h6>
                                    <p class="m-0">Not enough connections in your plan? Let us help <br> you find the right plan for your needs, and</p>
                                 </div>
                                 <div class="help-row-col11">
                                    <a href="{{ url('upgradeplan') }}" class="btn btn-theme-color btn-sm">Change</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card mt-3">
                           <div class="card-body">
                              <div class="base-help-row">
                                 <div class="help-row-col11">
                                    <i class="fas fa-times-circle" style="font-size: 25px;"></i>
                                 </div>
                                 <div class="help-row-col22">
                                    <h6 class="m-0 font-weight-bold"><b>End your service</b></h6>
                                    <p class="m-0">ometimes you just need to call it quits. <br>We get it, and would love to have you back</p>
                                 </div>
                                 <div class="help-row-col11">
                                    <button class="btn btn-theme-color btn-sm">Cancel</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <span class="modal-header-fle1"><img src="{!!asset('public/assets/image/homelogo.jpg')!!}" height="40" width="40" class="rounded"></span>
                  <span class="modal-header-fle2">
                     <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">Manage payment method</h5>
                  </span>
                  <span class="modal-header-fle3">
                  <button type="button" class="close float-left" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </span>
               </div>
               <div class="modal-body bg-gray">
                  <p class="text-right"><a href="#" class="text-warning"><i class="fas fa-arrow-right ml-2"></i>Back</a></p>
                  <div class="row">
                     <div class="col-lg-6 col-sm-6 col-12">
                        <h6 class="font-weight-bold text-right"><b>Add payment method</b></h6>
                        <div class="card">
                           <div class="card-body text-right">
                              <form>
                                 <div class="form-group mb-1">
                                    <select class="form-control bg-gray">
                                       <option>Credit/debit card</option>
                                       <option>Net Banking</option>
                                       <option>UPI</option>
                                    </select>
                                 </div>

                                 <div class="form-group mb-1">
                                    <label class="m-0">Credit/debit card number</label>
                                    <input type="text" class="form-control">
                                 </div>

                                 <div class="row">
                                    <div class="col-lg-6 col-sm-6 col-12">
                                       <div class="form-group mb-1">
                                          <label class="m-0">Expiration month</label>
                                          <select class="form-control">
                                             <option>Select</option>
                                             <option>Option 1</option>
                                             <option>Option 2</option>
                                          </select>
                                       </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6 col-12">
                                       <div class="form-group mb-1">
                                          <label class="m-0">Expiration year</label>
                                          <select class="form-control">
                                             <option>Select</option>
                                             <option>Option 1</option>
                                             <option>Option 2</option>
                                          </select>
                                       </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6 col-12">
                                       <div class="form-group mb-1">
                                          <label class="m-0">First Name</label>
                                          <input type="text" class="form-control">
                                       </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6 col-12">
                                       <div class="form-group mb-1">
                                          <label class="m-0">Last Name</label>
                                          <input type="text" class="form-control">
                                       </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6 col-12">
                                       <div class="form-group mb-1">
                                          <label class="m-0">Country</label>
                                          <select class="form-control bg-gray">
                                             <option>Qatar</option>
                                             <option>Option 1</option>
                                             <option>Option 2</option>
                                          </select>
                                       </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6 col-12">
                                       <div class="form-group mb-1">
                                          <label class="m-0">Postel Code</label>
                                          <input type="text" class="form-control">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group mb-1">
                                    <p class="m-0">Optional Information</p>
                                    <label class="m-0">Company Name</label>
                                    <input type="text" class="form-control">
                                 </div>

                                 <div class="row">
                                    <div class="col-lg-6 col-sm-6 col-12">
                                       <div class="form-group mb-1">
                                          <label class="m-0">VAT ID</label>
                                          <input type="text" class="form-control">
                                       </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6 col-12">
                                       <div class="form-group mb-1 text-left pt-3">
                                          <button class="btn bg-gray font-weight-bold btn-sm m-0">Save</button><span class="mr-3"><i class="fas fa-lock text-warning mt-2" style="font-size:25px"></i></span>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6 col-12">
                        <h6 class="font-weight-bold text-right"><b>Your Subscription</b></h6>
                        <div class="card">
                           <div class="card-body text-right">
                              <h6 class="font-weight-bold text-right"><img src="{!!asset('public/assets/image/homelogo.jpg')!!}" height="40" width="40" class="rounded ml-3"> Afdal Analytics Sole Plan</h6>
                              <p class="m-0">Commitment</p>
                              <p><b>Annual plan, paid monthly</b></p>
                              <p class="m-0">*Next regular payment</p>
                              <p><b>$545/mo (incl tax) October 15, 2021</b></p>
                              <hr>
                              <p class="m-0">*Requires use with only one account <i class="fas fa-info-circle"></i></p>
                           </div>
                        </div>
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <span class="modal-header-fle1"><img src="{!!asset('public/assets/image/homelogo.jpg')!!}" height="40" width="40" class="rounded"></span>
                  <span class="modal-header-fle2">
                     <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">Manage payment method</h5>
                  </span>
                  <span class="modal-header-fle3">
                  <button type="button" class="close float-left" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </span>
               </div>
               <div class="modal-body bg-gray">
                  <p class="text-right"><a href="#" class="text-warning"><i class="fas fa-arrow-right ml-2"></i>Back</a></p>
                  <div class="row">
                     <div class="col-lg-6 col-sm-6 col-12">
                        <h6 class="font-weight-bold text-right"><b>Edit payment method</b></h6>
                        <div class="card">
                           <div class="card-body text-right">
                              <p class="text-left text-warning">Switch PayPal accounts <br>Edit Payment Details <img src="{!!asset('public/assets/image/paypal.png')!!}" class="float-right" style="height: 30px; margin-top: -10px;"></p>
                              <form>
                                 <h6 class="text-right m-0">You're signed into PayPal As</h6>
                                 <p class="text-right"><b>seid@gmail.com</b></p>
                                 <div class="form-group mb-1">
                                    <p class="m-0">Optional Information</p>
                                    <label class="m-0">Company Name</label>
                                    <input type="text" class="form-control">
                                 </div>

                                 <div class="row">
                                    <div class="col-lg-6 col-sm-6 col-12">
                                       <div class="form-group mb-1">
                                          <label class="m-0">VAT ID</label>
                                          <input type="text" class="form-control">
                                       </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6 col-12">
                                       <div class="form-group mb-1 text-left pt-3">
                                          <button class="btn bg-gray font-weight-bold btn-sm m-0">Save</button><span class="mr-3"><i class="fas fa-lock text-warning mt-2" style="font-size:25px"></i></span>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6 col-12">
                        <h6 class="font-weight-bold text-right"><b>Your Subscription</b></h6>
                        <div class="card">
                           <div class="card-body text-right">
                              <h6 class="font-weight-bold text-right">Afdal Analytics Sole Plan <img src="{!!asset('public/assets/image/homelogo.jpg')!!}" height="40" width="40" class="rounded float-left"></h6>
                              <p class="m-0">Commitment</p>
                              <p><b>Annual plan, paid monthly</b></p>
                              <p class="m-0">*Next regular payment</p>
                              <p><b>$545/mo (incl tax) October 15, 2021</b></p>
                              <hr>
                              <p class="m-0">*Requires use with only one account <i class="fas fa-info-circle"></i></p>
                           </div>
                        </div>
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <span class="modal-header-fle1"><img src="{!!asset('public/assets/image/homelogo.jpg')!!}" height="40" width="40" class="rounded"></span>
                  <span class="modal-header-fle2">
                     <h5 class="modal-title text-center font-weight-bold m-0" id="exampleModalLabel">Manage payment method</h5>
                  </span>
                  <span class="modal-header-fle3">
                  <button type="button" class="close float-left" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </span>
               </div>
               <div class="modal-body bg-gray">
                  <div class="row">
                     <div class="col-lg-6 col-sm-6 col-12">
                        <h6 class="font-weight-bold text-right"><b>Your payment method</b></h6>
                        <div class="card">
                           <div class="card-body text-right">
                              <div class="base-help-row mt-2">
                        <div class="help-row-col11">
                           <img src="{!!asset('public/assets/image/paypal.png')!!}" style="height:20px;">
                        </div>
                        <div class="help-row-col21 pr-2">
                           <p class="m-0 font-weight-bold"><b>Paypal signed in as seid@gmail.com</b></p>
                           <p class="m-0">Seid Takroni</p>
                        </div>
                     </div>
                           </div>
                        </div>
                        <p class="text-right font-weight-bold mt-3 mb-3"><a href="#" class="text-warning">Edit</a> | <a href="#" class="text-warning">Add New</a></p>
                        <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-12">
                                       <div class="form-group text-right">
                                          <button class="btn bg-gray font-weight-bold btn-sm m-0">Save</button><span class="mr-3"><i class="fas fa-lock text-warning mt-2" style="font-size:20px"></i></span>
                                       </div>
                                    </div>
                                 </div>
                     </div>
                     <div class="col-lg-6 col-sm-6 col-12">
                        <h6 class="font-weight-bold text-right"><b>Your Subscription</b></h6>
                        <div class="card">
                           <div class="card-body text-right">
                              <h6 class="font-weight-bold text-right">Afdal Analytics Sole Plan <img src="{!!asset('public/assets/image/homelogo.jpg')!!}" height="40" width="40" class="rounded float-left"></h6>
                              <p class="m-0">Commitment</p>
                              <p><b>Annual plan, paid monthly</b></p>
                              <p class="m-0">*Next regular payment</p>
                              <p><b>$545/mo (incl tax) October 15, 2021</b></p>
                              <hr>
                              <p class="m-0">*Requires use with only one account <i class="fas fa-info-circle"></i></p>
                           </div>
                        </div>
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
@endsection