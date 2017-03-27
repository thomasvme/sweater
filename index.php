<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->



<head>


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Moat &mdash; Ghent</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
  <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
  <meta name="author" content="FREEHTML5.CO" />

  <!--
            //////////////////////////////////////////////////////
            
            FREE HTML5 TEMPLATE
            DESIGNED & DEVELOPED by FREEHTML5.CO
            
            Website: 		http://freehtml5.co/
            Email: 			info@freehtml5.co
            Twitter: 		http://twitter.com/fh5co
            Facebook: 		https://www.facebook.com/fh5co
            
            //////////////////////////////////////////////////////
            -->

  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content="" />
  <meta property="og:image" content="" />
  <meta property="og:url" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!--Place favicon.ico and apple-touch-icon.png in the root directory -->
  <!--<link rel="shortcut icon" href="favicon.ico">-->

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Monsterrat:400,700|Merriweather:400,300italic,700' rel='stylesheet' type='text/css'>

  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Magnific Popup-->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- Our-style  -->
  <link rel="stylesheet" href="css/our-style.css">

  <!-- Cards -->
  <link rel="stylesheet" href="css/cards.css">

  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

  <script src="js/our-script.js"></script>


  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>



  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
                <script src="js/respond.min.js"></script>
            <![endif]-->

</head>

<body>
  <div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Trailer</h4>
        </div>
        <div class="modal-body">
          <div class='embed-container'>
            <!-- Begin Login Form -->
            <form id="login-form" action="login.php" method="post">
              <div class="modal-body">
                <div id="div-login-msg">
                  <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                  <span id="text-login-msg">Type your username and password.</span>
                </div>
                <input name="username" id="login_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
                <input name="password" id="login_password" class="form-control" type="password" placeholder="Password" required>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Remember me
                    <?php echo "Hello, world!"; ?>
                  </label>
                </div>
              </div>
              <div class="modal-footer">
                <div>
                  <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                </div>
                <div>
                  <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                  <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                </div>
              </div>
            </form>
            <!-- End Login Form -->
          </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>

  <script>
    console.log("tet");
  </script>




  <div id="fh5co-page">
    <nav class="fh5co-nav-style-1" role="navigation" data-offcanvass-position="fh5co-offcanvass-left">
      <div class="container">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 fh5co-logo">
          <a href="#" class="js-fh5co-mobile-toggle fh5co-nav-toggle"><i></i></a>
          <a href="#">
            <div class="fh5co-icon"><i class="icon-command"></i> Moat</div>
          </a>
        </div>
        <div class="col-lg-6 col-md-5 col-sm-5 text-center fh5co-link-wrap">
          <ul data-offcanvass="yes">
            <li class="active"><a href="#">Tour</a></li>
            <li><a href="#">Sweaters</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Pricing</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4 text-right fh5co-link-wrap">
          <ul class="fh5co-special" data-offcanvass="yes">
            <li><a href="" data-target="#loginModal" data-toggle="modal">Login</a></li>
            <!--<a href="" class="btn btn-primary btn-lg outline fh5co-footer-widget wow fadeInLeft" data-wow-duration="3s" onclick="document.getElementById('myVideo').pause()"
            data-wow-delay="2s" data-toggle="modal" data-target="#loginModal"> <span class="network-name"> &#9658; Trailer</span></a>-->
            <li><a href="#" class="call-to-action">Look around!</a></li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="fh5co-cover fh5co-cover-style-2 js-full-height" data-stellar-background-ratio="0.5" data-next="yes" style="background-image: url(images/full_1.jpg);">
      <span class="scroll-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
            <a href="#">
            <span class="mouse"><span></span></span>
      </a>
      </span>
      <div class="fh5co-overlay"></div>
      <div class="fh5co-cover-text">
        <div class="container">
          <div class="row">
            <div class="col-md-push-6 col-md-6 full-height js-full-height">
              <div class="fh5co-cover-intro">
                <h1 class="cover-text-lead wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">New way of living</h1>
                <h2 class="cover-text-sublead wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Sweater 1, Buy this here</h2>
                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s"><a href="" class="btn btn-primary btn-outline btn-lg">See our Sweaters.</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




    <div class="fh5co-project-style-2">
      <div class="container">
        <div class="row p-b">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Our Cosy Sweaters</h2>
            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Sweater 1, Buy this here</p>
            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s"><a href="#" class="btn btn-success btn-lg">Start your journey here.</a></p>
          </div>
        </div>
      </div>
      <div class="fh5co-projects">
        <ul>
          <li class="wow fadeInUp" style="background-image: url(images/home.jpg);" data-wow-duration="1s" data-wow-delay="1.4s" data-stellar-background-ratio="0.5">
            <a href="#">
              <div class="fh5co-overlay"></div>
              <div class="container">
                <div class="fh5co-text">
                  <div class="fh5co-text-inner">
                    <div class="row">
                      <div class="col-md-6">
                        <h3>Sweater 1</h3>
                      </div>
                      <div class="col-md-6">
                        <p>Sweater 1, Buy this here</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li class="wow fadeInUp" style="background-image: url(images/full_2.jpg);" data-wow-duration="1s" data-wow-delay="1.7s" data-stellar-background-ratio="0.5">
            <a href="#">
              <div class="fh5co-overlay"></div>
              <div class="container">
                <div class="fh5co-text">
                  <div class="fh5co-text-inner">
                    <div class="row">
                      <div class="col-md-6">
                        <h3>Sweater 401</h3>
                      </div>
                      <div class="col-md-6">
                        <p>Sweater 1, Buy this here</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li class="wow fadeInUp" style="background-image: url(images/full_1.jpg);" data-wow-duration="1s" data-wow-delay="2s" data-stellar-background-ratio="0.5">
            <a href="#">
              <div class="fh5co-overlay"></div>
              <div class="container">
                <div class="fh5co-text">
                  <div class="fh5co-text-inner">
                    <div class="row">
                      <div class="col-md-6">
                        <h3>Harelbekestraat 14</h3>
                      </div>
                      <div class="col-md-6">
                        <p>Sweater 1, Buy this here</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="fh5co-blog-style-1">
      <div class="container">
        <div class="row p-b">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Recent From Blog</h2>
            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Sweater 1, Buy this here</p>
          </div>
        </div>
        <div class="row p-b">
          <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12">
            <div class="fh5co-post wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.1s">
              <div class="fh5co-post-image">
                <div class="fh5co-overlay"></div>
                <div class="fh5co-category"><a href="#">Green</a></div>
                <img src="images/img_same_dimension_2.jpg" alt="Image" class="img-responsive">
              </div>
              <div class="fh5co-post-text">
                <h3><a href="#">How to Create A Home</a></h3>
                <p>Sweater 1, Buy this here</p>
              </div>
              <div class="fh5co-post-meta">
                <a href="#"><i class="icon-chat"></i> 33</a>
                <a href="#"><i class="icon-clock2"></i> 2 hours ago</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12">
            <div class="fh5co-post wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.4s">
              <div class="fh5co-post-image">
                <div class="fh5co-overlay"></div>
                <div class="fh5co-category"><a href="#">Share</a></div>
                <img src="images/img_same_dimension_3.jpg" alt="Image" class="img-responsive">
              </div>
              <div class="fh5co-post-text">
                <h3><a href="#">Sharing</a></h3>
                <p>Sweater 1, Buy this here</p>
              </div>
              <div class="fh5co-post-meta">
                <a href="#"><i class="icon-chat"></i> 33</a>
                <a href="#"><i class="icon-clock2"></i> 2 hours ago</a>
              </div>
            </div>
          </div>
          <div class="clearfix visible-sm-block"></div>
          <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12">
            <div class="fh5co-post wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.7s">
              <div class="fh5co-post-image">
                <div class="fh5co-overlay"></div>
                <div class="fh5co-category"><a href="#">Nice</a></div>
                <img src="images/img_same_dimension_4.jpg" alt="Image" class="img-responsive">
              </div>
              <div class="fh5co-post-text">
                <h3><a href="#">Nice homes</a></h3>
                <p>Sweater 1, Buy this here</p>
              </div>
              <div class="fh5co-post-meta">
                <a href="#"><i class="icon-chat"></i> 33</a>
                <a href="#"><i class="icon-clock2"></i> 2 hours ago</a>
              </div>
            </div>
          </div>
          <div class="clearfix visible-sm-block"></div>
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
            <a href="#" class="btn btn-primary btn-lg">View All Post</a>
          </div>
        </div>
      </div>
    </div>


    <div class="fh5co-features-style-1" style="background-image: url(images/home.jpg);" data-stellar-background-ratio="0.5">
      <div class="fh5co-overlay"></div>
      <div class="container" style="z-index: 3; position: relative;">
        <div class="row p-b">
          <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
            <h2 class="fh5co-heading">What do we do?</h2>
          </div>
        </div>
        <div class="row">
          <div class="fh5co-features">
            <div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
              <div class="icon"><i class="icon-ribbon"></i></div>
              <h3>Sweaters</h3>
              <p>Sweater 1, Buy this here</p>
            </div>
            <div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
              <div class="icon"><i class="icon-image22"></i></div>
              <h3>Design</h3>
              <p>Sweater 1, Buy this here</p>
            </div>
            <div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
              <div class="icon"><i class=" icon-monitor"></i></div>
              <h3>New</h3>
              <p>Sweater 1, Buy this here</p>
            </div>

            <div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">
              <div class="icon"><i class="icon-video2"></i></div>
              <h3>Video Direction</h3>
              <p>Sweater 1, Buy this here</p>
            </div>
            <div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
              <div class="icon"><i class="icon-bag"></i></div>
              <h3>Car</h3>
              <p>Sweater 1, Buy this here</p>
            </div>
            <div class="fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.3s">
              <div class="icon"><i class="icon-mail2"></i></div>
              <h3>Expenses</h3>
              <p>Sweater 1, Buy this here</p>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="fh5co-features-style-2">
      <div class="container">
        <div class="row p-b">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Why Choose Us</h2>
            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Sweater 1, Buy this here</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
            <div class="fh5co-icon"><i class="icon-command"></i></div>
            <div class="fh5co-desc">
              <h3>100% Ghent</h3>
              <p>We made sweaters and are selling them to you </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
            <div class="fh5co-icon"><i class="icon-eye22"></i></div>
            <div class="fh5co-desc">
              <h3>Beautiful</h3>
              <p>We made sweaters and are selling them to you </p>
            </div>
          </div>
          <div class="clearfix visible-sm-block visible-xs-block"></div>
          <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">
            <div class="fh5co-icon"><i class="icon-toggle"></i></div>
            <div class="fh5co-desc">
              <h3>Young &Aacute; Dynamic</h3>
              <p>We made sweaters and are selling them to you </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
            <div class="fh5co-icon"><i class="icon-archive22"></i></div>
            <div class="fh5co-desc">
              <h3>Cosy</h3>
              <p>We made sweaters and are selling them to you </p>
            </div>
          </div>
          <div class="clearfix visible-sm-block visible-xs-block"></div>
          <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.3s">
            <div class="fh5co-icon"><i class="icon-heart22"></i></div>
            <div class="fh5co-desc">
              <h3>Made with Love</h3>
              <p>We made sweaters and are selling them to you </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.6s">
            <div class="fh5co-icon"><i class="icon-umbrella"></i></div>
            <div class="fh5co-desc">
              <h3>Eco Friendly</h3>
              <p>We made sweaters and are selling them to you </p>
            </div>
          </div>
          <div class="clearfix visible-sm-block visible-xs-block"></div>
        </div>
      </div>
    </div>

    <div class="fh5co-pricing-style-2">
      <div class="container">
        <div class="row">
          <div class="row p-b">
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Pricing Plans</h2>
              <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">We made sweaters and are selling them to you </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="pricing">
            <div class="pricing-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
              <h3 class="pricing-title">Sweaters</h3>
              <p class="pricing-sentence">aardsesteenweg</p>
              <div class="pricing-price"><span class="pricing-currency">$</span>800<span class="pricing-period">/ maand</span></div>
              <ul class="pricing-feature-list">
                <li class="pricing-feature">10 blabla</li>
                <li class="pricing-feature">kosten 25 eu</li>
                <li class="pricing-feature">Nog iets per maand</li>
              </ul>
              <button class="btn btn-success btn-outline">Choose plan</button>
            </div>
            <div class="pricing-item pricing-item--featured wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
              <h3 class="pricing-title">Harel</h3>
              <p class="pricing-sentence">bekestraat</p>
              <div class="pricing-price"><span class="pricing-currency">$</span>400<span class="pricing-period">/ maand</span></div>
              <ul class="pricing-feature-list">
                <li class="pricing-feature">50 euro kosten</li>
                <li class="pricing-feature">50 eu vaste kosten</li>
                <li class="pricing-feature">10 grote jongens</li>
              </ul>
              <button class="btn btn-success btn-lg">Choose plan</button>
            </div>
            <div class="pricing-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">
              <h3 class="pricing-title">Sweaters</h3>
              <p class="pricing-sentence">Andere Sweaters</p>
              <div class="pricing-price"><span class="pricing-currency">$</span>450<span class="pricing-period">/ maand</span></div>
              <ul class="pricing-feature-list">
                <li class="pricing-feature">Nuja wat</li>
                <li class="pricing-feature">Is dat hier</li>
                <li class="pricing-feature">eigenlijk voor 25 euro</li>
              </ul>
              <button class="btn btn-success btn-outline">Kies maar raak</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="fh5co-content-style-6">
      <div class="container">
        <div class="row p-b text-center">
          <div class="col-md-6 col-md-offset-3">
            <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Explore the city.</h2>
            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Sweater 1, Buy this here</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
            <a href="#" class="link-block">
              <figure><img src="images/img_same_dimension_1.jpg" alt="Image" class="img-responsive img-rounded"></figure>
              <h3>Kom eens kijken</h3>
              <p>We made sweaters and are selling them to you</p>
              <p><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
            </a>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".8s">
            <a href="#" class="link-block">
              <figure><img src="images/img_same_dimension_2.jpg" alt="Image" class="img-responsive img-rounded"></figure>
              <h3>Echt de moeite</h3>
              <p>We made sweaters and are selling them to you</p>
              <p><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
            </a>
          </div>
          <div class="clearfix visible-sm-block"></div>
          <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.1s">
            <a href="#" class="link-block">
              <figure><img src="images/img_same_dimension_3.jpg" alt="Image" class="img-responsive img-rounded"></figure>
              <h3>Fluppe ziet het wel</h3>
              <p>We made sweaters and are selling them to you</p>
              <p><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
            </a>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.4s">
            <a href="#" class="link-block">
              <figure><img src="images/img_same_dimension_4.jpg" alt="Image" class="img-responsive img-rounded"></figure>
              <h3>Of antje</h3>
              <p>We made sweaters and are selling them to you</p>
              <p><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="fh5co-counter-style-2" style="background-image: url(images/full_2.jpg);" data-stellar-background-ratio="0.5">
      <div class="fh5co-overlay"></div>
      <div class="container">
        <div class="fh5co-section-content-wrap">
          <div class="fh5co-section-content">
            <div class="row">
              <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                <div class="icon">
                  <i class="icon-command"></i>
                </div>
                <span class="fh5co-counter js-counter" data-from="0" data-to="28" data-speed="5000" data-refresh-interval="50"></span>
                <span class="fh5co-counter-label">sweaterrs die hier al voor kozen</span>

              </div>
              <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                <div class="icon">
                  <i class="icon-power"></i>
                </div>
                <span class="fh5co-counter js-counter" data-from="0" data-to="5" data-speed="5000" data-refresh-interval="50"></span>
                <span class="fh5co-counter-label">Huizen in de aanbieding</span>
              </div>
              <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
                <div class="icon">
                  <i class="icon-code2"></i>
                </div>
                <span class="fh5co-counter js-counter" data-from="0" data-to="5000" data-speed="5000" data-refresh-interval="50"></span>
                <span class="fh5co-counter-label">Jaar aanwezig</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="fh5co-testimonial-style-2">
      <div class="container">
        <div class="row p-b">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Happy Customer</h2>
            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s"></p>
          </div>
        </div>
        <div class="row">

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="fh5co-testimonial-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
              <div class="fh5co-name">
                <img src="images/person_5.jpg" alt="">
                <div class="fh5co-meta">
                  <h3>Chris Clark</h3>
                  <span class="fh5co-company">XYZ Inc.</span>
                </div>
              </div>
              <div class="fh5co-text">
                <p>&ldquo;We made sweaters and are selling them to you Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="fh5co-testimonial-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
              <div class="fh5co-name">
                <img src="images/person_4.jpg" alt="">
                <div class="fh5co-meta">
                  <h3>Ian Stewart</h3>
                  <span class="fh5co-company">XYZ Inc.</span>
                </div>
              </div>
              <div class="fh5co-text">
                <p>&ldquo;We made sweaters and are selling them to you &rdquo;</p>
              </div>
            </div>
          </div>

          <div class="clearfix visible-sm-block"></div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="fh5co-testimonial-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">
              <div class="fh5co-name">
                <img src="images/person_3.jpg" alt="">
                <div class="fh5co-meta">
                  <h3>Mitch Silk</h3>
                  <span class="fh5co-company">XYZ Inc.</span>
                </div>
              </div>
              <div class="fh5co-text">
                <p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
              </div>
            </div>
          </div>

          <div class="clearfix visible-lg-block visible-md-block"></div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="fh5co-testimonial-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
              <div class="fh5co-name">
                <img src="images/person_1.jpg" alt="">
                <div class="fh5co-meta">
                  <h3>Beth Glasgow</h3>
                  <span class="fh5co-company">XYZ Inc.</span>
                </div>
              </div>
              <div class="fh5co-text">
                <p>&ldquo;We made sweaters and are selling them to you &rdquo;</p>
              </div>
            </div>
          </div>

          <div class="clearfix visible-sm-block"></div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="fh5co-testimonial-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.3s">
              <div class="fh5co-name">
                <img src="images/person_2.jpg" alt="">
                <div class="fh5co-meta">
                  <h3>Rob Smith</h3>
                  <span class="fh5co-company">XYZ Inc.</span>
                </div>
              </div>
              <div class="fh5co-text">

                <p>&ldquo;We made sweaters and are selling them to you Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="fh5co-testimonial-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.6s">
              <div class="fh5co-name">
                <img src="images/person_6.jpg" alt="">
                <div class="fh5co-meta">
                  <h3>Colleen Bass</h3>
                  <span class="fh5co-company">XYZ Inc.</span>
                </div>
              </div>
              <div class="fh5co-text">
                <p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
              </div>
            </div>
          </div>

          <div class="clearfix visible-sm-block"></div>

        </div>
      </div>
    </div>

    <div class="fh5co-footer-style-3">
      <div class="container">
        <div class="row p-b">
          <div class="col-md-3 col-sm-6 fh5co-footer-widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
            <div class="fh5co-logo"><span class="logo">V</span> Moat</div>
            <p class="fh5co-copyright">&copy; 2016 Voltage.
              <br>All Rights Reserved.
              <br>Designed by <a target="_blank" href="http://airfors.one0">air for swan</a>
              <br>Created with <a target="_blank" href=""> Fluppe's imagination</a>
              <br> Images:
              <a target="_blank" href="">Lolo</a>, <a target="_blank" href="">Lieske</a></p>
          </div>
          <div class="col-md-3 col-sm-6 fh5co-footer-widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
            <h3>Company</h3>
            <ul class="fh5co-links">
              <li><a href="#">How it Works</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Products</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="clearfix visible-sm-block"></div>
          <div class="col-md-3 col-sm-6 fh5co-footer-widget wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
            <h3>Connect</h3>
            <ul class="fh5co-links fh5co-social">
              <li><a href="#"><i class="icon icon-facebook2"></i> Facebook</a></li>
              <li><a href="#"><i class="icon icon-twitter"></i> Twitter</a></li>
              <li><a href="#"><i class="icon icon-dribbble"></i> Dribbble</a></li>
              <li><a href="#"><i class="icon icon-instagram"></i> Instagram</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6 fh5co-footer-widget wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
            <h3>About</h3>
            <p>We made sweaters and are selling them to you </p>
            <p><a href="#" class="btn btn-success btn-sm btn-outline">I'm a button</a></p>
          </div>
          <div class="clearfix visible-sm-block"></div>
        </div>
        <div class="row fh5co-made">
          <div class="col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
            <p>Made with <i class="heart icon-heart"></i> by <a href="http://airfors.one0">air for swan</a></p>
          </div>
        </div>
      </div>
    </div>
    <!-- END footer -->

  </div>
  <!-- END page-->

  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Owl Carousel -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- Magnific Popup -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <!-- Stellar -->
  <script src="js/jquery.stellar.min.js"></script>
  <!-- countTo -->
  <script src="js/jquery.countTo.js"></script>
  <!-- WOW -->
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>



  <!-- Our script -->
  <!--<script src="js/our-script.js"></script>-->
  <!-- Main -->
  <script src="js/main.js"></script>

  <!--<script language="JavaScript" type="text/javascript" src="js/jquery.js"></script>-->
  <!--<script language="JavaScript" type="text/javascript" src="js/jquery-ui-personalized-1.5.2.packed.js"></script>-->
  <!--<script language="JavaScript" type="text/javascript" src="js/sprinkle.js"></script>-->
  <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>-->

</body>

</html>