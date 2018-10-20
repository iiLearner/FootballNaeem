<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<?php 
    //define page title
    $title = 'Account';
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
            <h1 class="page-heading__title">Your <span class="highlight">Account</span></h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li><a href="_football_index.php">Home</a></li>
              <li><a href="_football_shop-list.php">Shop</a></li>
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
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
          <h3>
            <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
            ?>
          </h3>
            </div>
            <?php endif ?>

              <!-- logged in user information -->
              <?php  if (isset($_SESSION['username'])) : ?>
                <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
              <?php endif ?>
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
  <script src="assets/js/custom2.js"></script>

  </body>
  </html>