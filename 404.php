<?php get_header('products'); ?>

<div id="content" role="main">
    <div class="page-header parallax dark larger2x larger-desc" data-bgattach="images/backgrounds/page-header.jpg" data-0="background-position:50% 0px;" data-500="background-position:50% -100%">
        <div class="container" data-0="opacity:1;" data-top="opacity:0;">
            <div class="row">
                <div class="col-md-6">
                    <h1>404 Page</h1>
                    <p class="page-header-desc"></p>
                </div><!-- End .col-md-6 -->
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo site_url('/home') ?>">Home</a></li>
                        <li class="active">404</li>
                    </ol>
                </div><!-- End .col-md-6 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .page-header -->
      <div class="error-page text-center">
          <div class="container">
              <h2 class="error-title">404</h2>
              <h3 class="error-subtitle">Page Not Found</h3>
          </div><!-- End .container -->
      </div><!-- End .error-page -->

  </div><!-- End #content -->
<?php get_footer(); ?>
