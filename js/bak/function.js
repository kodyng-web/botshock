
    

$(document).ready(function () {
    //checkBrowser
    if(navigator.appName.indexOf("Internet Explorer")!=-1 || navigator.userAgent.match(/Trident.*rv[ :]*11\./))
    {
        window.location = "browser.html";
        return;
    }
 
    // onScrollRevealCssClase
    var productInfoHeight = $('section.product-info').outerHeight();
    var $hiddenProduct = $('header .navbar__product.hidden');
    var $headerHeight =$('header .navbar--main').outerHeight();
    var $window           = $(window),
    win_height_padded = $window.height() * 1.1,
    isTouch           = Modernizr.touch;
    if (isTouch) { $('.revealOnScroll').addClass('animated'); }

    $window.on('scroll', revealOnScroll);

    function revealOnScroll() {
        var scrolled = $window.scrollTop(),
            win_height_padded = $window.height() * 1.1;
   
        // Showed...
        $(".revealOnScroll:not(.animated)").each(function() {
            var $this = $(this),
                offsetTop = $this.offset().top;
   
            if (scrolled + win_height_padded > offsetTop) {
                if ($this.data('timeout')) {
                    window.setTimeout(function() {
                        $this.addClass('animated ' + $this.data('animation'));
                    }, parseInt($this.data('timeout'), 10));
                } else {
                    $this.addClass('animated ' + $this.data('animation'));
                }
            }
        });
    }

    revealOnScroll();



    // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
        // On-page links
        if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
        ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
            scrollTop: target.offset().top
            }, 1000, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
                return false;
            } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
            };
            });
        }
        }
    });

    // menu
    (function() {
        var navEl = document.querySelector('nav.menu'),
            navB =  document.querySelector('.navbar--main'),
            revealer = new RevealFx(navEl),
            closeCtrl = navEl.querySelector('.btn--close');

        document.querySelector('.navbar__icon').addEventListener('click', function() {
            navB.classList.add('full-height');
            revealer.reveal({
                bgcolor: '#8a2442',
                duration: 400,
                direction: 'rl',
                easing: 'easeInOutCubic',
                onCover: function(contentEl, revealerEl) {
                    navEl.classList.add('menu--open');
                    contentEl.style.opacity = 1;
                    $('html').stop().addClass('fixed');
                },
                onComplete: function() {
                    closeCtrl.addEventListener('click', closeMenu);
                }
            });
        });

        function closeMenu() {
            closeCtrl.removeEventListener('click', closeMenu);
            $('html').stop().removeClass('fixed');
            setTimeout(function() {
                navB.classList.remove('full-height');
            },(500));
            navEl.classList.remove('menu--open');
            revealer.reveal({
                bgcolor: '#8a2442',
                duration: 400,
                easing: 'easeInOutCubic',
                onCover: function(contentEl, revealerEl) {
                    navEl.classList.remove('menu--open');
                    setTimeout(function() {
                        navB.classList.remove('full-height');
                    },(500));
                    contentEl.style.opacity = 0;
                }
            });
        }
    })();
    jQuery('img.svg').each(function(){var $img=jQuery(this);var imgID=$img.attr('id');var imgClass=$img.attr('class');var imgURL=$img.attr('src');jQuery.get(imgURL,function(data){var $svg=jQuery(data).find('svg');if(typeof imgID!=='undefined'){$svg=$svg.attr('id',imgID)}if(typeof imgClass!=='undefined'){$svg=$svg.attr('class',imgClass+' replaced-svg')}$svg=$svg.removeAttr('xmlns:a');$img.replaceWith($svg)},'xml')});

    var headerHeight = $(".navbar--main").outerHeight()
    ;
    var header = $(".navbar--main");
  


    $(window).scroll(function() {
  
      if ($(window).scrollTop() > headerHeight * 0.5 ) {
        header.removeClass("home");
      } else {
        header.addClass("home");
      }
    });


    // a hover reverse
    if ($(window).width() > 1024) {
        $(".menu__item a").mouseenter(function () {
            $(this).toggleClass("anim-reverse");
        });
    }

    // model pop up
    $modal = $('.modal-frame');
    $overlay = $('.modal-overlay');
    $body = $('html');
    $modal.bind('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e){
        if($modal.hasClass('state-leave')) {
            $modal.removeClass('state-leave');
        }
    });
    $('.modal-frame').on('click', function(event){
		if( $(event.target).is('.close') || $(event.target).is('.modal-frame') ) {
			event.preventDefault();
            $overlay.removeClass('state-show');
            $modal.removeClass('state-appear').addClass('state-leave');
            $body.removeClass('fix');
		}
    });
    $('.open').on('click', function(){
        $overlay.addClass('state-show');
        $modal.removeClass('state-leave').addClass('state-appear');
        $body.addClass('fix');
    });




    // hearder -product 
    if($('.container-fluid').hasClass('detail') ){
          
        $(window).scroll(function() { 
      
          if ($(window).scrollTop() > productInfoHeight - $headerHeight) {
            $hiddenProduct.removeClass('hidden').removeClass('fadeOutUp').addClass('fadeInUp');
          } else {
            $hiddenProduct.addClass('hidden').removeClass('fadeInUp').addClass('fadeOutUp');
          }
        });
    }

    // slider
    function slider() {
        
            var $slider = $(".slider"),
                $slideBGs = $(".slide__bg"),
                diff = 0,
                curSlide = 0,
                numOfSlides = $(".slide").length - 1,
                animating = false,
                animTime = 500,
                autoSlideTimeout,
                autoSlideDelay = 6000,
                $pagination = $(".slider-pagi");
        
        
            function manageControls() {
                $(".slider-control").removeClass("inactive");
                if (!curSlide) $(".slider-control.left").addClass("inactive");
                if (curSlide === numOfSlides) $(".slider-control.right").addClass("inactive");
            };
        
            function changeSlides(instant) {
                if (!instant) {
                    animating = true;
                    manageControls();
                    $slider.addClass("animating");
                    $slider.css("top");
                    $(".slide").removeClass("active");
                    $(".slide-" + curSlide).addClass("active");
                    setTimeout(function() {
                        $slider.removeClass("animating");
                        animating = false;
                    }, animTime);
                }
                window.clearTimeout(autoSlideTimeout);
                $(".slider-pagi__elem").removeClass("active");
                $(".slider-pagi__elem-" + curSlide).addClass("active");
                $slider.css("transform", "translate3d(" + -curSlide * 100 + "%,0,0)");
                $slideBGs.css("transform", "translate3d(" + curSlide * 50 + "%,0,0)");
                diff = 0;
            }
        
            function navigateLeft() {
                if (animating) return;
                if (curSlide > 0) curSlide--;
                changeSlides();
            }
        
            function navigateRight() {
                if (animating) return;
                if (curSlide < numOfSlides) curSlide++;
                changeSlides();
            }
        
            $(document).on("mousedown touchstart", ".slider", function(e) {
                if (animating) return;
                window.clearTimeout(autoSlideTimeout);
                var startX = e.pageX || e.originalEvent.touches[0].pageX,
                    winW = $(window).width();
                diff = 0;
        
                $(document).on("mousemove touchmove", function(e) {
                    var x = e.pageX || e.originalEvent.touches[0].pageX;
                    diff = (startX - x) / winW * 120;
                    console.log(x + 'end');
                    console.log(startX);
                    if ((!curSlide && diff < 0) || (curSlide === numOfSlides && diff > 0)) diff /= 2;
                    $slider.css("transform", "translate3d(" + (-curSlide * 100 - diff) + "%,0,0)");
                    $slideBGs.css("transform", "translate3d(" + (curSlide * 50 + diff / 2) + "%,0,0)");
                });
            });
        
            $(document).on("mouseup touchend", function(e) {
                $(document).off("mousemove touchmove");
                if (animating) return;
                if (!diff) {
                    changeSlides(true);
                    return;
                }
                if (diff > -10 && diff < 10) {
                    changeSlides();
                    return;
                }
                if (diff <= -10) {
                    navigateLeft();
                }
                if (diff >= 10) {
                    navigateRight();
                }
            });
        
            $(document).on("click", ".slider-control", function() {
                if ($(this).hasClass("left")) {
                    navigateLeft();
                } else {
                    navigateRight();
                }
            });
        
            $(document).on("click", ".slider-pagi__elem", function() {
                curSlide = $(this).data("page");
                changeSlides();
            });
        }

   // slider
   if ($(window).width() <= 1024) {
        slider();
   }
   window.onresize = function(event) {

        if ($(window).width() <= 1024) {
            slider();
        }
    };
})


// Back to top
$('#btt').click(function (e) {
    e.preventDefault();
    $('html, body').animate({scrollTop: 0}, 800);
  });

// When the user scrolls down 50px from the top of the document, show the button
window.onscroll = function() {positionFunction()};

function positionFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.querySelector(".btt").style.opacity = "1";
    } else {
        document.querySelector(".btt").style.opacity = "0";
    }
}

// detect IOS
if( !function_exists('mobile_user_agent_switch') ){
	function mobile_user_agent_switch(){
		$device = '';
		
		if( stristr($_SERVER['HTTP_USER_AGENT'],'ipad') ) {
			$device = "ipad";
		} else if( stristr($_SERVER['HTTP_USER_AGENT'],'iphone') || strstr($_SERVER['HTTP_USER_AGENT'],'iphone') ) {
			$device = "iphone";
		} else if( stristr($_SERVER['HTTP_USER_AGENT'],'blackberry') ) {
			$device = "blackberry";
		} else if( stristr($_SERVER['HTTP_USER_AGENT'],'android') ) {
			$device = "android";
		}
		
		if( $device ) {
            document.querySelector(".icon-global").css("-webkit-clip-path","circle(50% at 50% 50%)");
            console.log("ios");
		} return false; {
			return false;
		}
	}
}