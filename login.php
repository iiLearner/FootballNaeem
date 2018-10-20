<?php include('server.php') ?>
<?php 
    //define page title
    $title = 'Login';
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
            <h1 class="page-heading__title"><span class="highlight">Login</span></h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li><a href="_football_index.php">Home</a></li>
              <li><a href="_football_shop-list.php">Shop</a></li>
              <li class="active">Login</li>
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
                <h4>Login to your Account</h4>
              </div>
              <div class="card__content">
                <!-- Login Form -->
                <form class="form-group" method="post" action="login.php" autocomplete="off">
                  <?php include('errors.php'); ?>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="<?php echo $username; ?>" class="form-control" placeholder="Username..." required="">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password...">
                  </div>
                  <div class="form-group form-group--password-forgot">
                    <label class="checkbox checkbox-inline">
                      <input type="checkbox" id="inlineCheckbox1" value="option1" checked> Remember Me
                      <span class="checkbox-indicator"></span>
                    </label>
                    <span class="password-reminder">Forgot your password? <a href="#">Click Here</a></span>
                  </div>
                  <div class="form-group form-group--sm">
                   <Button type="submit" name="login" value="login" class="btn btn-primary-inverse btn-lg btn-block">Login</Button>
                  </div>
                </form>
                <!-- Login Form / End -->
                <div class="form-group form-group--sm" style="padding-top: 10px;">
                     <button class="btn btn-primary-inverse btn-lg btn-block" onclick="location.href='registrati.php#header'"> Register Your Account</button>
                </div>
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
   <!-- Template JS -->
  <script src="assets/js/init.js"></script>
  <!-- Core JS -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/js/core-min.js"></script>
  <!-- Vendor JS -->
  <script src="assets/vendor/twitter/jquery.twitter.js"></script>
  <script src="assets/vendor/jquery-duotone/jquery.duotone.min.js"></script>
  <script src="assets/vendor/marquee/jquery.marquee.min.js"></script>
  <!-- Template JS -->
  <script src="assets/js/init.js"></script> 
  <script src="assets/js/custom.js"></script>
  
  </body>
  </html>

  
