<?php

/**
* Prices Template File
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
						Prices
					</h1>
					<!-- <p class="title-desc">
						Sed non massa quis nisl tincidunt posuere sit amet vitae sem.
				</p> -->
				</div>
			</div>
		</div>
	</section>


	<div class="page-main prices-main py-5">
	<section class="prices-sect">
	    <div class="container">
	    	<div class="row prices-head py-5 text-center">



	    		<?php
	    		    // TO SHOW THE PAGE CONTENTS
	    		    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
	    		        
	    		            <?php the_content(); ?> <!-- Page Content -->
	    		

	    		    <?php
	    		    endwhile; //resetting the page loop
	    		    wp_reset_query(); //resetting the page query
	    		    ?> 


	    		<!-- <h2 class="prices-head-text  w-100">
	    			Event Packages
	    		</h2>
	    		<p class="prices-para my-4 text-center">
	    			Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta.
	    		</p> -->
	    	</div>



	    	<!-- We have created a custom post type named prices, also there is a custom field, named price in dollar for the price -->

	    	<?php 
	    	$args = array( 'post_type' => 'prices', 'posts_per_page' => -1 );
	    	$the_query = new WP_Query( $args ); 
	    	?> 

	        <div class="row">

	        	<?php if ( $the_query->have_posts() ) : ?>

	        	            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

	        	            <?php  $postID= get_the_ID();?>	

	            <div class="col-md-4 col-sm-6">
	                <div class="pricingTable">
	                    <div class="pricingTable-header">
	                        <div class="price-value">
	                            <span class="currency">$</span>
	                            <span class="amount"><?php the_field('price_in_dollars', $postID); ?> </span><!-- 
	                            <span class="month">per month</span> -->
	                        </div>
	                    </div>
	                    
	                    <h3 class="title"> <?php the_title(); ?></h3>

	                    <?php echo get_the_content($postID);?>
	                   <!--  <ul class="pricing-content">
	                        <li><span>Vestibulum ac diam</span></li>
	                        <li><span>Sit amet quam vehicula</span></li>
	                        <li><span>Elementum sed sit amet</span></li>
	                        <li><span>Donec rutrum</span></li>
	                        <li><span>Congue leo eget malesuada</span></li>
	                        <li><span>Donec rutrum</span></li>
	                    </ul>
	                    <div class="pricingTable-signup">
	                         <a href="#">Get Started</a>
	                    </div> -->
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