 <?php 
    include('header.php'); 
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
            <h1 class="page-heading__title">Login or <span class="highlight">Register</span></h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li><a href="_football_index.php">Home</a></li>
              <li><a href="_football_shop-list.php">Shop</a></li>
              <li class="active">Login and Register</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

     <!-- Content
    ================================================== -->
    <div class="site-content">

      <div class="container">
        <div class="alert" ><h4> Your Message Has Been Sent!</h4></div>
        <div class="row">
          <div class="col-md-6" style="width: 100%;">
            <!-- Register -->
            <div class="card" >
              <div class="card__header">
                <h4>Register Now</h4>
              </div>
            <div class="card__content">
                  <!-- Contact Form -->
                <div class="row"> 
                <!--  <div class="form-group">
                        <label>Your Name <span class="required">*</span></label>
                         <input name="RegisterName" type="text" id="register-form-name" placeholder="Your Name*" value="" minlength="2" required="" aria-required="true" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Your Surname <span class="required">*</span></label>
                         <input name="registerSurname" type="text" id="register-form-Surname" placeholder="Your Surname*" value="" minlength="2" required="" aria-required="true" class="form-control">
                      </div> -->
                      <div class="form-group">
                         <label for="register-form-email">Your Email <span class="required">*</span></label>
                         <input name="register-form-email" type="email" id="registerEmail" placeholder="Your Email*" value="" required="" aria-required="true" class="form-control">
                      </div>
                      <div class="form-group">
                         <label for="register-form-password">Your Password <span class="required">*</span></label>
                         <input name="register-form-password" type="password" id="registerPassword" placeholder="Password*" value="" required="" aria-required="true" class="form-control">
                      </div>
                  </div>
                  <div class="form-group form-group--submit">
                    <button id="signupButton" type="submit" class="btn btn-primary-inverse btn-lg btn-block">Create Your Account</button>
                  </div>
                <!-- Contact Form / End -->
              </div>
            </div>
            <!-- Register / End -->
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
  <!-- Vendor JS -->
  <script src="assets/vendor/jquery-duotone/jquery.duotone.min.js"></script>
  <script src="assets/vendor/gmap3/dist/gmap3.min.js"></script>
   <!-- Template JS -->
  <script src="assets/js/init.js"></script> 
  </body>
  </html> 
  
  
