jQuery(function(){

	jQuery('.bxslider').bxSlider({
		mode:'vertical',
		preloadImages:'visible',
		responsive:false,
		auto:true,
		randomStart:true,
		pager:false,
		nextSelector: '.slidercontrol .info .next',
  		prevSelector: '.slidercontrol .info .pre',
  		nextText: '',
  		prevText: '',
		onSliderLoad:function(currentIndex){ 
			jQuery(".slidercontrol .info .more").html(jQuery(".bxslider li:nth-child("+(currentIndex+2)+") img").attr('title'));
			jQuery(".slidercontrol .info .more").attr('href',jQuery(".bxslider li:nth-child("+(currentIndex+2)+") img").attr('link'));
			jQuery(".slidercontrol .picLink").attr('href',jQuery(".bxslider li:nth-child("+(currentIndex+2)+") img").attr('link'));
		},
		onSlideAfter:function(slideElement, oldIndex, newIndex){
			jQuery(".slidercontrol .info .more").html(slideElement.children().attr('title'));
			jQuery(".slidercontrol .info .more").attr('href',slideElement.children().attr('link'));
			jQuery(".slidercontrol .picLink").attr('href',slideElement.children().attr('link'));
		}
	});

	jQuery(".newtab li").css('width',(100/jQuery(".newtab li").length)+'%');
	jQuery(".columtab li").css('width',(100/jQuery(".columtab li").length)+'%');

});