<?php

/**
* Main Template File
*

* @package Buzzgraphics

*/


get_header();

?> 


 <div class="main home-main">


<?php while ( have_posts() ) : the_post(); ?>

  <section class="home-banner-sect">
    <div class="container">


      <?php the_field('banner_content', false, false);?>

      <!-- we have used double false in the parameter to avoid the extra paras added by the acf automatically -->




      <!-- <div class="row yellow-section">
        <div class="col-12 text-center">

          <div class="row yellow-circle">
            <img src="<?php echo get_template_directory_uri();?>/images/bg-round-img.png" alt="" class="bee-img">
            <div class="circle-content-div">  

                <h2 class="circle-head">  Bring Your <br> Business to the </h2>
           
                <span class="next-div-txt"> <p>next</p></span>
                <h3 class="last-text"> level</h3>

            </div>  
          </div>
          <div class="row banner-buttons-div text-center">
            <div class="banner-anchors w-100">
            <a href="" class="left-btn d-inline-block">All Projects <i class="fa fa-play" aria-hidden="true"></i></a>
            <a href="" class="right-btn ml-4 d-inline-block">Branding & Design</a>
            </div>
          </div>
          
        </div>
        
        
      </div> -->
    </div>
  </section>

  <section class="home-portfolio ">
    <div class="container">

      <?php the_field('home_portfolio_section', false, false);?>

     <!--  <div class="row">
        <div class="col-md-7 portfolio-left py-md-5">
          <h4 class="sub-heading-port pt-5">portfolio</h4>
          <h2 class="main-heading-port">
          see <br class="buzz-br">our work<br class="buzz-br"> in action
            </h2>
            <div class="port-para mt-4 mb-5 pb-md-5">
              <p class="buzz-para"> amet consectetur adipisicing elit Nobis <br class="buzz-br"> quisquam cum debitis atque, optio officia <br class="buzz-br">sapiente minus quasi ducimus exercitationem.</p>
            </div>
        </div>
        <div class="col-md-5 portfolio-right">
          <a href="" class="work-vid">
            <i class="fa fa-play"></i>
          </a>
        </div>
      </div> -->
    </div>
  </section>

  <section class="home-slider-sect ">
     <div class="container-fluid">
      <div class="row hm-slider-main">
        <?php 
        $args = array( 'post_type' => 'home_company_slider', 'posts_per_page' => -1 );
        $the_query = new WP_Query( $args ); 
        ?> 
        <div class="owl-carousel owl-theme" id="owl-comapnies">

          <?php if ( $the_query->have_posts() ) : ?>

                      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


                       <?php $company_featured_img_url = get_the_post_thumbnail_url($post->ID); ?>

          <div class="item single-item-container ">
            <div class="item-overlay"></div>
            <img src="<?php echo $company_featured_img_url;?>" alt="">
            <div class="overlay-text-img">
              <div class="overlay-text fadeIn-bottom">
                <h3 class="company-head">
                  <?php the_title(); ?>
                </h3>
                <p class="company-text">
                 <?php  echo wp_trim_words( get_the_content(), 20 ); ?>
                </p>
              </div>
              
            </div>
          </div>


          <?php endwhile;
          wp_reset_postdata(); ?>
          <?php else:  ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>   
 

  

        </div>
        
      </div>
     </div>
  </section>


   <section class="offering-sect pt-sm-5">
    <div class="container">
      <div class="row">



        <div class="col-md-6 offering-left mt-3">

          <!-- The below content is present in the custom field -->

          <?php the_field('home_offering_left_section', false, false);?>


            <!-- <h4 class="sub-heading-offer pt-5">Services</h4>
            <h2 class="main-heading-offer">
            What <br>we are<br> offering
              </h2>
              <div class="offer-para mt-4  mb-3">
                <p class="buzz-para"> We are a quickly evolving interactive studio with a focus on digital design, marketing and branding. We offer individual solutions for different areas</p>
              </div> -->

              <!-- The above content is present in the custom field -->



              <!-- These below services will be dynamically called -->
              <div class="row home-service-inner my-5">
                <div class="col-md-6 col-sm-6 ser-home-inner">
                  <a href="#" class="single-service">Marketing research</a>
                  <a href="#" class="single-service">Competitor research</a>
                  <a href="#" class="single-service">Market research</a>
                  <a href="#" class="single-service">Bringing Brand</a> 
                </div>
                <div class="col-md-6 col-sm-6 ser-home-inner">
                  <a href="#" class="single-service">Operational solutions</a>
                  <a href="#" class="single-service">Digital marketing</a>
                  <a href="#" class="single-service">Social media</a>
                  <a href="#" class="single-service">Email marketing</a> 
                </div>

                <div class="col-12 btn-div mt-5">
                  <a href="<?php echo site_url();?>/services" class="services-all-btn">
                    Our Services
                  </a>
                </div>
              </div>

              <!-- These above services will be dynamically called -->
          
        </div>

        <div class="col-md-6 offering-right mt-3 pt-md-5  mb-5 mb-md-0 pl-5 text-center">
          <!-- <img src="<?php echo get_template_directory_uri();?>/images/home-services-img.png" alt="" class="img-fluid"> -->

          <?php the_field('home_offering_right_section', false, false);?>

        </div>  



      </div>
    </div>
  </section>



  <section class="home-process-sect py-5 ">
    <div class="container">

      <?php the_field('our_process_section', false, false);?>

      <!-- <div class="row">
        <h2 class="process-head pt-5 mt-5">
          <span class="grey-head">Our</span><br>
          Process
        </h2>
      </div>
      <div class="row process-items-main my-5">

        <div class="col-md col-sm-6 col-12 proc-single-item">
          <div class="proc-single-img">
             <img src="<?php echo get_template_directory_uri();?>/images/exploration.png" alt="" class="img-fluid">
                      </div>

          <p class="proc-item-txt">Exploration</p>
        </div>

        <div class="col-md col-sm-6 col-12 proc-single-item">
          <div class="proc-single-img">

          <img src="<?php echo get_template_directory_uri();?>/images/ideation.png" alt="" class="img-fluid">
          </div>
          <p class="proc-item-txt">Ideation</p>
        </div>

        <div class="col-md col-sm-6 col-12 proc-single-item">
          <div class="proc-single-img">

          <img src="<?php echo get_template_directory_uri();?>/images/creation.png" alt="" class="img-fluid">
          </div>
          <p class="proc-item-txt">Creation</p>
        </div>

        <div class="col-md col-sm-6 col-12 proc-single-item">
          <div class="proc-single-img">

          <img src="<?php echo get_template_directory_uri();?>/images/perfection.png" alt="" class="img-fluid">
          </div>
          <p class="proc-item-txt">Perfection</p>
        </div>

        <div class="col-md col-sm-6 col-12 proc-single-item">
          <div class="proc-single-img">

          <img src="<?php echo get_template_directory_uri();?>/images/completion.png" alt="" class="img-fluid">
          </div>
          <p class="proc-item-txt">Completion</p>
        </div>

      </div>

 -->




    </div>
  </section>


  <section class="home-ideas-sect">
    <div class="container">


      <div class="row">
        <div class="col-md-6 ideas-left pr-5">

          <?php the_field('great_ideas_left', false, false);?>



          <!-- <h2 class="ideas-head">
            where <br> <span class="white-head"> great ideas</span> <br> are made
          </h2> -->
        </div>

        <div class="col-md-6 ideas-right pl-4">

          <!-- This section is present in the repeater fields of the Home page in the ideas section -->

          <div class="owl-carousel owl-theme" id="owl-ideas">
             <!-- We have used repeater fields for this section it is preseint with the name of ideas at the home page, it is made slider by owl carousal -->
 
             <?php 


             // We need to fetch all the items of ideas first

             $all_ideas_items = get_field('ideas_slider_right_section');


             ?>


             <!-- Now applying loop for the all items of the ideas -->


             <?php foreach($all_ideas_items as $idea_item){


                $idea_item_title = $idea_item['idea_title'];

                $idea_item_image_url = $idea_item['idea_image']['url'];

                // We will apply condition for the video url if it is empty then the video button 
                // will not be shown

                 $idea_item_video_url = $idea_item['idea_video'];


                $idea_item_content = $idea_item['idea_content'];



                ?>


 
           <div class="main-idea-right item">
            <div class="video-sect">


               <!-- <a href="https://www.youtube.com/watch?v=FaHRTs9HH18" class="gallery-single-link html5lightbox" data-group="mygroup" data-width="480" data-height="320"  > Yess</a> -->
              
              <!-- We have applied the condition that if video url is added in the admin panel then the button of play will be shown other wise it will not be shown -->

              <!-- I have used the html5lightbox plugin for this video popup -->



              <?php if(!empty($idea_item_video_url)){ ?>

                


              <a href=" <?php echo $idea_item_video_url; ?>" class="idea-vid html5lightbox" data-group="mygroup" data-width="480" data-height="320"  >
                <i class="fa fa-play"></i>
              </a>

            <?php }?>


              <img src="<?php echo $idea_item_image_url; ?>" alt="" class="idea-img">
            </div>
            <div class="idea-right-content mt-4 pl-3">
              <h3 class="idea-title">
                <?php echo  $idea_item_title; ?>
              </h3>

              <!-- class idea para is very important -->
              <p class="idea-para mt-4">

                <?php echo $idea_item_content; ?>

              </p>


            </div>
           </div>

           <?php 

           }

           ?>

          
 


          </div>



        </div>
      </div>
    </div>
  </section>


  <section class="contact-sect py-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 contact-left py-4 pr-4">
          <div class="img-main-div">

            <?php the_field('home_contact_left_section', false, false);?>
            <!-- <img src="<?php echo get_template_directory_uri();?>/images/contact-sec-img.png" alt=""> -->
          

          </div>
        </div>

        <div class="col-lg-6 contact-right pt-lg-5 pl-lg-5">


          <?php the_field('home_contact_right_section', false, false);?>

          <!-- <h2 class="contact-head pt-lg-5 my-4">
            Contact
          </h2>
          <p class="contact-para mb-5">
            Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim.
          </p> -->

          <div class="contact-main-from">



            <!-- <form> -->

              <?php echo do_shortcode( '[contact-form-7 id="76" title="Home Contact Form"]' );?>

              <!-- <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Name</span>
                </div>
                <input type="text" class="form-control" id="cntct-name">
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Email</span>
                </div>
                <input type="text" class="form-control" id="cntct-email" >
                
              </div>
              <button type="submit" class="btn form-submit-btn my-5">Send</button> -->


            <!-- </form> -->




          </div>


        </div>
      </div>
    </div>
  </section>

  <?php endwhile; // end of the loop. ?>


 </div> 

 
<?php  

get_footer();