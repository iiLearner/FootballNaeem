    <!-- Header
    ================================================== -->
  
    <!-- Header Mobile -->
    <div class="header-mobile clearfix" id="header-mobile">
      <div class="header-mobile__logo">
        <a href="_football_index.php"><img src="assets/images/football/logo.png" srcset="assets/images/football/logo@2x.png 2x" alt="Alchemists" class="header-mobile__logo-img"></a>
      </div>
      <div class="header-mobile__inner">
        <a id="header-mobile__toggle" class="burger-menu-icon"><span class="burger-menu-icon__line"></span></a>
        <span class="header-mobile__search-icon" id="header-mobile__search-icon"></span>
      </div>
    </div>
    <!-- Header Desktop -->
    <header class="header">
    
      <!-- Header Top Bar -->
      <div class="header__top-bar clearfix">
        <div class="container">
  
          <!-- Account Navigation -->
          <ul class="nav-account">
            <?php if(isset($_SESSION["username"]))
            echo '
            <li class="nav-account__item"><a href="account.php#header">Your Account</a></li>';
            else
              echo 
            '<li class="nav-account__item"><a href="registrati.php#header">Register</a></li>';
            ?>
           
          
            <li class="nav-account__item"><a href="#">Language: <span class="highlight">EN</span></a></li>
            <?php if(isset($_SESSION["username"]))
            {
              echo '
              <li class="nav-account__item nav-account__item--logout"><a href="logout.php">Logout</a></li>';
            }
            else
              echo '<li class="nav-account__item nav-account__item--logout"><a href="login.php#header">Login</a></li>';
            ?>
          </ul>
          <!-- Account Navigation / End -->
  
        </div>
      </div>
      <!-- Header Top Bar / End -->
  
      <!-- Header Secondary -->
      <div class="header__secondary">
        <div class="container">
  
          <ul class="info-block info-block--header">
            <li class="info-block__item info-block__item--contact-primary">
              <svg role="img" class="df-icon df-icon--football-helmet">
                <use xlink:href="assets/images/football/icons-football.svg#football-helmet"/>
              </svg>
              <h6 class="info-block__heading">Join Our Sports Center!</h6>
              <a class="info-block__link" href="mailto:sportscenter@cemrino.it">sportscenter@camerino.it</a>
            </li>
            <li class="info-block__item info-block__item--contact-secondary">
              <svg role="img" class="df-icon df-icon--football-ball">
                <use xlink:href="assets/images/football/icons-football.svg#football-ball"/>
              </svg>
              <h6 class="info-block__heading">Contact Us</h6>
              <a class="info-block__link" href="mailto:info@camerino.it">info@camerino.it</a>
            </li>
            <li class="info-block__item info-block__item--shopping-cart">
              <a href="#" class="info-block__link-wrapper">
                <h6 class="info-block__heading">Quick contact List</h6>
                <span class="info-block__cart-sum">Administration</span>
              </a>
             <!-- Dropdown Shopping Cart -->
              <ul class="header-cart">
                <li class="header-cart__item">
                  <figure class="header-cart__product-thumb">
                    <a>
                      <img src="assets/images/football/samples/administrator.jpg" alt="">
                    </a>
                  </figure>
                  <div class="header-cart__inner">
                    <h5 class="header-cart__product-name"><a>Administrator 1</a></h5>
                    <span class="header-cart__product-cat">Commercial</span>
                    <div class="header-cart__product-sum">
                      <span class="header-cart__product-price">Email</span>: <span class="header-cart__product-count">commercial@sportscenter.com</span>
                    </div>
                  </div>
                </li>
                <li class="header-cart__item">
                  <figure class="header-cart__product-thumb">
                    <a>
                      <img src="assets/images/football/samples/administrator.jpg" alt="">
                    </a>
                  </figure>
                  <div class="header-cart__inner">
                    <h5 class="header-cart__product-name"><a>Administrator 2</a></h5>
                    <span class="header-cart__product-cat">Technical</span>
                    <div class="header-cart__product-sum">
                      <span class="header-cart__product-price">Email</span>: <span class="header-cart__product-count">technical@sportscenter.com</span>
                    </div>
                </li>
                <li class="header-cart__item">
                  <figure class="header-cart__product-thumb">
                    <a>
                      <img src="assets/images/football/samples/administrator.jpg" alt="">
                    </a>
                  </figure>
                  <div class="header-cart__inner">
                    <h5 class="header-cart__product-name"><a>Administrator 3</a></h5>
                    <span class="header-cart__product-cat">Help Desk</span>
                    <div class="header-cart__product-sum">
                      <span class="header-cart__product-price">Email</span>: <span class="header-cart__product-count">info@sportscenter.com</span>
                    </div>
                  </div>
                </li>
                <li class="header-cart__item">
                  <a href="contact.php#header" class="btn btn-default btn-block">Contact Us</a>
                </li>
              </ul>
              <!-- Dropdown Shopping Cart / End -->
            </li>
          </ul>
  
          <!-- Banner 420x60 -->
          <div class="header-banner">
            <a href="#"><img src="assets/images/football/banner-420x60.jpg" alt=""></a>
          </div>
          <!-- Banner 420x60 / End -->
  
        </div>
      </div>
      <!-- Header Secondary / End -->
  
      <!-- Header Primary -->
      <div class="header__primary" id="header">
        <div class="container">
          <div class="header__primary-inner">
  
            <!-- Header Logo -->
            <div class="header-logo">
              <a href="_football_index.php#header"><img src="assets/images/football/logo.png" srcset="assets/images/football/logo@2x.png 2x" alt="Camerino Sports Center" class="header-logo__img"></a>
            </div>
            <!-- Header Logo / End -->

            <!-- Main Navigation -->
            <nav class="main-nav clearfix" class="header">
              <ul class="main-nav__list">
                <li class="active"><a href="_football_index.php#header">Home</a></li>
                    <li class=""><a href="#">Services</a>
                  <div class="main-nav__megamenu clearfix">
                  <ul class="col-lg-2 col-md-3 col-xs-12 main-nav__ul">
                      <li class="main-nav__title">Services</li>
                      <li><a href="_football_outdoor.php#header">Outdoor Football</a></li>
                      <li><a href="_football_indoor.php#header">Indoor Football</a></li>
                      <li><a href="_swimming.php#header">Swimming</a></li>
                      <li><a href="_squash.php#header">Squash Court</a></li>
                      <li><a href="_basketball.php#header">Basket Ball</a></li>
                      <li><a href="_atletics.php#header">Atletics</a></li>
                      <li><a href="_football_page-contacts.php#header">Contact Us</a></li>
                    </ul>
                    <ul class="col-lg-2 col-md-3 col-xs-12 main-nav__ul">
                    <li class="main-nav__title">Services</li>
                      <li><a href="_yoga.php#header">Yoga</a></li>
                      <li><a href="_tennis.php#header">Tennis</a></li>
                      <li><a href="_volleyball.php#header">Volleyball</a></li>
                      <li><a href="_gym.php#header">Gym</a></li>
                      </ul>
                    <div class="col-lg-4 col-md-3 col-xs-12">
                      <ul class="posts posts--simple-list">
                        <li class="posts__item posts__item--category-1">
                          <figure class="posts__thumb">
                            <a href="_news_juventus.php#header"><img src="assets/images/samples/post-img-juventus.jpg" alt=""></a>
                          </figure>
                          <div class="posts__inner">
                            <div class="posts__cat">
                              <span class="label posts__cat-label">Juventus</span>
                            </div>
                            <h6 class="posts__title"><a href="_news_juventus.php#header">La Squadra Juventus trionfa per la settima volta e crea storia</a></h6>
                            <time datetime="2018-06-26" class="posts__date">May 06, 2018</time>
                          </div>
                        </li>
                        <li class="posts__item posts__item--category-2">
                          <figure class="posts__thumb">
                            <a href="_news_yoga.php#header"><img src="assets/images/samples/post-img-yoga.jpg" alt=""></a>
                          </figure>
                          <div class="posts__inner">
                            <div class="posts__cat">
                              <span class="label posts__cat-label">Yoga</span>
                            </div>
                            <h6 class="posts__title"><a href="_news_yoga.php#header">Si Riprendono le Lezioni di Yoga a Camerino</a></h6>
                            <time datetime="2018-05-02" class="posts__date">May 02, 2018</time>
                          </div>
                        </li>
                        <li class="posts__item posts__item--category-1">
                          <figure class="posts__thumb">
                            <a href="_news_motogp.php#header"><img src="assets/images/samples/post-img-motogp.jpg" alt=""></a>
                          </figure>
                          <div class="posts__inner">
                            <div class="posts__cat">
                              <span class="label posts__cat-label">MotoGp</span>
                            </div>
                            <h6 class="posts__title"><a href="_news_motogp.php#header">Rossi Vince il MotoGp 2018</a></h6>
                            <time datetime="2018-05-28" class="posts__date">May 28, 2018</time>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="col-lg-4 col-md-3 col-xs-12">
  
                      <div class="posts posts--tile">
                        <div class="posts__item posts__item--tile posts__item--category-2 card">
                          <figure class="posts__thumb">
                            <img src="assets/images/football/samples/post-img2-tile-sm.jpg" alt="" class="duotone-img" data-gradient-map="#282840, #4c4b73">
                          </figure>
                          <a href="#" class="posts__cta"></a>
                          <div class="posts__inner">
                            <div class="posts__cat">
                              <span class="label posts__cat-label">Mondiali Calcio</span>
                            </div>
                            <h6 class="posts__title"><a href="_news_post.php#header">Le Squadre Si Sbarcano a Russia Per Il Mondiale 2018</a></h6>
                            <time datetime="2018-06-06" class="posts__date">June 06, 2018</time>
                            <footer class="posts__footer card__footer">
                              <div class="post-author">
                                <figure class="post-author__avatar">
                                  <img src="assets/images/football/samples/avatar-6-xs.jpg" alt="Post Author Avatar">
                                </figure>
                                <div class="post-author__info">
                                  <h4 class="post-author__name">Ahmad Naeem</h4>
                                </div>
                              </div>
                              <ul class="post__meta meta">
                                <li class="meta__item meta__item--views">2369</li>
                                <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                                <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                              </ul>
                            </footer>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                 <li class=""><a href="#">Gallery</a>
                  <ul class="main-nav__sub">
                  <li><a href="_gallery_events.php#header">Events</a></li>
                  <li><a href="_football_staff-single.php#header">Staff Member</a></li>
                  </ul>
                </li>
              <li class=""><a href="#">Courses</a>
                  <ul class="main-nav__sub">
                    <li><a href="_course_yoga.php#header">Yoga</a></li>
                    <li><a href="_course_palestra.php#header">Palestra</a></li>
                    <li><a>Calcetto</a>
            <ul class="main-nav__sub-2">
                          <li><a href="_calcetto_maschile.php#header">Calcetto Maschile</a></li>
                          <li><a href="_calcetto_femminile.php#header">Calcetto Femminile</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class=""><a href="_news.php#header">News</a>
                </li>
              </ul>
  
              <!-- Header Search Form -->
              <div class="header-search-form header-search-form--right">
                <form action="#" id="mobile-search-form" class="search-form">
                  <input type="text" class="form-control header-mobile__search-control" value="" placeholder="Enter your seach here...">
                  <button type="submit" class="header-mobile__search-submit"><i class="fa fa-search"></i></button>
                </form>
              </div>
              <!-- Header Search Form / End -->
  
            </nav>
            <!-- Main Navigation / End -->
  
          </div>
        </div>
      </div>
      <!-- Header Primary / End -->
  
    </header>
    <!-- Header / End -->