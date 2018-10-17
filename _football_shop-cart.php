<?php 
    //define page title
    $title = 'Carrello';
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
            <h1 class="page-heading__title">Shopping <span class="highlight">Cart</span></h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li><a href="_football_index.php">Home</a></li>
              <li><a href="_football_shop-grid.php">Shop</a></li>
              <li class="active">Shopping Cart</li>
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
          <div class="col-md-8">
            <!-- Shopping Cart -->
            <div class="card card--has-table">
              <div class="card__header">
                <h4>Your Shopping Cart</h4>
              </div>
              <div class="card__content">

                <div class="table-responsive">
                  <table class="table shop-table">
                    <thead>
                      <tr>
                        <th class="product__info" colspan="2">Product Info</th>
                        <th class="product__price">Price</th>
                        <th class="product__size">Size</th>
                        <th class="product__color">Color</th>
                        <th class="product__quantity">Quantity</th>
                        <th class="product__total">Total</th>
                        <th class="product__remove"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="product__photo">
                          <figure class="product__thumb">
                            <a href="_football_shop-product.php#header"><img src="assets/images/samples/cart-sm-1.jpg" alt=""></a>
                          </figure>
                        </td>
                        <td class="product__info">
                          <h5 class="product__name"><a href="_football_shop-product.php#header">Sundown Sneaker</a></h5>
                          <span class="product__cat">Sneakers</span>
                          <div class="product__ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star empty"></i>
                          </div>
                        </td>
                        <td class="product__price">
                          $28.00
                        </td>
                        <td class="product__size">
                          8,5 (USA)
                        </td>
                        <td class="product__color">
                          <span class="product__color-item product__color-item--selected product__color-item--color-orange"></span>
                        </td>
                        <td class="product__quantity">
                          <input type="number" class="form-control product-quantity-control input-sm" step="1" value="1">
                        </td>
                        <td class="product__total">
                          $56.00
                        </td>
                        <td class="product__remove">
                          <a href="#" class="fa fa-times product__remove-icon"></a>
                        </td>
                      </tr>

                      <tr>
                        <td class="product__photo">
                          <figure class="product__thumb">
                            <a href="_football_shop-product.php#header"><img src="assets/images/samples/cart-sm-4.jpg" alt=""></a>
                          </figure>
                        </td>
                        <td class="product__info">
                          <span class="product__cat">Sneakers</span>
                          <h5 class="product__name"><a href="_football_shop-product.php#header">Atlantic Sneaker</a></h5>
                          <div class="product__ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                        <td class="product__price">
                          $30.00
                        </td>
                        <td class="product__size">
                          8,5 (USA)
                        </td>
                        <td class="product__color">
                          <span class="product__color-item product__color-item--selected product__color-item--color-blue"></span>
                        </td>
                        <td class="product__quantity">
                          <input type="number" class="form-control product-quantity-control input-sm" step="1" value="1">
                        </td>
                        <td class="product__total">
                          $120.00
                        </td>
                        <td class="product__remove">
                          <a href="#" class="fa fa-times product__remove-icon"></a>
                        </td>
                      </tr>

                      <tr>
                        <td class="product__photo">
                          <figure class="product__thumb">
                            <a href="_football_shop-product.php#header"><img src="assets/images/samples/cart-sm-2.jpg" alt=""></a>
                          </figure>
                        </td>
                        <td class="product__info">
                          <span class="product__cat">Sneakers</span>
                          <h5 class="product__name"><a href="_football_shop-product.php#header">Aquarium Sneaker</a></h5>
                          <div class="product__ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star empty"></i>
                            <i class="fa fa-star empty"></i>
                          </div>
                        </td>
                        <td class="product__price">
                          $26.00
                        </td>
                        <td class="product__size">
                          8,5 (USA)
                        </td>
                        <td class="product__color">
                          <span class="product__color-item product__color-item--selected product__color-item--color-aqua"></span>
                        </td>
                        <td class="product__quantity">
                          <input type="number" class="form-control product-quantity-control input-sm" step="1" value="1">
                        </td>
                        <td class="product__total">
                          $26.00
                        </td>
                        <td class="product__remove">
                          <a href="#" class="fa fa-times product__remove-icon"></a>
                        </td>
                      </tr>

                      <tr>
                        <td class="product__photo">
                          <figure class="product__thumb">
                            <a href="_football_shop-product.php#header"><img src="assets/images/samples/cart-sm-3.jpg" alt=""></a>
                          </figure>
                        </td>
                        <td class="product__info">
                          <span class="product__cat">Shirts</span>
                          <h5 class="product__name"><a href="_football_shop-product.php#header">The Sporting Shirt</a></h5>
                          <div class="product__ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                        <td class="product__price">
                          $40.00
                        </td>
                        <td class="product__size">
                          LARGE
                        </td>
                        <td class="product__color">
                          <span class="product__color-item product__color-item--selected product__color-item--color-black"></span>
                        </td>
                        <td class="product__quantity">
                          <input type="number" class="form-control product-quantity-control input-sm" step="1" value="1">
                        </td>
                        <td class="product__total">
                          $40.00
                        </td>
                        <td class="product__remove">
                          <a href="#" class="fa fa-times product__remove-icon"></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>


                <div class="card__content-inner">
                  <form action="#" class="coupon-code-form coupon-code-form--inline">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="coupon-code-form-inner">
                          <label>Coupon Code</label>
                          <input type="text" class="form-control input-sm" placeholder="Enter your Coupon Code">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <button class="btn btn-primary-inverse btn-block">Apply Coupon</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>

              <div class="card__header">
                <h4>Calculate Shipping</h4>
              </div>
              <div class="card__content">
                <div class="card__content-inner">
                  <form action="#" class="shipping-calculation-form">
                    <div class="row">
                      <div class="col-md-4">
                        <select name="account-country" id="account-country" class="form-control input-sm">
                          <option value="0">Select your country</option>
                          <option value="Canada">Canada</option>
                          <option value="Italy">Italy</option>
                          <option value="Spain">Spain</option>
                          <option value="Greece">Greece</option>
                        </select>
                      </div>
                      <div class="col-md-4">
                        <select name="account-city" id="account-city" class="form-control input-sm">
                          <option value="0">Select your city</option>
                          <option value="1">New York</option>
                          <option value="2">Barcelona</option>
                          <option value="3">Paris</option>
                          <option value="4">London</option>
                        </select>
                      </div>
                      <div class="col-md-4">
                        <button type="submit" class="btn btn-primary-inverse btn-lg btn-block input-sm">Update Shipping</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- Shopping Cart / End -->
          </div>
          <div class="col-md-4">
            <!-- Cart Totals -->
            <div class="card card--has-table">
              <div class="card__header">
                <h4>Cart Totals</h4>
              </div>
              <div class="card__content">

                <!-- Checkout Review Order -->
                <div class="df-checkout-review-order">
                  <div class="table-responsive">
                    <table class="df-checkout-review-order-table table">
                      <tfoot>
                        <tr class="cart-subtotal">
                          <th>Cart Subtotal</th>
                          <td>
                            <span class="amount">
                              <span class="df-Price-currencySymbol">$</span>242.00
                            </span>
                          </td>
                        </tr>
                        <tr class="shipping">
                          <th>Shipping and Handlings</th>
                          <td>
                            <span class="amount">
                              <span class="df-Price-currencySymbol">$</span>50.00
                            </span>
                          </td>
                        </tr>
                        <tr class="coupon">
                          <th>Coupone Discount</th>
                          <td>
                            <span class="amount">
                              -<span class="df-Price-currencySymbol">$</span>10.00
                            </span>
                          </td>
                        </tr>
                        <tr class="order-total">
                          <th>Cart Total</th>
                          <td>
                            <span class="amount">
                              <span class="df-Price-currencySymbol">$</span>282.00
                            </span>
                          </td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
                <!-- Checkout Review Order / End -->

                <!-- Checkout Payment -->
                <div class="df-checkout-payment">
                  <div class="form-row place-order">
                    <input type="submit" class="btn btn-primary-inverse btn-lg btn-block" name="df_checkout_place_order" id="place_order" value="Proceed to Checkout">
                  </div>
                </div>
                <!-- Checkout Payment / End -->

              </div>
            </div>
            <!-- Cart Totals / End -->
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
  <script src="assets/vendor/twitter/jquery.twitter.js"></script>
  <script src="assets/vendor/jquery-duotone/jquery.duotone.min.js"></script>
  
  
  
  <!-- Template JS -->
  <script src="assets/js/init.js"></script>
  <script src="assets/js/custom.js"></script>
  
  </body>
  </html>
  
