<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">

        <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,900,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600italic,700italic,600,800,300,700,800italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
        <!-- Google Fonts -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/style.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/revslider/revslider-index34.css">
        <link rel="stylesheet" id="color-scheme" href="<?php bloginfo('stylesheet_directory') ?>/css/colors/blue.css">

        <!-- Modernizr -->
        <script src="<?php bloginfo('stylesheet_directory') ?>/js/modernizr.js"></script>

        <!--- jQuery -->
        <script src="<?php bloginfo('stylesheet_directory') ?>/js/jquery.min.js"></script>

        <!-- Queryloader -->
        <script src="<?php bloginfo('stylesheet_directory') ?>/js/queryloader2.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body data-spy="scroll" data-target="#main-navbar-container" <?php body_class(); ?>>

    <div class="boss-loader-overlay"></div><!-- End .boss-loader-overlay -->

    <div id="wrapper">
        <header class="side-menu header-side-menu navbar-white left small-icons" role="banner">
            <button type="button" class="btn-toggle side-menu-btn pull-right collapsed" data-toggle="collapse" data-target="#main-navbar-container">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
            </button>
            <div class="side-menu-wrapper">
                <h1 class="logo text-center">
                    <a href="<?php echo site_url('/home') ?>" title="Boss - Multipurpose Premium Html5 Template">
                        <img src="<?php bloginfo('stylesheet_directory') ?>/images/allure.png" alt="Logo">
                    </a>
                </h1>

                <nav id="main-navbar-container">
                    <ul class="nav navbar-nav nav-stacked">
                        <li>
                            <a href="<?php echo site_url('/home') ?>"><i class="fas fa-home"></i>Home</a>
                        </li>
                        <li><a href="#aboutus"><i class="fas fa-users"></i>About Us</a></li>
                        <li><a href="#services"><i class="fas fa-concierge-bell"></i>Services</a></li>
                        <li><a href="<?php echo site_url('/products') ?>"><i class="fas fa-shopping-bag"></i>Products</a></li>
                        <li><a href="#contact-form"><i class="fas fa-map-marker-alt"></i>Contact Us</a></li>
                    </ul>
                </nav>

                <div class="social-icons social-icons-sm pull-left">
                  <a href="https://www.facebook.com/allureaestheticsnc/" class="social-icon icon-facebook add-tooltip" title="Facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/allure_aestheticsnc/" class="social-icon icon-instagram add-tooltip" title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div><!-- End .social-icons -->
            </div><!-- End .side-menu-wrapper -->
        </header><!-- end .side-menu -->
