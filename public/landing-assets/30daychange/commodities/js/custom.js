// JavaScript Document

    $(document).ready(function() {
     
         $("#owl-example").owlCarousel({
     
			//Basic Speeds
			slideSpeed : 200,
			paginationSpeed : 800,
			rewindSpeed : 1000,
			//Autoplay
			autoPlay : true,
			stopOnHover : false,
		 
			// Navigation
			navigation : true
	 
		});
		
		  $("#owl-binary").owlCarousel({
     
			//Basic Speeds
			slideSpeed : 200,
			paginationSpeed : 800,
			rewindSpeed : 1000,
			//Autoplay
			autoPlay : true,
			stopOnHover : false,
		 
			// Navigation
			navigation : false
	 
		});
     
    });