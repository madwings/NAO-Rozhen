var $ = jQuery.noConflict();

function image_preload(selector, parameters) {
	var params = {
		delay: 250,
		transition: 400,
		easing: 'linear'
	};
	$.extend(params, parameters);

	$(selector).each(function() {
		var image = $(this);
		image.css({visibility:'hidden', opacity: 0, display:'block'});
		image.wrap('<span class="preloader" />');
		image.one("load", function(evt) {
			$(this).delay(params.delay).css({visibility:'visible'}).animate({opacity: 1}, params.transition, params.easing, function() {
				$(this).unwrap('<span class="preloader" />');
			});
		}).each(function() {
			if(this.complete) $(this).trigger("load");
		});
	});
}


function tab_widget(tabid) {

	var $sidebarWidgets = $('.sidebar-widgets-wrap');
	var $footerWidgets = $('.footer-widgets-wrap');

	$( tabid + " .tab_content").hide();
	$( tabid + " ul.tabs li:first").addClass("active").show();
	$( tabid + " .tab_content:first").show();

	if( window.location.hash != '' ) {

		var getTabHash = window.location.hash;

		if( $( getTabHash ).hasClass('tab_content') ) {

			$( tabid + " ul.tabs li").removeClass("active");
			$( tabid + ' ul.tabs li a[data-href="'+ getTabHash +'"]').parent('li').addClass("active");
			$( tabid + " .tab_content").hide();
			$( getTabHash + '.tab_content').show();

		}

	}

	$( tabid + " ul.tabs li").click(function() {    

		$( tabid + " ul.tabs li").removeClass("active");
		$(this).addClass("active");		
		$( tabid + " .tab_content").hide();
		var activeTab = $(this).find("a").attr("data-href");
		var $selectTab = $(this);
		$(activeTab).fadeIn(600,function(){
			if( $selectTab.parent().parent().hasClass("side-tabs") ) {
				if( $(window).width() < 768 ) { if( $().scrollTo ) { jQuery.scrollTo( activeTab , 400, {offset:-20} ); } }
			}            
		});
		return false;

	});

}


jQuery(document).ready(function($) {




	// ToolTips

	if ( $().tipsy ) { sTip=function(){ $('.stip').tipsy({gravity: 'n', fade:true}); }; sTip(); }


	

	// Top Socials

	topSocialExpander=function(){

		var windowWidth = $(window).width();

		if( windowWidth > 767 ) {

			$("#top-social li").show();

			$("#top-social li a").css({width: 40});

			$("#top-social li a").each(function() {
				$(this).removeClass('stip');
				$(this).removeAttr('title');
				$(this).removeAttr('original-title');
			})

			$("#top-social li a").hover(function() {
				var tsTextWidth = $(this).children('.ts-text').outerWidth() + 52;
				$(this).stop().animate({width: tsTextWidth}, 250, 'jswing');
			}, function() {
				$(this).stop().animate({width: 40}, 250, 'jswing');
			});

		} else {

			$("#top-social li").show();

			$("#top-social li a").css({width: 40});

			$("#top-social li a").each(function() {
				$(this).addClass('stip');
				var topIconTitle = $(this).children('.ts-text').text();
				$(this).attr('title', topIconTitle);
			});

			sTip();

			$("#top-social li a").hover(function() {
				$(this).stop().animate({width: 40}, 1, 'jswing');
			}, function() {
				$(this).stop().animate({width: 40}, 1, 'jswing');
			});

			if( windowWidth < 479 ) {

				$("#top-social li").hide();
				$("#top-social li").slice(0, 8).show();

			}

		}

	};
	topSocialExpander();

	$(window).resize(function() {
		topSocialExpander();
	});




	


	

	


});