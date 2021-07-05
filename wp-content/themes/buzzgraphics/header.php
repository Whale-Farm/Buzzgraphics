 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
  <title> Buzz Graphics Website </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.css"  >
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/responsive.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/wpcss.css">


  <!-- Owl Carousal Files -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/owl.theme.default.min.css">

  <!-- Lightbox plugin -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/lightbox.css">

  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_site_url(); ?>/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_site_url(); ?>/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_site_url(); ?>/favicon-16x16.png">

 </head>
 <body>

  <!-- We are fetching the current page slug for adding active class to the menu item -->


  <?php global $post; ?>
  <?php $current_page_slug = $post->post_name; ?>



  <header id="header" class="header w-100">
     <div class="container">
        <div class="row pt-3 pt-sm-0 pb-3 pb-lg-0">
           <div class="col">
              <nav class="navbar navbar-expand-lg navbar-light bg-light py-4 ">
                 <a href="<?php echo get_site_url(); ?>" class="navbar-brand  web-logo"><img src="<?php echo get_template_directory_uri();?>/images/buzz-logo.png" alt="" ></a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#buzz-nav">
                 <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse justify-content-end m-4 m-lg-0" id="buzz-nav">
                    <ul class="navbar-nav justify-content-lg-end text-center text-lg-left mr-1 w-100">
                       <li class="nav-item"><a href="<?php echo site_url();?> " class="nav-link <?php if (is_front_page()) echo 'active'; ?>">Home</a></li>
                       <li class="nav-item  "><a href="<?php echo site_url();?>/about-us" class="nav-link <?php if (is_page('about-us')) echo 'active'; ?>">About Us</a></li>
                       <li class="nav-item dropdown ">
                        <a href="<?php echo site_url();?>/services" class="nav-link dropdown-toggle mobile-toggle <?php if (is_archive('services') ||  is_singular( 'services' ))   echo 'active'; ?>" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Services</span><span class="caret"></span>
                        </a>


                        <ul class="dropdown-menu inner-submenu">

                          <!-- Fetching the services titles for the menu -->

                          <!-- We will show the services in the menu other than the featured services -->


                                <!-- Now we will show all the services other than the featured services -->
                                  <!-- Since featured services ID is 2 we exclude that from the query -->
                                   <!-- we can exclude any category from the loop by using this code -->

                                   <!-- 'category__not_in' => '12', we will pass this parameter in the wp-query -->

                                   <!-- Here 2 is the cat id of the featured posts -->

                                   <?php 
                              
                              $args = array( 'post_type' => 'services','category__not_in'=> 2 , 'posts_per_page' => -1 );
                              
                              $the_query = new WP_Query( $args ); 
                              
                              ?> 

                              <?php if ( $the_query->have_posts() ) : ?>

                  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <?php $post_slug = $post->post_name; ?>


                    <li>
                      <a href="<?php the_permalink( $post->ID ) ?>" 

                      class="<?php if($post_slug == $current_page_slug){ echo 'active';} ?>">
                      
                      <?php the_title();?>
                        
                      </a>
                      
                    </li>
                            <div class="dropdown-divider"></div>


                    <?php endwhile;
                    wp_reset_postdata(); ?>
                    <?php else:  ?>
                    <p><?php _e( 'No menu item for services' ); ?></p>
                    <?php endif; ?> 




                           <!--  <li><a href="single-service.html">Catering</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a href="single-service.html">Floral</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a href="single-service.html">Entertainment</a></li>
                              <div class="dropdown-divider"></div>
                            <li><a href="single-service.html">Dessert</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a href="single-service.html">Swag & Gifting</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a href="single-service.html">Decor</a></li>
                            <div class="dropdown-divider"></div> -->


                            <li><a href="<?php echo site_url();?>/services">All Services</a></li>
                             
                        </ul>


                       </li>
                       <!-- <li class="nav-item "><a href="blog.html" class="nav-link">Blog</a></li> -->
                       <li class="nav-item "><a href="<?php echo site_url();?>/portfolio" class="nav-link <?php if (is_page('portfolio')) echo 'active'; ?>">Portfolio</a></li>
                       <li class="nav-item "><a href="<?php echo site_url();?>/prices" class="nav-link <?php if (is_page('prices')) echo 'active'; ?>">Prices</a></li>
                       <li class="nav-item "><a href="<?php echo site_url();?>/contact-us" class="nav-link <?php if (is_page('contact-us')) echo 'active'; ?>">Contact</a></li> 
                    </ul> 

                    <a href="<?php echo site_url();?>/request-quote" class="request-quote <?php if (is_page('request-quote')) echo 'active'; ?>"> Request a <br> <b>Quote</b> </a>
                 </div>
              </nav>
           </div>
        </div>
     </div>
  </header>



  