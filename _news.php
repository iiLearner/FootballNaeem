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
            <h1 class="page-heading__title">Latest<span class="highlight">News</span></h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li><a href="_football_index.html">Home</a></li>
              <li class="active">News</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Post Filter -->
    <div class="post-filter">
      <div class="container">
        <form action="#" class="post-filter__form clearfix">
          <div class="post-filter__select">
            <label class="post-filter__label">Category</label>
            <select class="cs-select cs-skin-border">
              <option value="" disabled selected>All Articles</option>
              <option value="all">All Articles</option>
              <option value="team">The Team</option>
              <option value="playoffs">Playoffs</option>
              <option value="injuries">Injuries</option>
            </select>
          </div>
          <div class="post-filter__select">
            <label class="post-filter__label">Filter By</label>
            <select class="cs-select cs-skin-border">
              <option value="" disabled selected>Article Date</option>
              <option value="date">Article Date</option>
              <option value="id">Article ID</option>
              <option value="comments">Last Comments</option>
              <option value="random">Random</option>
            </select>
          </div>
          <div class="post-filter__select">
            <label class="post-filter__label">Order</label>
            <select class="cs-select cs-skin-border">
              <option value="" disabled selected>Ascending</option>
              <option value="ascending">Ascending</option>
              <option value="descending">Descending</option>
            </select>
          </div>
          <div class="post-filter__select">
            <label class="post-filter__label">Author</label>
            <select class="cs-select cs-skin-border">
              <option value="" disabled selected>All Authors</option>
              <option value="all">All Authors</option>
              <option value="author1">James Spiegel</option>
              <option value="author2">Jessica Hoops</option>
              <option value="author3">Mark Johnson</option>
            </select>
          </div>
          <div class="post-filter__submit">
            <button type="submit" class="btn btn-primary-inverse btn-lg btn-block">Filter News</button>
          </div>
        </form>
      </div>
    </div>
    <!-- Post Filter / End -->
    

    <!-- Content
    ================================================== -->
    <div class="site-content">
      <div class="container">

        <div class="row">
          <!-- Content -->
          <div class="content col-md-12">

            <!-- Posts Grid -->
            <div class="posts posts--cards post-grid post-grid--masonry row">

              <div class="post-grid__item col-sm-4">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                  <figure class="posts__thumb">
                    <div class="posts__cat">
                      <span class="label posts__cat-label">The Team</span>
                    </div>
                    <a href="_news_juventus.html#header"><img src="assets/images/football/samples/post-img-juventus.jpg" alt=""></a>
                  </figure>
                  <div class="posts__inner card__content">
                    <a href="#" class="posts__cta"></a>
                    <time datetime="2018-05-26" class="posts__date">May 26, 2018</time>
                    <h6 class="posts__title"><a href="_news_juventus.html#header">LA SQUADRA JUVENTUS TRIONFA PER LA SETTIMA VOLTA E CREA STORIA</a></h6>
                  </div>
                  <footer class="posts__footer card__footer">
                    <div class="post-author">
                      <figure class="post-author__avatar">
                        <img src="assets/images/football/samples/avatar-12-xs.jpg" alt="Post Author Avatar">
                      </figure>
                      <div class="post-author__info">
                        <h4 class="post-author__name">Eric Rodgers</h4>
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

              <div class="post-grid__item col-sm-4">
                <div class="posts__item posts__item--card posts__item--category-2 card">
                  <figure class="posts__thumb">
                    <div class="posts__cat">
                      <span class="label posts__cat-label">Yoga</span>
                    </div>
                    <a href="_news_yoga.html#header"><img src="assets/images/football/samples/post-img-yoga.jpg" alt=""></a>
                  </figure>
                  <div class="posts__inner card__content">
                    <a href="#" class="posts__cta"></a>
                    <time datetime="2018-05-02" class="posts__date">May 02, 2018</time>
                    <h6 class="posts__title"><a href="_news_yoga.html#header">RIPRENDONO LE LEZIONI di YOGA a Camerino</a></h6>
                  </div>
                  <footer class="posts__footer card__footer">
                    <div class="post-author">
                      <figure class="post-author__avatar">
                        <img src="assets/images/football/samples/avatar-12-xs.jpg" alt="Post Author Avatar">
                      </figure>
                      <div class="post-author__info">
                        <h4 class="post-author__name">Eric Rodgers</h4>
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

              <div class="post-grid__item col-sm-4">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                  <figure class="posts__thumb">
                    <div class="posts__cat">
                      <span class="label posts__cat-label">The Team</span>
                    </div>
                    <a href="_news_nba.html#header"><img src="assets/images/football/samples/post-img-nba.jpg" alt=""></a>
                  </figure>
                  <div class="posts__inner card__content">
                    <a href="#" class="posts__cta"></a>
                    <time datetime="2018-06-08" class="posts__date">June 08, 2018</time>
                    <h6 class="posts__title"><a href="_news_nba.html#header">LA SQUADRA GOLDEN STATE WARRIORS VINCE IL TITOLO NBA 2018</a></h6>
                  </div>
                  <footer class="posts__footer card__footer">
                    <div class="post-author">
                      <figure class="post-author__avatar">
                        <img src="assets/images/football/samples/avatar-6-xs.jpg" alt="Post Author Avatar">
                      </figure>
                      <div class="post-author__info">
                        <h4 class="post-author__name">Ginny Valentine</h4>
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

              <div class="post-grid__item col-sm-4">
                <div class="posts__item posts__item--card posts__item--category-3 card">
                  <figure class="posts__thumb">
                    <div class="posts__cat">
                      <span class="label posts__cat-label">MotoGp</span>
                    </div>
                    <a href="_news_motogp.html#header"><img src="assets/images/football/samples/post-img-motogp.jpg" alt=""></a>
                  </figure>
                  <div class="posts__inner card__content">
                    <a href="#" class="posts__cta"></a>
                    <time datetime="2018-05-28" class="posts__date">May 28, 2018</time>
                    <h6 class="posts__title"><a href="_news_motogp.html#header">VALNETINO ROSSI VINCE IL MOTOGP 2018</a></h6>
                  </div>
                  <footer class="posts__footer card__footer">
                    <div class="post-author">
                      <figure class="post-author__avatar">
                        <img src="assets/images/football/samples/avatar-12-xs.jpg" alt="Post Author Avatar">
                      </figure>
                      <div class="post-author__info">
                        <h4 class="post-author__name">Eric Rodgers</h4>
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

              <div class="post-grid__item col-sm-4">
                <div class="posts__item posts__item--card posts__item--quote">
                  <div class="card__content">
                    <blockquote class="blockquote blockquote--card">
                      <p class="blockquote__content">The most <span class="blockquote-stress">important</span> thing about football is <span class="blockquote-stress">the passion</span> you feel</p>
                      <footer class="blockquote__footer">
                        <cite class="blockquote__cite">
                          <span class="blockquote__author-name">Massimiliano Allegri</span>
                          <span class="blockquote__author-info">Juventuss Coach</span>
                        </cite>
                      </footer>
                    </blockquote>
                  </div>
                </div>
              </div>

              <div class="post-grid__item col-sm-4">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                  <div class="posts__inner card__content">
                    <div class="posts__cat posts__cat--flow">
                      <span class="label posts__cat-label">The Team</span>
                    </div>
                    <h6 class="posts__title"><a href="_news_lube.html#header">CONTINUA IL TRIONFO DELLA SQUADRA LA LUBE</a></h6>
                    <time datetime="2018-05-26" class="posts__date">May 26, 2018</time>
                  </div>
                  <footer class="posts__footer card__footer">
                    <div class="post-author">
                      <figure class="post-author__avatar">
                        <img src="assets/images/football/samples/avatar-6-xs.jpg" alt="Post Author Avatar">
                      </figure>
                      <div class="post-author__info">
                        <h4 class="post-author__name">Ginny Valentine</h4>
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

              <div class="post-grid__item col-sm-4">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                  <figure class="posts__thumb">
                    <div class="posts__cat">
                      <span class="label posts__cat-label">The Team</span>
                    </div>
                    <a href="_news_milan.html#header"><img src="assets/images/football/samples/post-img-milan.jpg" alt=""></a>
                  </figure>
                  <div class="posts__inner card__content">
                    <a href="#" class="posts__cta"></a>
                    <time datetime="2018-05-29" class="posts__date">May 29, 2018</time>
                    <h6 class="posts__title"><a href="_news_milan.html#header">La Squadra AC MILAN si Qualifica Per Europa League </a></h6>
                  </div>
                  <footer class="posts__footer card__footer">
                    <div class="post-author">
                      <figure class="post-author__avatar">
                        <img src="assets/images/football/samples/avatar-12-xs.jpg" alt="Post Author Avatar">
                      </figure>
                      <div class="post-author__info">
                        <h4 class="post-author__name">Eric Rodgers</h4>
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

              <div class="post-grid__item col-sm-4">
                <a href="#" class="btn-social-counter btn-social-counter--card btn-social-counter--fb">
                  <div class="btn-social-counter__name">Facebook</div>
                  <footer class="btn-social-counter__footer">
                    <h6 class="btn-social-counter__title">Like Our Facebook Page</h6>
                    <span class="btn-social-counter__count">83600 Likes</span>
                    <span class="btn-social-counter__add-icon"></span>
                  </footer>
                </a>
              </div>

              <div class="post-grid__item col-sm-4">
                <div class="posts__item posts__item--card posts__item--category-3 card">
                  <figure class="posts__thumb">
                    <div class="posts__cat">
                      <span class="label posts__cat-label">Nuoto</span>
                    </div>
                    <a href="_news_swimming.html#header"><img src="assets/images/football/samples/post-img-federica.jpg" alt=""></a>
                  </figure>
                  <div class="posts__inner card__content">
                    <a href="#" class="posts__cta"></a>
                    <time datetime="2018-04-26" class="posts__date">April 26, 2018</time>
                    <h6 class="posts__title"><a href="_news_swimming.html#header">FEDERICA PELEGRINI DIVENTA NUOVA SENSAZIONE DEL NUOTO ITALIANO</a></h6>
                  </div>
                  <footer class="posts__footer card__footer">
                    <div class="post-author">
                      <figure class="post-author__avatar">
                        <img src="assets/images/football/samples/avatar-12-xs.jpg" alt="Post Author Avatar">
                      </figure>
                      <div class="post-author__info">
                        <h4 class="post-author__name">Eric Rodgers</h4>
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

              <div class="post-grid__item col-sm-4">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                  <figure class="posts__thumb">
                    <div class="posts__cat">
                      <span class="label posts__cat-label">The Team</span>
                    </div>
                    <a href="_news_mondiali_calcio.html#header"><img src="assets/images/football/samples/post-img-mondiali.jpg" alt=""></a>
                  </figure>
                  <div class="posts__inner card__content">
                    <a href="#" class="posts__cta"></a>
                    <time datetime="2018-06-06" class="posts__date">June 06, 2018</time>
                    <h6 class="posts__title"><a href="_news_mondiali_calcio.html#header">LE SQUADRE PARTECIPANTI AI MONDIALI SBARCANO A RUSSIA</a></h6>
                  </div>
                  <footer class="posts__footer card__footer">
                    <div class="post-author">
                      <figure class="post-author__avatar">
                        <img src="assets/images/football/samples/avatar-6-xs.jpg" alt="Post Author Avatar">
                      </figure>
                      <div class="post-author__info">
                        <h4 class="post-author__name">Ginny Valentine</h4>
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

              <div class="post-grid__item col-sm-4">
                <a href="#" class="btn-social-counter btn-social-counter--card btn-social-counter--twitter">
                  <div class="btn-social-counter__name">Twitter</div>
                  <footer class="btn-social-counter__footer">
                    <h6 class="btn-social-counter__title">Follow Us on Twitter</h6>
                    <span class="btn-social-counter__count">580 Followers</span>
                    <span class="btn-social-counter__add-icon"></span>
                  </footer>
                </a>
              </div>

             <div class="post-grid__item col-sm-4">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                  <div class="posts__inner card__content">
                    <div class="posts__cat posts__cat--flow">
                      <span class="label posts__cat-label">Palestra</span>
                    </div>
                    <h6 class="posts__title"><a href="_news_palestra.html#header">LA PALESTRA DI CUS CAMERINO DISPONE DI NUOVA ATTREZZATURA DI QUALITÀ</a></h6>
                    <time datetime="2018-05-10" class="posts__date">June 10, 2018</time>
                  </div>
                  <footer class="posts__footer card__footer">
                    <div class="post-author">
                      <figure class="post-author__avatar">
                        <img src="assets/images/football/samples/avatar-6-xs.jpg" alt="Post Author Avatar">
                      </figure>
                      <div class="post-author__info">
                        <h4 class="post-author__name">Ginny Valentine</h4>
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


              <div class="post-grid__item col-sm-4">
                <a href="#" class="btn-social-counter btn-social-counter--card btn-social-counter--rss">
                  <div class="btn-social-counter__name"><i class="fa fa-rss"></i> RSS Feed</div>
                  <footer class="btn-social-counter__footer">
                    <h6 class="btn-social-counter__title">Subscribe to our RSS</h6>
                    <span class="btn-social-counter__count">840 Subscribers</span>
                    <span class="btn-social-counter__add-icon"></span>
                  </footer>
                </a>
              </div>

          

            

             

            </div>
            <!-- Post Grid / End -->
            <!-- Post Pagination -->
            <nav class="post-pagination text-center">
              <ul class="pagination pagination--lg">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
              </ul>
            </nav>
            <!-- Post Pagination / End -->
          </div>
          <!-- Content / End -->
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
  
  <!-- Vendor JS -->
  <script src="assets/vendor/twitter/jquery.twitter.js"></script>
  <script src="assets/vendor/jquery-duotone/jquery.duotone.min.js"></script>
  
  
  
  <!-- Template JS -->
  <script src="assets/js/init.js"></script>
  <script src="assets/js/custom.js"></script>
  
  </body>
  </html>
  
