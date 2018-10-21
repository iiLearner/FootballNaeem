<?php 
    //define page title
    $title = 'Calcetto Maschile';
    require('header.php'); 
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
            <h1 class="page-heading__title">Calcetto <span class="highlight">Maschile</span></h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li><a href="_football_index.php">Home</a></li>
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

        <!-- Schedule & Tickets -->
        <div class="card card--has-table">
          <div class="card__header">
            <h4>Elenco Corsi</h4>
          </div>
          <div class="card__content">
            <div class="table-responsive">
              <table class="table table-hover team-schedule team-schedule--full">
                <thead>
                  <tr>
                    <th class="team-schedule__date">Data Inizio</th>
                    <th class="team-schedule__versus">Coach</th>
                    <th class="team-schedule__status">Stato</th>
                    <th class="team-schedule__time">Ora</th>
                    <th class="team-schedule__compet">Competizione</th>
                    <th class="team-schedule__venue">Sede</th>
                    <th class="team-schedule__tickets">Iscriviti</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="team-schedule__date">11/12/2018</td>
                    <td class="team-schedule__versus">
                      <div class="team-meta">
                        <div class="team-meta__info">
                          <h6 class="team-meta__name">Coach 1</h6>
                          <span class="team-meta__place">Scuola Di Calcetto</span>
                        </div>
                      </div>
                    </td>
                    <td class="team-schedule__status">Disponibile</td>
                    <td class="team-schedule__time">21:00</td>
                    <td class="team-schedule__compet">West Bay League 2018/19</td>
                    <td class="team-schedule__venue">Cus Camerino</td>
                    <td class="team-schedule__tickets"><a href="_course_iscrizione.php#header" class="btn btn-xs btn-default-alt btn-block">Iscriviti</a></td>
                  </tr>
                  <tr>
                    <td class="team-schedule__date">11/29/2018</td>
                    <td class="team-schedule__versus">
                      <div class="team-meta">
                        
                        <div class="team-meta__info">
                          <h6 class="team-meta__name">Coach 2</h6>
                          <span class="team-meta__place">Icarus College</span>
                        </div>
                      </div>
                    </td>
                    <td class="team-schedule__status">In Corso</td>
                    <td class="team-schedule__time">21:30</td>
                    <td class="team-schedule__compet">West League 2018/19</td>
                    <td class="team-schedule__venue">Alchemists Stadium</td>
                    <td class="team-schedule__tickets"><a href="_course_iscrizione.php#header" class="btn btn-xs btn-default-alt btn-block disabled">Esaurito</a></td>
                  </tr>
                  <tr>
                    <td class="team-schedule__date">11/01/2019</td>
                    <td class="team-schedule__versus">
                      <div class="team-meta">
                      
                        <div class="team-meta__info">
                          <h6 class="team-meta__name">Coach 3</h6>
                          <span class="team-meta__place">Wyvern College</span>
                        </div>
                      </div>
                    </td>
                    <td class="team-schedule__status">Disponibile</td>
                    <td class="team-schedule__time">16:00</td>
                    <td class="team-schedule__compet">West League 2019</td>
                    <td class="team-schedule__venue">Scalding Rock Stadium</td>
                    <td class="team-schedule__tickets"><a href="_course_iscrizione.php#header" class="btn btn-xs btn-default-alt btn-block">Iscriviti</a></td>
                  </tr>   
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Schedule & Tickets / End -->
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
  
