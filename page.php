<?php get_header('products'); ?>

<div id="content" role="main">
        <div class="page-header parallax dark larger2x larger-desc" data-bgattach="images/backgrounds/page-header.jpg" data-0="background-position:50% 0px;" data-500="background-position:50% -100%">
            <div class="container" data-0="opacity:1;" data-top="opacity:0;">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Products</h1>
                        <p class="page-header-desc"></p>
                    </div><!-- End .col-md-6 -->
                    <div class="col-md-6">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('/home'); ?>">Home</a></li>
                            <li class="active">Products</li>
                        </ol>
                    </div><!-- End .col-md-6 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .page-header -->
      </div>
<div class="container" id="main-content">
  <div class="row">
    <?php
    $page = get_query_var('paged');
    $products = new WP_query(array(
                        'post_type' => 'products',  //custom post type
                        'posts_per_page' => 9,
                        'paged' => $page
                      )); ?>
                <?php
                    while($products->have_posts()){
                    $products -> the_post(); ?>

                  <div class="col-md-4 col-sm-8">
                           <div class="product text-center">
                               <div class="product-top">
                                 <figure>
                                     <a href="<?php the_permalink(); ?>" title="Product Name">
                                       <?php
                                             $product = get_field('product_image');
                                             if( !empty($product) ): ?>
                                         <img class="img-responsive" src="<?php echo $product['url']; ?>" alt="<?php echo $product['alt']; ?>"> <?php endif; ?>
                                     </a>
                                 </figure>
                               </div><!-- End .product-top -->
                               <h3 class="product-title"><a href="<?php the_permalink(); ?>" title="Product Title"><?php the_title(); ?></a></h3>
                               <a href="<?php the_permalink(); ?>" class="btn btn-dark btn-border min-width no-radius">More Info</a>
                           </div><!-- End .product -->
                       </div><!-- End .col-md-3 -->

                      <?php } ?>

                     </div><!--row-->

                   </div>
                   <div class="mb30"></div><!-- space -->

                                      <nav class="pagination-container text-center">
                                          <ul class="pagination">
                                            <li><?php previous_posts_link('Previous Page') ?></li>
                                            <li><?php next_posts_link('Next Page', $products -> max_num_pages ) ?></li>
                                            </ul>
                                          </ul>
                              </nav>
<?php get_footer(); ?>
