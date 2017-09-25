jQuery(document).ready(function($){
	jQuery('.navigation-section span').click(function(){
		jQuery('.navigation-content').slideToggle();
	});
}); 
function sticky_relocate() {
				var header_height = jQuery('header').outerHeight();
				var window_top = jQuery(window).scrollTop() + header_height;
				var div_top = jQuery('.ref_navigation-content').offset().top;
				if (window_top > div_top) {
					jQuery('.navigation-section').addClass('sticktop');
				} else {
					jQuery('.navigation-section').removeClass('sticktop');
				}
}				

function equalheight(container){
var max_height = 0;
 jQuery(container).each(function() {
 jQuery(this).height('auto');
 var container_height = jQuery(this).outerHeight();
 //console.log(container_height);
if(container_height >= max_height){
max_height = container_height;
}

 });
 jQuery(container).outerHeight(max_height);
}

jQuery(window).load(function() {
	
	jQuery(function () {
				jQuery(window).scroll(sticky_relocate);
				sticky_relocate();
			});
			
			
 //equalheight('.second-library-section .library-inner-content ul li');
// equalheight('.library-inner-content ul li');
 
//equalheight('.second-library-section .library-featured-content');
 //equalheight('.library-featured-content');
 
 //equalheight('.second-library-section .library-adds');
 
 /****** Footer StickTo Bottom Script ******/
 var footer_height = jQuery('.footer-parent').outerHeight();
 var window_height = jQuery(window).height();
 jQuery('.main-body-content').css({'min-height':window_height , 'padding-bottom': footer_height});
 jQuery('.footer-parent').addClass("footer-stickTo-bottom");
 
});

 
jQuery(window).resize(function(){
 equalheight('.second-library-section .library-inner-content ul li');
 equalheight('.library-inner-content ul li');
 
  equalheight('.second-library-section .library-featured-content');
 equalheight('.library-featured-content');
 
   equalheight('.second-library-section .library-adds');

});
$(document).ready(function(){
	library_section();
})

$(window).resize(function(){
	library_section();
});


function library_section(){
 if($(window).width() < 1025)
 {
	// alert($(window).width());
	//$( ".library-inner-content ul li").unbind( "mouseover" );
		//$( ".library-inner-content ul li").bind( "click" );
  $('.library-inner-content > ul li').click(function(){
	
  $('.library-inner-content > ul li').each(function(){
   $(this).find('.tiles-overlay-content').css('display', 'none');
   $(this).find('.tiles-overlay-content').css('opacity', '0');
  });
  $(this).find('.tiles-overlay-content').css('display', 'block');
  $(this).find('.tiles-overlay-content').css('opacity', '1');

  });
  
 /*  $('.multifeatured-close-btn').click(function(evt){
  evt.stopPropagation();
	$(this).parent('.multi-featured-overlay').hide();
  }); */
 }
 else if($(window).width() >= 1025){
 $( ".library-inner-content > ul li").unbind( "click" );
//$( ".library-inner-content ul li").bind( "mouseover" );
 }

}


