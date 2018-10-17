<?php 
    //define page title
    $title = 'Wishlist';
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
            <h1 class="page-heading__title">Your<span class="highlight">Wishlist</span></h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li><a href="_football_index.php#header">Home</a></li>
              <li><a href="_football_shop-grid.php#header">Shop</a></li>
              <li class="active">Your Wishlist</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Content
    ================================================== -->
    <div class="site-content">
      <div class="container">

        <!-- Products -->
        <ul class="products products--grid products--grid-4 products--grid-overlay">

          <!-- Product #2 -->
          <li class="product__item product__item--color-2 card">

            <div class="product__img">

              <a href="#" class="btn btn-success btn-single-icon btn-circle product__btn-add-remove"><i class="icon-heart"></i><i class="product__close-icon"></i></a>

              <div class="product__img-holder">
                <div class="product__bg-letters">SK</div>

                <div class="product__slider">
                  <div class="product__slide">
                    <div class="product__slide-img">
                      <img src="assets/images/samples/product-img2.png" alt="">
                    </div>
                  </div>
                  <div class="product__slide">
                    <div class="product__slide-img">
                      <img src="assets/images/samples/product-img2.png" alt="">
                    </div>
                  </div>
                  <div class="product__slide">
                    <div class="product__slide-img">
                      <img src="assets/images/samples/product-img2.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="product__content card__content">

              <header class="product__header">
                <div class="product__header-inner">
                  <h2 class="product__title"><a href="shop-product.php#header">Atlantic Sneaker</a></h2>
                  <span class="product__category">Sneakers</span>
                  <div class="product__ratings">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <div class="product__price">$30.00</div>
                </div>
              </header>

            </div>
          </li>
          <!-- Product #2 / End -->


          <!-- Product #3 -->
          <li class="product__item product__item--color-3 card">

            <div class="product__img">

              <a href="#" class="btn btn-success btn-single-icon btn-circle product__btn-add-remove"><i class="icon-heart"></i><i class="product__close-icon"></i></a>

              <div class="product__img-holder">
                <div class="product__bg-letters">SK</div>

                <div class="product__slider">
                  <div class="product__slide">
                    <div class="product__slide-img">
                      <img src="assets/images/samples/product-img3.png" alt="">
                    </div>
                  </div>
                  <div class="product__slide">
                    <div class="product__slide-img">
                      <img src="assets/images/samples/product-img3.png" alt="">
                    </div>
                  </div>
                  <div class="product__slide">
                    <div class="product__slide-img">
                      <img src="assets/images/samples/product-img3.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="product__content card__content">

              <header class="product__header">
                <div class="product__header-inner">
                  <h2 class="product__title"><a href="shop-product.php#header">Aquarium Sneaker</a></h2>
                  <span class="product__category">Sneakers</span>
                  <div class="product__ratings">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star empty"></i>
                    <i class="fa fa-star empty"></i>
                  </div>
                  <div class="product__price">$26.00</div>
                </div>
              </header>

            </div>
          </li>
          <!-- Product #3 / End -->

          <!-- Product #11 -->
          <li class="product__item product__item--color-1 card">

            <div class="product__img">

              <a href="#" class="btn btn-success btn-single-icon btn-circle product__btn-add-remove"><i class="icon-heart"></i><i class="product__close-icon"></i></a>

              <div class="product__img-holder">
                <div class="product__bg-letters">HC</div>

                <div class="product__slider">
                  <div class="product__slide">
                    <div class="product__slide-img">
                      <img src="assets/images/samples/product-img11.png" alt="">
                    </div>
                  </div>
                  <div class="product__slide">
                    <div class="product__slide-img">
                      <img src="assets/images/samples/product-img11.png" alt="">
                    </div>
                  </div>
                  <div class="product__slide">
                    <div class="product__slide-img">
                      <img src="assets/images/samples/product-img11.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="product__content card__content">

              <header class="product__header">
                <div class="product__header-inner">
                  <h2 class="product__title"><a href="shop-product.php#header">Carbon Fitted Cap</a></h2>
                  <span class="product__category">Hats and Caps</span>
                  <div class="product__ratings">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star empty"></i>
                  </div>
                  <div class="product__price">$22.00</div>
                </div>
              </header>

            </div>
          </li>
          <!-- Product #11 / End -->

        </ul>
        <!-- Products / End -->

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
  
  <!-- Vendor JS -->
  <script src="assets/vendor/twitter/jquery.twitter.js"></script>
  <script src="assets/vendor/jquery-duotone/jquery.duotone.min.js"></script>
  
  
  
  <!-- Template JS -->
  <script src="assets/js/init.js"></script>
  <script src="assets/js/custom.js"></script>
  
  </body>
  </html>
  
