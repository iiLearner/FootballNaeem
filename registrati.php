<?php
$title = 'Registrati';
    require('header.php'); 
    // REGISTER USER
  if (isset($_POST['register'])) {
    // receive all input values from the form
    $db = mysqli_connect('localhost', 'root', '', 'football');
    $error;
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $surname = mysqli_real_escape_string($db, $_POST['surname']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $Cpassword = mysqli_real_escape_string($db, $_POST['Cpassword']);

    if ($password != $Cpassword) {
    $error = "The two passwords do not match";
    }

    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
      if ($user['username'] === $username) {
        $error = "Username already exists";
      }

      if ($user['email'] === $email) {
        $error ="email already exists";
      }
    }

    // Finally, register user if there are no errors in the form
    if (empty($error)) {
      $password_e = md5($password);//encrypt the password before saving in the database

      $query = "INSERT INTO users (name, surname, username, email, password) 
            VALUES('$name', '$surname', '$username', '$email', '$password_e')";
      mysqli_query($db, $query);
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: account.php');
    }
  }
  require("navbar.php");
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
          <?php if(!empty($error)) echo $error; ?>
        	<div class="col-md-6" style="width: 100%;">
            	<!-- Login -->
            		<div class="card" id="login-id">
              			<div class="card__header">
                			<h4>Registrati</h4>
              			</div>
              			<div class="card__content">
                			<!-- Login Form -->
                			<form class="form-group" action="registrati.php" method="post" autocomplete="off">
	                		
                          <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" name="name"  class="form-control" placeholder="Enter Your Name..." required="">
                          </div>
                          <div class="form-group">
                            <label for="surname">Cognome</label>
                            <input type="text" name="surname" class="form-control" placeholder="Enter Your Surname..." required="">
                          </div>
	                  			<div class="form-group">
	                    			<label for="username">Nome Utente</label>
	                    			<input type="text" name="username" id="username"  class="form-control" placeholder="Choose a Username..." required="">
	                  			</div>
	                  			<div class="form-group">
				                    <label for="email">Email</label>
				                    <input type="email" name="email"  class="form-control" placeholder="Enter your Email..." required="">
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