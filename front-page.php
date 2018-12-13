<?php /* Template Name: Home Page */ ?>
<?php get_header('home'); ?>
<div id="main-content">
          <section class="section home-section" id="home">
                <img src="<?php bloginfo('stylesheet_directory') ?>/images/beauty.jpg" class="img-responsive header_image">
          </section>

          <section class="section bg-lightergray" id="aboutus">
              <header class="section-header container text-center">
                  <h2 class="section-title shadow-title" data-title="About Us">About Us</h2>
                  <span class="section-icon"><i class="fa fa-group"></i></span>
              </header>

              <div class="container">
                  <h2 class="title-underblock custom mb80 text-center">Meet Our Team </h2>
                  <div class="team-member-carousel-sm owl-carousel nav-border center-top-nav no-radius">
                      <div class="team-member team-animate-social">
                          <figure>
                              <img src="<?php bloginfo('stylesheet_directory') ?>/images/connie2.jpg" alt="Steve" class="img-responsive">
                          </figure>
                          <h3>Dr. Connie Brooks</h3>
                          <p class="member-desc">Medical Director</span></p>
                      </div><!-- End .team-member -->

                      <div class="team-member team-animate-social">
                          <figure>
                              <img src="<?php bloginfo('stylesheet_directory') ?>/images/katrina.jpg" alt="Jane" class="img-responsive">

                          </figure>
                          <h3>Katring Feeney</h3>
                          <p class="member-desc">Office Manager</span></p>
                      </div><!-- End .team-member -->

                      <div class="team-member team-animate-social">
                          <figure>
                              <img src="<?php bloginfo('stylesheet_directory') ?>/images/brenda.jpg" alt="Barbara" class="img-responsive">
                          </figure>
                          <h3>Brenda Walters</h3>
                          <p class="member-desc">Aesthetician</span></p>
                      </div><!-- End .team-member -->

                      <div class="team-member team-animate-social">
                          <figure>
                              <img src="<?php bloginfo('stylesheet_directory') ?>/images/jordan.jpg" alt="Eric" class="img-responsive">
                          </figure>
                          <h3>Jordan McKenzie</h3>
                          <p class="member-desc">Patient Coordinator</span></p>
                      </div><!-- End .team-member -->

                      <div class="team-member team-animate-social">
                          <figure>
                              <img src="<?php bloginfo('stylesheet_directory') ?>/images/maricel.jpg" alt="Steve" class="img-responsive">
                          </figure>
                          <h3>Maricel Yeung</h3>
                          <p class="member-desc">Microbladding Artist / Laser and RF Technician</span></p>
                      </div><!-- End .team-member -->
                      <div class="team-member team-animate-social">
                          <figure>
                              <img src="<?php bloginfo('stylesheet_directory') ?>/images/heather.jpg" alt="Jane" class="img-responsive">

                          </figure>
                          <h3>Heather Smith</h3>
                          <p class="member-desc">LPN laser and Radio Frequency Technician</span></p>
                      </div><!-- End .team-member -->
                  </div><!-- End .owl-carousel -->

                  <div class="mb25"></div><!-- space -->
                  <div class="row">
                     <div class="col-md-12">
                         <h3 class="h2 title-border custom mb30"><span>About US</span></h3>
                         <h5 class="lead">We are a fun team who enjoys working together and spending time at the office. Come visit us for a day of relaxation.</h5>
                         <p>Here at Allure Aesthetics & Medical Spa, we offer a full-service spa catering to the surrounding area for those who are serious about the aging process. Our mission is to go the extra
                         mile to help you look better, becausee when you look good, you feel good. Now come visit us, relax, and feel the difference.</p>
                         <center><a href="#" class="btn btn-danger btn-border min-width no-radius" data-toggle="modal" data-target="#brooks">About Dr. Brooks</a></center>
                     </div><!-- End .col-md-6 -->

              </section>


          <section class="section" id="services">
              <header class="section-header container text-center">
                  <h2 class="section-title shadow-title" data-title="Our Services">Our Services</h2>
                  <span class="section-icon"><i class="fas fa-concierge-bell"></i></span>
              </header>

              <div class="container">

                <?php
                				  $services = new WP_query(array(
                					'post_type' => 'services',
									 'order' => 'ASC'
                								        ));
                				while($services->have_posts()){
                				$services -> the_post(); ?>
                  <article class="entry entry-simple">

                      <h2><a href="#" data-toggle="modal" data-target="#<?php the_field('modal'); ?>"><?php the_title(); ?></h2><h5 class="entry-title">
                        <?php the_excerpt('10'); ?></a></h5>

                      </a></p>

                          <a href="#" class="entry-readmore text-right" data-toggle="modal" data-target="#<?php the_field('modal'); ?>">Read More <i class="fa fa-angle-right"></i></a>

                  </article>
                <?php } ?>

                  <div class="mb50"></div><!-- space -->
                  <!-- <div class="text-center">
                      <a href="blog.html" class="btn btn-dark btn-border no-radius min-width-md">More Services</a>
                  </div> -->
              </div><!-- End .container -->

          </section>



              <iframe src="https://her.is/2IbMZm2" style="border:0" allowfullscreen="" width="100%" height="450" frameborder="0"></iframe>
              <div class="mb20 hidden-xs hidden-sm"></div><!-- space -->
              <div class="container">

                  <div class="row">
                      <div class="col-sm-8 col-md-9">
                          <h3 class="h2 title-border custom mb30">Get In Touch</h3>
                         <?php echo do_shortcode('[wpforms id="95" title="false" description="false"]'); ?>
                      </div><!-- End .col-sm-8 -->

                      <div class="mb40 visible-xs"></div><!-- space -->

                      <div class="col-sm-4 col-md-3">

                          <h4 class="h3 mb20">Find Us</h4>
                          <ul class="contact-list">
                              <li><strong>Office:</strong> 530 Sandhurst Dr Ste B</li>
                              <li><strong>Email:</strong> <a href="mailto:allureaestheticsnc@gmail.com">allureaestheticsnc@gmail.com</a></li>
                              <li><strong>Office:</strong><a href="href="tel:9107588756""> (910) 758 - 8756</a></li>
                          </ul>

                          <div class="mb20"></div><!-- space -->

                          <h4 class="mb20">Social Media</h4>
                          <div class="social-icons">
                              <a href="https://www.facebook.com/allureaestheticsnc/" class="social-icon icon-facebook add-tooltip first" data-placement="top" title="Like us on Facebook">
                                  <i class="fab fa-facebook"></i>
                              </a>
                              <a href="https://www.instagram.com/allure_aestheticsnc/" class="social-icon icon-instagram add-tooltip" data-placement="top" title="Find us at Instagram">
                                  <i class="fab fa-instagram"></i>
                              </a>
                          </div><!-- End .social-icons -->

                      </div><!-- End .col-sm-4 -->
                  </div><!-- End .row -->
              </div><!-- End .container -->

          </section>

          <?php
          $services = new WP_query(array(
          'post_type' => 'services'  //custom post type
                  ));
          while($services->have_posts()){
          $services -> the_post(); ?>
          <!-- Modal -->
          <div class="modal fade" id="<?php the_field('modal'); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel"><?php the_title(); ?></h4>
                </div>
                <div class="modal-body">
                  <?php
                   $product = get_field('service_image');
                   if( !empty($product) ): ?>
                  <center><img src="<?php echo $product['url']; ?>" alt="<?php echo $product['alt']; ?>"><?php endif; ?></center><br>
                  <?php the_content(); ?>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-border min-width no-radius" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
          <!-- Modal -->
          <div class="modal fade" id="brooks" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">About Dr. Brooks</h4>
                </div>
                <div class="modal-body">

                  <center><img src="<?php bloginfo('stylesheet_directory') ?>/images/AAFE.jpg"></center><br>
                  <p><strong>Dr. Connie Brooks-Fernandez</strong> is Medical Director and Owner of Allure Aesthetics and Medical Spa. PLLC and New Hope Family Practice, PC.
                  My passion has always been helping people. As a Family Physician, a particular interest of mine has always been Dermatology. As my patient’s needs have evolved, so has my practice. More and more people want to look more youthful. We ALL want to age gracefully and look our absolute best! With today’s advancement in technology, everyone can look amazing! That is why after prayerful consideration, I have decided to open Allure Aesthetics my new Medical Spa.</p>
                  <br>
                  <h2>Something About Dr. Brooks-Fernandez:</h2><br>
                  <p>Connie Brooks-Fernandez, MD, MPH is a native of Lumberton, NC. She completed her undergraduate degree at Western Carolina University. She later received her Master of Public Health (MPH) at The University of North Carolina at Chapel Hill. She received her Medical Degree at East Carolina School of Medicine. Her Internship and Residency was done at Florida Hospital South in Orlando Fl.
                  Dr. Brooks-Fernandez has been a practicing Family Physician for greater than 25 years and Board Certified for greater than 20 years. She has worked with various organizations but has been in private practice since 2007 when she founded, as a Solo Physician, New Hope Family Practice. New Hope Family Practice has grown to four providers since its inception. She is married to Dr. Gabriel Fernandez who is also her partner. They have 2 daughters. Dr. Brooks-Fernandez’ interests are Women’s Health, Dermatology, Diabetes, and Prevention.
                  Dr. Brooks-Fernandez is an active member of the North Carolina Academy of Family Physicians (NCAFP), the American Academy of Family Physicians (AAFP), the North Carolina Medical Society (NCMS) and the International Association for Physicians in Aesthetic Medicine (IAPAM). She is active in her local church and serves on the Board for The Carolina College and Biblical Studies in Fayetteville, NC.</p>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-border min-width no-radius" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

<?php get_footer(); ?>
