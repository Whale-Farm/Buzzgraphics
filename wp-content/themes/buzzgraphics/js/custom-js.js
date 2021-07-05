 $(document).ready(function(){

 	$('.home-slider-sect .owl-item.active ').first().addClass("item-no-overlay");

 	owl = $('#owl-comapnies').owlCarousel({
 		items:3,
 		loop: true, 
 		center: true,
 		autoplay:true,
 		responsive:{
				        0:{
				            items:1,
				            nav:false,
				            dots:false
				        },
				        767:{
				            items:2,
				            nav:false
				        },
				        1100:{
				            items:3,
				            nav:false
				        }  
				    }

 	});
 	// owl.on('changed.owl.carousel', function(e) { 
 	// 	// $('.home-slider-sect .owl-item.item-no-overlay ').removeClass("item-no-overlay");
 	// 	$('.home-slider-sect .owl-item.active ').first().addClass("item-no-overlay");
 	//  });

 	 $('#owl-ideas').owlCarousel({
 		items:1,
 		dots: false, 
 		autoplay:true,
 		nav:true, 
 		autoPlay:4000,
 		loop:true,
 		// animateOut: 'fadeOut',
 		//        animateIn: 'fadeIn',
 		 navText:["<i class='fa fa-arrow-left'></i>",
   	"<i class='fa fa-arrow-right'></i>"],       


 	});


// For the removal of contact form input fields wraping 

$("#cntct-email").unwrap();	 
$("#cntct-name").unwrap();	 


});