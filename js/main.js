$(document).ready(function(){

	$('.div-table .table-toggle').click(function(){
		$('.div-table .table-toggle').removeClass("active");
		$(this).toggleClass("active");
	});
	$('.greenBtns button').click(function(){
		$('.greenBtns button').removeClass("active");
		$(this).toggleClass("active");
	});
	$('.characteristic').click(function(){
		$('.characteristic-tables').css('display', 'flex');
		$('.recommendations-tables').css('display', 'none');
	});
	$('.recommendations').click(function(){
		$('.recommendations-tables').css('display', 'flex');
		$('.characteristic-tables').css('display', 'none');
	});
	$('.delivery-buttons button').click(function(){
		$('.delivery-buttons button').removeClass("active");
		$(this).toggleClass("active");
	})
	$('.pay-buttons button').click(function(){
		$('.pay-buttons button').removeClass("active");
		$(this).toggleClass("active");
	})

	$('.product-close').click(function(){
		$(this).parent().parent().hide();
	});
	$('.clearBtn').click(function(){
		$('.product-row').hide();
	})

	$('.inc').click(function () {
		var $input = $(this).parent().find('input');
		$input.val(parseInt($input.val()) + 1);
		$input.change();
		return false;
	});
	$('.dec').click(function () {
		var $input = $(this).parent().find('input');
		var count = parseInt($input.val()) - 1;
		count = count < 1 ? 1 : count;
		$input.val(count);
		$input.change();
		return false;
	});

	$(function() {
		$(window).scroll(function() {
			if($(this).scrollTop() >= 300) {
				$('#toTop').fadeIn();
			} else {
				$('#toTop').fadeOut();
			}
		});
		$('#toTop').click(function() {
			$('body,html').animate({scrollTop:0},300);
		});
	});

	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');
		$('.mob-nav').toggleClass('nav-open');
	});

	$('.redArrow').click(function(){
		$(this).toggleClass('redOpen');
		$(this).parent().parent().toggleClass('liOpen');
		$(this).parent().next().slideToggle('200');
	});



	$('.slider-news').slick({
		infinite: false,
		slidesToShow: 2,
		slidesToScroll: 1,
		arrows: true,
		prevArrow: '.slider-news-prev',
		nextArrow: '.slider-news-next',
		dots: true,
		dotsClass: "my-dots",
		autoplay: true,
  		autoplaySpeed: 5000,
  		responsive: [
			{
				breakpoint: 960,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});
	$('.slider-product').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		prevArrow: '.slider-for-product-prev',
		nextArrow: '.slider-for-product-next',
		asNavFor: '.slider-for-product',
		responsive: [
			{
				breakpoint: 960,
				settings: {
					arrows: false,
				}
			}
		]
	});
	$('.slider-for-product').slick({
		infinite: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		swipeToSlide: true,
		focusOnSelect: true,
		arrows: true,
		prevArrow: '.slider-for-product-prev',
		nextArrow: '.slider-for-product-next',
		asNavFor: '.slider-product',
		responsive: [
			{
				breakpoint: 960,
				settings: {
					arrows: false,
				}
			}
		]
	});
	$('.slider-sertificates').slick({
		infinite: false,
		slidesToShow: 5,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		swipeToSlide: true,
		responsive: [
			{
				breakpoint: 6000,
				settings: "unslick",
			},
			{
				breakpoint: 960,
				settings: {
					dots: true,
					dotsClass: "my-dots",
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: true,
  					autoplaySpeed: 5000,
				}
			}
		]
	});


});
