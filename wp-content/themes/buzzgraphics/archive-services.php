<?php

/**
* Services Archive Page Template File
*

* @package Buzzgraphics

*/


get_header();

?> 


<section class="banner-area">
	<div class="container">
		<div class="row text-center w-100">
			<div class="col-12 page-head">
				<h1 class="page-title">
					Services 
				</h1>
				<!-- <p class="title-desc">
					Sed non massa quis nisl tincidunt posuere sit amet vitae sem.
			</p> -->
			</div>
		</div>
	</div>
</section>


<div class="page-main services-main  ">
<section class="page-content">
	<div class="container">


		<!-- In the admin panel I have added a category "Featured Service" for the top services here -->
		<!-- Those having the category with "Featured Service" will be shown at the top here -->

		<!-- Id of the featured category is 2, so we are passing that to the arguement in the query -->


		<?php 
		$args = array( 'post_type' => 'services','cat'=> 2 , 'posts_per_page' => -1 );
		$the_query = new WP_Query( $args ); 
		?> 

		<div class="row top-three-services-div text-center mb-5 pb-5">
			<div class="col-12 top-text mb-5">
				<p class="top-para-text">
					Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Nulla porttitor accumsan tincidunt. Praesent sapien massa, convallis a pellen
				</p>
			</div>


<!-- In the admin panel I have added a category "Featured Service" for the top services here -->
		<!-- Those having the category with "Featured Service" will be shown at the top here -->

 			<?php if ( $the_query->have_posts() ) : ?>

                      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                      	<?php //echo $post->ID; ?>

                       <?php $service_featured_img_url = get_the_post_thumbnail_url($post->ID); ?>


			<div class="col-xl-4 single-top-service mb-4 mb-xl-0">
				<div class="single-top-service-wrap content">

					<a href="<?php the_permalink( );?>" class="top-service-anch">

						<div class="top-service-overlay content-overlay"></div>

						<img class="top-service-img content-image" 
						src=" <?php echo $service_featured_img_url;?>">


						<div class="top-service-cntnt-details content-details fadeIn-bottom">
						  <h3 class="top-service-title content-title"><?php the_title(); ?></h3>

						  <!-- In the admin panel the content is added with p tag and p tag must be in the class as given below commented -->

						  <?php the_content(); ?>


						  <!-- <p class=" top-service-text content-text my-3">
						  Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Proin eget tortor risus. Nulla porttitor acc
							</p> -->
						</div>


					</a>
					
				</div>
					<a href="<?php the_permalink( );?>" class="top-detail-rdt">
				 	<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
				 </a>
			</div>


			<?php endwhile;
			wp_reset_postdata(); ?>
			<?php else:  ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>  


		</div>

		<div class="row services-intro-div mt-4"> 
				<div class="intro-head w-100 text-center">
					<h2 class="services-head-text pb-4 px-3 px-md-0">
						Services We Provide
					</h2>
					<p class="services-intro-para mb-5 pb-5">
						Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Proin eget tortor risus.
					</p>	
				</div>
			 
		</div>





			<!-- Now we will show all the services other than the featured services -->
				<!-- Since featured services ID is 2 we exclude that from the query -->
         <!-- we can exclude any category from the loop by using this code -->

         <!-- 'category__not_in' => '12', we will pass this parameter in the wp-query -->

         <!-- Here 2 is the cat id of the featured posts -->

         <?php 
		
		$args = array( 'post_type' => 'services','category__not_in'=> 2 , 'posts_per_page' => -1 );
		
		$the_query = new WP_Query( $args ); 
		
		?> 


		<div class="row services-items-div">

		

			<?php if ( $the_query->have_posts() ) : ?>

			            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


			             <?php $singleservice_featured_img_url = get_the_post_thumbnail_url($post->ID); ?>


			<div class="col-lg-4 col-sm-6 single-service-main text-center mb-4">
				<div class="single-service-wrap">
					<a href="<?php the_permalink( );?>" class="single-service-anch">
					<div class="single-service-img">
						<img src="<?php echo $singleservice_featured_img_url; ?>" alt="" class="service-img">
					</div>
					</a>
					<div class="single-service-content">
						<a href="<?php the_permalink( );?>" class="single-service-anch"> 
						<h2 class="single-service-title-txt pt-4 ">
							 <?php the_title();?>
						</h2>
						</a>
						<p class="singleservice-txt">
							<?php  echo wp_trim_words( get_the_excerpt(), 20 ); ?>

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
</section>
</div>	





<?php  

get_footer();