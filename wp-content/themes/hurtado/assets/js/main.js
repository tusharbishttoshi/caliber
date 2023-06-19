/* -----------------------------------------------------------------------------



File:           JS Core
Version:        1.0
Last change:    00/00/00 
-------------------------------------------------------------------------------- */
(function($) {

	"use strict";
	
	function handlePreloader() {
		if($('#preloader').length){
			$('#preloader').delay(200).fadeOut(500);
		}
	}
	
	var HomeLand = {
		init: function() {
			this.Basic.init();  
		},

		Basic: {
			init: function() {
				this.BackgroundImage();
				this.Animation();
				this.HeaderFunction(); 
				this.ThemeCarousel();
				this.Accordion(); 
				this.NiceSelect(); 
				this.CustomRadio(); 
				this.RangeSlider(); 
				this.StarRating();
				this.ContainerToggle();
				this.CountDown(); 
				this.HeroAnimation(); 
				this.Odometer(); 
				this.ScrollTop();
				this.VideoPopup();
			},

			BackgroundImage: function (){
				$('[data-background]').each(function() {
					$(this).css('background-image', 'url('+ $(this).attr('data-background') + ')');
				});
			},

            Animation: function (){
				$(window).on("load", function(){
					if($('.wow').length){
						new WOW({
							offset: 100,
							mobile: true
						}).init()
					}
				});
			},

			HeaderFunction: function (){
				$(".mobile-hamburger").on("click", function(){
					$(".body-overlay").addClass("overlay-on");
					setTimeout(function(){
						$(".hl-mobile-menu").addClass("menu-open"); 
					}, 500);
					
				}); 

				$(".hl-mobile-menu-close").on("click", function(){
					$(".hl-mobile-menu").removeClass("menu-open"); 
					setTimeout(function(){
						$(".body-overlay").removeClass("overlay-on"); 
					}, 500);
				});

				$(".hl-mobile-menu ul li.has-submenu a").each(function(){
					$(this).on("click", function(){
						$(this).siblings('ul').slideToggle();
					});
				});
			},

			ThemeCarousel: function (){
				//Home2 Hero Slider 
				$(".hl2-hero-slider").slick({
					slidesToShow: 1, 
					fade: true,
					autoplay: true,
					dots: true, 
					arrows: false,
				});
				//Brand Slider 
				$(".hl2-hero-slider-two").slick({
					slidesToShow: 1, 
					fade: true,
					autoplay: true,
					nextArrow: '<button type="button" class="slick-next"><i class="fas fa-arrow-right"></i></button>',
					prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
				});
				//Brand Slider 
				$(".hl-brand-slider").slick({
					slidesToShow: 4, 
					autoplay: true,
					nextArrow: '<button type="button" class="slick-next"><i class="fas fa-arrow-right"></i></button>',
					prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
					responsive: [
						{
							breakpoint: 1200, 
							settings: {
								slidesToShow: 3,
							}
						}, 
						{
							breakpoint: 768,
							settings: {
								slidesToShow: 2,
							}
						}, 
						{
							breakpoint: 480, 
							settings: {
								slidesToShow: 1,
							}
						}
					]
				});

				//Feedback Slider 
				$(".hl-feedback-slider").slick({
					slidesToShow: 1, 
					autoplay: true, 
					arrows: false, 
					dots: true,
				});

				//Properties Slider 
				var hl3Properties = $(".hl3-properties-slider").each(function(){
					var ChildrenProperties = $(this).children().length;
					if( ChildrenProperties > 3 ) {
						$(this).slick({
							slidesToShow: 4, 
							autoplya: true,
							dots: true, 
							arrows: false,
							slidesToScroll: 2,
							responsive: [
								{
									breakpoint: 992, 
									settings: {
										slidesToShow: 2,
									}
								}, 
								{
									breakpoint: 575, 
									settings: {
										slidesToShow: 1,
									}
								}
							]
						});
					}
				});

				//Location Slider 
				$(".hl3-location-slider").slick({
					autoplay: true, 
					dots: true, 
					arrows: false, 
					slidesToShow: 4, 
					slidesToScroll: 2,
					responsive: [
						{
							breakpoint: 1200, 
							settings: {
								slidesToShow: 3, 
							}
						}, 
						{
							breakpoint: 992, 
							settings: {
								slidesToShow: 2,
							}
						}, 
						{
							breakpoint: 576, 
							settings: {
								slidesToShow: 1,
							}
						}
					]
				});

				$(".hl3-feedback-slider").slick({
					autoplay: true, 
					dots: true, 
					arrows: false, 
					slidesToShow: 1,
				});

				$(".hl3-blog-slider").slick({
					autoplay: true, 
					dots: true,
					arrows: false, 
					slidesToShow: 3,
					slidesToScroll: 2,
					responsive: [
						{
							breakpoint: 992, 
							settings: {
								slidesToShow: 2,
							}
						}, 
						{
							breakpoint: 768, 
							settings: {
								slidesToShow: 1,
							}
						}
					]
				});

			},

			Accordion: function (){
				$("#hl-accordion .accordion-header a").each(function(){
					$(this).on("click", function(){
						$(this).parents(".accordion").find(".accordion-item.active").removeClass("active"); 
						$(this).parents(".accordion-item").addClass("active");
					}); 
				}); 
				
				//Floor Plan Accrodion 
				$("#floor_plan_accordion .accordion-header a").each(function(){
					$(this).on("click", function(){
						$(this).parents(".accordion").find(".accordion-item.active").removeClass("active"); 
						$(this).parents(".accordion-item").addClass("active");
					}); 
				});

				//Feature Accrodion 
				$(".hl3-feature-bottom .accordion-item h6 a").each(function(){
					$(this).on("click", function(){
						$(this).parents(".accordion").find(".accordion-item.active").removeClass("active"); 
						$(this).parents(".accordion-item").addClass("active");
					}); 
				});

			}, 
			NiceSelect: function (){
				$('select').niceSelect();
				$('.input-images').imageUploader();
			},

			CustomRadio: function (){
				$(".checkbox-widget form label").each(function(){
					$(this).on("click", function(){
						$(this).parent('form').find("label.active").removeClass("active"); 
						$(this).addClass("active");
					})					
				});
			},
			RangeSlider: function (){
				$( "#slider-range" ).slider({
					range: true,
					min: 0,
					max: 500,
					values: [ 75, 300 ],
					slide: function( event, ui ) {
					  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
					}
				});
				$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );
			}, 
			StarRating: function (){
				$(".rating-left ul li input").each(function(){
					$(this).on("change", function(){

						var ServiceRatingString = $('input[name="service-rating"]').val();  
						var QualityRatingString = $('input[name="quality-rating"]').val();
						var PriceRatingString = $('input[name="price-rating"]').val();
						var LocationRatingString = $('input[name="location-rating"]').val();

						var ServiceRating = parseInt(ServiceRatingString);
						var QualityRating = parseInt(QualityRatingString);
						var PriceRating = parseInt(PriceRatingString);
						var LocationRating = parseInt(LocationRatingString);
						
						var AverageScrore = (ServiceRating + QualityRating + PriceRating + LocationRating) / 4; 
						
						$(".average-rating h3").text(AverageScrore);
						$(".average-rating input").val(AverageScrore);


					})
				})
			}, 
			ContainerToggle: function (){
				$(".collapse-btn").each(function(){
					$(this).on("click", function(e){
						e.preventDefault();
						$(this).parent().find(".collapse-container").slideToggle();
					});
				});
			}, 
			CountDown: function (){
				var dateContainer = $(".countdown"); 
				if(dateContainer.length){
					var date = $(".countdown").data('date'); 
					$('.countdown').downCount({
						date: date,
						offset: +6
					});
				}
			},
			HeroAnimation: function (){
				$(window).on("load", function(){
					$(".hl3-hero-contents").addClass("active-animation");
				});
				
			}, 
			Odometer: function (){

				if($(".odometer").length) {
					$(".odometer").appear(); 
					$(document.body).on("appear", ".odometer", function(e){
						var odometer = $(".odometer"); 
						odometer.each(function(){
							var dataValue = $(this).attr('data-value'); 
							$(this).html(dataValue);
						});
					});
				}

			}, 

			ScrollTop: function (){

				var progressPath = document.querySelector('.progress-wrap path');
				var pathLength = progressPath.getTotalLength();

				progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
				progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
				progressPath.style.strokeDashoffset = pathLength;
				progressPath.getBoundingClientRect();
				progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';

				var updateProgress = function () {
				var scroll = $(window).scrollTop();
				var height = $(document).height() - $(window).height();
				var progress = pathLength - scroll * pathLength / height;
				progressPath.style.strokeDashoffset = progress;
				};

				updateProgress();

				$(window).scroll(updateProgress);

				var offset = 50;
				var duration = 550;

				jQuery(window).on('scroll', function () {
				if (jQuery(this).scrollTop() > offset) {
					jQuery('.progress-wrap').addClass('active-progress');
				} else {
					jQuery('.progress-wrap').removeClass('active-progress');
				}
				});

				jQuery('.progress-wrap').on('click', function (event) {
				event.preventDefault();
				jQuery('html, body').animate({ scrollTop: 0 }, duration);
				return false;
				});
			}, 

			VideoPopup: function (){
				$(".video-popup").magnificPopup({
					type: 'iframe', 
					iframe: {
						patterns: {
						  youtube: {
							index: 'youtube.com/',
							id: 'v=', 
							src: 'https://www.youtube.com/embed/%id%?autoplay=1' 
						  },
						},
					  }
				});
			}
		}	
	};
	jQuery(document).ready(function (){
		HomeLand.init();
	});
	
	jQuery(window).on('load', function() {
		handlePreloader();
	});

})(window.jQuery);
