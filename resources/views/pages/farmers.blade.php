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


            <!--side bar-->
            <div class="main-container">
             <div class="sidebar">
                    <div class="sidebar-header">
                         <h5>main navigation</h5>
                    </div>
                    <div class="sidebar-menu">
                           <ul>
                              <li><a href="/dashboard/">Dashboard</a></li>
                              <li><a href="/farmers/" class="active">Farmers</a></li>
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
                    <div class="content-body">
                         <div class="content-body-menu">
                                <h4>Personal Details</h4>
                         </div>
                         <div class="content-menu-tab">
                               
                  

                                <nav class="nav nav-pills mb-2" id="nav-tabs" role="tablist">
                                      <li class="nav-item" role="presentation">
                                            <a href="#" class="nav-link" id="pills-tab-listtable" data-bs-toggle="pill" data-bs-target="#records" role="tab" aria-selected="false" aria-controls="pills-home" >Farmer List</a>
                                      </li>
                                      <li class="nav-item" role="presentation">
                                            <a href="#" class="nav-link active" id="pills-tab-register" data-bs-toggle="pill" data-bs-target="#register" role="tab" aria-selected="true" aria-controls="pills-register" >Register Farmer</a>
                                      </li>
                                      <li class="nav-item" role="presentation">
                                            <a href="#" class="nav-link" id="pills-tab-item-three" data-bs-toggle="pill" data-bs-target="#" role="tab" aria-selected="false" aria-controls="pills-item-three" >item three</a>
                                      </li>
                                      <li class="nav-item" role="presentation">
                                            <a href="#" class="nav-link" id="pills-tab-item-four" data-bs-toggle="pill" data-bs-target="#" role="tab" aria-selected="false" aria-controls="pills-item-four" >item four</a>
                                      </li>
                                      <li class="nav-item" role="presentation">
                                            <a href="#" class="nav-link" id="pills-tab-item-five" data-bs-toggle="pill" data-bs-target="#" role="tab" aria-selected="false" aria-controls="pills-item-five">item five</a>
                                      </li>
                                </nav>


                         </div>
                         <div class="tab-content" id="pills-tabContent">
                                     <div class="tab-pane fade" id="records" role="tabpanel" aria-labelledby="pills-tab-listtable">
                                        <table class="table table-border" id="famersData">
                                                <thead>
                                                     <tr>
                                                         <td>Fullname</td>
                                                         <td>Date of Birth</td>
                                                         <td>Gender</td>
                                                         <td>Marital Status</td>
                                                         <td>Community</td>
                                                       
                                                         <td>view details</td>
                                                     </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach($data as $farmer): ?>
                                                   <tr>
                                                    <td>{{$farmer->first_name}} {{$farmer->last_name}}</td>
                                                    <td>{{$farmer->dob}}</td>
                                                    <td>{{$farmer->gender}}</td>
                                                    <td>{{$farmer->marital_statu}}</td>
                                                    <td>{{$farmer->community}}</td>
                                                   <!-- <td><a href="#/{{$farmer->id}}" id="{{$farmer->id}}" class="view-details">delete</a></td>-->
                                                    <td><a href="#/{{$farmer->id}}" id="{{$farmer->id}}" class="view-details" data-bs-toggle="modal" data-bs-target="#profileBox">view details</a></td>

                                                </tr>
                                                    <?php endforeach ;?>
                                                </tbody>
                                        </table>
                                        

                                        
                                     </div>
                                     <div class="tab-pane fade show active" id="register" role="tabpanel" aria-labelledby="pills-tab-register">
                                        
                                     <div class="content-forms">
                               <div class="container-fluid">
                                       <div class="row">
                                       <div class="col-md-12">
                                        <form enctype="multipart/form-data" method="post" id="createfarmers">
                                        <input type="hidden" name="_token" value=" {{csrf_token()}}">
                                       <div class="row">
                                             <div class="col-md-3">
                                                <div class="profile">
                                                    <img src="{{asset('asset/image/profile.png')}}" class="profile-image" >
                                                </div>

                                                <div class="choose-image " style="display-block">
                                                     <div class="web-cam float-start">
                                                          <label for="">
                                                            <img src="{{asset('asset/image/dslr-camera.png')}}" class="profile-photo">
                                                            <p>Take a photo</p>
                                                          </label>
                                                     </div>
                                                     <div class="upload-photo float-end">
                                                         <label for="upload">
                                                            <img src="{{asset('asset/image/cloud-computing.png')}}">
                                                              <p>Upload  photo</p>
                                                          </label>
                                                        <input type="file" required name="load_photo" id="upload" >
                                                          
                                                     </div>
                                                </div><br>
                                                <div class="gender">
                                                       <h6>Gender</h6>
                                                       <span><input required type="radio" value="male" name="gender" id="male"> <label for="male">Male</label></span>
                                                       <span><input required type="radio" value="female" name="gender" id="female"> <label for="female">Female</label></span>
                                                </div>
                                                   
                                             </div>
                                             <div class="col-md-3">
                                                  <div class="form-group">
                                                      <label for="fname">First Name</label>
                                                      <input required type="text" name="fname" class="form-control" id="fname">
                                                 </div>
                                                 <div class="form-group">
                                                      <label for="dob">Birth Place</label>
                                                      <input required type="text" name="birth_place" class="form-control" id="birth_place">
                                                 </div>
                                                 <div class="form-group">
                                                      <label for="house_number">House Number</label>
                                                      <input required type="text" name="house_number" class="form-control" id="house_number">
                                                 </div>
                                                 <div class="form-group">
                                                      <label for="occupation">Occupation</label>
                                                      <input required type="text" name="occupation" class="form-control" id="occupation">
                                                 </div>
                                                 <div class="form-group">
                                                      <label for="region">Region</label>
                                                      
                                                      <select required name="region" class="form-control" id="region">
                                                            <option>Ahafo Region</option>
                                                            
                                                             <option>Ashanti Region</option>
                                                             <option>Bono</option>
                                                             <option>Bono East</option>
                                                             <option>Central Region</option>
                                                             <option>Eastern Region</option>
                                                             <option>Greater Accra</option>
                                                             <option>North Region</option>
                                                             <option>Volta</option>
                                                             <option>Wester</option>
                                                             <option></option>
                                                      </select>
                                                 </div>
                                             </div>
                                             <div class="col-md-3">
                                                  <div class="form-group">
                                                      <label for="lname">Last Name</label>
                                                      <input required type="text" name="lname" class="form-control" id="lname">
                                                 </div>
                                                 <div class="form-group">
                                                      <label for="fname">Date of Birth</label>
                                                      <input required type="date" name="dob" class="form-control" id="dob">
                                                 </div>
                                                 <div class="form-group">
                                                      <label for="community">Community</label>
                                                      <input required type="text" name="community" class="form-control" id="community">
                                                 </div>
                                                 <div class="form-group">
                                                      <label for="district">District</label>
                                                      <input required type="text" name="district" class="form-control" id="district">
                                                 </div>
                                                 <div class="form-group">
                                                      <label for="marital_status">Marital Status</label>
                                                      <select required name="marital_status" class="form-control" id="marital_status">
                                                           <option>Single</option>
                                                           <option>Married</option>
                                                           <option>Divorced</option> 
                                                      </select>
                                                 </div>
                                             </div>
                                             <div class="col-md-3">
                                                  <div class="form-group">
                                                      <label for="bio">Bio</label><br>
                                                      <textarea required id="bio" name="bio" style="width:100%;height:100px" placeholder="write a short introduction"></textarea>
                                                 </div>
                                             </div>
                                       </div>
                                       <div class="row">
                                             <div class="col-md-12 p-1" style="text-align:right">
                                                  <button type="reset" id="reset">reset</button>
                                                  <button type="submit" id="save">save</button>
                                             </div>
                                       </div>
                                 </div>
                             </form>
                             </div>

                               </div>
                         </div>








                                     <!--end of tab-->
                                     </div>
                         </div>
                         <!---->
                   </div>
             </div>

                                                </div>
          </div>


          <div class="modal" id="resopnseBox">
                <div class="modal-dialog">
                     <div class="modal-content">
                            <div class="modal-body">
                                 <div class="modal-body-header">
                                      <h5 class="modal-title">Farmer Profile</h5>
                                      <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="close"></button>
                                 </div>
                                 <div class="modal-body-message" style="text-align:center">
                                         
                                 </div>
                               
                            </div>
                     </div>
                </div>
          </div>
          <div class="modal" id="profileBox">
                <div class="modal-dialog" style="width:450px">
                    <div class="modal-content">
                           <div class="modal-header">
                                 <h5 class="modal-title">Farmer Profile</h5>
                                 <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="close"></button>
                           </div>
                          <div class="modal-body">
                                    <div class="image-profile">
                                          
                                    </div>
                                    <div class="row" style="width:100%" id="props">
                                          <div class="col-md-6">
                                                <label>Birth Place</label>
                                                <p class="birth_place"></p>
                                          </div>
                                          <div class="col-md-6">
                                               <label>Date of Birth</label>
                                                <p  class="dob"></p>
                                          </div>
                                          <div class="col-md-6">
                                                <label>House Number</label>
                                                <p  class="house_number"></p>
                                          </div>
                                          <div class="col-md-6">
                                                <label>Community</label>
                                                <p  class="community"></p>
                                          </div>
                                          <div class="col-md-6">
                                          <label>Occupation</label>
                                                <p  class="occupation"></p>
                                          </div>
                                          <div class="col-md-6">
                                          <label>District</label>
                                                <p  class="district"></p>
                                          </div>
                                          <div class="col-md-6">
                                          <label>Region</label>
                                                <p class="region"></p>
                                          </div>
                                          <div class="col-md-6">
                                          <label>Marital Status</label>
                                                <p class="ms"></p>
                                          </div>
                                        
                                    </div>
                                    <div class="row" style="width:100%" id="prop">
                                    <label>Bio</label>
                                                <p class="bio"></p>
                                          </div>
                          </div>
                    </div>
                </div>

          </div>

          <script src="{{ asset('asset/bootstrap-5.3.2-dist/js/bootstrap.min.js') }}"></script>
          <script src="{{ asset('asset/js/jquery-3.4.1.js') }}"></script>
          <script src="{{asset('asset/js/famres.js')}}" >

          </script>
      </body>
</html>





