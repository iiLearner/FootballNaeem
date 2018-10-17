<?php 
    //define page title
    $title = 'login';
    require('header.php'); 

?>
<!DOCTYPE html>
<html lang="zxx">
<body>
    <!-- Header / End -->

  

    <!-- Page Heading
    ================================================== -->
    <div class="page-heading">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <ol class="page-heading__breadcrumb breadcrumb">
              <li><a href="_football_index.php">Home</a></li>
              <li class="active">Utenti</li>
            </ol>
          </div>
        </div>
      </div>
    </div>


<!-- Content
================================================== -->
<div class="site-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6" style="width: 100%;">
            <!-- Login -->
            <div class="card" id="login-id">
              <div class="card__header">
                <h4>Please Sign Up</h4>
              </div>
              <div class="card__content">
                <!-- Login Form -->
                  <div class="form-group">
                    <label for="login-name">Your Email</label>
                    <input type="email" name="login-name" id="login-name" class="form-control" placeholder="Enter your email address...">
                  </div>
                  <div class="form-group">
                    <label for="login-password">Your Password</label>
                    <input type="password" name="login-password" id="login-password" class="form-control" placeholder="Enter your password...">
                  </div>
                  <div class="form-group form-group--password-forgot">
                    <label class="checkbox checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" value="option1" checked> Remember Me
                      <span class="checkbox-indicator"></span>
                    </label>
                    <span class="password-reminder">Forgot your password? <a href="#">Click Here</a></span>
                  </div>
                  <div class="form-group form-group--sm">
                    <button class="btn btn-primary-inverse btn-lg btn-block" onclick="login()" > Sign in to your account</button>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <button class="btn btn-facebook btn-icon btn-block"><i class="fa fa-facebook"></i> Sign In via Facebook</button>
                    </div>
                    <div class="col-md-6">
                      <button class="btn btn-twitter btn-icon btn-block"><i class="fa fa-twitter"></i> Sign in via Twitter</button>
                    </div>
                  </div>
                    <div class="form-group form-group--sm" style="padding-top: 10px;">
                    <button class="btn btn-primary-inverse btn-lg btn-block" onclick="location.href='_football_shop-registra.php#header'" onclick="login()" > Register Your Account</button>
                    </div>
                <!-- Login Form / End -->

              </div>
            </div>
            <!-- Login / End -->
          </div>
          
        </div>
      </div>
    </div>


<!-- Content / End -->

<!-- Footer
================================================== -->
<?php 
	include('footer.php'); 
?>
<!-- Footer / End -->
    
<!-- Javascript Files
================================================== -->
<!-- Core JS -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/js/core-min.js"></script>
  <script src="assets/js/custom.js"></script>
  
  <!-- Vendor JS -->
  <script src="assets/vendor/jquery-duotone/jquery.duotone.min.js"></script>

  <script src="assets/vendor/gmap3/dist/gmap3.min.js"></script>
  
  <!-- Firebase Script -->
  <script src="https://www.gstatic.com/firebasejs/5.1.0/firebase.js"></script>

  <!-- Template JS -->
  <script src="assets/js/init.js"></script>
  <script src="assets/js/custom1.js"></script>
  
  </body>
  </html>