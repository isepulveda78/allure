<?php get_header('products'); ?>
<div id="content" role="main">
        <div class="page-header parallax dark larger2x larger-desc" data-bgattach="images/backgrounds/page-header.jpg" data-0="background-position:50% 0px;" data-500="background-position:50% -100%">
            <div class="container" data-0="opacity:1;" data-top="opacity:0;">
                <div class="row">
                    <div class="col-md-6">
                        <h1><?php the_title(); ?></h1>
                        <p class="page-header-desc"></p>
                    </div><!-- End .col-md-6 -->
                    <div class="col-md-6">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('/products') ?>">Products</a></li>
                            <li class="active"><?php the_title(); ?></li>
                        </ol>
                    </div><!-- End .col-md-6 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .page-header -->
      </div>
<div class="container">
  <div class="row">
              <div class="col-md-3 col-sm-6">
                     <div class="product-gallery-container">
                         <div class="product-top">
                          <?php
                								$service = get_field('product_image');
                								if( !empty($service) ): ?>
                             <img id="product-zoom" src="<?php echo $service['url']; ?>" data-zoom-image="<?php echo $service['url']; ?>" alt="<?php echo $service['alt']; ?>"/><?php endif; ?>
                         </div><!-- End .product-top -->

                         <div class="product-gallery-wrapper">

                         </div><!-- End #product-gallery-wrapper -->
                     </div><!-- End .product-gallery-container -->
                 </div><!-- End .col-md-5 -->
                 <div class="col-md-7">
                     <div class="product-details">
                       <?php while(have_posts()) {
                          the_post(); ?>

                         <p><?php the_content(); ?></p>
                          <?php } ?>
                     </div><!-- End .product-details -->
                 </div><!-- End .col-md-7 -->
             </div><!-- End .row -->
             </div><!-- End #content -->
         <div class="mb20 hidden-xs hidden-sm"></div><!-- space -->
   </div>



<?php get_footer(); ?>
