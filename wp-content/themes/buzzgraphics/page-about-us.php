<?php

/**
* About Us Template File
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
					About Us
				</h1>
				<!-- <p class="title-desc">
					Sed non massa quis nisl tincidunt posuere sit amet vitae sem.
			</p> -->
			</div>
		</div>
	</div>
</section>

<div class="page-main about-us-main">
<section class="page-content">
	<div class="container">

		<div class="row mt-5">

			<?php
			    // TO SHOW THE PAGE CONTENTS
			    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
			        
			            <?php the_content(); ?> <!-- Page Content -->
			

			    <?php
			    endwhile; //resetting the page loop
			    wp_reset_query(); //resetting the page query
			    ?> 


			<!-- <div class="col-md-6 col-12 mt-4 pr-md-1">
				<h2 class="inner-head">
					BUZZ Graphics
				</h2>
				<p class="pr-3">
					Sed non massa quis nisl tincidunt posuere sit amet vitae sem. Praesent 
					sed convallis quam. Donec hendrerit neque sit amet tellus ornare et 
					semper lorem lacinia. Suspendisse ac pellentesque odio. Nunc pharetra 
					malesuada nisi ac condimentum. Curabitur porttitor pulvinar 
				</p>
			</div>
			<div class="col-md-6 col-12 my-4  text-center ">
				<img src="images/event-planner_75.jpg" alt="" class="about-right-main-img border-dark">
			</div> -->


		</div>

		<div class="row mt-5">

		<!-- 	Here we will need to use the page id of about us page.
			The page id of about us page is 82. -->

			<!-- we have used double false in the parameter to avoid the extra paras added by the acf automatically -->

			<?php the_field('who_we_are_section',82 , false, false);?>


			<!-- <div class="col-md-6">
				<h2 class="who-we-head inner-head mb-3">
					WHO WE ARE
				</h2>
				<p class="buzz-para">
					There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks.
				</p>
			</div>
			<div class="col-md-6 mt-md-5 mt-4 pt-1">
				<p class="buzz-para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks.</p>
			</div> -->



		</div>

		<div class="row persons-section my-5">


			<?php the_field('about_us_persons_section',82 , false, false);?>

			
			<!-- Left part -->

			<!-- <div class="persons-left col-md-6 pr-0 mr-0">	
				<div class="persons-img-main">
				<img src="images/event-planner_76.jpg" alt="">	
				</div>

			</div> -->

			<!-- End left Part -->

			<!-- Right part started -->

			<!-- <div class="persons-right col-md-6 ml-0 px-sm-5 py-5">	

				<h2 class="persons-head mt-4 mb-4">	
					About Us
				</h2>

				<div class="person-div my-5">
						
						<h3 class="person-name">
						Jane	
						</h3>
						<p class="person-details">

							Sed porttitor lectus nibh. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor

						</p>
				</div>

				<div class="person-div my-5"> 
						<h3 class="person-name">
						John	
						</h3>
						<p class="person-details">

							Sed porttitor lectus nibh. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor

						</p>
				</div>


			 </div>
 -->

			 <!-- End right part -->

	 	 </div>

	</div>
</section>	

</div>	




<?php  

get_footer();