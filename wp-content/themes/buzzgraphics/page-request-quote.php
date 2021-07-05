<?php

/**
* Request Quote Page Template File
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
					Request A Quote 
				</h1>
				<!-- <p class="title-desc">
					Sed non massa quis nisl tincidunt posuere sit amet vitae sem.
			</p> -->
			</div>
		</div>
	</div>
</section>


<div class="page-main quote-main-page  ">
<section class="page-content">
	<div class="container">
		<div class="row quote-top-head text-center ">

			<?php
			    // TO SHOW THE PAGE CONTENTS
			    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
			        
			            <?php the_content(); ?> <!-- Page Content -->
			

			    <?php
			    endwhile; //resetting the page loop
			    wp_reset_query(); //resetting the page query
			    ?> 


			<!-- <h2 class="quote-title w-100 mb-4">
				Get Ready For Innovation & Design
			</h2>
			<p class="quote-head-para ">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum sed, pariatur odit fuga voluptate provident vero sit cumque error.
			</p> -->
		</div>
		<div class="row quote-form-div mt-5 pt-3">
			<div class="col-12  buzz-quote-form">

				<?php echo do_shortcode('[contact-form-7 id="115" title="Request A Quote"]'); ?>

				<!-- <form> -->
				   <!-- <div class="form-row">
				      <div class="form-group col-md-6 pr-4">
				         <label for="fname" class="p-0 m-0"> First Name*</label>
				         [text* qfname id:quoteFName class:form-control] 
				      </div>
				      <div class="form-group col-md-6 pr-4">
				         <label for="lname" class="p-0 m-0"> Last Name</label>
				         [text  qlname id:quoteLName class:form-control] 
				      </div>
				   </div>
				   <div class="form-row">
				      <div class="form-group col-md-6 pr-4">
				         <label for="phone" class="p-0 m-0">Phone</label>
				         [text* qphone id:quotePhone class:form-control] 
				      </div>
				      <div class="form-group col-md-6 pr-4">
				         <label for="email" class="p-0 m-0">Email*</label>
				         [email* qemail id:quoteEmail class:form-control] 
				      </div>
				   </div>
				   <div class="form-row">
				      <div class="form-group col-md-6 pr-4">
				         <label for="inputService" class="p-0 m-0">Select Service</label>
				          [select* service-menu id:inputService class:form-control "Choose Service" "Catering" "Floral" "Entertainment" "Dessert" "Swag & Gifting" "Decor"]
				      </div> 
				      <div class="form-group col-md-6 pr-4">
				         <label for="inputService" class="p-0 m-0">City*</label>
				         [text* qcity id:quoteCity class:form-control] 
				       </div>   
				   </div>
				   <div class="form-group">
				      <label for="help" class="p-0 m-0">What Can We Help With You?</label>
				      [text* qhelp id:quoteHelp class:form-control rows:5 ] 
				   </div>
				   <button type="submit" class="btn form-submit-btn mt-lg-5">Get A Quote</button> -->
				<!-- </form> -->



			  <!--  <form>
			      <div class="form-row">
			         <div class="form-group col-md-6 pr-4">
			            <label for="fname" class="p-0 m-0"> First Name*</label>
			            <input type="text" class="form-control" id="quoteFName" >
			         </div>
			         <div class="form-group col-md-6 pr-4">
			            <label for="lname" class="p-0 m-0"> Last Name</label>
			            <input type="text" class="form-control" id="quoteLName" >
			         </div>
			      </div>
			      <div class="form-row">
			         <div class="form-group col-md-6 pr-4">
			            <label for="phone" class="p-0 m-0">Phone</label>
			            <input type="text" class="form-control" id="quotePhone" > 
			         </div>
			         <div class="form-group col-md-6 pr-4">
			            <label for="email" class="p-0 m-0">Email*</label>
			            <input type="email" class="form-control" id="quoteEmail" > 
			         </div>
			      </div>
			      <div class="form-row">
			         <div class="form-group col-md-6 pr-4">
			            <label for="inputService" class="p-0 m-0">Select Service</label>
			            <select id="inputService" class="form-control">
			               <option selected>Choose Service</option>
			               <option> Catering</option>
			               <option> Floral</option>
			               <option> Entertainment</option>
			               <option>  Dessert</option>
			               <option>  Swag & Gifting</option>
			               <option>  Decor</option>
			            </select>
			         </div> 
			         <div class="form-group col-md-6 pr-4">
			            <label for="inputService" class="p-0 m-0">City*</label>
			            <input type="text" class="form-control" id="quoteCity" > 
			          </div>   
			      </div>
			      <div class="form-group">
			         <label for="help" class="p-0 m-0">What Can We Help With You?</label>
			         <textarea class="form-control" id="quoteHelp" rows="5"  > </textarea>
			      </div>
			      <button type="submit" class="btn form-submit-btn mt-lg-5">Get A Quote</button>
			   </form>
 -->


			</div>
		</div>

	</div>
</section>
</div>	



<?php  

get_footer();