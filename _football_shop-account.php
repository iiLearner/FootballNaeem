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
            <h1 class="page-heading__title">Your <span class="highlight">Account</span></h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li><a href="_football_index.html">Home</a></li>
              <li><a href="_football_shop-list.html">Shop</a></li>
              <li class="active">Your Account</li>
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

          <div class="col-md-4">

            <!-- Account Navigation -->
            <div class="card">
              <div class="card__content">
                <nav class="df-account-navigation">
                  <ul>
                    <li class="df-account-navigation__link df-account-navigation__link--active">
                      <a href="#"><small>Account</small>Personal Information</a>
                    </li>
                    <li class="df-account-navigation__link df-account-navigation__link">
                      <a href="#"><small>Account</small>Billing Information</a>
                    </li>
                    <li class="df-account-navigation__link df-account-navigation__link">
                      <a href="#"><small>Account</small>Shipping Information</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- Account Navigation / End -->
          </div>

          <div class="col-md-8">

            <!-- Personal Information -->
            <div class="card card--lg">
              <div class="card__header">
                <h4>Personal Information</h4>
              </div>
              <div class="card__content">
                <form action="#" class="df-personal-info">

                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="account-email">Email <span class="required">*</span></label>
                        <input type="email" class="form-control" value="" name="account-email" id="account-email" placeholder="eric_rodgers@yourmail.com">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="account-username">Username <span class="required">*</span></label>
                        <input type="text" class="form-control" value="" name="account-username" id="account-username" placeholder="Your Username here...">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="account-password">Change Password</label>
                        <input type="password" class="form-control" value="" name="account-password" id="account-password" placeholder="**********">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="account-password-repeat">Repeat Password</label>
                        <input type="password" class="form-control" value="" name="account-password-repeat" id="account-password-repeat" placeholder="**********">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="account-first-name">First Name</label>
                        <input type="text" class="form-control" value="" name="account-first-name" id="account-first-name" placeholder="Eric">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="account-last-name">Last Name</label>
                        <input type="text" class="form-control" value="" name="account-last-name" id="account-last-name" placeholder="Rodgers">
                      </div>
                    </div>
                  </div>

                  <div class="form-group--submit">
                    <button type="submit" class="btn btn-primary-inverse btn-lg btn-block">See all the changes</button>
                  </div>

                </form>
              </div>
            </div>
            <!-- Personal Information / End -->
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
 <!-- Firebase Script -->
  
  <!-- Firebase Script -->
<script src="https://www.gstatic.com/firebasejs/5.1.0/firebase.js"></script>
   <script src="assets/js/custom1.js"></script>
  <script src="assets/js/custom2.js"></script>
  

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
  
  </body>
  </html>