"use strict";function prealoader(){$("#loader").length&&($("#loader").fadeOut(),$("#loader-wrapper").delay(350).fadeOut("slow"),$("body").delay(350).css({overflow:"visible"}))}function removePlaceholder(){$("input,textarea").length&&$("input,textarea").each(function(){$(this).data("holder",$(this).attr("placeholder")),$(this).on("focusin",function(){$(this).attr("placeholder","")}),$(this).on("focusout",function(){$(this).attr("placeholder",$(this).data("holder"))})})}function BannerSlider(){var e=$("#theme-main-banner");e.length&&e.camera({height:"47%",pagination:!1,navigation:!1,thumbnails:!1,playPause:!1,pauseOnClick:!1,autoPlay:!0,autoAdvance:!0,mobileAutoAdvance:!0,hover:!1,overlayer:!0,loader:"none",minHeight:"860px",time:5500})}function masonaryBlog(){$(".blog-masonary").length&&$(".blog-masonary").masonry({itemSelector:".grid-item",columnWidth:".grid-sizer",percentPosition:!0})}function wowAnimation(){$(".wow").length&&new WOW({boxClass:"wow",animateClass:"animated",mobile:!0,live:!0,callback:function(e){},scrollContainer:null}).init()}function mixitupGallery(){$("#mixitUp-item").length&&$("#mixitUp-item").mixItUp()}function portfolioSlider(){var e=$(".portfolio-slider");e.length&&e.owlCarousel({animateOut:"slideOutLeft",loop:!0,nav:!1,dots:!1,autoplay:!0,autoplayTimeout:4e3,smartSpeed:1200,lazyLoad:!0,responsive:{0:{items:1},551:{items:2},768:{items:3},992:{items:3}}})}function testimonialSlider(){var e=$(".testimonial-slider");1==e.length&&e.owlCarousel({loop:!0,nav:!0,navText:["",""],dots:!1,autoplay:!0,autoplayTimeout:4e3,autoplaySpeed:1200,smartSpeed:1300,lazyLoad:!0,items:1})}function partnersLogo(){var e=$("#partner-logo");e.length&&e.owlCarousel({loop:!0,nav:!1,dots:!1,autoplay:!0,autoplayTimeout:3e3,autoplaySpeed:1600,lazyLoad:!0,singleItem:!0,responsive:{0:{items:1},550:{items:2},992:{items:4}}})}function CounterNumberChanger(){var e=$(".timer");e.length&&e.appear(function(){e.countTo()})}function scrollToTop(){$(".scroll-top").length&&($(window).on("scroll",function(){200<$(this).scrollTop()?$(".scroll-top").fadeIn():$(".scroll-top").fadeOut()}),$(".scroll-top").on("click",function(){return $("html, body").animate({scrollTop:0},1500),!1}))}function closeSuccessAlert(){var e=$(".closeAlert");e.length&&(e.on("click",function(){$(".alert-wrapper").fadeOut()}),e.on("click",function(){$(".alert-wrapper").fadeOut()}))}function stickyHeader(){var e;$(".theme-menu-wrapper").length&&(e=$(".theme-menu-wrapper"),190<=$(window).scrollTop()?e.addClass("fixed"):e.removeClass("fixed"))}function themeAccrodion(){$(".theme-accordion > .panel").length&&($(".theme-accordion > .panel").on("show.bs.collapse",function(e){$(this).find(".panel-heading").addClass("active-panel")}),$(".theme-accordion > .panel").on("hidden.bs.collapse",function(e){$(this).find(".panel-heading").removeClass("active-panel")}),$(".panel-heading a").on("click",function(e){$(this).parents(".panel").children(".panel-collapse").hasClass("in")&&e.stopPropagation()}))}function priceRanger(){$(".price-ranger").length&&($(".price-ranger #slider-range").slider({range:!0,min:0,max:1200,values:[99,1035],slide:function(e,a){$(".price-ranger .ranger-min-max-block .min").val("$"+a.values[0]),$(".price-ranger .ranger-min-max-block .max").val("$"+a.values[1])}}),$(".price-ranger .ranger-min-max-block .min").val("$"+$(".price-ranger #slider-range").slider("values",0)),$(".price-ranger .ranger-min-max-block .max").val("$"+$(".price-ranger #slider-range").slider("values",1)))}function productValue(){var a=$("#product-value");a.length&&($("#value-decrease").click(function(){var e=a.val()-1;e>=a.attr("min")&&a.val(e)}),$("#value-increase").click(function(){var e=+a.val()+1;e<=a.attr("max")&&a.val(e)}))}function productSlider(){var e=$(".related-product-slider");e.length&&e.owlCarousel({loop:!0,nav:!1,dots:!1,autoplay:!0,autoplayTimeout:4e3,autoplaySpeed:1e3,lazyLoad:!0,smartSpeed:1e3,responsive:{0:{items:1},551:{items:2},992:{items:3}}})}function youtubeVideo(){var e=$(".embed-video");e.length&&e.fitVids()}$("#customers-teams").owlCarousel({loop:!0,center:!0,items:3,margin:0,autoplay:!0,dots:!0,autoplayTimeout:4500,checkVisibility:!0,responsive:{0:{items:1},768:{items:2},1170:{items:3}}}),jQuery(document).on("ready",function(){jQuery,removePlaceholder(),BannerSlider(),wowAnimation(),mixitupGallery(),testimonialSlider(),portfolioSlider(),partnersLogo(),CounterNumberChanger(),scrollToTop(),closeSuccessAlert(),themeAccrodion(),priceRanger(),productValue(),productSlider(),youtubeVideo()}),jQuery(window).on("scroll",function(){jQuery,stickyHeader()}),jQuery(window).on("load",function(){jQuery,masonaryBlog(),prealoader()});