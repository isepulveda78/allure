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

    </head>
    <?php wp_head(); ?>

    <body data-spy="scroll" data-target="#main-navbar-container" <?php body_class(); ?>>



      <header id="header" role="banner">
          <div class="collapse navbar-white" id="header-search-form">
              <div class="container">
                  <form class="navbar-form animated fadeInDown" >
                      <input type="search" id="s" name="s" class="form-control" placeholder="Search in here...">
                      <button type="submit" class="btn-circle" title="Search"><i class="fa fa-search"></i></button>
                  </form>
              </div><!-- End .container -->
          </div><!-- End #header-search-form -->
          <header id="header" role="banner">
              </div><!-- End #header-search-form -->
              <nav class="navbar navbar-white animated-dropdown ttb-dropdown" role="navigation">
                  <div class="navbar-inner sticky-menu">
                      <div class="container">
                          <div class="navbar-header">

                              <button type="button" class="navbar-toggle btn-circle pull-right collapsed" data-toggle="collapse" data-target="#main-navbar-container">
                                  <span class="sr-only">Toggle navigation</span>
                                  <span class="icon-bar"></span>
                              </button>

                              <a class="navbar-brand text-uppercase" href="index.html" title="Boss - Multipurpose Premium Html5 Template">AA&MS</a>

                              <button type="button" class="navbar-btn btn-icon btn-circle pull-right last visible-sm visible-xs" data-toggle="collapse" data-target="#header-search-form"><i class="fa fa-search"></i></button>

                          </div><!-- End .navbar-header -->

                          <div class="collapse navbar-collapse" id="main-navbar-container">
                              <ul class="nav navbar-nav">
                                  <li class="megamenu-container">
                                      <a href="<?php echo site_url('/home') ?>">Home</a>
                                  </li>
                                  <li class="megamenu-container">
                                      <a href="<?php echo site_url() ?>#aboutus">About</a>
                                  </li>
                                  <li class="megamenu-container">
                                      <a href="<?php echo site_url() ?>#services">Services</a>
                                  </li>
                                  <li class="megamenu-container">
                                      <a href="<?php echo site_url('/products') ?>">Products</a>
                                  </li>

                                  <li class="megamenu-container">
                                      <a href="<?php echo site_url() ?>#contact-form">Contact</a>
                                  </li>
                          </div><!-- /.navbar-collapse -->
                      </div><!-- /.container -->
                  </div><!-- End .navbar-inner -->
              </nav>
          </header><!-- End #header -->
