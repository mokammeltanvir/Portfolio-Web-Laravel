; (function ($) {
    "use strict";


    //======menu fix js======
    if ($('.main_menu').offset() != undefined) {
        var navoff = $('.main_menu').offset().top;
        $(window).scroll(function () {
            var scrolling = $(this).scrollTop();

            if (scrolling > navoff) {
                $('.main_menu').addClass('menu_fix');
            } else {
                $('.main_menu').removeClass('menu_fix');
            }
        });
    }



    $(document).on('ready', function () {
        var mY = 0;
        $('body').mousemove(function (e) {
            // moving upward
            if (e.pageX < mY) {
                $('.primary-menu ul.nav li a').addClass('left-go');
                $('.primary-menu ul.nav li a').removeClass('right-go');
                // moving downward
            } else {
                $('.primary-menu ul.nav li a').addClass('right-go');
                $('.primary-menu ul.nav li a').removeClass('left-go');
            }
            // set new mY after doing test above
            mY = e.pageX;
        });
        $('.single-portfolio').each(function () { $(this).hoverdir(); });
        /*--Primary-Menu-Dropdown-Plus-Icon--*/
        $('.primary-menu .sub-menu').parent('li').children('a').append('<i class="plus"></i>');


        /*-- Button-Hover-Effect-Script --*/
        $('.mouse-dir').on('mouseenter', function (e) {
            var parentOffset = $(this).offset(),
                relX = e.pageX - parentOffset.left,
                relY = e.pageY - parentOffset.top;
            if ($(this).find('.mouse-dir .dir-part')) {
                $('.mouse-dir .dir-part').css({
                    top: relY,
                    left: relX,
                });
            }
        });
        $('.mouse-dir').on('mouseout', function (e) {
            var parentOffset = $(this).offset(),
                relX = e.pageX - parentOffset.left,
                relY = e.pageY - parentOffset.top;
            if ($(this).find('.mouse-dir .dir-part')) {
                $('.mouse-dir .dir-part').css({
                    top: relY,
                    left: relX,
                });
            }
        });

        /*-- Line-Progress-Bar-Active --*/
        $(".bar_group").appear(function () {
            var value = $(this).find('.bar_group__bar').data('value');
            $(this).find('.b_tooltip span').animateNumber({
                number: value
            }, 1500);
        });

        $('.blog-slider').slick({
            dots: false,
            arrows: false,
            prevArrow: '<button class="slick-prev"  type="button"><i class="fa fa-angle-left"></i></button>',
            nextArrow: '<button class="slick-next" type="button"><i class="fa fa-angle-right"></i></button>',
            infinite: true,
            centerMode: false,
            autoplay: true,
            vertical: false,
            verticalSwiping: false,
            speed: 1000,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1170,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        /*-- Testimonail-Slider-Active --*/
        $('.testimonial-slider').slick({
            dots: true,
            arrows: false,
            infinite: true,
            centerMode: false,
            autoplay: true,
            vertical: false,
            verticalSwiping: false,
            speed: 1000,
            slidesToShow: 2,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1170,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        // Portfolio Image Loded with Masonry
        var PortfolioMasonry = $('.portfolios');
        if (typeof imagesLoaded == 'function') {
            imagesLoaded(PortfolioMasonry, function () {
                setTimeout(function () {
                    PortfolioMasonry.isotope({
                        itemSelector: '.filter-item',
                        resizesContainer: false,
                        layoutMode: 'masonry',
                        filter: '*'
                    });
                }, 500);

            });
        };

        // Set Active Class for Portfolio filter
        $('.filter-menu li').on('click', function (event) {
            $('.filter-menu li').removeClass('active');
            $(this).addClass('active');
            event.preventDefault();
        });

        // Filter JS for Porrtfolio
        $('.filter-menu').on('click', 'li', function () {
            var filterValue = $(this).attr('data-filter');
            PortfolioMasonry.isotope({
                filter: filterValue
            });
        });

        /*-- Mobile-Menu-Active --*/
        $('.primary-menu').slicknav({
            label: '',
            duration: 500,
            prependTo: '',
            closedSymbol: '<i class="fa fa-angle-right"></i>',
            openedSymbol: '<i class="fa fa-angle-right"></i>',
            appendTo: '.mainmenu-area',
            menuButton: '.navi-trigger',
            closeOnClick: 'true' // Close menu when a link is clicked.
        });



        /*-- Click-Smoth-Scroll-Script --*/
        $('.mainmenu-area a[href*="#"]')
            .not('[href="#"]')
            .not('[href="#0"]')
            .on('click', function (event) {
                if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    // Figure out element to scroll to
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000, function () {
                            // Callback after animation
                            // Must change focus!
                            var $target = $(target);
                            $target.focus();
                            if ($target.is(":focus")) { // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            };
                        });
                    }
                }
            });




        $(window).on("load", function () {
            /*-- Preloader-Fade-Out-After-Load-Window --*/
            $('.preloader').fadeOut(500);
            $('body').append('<a href="#" id="scrollUp"><i class="fal fa-long-arrow-up"></i></a>');
            $('#scrollUp').on('click', function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 500);
                return false;
            });
            /*-- WoW-Animation-JS --*/
            new WOW().init({
                mobile: false,
            });
        });
        $('.navi-trigger').on('click', function () {
            $(this).toggleClass('active');
        });

        // SLIDER
        var menu = [];
        jQuery('.swiper-slide').each(function (index) {
            menu.push(jQuery(this).find('.slide-inner').attr("data-text"));
        });
        var interleaveOffset = 0.5;
        var swiperOptions = {
            loop: true,
            speed: 1000,
            parallax: true,
            autoplay: {
                delay: 6500,
                disableOnInteraction: false,
            },
            watchSlidesProgress: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            on: {
                progress: function () {
                    var swiper = this;
                    for (var i = 0; i < swiper.slides.length; i++) {
                        var slideProgress = swiper.slides[i].progress;
                        var innerOffset = swiper.width * interleaveOffset;
                        var innerTranslate = slideProgress * innerOffset;
                        swiper.slides[i].querySelector(".slide-inner").style.transform =
                            "translate3d(" + innerTranslate + "px, 0, 0)";
                    }
                },
                touchStart: function () {
                    var swiper = this;
                    for (var i = 0; i < swiper.slides.length; i++) {
                        swiper.slides[i].style.transition = "";
                    }
                },
                setTransition: function (speed) {
                    var swiper = this;
                    for (var i = 0; i < swiper.slides.length; i++) {
                        swiper.slides[i].style.transition = speed + "ms";
                        swiper.slides[i].querySelector(".slide-inner").style.transition =
                            speed + "ms";
                    }
                }
            }
        };

        var swiper = new Swiper(".swiper-container", swiperOptions);

        // DATA BACKGROUND IMAGE
        var sliderBgSetting = $(".slide-bg-image");
        sliderBgSetting.each(function (indx) {
            if ($(this).attr("data-background")) {
                $(this).css("background-image", "url(" + $(this).data("background") + ")");
            }
        });

        /*-- Perticle-JS --*/
        if (null != document.getElementById("particles-js")) {
            particlesJS('particles-js', {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#ffffff"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                        "image": {
                            "src": "img/github.svg",
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#ffffff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 6,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "repulse"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            });

        }
    });


    /*-- Scroll-To-Top --*/
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 100) {        // If page is scrolled more than 50px
            $('#scrollUp').addClass('active');    // Fade in the arrow
        } else {
            $('#scrollUp').removeClass('active');   // Else fade out the arrow
        }
    });

    var $el = $('.parallax-bg');
    $(window).on('scroll', function () {
        var scroll = $(document).scrollTop();
        $el.css({
            'background-position': '50% ' + (+.4 * scroll) + 'px'
        });
    });

})(jQuery);
