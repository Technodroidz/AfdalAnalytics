@extends('layout.userhead')
@section('title', 'Twitter Dashboard')
<div class="page-wrapper chiller-theme toggled">
   @section('content')
   @extends('layout.usersidenav')
   <style type="text/css">  
      .table thead th {
      vertical-align: bottom!important;
      border-bottom: 2px solid #356792!important;
      }
      .my-table .table td, .table th{
      padding: 0.75rem!important;
      vertical-align: top!important;
      border-top: 1px solid #dee2e6!important;
      }
      .my-table .table th{
      padding: 0.75rem!important;
      vertical-align: top!important;
      border-top: 1px solid #dee2e6!important;
      }
      #mybasis .dashboard-data-1{
      flex-basis:auto;
      }
      #mybasis .dashboard-data-1 i{
      color: #ff9a41;
      font-size: 36px;
      margin-left: 16px;
      }
      .cont-top-ad {
      max-width: 1050px;
      }
      .top-ad {
      margin: 0 5px;
      }
      .top-ad li{ 
      display: inline-block;
      padding: 0px 2px;
      font-size: 13px;
      font-weight: 600;
      }
      .top-ad li samp{
      font-family: gilroy-font-light;
      border-bottom: 2px solid #f48a1d;
      padding-bottom: 5px;
      line-height: 30px;
      }
      .apexcharts-legend {
      justify-content: right!important;
      position: relative!important;
      margin-right: 25px!important;
      }
      .tw {
      color: #00acee;
      }
      .widget-content-wrapper {
      display: flex;
      flex: 0;
      position: relative;
      align-items: center;
      flex-wrap: nowrap;
      justify-content: flex-end;
      }
      .widget-heading {
      opacity: .8;
      font-weight: bold;
      }
      .widget-subheading {
      opacity: .5;
      }
   </style>
   <main class="page-content pb-5">
      <div class="container-fluid">
         <nav class="navbar navbar-expand-lg bg-transparent user-navbar pl-0 pr-0">
            <div class="container-fluid">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item head-list-heading">
                     Home
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
                     <img src="http://afdalanalytics.com/joywebsite-new/public/assets/image/user.jpg" class="rounded-circle" height="40" width="40">
                     </a>
                     <div class="dropdown-menu shadow border-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">
                        Profile
                        </a>
                        <a class="dropdown-item" href="#">Log Out</a>
                     </div>
                  </li>
                  <!--<li class="nav-item">-->
                  <!--   <a class="nav-link" href="#"><img src="http://afdalanalytics.com/joywebsite-new/public/assets/image/homelogo.jpg" class="rounded" height="40" width="40"></a>-->
                  <!--</li>-->
               </ul>
            </div>
         </nav>
         <div class="row">
            <div class="col-lg-8 col-sm-8 col-12">
               <div class="dashboard-tabs">
                  <ul class="nav nav-pills">
                     <li class="nav-item">
                        <a class="nav-link" href="facebookpage">Page <i class="fab fa-facebook"></i></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="facebookads">Ads <i class="fab fa-facebook"></i> </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="facebookengagement">Engagment <i class="fab fa-facebook"></i></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active" href="twitterdashbord"> Twitter <i class="fab fa-twitter tw"></i></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="instagramdashboard">Instagram <i class="fab fa-instagram"></i></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="googledashboard">Google Play <i class="fab fa-google-play"></i></a>
                     </li>
                     <li class="nav-item">
                        <a class="btn btn-white btn-circle text-warning waves-effect waves-light" href="template"><i class="fas fa-plus"></i></a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-md-4 col-sm-4 col-12">
               <div class="widget-content-wrapper mb-4">
                  <div class="widget-content-left  ml-1 header-user-info">
                     <div class="widget-subheading"> LAst 30 Days </div>
                     <div class="widget-heading"> 10/02/2021 - 11/03/2021 </div>
                  </div>
                  <div class="widget-content-right header-user-info">
                     <a href="#" class="btn btn-white btn-circle text-warning waves-effect waves-light"><i class="fas fa-calendar-alt"></i></a>
                  </div>
                  <a href="#" class="btn btn-white btn-circle text-warning waves-effect waves-light"><i class="fas fa-ellipsis-v"></i></a>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-12">
               <div class="tab-content">
                  <div class="tab-pane active" id="twitter-page">
                     <div class="row">
                        <div class="col-md-12 col-xs-12">
                           <div class="card mb-4">
                              <div class="card-body text-center">
                                 <h5 class="font-weight-bold textBlue">Twitter Overview</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-4 col-xs-12">
                           <div class="card mb-4">
                              <div class="card-body text-right">
                                 <h5 class="font-weight-bold textBlue">Total Followers</h5>
                                 <p>Total number of people who follow your account</p>
                                 <div class="d-flex-dashbard-data mt-3" id="mybasis">
                                    <div class="dashboard-data-1 text-left">
                                       <i class="fas fa-user-plus"></i>
                                    </div>
                                    <div class="dashboard-data-2 text-right">
                                       <p class="m-0">Followers</p>
                                       <h3>{{$details['totalfollowers']}}</h3>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card mb-4">
                              <div class="card-body text-right">
                                 <h5 class="font-weight-bold textBlue">New Followers</h5>
                                 <p>Total number of new people who follow your account</p>
                                 <div class="d-flex-dashbard-data mt-3" id="mybasis">
                                    <div class="dashboard-data-1 text-left">
                                       <i class="fas fa-eye"></i>
                                    </div>
                                    <div class="dashboard-data-2 text-right">
                                       <p class="m-0">New Followers</p>
                                       <h3>231</h3>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-8 col-xs-12">
                           <div class="card mb-4">
                              <div class="card-body text-right">
                                 <h5 class="font-weight-bold textBlue">Followers</h5>
                                 <p>The total count of followers daily over the set period.</p>
                                 <div id="twitterchart"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-4 col-xs-12">
                           <div class="card mb-4">
                              <div class="card-body text-right">
                                 <h5 class="font-weight-bold textBlue">Total Engagements</h5>
                                 <p>The number of times a user interacted with a Tweet</p>
                                 <div class="d-flex-dashbard-data mt-3" id="mybasis">
                                    <div class="dashboard-data-1 text-left">
                                       <i class="fas fa-eye"></i>
                                    </div>
                                    <div class="dashboard-data-2 text-right">
                                       <p class="m-0">Engaged User</p>
                                       <h3>281</h3>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                           <div class="card mb-4">
                              <div class="card-body text-right">
                                 <h5 class="font-weight-bold textBlue">Engagment Rate</h5>
                                 <p>The total number of engagements divided by impressions</p>
                                 <div class="d-flex-dashbard-data mt-3" id="mybasis">
                                    <div class="dashboard-data-1 text-left">
                                       <i class="fas fa-eye"></i>
                                    </div>
                                    <div class="dashboard-data-2 text-right">
                                       <p class="m-0">impressions</p>
                                       <h3>2.42%</h3>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                           <div class="card mb-4">
                              <div class="card-body text-right">
                                 <h5 class="font-weight-bold textBlue">Total Tweets</h5>
                                 <p>The total number of tweets posted to <br>account.</p>
                                 <div class="d-flex-dashbard-data mt-3" id="mybasis">
                                    <div class="dashboard-data-1 text-left">
                                       <i class="fas fa-eye"></i>
                                    </div>
                                    <div class="dashboard-data-2 text-right">
                                       <p class="m-0">Tweets</p>
                                       <h3>{{$details['totaltweets']}}</h3>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-8 col-xs-12">
                           <div class="card mb-4">
                              <div class="card-body text-right">
                                 <h5 class="font-weight-bold textBlue">Twitter Performance</h5>
                                 <p>The top performing tweets based on engagement count.</p>
                                 <div class="my-table table-responsive">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th scope="col">Tweet</th>
                                             <th scope="col">Engagement</th>
                                             <th scope="col">Retweets</th>
                                             <th scope="col">Favorites</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <th scope="row">We just joined the launch list for @mightycal </th>
                                             <td>47</td>
                                             <td>46</td>
                                             <td>45</td>
                                          </tr>
                                          <tr>
                                             <th scope="row">We just joined the launch list for @mightycal </th>
                                             <td>47</td>
                                             <td>46</td>
                                             <td>45</td>
                                          </tr>
                                          <tr>
                                             <th scope="row">We just joined the launch list for @mightycal </th>
                                             <td>47</td>
                                             <td>46</td>
                                             <td>45</td>
                                          </tr>
                                          <tr>
                                             <th scope="row">We just joined the launch list for @mightycal </th>
                                             <td>47</td>
                                             <td>46</td>
                                             <td>45</td>
                                          </tr>
                                          <tr>
                                             <th scope="row">We just joined the launch list for @mightycal </th>
                                             <td>47</td>
                                             <td>46</td>
                                             <td>45</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                           <div class="card mb-4">
                              <div class="card-body text-right">
                                 <h5 class="font-weight-bold textBlue">Total Retweets</h5>
                                 <p>The number of times your ads Were shown</p>
                                 <div class="d-flex-dashbard-data mt-3" id="mybasis">
                                    <div class="dashboard-data-1 text-left">
                                       <i class="fas fa-eye"></i>
                                    </div>
                                    <div class="dashboard-data-2 text-right">
                                       <p class="m-0">Tweets</p>
                                       <h3>142</h3>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card mb-4">
                              <div class="card-body text-right">
                                 <h5 class="font-weight-bold textBlue">Favorites</h5>
                                 <p>The total number of like of all the tweets</p>
                                 <div class="d-flex-dashbard-data mt-3" id="mybasis">
                                    <div class="dashboard-data-1 text-left">
                                       <i class="fas fa-eye"></i>
                                    </div>
                                    <div class="dashboard-data-2 text-right">
                                       <p class="m-0">Likes</p>
                                       <h3>{{$details['favourites']}}</h3>
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
      </div>
   </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script type="text/javascript">
   var options = {
          series: [{
          name: 'Female',
          data: [44, 55, 57, 56, 61, 58, 63, 60, 66, 76, 85, 101, 98, 87, 105, 91, 114]
        }, {
          name: 'Male',
          data: [76, 85, 101, 98, 87, 105, 91, 114, 94, 44, 55, 57, 56, 61, 58, 63, 60]
        }],
          chart: {
          type: 'bar',
          height: 290
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'],
        },
        yaxis: {
          title: {
            text: ''
          }
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return "$ " + val + " thousands"
            }
          }
        }
        };
   
        var chart = new ApexCharts(document.querySelector("#twitterchart"), options);
        chart.render();
</script>
@endsection