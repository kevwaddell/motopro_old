(function($){

	var url = document.location.toString();
	var window_width = window.innerWidth; 
	
	var active_slide = $('#home-slider').find('.active');
	var next_slide = $('#home-slider').find('.next');
	var prev_slide = $('#home-slider').find('.prev');
	var slide_width = active_slide.outerWidth();
	var slide_half = slide_width/2;
	var slide_plus_half = slide_width + slide_half;
	var slide_double = slide_width*2;
	
	var rtime = new Date(1, 1, 2000, 12,00,00);
	var timeout = false;
	var delta = 200;
	

	$(document).ready(function (){
	
	});
	
	$(window).on("resize", function(e){
	
	window_width = $(window).width(); 
	
			slide_width = active_slide.outerWidth();
			slide_half = slide_width/2;
			slide_plus_half = slide_width + slide_half;
			slide_double = slide_width*2;
			
			rtime = new Date();
			if (timeout === false) {
				timeout = true;
				setTimeout(resizeend, delta);
			}
			
			clearInterval(slide_change);

	});
	
	/* HOME PAGE SLIDER */
    	
    	var easing = "swing";
   
	   function change_slide() {
	   
	   if (next_slide.next().length == 1) {
		  next_before = next_slide.next();	   		   
	   } else {
	  	  next_before = $('.slider-item').first();
	   }
	  
	   active_slide.animate({marginLeft: '-' + slide_plus_half +'px'}, 500, easing, function(){
			$(this).removeClass('active').addClass('prev').removeAttr('style');
			prev_slide = $(this);  
	   });
	   
	   next_slide.animate({marginLeft: '-' + slide_half +'px'}, 500, easing, function(){
			$(this).removeClass('next').addClass('active').removeAttr('style');
			active_slide = $(this); 
	   });
	   
	   prev_slide.animate({marginLeft: '-' + slide_double +'px'}, 500, easing, function(){
			$(this).removeClass('prev').removeAttr('style');
	   });
	   
	   next_before.animate({marginLeft: slide_half +'px', opacity: 1}, 500, easing, function(){
	   $(this).addClass('next').removeAttr('style');
	   next_slide = $(this);  
	   });
	   
	   	
	   }
	   
	 var slide_change = setInterval(change_slide, 5000);
	 
	/*  END OF RESIZE FUNCTION */
	 function resizeend() {
    
	    if (new Date() - rtime < delta) {
	        setTimeout(resizeend, delta);
	    } else {
	        timeout = false;
	        
	        slide_change = setInterval(change_slide, 5000);
	    }  
	                 
	}; 
	
	
})(window.jQuery);