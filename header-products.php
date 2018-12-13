<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">

        <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


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
