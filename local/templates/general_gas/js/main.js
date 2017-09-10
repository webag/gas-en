/***********************
 отправка формы в php BEGIN
***********************/
$(document).ready(function(){

	$(".ajax-form").on("submit", function(event) {
		var form = $(this);
		var send = true;
		event.preventDefault();

		$(this).find("[data-req='true']").each(function(){
			if ($(this).val() === "") {
				$(this).addClass('error');
				send = false;
			}
			if ($(this).is('select')){
				if ($(this).val() === null) {
					$(this).addClass('error');
					send = false;
				}
			}
			if ($(this).is('input[type="checkbox"]')){
				if ($(this).prop('checked') !== true) {
					$(this).addClass('error');
					send = false;
				}
			}
		});

		$(this).find("[data-req='true']").on('focus', function(){
			$(this).removeClass('error');
		});

		var form_data = new FormData(this);

		$("[data-label]").each(function () {
			var input_name = $(this).attr('name');
			var input_label__name = input_name + '_label';
			var input_label__value = $(this).data('label');
			form_data.append(input_label__name,input_label__value)
		});

		if (send === true) {
			$.ajax({
				type: "POST",
				async: true,
				url: "/send.php",
				cache: false,
				contentType: false,
				processData: false,
				data: form_data,
				success: (function(result) {
					console.log(result);
					$.fancybox.close();
					$.fancybox.open({src  : '#modal-thanks'});
					ga('send', 'event', 'otpravka', 'form');
					yaCounter45470613.reachGoal('thanks');
					setTimeout(function() {$.fancybox.close();},4500);
					form[0].reset();
				})
			});
		}
	});
});
/***********************
 отправка формы в php END
***********************/


/***********************
Input mask BEGIN
***********************/
jQuery(function($){
	$("input[type='tel']").mask("9 (999) 999-99-99");
});
/***********************
Input mask END
***********************/


/***********************
fancybox BEGIN
***********************/
function fancy_video_init() {
	$('.fancy-video').fancybox({
		fullScreen: false,
		thumbs: false,
		youtube: {
			controls : 1,
			showinfo : 0,
			autoplay: 1
		},
		onUpdate : function( instance, current ) {
			var width,
				height,
				ratio = 16 / 9,
				video = current.$content;
			if ( video ) {
				video.hide();
				width  = current.$slide.width() - 32;
				height = current.$slide.height() - 100;
				if ( height * ratio > width ) {
					height = width / ratio;
				} else {
					width = height * ratio;
				}
				video.css({
					width  : width,
					height : height
				}).show();
			}
		}
	});
}


$(document).ready(function(){
	$('.fancy').fancybox({
		fullScreen: false,
		slideShow: false,
		thumbs: false,
		transitionEffect : "slide",
		autoFocus : false,
		backFocus : false,
		animationDuration : 400
	});

	fancy_video_init();
});
/***********************
fancybox END
***********************/


/***********************
 Прокрутка к секциям BEGIN
***********************/
$(document).ready(function(){
	$('.scrollto').click(function () {
		var elementClick = $(this).attr("href");
		var local_offset = 0;
		if ($(this).data('scroll-offset') !== undefined){
			local_offset = $(this).data('scroll-offset');
		}
		var destination = $(elementClick).offset().top - local_offset;
		$('html,body').stop().animate({scrollTop:destination}, 1000);
		return false;
	});
});
/***********************
 Прокрутка к секциям END
***********************/


/***********************
 Mobile menu BEGIN
 ***********************/
$(document).ready(function(){
	$('.menu-btn').click(function() {
		$(this).toggleClass('active');
		$('.s-main-nav').toggleClass('opened');
	});

	$(document).on('click touchstart',function (e){
		var div = $(".s-main-nav,.menu-btn");
		if (!div.is(e.target) && div.has(e.target).length === 0){
			$('.s-main-nav').removeClass('opened');
			$('.menu-btn').removeClass('active');
		}
	});
});
/***********************
 Mobile menu END
 ***********************/


/***********************
 home slider BEGIN
 ***********************/
$(document).ready(function() {
	if ($('.home-slider').length) {
		var home_slider = $('.home-slider').flickity({
			pageDots: true,
			wrapAround: false,
			selectedAttraction: 0.02,
			friction: 0.3,
			adaptiveHeight: true,
			arrowShape: 'M75,12L39.7,50.8l34.8,37.1L62.9,99.9L16.9,51L63.1,0.1v0L75,12L75,12z',
			autoPlay: 5000,
			pauseAutoPlayOnHover: false
		});

		$(window).on('load', function () {
			home_slider.flickity('resize');
		});

		var flkty = home_slider.data('flickity');

		home_slider.on('select.flickity', function () {
			$('.home-slider-counter__current').text("0" + (flkty.selectedIndex + 1));
			$('.home-slider-counter__all').text("0" + (flkty.cells.length));
		});

		$('.home-slider-counter__current').text("0" + (flkty.selectedIndex + 1));
		$('.home-slider-counter__all').text("0" + (flkty.cells.length));

		var titles = $('.home-slide__title');
		var texts = $('.home-slide__subtitle');
		var texts2 = $('.home-slide__uptitle');
		var triggers = $('.home-slide__triggers');
		var btns = $('.home-slide .btn');
		if (device.desktop()) {
			home_slider.on('scroll.flickity', function (event, progress) {
				flkty.slides.forEach(function (slide, i) {
					var title = titles[i];
					var text = texts[i];
					var text2 = texts2[i];
					var trigger = triggers[i];
					var btn = btns[i];
					var x = ( slide.target + flkty.x ) * -1 / 2;
					var x2 = ( slide.target + flkty.x ) * -1 / 2.5;
					var x5 = ( slide.target + flkty.x ) * -1 / 1.5;
					var x3 = ( slide.target + flkty.x ) * -1 / 3;
					var x4 = ( slide.target + flkty.x ) * -1 / 4;
					text2.style.transform = 'translate3d(' + x5 + 'px,0,0)';
					title.style.transform = 'translate3d(' + x + 'px,0,0)';
					text.style.transform = 'translate3d(' + x2 + 'px,0,0)';
					trigger.style.transform = 'translate3d(' + x3 + 'px,0,0)';
					btn.style.transform = 'translate3d(' + x4 + 'px,0,0)';
				});
			});
		}

		// timer
		home_slider.find('.flickity-page-dots .dot').each(function () {
			$(this).append('<figure></figure>')
		});

		home_slider.on('select.flickity', function () {
			var current_slide_index = flkty.selectedIndex;
			home_slider.find('.flickity-page-dots .dot').eq(current_slide_index).addClass('timer').prevAll('.dot').addClass('past');
			home_slider.find('.flickity-page-dots .dot').eq(current_slide_index).nextAll('.dot').removeClass('past');
			var isPlaying = flkty.player.state === 'playing';
			if (!isPlaying) {
				home_slider.find('.flickity-page-dots').addClass('notimer');
			}
		});

		home_slider.on('pointerDown.flickity', function () {
			home_slider.find('.flickity-page-dots').addClass('notimer');
		})
		// timer
	}
});
/***********************
 home slider END
 ***********************/


/***********************
clients slider BEGIN
***********************/
$(document).ready(function() {
	var clients_slider = $('.clients-slider').flickity({
		pageDots: false,
		wrapAround: true,
		selectedAttraction: 0.02,
		friction: 0.3,
		prevNextButtons: false,
		cellAlign: 'center',
		autoPlay: 3000,
		imagesLoaded: true
	});
});
/***********************
clients slider END
***********************/


/***********************
 home_news_slider BEGIN
***********************/
function slider_pixel_perfect(slider) {
	var new_width = slider.parent().width();
	slider.width(new_width);
}

$(document).ready(function() {
	var home_news_slider = $('.home-news-slider').flickity({
		pageDots: true,
		wrapAround: true,
		selectedAttraction: 0.02,
		friction: 0.3,
		prevNextButtons: false,
		cellAlign: 'left'
	});

	slider_pixel_perfect($('.home-news-slider'));
	$(window).on('resize',function () {
		slider_pixel_perfect($('.home-news-slider'));
	});
});
/***********************
 home_news_slider END
***********************/


/***********************
video slider BEGIN
***********************/
$(window).on('load',function () {
	if ($('.video-slider').length){
		$.ajax({
			url: "/ajax-video.php",
			success: (function(result) {
				$('.video-slider').append(result);
				youtube_videos();
			})
		});
	}

	if ($('.js-home-info-video-place').length){
		$.ajax({
			url: "/ajax-video_home-info.php",
			success: (function(result) {
				$('.js-home-info-video-place').append(result);
				fancy_video_init();
			})
		});
	}
});

function youtube_videos() {
	var video_slider = $('.video-slider').flickity({
		pageDots: false,
		wrapAround: false,
		selectedAttraction: 0.02,
		friction: 0.3,
		prevNextButtons: true,
		cellAlign: 'left'
	});

	video_slider.on( 'select.flickity', function() {
		video_slider.find('.video-slide.is-selected').removeClass('past');
		video_slider.find('.video-slide.is-selected').prevAll('.video-slide').addClass('past');
		video_slider.find('.video-slide.is-selected').nextAll('.video-slide').removeClass('past');
	});

	video_slider.on('staticClick.flickity', function(event, pointer, cellElement, cellIndex) {

		if ( !cellElement ) {
			return;
		}
		var video_url = $(cellElement).find('.video-slide__link').data('videolink');
		console.log(video_url);
		$.fancybox.open({
			src  : video_url,
			opts: {
				fullScreen: false,
				thumbs: false,
				youtube: {
					controls : 1,
					showinfo : 0,
					autoplay: 1
				},
				onUpdate : function( instance, current ) {
					var width,
						height,
						ratio = 16 / 9,
						video = current.$content;
					if ( video ) {
						video.hide();
						width  = current.$slide.width() - 32;
						height = current.$slide.height() - 100;
						if ( height * ratio > width ) {
							height = width / ratio;
						} else {
							width = height * ratio;
						}
						video.css({
							width  : width,
							height : height
						}).show();
					}
				}
			}
		});

	});
};
/***********************
video slider END
***********************/


/***********************
Geo BEGIN
***********************/
var geomap;
$(window).on('load',function() {
	if ($('#geomap').length) {
		var locations = locations_from_admin;
		var markers = [];
		var normalIcon = {
			url: '/local/templates/general_gas/img/pin.svg',
			scaledSize: new google.maps.Size(26, 34)
		};
		var activeIcon = {
			url: '/local/templates/general_gas/img/pin-big.svg',
			scaledSize: new google.maps.Size(30, 40)
		};
		var mapOptions = {
			center: new google.maps.LatLng(locations[0][1], locations[0][2]),
			zoom: 4,
			disableDefaultUI: true,
			zoomControl: true,
			zoomControlOptions: {
				position: google.maps.ControlPosition.LEFT_CENTER
			},
			scrollwheel: false,
			styles: [{ "featureType": "administrative", "elementType": "all", "stylers": [{ "saturation": "-100"}]}, { "featureType": "administrative", "elementType": "labels.text", "stylers": [{ "lightness": "49"}, { "weight": "1"}, { "gamma": "1"}]}, { "featureType": "administrative.country", "elementType": "geometry.stroke", "stylers": [{ "gamma": "1"}, { "lightness": "67"}, { "saturation": "0"}, { "visibility": "on"}]}, { "featureType": "administrative.province", "elementType": "all", "stylers": [{ "visibility": "off"}]}, { "featureType": "landscape", "elementType": "all", "stylers": [{ "saturation": -100}, { "lightness": 65}, { "visibility": "on"}]}, { "featureType": "poi", "elementType": "all", "stylers": [{ "saturation": -100}, { "lightness": "50"}, { "visibility": "simplified"}]}, { "featureType": "road", "elementType": "all", "stylers": [{ "saturation": "-100"}]}, { "featureType": "road.highway", "elementType": "all", "stylers": [{ "visibility": "simplified"}]}, { "featureType": "road.arterial", "elementType": "all", "stylers": [{ "lightness": "30"}]}, { "featureType": "road.local", "elementType": "all", "stylers": [{ "lightness": "40"}]}, { "featureType": "transit", "elementType": "all", "stylers": [{ "saturation": -100}, { "visibility": "simplified"}]}, { "featureType": "water", "elementType": "geometry", "stylers": [{ "hue": "#ffff00"}, { "lightness": -25}, { "saturation": -97}]}, { "featureType": "water", "elementType": "geometry.fill", "stylers": [{ "lightness": "-7"}, { "gamma": "1.26"}, { "saturation": "-53"}, { "color": "#e0e0e0"}]}, { "featureType": "water", "elementType": "labels", "stylers": [{ "lightness": -25}, { "saturation": -100}]}]
		};
		var marker, i;

		geomap = new google.maps.Map(document.getElementById("geomap"), mapOptions);

		for (i = 0; i < locations.length; i++) {
			marker = new google.maps.Marker({
				position: new google.maps.LatLng(locations[i][1], locations[i][2]),
				map: geomap,
				icon: normalIcon,
				optimized: false,
				title: locations[i][0],
				zIndex: 1
			});
			markers.push(marker);
			google.maps.event.addListener(marker, 'click', (function (marker, i) {
				return function () {
					for (var j = 0; j < markers.length; j++) {
						markers[j].setIcon(normalIcon);
						markers[j].setZIndex(1);
					}
					this.setIcon(activeIcon);
					this.setZIndex(2);
					$('.geo-item').removeClass('active').eq(i).addClass('active');
					geomap.panTo(this.getPosition());
				}
			})(marker, i));
		}

		$(window).on('resize', function () {
			var currCenter = geomap.getCenter();
			google.maps.event.trigger(geomap, 'resize');
			geomap.setCenter(currCenter);
		});

		markers[0].setIcon(activeIcon);
		$('.geo-item').eq(0).addClass('active');
	}
});
/***********************
Geo END
***********************/


/***********************
Simple map BEGIN
***********************/
$(window).on('load',function() {
	if ($('.js-simple-map').length) {

		$('.js-simple-map').each(function () {
			var current_coords_x = $(this).data('coord-x');
			var current_coords_y = $(this).data('coord-y');

			var normalIcon = {
				url: '/local/templates/general_gas/img/pin-big.svg',
				scaledSize: new google.maps.Size(26, 34)
			};
			var mapOptions = {
				center: new google.maps.LatLng(current_coords_x, current_coords_y),
				zoom: 18,
				disableDefaultUI: true,
				zoomControl: true,
				zoomControlOptions: {
					position: google.maps.ControlPosition.LEFT_CENTER
				},
				scrollwheel: false,
				styles: [{ "featureType": "administrative", "elementType": "all", "stylers": [{ "saturation": "-100"}]}, { "featureType": "administrative", "elementType": "labels.text", "stylers": [{ "lightness": "49"}, { "weight": "1"}, { "gamma": "1"}]}, { "featureType": "administrative.country", "elementType": "geometry.stroke", "stylers": [{ "gamma": "1"}, { "lightness": "67"}, { "saturation": "0"}, { "visibility": "on"}]}, { "featureType": "administrative.province", "elementType": "all", "stylers": [{ "visibility": "off"}]}, { "featureType": "landscape", "elementType": "all", "stylers": [{ "saturation": -100}, { "lightness": 25}, { "visibility": "on"}]}, { "featureType": "poi", "elementType": "all", "stylers": [{ "saturation": -100}, { "lightness": "50"}, { "visibility": "simplified"}]}, { "featureType": "road", "elementType": "all", "stylers": [{ "saturation": "-100"}]}, { "featureType": "road.highway", "elementType": "all", "stylers": [{ "visibility": "simplified"}]}, { "featureType": "road.arterial", "elementType": "all", "stylers": [{ "lightness": "30"}]}, { "featureType": "road.local", "elementType": "all", "stylers": [{ "lightness": "40"}]}, { "featureType": "transit", "elementType": "all", "stylers": [{ "saturation": -100}, { "visibility": "simplified"}]}, { "featureType": "water", "elementType": "geometry", "stylers": [{ "hue": "#ffff00"}, { "lightness": -25}, { "saturation": -97}]}, { "featureType": "water", "elementType": "geometry.fill", "stylers": [{ "lightness": "-7"}, { "gamma": "1.26"}, { "saturation": "-53"}, { "color": "#e0e0e0"}]}, { "featureType": "water", "elementType": "labels", "stylers": [{ "lightness": -25}, { "saturation": -100}]}]
			};

			var simple_map = new google.maps.Map($(this)[0], mapOptions);

			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(current_coords_x, current_coords_y),
				map: simple_map,
				icon: normalIcon,
				optimized: false
			});

			$(window).on('resize', function () {
				var currCenter = simple_map.getCenter();
				google.maps.event.trigger(simple_map, 'resize');
				simple_map.setCenter(currCenter);
			});
		});

	}
});
/***********************
Simple map END
***********************/


/***********************
Line animations BEGIN
***********************/
$(document).ready(function() {
	if ($('#video-lines').length){
		new Vivus('video-lines', {
			duration: 300,
			type: 'delayed',
			delay: 150,
			animTimingFunction: Vivus.EASE_OUT,
			pathTimingFunction: Vivus.EASE_OUT
		});
	}
	if ($('#callback-lines').length){
		new Vivus('callback-lines', {
			duration: 400,
			type: 'delayed',
			delay: 200,
			animTimingFunction: Vivus.EASE_OUT,
			pathTimingFunction: Vivus.EASE_OUT
		});
	}
	if ($('#econom-lines').length){
		new Vivus('econom-lines', {
			duration: 300,
			type: 'delayed',
			delay: 150,
			animTimingFunction: Vivus.EASE_OUT,
			pathTimingFunction: Vivus.EASE_OUT
		});
	}
	if ($('#saleinfo-lines').length){
		new Vivus('saleinfo-lines', {
			duration: 300,
			type: 'delayed',
			delay: 150,
			animTimingFunction: Vivus.EASE_OUT,
			pathTimingFunction: Vivus.EASE_OUT
		});
	}
	if ($('#balon-lines').length){
		new Vivus('balon-lines', {
			duration: 300,
			type: 'delayed',
			delay: 150,
			animTimingFunction: Vivus.EASE_OUT,
			pathTimingFunction: Vivus.EASE_OUT
		});
	}
});
/***********************
Line animations END
***********************/


/***********************
 iphone Counter BEGIN
 ***********************/
function counter_update() {
	var today = new Date();
	var sale_date;
	sale_date = new Date(today.getFullYear(), today.getMonth(), today.getDate()+6, 0);

	var timespan = countdown(today, sale_date, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);

	$('.iphone-counter__days').text(timespan.days);
	$('.iphone-counter__hours').text(timespan.hours);
	$('.iphone-counter__minutes').text(timespan.minutes);
	$('.iphone-counter__seconds').text(timespan.seconds);
}

$(document).ready(function() {
	setInterval(function() {
		counter_update()
	}, 1000);
});
/***********************
 iphone Counter END
 ***********************/


/**************************************************
 Custom File Input
 ***************************************************/
$(document).ready(function() {
	$( '.style-fileinput' ).each(function() {
		var $input = $(this).find('input'),
			$label = $(this).find('.style-fileinput__text'),
			$labelVal = $label.html();

		$input.on( 'change', function( e ){
			var fileName = '';

			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else if( e.target.value )
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				$label.html( fileName );
			else
				$label.html( $labelVal );
		});

		// Firefox bug fix
		$input
			.on( 'focus', function(){ $input.addClass( 'has-focus' ); })
			.on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
	});
});
/**************************************************
 End Custom File Input
 ***************************************************/


/***********************
Waypoints BEGIN
***********************/
$(document).ready(function() {
	$('.wp').waypoint(function (direction) {
		$(this.element).toggleClass('animated');
	}, {
		offset: '85%'
	});

	$('.basecomps--anim').waypoint(function (direction) {
		$(this.element).toggleClass('animated');
	}, {
		offset: '50%'
	});
});
/***********************
Waypoints END
***********************/


/***********************
Cases slider BEGIN
 ***********************/
$(document).ready(function() {
	var cases_slider = $('.cases-slider').flickity({
		pageDots: false,
		wrapAround: false,
		contain: true,
		selectedAttraction: 0.02,
		friction: 0.3,
		cellAlign: 'center',
		imagesLoaded: true,
		initialIndex: 1,
		groupCells: true
	});
});
/***********************
Cases slider END
 ***********************/


/***********************
Team slider BEGIN
 ***********************/
$(document).ready(function() {
	var team_slider = $('.team-slider').flickity({
		pageDots: false,
		wrapAround: true,
		contain: true,
		selectedAttraction: 0.02,
		friction: 0.3,
		cellAlign: 'center',
		imagesLoaded: true,
		initialIndex: 2,
		groupCells: true
	});
});
/***********************
Team slider END
 ***********************/


/***********************
Tabs BEGIN
***********************/
$(document).ready(function() {
	$('.tabs-section__links a').on('click touch',function (e) {
		e.preventDefault();
		var tab_to_select = $(this).index();
		var parent = $(this).parents('.tabs-section');

		parent.find('.tabs-section__links a').removeClass('active');
		$(this).addClass('active');

		parent.find('.tabs-section__content').removeClass('active');
		parent.find('.tabs-section__content').eq(tab_to_select).addClass('active');
	})
});
/***********************
Tabs END
***********************/


/***********************
lp table BEGIN
***********************/
$(document).ready(function() {
	if (($(window).innerWidth() > 1024) && ($(".lp-table").length)){
		$(window).on('scroll',function () {
			var fixed_header = $('.lp-table__header--fixed');
			var scrollTop = $(this).scrollTop();
			var table_header_offset = $('.lp-table__headerwrap').offset().top;
			var table_height = $('.lp-table').outerHeight();
			var lp_nav_height = 0;
			if ($('.s-main-nav__wrapforfix').length){
				lp_nav_height = $('.s-main-nav__wrapforfix').outerHeight();
			}

			if (scrollTop >= table_header_offset - lp_nav_height){
				fixed_header.addClass('is-fixed');
				fixed_header.css('top',lp_nav_height);
			} else {
				fixed_header.removeClass('is-fixed');
				fixed_header.css('top',0);
			}

			if (scrollTop >= table_header_offset + table_height - lp_nav_height){
				fixed_header.addClass('is-hidden');
			} else {
				fixed_header.removeClass('is-hidden');
			}
		});
	}

	$('.lp-table__full').on('click',function (e) {
		e.preventDefault();
		$('.lpt-item--hidden').slideToggle();

		var link_text = $(this).text();
		$(this).text(
			link_text == "View full table" ? "Hide table" : "View full table");
	})
});
/***********************
lp table END
***********************/


/***********************
Lp nav BEGIN
***********************/
$(document).ready(function() {

	if ($(window).innerWidth() > 768){
		$('.s-main-nav--lp .container a[href^="#"]').each(function () {
			var target = $(this).attr('href');
			$(target).addClass('s__nav-section');
		});
		$(window).on('scroll',function () {
			lp_nav_fix_anchors();
		});
		lp_nav_fix_anchors();
	}

	if ($(window).innerWidth() > 768){
		$(window).on('scroll',function () {
			lp_nav_fix();
		});
		lp_nav_fix();
	}

});

function lp_nav_fix_anchors() {
	if ($(".s-main-nav--lp").length) {
		var nav_block = $('.s-main-nav--lp');
		var scrollTop = $(window).scrollTop();
		var nav_block_offset = $('.s-main-nav__wrapforfix').offset().top;

		if (scrollTop >= nav_block_offset) {
			nav_block.addClass('is-fixed');
		} else {
			nav_block.removeClass('is-fixed');
		}

		var w_height = $(window).height();
		$('.s-main-nav--lp .container a').removeClass('active');
		$('.s__nav-section').each(function () {
			var section_top = $(this).offset().top;
			var section_h = $(this).outerHeight();

			if ((scrollTop >= section_top - w_height / 2) && (scrollTop < section_top + section_h - 80)) {
				var section_index = $(this).index('.s__nav-section');
				$('.s-main-nav--lp .container a').eq(section_index).addClass('active');
			}
		});
	}
}

function lp_nav_fix() {
	if ($(".s-main-nav--fix").length) {
		var nav_block = $('.s-main-nav--fix');
		var scrollTop = $(window).scrollTop();
		var nav_block_offset = $('.s-main-nav__wrapforfix').offset().top;

		if (scrollTop >= nav_block_offset) {
			nav_block.addClass('is-fixed');
		} else {
			nav_block.removeClass('is-fixed');
		}
	}
}
/***********************
Lp nav END
***********************/


/***********************
 UTM TO FORMS BEGIN
***********************/
$(document).ready(function(){

	var params = window
		.location
		.search
		.replace('?','')
		.split('&')
		.reduce(
			function(p,e){
				var a = e.split('=');
				p[ decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
				return p;
			},
			{}
		);

	$(".ajax-form").each(function(){
		$(this).append(
			'<input type="hidden" name="utm_campaign" value="'+(params.utm_campaign === undefined ? "" : params.utm_campaign)+'">'+
			'<input type="hidden" name="utm_source" value="'+(params.utm_source === undefined ? "" : params.utm_source)+'">'+
			'<input type="hidden" name="utm_content" value="'+(params.utm_content === undefined ? "" : params.utm_content)+'">'+
			'<input type="hidden" name="utm_medium" value="'+(params.utm_medium === undefined ? "" : params.utm_medium)+'">'+
			'<input type="hidden" name="utm_term" value="'+(params.utm_term === undefined ? "" : params.utm_term)+'">'
		);
	});

});
/***********************
 UTM TO FORMS END
***********************/


/***********************
 filter-show-mob BEGIN
***********************/
$(document).ready(function() {
	$('.filter-show-mob').on('click touchstart',function (e) {
		e.preventDefault();
		$('.filter-block').slideToggle();
		$(this).toggleClass('is-opened');
	})
});
/***********************
 filter-show-mob END
***********************/


/***********************
Fixer BEGIN
***********************/
$(window).on('load', function() {
	var fixed_block = $('.fixed-block');
	if ($(window).innerWidth()>680) {
		fixed_block.fixer({
			gap: 32
		});
	}
	$(this).trigger('scroll');
});

$(window).resize(function() {
	var fixed_block = $('.fixed-block');
	fixed_block.width(fixed_block.parent().width());
});
/***********************
Fixer END
***********************/


/***********************
Table wrapper BEGIN
***********************/
$(document).ready(function() {
	$('.user-content table').wrap('<div class="table-wrapper"></div>');
});
/***********************
Table wrapper END
***********************/


/***********************
 Fitvids BEGIN
 ***********************/
$(document).ready(function(){
	$(".user-content").fitVids();
});
/***********************
 Fitvids END
 ***********************/
