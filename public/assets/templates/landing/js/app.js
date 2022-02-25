var conf = {};
var project = {
    author: "Mebrouki amine",
    pseudo: "Daproduction",
    website: "http://www.da-js.org",
    contact: {
        mail: "contact@da-js.org",
        fb: "https://www.facebook.com/amine.mebrouki.9",
        linkedin: "https://www.linkedin.com/in/daproduction/",
        twitter: null
    },
    project: "CNAC",
    version: "1.0.0",
    reales : "not yet",
    created_at: "15/09/2019",
    updated_at: "15/09/2019"
}
$(function () {
    conf = {
        author: true,
        light: false,
        homeModal: false,
        fixedNav:true,
        helpBox:false,
        toTop:true,
        modalHome:false,
        fixednav: true,
        slideNav:false,
        'popup': {
            'display': true,
            'delay': 300
        },
        reseaux: 'http://192.168.5.15/json/cnac_address.json',
        topColors: false,
    }
    if (conf.topColors) {
        $('.lines').show();
    }
    if (conf.popup.display) {
        if (!sessionStorage.getItem('popupMTESS')) {
            sessionStorage.setItem('popupMTESS', 'show');
            $('.popup_container').delay(conf.popup.delay).fadeIn();
            $('.popup_content').addClass('bounceIn');
            $('body').css('overflow', 'hidden');
        } else if (sessionStorage.getItem('popupMTESS') == 'show') {
            $('.popup_container').delay(conf.popup.delay).fadeIn();
            $('.popup_content').addClass('bounceIn');
            $('body').css('overflow', 'hidden');
        }
        $('.clear_popup').on('click', function (e) {
            e.preventDefault();
            sessionStorage.setItem('popupMTESS', 'hide');
            $('.popup_container').fadeOut();
            $('.popup_content').removeClass('bounceIn');
            $('body').css('overflow', 'auto');
        });
    }
    function displayInfo() {
        console.log("*=========== Project Info =========/");
        console.log("%c|  Developed by : " + project.author, styling);
        console.log("|  Pseudo: " + project.pseudo);
        console.log("|  Website: " + project.website);
        console.log("|  Contact: ");
        console.log("|      -> Mail: " + project.contact.mail);
        console.log("|      -> Facebook: " + project.contact.fb);
        console.log("|      -> linkedin: " + project.contact.linkedin);
        console.log("|      -> Twitter: " + project.contact.twitter);
        console.log("|  Project Name: " + project.project);
        console.log("|  Version: " + project.version);
        console.log("|  Project Name: " + project.project);
        console.log("|  Created at: " + project.created_at);
        console.log("|  Realesed at: " + project.reales);
        console.log("|  Updated at: " + project.updated_at);
        console.log("*==================================/");
    }
    var styling = "font-weight: bold; font-size: 50px;color: darkorange;";
    if(conf.author){
        displayInfo();
    }
    return conf;
});

$(function () {
    if (conf.slideNav) {
        if ($(".fixednav-container").length) {
            var container = $(".fixednav-container");
            var button = $(".fixednav-container span");
            var open = true;
            button.on("click", function () {
                console.log("click");
                if (open) {
                    container.animate({
                        right: (-1 * (container.width() + 15)) + "px"
                    });
                    open = !open;
                    button.addClass("fa-angle-double-left").removeClass("fa-angle-double-right");
                } else {
                    container.animate({
                        right: 0
                    });
                    open = !open;
                    button.addClass("fa-angle-double-right").removeClass("fa-angle-double-left");
                }
            });
        }
    }
});
//$(function(){
//	//console.log("hello");
//	$("#search-wilaya").on("keyup", function(){
//		var search = $("#search-wilaya").val();
//		var regex = new RegExp(search, 'i');
//		var output;
		
//		if(search.length < 3)
//		{
//			$("#output").html("<tr class='text-center'>Aucun Resultat</tr>");
//		}else{
//			$.getJSON(conf.reseaux,function(data)
//			{
//				$.each(data,function(key,val){
//				    if ((val.Wilaya_fr.search(regex) != -1) || (val.Site_fr.search(regex) != -1))
//					{
//						output += "<tr>";
//						output += `<td> ${val.Wilaya_fr} </td> `;
//						output += `<td> ${val.Site_fr} </td>`;
//						output += "<td>"+ val.phone +"</td>";
//						output += "<td>"+ val.fax +"</td>";
//						output += "<td>"+ val.email +"</td>";
//						output += "<td>"+ val.adresse +"</td>";
//						output += "<td>"+ val.map +"</td>";
//						output += "</tr>";
//					}else{
//						output += "<tr class='text-center'>Aucun Resultat</tr>";
//					}
//					$("#output").html(output);
//				});
				
//			});
//		}
//	});
//});

$(function(){
    $.fn.tabCollapse = function (options) {
        return this.each(function () {
            var $this = $(this),
                $headings = $this.find('li:not(.dropdown) [data-toggle="tab"], li:not(.dropdown) [data-toggle="pill"]');
            options = $.extend({}, $.fn.tabCollapse.defaults, options);
            var accordionHtml = accordionTemplate($this.attr("id") + "-accordion", $headings, options.accordionClass);
            $this.after(accordionHtml);
            $this.addClass(options.tabsClass);
            $this.siblings(".tab-content").addClass(options.tabsClass);
        });
    };
});
$(function(){
	if(conf.helpBox){
		function help() {
			if($('#live-chat').length){
				var windowpos = $(window).scrollTop();
				if (windowpos > 400) {
					$('#live-chat').fadeIn(300);
				} else {
					$('#live-chat').fadeOut(300);
				}
			}
		}
		
		help();
	
		$(window).on('scroll', function() {
			help();
		});
	
		$('#live-chat header').on('click', function() {
	
			$('.chat').slideToggle(300, 'swing');
	
		});
	
		$('.chat-close').on('click', function(e) {
	
			e.preventDefault();
			$('#live-chat').fadeOut(300);
	
		});
	}
});
$(function(){
    if($(".humanTyping").length)
    {
        (function typing()
        {
            
            var strings = [
                "Vous etes une Startups",
                "ou Chomeur en Puissance",
                "et vous chercher créer votre micro entreprise",
                "La CNAC ...",
            ];
            var speed = 100;
            var getLength = strings[0].length;
            $('.humanTyping').humanTyping(strings,speed);
            // setTimeout(typing, ((speed*getLength) + 2000));
        })();
    }
});
$(function(){
    if(conf.light){
        var months = {
            1: {
                start: 06,
                end:17
            },
            2: [06,17],
            3: [06,17],
            4: [06,17],
            5: [06,17],
            6: [03,20],
            7: [03,20],
            8: [04,19],
            9: [05,18],
            10: [06,18],
            11: [06,17],
            12: [06,17]
        };
        console.log(months);
        var today = new Date();
        var time = today.getHours();
        var month = today.getMonth()
        if( (time < 11) || (time > 17) ){
            $(".light-box").show();
            
            var lightStatus = sessionStorage.getItem("className");
        
            if(lightStatus == null){
                sessionStorage.setItem("className","on");
                sessionStorage.setItem("image","light_off.svg");
                $("#darkMode").remove();
            }else{
                if(sessionStorage.getItem("darkMode") != null){
                    $("head link[rel='stylesheet']").last().after("<link rel='stylesheet' id='darkMode' href='css/" + sessionStorage.getItem("darkMode") + ".css'" + ">");
                }
            }
            $(".light-btn").addClass(lightStatus);
            $(".light-box").find("img").attr("src","images/" + sessionStorage.getItem("image"));
        
            $(".light-box").on("click", function(){
                var lightBox = $(this).find(".light-btn");
                if(lightStatus == "on"){
                    sessionStorage.setItem("className","off");
                    sessionStorage.setItem("image","light_on.svg");
                    lightStatus = sessionStorage.getItem("className");
                    lightImage = sessionStorage.getItem("image");
                    sessionStorage.setItem("darkMode", "dark");
                    $("head link[rel='stylesheet']").last().after("<link rel='stylesheet' id='darkMode' href='css/" + sessionStorage.getItem("darkMode") + ".css'" + ">");
        
                    lightBox.removeClass("on").addClass(lightStatus);
                    lightBox.find("img").attr("src","images/" + lightImage);
                }else{
                    sessionStorage.setItem("className","on");
                    sessionStorage.setItem("image","light_off.svg");
                    lightStatus = sessionStorage.getItem("className");
                    lightImage = sessionStorage.getItem("image");
                    sessionStorage.setItem("darkMode", null);
                    $("#darkMode").remove();
                    lightBox.removeClass("off").addClass(lightStatus);
                    lightBox.find("img").attr("src","images/" + lightImage);
                }
            })
        }
    }
});
(function($) {
	// makeSlider("#slider");
	"use strict";
	
	
	//Hide Loading Box (Preloader)
	function handlePreloader() {
		if($('.preloader').length){
			$('.preloader').delay(200).addClass("animated fadeOutUpBig");
		}
	}
	
	//Update Header Style and Scroll to Top
	// function headerStyle() {
	// 	if($('.main-header').length){
	// 		var windowpos = $(window).scrollTop();
	// 		var siteHeader = $('.main-header');
	// 		var scrollLink = $('.scroll-to-top');
	// 		if (windowpos >= 1) {
	// 			siteHeader.addClass('fixed-header');
	// 			scrollLink.fadeIn(300);
	// 		} else {
	// 			siteHeader.removeClass('fixed-header');
	// 			scrollLink.fadeOut(300);
	// 		}
	// 	}
	// }
	
	// headerStyle();



	// new script amine
	
	function partenaire(){
		if ($('.partenaires-carousel').length) {
			$('.partenaires-carousel').owlCarousel({
				loop: false,
				margin: 30,
				dots: true,
				nav: false,
				autoHeight: false,      
				lazyLoad: true,
				items: 4,
				responsive: {
					0:{
					  items: 1
					},
					480:{
					  items: 1
					},
					769:{
					  items: 4
					}
				}
			});
		}  
	}
	partenaire();

	//Update Header Style and Scroll to Top by amine
	function headerStyleNew() {
		if($('.main-header').length){
			var windowpos = $(window).scrollTop();
			var scrollLink = $('.scroll-to-top');
			if (window.pageYOffset > $("#banner").height()) {
				$(".home").addClass("dark-bg");
				$(".home").removeClass("blue-bg");
				// scrollLink.fadeIn(300);
			} else {
				$(".home").addClass("blue-bg");
				$(".home").removeClass("dark-bg");
				// scrollLink.fadeOut(300);
			}
		}
	}
	
	//headerStyleNew();
	
	//Submenu Dropdown Toggle
	if($('.main-header li.dropdown ul').length){
		$('.main-header .navigation li.dropdown').append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>');
		
	}

	//Mobile Nav Hide Show
	if($('.mobile-menu').length){
		
		var mobileMenuContent = $('.main-header .nav-outer .main-menu .navigation').html();
		$('.mobile-menu').append('<div class="close-btn"><span class="icon flaticon-cancel-music"></span></div>');
		$('.mobile-menu .navigation').append(mobileMenuContent);
		$('.sticky-header .navigation').append(mobileMenuContent);
		$('.mobile-menu .close-btn').on('click', function() {
			$('body').removeClass('mobile-menu-visible');
		});
		//Dropdown Button
		$('.mobile-menu li.dropdown .dropdown-btn').on('click', function() {
			$(this).prev('ul').slideToggle(500);
		});
		//Menu Toggle Btn
		$('.mobile-nav-toggler').on('click', function() {
			$('body').addClass('mobile-menu-visible');
		});

		//Menu Toggle Btn
		$('.mobile-menu .menu-backdrop,.mobile-menu .close-btn').on('click', function() {
			$('body').removeClass('mobile-menu-visible');
		});
	}

	//Shedule Block
	if ($('.schedule-block').length) {
		$('.schedule-block.active').find('.lower-content').slideDown();

		$('.schedule-block .toggle-btn').on('click', function() {
			$(this).parents('.schedule-block').toggleClass('active');
			$(this).parents('.schedule-block').find('.lower-content').slideToggle(400);
			$(this).parents('.schedule-block').siblings().find('.lower-content').slideUp(400);
			$(this).parents('.schedule-block').siblings().removeClass('active');
		});
	}

	//Last Date
	if ($('.date-btn').length) {
		var last_date = $('.date-btn').attr('data-last-date');
		$('.date-btn').on('click', function() {
			$(this).html(last_date);
		});
	}

	if ($('.banner-carousel').length) {

		var swiper = new Swiper('.banner-carousel', {
            loop: true,
            centeredSlides: true,
            slidesPerView: 1,
            keyboardControl: true,
            mousewheelControl: false,
            lazyLoading: true,
            TouchSpin:true,
            preventClicks: false,
            preventClicksPropagation: false,
            lazyLoadingInPrevNext: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
        });
	}

	// Single Item Carousel
	if ($('.single-item-carousel').length) {
		$('.single-item-carousel').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			smartSpeed: 500,
			autoplay: true,
			navText: [ '<span class="arrow_carrot-left"></span>', '<span class="arrow_carrot-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1024:{
					items:1
				}
			}
		});    		
	}

	// Sponsor Outer
	if ($('.sponsor-carousel').length) {
		$('.sponsor-carousel').owlCarousel({
			loop:false,
			margin:0,
			nav:true,
			smartSpeed: 500,
			autoplay: true,
			navText: [ '<span class="flaticon-next-1"></span>', '<span class="flaticon-next-1"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				768:{
					items:3
				},
				1024:{
					items:4
				},
				1280:{
					items:5
				}
			}
		});    		
	}

	//Parallax Scene for Icons
	if($('.parallax-scene-1').length){
		var scene = $('.parallax-scene-1').get(0);
		var parallaxInstance = new Parallax(scene);
		parallaxInstance.velocityY = 30;
	}
	if($('.parallax-scene-2').length){
		var scene = $('.parallax-scene-2').get(0);
		var parallaxInstance = new Parallax(scene);
	}
	if($('.parallax-scene-3').length){
		var scene = $('.parallax-scene-3').get(0);
		var parallaxInstance = new Parallax(scene);
	}
	if($('.parallax-scene-4').length){
		var scene = $('.parallax-scene-4').get(0);
		var parallaxInstance = new Parallax(scene);
	}
	if($('.parallax-scene-5').length){
		var scene = $('.parallax-scene-5').get(0);
		var parallaxInstance = new Parallax(scene);
	}

	//Masonary
	function enableMasonry() {
		if($('.masonry-items-container').length){
	
			var winDow = $(window);
			// Needed variables
			var $container=$('.masonry-items-container');
	
			$container.isotope({
				itemSelector: '.masonry-item',
				 masonry: {
					columnWidth :1
				 },
				animationOptions:{
					duration:500,
					easing:'linear'
				}
			});
	
			winDow.on('resize', function(){

				$container.isotope({ 
					itemSelector: '.masonry-item',
					animationOptions: {
						duration: 500,
						easing	: 'linear',
						queue	: false
					}
				});
			});
		}
	}
	
	enableMasonry();
	//$.get( "http://www.da-js.org/statistique/api/visite.php", function( data ) {
	//	$(".totals").attr("data-stop",data.result.total).text(data.result.total);
	//	$(".byDay").attr("data-stop",data.result.byday).text(data.result.byday);
	//});
	
	//Fact Counter + Text Count
	if($('.count-box').length){
		$('.count-box').appear(function(){
			
	
			var $t = $(this),
				n = $t.find(".count-text").attr("data-stop"),
				r = parseInt($t.find(".count-text").attr("data-speed"), 10);
			

			if (!$t.hasClass("counted")) {
				$t.addClass("counted");
				$({
					countNum: $t.find(".count-text").text()
				}).animate({
					countNum: n
				}, {
					duration: r,
					easing: "linear",
					step: function() {
						$t.find(".count-text").text(Math.floor(this.countNum));
					},
					complete: function() {
						$t.find(".count-text").text(this.countNum);
					}
				});
			}
			
		},{accY: 0});
	}
	
	//Tabs Box
	if($('.tabs-box').length){
		$('.tabs-box .tab-buttons .tab-btn').on('click', function(e) {
			e.preventDefault();
			var target = $($(this).attr('data-tab'));
			
			if ($(target).is(':visible')){
				return false;
			}else{
				target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
				$(this).addClass('active-btn');
				target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
				target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab animated fadeIn');
				$(target).fadeIn(300);
				$(target).addClass('active-tab animated fadeIn');
			}
		});
	}

	//Accordion Box
	if($('.accordion-box').length){
		$(".accordion-box").on('click', '.acc-btn', function() {
			
			var outerBox = $(this).parents('.accordion-box');
			var target = $(this).parents('.accordion');
			
			if($(this).hasClass('active')!==true){
				$(outerBox).find('.accordion .acc-btn').removeClass('active ');
			}
			
			if ($(this).next('.acc-content').is(':visible')){
				return false;
			}else{
				$(this).addClass('active');
				$(outerBox).children('.accordion').removeClass('active-block');
				$(outerBox).find('.accordion').children('.acc-content').slideUp(300);
				target.addClass('active-block');
				$(this).next('.acc-content').slideDown(300);	
			}
		});	
	}

	//Event Countdown Timer
	if($('.time-countdown').length){  
		$('.time-countdown').each(function() {
		var $this = $(this), finalDate = $(this).data('countdown');
		$this.countdown(finalDate, function(event) {
			var $this = $(this).html(event.strftime('' + '<div class="counter-column"><div class="column-inner"><span class="count">%D</span>Days</div></div> ' + '<div class="counter-column"><div class="column-inner"><span class="count">%H</span>Hours</div></div>  ' + '<div class="counter-column"><div class="column-inner"><span class="count">%M</span>Minutes</div></div>  ' + '<div class="counter-column"><div class="column-inner"><span class="count">%S</span>Seconds</div></div>'));
		});
	 });
	}

	if($('.cs-countdown').length){
	   $(function(){
		    $('[data-countdown]').each(function() {
		   var $this = $(this), finalDate = $(this).data('countdown');
		   $this.countdown(finalDate, function(event) {
		     $this.html(event.strftime('%D days %H:%M:%S'));
		   });
		 });
		});

	   $('.cs-countdown').countdown('').on('update.countdown', function(event) {
		  var $this = $(this).html(event.strftime('<div><span>%m</span><h6>Months</h6></div> <div><span>%d</span><h6>days</h6></div> <div><span>%H</span><h6>Hours</h6></div> <div><span>%M</span><h6>Minutes</h6></div> <div><span>%S</span><h6>Seconds</h6></div>'));
		});
	}

	//LightBox / Fancybox
	if($('.lightbox-image').length) {
		$('.lightbox-image').fancybox({
			openEffect  : 'fade',
			closeEffect : 'fade',
			helpers : {
				media : {}
			}
		});
	}

	//Contact Form Validation
	if($('#contact-form').length){
		$('#contact-form').validate({
			rules: {
				username: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				subject: {
					required: true
				},
				message: {
					required: true
				}
			}
		});
	}
	
	// Scroll to a Specific Div
	if($('.scroll-to-target').length){
		$(".scroll-to-target").on('click', function() {
			var target = $(this).attr('data-target');
		   // animate
		   $('html, body').animate({
			   scrollTop: $(target).offset().top
			 }, 1500);
	
		});
	}
	
	
	// Elements Animation
	if($('.wow').length){
		var wow = new WOW(
		  {
			boxClass:     'wow',      // animated element css class (default is wow)
			animateClass: 'animated', // animation css class (default is animated)
			offset:       0,          // distance to the element when triggering the animation (default is 0)
			mobile:       true,       // trigger animations on mobile devices (default is true)
			live:         true       // act on asynchronously loaded content (default is true)
		  }
		);
		wow.init();
	}


/* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */
	
	$(window).on('scroll', function() {
		// headerStyle();
		//headerStyleNew();
	});
	
/* ==========================================================================
   When document is loading, do
   ========================================================================== */
	
	$(window).on('load', function() {
		handlePreloader();
		enableMasonry();
	});	


/* ==========================================================================
   Animte menu items (amine new code)
   ========================================================================== */
	
	//$(".navigation ").on('mouseenter', function(){
    //    var i = 1;
    //    $(this).find('ul li').each(function(){
    //        $(this).addClass('animated fadeInUp').css("animation-delay", "0." + i++ + "s");
    //    });
        
    //    $(this).on('mouseleave', function(){
    //        $(this).find('ul li').removeClass('animated fadeInUp');
    //    });
	//});
	
	

})(window.jQuery);
$(function(){
    if(conf.modalHome){
        $modal = $('.modal-frame');
        $overlay = $('.modal-overlay');
        $overlay.addClass('state-show');
        $modal.removeClass('state-leave').addClass('state-appear');

        if(sessionStorage.getItem("modalHome") != null){
            if(sessionStorage.getItem("modalHome")){
                $overlay.removeClass('state-show');
                $modal.removeClass('state-appear').addClass('state-leave');
            }
        }

        $('.close').on('click', function(){
            sessionStorage.setItem("modalHome",false);
            $overlay.removeClass('state-show');
            $modal.removeClass('state-appear').addClass('state-leave');
        });
        $overlay.on("click", function(){
            sessionStorage.setItem("modalHome",false);
            $overlay.removeClass('state-show');
            $modal.removeClass('state-appear').addClass('state-leave');
        });
        
    }
    $('#contact').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    });
})
$(function(){

    // init new empty className
    var className = "";

    // check if fixenav is autorized
    if(conf.fixedNav){

        // check if pageCode exist
        if($(".pageCode").length){

            // catch data value of pagecode
            var pageCode = $(".pageCode").attr("data-page","page-code-001");

            // if is false
            if(!pageCode){
                //className = "ab-header";
                className = "ab-header-2";
            }else{
                className = "re-header";
            }

        // if pageCode dosn't exist
        }else{
            //className = "ab-header";
            className = "ab-header-2";
        }
    
        // add class to main-header
        $('.main-header').addClass(className);
    
        // anonume function
        function headerOnlyPage() {

            // if main-header exist
            if($('.main-header').length){

                // catch main-header
                var siteHeader = $('.main-header');

                // if Y window offset > height of banner
                if (window.pageYOffset > $("#banner").height()) {
                    siteHeader.addClass('fixed-header');
                    siteHeader.removeClass(className);
                } else {
                    siteHeader.removeClass('fixed-header');
                    siteHeader.addClass(className);
                }
            }
        }
        

        // run the function
        headerOnlyPage();
    
        // execute headerOnlyPage on scroll
        $(window).on('scroll', function() {
            headerOnlyPage();
        });
     
    // if fixenav is not autorized
    }else{
        $('.main-header').addClass("re-header");
    }

});
function news(){
    $(function(){
        $('#news').breakingNews();
        if(window.innerHeight <= $(".footer").height()){
            $(".footer").css({
                position: "static"
            });
            $(".footer-hidden").css({
                display:"none"
            });
        }
    });
}
news();

$(function(){
    if(conf.toTop){
        function scrollToTop() {
            if($('.scroll-to-top').length){
                var scrollLink = $('.scroll-to-top');
                if (window.pageYOffset > $("#banner").height()) {
                    scrollLink.fadeIn(300);
                } else {
                    scrollLink.fadeOut(300);
                }
            }
        }
        scrollToTop();
        $(window).on('scroll', function() {
            scrollToTop();
        });
    }
    if(conf.fixednav){
        if($(".fixednav-container").length)
        {
            $(".fixednav-container a").on('click', function(e){
                if(this.hash !== "")
                {
                    e.preventDefault();
                    var hash = this.hash;
                    $("html, body").animate({
                        scrollTop: $(hash).offset().top - 150
                    });
                }
            });
        }
    }else{
        if($(".fixednav-container").length)
        {
            $(".fixednav-container").remove();
        }
    }
});

$(function(){
    $("#owl-carousel").owlCarousel({
        items : 1,
        slideSpeed : 2000,
        nav: false,
        autoplay: true,
        dots: true,
        loop:true
    });
});
$(function() {
    function homeSlide(){
        if($('.gallery-slideshow').length){
        
            $('.gallery-slideshow').slideshow({
                // default: 2000
                interval: 6000,
                // default: 500
                width: 100 + "%",
                // default: 350
                height: 500,
                navBar: true
            });
            h = $('.gallery-slideshow').height();
            $('.gallery-slideshow').find("img").css({
                height: h + "px"
            });
        }
    }
    homeSlide();
    $(window).on('resize', function() {
		homeSlide();
	});
});
/*
	simpletab.js  ᕕ( ᐛ )ᕗ

	* Version : 1.0.1
	* Author  : Wookju Choi
	* Docs    : https://github.com/wookchu/SimpleTab
	* Repo    : https://github.com/wookchu/SimpleTab
 */
(function($){

	$.fn.simpleTab = function(options){
		var el = this;

		var settings = $.extend({
			defaultSkin: false,
			onTabClass: 'selected',
			dimmedTabClass: 'dimmed',
			startIndex: 0,
			dimmedIndexs: null,
			fadeEffect: true,
			fadeSpeed: 400,
			afterChange: null
		}, options);

		var loopCount = 0;
		var tabName = el.data('tab-name') || 'defaultTab';
		var tabLength = $(el).children().length;
		var latest = {
			prevIndex: null,
			currentIndex: null
		};
		var dimmedTabList = [];
		var activeTabList = [];

		var init = function(){

			//skin setting
			if(settings.defaultSkin) setSkinClass();

			var search = location.search;

			//dimmed tab settings
			if (typeof settings.dimmedIndexs === "string" || typeof settings.dimmedIndexs === "number") {
				dimmedTabList = function(){
					var array = settings.dimmedIndexs.toString().split(',');
					for (var i in array) {
						array[i] = parseInt(array[i]);
					}
					array.sort(function(a, b){
						return a-b;
					});
					return array;
				}();

				//dimmed tab style and event
				for (var i in dimmedTabList) {
					$(el).children().eq(dimmedTabList[i]).addClass(settings.dimmedTabClass)
						 .children('a')
							.attr('style', 'cursor:default;')
							.addClass('no-event')
							.on('click', function(){
						return false;
					});
				}
			}

			activeTabList = function(){
				var array = [];
				for (var i = 0; i < tabLength; i++) {
					if (dimmedTabList.indexOf(i) < 0) array.push(i);
				}
				return array;
			}();

			if (activeTabList.length < 1){
				//no active tab
				$(el).find("a").each(function(i){
					$($(this)[0].hash).hide();
				});
				$(el).hide();

				console.warn("Warning: (", tabName, ") Active Tab can't be found. Confirm 'dimmedIndexs' Option in  your code.");
			} else {

				//check parameter for init index in url
				var pattern = new RegExp('(\\b' + tabName + '\\b)=(\\w+)','g');
				var newStartIndex = parseInt(settings.startIndex);

				if (search.match(pattern) != null) {
					var idx = parseInt(search.match(pattern)[0].split('=')[1]);
					newStartIndex = idx;
				};

				// setting start index with adjusting exception
				if (newStartIndex > tabLength - 1 || dimmedTabList.indexOf(newStartIndex) != -1)  {
					newStartIndex = (activeTabList.indexOf(settings.startIndex) > -1) ? settings.startIndex : activeTabList[0];
				}

				changeTab(newStartIndex, true);
			};

		};

		var tabClickHandler = function(e){
			var target = e.target;

			if (target.hash.length > 0 && (target.getAttribute('href').length == target.hash.length)) {
				changeTab($(target).parent().index());
				return false;
			}
		};

		var changeTab = function(i, firstLoading) {

			var tab = $(el).children().eq(i).children('a')[0];
			var contentId = tab.hash;

			firstLoading = firstLoading || false;

			latest.prevIndex = latest.currentIndex;
			latest.currentIndex = i;

			var runCallback = function(delay){
				delay = delay || 0;
				if (typeof settings.afterChange === "function" && !firstLoading) {
					setTimeout(function(){
						settings.afterChange.call(el, $(contentId), latest.prevIndex, latest.currentIndex);
					}, delay);
				}
			}

			if (tab.hash.length > 0 && (tab.getAttribute('href').length == tab.hash.length)) { //when it is effective content of tab linked and not outlink.

				if($(contentId).length < 1) {
					console.error("Error: (", tabName, ", index:", i, ") Can't be find Content linked. Please confirm content ID linked <a> tag 'href' attribute.");
				} else {
					$(el).find("a").each(function(i){
						$($(this)[0].hash).hide();
					});

					if (settings.fadeEffect) {
						$(contentId).css({
							opacity:0,
							display:'block'
						});
						var timeCnt = 100;
						var itv = setInterval(function(){
							var op = 1 - timeCnt/100;
							$(contentId).css({
								opacity: op,
							});
							timeCnt--;
						}, parseInt(settings.fadeSpeed)/100);

						setTimeout(function(){
							clearInterval(itv);
							$(contentId).css({
								opacity: 1
							}).focus();
							runCallback();
						}, parseInt(settings.fadeSpeed));

					} else {
						$(contentId).show().focus();
						runCallback(10);
					}

					$(tab).parent().addClass(settings.onTabClass).siblings().removeClass(settings.onTabClass);
				}

			} else if(++loopCount > tabLength) {
				console.warn("Warning: (", tabName,") Can't be find Contents linked your tab at all. Remove 'simpleTab' script or please confirm content ID linked tab <a> tag.")
			} else {
				//when outlink content linked tab, It's on next index tab when init this plugin.
				changeTab(activeTabList[0], true);
				console.warn("Warning: (", tabName,") startIndex is outlink tab. This is ignore startIndex and move to first index among effective indexes.")
			}
		}

		var setSkinClass = function(){
			settings.onTabClass = 'selected';
			settings.dimmedTabClass = 'dimmed';
			$(el).addClass('da-simple-tab').find("a").each(function(i){
				$($(this)[0].hash).addClass('simple-tab-content');
			});
		}

		return this.each(function(){
			init();
			$(this).find('a:not(".no-event")').on('click', tabClickHandler);
		});
	};
}(jQuery));

jQuery(document).ready(function($){
    $(".tab").simpleTab({
        defaultSkin: true //default value is false.
    });
});
/* ==========================================================================
   Video Player script
   ========================================================================== */
if($('.videoplayer').length)
{
    $('.videoplayer').on("click", function(){
        $(".fancybox-button--share").on("click", function(){
            $("body").find(".fancybox-container .fancybox-share h1").text("Partagez Sur:");
            console.log("coool");
        });
        
    });
}

$(function () {

    var link = $('a.scrollspy-dot');

    // Move to specific section when click on menu link
    link.on('click', function (e) {

        $(this).addClass('active');
        var target = $($(this).attr('href'));
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 600);
        e.preventDefault();
    });

    // Run the scrNav when scroll
    $(window).on('scroll', function () {
        scrNav();
    });

    // scrNav function 
    // Change active dot according to the active section in the window
    function scrNav() {
        var sTop = $(window).scrollTop();
        $('section').each(function () {
            var id = $(this).attr('id'),
                offset = $(this).offset().top - 1,
                height = $(this).height();
            if (sTop >= offset && sTop < offset + height) {
                link.removeClass('active');
                $('#scrollspy-navbar').find('[data-scroll="' + id + '"]').addClass('active');
            }
        });
    }
    scrNav();
    $(".close-scrollspy-btn").on("click", function (e) {
        e.preventDefault();
        var container = $(".scrollspy-navbar");
        if (container.hasClass("opned")) {
            container.removeClass("opned").addClass("closed");
            container.animate({
                right: "-200px"
            });
            $(this).animate({
                right: "220px"
            });
            $(this).find(".fas").removeClass("fa-indent").addClass("fa-outdent");
        } else {
            container.removeClass("closed").addClass("opned");
            container.animate({
                right: "50px"
            });
            $(this).animate({
                right: "-14px"
            });
            $(this).find(".fas").removeClass("fa-outdent").addClass("fa-indent");
        }
    });
    if ($(window).width() < 767) {
        $(".scrollspy-navbar").hide();
    }
});
/*
$(function () {
    plyr.setup(document.querySelector('.plyr'));
    var radio = document.querySelector('.plyr').plyr;

    var player = document.querySelector('.playlist');
    var songs = player.querySelectorAll('.play-track');
    var i;
    var active = null;

    for (i = 0; i < songs.length; i++) {
        songs[i].onclick = changeChannel;
    }

    setSource(getId(songs[0]), buildSource(songs[0]));

    document.querySelector('.plyr').addEventListener('ended', nextSong);

    function changeChannel(e) {
        setSource(getId(e.target), buildSource(e.target), true);
    }

    function getId(el) {
        return Number(el.getAttribute('data-id'));
    }

    function buildSource(el) {
        var obj = [{
            src: el.getAttribute('data-audio'),
            type: 'audio/ogg'
        }];

        return obj;
    }

    function setSource(selected, sourceAudio, play) {
        if (active !== selected) {
            active = selected;
            radio.source({
                type: 'audio',
                title: 'test',
                sources: sourceAudio
            });

            for (var i = 0; i < songs.length; i++) {
                if (Number(songs[i].getAttribute('data-id')) === selected) {
                    songs[i].className = 'active';
                } else {
                    songs[i].className = '';
                }
            }

            if (play) {
                radio.play();
            }
        } else {
            radio.togglePlay();
        }
    }

    function nextSong(e) {
        var next = active + 1;

        if (next < songs.length) {
            setSource(getId(songs[next]), buildSource(songs[next]), true);
        }
    }
});
*/
$(function () {
    if ($(window).width() > 767) {
        $('li.dropdown').hover(
        function () {
            //console.log('good');
            var ul = $(this).find('ul');
            if (!ul.hasClass('animated flipInX')) {
                ul.addClass('animated flipInX');
            }
        }, function () {
            $(this).find('ul').removeClass('animated flipInX');
        });
    }
    
});

// switch slider to large or boxed
$(function () {
    var btn = $('.switch-slider');
    var slider = $('#home-slider');
    btn.on('click', function (e) {
        e.preventDefault();
        slider.toggleClass('container-fluid');
        slider.toggleClass('container');
    });
});

$(function () {
    let btn = $("#telechargement");
    let downloadTab = $(".display-none");

    btn.on("click", function () {
        downloadTab.slideToggle();
    });
})
$(function () {
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var id = $(this).attr('href');
        $('html,body').animate({ scrollTop: $(id).offset().top - 90 }, 500);
    })
});