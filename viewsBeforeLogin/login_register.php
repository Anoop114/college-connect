

<!-- Landing Page Contents
    ================================================= -->
    <div id="lp-register" style="background: linear-gradient(to right, #497784 , #435f43); height: max-content;">
    	<div class="container " style="padding-top: 100px; padding-bottom: 100px;">
        <div class="row">
        	<div class="col-sm-5">
            <div class="intro-texts">
            	<h1 class="text-white" style="color: #60ccff; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">College Connect</h1>
            	<h3 class="text-white">A New Perspective.</h3>
              
            </div>
          </div>
        	<div class="col-sm-6 col-sm-offset-1">
            <div class="reg-form-container"> 
            
              <!-- Register/Login Tabs-->
              <div class="reg-options">
                <ul class="nav nav-tabs">
                  <li class=""><a href="#register" data-toggle="tab">Register</a></li>
                  <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
                </ul><!--Tabs End-->
              </div>
              
              <!--Registration Form Contents-->
              <div class="tab-content">
                <div class="tab-pane " id="register">
                  <h3>Welcome to College-Connect !!!</h3>
                  <br>
                  <div class="row">
                    <form name="registration_form" id='registration_form' class="form-inline">
                      
                      <div class="form-group col-xs-7">
                        <label for="validateID" class="sr-only">validateID</label>
                        <input id="validateID" class="form-control input-group-lg" type="text" name="validateID" title="Enter first name" placeholder="Enter your valid college_ID"/>
                      </div>
                    </form>
                  <button class="btn btn-primary col-xs-4" id="validate_id">Validate</button>
                  </div>
                  <div id="verified" class="alert alert-success" role="alert"></div>
                  <div id="notVerified" class="alert alert-danger" role="alert"></div>
                  <div style="height: 1px; width: 100%; background-color: #149AC9;"></div>
                  
                  <!--Register Form-->
                  
                  <form name="registration_form" id='registration_form' class="form-inline" style="margin-top: 15px;">
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="firstname" class="sr-only">First Name</label>
                        <input id="firstname" class="form-control input-group-lg" type="text" name="firstname" title="Enter first name" placeholder="First name"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="lastname" class="sr-only">Last Name</label>
                        <input id="lastname" class="form-control input-group-lg" type="text" name="lastname" title="Enter last name" placeholder="Last name"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="Username" class="sr-only">Username</label>
                        <input id="username" class="form-control input-group-lg" type="text" name="Username" title="Enter Username" placeholder="Choose your Username"/>
                      </div>
                    </div>
                  </form>
                    
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <button id="checkAvaliability" class="btn btn-primary col-xs-6">Check Availability</button>
                      </div>
                    </div>
                    <div id="validate_username" class="alert alert-success" role="alert"></div>
                  <form name="registration_form" id='registration_form' class="form-inline" style="margin-top: 15px;">
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Password"/>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="confirm_password" class="sr-only">Confirm Password</label>
                        <input id="confirmPassword" class="form-control input-group-lg" type="password" name="confirm_password" title="Enter password" placeholder="Confirm Password"/>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="alter_email" class="sr-only">Alternate Email</label>
                        <input id="alterEmail" class="form-control input-group-lg" type="email" name="alter_email" title="Enter email" placeholder="Alternate Email"/>
                      </div>
                    </div>
                    <div class="row">
                      
                      <div id="gender" class="form-group gender" style="margin-left: 15px;">
                        <label class="radio-inline">
                          <input type="radio" name="gender" value="male">Male
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="gender" value="female">Female
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="gender" value="other">Others
                        </label>
                      </div>
                  
                    </div>
                  
                    <div class="row">
                      <div class="form-group col-sm-3 col-xs-6">
                        <label for="role" class="sr-only"></label>
                        <select class="form-control" id="role">
                          <option value="role" disabled selected>Role</option>
                          <option value="student">Student</option>
                          <option value="teacher">Teacher</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-3 col-xs-6">
                        <label for="stream" class="sr-only"></label>
                        <select class="form-control" id="stream">
                          <option value="stream" disabled selected>Stream</option>
                          <option value="BBA(GEN)">BBA(GEN)</option>
                          <option value="BBA(IND)">BBA(IND)</option>
                          <option value="CSE">CSE</option>
                          <option value="CI">CI</option>
                          <option value="ME">ME</option>
                          <option value="EE">EE</option>
                          <option value="ECE">ECE</option>
                        </select>
                      </div>
                    </div>
                    
                  </form><!--Register Now Form Ends-->
                  <br>
                  <button id="registerBtn" class="btn btn-primary">Register Now</button>
                  <br><br>
                  <p><a href="#">Already have an account?</a></p>
                </div><!--Registration Form Contents Ends-->
                
                <!--Login-->
                <div class="tab-pane active" id="login">
                  <h3>Login</h3>
                  
                  <!--Login Form-->
                  <form name="Login_form" id='Login_form'>
                     <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-email" class="sr-only">Email</label>
                        <input id="my-email" class="form-control input-group-lg" type="text" name="Email" title="Enter Email" placeholder="username@domain.com"/>
                      </div>
                    </div>
                    <p>For e.g. your username@college-connect.in</p>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-password" class="sr-only">Password</label>
                        <input id="my-password" class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Password"/>
                      </div>
                    </div>
                  </form><!--Login Form Ends--> 
                  <p><a href="#">Forgot Password?</a></p>
                  <button id="loginBtn" class="btn btn-primary">Login Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-sm-offset-6">
          
            <!--Social Icons-->
            <!--
            <ul class="list-inline social-icons">
              <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
              <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
              <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
              <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
              <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>