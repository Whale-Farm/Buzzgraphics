<?php

/**
* Contact Page Template File
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
					Contact Us
				</h1>
				<!-- <p class="title-desc">
					Sed non massa quis nisl tincidunt posuere sit amet vitae sem.
			</p> -->
			</div>
		</div>
	</div>
</section>


<div class="page-main contact-main-page  ">
<section class="page-content">
	<div class="container">
		<div class="row contact-form-main">
			<div class="col-12 contact-head">
				<h2 class="cntct-title mb-5">
					Send us a message
				</h2>
			</div>
			<div class="col-12 buzz-contact-form">
				<!-- <form> -->
				   


				   	<?php echo do_shortcode('[contact-form-7 id="112" title="Contact Page Form"]');?>


				   	<!--  
					<div class="form-row">
				   	<div class="form-group col-md-6">
				         <label for="fname" class="p-0 m-0"> First Name</label>
				         [text* cntct-fname id:cntctFName class:form-control] 
				      </div>
				      <div class="form-group col-md-6">
				         <label for="lname" class="p-0 m-0"> Last Name</label>
				        [text* cntct-lname id:cntctLName class:form-control] 
				      </div>
				   </div>
				   <div class="form-row">
				      <div class="form-group col-md-6">
				         <label for="phone" class="p-0 m-0">Phone</label> 
				         [text* cntct-phone id:cntctpgPhone class:form-control] 
				      </div>
				      <div class="form-group col-md-6">
				         <label for="email" class="p-0 m-0">Email</label>
				         [email* cntct-pg-email id:cntctpgEmail class:form-control] 
				      </div>
				   </div> 
				   <div class="form-group">
				      <label for="help" class="p-0 m-0">Message</label>
				      [text* cntct-pg-message id:cntctpgHelp class:form-control rows:5 ] 
				   </div>
				   <button type="submit" class="btn form-submit-btn mt-lg-4">Submit</button> -->



				   <!-- Original Code Of HTML form is given below  -->


				     <!--  <div class="form-group col-md-6">
				         <label for="fname" class="p-0 m-0"> First Name</label>

				         <input type="text" class="form-control" id="cntctFName" >
				      </div>
				      <div class="form-group col-md-6">
				         <label for="lname" class="p-0 m-0"> Last Name</label>
				         <input type="text" class="form-control" id="cntctLName" >
				      </div>
				   </div>
				   <div class="form-row">
				      <div class="form-group col-md-6">
				         <label for="phone" class="p-0 m-0">Phone</label>
				         <input type="text" class="form-control" id="cntctPhone" > 
				      </div>
				      <div class="form-group col-md-6">
				         <label for="email" class="p-0 m-0">Email</label>
				         <input type="email" class="form-control" id="cntctEmail" > 
				      </div>
				   </div> 
				   <div class="form-group">
				      <label for="help" class="p-0 m-0">Message</label>
				      <textarea class="form-control" id="cntctHelp" rows="5"  > </textarea>
				   </div>
				   <button type="submit" class="btn form-submit-btn mt-lg-4">Submit</button> -->
				<!-- </form> -->
				
			</div>
		</div>

		<div class="row contact-info-map mt-5">

			<div class="col-12 info text-center mt-5">
				<h3 class="cntct-info">
					Contact Info
				</h3>
			</div>

        <!-- This content is present in the admin panel page -->

			<?php
			    // TO SHOW THE PAGE CONTENTS
			    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
			        
			            <?php the_content(); ?> <!-- Page Content -->
			

			    <?php
			    endwhile; //resetting the page loop
			    wp_reset_query(); //resetting the page query
			    ?> 



			<!-- <div class="col-md-12 contact-info mt-5">
				<div class="row text-center">
				        <div class="col-md-4">
				          <a class="cntct-map">
				            <i class="fa  fa-map-marker "></i>
				          </a>
				          <p>New York, 94126</p>
				          <p class="mb-md-0">United States</p>
				        </div>
				        <div class="col-md-4">
				          <a class="cntct-phone">
				            <i class="fa  fa-phone"></i>
				          </a>
				          <a href="tel:+ 01 234 567 89" class="phone">+ 01 234 567 89</a>
				          <p class="mb-md-0">Mon - Fri, 8:00-22:00</p>
				        </div>
				        <div class="col-md-4">
				          <a class="cntct-email">
				            <i class="fa  fa-envelope"></i>
				          </a>
				          <a href="mailto: info@buzzgraphics.com" class="cntct-email">info@buzzgraphics.com</a>
				          <a href="mailto: sales@buzzgraphics.com" class="cntct-email">sales@buzzgraphics.com</a>
				           
				        </div>
				      </div>

				
			</div> -->


		</div>

	</div>
</section>
</div>		





<?php  

get_footer();