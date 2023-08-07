
<footer>
    <div id="footer" class="footer-top">
    <img src="{{ asset('frontend') }}/images/wave%20no3.svg" class="footer-img" alt="">
  
      <div class="container">
        <div class="row">
  
          <div class="col-md-4">
          <a href="index-2.html"><img src="{{ asset('frontend') }}/images/emerlogo.jpg" alt="" height="10%" width="50%"></a>
  
            <!-- <h6>About Us</h6> -->
            <ul>
  
            <li><a href="bike-listing.html" style="color:white; text-style:bold">Services</a></li>
            <li><a href="page4aab.html?type=servicearea" style="color:white; text-style:bold">Service Area</a></li>
            <li><a href="page5330.html?type=aboutus" style="color:white; text-style:bold">About Us</a></li>
            <li><a href="contact-us.html" style="color:white; text-style:bold">Contact Us</a></li>
              <li><a href="page40e2.html?type=privacy" style="color:white; text-style:bold">Privacy</a></li>
            <li><a href="page19c2.html?type=terms" style="color:white; text-style:bold">Terms of use</a></li>
            </ul>
          </div>
  
          <div class="col-md-4 footer-box">
                         <p><b>CONTACT US</b></p>
                         <P><a href="https://goo.gl/maps/X1XYbpfxgRExPXfC7" style="color:#fff; text-decoration:none"><i class="fa fa-map-marker"></i>Bogura</P></a>
                         <P><a href="tel:01756-251400" style="color:#fff; text-decoration:none"><i class="fa fa-phone"></i>+8801756-251400</P></a>
                         <P><a href="mailto:ecs@gmail.com" style="color:#fff; text-decoration:none"><i class="fa fa-envelope-o"></i>isratjahan52m@gmail.com</P></a>
                         <P><a href="mailto:ecs@gmail.com" style="color:#fff; text-decoration:none"><i class="fa fa-envelope-o"></i>isratjahan52m@gmail.com</P></a>
  
                       </div>
  
          <div class="col-md-4 col-sm-4">
            <h6 style="color:white">Subscribe Newsletter</h6>
            <div class="newsletter-form">
              <form method="post" action="{{ route('subscribers.store') }}">
                @csrf
                <div class="form-group">
                    <input type="email" name="email" class="form-control newsletter-input" required placeholder="Enter Email Address" />
                </div>
                <button type="submit" name="emailsubscibe" class="btn btn-block">Subscribe <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </form>
            
              <p class="subscribed-text">*We send great deals and latest auto news to our subscribed users very week.</p>
            </div>
           
          </div>
         
        </div>
        <hr>
                     <p class="copyright">Copyright</p>
  
       
      </div>
      
     
   
    <!-- <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-push-6 text-right">
            <div class="footer_widget">
              <p>Connect with Us:</p>
              <ul>
                <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="ecs@gmail.com"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div> -->
          <!-- <div class="col-md-6 col-md-pull-6">
            <p class="copy-right">Copyright &copy; 2021 Emergency Courier Service.Brought To You By <a href="https://www.facebook.com/profile.php?id=100006323677239">ECS Team</a></p>
          </div>
        </div>
      </div>
    </div> -->
    
  </footer>
  <!-- /Footer-->
  
  <!--Back to top-->
  <!-- <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div> -->
  <!--/Back to top-->
  
  <!--Login-Form -->
  
  <div class="modal fade" id="loginform">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Login</h3>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="login_wrap">
              <div class="col-md-12 col-sm-6">
                <form method="post" action="{{ route('login') }}">
                  @csrf
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email address*">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password*">
                  </div>
                  <div class="form-group checkbox">
                    <input type="checkbox" id="remember">
                 
                  </div>
                  <div class="form-group">
                    <input type="submit" name="login" value="Login" class="btn btn-block">
                  </div>
                </form>
              </div>
             
            </div>
          </div>
        </div>
        <div class="modal-footer text-center">

          <p>Don't have an account? <a href="#signupform" data-toggle="modal" data-dismiss="modal">Signup Here</a></p>
        </div>
      </div>
    </div>
  </div><!--/Login-Form -->
  
  <!--Register-Form -->
  

  
 
  <script>
  function checkAvailability() {
  $("#loaderIcon").show();
  jQuery.ajax({
  url: "check_availability.php",
  data:'emailid='+$("#emailid").val(),
  type: "POST",
  success:function(data){
  $("#user-availability-status").html(data);
  $("#loaderIcon").hide();
  },
  error:function (){}
  });
  }
  </script>
  <script type="text/javascript">
  function valid()
  {
  if(document.signup.password.value!= document.signup.confirmpassword.value)
  {
  alert("Password and Confirm Password Field do not match  !!");
  document.signup.confirmpassword.focus();
  return false;
  }
  return true;
  }
  </script>
  <div class="modal fade" id="signupform">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Sign Up</h3>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="signup_wrap">
              <div class="col-md-12 col-sm-6">
                <form  method="post" action="{{ route('register.direct') }}">
                  @csrf
                
                  <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Full Name" required="required">
                  </div>
  
                  <!-- <div class="form-group">
                    <input type="text" class="form-control" name="picloc" placeholder="Address of Your Pickup Location" required="required">
                  </div> -->
  
                        {{-- <div class="form-group">
                    <input type="text" class="form-control" name="mobileno" placeholder="Mobile Number" maxlength="11" required="required">
                  </div> --}}
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="emailid" onBlur="checkAvailability()" placeholder="Email Address" required="required">
                     <span id="user-availability-status" style="font-size:12px;"></span> 
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password"required="required">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="" placeholder="Confirm Password" >
                  </div>
                  <div class="form-group checkbox">
                    <input type="checkbox" id="terms_agree" required="required" checked="">
                    <label for="terms_agree">I Agree with <a href="#">Terms and Conditions</a></label>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Sign Up" name="signup" id="submit" class="btn btn-block">
                  </div>
                </form>
              </div>
              
            </div>
          </div>
        </div>
        <div class="modal-footer text-center">
          <p>Already got an account? <a href="#loginform" data-toggle="modal" data-dismiss="modal">Login Here</a></p>
        </div>
      </div>
    </div>
  </div>
  <!--/Register-Form -->
  
  <!--Forgot-password-Form -->
    <script type="text/javascript">
  function valid()
  {
  if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
  {
  alert("New Password and Confirm Password Field do not match  !!");
  document.chngpwd.confirmpassword.focus();
  return false;
  }
  return true;
  }
  </script>
  <div class="modal fade" id="forgotpassword">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
  
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Password Recovery</h3>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="forgotpassword_wrap">
              <div class="col-md-12">
                <form name="chngpwd" method="post" onSubmit="return valid();">
                  <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Your Email address*" required="">
                  </div>
    <div class="form-group">
                    <input type="text" name="mobile" class="form-control" placeholder="Your Reg. Mobile*" required="">
                  </div>
    <div class="form-group">
                    <input type="password" name="newpassword" class="form-control" placeholder="New Password*" required="">
                  </div>
    <div class="form-group">
                    <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password*" required="">
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Reset My Password" name="update" class="btn btn-block">
                  </div>
                </form>
                <div class="text-center">
                  <p class="gray_text">For security reasons we don't store your password. Your password will be reset and a new one will be send.</p>
                  <p><a href="#loginform" data-toggle="modal" data-dismiss="modal"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back to Login</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!--/Forgot-password-Form -->
  
  <!-- Scripts -->
  <script src="{{ asset('frontend') }}/assets/js/jquery.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/js/interface.js"></script>
  <!--Switcher-->
  <script src="{{ asset('frontend') }}/assets/switcher/js/switcher.js"></script>
  <!--bootstrap-slider-JS-->
  <script src="{{ asset('frontend') }}/assets/js/bootstrap-slider.min.js"></script>
  <!--Slider-JS-->
  <script src="{{ asset('frontend') }}/assets/js/slick.min.js"></script>
  <script src="{{ asset('frontend') }}/assets/js/owl.carousel.min.js"></script>
  
  </body>
  
  <!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
  
  <!-- Mirrored from eneedei.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jun 2021 05:48:50 GMT -->
  </html>
  