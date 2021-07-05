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
					<?php the_archive_title(); ?>
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
		// $args = array( 'post_type' => 'services','cat'=> 2 , 'posts_per_page' => -1 );
		// $the_query = new WP_Query( $args ); 
		?> 

		 <div class="row services-items-div">
			  

 			<?php if ( have_posts() ) : ?>
 
 						<?php while ( have_posts() ) : ?>
 							<?php the_post(); ?>
                      	<?php //echo $post->ID; ?>

                       <?php $service_featured_img_url = get_the_post_thumbnail_url($post->ID); ?>

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
			 


		

		
 


		


		 
			 

			 

		 

 


		</div>

	</div>	
</section>
</div>	





<?php  

get_footer();