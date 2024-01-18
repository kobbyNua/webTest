<!DOCTYPE html>

<html>
      <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" type="text/css" href="{{ asset('asset/bootstrap-5.3.2-dist/css/bootstrap.min.css')}}">
          <link rel="stylesheet" type="text/css" href="{{ asset('asset/main/main.css')}}">
          <link rel="stylesheet" type="text/css" href="{{ asset('asset/fontawesome/css/all.css')}}">
          <title>{{$title}}</title>
      </head>
      <body>
            
          <div class="wrapper">
                   <div class="navbar navbar-expand-xxl navbar-expand-xl navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-light bg-light" id="header">
                             <div class="container">
                                     <a  class="navbar-brand " href="./">
                                             <img src="{{asset('asset/image/e-ADAPP-logo-23.png')}}"  style="width:18%">
                                     </a>
                     

                                     <div class="collapse navbar-collapse justify-content-end d-md-none" id="navbarSupportedContent">
                                            <ul class="navbar-nav">

                                                 <li class="nav-item">
                                                      <a class="nav-link" href="#" id="image-box">
                                                             <input type="search" required name="search" placeholder="type to search" style="background-color:#f2f4f6;border-radius:20px;padding:3px;margin-top:5px" >
                                                                  <img src="{{ asset('asset/image/hide.png') }}" class="bar-hide" style="width:25px">
                                                      </a>
                                                 </li>

                                                 <li class="nav-item">
                                               
                                                        <a class="nav-link" href="#">
                                                           <h6>{{$user['first_name']}}  {{$user['last_name']}}<br><span>{{$user['role']}}</span></h6>
                                                        </a>
                               
                                                 </li>
                                            </ul>
                                     </div>
                                     <div class="mobile-navbar-toggle d-lg-none  float-xs-end">
                                                 <a href="" data-bs-toggle="modal" data-bs-target="#mobile_nav"><i class="fas fa-bars"></i></a>
                                      </div>

                             </div>
                   </div> 
                   <div class="main-container">
                         <div class="sidebar">
                                  <div class="sidebar-header">
                                        <h5>main navigation</h5>
                                  </div>
                                  <div class="sidebar-menu">
                                      <ul>
                                          <li><a href="/dashboard/" class="active">Dashboard</a></li>
                                          <li><a href="/farmers/" >Farmers</a></li>
                                          <li><a href="#">Staff</a></li>
                                          <li><a href="#">Synchronization</a></li>
                                          <li><a href="#">Setting</a></li>
                                          <li><a href="#">Report</a></li>
                                          <li><a href="/logout/">logout</a></li>
                                      </ul>
                                  </div>

                         </div>
                         <div class="content">

                                <div class="content-header">
                                      <div class="container-fluid">
                                            <div class="row">
                                                  <div class="col-md-2">
                                                       <div class="holder m-auto">
                                                           <img src="{{asset('asset/image/agenda.png')}}" class="logo">
                                                       </div>
                                           
                                                  </div>
                                                  <div class="col-md-10">
                                                           <h1>Farmers Panel</h1>
                                                           <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                                                  </div>
                                            </div>
                                      </div>
                                </div>
                                <div class="content-body-dashboard container-fluid">
                                       <div class="row">
                                              <div class="col-md-4">
                                                    <div class="row">
                                                          <div class="col-md-12 p-0">
                                                              <div class="dashboard-info mb-3" style="padding-left:20px;height:80px">
                                                                   <p>This week <span>36% <i class="fas fa-arrow-up"></i></span></p>
                                                                   <div class="dashboard-info-body">
                                                                         <h4 class="float-start">GHS 2,072</h4>
                                                                         <div class="float-end">
                                                                            ggllg
                                                                         </div>
                                                                   </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-12 p-0">
                                                               <div class="dashboard-info mb-3" style="padding-left:20px;height:80px">
                                                                   <p>Income</p>
                                                                   <div class="dashboard-info-body">
                                                                          <h4 class="float-start">GHS 13,000</h4>
                                                                          <span class="float-end">+14%</span>
                                                                   </div>
                                                               </div>
                                                          </div>
                                                    </div>
                                              </div>
                                              <div class="col-md-4">
                                                     <div class="dashboard-info mb-4" style="height:180px">
                                                              
                                                                      <h6 class="float-start">Revenue</h6>
                                                                      <h5 class="float-end">GHS 13,000</h5>
                                                                      <div id="line_graph"></div>
                                                            
                                                     </div>
                                              </div>
                                              <div class="col-md-4 p-0">
                                                    <div class="dashboard-info mb-4" style="height:180px">
                                                                <span class="float-start">Total earning</span>
                                                                <img style="width:4%" src="{{ asset('asset/image/information.png') }}" class="float-end"></i>
                                                                <div id="bar_column_group"></div>
                                                    </div>
                                              </div>
                                       </div>
                                </div>

                                <div class="content-body">
                                        <div class="">
                                              <div id="main_graph"></div>
                                        </div>
                                </div>
                         
                         </div>
                    </div>  

          </div>

          <script src="{{ asset('asset/bootstrap-5.3.2-dist/js/bootstrap.min.js') }}"></script>
          <script src="{{ asset('asset/js/jquery-3.4.1.js') }}"></script>
          <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js" integrity="sha512-L0Shl7nXXzIlBSUUPpxrokqq4ojqgZFQczTYlGjzONGTDAcLremjwaWv5A+EDLnxhQzY5xUZPWLOLqYRkY0Cbw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
          <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
          <script src="{{ asset('asset/js/chart-2.js') }}"></script>
          <script src="{{ asset('asset/js/chartDisplay.js') }}"></script>
      </body>

</html>