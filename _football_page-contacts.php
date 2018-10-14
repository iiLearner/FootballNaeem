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
            <h1 class="page-heading__title">Corsi <span class="highlight">Palestra</span></h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li><a href="_football_index.html">Home</a></li>
              <li class="active">Corsi</li>
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
        <!-- Contact Area -->
        <div class="card">
          <header class="card__header">
            <h4>Contact Form</h4>

          </header>
          <div class="card__content">
            
            <div class="row">
              <div class="col-md-4">
                <h5>Where to Find Us!</h5>
                <p>Centro Sportivo Camerino</p>

                <div class="spacer-sm"></div>

                <h5>Email Us At</h5>
                <p>info@camerino.it</p>

                <address>
                  <h5>Call Us At</h5> 
                  <br>Mobile: <strong>+39123456789</strong>
                  <br>Phone: <strong>0737491125</strong>
                </address>
              </div>
              <div class="col-md-8">

                <!-- Contact Form -->
                <form method="post"  class="contact-form" id="contact-form_id">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="contact-form-name">Your Name <span class="required">*</span></label>
                         <input name="contactName" type="text" id="contact-form-name" placeholder="Your Name*" value="" minlength="2" required="" aria-required="true" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="contact-form-email">Your Email <span class="required">*</span></label>
                         <input name="contact-form-email" type="email" id="contactEmail" placeholder="Your Email*" value="" required="" aria-required="true" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="contact-form-subject">Subject</label>
                         <input name="contact-form-subject" type="text" id="contactSubject" placeholder="Subject" value="" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="contact-form-message">Your Message <span class="required">*</span></label>
                    <textarea name="name" rows="5" class="form-control" id="contactMessage" placeholder="Enter your message here..."></textarea>
                  </div>
                  <div class="form-group form-group--submit">
                    <button type="submit" class="btn btn-primary-inverse btn-lg btn-block">Send Your Message</button>
                  </div>
                </form>
                <!-- Contact Form / End -->
              </div>
            </div>

          </div>
        </div>
        <!-- Contact Area / End -->

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
  
