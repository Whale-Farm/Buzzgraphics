      <?php


 /**

 *
 * Footer Template
 *
 * @package Buzz Graphics

 */

 ?>

  <footer id="footer" class="footer-div footer">
     <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 footer-single-main">
          <h3 class="footer-head"> Our Agency</h3>

          <?php if ( is_active_sidebar( 'footer_agency' ) ) : 
             
             dynamic_sidebar( 'footer_agency' );
             
          endif; ?>


          <!-- <ul class="footer-links-ul">
            <li class="single-link-li">
              <a href="" class="single-link">
              Who we are
                </a>
              </li>
              <li class="single-link-li">
              <a href="" class="single-link">
              We make design
                </a>
              </li>
              <li class="single-link-li">
              <a href="" class="single-link">
              Clients
                </a>
              </li>
              <li class="single-link-li">
              <a href="" class="single-link">
              Portfolio
                </a>
              </li>
              <li class="single-link-li">
              <a href="" class="single-link">
              Marketing
                </a>
              </li>
          </ul> -->
        </div>

        <div class="col-md-3 col-sm-6 footer-single-main">
          <h3 class="footer-head"> About Us</h3>

          <?php if ( is_active_sidebar( 'footer_about_links' ) ) : 
             
             dynamic_sidebar( 'footer_about_links' );
             
          endif; ?>


         <!--  <ul class="footer-links-ul">
            <li class="single-link-li">
              <a href="" class="single-link">
              Production
                </a>
              </li>
              <li class="single-link-li">
              <a href="" class="single-link">
              The process
                </a>
              </li>
              <li class="single-link-li">
              <a href="" class="single-link">
              Meet the team
                </a>
              </li>
               
               
          </ul> -->
        </div>


        <div class="col-md-3 col-sm-6 footer-single-main">
          <h3 class="footer-head"> Promotions </h3>

          <?php if ( is_active_sidebar( 'footer_promotion' ) ) : 
             
             dynamic_sidebar( 'footer_promotion' );
             
          endif; ?>
          <!-- <ul class="footer-links-ul">
            <li class="single-link-li">
              <a href="" class="single-link">
              The press
                </a>
              </li>
              <li class="single-link-li">
              <a href="" class="single-link">
              Hire us
                </a>
              </li>
              <li class="single-link-li">
              <a href="" class="single-link">
              The company
                </a>
              </li>
              
          </ul> -->
        </div>

        <div class="col-md-3 col-sm-6 footer-single-main">
          <div class="footer-logo-div">
            <img src="<?php echo get_template_directory_uri();?>/images/footer-logo.png" alt="" class="footer-logo">
          </div>

          <div class="footer-social-icons text-sm-right text-center mb-4">

            <?php if ( is_active_sidebar( 'footer_social_links' ) ) : 
               
               dynamic_sidebar( 'footer_social_links' );
               
            endif; ?>
            <!-- <a href="" class="single-social mr-2"><i class="fa fa-facebook"></i></a>
            <a href="" class="single-social"><i class="fa fa-twitter"></i></a> -->
          </div>

        </div>  



      </div>

      <div class="row copyright-div pb-5">
        <div class="col-12">
        

            <?php if ( is_active_sidebar( 'copyright_text_widget' ) ) : 
               
               dynamic_sidebar( 'copyright_text_widget' );
               
            endif; ?>

            <!-- 

              <p class="coyright-text text-sm-left text-center">

            copyright &copy; buzz graphics. All rights reserved. 
          </p>

          -->
          
        </div>
      </div>
     </div>
    
  </footer> 







  
  <script src="<?php echo get_template_directory_uri();?>/js/jquery-3.5.slim.min.js"  ></script> 
  <script src="<?php echo get_template_directory_uri();?>/js/popper.min.js"  ></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"  ></script> 

  <!-- ==== Carousal  -->
  <script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/js/custom-js.js"></script> 

  <!-- Lightbox -->
  <script src="<?php echo get_template_directory_uri();?>/js/lightbox.js"></script> 


  <!-- Lightbox for video opening -->
  <!-- Lightbox -->
  <script src="<?php echo get_template_directory_uri();?>/js/html5lightbox/html5lightbox.js"></script> 

 </body>
 </html>      