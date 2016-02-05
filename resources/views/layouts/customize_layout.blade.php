<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Outline &mdash; A Free HTML5 Responsive Template by FREEHTML5.CO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <!-- 
    //////////////////////////////////////////////////////

    FREE HTML5 TEMPLATE 
    DESIGNED & DEVELOPED by FREEHTML5.CO
        
    Website:        http://freehtml5.co/
    Email:          info@freehtml5.co
    Twitter:        http://twitter.com/fh5co
    Facebook:       https://www.facebook.com/fh5co

    //////////////////////////////////////////////////////
     -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Webfonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="/assets/css/layouts/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="/assets/css/layouts/icomoon.css">
    <!-- Simple Line Icons-->
    <link rel="stylesheet" href="/assets/css/layouts/simple-line-icons.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="/assets/css/layouts/magnific-popup.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="/assets/css/layouts/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/layouts/owl.theme.default.min.css">
    <!-- Theme Style -->
    <link rel="stylesheet" href="/assets/css/layouts/style.css">
    <!-- Modernizr JS -->
    <script src="/assets/js/modernizr-2.6.2.min.js"></script>

    {!! Html::style('/assets/css/login_modal.css') !!}
    {!! Html::style('/assets/css/general.css') !!}
    {!! Html::style('/assets/css/partials/login_modal_style.css') !!}
    {!! Html::style('/assets/css/partials/login_modal_form_elements.css') !!}
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    </head>
    <body>
        
    <div id="fh5co-offcanvass">
        <ul>
            <li class="active"><a href="#" data-nav-section="home">Home</a></li>
            @if(Auth::check())
                <li><a class="logout-btn clickables-a">Log Out</a></li>
            @else
                <li><a class="login-btn clickables-a">Log In</a></li>
                <li><a>Sign Up</a></li>
            @endif
        </ul>
        <h3 class="fh5co-lead">Connect with us</h3>
        <p class="fh5co-social-icons">
            <a href="#"><i class="icon-twitter"></i></a>
            <a href="#"><i class="icon-facebook"></i></a>
            <a href="#"><i class="icon-instagram"></i></a>
            <a href="#"><i class="icon-dribbble"></i></a>
            <a href="#"><i class="icon-youtube"></i></a>
        </p>
    </div>
    
    <div id="fh5co-menu" class="navbar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><span>Menu</span> <i></i></a>
                    <a href="index.html" class="navbar-brand"><span>ProjectReview</span></a>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-page">
        <div id="fh5co-wrap">
            <header id="fh5co-hero" data-section="home" role="banner" style="background: url(/assets/images/bg_2.jpg) top left; background-size: cover;" >
                <div class="fh5co-overlay"></div>
                <div class="fh5co-intro">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-md-6 fh5co-text">
                                <h2 class="to-animate intro-animate-1">We take your business to the next level.</h2>
                                <p class="to-animate intro-animate-2">Screen readers will have trouble with your forms if you don't include a label for every input. For these input groups, ensure that any additional label or functionality is conveyed to assistive technologies.</p>
                                <p class="to-animate intro-animate-3"><a href="#" class="btn btn-primary btn-md"><i class="icon-apple"></i> See on AppStore</a></p>
                            </div>
                            <div class="col-md-6 text-right fh5co-intro-img to-animate intro-animate-4">
                                <img src="/assets/images/iphone_6_3.png" alt="Outline Free HTML5 Responsive Bootstrap Template">
                            </div>

                        </div>
                    </div>                      
                </div>
            </header>
            <!-- END .header -->
            
            <div id="fh5co-main">
                <div id="fh5co-clients">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-md-3 col-sm-6 col-xs-6 to-animate">
                                <figure class="fh5co-client"><img src="/assets/images/client_1.png" alt="Free HTML5 Template"></figure>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 to-animate">
                                <figure class="fh5co-client"><img src="/assets/images/client_2.png" alt="Free HTML5 Template"></figure>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 to-animate">
                                <figure class="fh5co-client"><img src="/assets/images/client_3.png" alt="Free HTML5 Template"></figure>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 to-animate">
                                <figure class="fh5co-client"><img src="/assets/images/client_4.png" alt="Free HTML5 Template"></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="fh5co-features" data-section="features">


                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 fh5co-section-heading text-center">
                                <h2 class="fh5co-lead to-animate">Explore amazing features</h2>
                                <p class="fh5co-sub to-animate">Screen readers will have trouble with your forms if you don't include a label for every input. For these input groups, ensure that any additional label or functionality is conveyed to assistive technologies.</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
                                <a href="#" class="fh5co-feature to-animate">
                                    <span class="fh5co-feature-icon"><i class="icon-mustache"></i></span>
                                    <h3 class="fh5co-feature-lead">100% Free</h3>
                                    <p class="fh5co-feature-text">Screen readers will have trouble with your forms.</p>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
                                <a href="#" class="fh5co-feature to-animate">
                                    <span class="fh5co-feature-icon"><i class="icon-screen-smartphone"></i></span>
                                    <h3 class="fh5co-feature-lead">Fully Responsive</h3>
                                    <p class="fh5co-feature-text">Far far away behind the word mountains</p>
                                </a>
                            </div>
                            <div class="clearfix visible-sm-block"></div>
                            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
                                <a href="#" class="fh5co-feature to-animate">
                                    <span class="fh5co-feature-icon"><i class="icon-eye"></i></span>
                                    <h3 class="fh5co-feature-lead">Retina-ready</h3>
                                    <p class="fh5co-feature-text">Far far away behind the word mountains</p>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
                                <a href="#" class="fh5co-feature to-animate">
                                    <span class="fh5co-feature-icon"><i class="icon-cloud-download"></i></span>
                                    <h3 class="fh5co-feature-lead">Download</h3>
                                    <p class="fh5co-feature-text">Far far away behind the word mountains</p>
                                </a>
                            </div>

                            <div class="clearfix visible-sm-block"></div>

                            <div class="fh5co-spacer fh5co-spacer-sm"></div>

                            <div class="col-md-4 col-md-offset-4 text-center to-animate">
                                <a href="#" class="btn btn-primary">View All Features</a>
                            </div>
                        </div>
                   </div>
                   

                </div>
                


                <div id="fh5co-features-2" data-section="design">
                    <div class="fh5co-features-2-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 fh5co-section-heading text-center">
                                    <h2 class="fh5co-lead to-animate">Better design</h2>
                                    <p class="fh5co-sub to-animate">Screen readers will have trouble with your forms if you don't include a label for every input. For these input groups, ensure that any additional label or functionality is conveyed to assistive technologies.</p>
                                </div>
                                <div class="col-md-4 fh5co-text-wrap">
                                    <div class="row text-center">
                                        <div class="col-md-12 col-sm-6 col-xs-6 col-xxs-12 fh5co-text animate-object features-2-animate-3">
                                            <span class="fh5co-icon"><i class="icon-screen-desktop"></i></span>
                                            <h4 class="fh5co-uppercase-sm">Cross platform support</h4>
                                            <p>Screen readers will have trouble with your forms if you don't include a label for every input. For these input groups, ensure that any additional label or functionality is conveyed to assistive technologies.</p>
                                        </div>
                                        <div class="col-md-12 col-sm-6 col-xs-6 col-xxs-12 fh5co-text animate-object features-2-animate-4">
                                            <span class="fh5co-icon"><i class="icon-anchor"></i></span>
                                            <h4 class="fh5co-uppercase-sm">Prototyping tools</h4>
                                            <p>Screen readers will have trouble with your forms if you don't include a label for every input. For these input groups, ensure that any additional label or functionality is conveyed to assistive technologies.</p>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4 col-md-push-4 fh5co-text-wrap">
                                    <div class="row text-center">
                                        <div class="col-md-12 col-sm-6 col-xs-6 col-xxs-12 fh5co-text animate-object features-2-animate-5">
                                            <span class="fh5co-icon"><i class="icon-rocket"></i></span>
                                            <h4 class="fh5co-uppercase-sm">Powerful design</h4>
                                            <p>Screen readers will have trouble with your forms if you don't include a label for every input. For these input groups, ensure that any additional label or functionality is conveyed to assistive technologies.</p>
                                        </div>
                                        <div class="col-md-12 col-sm-6 col-xs-6 col-xxs-12 fh5co-text animate-object features-2-animate-6">
                                            <span class="fh5co-icon"><i class="icon-people"></i></span>
                                            <h4 class="fh5co-uppercase-sm">User Collaboration</h4>
                                            <p>Screen readers will have trouble with your forms if you don't include a label for every input. For these input groups, ensure that any additional label or functionality is conveyed to assistive technologies.</p>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4 col-md-pull-4 fh5co-image animate-object features-2-animate-2">
                                    <p class="text-center">
                                    <img src="/assets/images/iphone_blank_2.png" class="" alt="Outline Free HTML5 Responsive Bootstrap Template">
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>  

                </div>
            </div>
        </div>

        <footer id="fh5co-footer" style="">
            <div class="fh5co-overlay"></div>
            <div class="fh5co-footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-md-push-3">
                            <h3 class="fh5co-lead">About</h3>
                            <ul>
                                <li><a href="#">Tour</a></li>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">New Features</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-4 col-md-push-3">
                            <h3 class="fh5co-lead">Support</h3>
                            <ul>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">Security</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">More Apps</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-4 col-md-push-3">
                            <h3 class="fh5co-lead">More Links</h3>
                            <ul>
                                <li><a href="#">Feedback</a></li>
                                <li><a href="#">Frequently Ask Questions</a></li>
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">More Apps</a></li>
                            </ul>
                        </div>

                        <div class="col-md-3 col-sm-12 col-md-pull-9">
                            <div class="fh5co-footer-logo"><a href="index.html">ProjectReview</a></div>
                            <p class="fh5co-copyright"><small>&copy; 2015. All Rights Reserved. <br>    by <a href="http://www.webprinciples.com/" target="_blank">WebPrinciples</a></small></p>
                            <p class="fh5co-social-icons">
                                <a href="#"><i class="icon-twitter"></i></a>
                                <a href="#"><i class="icon-facebook"></i></a>
                                <a href="#"><i class="icon-instagram"></i></a>
                                <a href="#"><i class="icon-dribbble"></i></a>
                                <a href="#"><i class="icon-youtube"></i></a>
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- PARTIALS -->
    {!! View::make('partials.login_modal') !!}
    <!-- jQuery -->
    <script src="/assets/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="/assets/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="/assets/js/jquery.waypoints.min.js"></script>
    <!-- Magnific Popup -->
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Owl Carousel -->
    <script src="/assets/js/owl.carousel.min.js"></script>
    <!-- toCount -->
    <script src="/assets/js/jquery.countTo.js"></script>
    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>

    <script src="/assets/js/layouts/customize.js"></script>
    

    
    </body>
</html>
