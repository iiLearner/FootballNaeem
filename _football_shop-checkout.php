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
            <h1 class="page-heading__title">Cart <span class="highlight">Checkout</span></h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li><a href="_football_index.php">Home</a></li>
              <li><a href="_football_shop-list.php">Shop</a></li>
              <li><a href="_football_shop-cart.php">Shopping Cart</a></li>
              <li class="active">Checkout</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Content
    ================================================== -->
    <div class="site-content">
      <div class="container">

        <div class="alert alert-info">
          <strong>Do you have an account? <a href="#">Click Here</a> to login now and create a new account</strong>
        </div>

        <!-- Checkout Form -->
        <form action="#" class="df-checkout">

          <div class="row">
            <div class="col-md-6">

              <!-- Billing Details -->
              <div class="card">
                <div class="card__header card__header--has-checkbox">
                  <h4>Billing Details</h4>
                  <label class="checkbox checkbox-inline">
                    <input type="checkbox" name="ship_to_different_address" id="ship_to_different_address" value="1"> Ship to a different address
                    <span class="checkbox-indicator"></span>
                  </label>
                </div>
                <div class="card__content">
                  <div class="df-billing-fields">

                    <div class="row">

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="billing_first_name">First Name <abbr class="required" title="required">*</abbr></label>
                          <input type="text" name="billing_first_name" id="billing_first_name" class="form-control" placeholder="Your first name...">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="billing_last_name">Last Name <abbr class="required" title="required">*</abbr></label>
                          <input type="text" name="billing_last_name" id="billing_last_name" class="form-control" placeholder="Your last name...">
                        </div>
                      </div>

                    </div>

                    <div class="row">

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="billing_email">Email <abbr class="required" title="required">*</abbr></label>
                          <input type="email" name="billing_email" id="billing_email" class="form-control" placeholder="Your email...">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="billing_company">Company Name</label>
                          <input type="text" name="billing_company" id="billing_company" class="form-control" placeholder="Your company name...">
                        </div>
                      </div>

                    </div>

                    <div class="form-group form-group--sm">
                      <label for="billing_address_1">Full Address <abbr class="required" title="required">*</abbr></label>
                      <input type="text" name="billing_address_1" id="billing_address_1" class="form-control" placeholder="Enter your street address...">
                    </div>
                    <div class="form-group">
                      <input type="text" name="billing_address_2" id="billing_address_2" class="form-control" placeholder="Enter your apartment, floor, suite, etc...">
                    </div>

                    <div class="form-group">
                      <label for="billing_country">Country <abbr class="required" title="required">*</abbr></label>
                      <select name="billing_country" id="billing_country" class="form-control">
                        <option value="0">Select your country...</option>
                        <option value="Canada">Canada</option>
                        <option value="Italy">Italy</option>
                        <option value="Spain">Spain</option>
                        <option value="Greece">Greece</option>
                      </select>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="billing_city">State/City <abbr class="required" title="required">*</abbr></label>
                          <select name="billing_city" id="billing_city" class="form-control">
                            <option value="0">Select your state or city...</option>
                            <option value="1">New York</option>
                            <option value="2">Barcelona</option>
                            <option value="3">Paris</option>
                            <option value="4">London</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="billing_postcode">Zip Code</label>
                          <input type="text" name="billing_postcode" id="billing_postcode" class="form-control" placeholder="Your zip or postal code...">
                        </div>
                      </div>
                    </div>

                    <div class="form-group mb-0">
                      <label for="order_comments_1">Additional Comments</label>
                      <textarea name="order_comments_1" id="order_comments_1" rows="7" class="form-control" placeholder="Write any additional comments..."></textarea>
                    </div>

                  </div>
                </div>
              </div>
              <!-- Billing Details / End -->

            </div>

            <div class="col-md-6">

              <!-- Shipping Details -->
              <div class="card">
                <div class="card__header">
                  <h4>Shipping Details</h4>
                </div>
                <div class="card__content">

                  <div class="df-billing-fields">

                    <div class="row">

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="billing_first_name">First Name <abbr class="required" title="required">*</abbr></label>
                          <input type="text" name="billing_first_name" id="billing_first_name" class="form-control" placeholder="Your first name...">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="billing_last_name">Last Name <abbr class="required" title="required">*</abbr></label>
                          <input type="text" name="billing_last_name" id="billing_last_name" class="form-control" placeholder="Your last name...">
                        </div>
                      </div>

                    </div>

                    <div class="row">

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="billing_email">Email <abbr class="required" title="required">*</abbr></label>
                          <input type="email" name="billing_email" id="billing_email" class="form-control" placeholder="Your email...">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="billing_company">Company Name</label>
                          <input type="text" name="billing_company" id="billing_company" class="form-control" placeholder="Your company name...">
                        </div>
                      </div>

                    </div>

                    <div class="form-group form-group--sm">
                      <label for="billing_address_1">Full Address <abbr class="required" title="required">*</abbr></label>
                      <input type="text" name="billing_address_1" id="billing_address_1" class="form-control" placeholder="Enter your street address...">
                    </div>
                    <div class="form-group">
                      <input type="text" name="billing_address_2" id="billing_address_2" class="form-control" placeholder="Enter your apartment, floor, suite, etc...">
                    </div>

                    <div class="form-group">
                      <label for="billing_country">Country <abbr class="required" title="required">*</abbr></label>
                      <select name="billing_country" id="billing_country" class="form-control">
                        <option value="0">Select your country...</option>
                        <option value="Canada">Canada</option>
                        <option value="Italy">Italy</option>
                        <option value="Spain">Spain</option>
                        <option value="Greece">Greece</option>
                      </select>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="billing_city">State/City <abbr class="required" title="required">*</abbr></label>
                          <select name="billing_city" id="billing_city" class="form-control">
                            <option value="0">Select your state or city...</option>
                            <option value="1">New York</option>
                            <option value="2">Barcelona</option>
                            <option value="3">Paris</option>
                            <option value="4">London</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="billing_postcode">Zip Code</label>
                          <input type="text" name="billing_postcode" id="billing_postcode" class="form-control" placeholder="Your zip or postal code...">
                        </div>
                      </div>
                    </div>

                    <div class="form-group mb-0">
                      <label for="order_comments_1">Additional Comments</label>
                      <textarea name="order_comments_1" id="order_comments_1" rows="7" class="form-control" placeholder="Write any additional comments..."></textarea>
                    </div>

                  </div>

                </div>
              </div>
              <!-- Shipping Details / End -->

            </div>
          </div>

          <!-- Cart Review -->
          <div class="card card--has-table">
            <div class="card__header">
              <h4>Cart Review</h4>
            </div>
            <div class="card__content">
              <div class="table-responsive">
                <table class="table shop-table">
                  <thead>
                    <tr>
                      <th class="product__info">Product Info</th>
                      <th class="product__desc">Description</th>
                      <th class="product__price">Price</th>
                      <th class="product__size">Size</th>
                      <th class="product__color">Color</th>
                      <th class="product__quantity">Quantity</th>
                      <th class="product__total">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="product__info">
                        <h5 class="product__name"><a href="#">Sundown Sneaker</a></h5>
                        <span class="product__cat">Sneakers</span>
                        <div class="product__ratings">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star empty"></i>
                        </div>
                      </td>
                      <td class="product__desc">
                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna...
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
                        2
                      </td>
                      <td class="product__total">
                        $56.00
                      </td>
                    </tr>

                    <tr>
                      <td class="product__info">
                        <span class="product__cat">Sneakers</span>
                        <h5 class="product__name"><a href="#">Atlantic Sneaker</a></h5>
                        <div class="product__ratings">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                      </td>
                      <td class="product__desc">
                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna...
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
                        4
                      </td>
                      <td class="product__total">
                        $120.00
                      </td>
                    </tr>

                    <tr>
                      <td class="product__info">
                        <span class="product__cat">Sneakers</span>
                        <h5 class="product__name"><a href="#">Aquarium Sneaker</a></h5>
                        <div class="product__ratings">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star empty"></i>
                          <i class="fa fa-star empty"></i>
                        </div>
                      </td>
                      <td class="product__desc">
                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna...
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
                        1
                      </td>
                      <td class="product__total">
                        $26.00
                      </td>
                    </tr>

                    <tr>
                      <td class="product__info">
                        <span class="product__cat">Shirts</span>
                        <h5 class="product__name"><a href="#">The Sporting Shirt</a></h5>
                        <div class="product__ratings">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                      </td>
                      <td class="product__desc">
                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna...
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
                        1
                      </td>
                      <td class="product__total">
                        $40.00
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- Cart Review / End -->

          <div class="row">
            <div class="col-md-6">

              <div class="card card--no-paddings">
                <div class="card__header">
                  <h4>Payment Methods</h4>
                </div>
                <div class="card__content">
                  <!-- Checkout Payment -->
                  <div class="df-checkout-payment">
                    <ul class="df_payment_methods" id="df_payment_methods" role="tablist" aria-multiselectable="true">

                      <li class="df_payment_method panel">
                        <label class="radio radio-inline" for="payment_method_basc" data-toggle="collapse" data-target="#payment_method_basc_panel" data-parent="#df_payment_methods" id="headingOne">
                          <input type="radio" id="payment_method_basc" name="payment_method" value="cheque" checked> Direct Bank Transfer
                          <span class="radio-indicator"></span>
                        </label>
                        <div id="payment_method_basc_panel" class="payment_box collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                        </div>
                      </li>

                      <li class="df_payment_method panel">
                        <label class="radio radio-inline" for="payment_method_cheque" data-toggle="collapse" data-target="#payment_method_cheque_panel" data-parent="#df_payment_methods" id="headingTwo">
                          <input type="radio" id="payment_method_cheque" name="payment_method" value="cheque"> Check Payments
                          <span class="radio-indicator"></span>
                        </label>
                        <div id="payment_method_cheque_panel" class="payment_box collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                        </div>
                      </li>

                      <li class="df_payment_method panel">
                        <label class="radio radio-inline" for="payment_method_paypal" data-toggle="collapse" data-target="#payment_method_paypal_panel" data-parent="#df_payment_methods" id="headingThree">
                          <input type="radio" id="payment_method_paypal" name="payment_method" value="paypal"> PayPal Checkout
                          <span class="radio-indicator"></span>
                        </label>
                        <div id="payment_method_paypal_panel" class="payment_box collapse" role="tabpanel" aria-labelledby="headingThree">
                          <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                        </div>
                      </li>

                    </ul>
                  </div>
                  <!-- Checkout Payment / End -->
                </div>
              </div>
            </div>
            <div class="col-md-6">
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
        </form>
        <!-- Checkout Form / End -->

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
  
