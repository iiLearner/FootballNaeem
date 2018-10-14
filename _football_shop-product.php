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
            <h1 class="page-heading__title">Product <span class="highlight">Details</span></h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li><a href="_football_index.html">Home</a></li>
              <li><a href="_football_shop-grid.html">Shop</a></li>
              <li class="active">Product</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Content
    ================================================== -->
    <div class="site-content">
      <div class="container">

        <!-- Single Product -->
        <div class="products products--list products--list-lg">

          <div class="product__item product__item--color-1 card">

            <div class="product__img">
              <div class="product__img-holder">
                <div class="product__bg-letters">SK</div>

                <div class="product__slider">
                  <div class="product__slide">
                    <div class="product__slide-img">
                      <img src="assets/images/samples/product-img1-lg.png" alt="">
                    </div>
                  </div>
                  <div class="product__slide">
                    <div class="product__slide-img">
                      <img src="assets/images/samples/product-img1-lg.png" alt="">
                    </div>
                  </div>
                  <div class="product__slide">
                    <div class="product__slide-img">
                      <img src="assets/images/samples/product-img1-lg.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="product__content card__content">

              <header class="product__header product__header--block">
                <div class="product__header-inner">
                  <span class="product__category">Sneakers</span>
                  <h2 class="product__title">Sundown Sneaker</h2>
                  <div class="product__ratings">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star empty"></i>
                  </div>
                </div>
                <div class="product__price">$28.00</div>
              </header>

              <div class="product__excerpt">
                <h6>Description</h6>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>

              <form action="#" class="product__params">
                <div class="product__param-item product__param-item--color">
                  <label>Color</label>
                  <ul class="filter-color">
                    <li class="filter-color__item">
                      <label class="radio">
                        <input type="radio" id="product_color_1" name="product-color" value="1" class="color-violet">
                        <span class="radio-indicator"></span>
                      </label>
                    </li>
                    <li class="filter-color__item">
                      <label class="radio">
                        <input type="radio" id="product_color_2" name="product-color" value="2" class="color-blue" checked>
                        <span class="radio-indicator"></span>
                      </label>
                    </li>
                    <li class="filter-color__item">
                      <label class="radio">
                        <input type="radio" id="product_color_3" name="product-color" value="3" class="color-light-blue">
                        <span class="radio-indicator"></span>
                      </label>
                    </li>
                    <li class="filter-color__item">
                      <label class="radio">
                        <input type="radio" id="product_color_8" name="product-color" value="8" class="color-orange">
                        <span class="radio-indicator"></span>
                      </label>
                    </li>
                    <li class="filter-color__item">
                      <label class="radio">
                        <input type="radio" id="product_color_7" name="product-color" value="7" class="color-yellow">
                        <span class="radio-indicator"></span>
                      </label>
                    </li>
                  </ul>
                </div>
                <div class="product__param-item product__param-item--size">
                  <label class="control-label" for="select-size">Size</label>
                  <select name="select-size" id="select-size" class="form-control input-sm">
                    <option value="1">8,5 (USA)</option>
                    <option value="2">9,0 (USA)</option>
                    <option value="3">42 (EUR)</option>
                    <option value="4">41 (EUR)</option>
                  </select>
                </div>
                <div class="product__param-item product__param-item--quantity">
                  <label>Quantity</label>
                  <input type="number" class="form-control product-quantity-control input-sm" step="1" value="1">
                </div>
              </form>

              <footer class="product__footer">
                <a href="_football_shop-cart.html" class="btn btn-primary-inverse btn-icon product__add-to-cart"><i class="fa fa-plus"></i> Add to Cart</a>
                <a href="#" class="btn btn-default btn-outline btn-single-icon btn-circle product__wish-fab"><i class="icon-heart"></i></a>
              </footer>
            </div>
          </div>

        </div>
        <!-- Single Product / End -->

        <!-- Single Product Tabbed Content -->
        <div class="product-tabs row">
          <div class="col-md-4">
            <!-- Nav tabs -->
            <div class="card">
              <div class="card__content">
                <nav class="df-account-navigation">
                  <ul>
                    <li role="presentation" class="active df-account-navigation__link">
                      <a href="#tab-desciption" role="tab" data-toggle="tab"><small>Product</small>Full Description</a>
                    </li>
                    <li role="presentation" class="df-account-navigation__link df-account-navigation__link">
                      <a href="#tab-info" role="tab" data-toggle="tab"><small>Product</small>Additional Information</a>
                    </li>
                    <li role="presentation" class="df-account-navigation__link df-account-navigation__link">
                      <a href="#tab-reviews" role="tab" data-toggle="tab"><small>Product</small>Customer Reviews <span>(3)</span></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- Nav tabs / End -->
          </div>
          <div class="col-md-8">
            <!-- Tab panes -->
            <div class="tab-content">
        
              <!-- Tab: Description -->
              <div role="tabpanel" class="tab-pane fade in active" id="tab-desciption">
        
                <div class="card">
                  <div class="card__content">
                    <h3>The Best Brand of Sneakers</h3>
                
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna der aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia laborum.</p>
                
                    <div class="spacer"></div>
                
                    <h5>US and International Sneaker Size</h5>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam remeriam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam uptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione tatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, corporis suscipit laboriosam.</p>
                
                    <div class="spacer"></div>
                
                    <div class="row">
                      <div class="col-md-6">
                        <!-- Icobox -->
                        <div class="icobox icobox--center">
                          <div class="icobox__icon icobox__icon--border icobox__icon--lg icobox__icon--circle icobox__icon--color--secondary">
                            <i class="icon-energy"></i>
                          </div>
                          <div class="icobox__content">
                            <h4 class="icobox__title">Ultra Durability</h4>
                            <div class="icobox__description">
                              Lorem ipsum dolor sit amet, consectetur enrume adipisicing elit, sed eiusmod tempor incididun labore dolore magna aliqua en lorem.
                            </div>
                          </div>
                        </div>
                        <!-- Icobox / End -->
                      </div>
                      <div class="col-md-6">
                        <!-- Icobox -->
                        <div class="icobox icobox--center">
                          <div class="icobox__icon icobox__icon--border icobox__icon--lg icobox__icon--circle icobox__icon--color--secondary">
                            <i class="icon-like"></i>
                          </div>
                          <div class="icobox__content">
                            <h4 class="icobox__title">Super Comfort</h4>
                            <div class="icobox__description">
                              Lorem ipsum dolor sit amet, consectetur enrume adipisicing elit, sed eiusmod tempor incididun labore dolore magna aliqua en lorem.
                            </div>
                          </div>
                        </div>
                        <!-- Icobox / End -->
                      </div>
                    </div>
                
                  </div>
                </div>
                
        
              </div>
              <!-- Tab: Description / End -->
        
              <!-- Tab: Shipping -->
              <div role="tabpanel" class="tab-pane fade" id="tab-info">
        
                <div class="card">
                  <div class="card__content">
                    <h3>Additional Information</h3>
                
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                
                    <div class="spacer"></div>
                
                    <h5>About Our Sneakers</h5>
                
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis eder nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                
                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                
                  </div>
                </div>
                
        
              </div>
              <!-- Tab: Shipping / End -->
        
              <!-- Tab: Reviews -->
              <div role="tabpanel" class="tab-pane fade" id="tab-reviews">
        
                <div class="card">
                  <div class="card__content">
                    <header class="product-tabs__header product-tabs__header--sm">
                      <h2>
                        <span class="product-tabs__ratings"><span class="highlight">4.33</span> Item Rating</span>
                        <span class="product-tabs__reviews">3 Reviews</span>
                      </h2>
                    </header>
                
                    <!-- Product Reviews -->
                    <ul class="comments comments--thumb-top">
                      <li class="comments__item">
                        <div class="comments__inner">
                          <header class="comment__header">
                            <div class="comment__author">
                              <figure class="comment__author-avatar">
                                <img src="assets/images/football/samples/avatar-2-sm.jpg" alt="">
                              </figure>
                              <div class="comment__author-info">
                                <h5 class="comment__author-name">Jennifer Stevens</h5>
                                <time class="comment__post-date" datetime="2016-08-23">5 minutes ago</time>
                                <div class="comment__ratings ratings">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star empty"></i>
                                </div>
                              </div>
                            </div>
                          </header>
                          <div class="comment__body">
                            <h4 class="comment__title">Incredible Sneakers!!</h4>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam tatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur ratione.
                          </div>
                        </div>
                      </li>
                      <li class="comments__item">
                        <div class="comments__inner">
                          <header class="comment__header">
                            <div class="comment__author">
                              <figure class="comment__author-avatar">
                                <img src="assets/images/football/samples/avatar-8-sm.jpg" alt="">
                              </figure>
                              <div class="comment__author-info">
                                <h5 class="comment__author-name">Jake Casspon</h5>
                                <time class="comment__post-date" datetime="2016-08-23">28 minutes ago</time>
                                <div class="comment__ratings ratings">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                </div>
                              </div>
                            </div>
                          </header>
                          <div class="comment__body">
                            <h4 class="comment__title">The Best Designs I’ve ever Seen</h4>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                          </div>
                        </div>
                      </li>
                      <li class="comments__item">
                        <div class="comments__inner">
                          <header class="comment__header">
                            <div class="comment__author">
                              <figure class="comment__author-avatar">
                                <img src="assets/images/football/samples/avatar-14.jpg" alt="">
                              </figure>
                              <div class="comment__author-info">
                                <h5 class="comment__author-name">The Speedtester</h5>
                                <time class="comment__post-date" datetime="2016-08-23">18 hours ago</time>
                                <div class="comment__ratings ratings">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star empty"></i>
                                </div>
                              </div>
                            </div>
                          </header>
                          <div class="comment__body">
                            <h4 class="comment__title">Comfort and Price, all in One!</h4>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam tatem quia voluptas sit aspernatur aut odit aut fugit, sed quia ratione.
                          </div>
                        </div>
                      </li>
                    </ul>
                    <!-- Product Reviews / End -->
                  </div>
                </div>
                
                
                <div class="card">
                  <header class="card__header">
                    <h4>Write a Review</h4>
                  </header>
                  <div class="card__content">
                
                    <!-- Reviews Form -->
                    <form action="#" class="reviews-form">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="control-label" for="review-stars">Your Rating <span class="required">*</span></label>
                            <select name="review-stars" id="review-stars" class="form-control">
                              <option value="5">5 Stars Rating</option>
                              <option value="4">4 Stars Rating</option>
                              <option value="3">3 Stars Rating</option>
                              <option value="2">2 Stars Rating</option>
                              <option value="1">1 Star Rating</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="control-label" for="review-title">Review Title <span class="required">*</span></label>
                            <input type="text" id="review-title" name="review-title" class="form-control" placeholder="Your review title...">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="textarea-review">Your Review <span class="required">*</span></label>
                        <textarea name="textarea-review" id="textarea-review-lg" rows="7" class="form-control" placeholder="Your review here..."></textarea>
                      </div>
                      <div class="form-group form-group--submit">
                        <button type="submit" class="btn btn-primary-inverse btn-block btn-lg">Post Your Review</button>
                      </div>
                    </form>
                    <!-- Reviews Form / End -->
                
                  </div>
                </div>
                
                
        
              </div>
              <!-- Tab: Reviews / End -->
            </div>
            <!-- Tab panes / End -->
          </div>
        </div>
        <!-- Single Product Tabbed Content / End -->
        

        <!-- Related Products -->
        <div class="card card--clean">
          <header class="card__header">
            <h4>Related Products</h4>
          </header>
          <div class="card__content">
        
            <!-- Products -->
            <ul class="products products--grid products--grid-4 products--grid-overlay">
        
              <!-- Product #1 -->
              <li class="product__item product__item--color-1 card">
        
                <div class="product__img">
                  <div class="product__img-holder">
                    <div class="product__bg-letters">SK</div>
        
                    <div class="product__slider">
                      <div class="product__slide">
                        <div class="product__slide-img">
                          <img src="assets/images/samples/product-img1.png" alt="">
                        </div>
                      </div>
                      <div class="product__slide">
                        <div class="product__slide-img">
                          <img src="assets/images/samples/product-img1.png" alt="">
                        </div>
                      </div>
                      <div class="product__slide">
                        <div class="product__slide-img">
                          <img src="assets/images/samples/product-img1.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        
                <div class="product__content card__content">
        
                  <header class="product__header">
                    <div class="product__header-inner">
                      <h2 class="product__title"><a href="shop-product.html">Sundown Sneaker</a></h2>
                      <span class="product__category">Sneakers</span>
                      <div class="product__ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star empty"></i>
                      </div>
                      <div class="product__price">$28.00</div>
                    </div>
                  </header>
        
                  <footer class="product__footer">
                    <a href="_football_shop-cart.html" class="btn btn-primary-inverse btn-single-icon btn-circle" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-plus"></i></a>
                    <a href="#" class="btn btn-default btn-single-icon product__wish btn-outline btn-circle" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="icon-heart"></i></a>
                    <a href="#" class="btn btn-primary btn-single-icon product__view btn-outline btn-circle" data-toggle="tooltip" data-placement="top" title="10890"><i class="icon-eye"></i></a>
                  </footer>
                </div>
              </li>
              <!-- Product #1 / End -->
        
              <!-- Product #2 -->
              <li class="product__item product__item--color-2 card">
        
                <div class="product__img">
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
                      <h2 class="product__title"><a href="shop-product.html">Atlantic Sneaker</a></h2>
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
        
                  <footer class="product__footer">
                    <a href="_football_shop-cart.html" class="btn btn-primary-inverse btn-single-icon btn-circle" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-plus"></i></a>
                    <a href="#" class="btn btn-default btn-single-icon product__wish btn-outline btn-circle" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="icon-heart"></i></a>
                    <a href="#" class="btn btn-primary btn-single-icon product__view btn-outline btn-circle" data-toggle="tooltip" data-placement="top" title="10890"><i class="icon-eye"></i></a>
                  </footer>
                </div>
              </li>
              <!-- Product #2 / End -->
        
        
              <!-- Product #3 -->
              <li class="product__item product__item--color-3 card">
        
                <div class="product__img">
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
                      <h2 class="product__title"><a href="shop-product.html">Aquarium Sneaker</a></h2>
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
        
                  <footer class="product__footer">
                    <a href="_football_shop-cart.html" class="btn btn-primary-inverse btn-single-icon btn-circle" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-plus"></i></a>
                    <a href="#" class="btn btn-default btn-single-icon product__wish btn-outline btn-circle" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="icon-heart"></i></a>
                    <a href="#" class="btn btn-primary btn-single-icon product__view btn-outline btn-circle" data-toggle="tooltip" data-placement="top" title="10890"><i class="icon-eye"></i></a>
                  </footer>
                </div>
              </li>
              <!-- Product #3 / End -->
        
              <!-- Product #4 -->
              <li class="product__item product__item--color-4 card">
        
                <div class="product__img">
                  <div class="product__img-holder">
                    <div class="product__bg-letters">HC</div>
        
                    <div class="product__slider">
                      <div class="product__slide">
                        <div class="product__slide-img">
                          <img src="assets/images/samples/product-img4.png" alt="">
                        </div>
                      </div>
                      <div class="product__slide">
                        <div class="product__slide-img">
                          <img src="assets/images/samples/product-img4.png" alt="">
                        </div>
                      </div>
                      <div class="product__slide">
                        <div class="product__slide-img">
                          <img src="assets/images/samples/product-img4.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        
                <div class="product__content card__content">
        
                  <header class="product__header">
                    <div class="product__header-inner">
                      <h2 class="product__title"><a href="shop-product.html">Crimson Fitted Hat</a></h2>
                      <span class="product__category">Hats and Caps</span>
                      <div class="product__ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star empty"></i>
                        <i class="fa fa-star empty"></i>
                      </div>
                      <div class="product__price">$20.00</div>
                    </div>
                  </header>
        
                  <footer class="product__footer">
                    <a href="_football_shop-cart.html" class="btn btn-primary-inverse btn-single-icon btn-circle" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-plus"></i></a>
                    <a href="#" class="btn btn-default btn-single-icon product__wish btn-outline btn-circle" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="icon-heart"></i></a>
                    <a href="#" class="btn btn-primary btn-single-icon product__view btn-outline btn-circle" data-toggle="tooltip" data-placement="top" title="10890"><i class="icon-eye"></i></a>
                  </footer>
                </div>
              </li>
              <!-- Product #4 / End -->
        
            </ul>
            <!-- Products / End -->
        
          </div>
        </div>
        <!-- Related Products / End -->
        

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
  
