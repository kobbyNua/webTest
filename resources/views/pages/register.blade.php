<!DOCTYPE html>

<html>
      <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" type="text/css" href="{{ asset('asset/bootstrap-5.3.2-dist/css/bootstrap.min.css')}}">
          <link rel="stylesheet" type="text/css" href="{{ asset('asset/main/main.css')}}">
          <link rel="stylesheet" type="text/css" href="{{ asset('asset/fontawesome/css/all.css')}}">
      </head>
      <body>
            
          <div class="wrapper-1">
              <form id="userRegistration" method="post">
              <input type="hidden" name="_token" value=" {{csrf_token()}}">
                  <div class="register-form">
                      
                       <div class="row">
                            <div class="col-md-6 col-12 mb-3">
                                   <div class="form-group">
                                          <label for="fname">First Name</label>
                                          <input type="text" id="fname" placeholder="First Name" class="form-control" name="fname">
                                   </div>
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                   <div class="form-group">
                                          <label for="lname">last Name</label>
                                          <input type="text" id="lname" placeholder="last Name" class="form-control" name="lname">
                                   </div>
                            </div>
                       </div>
                       <div class="row">
                            <div class="col-md-12 col-12 mb-3">
                                   <div class="form-group">
                                          <label for="uname">Username</label>
                                          <input type="text" id="uname" placeholder="Username" class="form-control" name="username">
                                   </div>
                            </div>

                            <div class="col-md-12 col-12 mb-3">
                                   <div class="form-group">
                                          <label for="email">Email</label>
                                          <input type="email" id="email" placeholder="Email" class="form-control" name="email">
                                   </div>
                            </div>
                            <div class="col-md-12 col-12 mb-3">
                                   <div class="form-group">
                                          <label for="role">Role</label>
                                          <select class="form-control" id="role" name="role">
                                                 <option>Adminstrator</option>
                                                 <option>Staff</option>
                                                 <option>farmer</option>
                                          </select>
                                   </div>
                            </div>
                            <div class="col-md-12 col-12 mb-3">
                                   <div class="form-group">
                                          <label for="password">Password</label>
                                          <input type="password" id="password" placeholder="Password" class="form-control" name="password">
                                          <span class="pass-error"></span>
                                   </div>
                            </div>
                            <div class="col-md-12 col-12 mb-3">
                                   <div class="form-group">
                                          <label for="confirm_password">Confirm Passsword</label>
                                          <input type="password" id="confirm_password" placeholder="Confirm Password" onmouseout='checkpass()' class="form-control" name="cpassword">
                                          <span class="pass-error"></span>
                                   </div>
                            </div>
                            
                       </div>
                       <button type="submit">register</button>
                        
                  </div>
              </form>
          </div>

          <div class="modal" id="resopnseBox">
                <div class="modal-dialog">
                     <div class="modal-content">
                            <div class="modal-body">
                                 <div class="modal-body-header">
                                      <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="close"></button>
                                 </div>
                                 <div class="modal-body-message" style="text-align:center">
                                         
                                 </div>
                               
                            </div>
                     </div>
                </div>
          </div>
          <script src="{{ asset('asset/bootstrap-5.3.2-dist/js/bootstrap.min.js') }}"></script>
          <script src="{{ asset('asset/js/jquery-3.4.1.js') }}"></script>
           <script src="{{asset('asset/js/register.js')}}" >

           </script>
     </body>
</html>
