
<?php

/**
* Portfolio Template File
*

* @package Buzzgraphics

*/


get_header();

?> 

<?php 


// We need to fetch all the items first

$all_items = get_field('portfolio_item');


?>

	<section class="banner-area">
		<div class="container">
			<div class="row text-center w-100">
				<div class="col-12 page-head">
					<h1 class="page-title">
						Portfolio
					</h1>
					<!-- <p class="title-desc">
						Sed non massa quis nisl tincidunt posuere sit amet vitae sem.
				</p> -->
				</div>
			</div>
		</div>
	</section>


	<div class="page-main portfolio-main  ">
	<section class="page-content">
		<div class="container">
			<div class="row">

				<div class="row portfolio-intro-div">

					<?php
					    // TO SHOW THE PAGE CONTENTS
					    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
					        
					            <?php the_content(); ?> <!-- Page Content -->
					

					    <?php
					    endwhile; //resetting the page loop
					    wp_reset_query(); //resetting the page query
					    ?> 


					<!-- <div class="intro-head">
						<h2 class="port-head-text pb-4 px-3 px-md-0">
							Logo and Branding Portfolio
						</h2>
						<p class="port-intro-para mb-5 pb-5">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat rerum nihil ut consequatur soluta optio aspernatur labore corrupti, modi qui, perspiciatis, iure in praesentium blanditiis ipsam doloremque eos mollitia fugiat voluptas, nulla porro aut quia natus tempore. Totam, rem, pariatur!
						</p>	
					</div> -->
				</div>



				<?php 

				// $all_items is defined at the top of the file

				foreach($all_items as $item){


				   $portfolio_item_title = $item['portfolio_item_title'];

				   $portfolio_item_image_url = $item['portfolio_item_image']['url'];


				   ?>

				<div class="col-md-4 col-lg-3 col-sm-6 portfolio-item-main mb-5">
						<!-- In the href of the anchor tag we need to give the image url -->
		 				<!-- It will open the image in the lightbox -->
		 				<!-- data-lightbox attribute is used to link the images in the slider -->

		 			<a href="<?php echo $portfolio_item_image_url; ?>" class="port-item-img-anch" data-lightbox="porto-1">	
					<div class="port-image-div">

						

						<img src="<?php echo $portfolio_item_image_url; ?>" alt="" class="img-fluid img-thumbnail">
	
					</div>
					<div class="port-img-title my-4">
						 	
						<h3 class="port-title-txt">
							<?php echo $portfolio_item_title; ?>
						</h3>
						 
					</div>
				</a>

				</div>

				 
 				
 				<?php 

 				}


 				?>
 

 
  
 
				
			</div>
		</div>

	</section>
	</div>	





<?php  

get_footer();