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
            <h1 class="page-heading__title"><span class="highlight">Iscrizione</span></h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li><a href="_football_index.php">Home </a></li>
              <li><a href = "javascript:history.back()">/ Corsi</a>
              <li class="active">Iscrizione</li>
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
                                <h4>Iscrivit al corso</h4>
                            </div>
                            <div class="card__content">

                                <!-- Subscription Form -->

                                <div class="form-group">
                                    <label for="subscription-name">Nome</label>
                                    <input type="text" name="subscription-name" id="subscription-name" class="form-control" placeholder="Inserisci il Nome...">
                                </div>
                                <div class="form-group">
                                    <label for="subscription-name">Cognome</label>
                                    <input type="text" name="subscription-surname" id="subscription-surname" class="form-control" placeholder="Inserisci il Cognome...">
                                </div>

                                <div class="form-group">
                                    <label for="subscription-name">Email</label>
                                    <input type="email" name="subscription-name" id="subscription-name" class="form-control" placeholder=" Email Address...">
                                </div>
                                <div class="form-group">
                                    <label for="subscription-number">Telefono</label>
                                    <input type="number" name="subscription-number" id="subscription-number" class="form-control" placeholder="Inserisci il tuo numero...">
                                </div>
                                <div class="form-group">
                                    <label for="subscription-number">Indirizzo</label>
                                    <input type="text" name="subscription-address" id="subscription-address" class="form-control" placeholder="Inserisci l'indirizzo...">
                                </div>

                                <div class="form-group form-group--sm">
                                    <button class="btn btn-primary-inverse btn-lg btn-block" onclick="subscribe()">Iscriviti</button>
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
    
  </div>

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
  
