$(function () {
	// Portfolio
	$(window).on('load', function () {
		var $container = $('.portfolioContainer');
		$container.isotope({
			filter: '*',
			animationOptions: {
				duration: 750,
				easing: 'linear',
				queue: false
			}
		});

		$('.portfolioFilter a').on('click', function () {
			$('.portfolioFilter .current').removeClass('current');
			$(this).addClass('current');

			var selector = $(this).attr('data-filter');
			$container.isotope({
				filter: selector,
				animationOptions: {
					duration: 750,
					easing: 'linear',
					queue: false
				}
			});
			return false;
		});
	});
	// backtotop js
	$('.backtotop').on('click', function () {
		$('html, body').animate({
			scrollTop: 0
		}, 1500);
	});

	//animation scroll js
	var html_body = $('html, body');
	$('.navbar a').on('click', function () {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				html_body.animate({
					scrollTop: target.offset().top - 0
				}, 1500);
				return false;
			}
		}
	});
	//pre loder
	$(window).on('load', function () {
		$('.loder').delay(1000).fadeOut(1000);

	});
	// smooth scroll js 
	$(window).scroll(function () {
		var scrolling = $(this).scrollTop();
		var stikey = $('.sticky-top');

		if (scrolling >= 100) {

			$(stikey).addClass("nav-bg");

		} else {

			$(stikey).removeClass("nav-bg");
		}
		if (scrolling > 50) {
			$('.backtotop').fadeIn(500);
		} else {
			$('.backtotop').fadeOut(500);
		}
	});
	// banner slider js
	$('.banner-main').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		speed: 500,
		fade: true,
		dots: false,
		arrows: false,
	});
	// news slider js
	$('.news-main').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 1000,
		dots: false,
		arrows: false,
		responsive: [
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
    },
			{
				breakpoint: 578,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				}
    },
			{
				breakpoint: 769,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				}
    },

  ]
	});
	// testimonial slider js
	$('.testimonial-main').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 1500,
		dots: false,
		arrows: true,
		nextArrow: '.move-right',
		prevArrow: '.move-left',
	});
});
