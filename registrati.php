<?php include('server.php') ?>
<?php
$title = 'Registrati';
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
                			<h4>Registrati</h4>
              			</div>
              			<div class="card__content">
                			<!-- Login Form -->
                			<form class="form-group" action="registrati.php" method="post" autocomplete="off">
	                			<?php include('errors.php'); ?>
                          <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" name="name"  class="form-control" placeholder="Enter Your Naem..." required="">
                          </div>
                          <div class="form-group">
                            <label for="surname">Cognome</label>
                            <input type="text" name="surname" class="form-control" placeholder="Enter Your Surname..." required="">
                          </div>
	                  			<div class="form-group">
	                    			<label for="username">Nome Utente</label>
	                    			<input type="text" name="username" id="username" value="<?php echo $username; ?>" class="form-control" placeholder="Choose a Username..." required="">
	                  			</div>
	                  			<div class="form-group">
				                    <label for="email">Email</label>
				                    <input type="email" name="email" id="email" value="<?php echo $email; ?>" class="form-control" placeholder="Enter your Email..." required="">
				                </div>
				                <div class="form-group">
				                    <label for="password">Password</label>
				                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password..." required="" minlength="5">
				                </div>
	                  			<div class="form-group">
				                    <label for="password">Conferma Password</label>
				                    <input type="password" name="Cpassword" id="Cpassword" class="form-control" placeholder="Confirm Password..." required="" minlength="5">
				                </div>
	                   			<div class="form-group form-group--sm" style="padding-top: 10px;">
	                    			<Button type="submit" name="register" value="register" class="btn btn-primary-inverse btn-lg btn-block">Registra</Button>
	                    		</div>
	                  			<div class="form-group form-group--sm">
	                    			<button class="btn btn-primary-inverse btn-lg btn-block" onclick="location.href='login.php#header'" > Sign in to your account</button>
	                  			</div>
                  			</form>
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
 
  <!-- Template JS -->
  <script src="assets/js/init.js"></script>

  </body>
  </html>