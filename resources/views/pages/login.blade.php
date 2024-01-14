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
            
          <div class="wrapper">
               
                <div class="row">
                       <div class="col-md-6 m-0 p-0">
                              <div class="login-info-box">
                                    <div class="container">
                                           <div class="login-info-box-header">
                                                 <img src="{{asset('asset/image/e-ADAPP-logo-23.png')}}" class="logo">
                                           </div>
                                           <div class="login-info-box-body">
                                                 <h1>Login</h1> 
                                                 <div class="login-info-box-form">
                                                      <form method="post" id="loginForm">
                                                           
                                                      <input type="hidden" name="_token" value=" {{csrf_token()}}">
                                                      <div class="form-group">
                                                            <label id="email">Email</label>

                                                                  <input type="email" name="email" required placeholder="email or username" class="form-control form-control-lg" >
                                                            
                                                      </div>

                                                       <div class="form-group">
                                                            <label id="email">Password</label>
                                                            
                                                                 
                                                                  <input type="password" required name="password" placeholder="Password" class="form-control form-control-lg" aria-label="password" aria-describedby="basic-addon1">
                                                                  <img src="{{ asset('asset/image/hide.png') }}" class="hide">
                                                           
                                                       </div>
                                                       <div class="form-group remeber-me-and-pass">
                                                             <span class="float-start" id="rem" style="width:50%;"><input  type="checkbox" id="checklabel"><label> Remeber me</label></span>
                                                             <span class="float-end" style="width:50%;text-align:right"><a href="#">Forgot password</a></span>
                                                       </div>
                                                       



                                                      <button class="btn btn-info btn-lg" type="submit"> Login</button>
                                                      </form>
                                                      <div class="account-notice">
                                                               <p>Do you have an account?  <a href="register/" title="click to register">sign up</span></a>
                                                       </div>
                                                       <div class="login-option">
                                                          <h6><span>Or continue with</span></h6>
                                                       </div>  
                                                       <div class="logim-option-2">
                                                            <div class="social-login">
                                                                  <img src="{{ asset('asset/image/search.png') }}">
                                                             </div>
                                                             <div class="social-login">
                                                                  <img src="{{ asset('asset/image/facebook.png') }}">
                                                             </div>
                                                             <div class="social-login">
                                                                  <img src="{{ asset('asset/image/twitter.png') }}">
                                                             </div>
                                                       </div>                                                    

                                                 </div>

                                           </div>
                                           <!--<div class="login-info-box-body">
                                                

                                                <div class="login-info-box-form">



                                                     
                                                </div>


                                                <div class="terms-and-condition">
                                                         <p>by clicking the button above you agree to our terms of us and privacy policy</p>
                                                </div>
                                           </div>-->
                                    </div>
                              </div>
                       </div>
                       <div class="col-md-6 m-0 p-0">
                             <div class="image-prop"></div>
                       </div>
                </div>
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
           <script src="{{asset('asset/js/login.js')}}" >

           </script>
      </body>
</html>