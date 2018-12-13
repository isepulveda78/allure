<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">

        <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php wp_head(); ?>
    </head>
    <body data-spy="scroll" data-target="#main-navbar-container" <?php body_class(); ?>>

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
                <h6 class="headline animated slideInUp">It's the only body you get, make it great!</h6><br>
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
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/allure_aestheticsnc/" class="social-icon icon-instagram add-tooltip" title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div><!-- End .social-icons -->
            </div><!-- End .side-menu-wrapper -->
        </header><!-- end .side-menu -->
