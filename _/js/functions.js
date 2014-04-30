(function($){

	var event_type;
	var url = document.location.toString();
	var window_width = window.innerWidth; 
	
	if (Modernizr.touch){
	
	 event_type = 'touchstart';
	  
	} else {
	 
	 event_type = 'click';	
	 
	}
	
	/* Orientation Change */
	
	var wasPortrait = -1;
	var checkOrientation = function() {
    var isPortrait = (window.innerHeight > window.innerWidth);
    if( isPortrait === wasPortrait ) { return; }
    wasPortrait = isPortrait;
    
    window_width = window.innerWidth; 
    
    //console.log(window_width);
	};
	
	window.addEventListener( 'orientationchange', checkOrientation, false );
	window.addEventListener( 'resize', checkOrientation, false );

	
	/* MAIN MENU NAV BUTTON */
	
	$('body').on(event_type,'button#nav-btn', function(e){
	
	console.log(event_type);
	
		if ( $('#main-nav').hasClass('nav-closed') ) {
			$(this).removeClass('in-active').addClass('active');
			$('.nav-closed').removeClass('nav-closed').addClass('nav-open');
		} else {
			$(this).removeClass('active').addClass('in-active');
			$('.nav-open').removeClass('nav-open').addClass('nav-closed');
		}
		
		return false;
		
	});
	
	/* MAIN MENU HOVER */
	$('#main-nav').on('mouseover', 'li.with-sub-nav', function(){
   	 	$(this).addClass('sub-hover');
	});
	
	$('#main-nav').on('mouseout', 'li.with-sub-nav' , function(){
	    $(this).removeClass('sub-hover');
	});

	if (window_width > 900) {
	
	// Touch events
	$('#main-nav').on('touchend', 'li.with-sub-nav > a', function(e){
	  
	  $(this).parent().siblings().removeClass('sub-hover');
	  
	  if ( !$(this).parent().hasClass('sub-hover')) {
	  $(this).parent().toggleClass('sub-hover'); 
	  return false; 
	  }
	  
	  if ( $(this).parent().hasClass('not-link')) {
	  $(this).parent().toggleClass('sub-hover'); 
	  return false; 
	  } 	   
	   
	});
	
	}
	
	/* SIDE MENU FUNCTIONS */
	$('button#sidenav-btn').on(event_type, function(e){
	
	console.log(event_type);
   	 	
   	 	if ($('ul.btn-list').hasClass('btns-closed')) {
   	 	
   	 		$(this).removeClass('inactive').addClass('active');
	   	 	
	   	 	$('ul.btn-list').removeClass('btns-closed').addClass('btns-open');
	   	 	
   	 	} else {
   	 	
   	 		$(this).removeClass('active').addClass('inactive');
   	 		
	   	 	$('ul.btn-list').removeClass('btns-open').addClass('btns-closed');
   	 	}
   	 	
   	 	return false;
   	 	
	});
	
	 /* FEED SCROLLER 
	   
	Adds new styled scroll bars to media feeds   
   */
   	
	$('.feed-wrap').slimScroll({
        height: '300px'
    });
	
	
	$(document).ready(function (){
	
	});
	
	$(window).on("resize", function(e){
	
	window_width = $(window).width(); 
	
	});
	
	
})(window.jQuery);