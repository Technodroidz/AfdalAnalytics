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
                     Help
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
                        <a class="nav-link active" data-toggle="tab" href="#my-support">Support</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#knowledge">Knowledge Base</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-12">
               <div class="tab-content">
                  <div class="tab-pane active" id="my-support">
                     <div class="row">
                        <div class="col-12">
                           <div class="card card-table mt-5">
                              <div class="card-header bg-gray text-right"><b>ALL TICKETS SUBMITTED</b></div>
                              <div class="card-body">
                                 <div class="row">
                                    <div class="col-lg-3 col-sm-4 col-12">
                                       <div class="help-form">
                                          <div class="help-form-col2">
                                             <button class="btn bgn-hlp-form waves-effect waves-light"><i class="fas fa-search"></i></button>
                                          </div>
                                          <div class="help-form-col1">
                                             <input type="text" class="form-control m-0" placeholder="Search">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-4 col-12">
                                       <h6 class="font-weight-bold pt-2">1<span class="ml-3"><small>Open Tickets</small></span></h6>
                                    </div>
                                    <div class="col-lg-3 col-sm-4 col-12">
                                       <h6 class="font-weight-bold pt-2">24<span class="ml-3"><small>Closed Ticket</small></span></h6>
                                    </div>
                                    <div class="col-lg-3 col-sm-4 col-12">
                                       <div class="row">
                                          <div class="col-lg-4 col-sm-4 col-5">
                                             <p class="font-weight-bold pt-2">Date</p>
                                          </div>
                                          <div class="col-lg-8 col-sm-8 col-7">
                                             <select class="form-control bg-gray">
                                                <option>Any</option>
                                                <option>Option</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="top-city-scroller dhashbord-table-Team">
                                    <div class="table-responsive-card border-0">
                                       <div class="card-table34">
                                          <h6 class="m-0 text-right"><b>User ID</b></h6>
                                       </div>
                                       <div class="card-table35">
                                          <h6 class="m-0 text-right"><b>Ticket Title</b></h6>
                                       </div>
                                       <div class="card-table36">
                                          <h6 class="m-0 text-right"><b>Date Created</b></h6>
                                       </div>
                                       <div class="card-table37">
                                          <h6 class="m-0 text-right"><b>Last Activity</b></h6>
                                       </div>
                                       <div class="card-table38">
                                          <h6 class="m-0 text-right"><b>Status</b></h6>
                                       </div>
                                    </div>
                                    <div class="table-responsive-card ">
                                       <div class="card-table34">
                                          <p class="m-0 text-right">DH626EN602</p>
                                       </div>
                                       <div class="card-table35">
                                          <p class="m-0 text-right"><a href="#" class="theme-color"><u>Cannot sign in on my account after changing email adress</u></a></p>
                                       </div>
                                       <div class="card-table36">
                                          <p class="m-0 text-right">26-08-2021</p>
                                       </div>
                                       <div class="card-table37">
                                          <p class="m-0 text-right">1 day ago</p>
                                       </div>
                                       <div class="card-table38">
                                          <p class="text-right"><span class="badge w-100 badge-warning p-2">Open</span></p>
                                       </div>
                                    </div>
                                    <div class="table-responsive-card ">
                                       <div class="card-table34">
                                          <p class="m-0 text-right">DH626EN602</p>
                                       </div>
                                       <div class="card-table35">
                                          <p class="m-0 text-right"><a href="#" class="theme-color"><u>Cannot sign in on my account after changing email adress</u></a></p>
                                       </div>
                                       <div class="card-table36">
                                          <p class="m-0 text-right">26-08-2021</p>
                                       </div>
                                       <div class="card-table37">
                                          <p class="m-0 text-right">1 day ago</p>
                                       </div>
                                       <div class="card-table38">
                                          <p class="text-right"><span class="badge badge-info w-100 p-2">SUCCESSFUL</span></p>
                                       </div>
                                    </div>
                                    <div class="table-responsive-card ">
                                       <div class="card-table34">
                                          <p class="m-0 text-right">DH626EN602</p>
                                       </div>
                                       <div class="card-table35">
                                          <p class="m-0 text-right"><a href="#" class="theme-color"><u>Cannot sign in on my account after changing email adress</u></a></p>
                                       </div>
                                       <div class="card-table36">
                                          <p class="m-0 text-right">26-08-2021</p>
                                       </div>
                                       <div class="card-table37">
                                          <p class="m-0 text-right">1 day ago</p>
                                       </div>
                                       <div class="card-table38">
                                          <p class="text-right"><span class="badge badge-info w-100 p-2">SUCCESSFUL</span></p>
                                       </div>
                                    </div>
                                    <div class="table-responsive-card ">
                                       <div class="card-table34">
                                          <p class="m-0 text-right">DH626EN602</p>
                                       </div>
                                       <div class="card-table35">
                                          <p class="m-0 text-right"><a href="#" class="theme-color"><u>Cannot sign in on my account after changing email adress</u></a></p>
                                       </div>
                                       <div class="card-table36">
                                          <p class="m-0 text-right">26-08-2021</p>
                                       </div>
                                       <div class="card-table37">
                                          <p class="m-0 text-right">1 day ago</p>
                                       </div>
                                       <div class="card-table38">
                                          <p class="text-right"><span class="badge badge-info w-100 p-2">SUCCESSFUL</span></p>
                                       </div>
                                    </div>
                                    <div class="table-responsive-card ">
                                       <div class="card-table34">
                                          <p class="m-0 text-right">DH626EN602</p>
                                       </div>
                                       <div class="card-table35">
                                          <p class="m-0 text-right"><a href="#" class="theme-color"><u>Cannot sign in on my account after changing email adress</u></a></p>
                                       </div>
                                       <div class="card-table36">
                                          <p class="m-0 text-right">26-08-2021</p>
                                       </div>
                                       <div class="card-table37">
                                          <p class="m-0 text-right">1 day ago</p>
                                       </div>
                                       <div class="card-table38">
                                          <p class="text-right"><span class="badge badge-info w-100 p-2">SUCCESSFUL</span></p>
                                       </div>
                                    </div>
                                    <div class="table-responsive-card ">
                                       <div class="card-table34">
                                          <p class="m-0 text-right">DH626EN602</p>
                                       </div>
                                       <div class="card-table35">
                                          <p class="m-0 text-right"><a href="#" class="theme-color"><u>Cannot sign in on my account after changing email adress</u></a></p>
                                       </div>
                                       <div class="card-table36">
                                          <p class="m-0 text-right">26-08-2021</p>
                                       </div>
                                       <div class="card-table37">
                                          <p class="m-0 text-right">1 day ago</p>
                                       </div>
                                       <div class="card-table38">
                                          <p class="text-right"><span class="badge badge-info w-100 p-2">SUCCESSFUL</span></p>
                                       </div>
                                    </div>
                                    <div class="table-responsive-card ">
                                       <div class="card-table34">
                                          <p class="m-0 text-right">DH626EN602</p>
                                       </div>
                                       <div class="card-table35">
                                          <p class="m-0 text-right"><a href="#" class="theme-color"><u>Cannot sign in on my account after changing email adress</u></a></p>
                                       </div>
                                       <div class="card-table36">
                                          <p class="m-0 text-right">26-08-2021</p>
                                       </div>
                                       <div class="card-table37">
                                          <p class="m-0 text-right">1 day ago</p>
                                       </div>
                                       <div class="card-table38">
                                          <p class="text-right"><span class="badge badge-info w-100 p-2">SUCCESSFUL</span></p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="text-right create-ticket-button-col">
                              <button class="btn btn-warning btn-sm mt-3 create-new-ticket">+ Create New Ticket</button>
                           </div>
                        </div>
                     </div>
                     <div class="create-ticket-new-row mt-3">
                        <div class="row">
                           <div class="col-12">
                              <div class="card">
                              <div class="card-body">
                              <form action="{{url('createnewticket')}}" method="POST" enctype='multipart/form-data'>
                                     @csrf 
                                 <div class="row">
                                    <div class="col-lg-4 col-sm-4 col-12">
                                    <div class="form-group">
                                       <label class="d-block text-right"><small>Subject</small></label>
                                       <input type="text" name="subject" class="form-control border" required>
                                    </div>
                                 </div>

                                 <div class="col-lg-4 col-sm-4 col-12">
                                    <div class="form-group">
                                       <label class="d-block text-right"><small>Choose Department</small></label>
                                       <select name="department" class="form-control border bg-gray" required>
                                          <option>Tech Support</option>
                                          <option>Sales</option>
                                          <option>Billing</option>
                                       </select>
                                    </div>
                                 </div>

                                 <div class="col-lg-4 col-sm-4 col-12">
                                    <div class="form-group">
                                       <label class="d-block text-right"><small>Attachment</small></label>
                                       <div class="upload-btn-wrapper">
                                          <button class="file-upload-button">Choose File</button>
                                          <input type="file" name="myfile" />
                                          No file chosen
                                       </div>
                                       <label class="d-block text-right"><small>(Alowed File Extensions: .jpg, .gif, jpeg, .png)</small></label>
                                    </div>
                                 </div>

                                 <div class="col-12">
                                    <div class="form-group">
                                       <label class="d-block text-right"><small>Message</small></label>
                                       <textarea name="message" class="form-control border" rows="4"></textarea>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <button type="button" class="btn btn-sm close-ticket">Cancel</button>
                                    <button class="btn btn-warning btn-sm submit-ticket">Submit</button>
                                 </div>
                                 </div>
                                 </form>
                              </div>
                           </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="knowledge">
                     <p class="text-right m-0 mt-3 font-weight-bold theme-color"><b>Advice and answers from the Team</b></p>
                     <div class="row">
                        <div class="col-lg-5 col-sm-6 col-12 ml-auto">
                           <div class="help-form mt-3">
                              <div class="help-form-col2">
                                 <button class="btn bgn-hlp-form"><i class="fas fa-search"></i></button>
                              </div>
                              <div class="help-form-col1">
                                 <input type="text" class="form-control m-0" placeholder="Search">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-6 col-sm-6 col-12">
                           <div class="base-help-row mt-3">
                              <div class="help-row-col1">
                                 <span class="shadow"><i class="fas fa-check-circle"></i></span>
                              </div>
                              <div class="help-row-col2">
                                 <h6 class="m-0"><b>Getting Started & The Basics</b></h6>
                                 <p class="m-0">Easy steps for setting up your Afdal Analytics account and learning your way around</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                           <div class="base-help-row mt-3">
                              <div class="help-row-col1">
                                 <span class="shadow"><i class="fas fa-sync"></i></span>
                              </div>
                              <div class="help-row-col2">
                                 <h6 class="m-0"><b>Connections & Data</b></h6>
                                 <p class="m-0">Learn more about setting up connections in Afdal Analytics and how data is collected.</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                           <div class="base-help-row mt-3">
                              <div class="help-row-col1">
                                 <span class="shadow"><i class="fas fa-desktop"></i></span>
                              </div>
                              <div class="help-row-col2">
                                 <h6 class="m-0"><b>Dashboards & Templates</b></h6>
                                 <p class="m-0">Learn how to visualize data, configure dashboards and use pre configure templates that wow</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                           <div class="base-help-row mt-3">
                              <div class="help-row-col1">
                                 <span class="shadow"><i class="fas fa-users"></i></span>
                              </div>
                              <div class="help-row-col2">
                                 <h6 class="m-0"><b>User Management</b></h6>
                                 <p class="m-0">Bring your sta on board and get them access to the insight to drive performance</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                           <div class="base-help-row mt-3">
                              <div class="help-row-col1">
                                 <span class="shadow"><i class="fas fa-cog"></i></span>
                              </div>
                              <div class="help-row-col2">
                                 <h6 class="m-0"><b>Managing your Subscription</b></h6>
                                 <p class="m-0">Learn how to administrate your accounts, access invoices and more</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </main>
</div>
@endsection