<?php

/**
* Single post Template File
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
					<?php the_title(); ?> 
				</h1>
				<!-- <p class="title-desc">
					Sed non massa quis nisl tincidunt posuere sit amet vitae sem.
			</p> -->
			</div>
		</div>
	</div>
</section>



<?php $singleservice_featured_img_url = get_the_post_thumbnail_url($post->ID); ?>




<div class="page-main single-service-page-main  ">
<section class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-12 featured-img-section">
				<div class="img-fluid featured-img text-center">
					<img src="<?php echo $singleservice_featured_img_url; ?>" alt="" >
				</div>
			</div>
			<div class="col-12 single-service-page-content mt-4">
				<div class="service-page-title">
					<h1 class="service-head-title text-center w-100">
						<?php the_title();?>
					</h1>
				</div>	
				<div class="service-content-div mt-5">
					
					<?php the_content(); ?>

				</div>

			</div>
		</div>
	</div>
</section>
</div>		





<?php  

get_footer();