
<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Looking for something amazing?">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="True">
    <title>FIFO BOOKING.COM</title>
    <!-- Edge and IE-->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- Add to homescreen for Chrome on Android-->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Looking for something amazing?">
    <link rel="icon" sizes="192x192" href="<?php echo IMAGE_THEME_URL; ?>touch/chrome-touch-icon-192x192.png">
    <!-- Add to homescreen for Safari on iOS-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Your Travel World">
    <link rel="apple-touch-icon" href="<?php echo IMAGE_THEME_URL; ?>touch/apple-touch-icon.png">
    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,500,600,700%7CPoppins:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo CSS_THEME_URL; ?>jquery-ui.structure.min.css">
    <link rel="stylesheet" href="<?php echo CSS_THEME_URL; ?>jquery-ui.theme.min.css">
    <link rel="stylesheet" href="<?php echo CSS_THEME_URL; ?>bootstrap.min.css">
    <link id="cssRtl" rel="stylesheet" href="#">
    <link rel="stylesheet" href="<?php echo CSS_THEME_URL; ?>flatpickr.min.css">
    <link rel="stylesheet" href="<?php echo CSS_THEME_URL; ?>font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo CSS_THEME_URL; ?>fontawesome-stars-o.css">
    <link rel="stylesheet" href="<?php echo CSS_THEME_URL; ?>swiper.min.css">
    <link rel="stylesheet" href="<?php echo CSS_THEME_URL; ?>jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="<?php echo CSS_THEME_URL; ?>select2.min.css">
    <link rel="stylesheet" href="<?php echo CSS_THEME_URL; ?>nouislider.min.css">
    <link rel="stylesheet" href="<?php echo CSS_THEME_URL; ?>blueimp-gallery.min.css">
    <link rel="stylesheet" href="<?php echo CUSTOM_THEME_URL; ?>style.min.css">
    <link id="cssTheme" rel="stylesheet" href="<?php echo SKINS_THEME_URL; ?>style-orange.css">
	  <link rel="stylesheet" href="<?php echo CUSTOM_THEME_URL; ?>custom-styles.css">
    <script>var base_url = '<?php echo base_url() ?>';</script>
    <link href="<?php echo ASSETS_URL; ?>css/autocomplete.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo CSS_THEME_URL; ?>autocomplete.css">


  </head>
  <body class="load">
    <div class="progress-load js-progress-load"></div>
    <div class="demo-panel bx4dp d-none d-sm-block" id="demoSwitcher">
      <div class="container">
        <div class="demo-panel__toggle btn btn-light text-primary shadow-sm js-panel-toggle"><i class="fa fa-cog"></i></div>
      </div>
      <div class="demo-panel__content bg-light pt-3">
        <div class="container">
          <div class="row flex-nowrap">
            <div class="col-auto mb-2 d-flex align-items-center">
              <h4>Colors</h4>
              <div class="demo-panel__colors nav">
			     <a class="nav-link js-toggle-theme is-active" href="#" data-path="<?php echo SKINS_THEME_URL; ?>style-default.css" role="button"></a>
				 <a class="nav-link js-toggle-theme" href="#" data-path="<?php echo SKINS_THEME_URL; ?>style-orange.css" role="button"></a>
				 <a class="nav-link js-toggle-theme" href="#" data-path="<?php echo SKINS_THEME_URL; ?>style-green.css" role="button"></a>
				 <a class="nav-link js-toggle-theme" href="#" data-path="<?php echo SKINS_THEME_URL; ?>style-red.css" role="button"></a>
				 <a class="nav-link js-toggle-theme" href="#" data-path="<?php echo SKINS_THEME_URL; ?>style-purple.css" role="button"></a>
				 <a class="nav-link js-toggle-theme" href="#" data-path="<?php echo SKINS_THEME_URL; ?>style-pink.css" role="button"></a>
              </div>
            </div>
            <div class="col-auto mb-2 d-flex align-items-center">
              <h4>RTL</h4>
				  <button class="btn-switch text-primary js-switch-rtl" type="button" data-switch="<?php echo CSS_THEME_URL; ?>bootstrap-rtl.min.css">
					  <span class="bar bg-primary"></span>
					  <span class="toggle bg-secondary"></span>
				  </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-account modal" id="modalAccount" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <ul class="modal-account__tabs nav nav-tabs d-flex js-account-tabs" id="accountTabs" role="tablist">
              <li class="nav-item w-50">
			     <a class="nav-link" data-toggle="tab" href="#accountLogin" role="tab" aria-controls="accountLogin" aria-selected="false">Login</a>
			  </li>
              <li class="nav-item w-50">
			     <a class="nav-link" data-toggle="tab" href="#accountRegist" role="tab" aria-controls="accountRegist" aria-selected="false">Sign Up</a>
			  </li>
              <li>
			     <a class="nav-link p-0 border-0" data-toggle="tab" href="#accountForgot" role="tab" aria-controls="accountForgot" aria-selected="false"></a>
			  </li>
            </ul>
            <button class="btn btn-light close pointer" type="button" data-dismiss="modal" aria-label="close">
				<span class="icon text-dark" aria-hidden="true">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 510 510"><path d="M255 0C114.75 0 0 114.75 0 255s114.75 255 255 255 255-114.75 255-255S395.25 0 255 0zm127.5 346.8l-35.7 35.7-91.8-91.8-91.8 91.8-35.7-35.7 91.8-91.8-91.8-91.8 35.7-35.7 91.8 91.8 91.8-91.8 35.7 35.7-91.8 91.8 91.8 91.8z"/>
					</svg>
				</span>
			</button>
          </div>
          <div class="modal-body">
            <div class="tab-content">
              <div class="tab-pane" id="accountLogin" role="tabpanel">
			  <div id="loginResponse"></div>
                <form class="modal-account__form fifo-account-form" id="formLogin" method="POST">
                  <div class="form-group">
                    <input class="form-control form-control-sm" type="email" name="user_email" id="user_email" placeholder="E-mail address" required="required"/>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <input class="form-control form-control-sm" type="password" name="user_pass" id="user_pass" placeholder="Password" required="required"/>
                    <div class="help-block">Your password must be at least 6 characters long</div>
                  </div>
                  <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <button class="btn btn-secondary btn--round mr-2 mb-2" type="submit">sign in
                    </button>
                    <p class="mb-2"><a class="js-toggle-account" href="#" data-account="forgot">Forgot your password?</a></p>
                  </div>
                  <div class="d-inline-block my-2 w-100">
                    <div class="social-sign">
                      <div class="divider divider-horizontal">
                        <h5 class="font-weight-normal mx-2">Or click to sign in</h5>
                      </div>
                      <ul class="social-sign__list row">
                        <li class="col col-sm-6"><a class="nav-link" href="#"><img class="nav-icon img-fluid mr-2" src="<?php echo IMAGE_THEME_URL; ?>facebook.png" alt="#"/><span class="nav-text">Connect with Facebook</span></a></li>
                        <li class="col col-sm-6"><a class="nav-link" href="#"><img class="nav-icon img-fluid mr-2" src="<?php echo IMAGE_THEME_URL; ?>google-plus.png" alt="#"/><span class="nav-text">Connect with Google</span></a></li>
                      </ul>
                    </div>
                  </div>
                </form>
                <div class="modal-footer d-block">
                  <p class="fz-small mb-0"><em>By accessing your account, you agree to our  <a href="#">Terms and Conditions</a> and   <a href="#">Privacy Policy</a></em></p>
                </div>
              </div>
              <div class="tab-pane active show" id="accountRegist" role="tabpanel">
                <form class="modal-account__form fifo-account-form" id="formRegist">
				<div id="response"></div>
                  <!--<div class="form-group">
                    <input class="form-control form-control-sm" type="text" name="user_name" placeholder="First Name" required="required"/>
                    <div class="help-block">Please enter your name</div>
                  </div>
                  <div class="form-group">
                    <input class="form-control form-control-sm" type="text" name="user_last_name" placeholder="Last Name" required="required"/>
                    <div class="help-block">Please enter your last name</div>
                  </div>-->
                  <div class="form-group">
                    <input class="form-control form-control-sm" type="email" id="userEmail" name="userEmail" placeholder="E-mail address" required />
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <input class="form-control form-control-sm" id="userPass" type="password" name="userPass" placeholder="Password" required />
                    <div class="help-block">Your password must be at least 6 characters long</div>
                  </div>
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input class="custom-control-input" id="agreePolicy" name="agreePolicy" type="checkbox" required><span class="custom-control-label">I have read and agree to the  <a href="#">Terms of Use</a> and the  <a href="#">Privacy Policy.</a></span>
                    </label>
                    <div class="help-block">Please accept our policy</div>
                  </div>
                    <div class="form-group">
                      <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="dispatchEmail" name="dispatchEmail" type="checkbox"><span class="custom-control-label">Please send me FIFO BOOKING.COM emails with travel deals, special offers, and other information.</span>
                      </label>
                    </div>
                  <p class="mb-4 d-flex justify-content-center justify-content-sm-start">
                    <button class="btn btn-secondary btn--round" id="fifoRegister-btn" type="submit">Create Account</button>
                  </p>
                  <div class="d-inline-block my-2 w-100">
                    <div class="social-sign">
                      <div class="divider divider-horizontal">
                        <h5 class="font-weight-normal mx-2">Or click to sign in</h5>
                      </div>
                      <ul class="social-sign__list row">
                        <li class="col col-sm-6"><a class="nav-link" href="#"><img class="nav-icon img-fluid mr-2" src="<?php echo IMAGE_THEME_URL; ?>facebook.png" alt="#"/><span class="nav-text">Sign up with Facebook</span></a></li>
                        <li class="col col-sm-6"><a class="nav-link" href="#"><img class="nav-icon img-fluid mr-2" src="<?php echo IMAGE_THEME_URL; ?>google-plus.png" alt="#"/><span class="nav-text">Sign up with Google</span></a></li>
                      </ul>
                    </div>
                  </div>
            
                </form>
              </div>
              <div class="tab-pane" id="accountForgot" role="tabpanel">
                <form class="modal-account__form" id="formForgot" action="#" method="POST" data-toggle="validator">
                  <div class="form-group">
                    <input class="form-control form-control-sm" type="email" name="user_email" placeholder="E-mail address" required>
                    <div class="help-block with-errors"></div>
                  </div>
                  <p class="text-center">We will email you instructions for resetting your password.</p>
                  <p class="d-flex justify-content-center">
                    <button class="btn btn-secondary btn--round" type="submit">Retrieve Password
                    </button>
                  </p>
                  <p class="d-flex justify-content-center"><a class="js-toggle-account mr-3" href="#" data-account="regist">Create a new account</a><a class="js-toggle-account" href="#" data-account="login">Return to Sign In</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <header class="page-header">
      <div class="panel-fixed">
        <div class="page-header__top bg-white js-header-top js-top-panel">
          <div class="container">
            <div class="row justify-content-center justify-content-between">
              <div class="col-12 col-md col-lg-3 d-flex justify-content-center justify-content-md-start"><a class="navbar-logo d-inline-flex align-items-center" href="<?php echo BASE_URL; ?>"><img class="img-fluid mr-3 logo-size" src="<?php echo IMAGE_THEME_URL; ?>logo.png" alt="FIFO BOOKING.COM"/>
                  <!-- <h4 class="m-0">Your Travel World</h4> --></a></div>
              <div class="col col-lg-6 d-none d-md-flex align-items-center justify-content-center"><a class="page-header__call d-flex align-items-center text-nowrap" href="tel:880000112222333"><i class="icon icon-call js-tooltip-call mr-3" data-toggle="tooltip" data-placement="bottom" title="Support 8-800-0011-2222-333"></i>
                  <div class="page-header__call-right">
                    <div class="title fz-small">Support</div>
                    <div class="phone fw-bold">8-800-0011-2222-333</div>
                  </div></a>
                <div class="page-header__top-search d-none d-lg-block ml-4" id="navbarSearch">
                  <form class="navbar-search" action="#" method="GET">
                    <div class="input-group flex-nowrap">
                      <input class="form-control pr-0 js-navbar-search-input" type="search" placeholder="Search on site"/>
                      <div class="input-group-append">
                        <button class="navbar-search__subject btn btn-light" type="button"><i class="fa fa-search text-gray"></i></button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
			 <?php if($this->session->userdata('customer_id')){?>
			 
			 <div class="col col-lg-3 d-none d-md-flex">
                <ul class="nav nav-panel">
                  <li class="nav-item d-flex"><a class="nav-link btn btn-light js-toggle-account" href="<?php echo BASE_URL; ?>"><span>sign out</span></a>
                  </li>
                  <li class="nav-item d-flex dropdown"><a class="nav-link btn btn-light text-primary" href="#" data-toggle="dropdown" role="button">
                      <div class="d-flex align-items-center"><img class="user-avatar mr-1 rounded-circle" src="<?php echo IMAGE_THEME_URL; ?>avatar-1.jpg" alt="#" width="35" height="35"/><span>@NC</span>
                      </div></a>
                    <div class="dropdown-menu py-0 rounded-0"><a class="d-flex align-items-center justify-content-center p-3" href="index-account.html"><span class="text-nowrap">Netgon Community</span></a></div>
                  </li>
                </ul>
              </div>
			 
			 <?php }else{ ?>
              <div class="col col-lg-3 d-none d-md-flex">
                <ul class="nav nav-panel">
                  <li class="nav-item d-flex"><a class="nav-link btn btn-light js-toggle-account" href="#modalAccount" data-toggle="modal" role="button" data-account="login"><i class="text-gray icon icon-user mr-2"></i><span>log in <?php echo $this->session->userdata('customer_id'); ?></span></a>
                  </li>
                  <li class="nav-item d-flex"><a class="nav-link btn btn-light js-toggle-account" href="#modalAccount" data-toggle="modal" role="button" data-account="regist"><i class="text-gray icon icon-login mr-2"></i><span>sign up</span></a>
                  </li>
                </ul>
              </div>
			 <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <button class="btn-toggle btn btn-light d-lg-none btn-toggle-nav" type="button" data-toggle="collapse" data-target="#navPanel"><span class="icon-bar"></span></button>
      <nav class="main-nav d-flex collapse d-lg-block" id="navPanel">
        <div class="main-nav__container d-flex">
          <div class="container">
            <div class="d-lg-none">
              <div class="main-nav__search">
                <form class="navbar-search" action="#" method="GET">
                  <div class="input-group flex-nowrap">
                    <input class="form-control pr-0 js-navbar-search-input" type="search" placeholder="Search on site"/>
                    <div class="input-group-append">
                      <button class="navbar-search__subject btn btn-light" type="button"><i class="fa fa-search text-gray"></i></button>
                    </div>
                  </div>
                </form>
              </div>
              <ul class="nav nav-panel">
                <li class="nav-item d-flex"><a class="nav-link btn btn-light js-toggle-account" href="#modalAccount" data-toggle="modal" role="button" data-account="login"><i class="text-gray icon icon-user mr-2"></i><span>log in</span></a>
                </li>
                <li class="nav-item d-flex"><a class="nav-link btn btn-light js-toggle-account" href="#modalAccount" data-toggle="modal" role="button" data-account="regist"><i class="text-gray icon icon-login mr-2"></i><span>sign up</span></a>
                </li>
              </ul>
            </div>
            <ul class="main-nav__list nav d-flex" id="navMenu">
              <li class="nav-item dropdown"><a class="nav-link fw-bold text-uppercase" href="#"><span>home</span><i class="caret fa fa-angle-down ml-2"></i></a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="index.html"><span>Home</span></a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="index-account.html"><span>Home Login</span></a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="index-video.html"><span>Home Video</span></a>
                  </li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link fw-bold text-uppercase" href="hotel.html"><span>Hotel</span></a>
              </li>
              <li class="nav-item"><a class="nav-link fw-bold text-uppercase" href="flights.html"><span>flights</span></a>
              </li>
              <li class="nav-item"><a class="nav-link fw-bold text-uppercase" href="category.html"><span>best seller</span></a>
              </li>
              <li class="nav-item"><a class="nav-link fw-bold text-uppercase" href="category.html"><span>hot deals</span></a>
              </li>
              <li class="nav-item"><a class="nav-link fw-bold text-uppercase" href="category.html"><span>air tickets</span></a>
              </li>
              <li class="nav-item"><a class="nav-link fw-bold text-uppercase" href="category.html"><span>rent a car</span></a>
              </li>
              <li class="nav-item"><a class="nav-link fw-bold text-uppercase" href="<?php echo BASE_URL; ?>aboutus"><span>about us</span></a>
              </li>
              <li class="nav-item dropdown"><a class="nav-link fw-bold text-uppercase" href="#"><span>pages</span><i class="caret fa fa-angle-down ml-2"></i></a>
                <ul class="dropdown-menu">
                  <li class="nav-item dropdown"><a class="nav-link" href="#"><span>Home</span><i class="caret fa fa-angle-down ml-2"></i></a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="nav-link" href="index.html"><span>Home</span></a>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="index-account.html"><span>Home Login</span></a>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="index-video.html"><span>Home Video</span></a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="category.html"><span>Category</span></a>
                  </li>
                  <li class="nav-item dropdown"><a class="nav-link" href="#"><span>Blog</span><i class="caret fa fa-angle-down ml-2"></i></a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="nav-link" href="blog-list.html"><span>Blog List</span></a>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="blog-post.html"><span>Blog Post</span></a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown"><a class="nav-link" href="#"><span>Hotel</span><i class="caret fa fa-angle-down ml-2"></i></a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="nav-link" href="hotel.html"><span>Hotel</span></a>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="hotel-services.html"><span>Hotel Services</span></a>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="hotel-accommodation.html"><span>Hotel Accommodation</span></a>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="hotel-reviews.html"><span>Hotel Reviews</span></a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="flights.html"><span>Flights</span></a>
                  </li>
                  <li class="nav-item dropdown"><a class="nav-link" href="#"><span>Booking</span><i class="caret fa fa-angle-down ml-2"></i></a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="nav-link" href="booking-traveler.html"><span>Traveler</span></a>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="booking-payment.html"><span>Payment</span></a>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="booking-confirm.html"><span>Confirmation</span></a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>aboutus"><span>About us</span></a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>contactus"><span>Contacts</span></a>
                  </li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link fw-bold text-uppercase" href="blog-list.html"><span>news</span></a>
              </li>
              <li class="nav-item"><a class="nav-link fw-bold text-uppercase" href="<?php echo BASE_URL; ?>contactus"><span>contacts</span></a>
              </li>
              <li class="nav-item"><a class="nav-link fw-bold text-uppercase" href="shortcodes.html"><span>Shortcodes</span></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>