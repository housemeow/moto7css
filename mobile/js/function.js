var slider;

var newsinnerWidth,newsitemWidth;
var curnewstype = 1,newsitems;
var curcolumtytpe = 1,columitems;

jQuery(function(){
	console.log("init");

	slider = jQuery('.bxslider').bxSlider({
		mode:'horizontal',
		controls:false,
		preloadImages:'visible',
		responsive:false,
		auto:true,
		randomStart:true,
		pager:false,
		onSliderLoad:function(currentIndex){ 
			jQuery(".infobar .title h2").html(jQuery(".bxslider li:nth-child("+(currentIndex+2)+") img").attr('title'));
			jQuery(".ctrolbar a").attr('href',jQuery(".bxslider li:nth-child("+(currentIndex+2)+") img").attr('link'));
		},
		onSlideAfter:function(slideElement, oldIndex, newIndex){
			jQuery(".infobar .title h2").html(slideElement.children().attr('title'));
			jQuery(".ctrolbar a").attr('href',slideElement.children().attr('link'));
		}
	});
	$( ".ctrolbar a" ).on( "swipeleft", function(){
		slider.stopAuto();
		slider.goToNextSlide();
	});
	$( ".ctrolbar a" ).on( "swiperight", function(){
		slider.stopAuto();
		slider.goToPrevSlide();
	});
	
	jQuery( "#memberPanel" ).panel({
	  beforeopen: function( event, ui ) {
	  	jQuery(".membermenu").addClass("active");
	  },
	  close: function( event, ui ) {
	  	jQuery(".membermenu").removeClass("active");
	  }
	});

	jQuery( "#menuPanel" ).panel({
	  beforeopen: function( event, ui ) {
	  	jQuery(".mainmenu").addClass("active");
	  },
	  close: function( event, ui ) {
	  	jQuery(".mainmenu").removeClass("active");
	  }
	});

	/*jQuery( ".submenuList li").bind('touchstart mouseover', function(){
		jQuery( ".submenuList li a").css('border-bottom','1px solid #ffffff');
		jQuery( ".submenuList li:last-child a").css('border-bottom','none');
	  if(jQuery(this).index()){
	  	 jQuery( ".submenuList li:nth-child("+(jQuery(this).index())+") a").css('border-bottom','none');	  	 
	  }
	});*/
	
    jQuery(".newtab li a").swipeleft(function(event){
    	var tarNu = (curnewstype+1 > newsitems)?newsitems:curnewstype+1;
    	scrolltag(".newtab",tarNu,"swipeleft");    	
    });
    jQuery(".newtab li a").swiperight(function(){
    	var tarNu = (curnewstype-1 < 1)?1:curnewstype-1;
    	scrolltag(".newtab",tarNu,"swiperight");
    });
    jQuery(".newtab li a").on( "vclick", function(event) {
    	event.preventDefault();
  		var tarNu = jQuery(this).parent().index()+1;
    	scrolltag(".newtab",tarNu,"click");
 	 });

    jQuery(".columtab li a").swipeleft(function(event){
    	var tarNu = (curnewstype+1 > newsitems)?newsitems:curnewstype+1;
    	scrolltag(".columtab",tarNu,"swipeleft");    	
    });
    jQuery(".columtab li a").swiperight(function(){
    	var tarNu = (curnewstype-1 < 1)?1:curnewstype-1;
    	scrolltag(".columtab",tarNu,"swiperight");
    });
    jQuery(".columtab li a").on( "vclick", function(event) {
    	event.preventDefault();
  		var tarNu = jQuery(this).parent().index()+1;
    	scrolltag(".columtab",tarNu,"click");
 	 });

	Draggable.create(jQuery(".menuPanel .content .mainmenuList"), {type:"top", dragClickables:true, edgeResistance:0, throwProps:true, lockAxis:true, bounds:jQuery(".menuPanel .content")});

	resize();
	jQuery(window).resize(function() {
	  resize();
	});


})

function scrolltag(root,tg,move){
	curnewstype = tg;
	if(tg > 2 && tg < newsitems-1){
		jQuery(root+' .preicon').show();
		jQuery(root+' .nexticon').show();
		TweenMax.to(jQuery(root+' ul'), 1, {css:{marginLeft:-(newsitemWidth*(tg-2))}}) ;	
	}else if(tg <= 2){
		jQuery(root+' .preicon').hide();
		jQuery(root+' .nexticon').show();
		TweenMax.to(jQuery(root+' ul'), 1, {css:{marginLeft:0}});
	}else if(tg >= newsitems-1){
		jQuery(root+' .preicon').show();
		jQuery(root+' .nexticon').hide();
		TweenMax.to(jQuery(root+' ul'), 1, {css:{marginLeft:-(newsitemWidth*(newsitems-3))}});
	}
	$(root+' li:nth-child('+tg+') a').tab('show');
}


function resize(){

	var height = jQuery(window).height()-jQuery(".menuPanel .title").outerHeight()-30;
	jQuery(".menuPanel .content").css("height",height);
	if(jQuery(".menuPanel .content .mainmenuList").outerHeight() <= height){
		Draggable.get(".menuPanel .content .mainmenuList").disable();
	}else{
		Draggable.get(".menuPanel .content .mainmenuList").enable();
	}

	slider.reloadSlider();
	var sliderpo = jQuery('.bx-wrapper').position();
	jQuery('.infobar').css('top',sliderpo.top+jQuery('.bx-wrapper').outerHeight()-53);
	jQuery('.ctrolbar').css('top',sliderpo.top).css('height',jQuery('.bx-wrapper').outerHeight());
	jQuery('.infobar .title').css('width',jQuery('.bx-wrapper').outerHeight()-35);

	newsinnerWidth = jQuery('.news .hilightnews').outerWidth();
	newsitemWidth = Math.floor(newsinnerWidth/3);
	newsitems = jQuery('.newtab ul li').length;
	jQuery('.newtab').css("width",newsinnerWidth);
	jQuery('.newtab ul').css("width",newsitemWidth*newsitems);
	jQuery('.newtab ul li').css("width",newsitemWidth);
	columitems = jQuery('.columtab ul li').length;
	jQuery('.columtab').css("width",newsinnerWidth);
	jQuery('.columtab ul').css("width",newsitemWidth*columitems);
	jQuery('.columtab ul li').css("width",newsitemWidth);
	scrolltag(".newtab",curnewstype,"click");
	scrolltag(".columtab",curcolumtytpe,"click");

	jQuery('.gallery>a img:nth-child(2)').css('width',jQuery('.gallery').outerWidth()-158);
}