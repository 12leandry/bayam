(function ($) {
    'use strict';

    $(document).on('ready', function () {
        // -----------------------------
        //  On Scroll Resize Nav
        // -----------------------------
        $(window).scroll(function () {
            if ($('.main-nav').offset().top > 100) {
                $('.main-nav').removeClass('large');
            } else {
                $('.main-nav').addClass('large');
            }
        });
        // -----------------------------
        //  On Click Smooth scrool
        // -----------------------------
        // animation scroll js
        var html_body = $('html, body');
        $('.scrollTo').on('click', function () { //use scrollTo class in any HTML tag for scrolling
            if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    html_body.animate({
                        scrollTop: target.offset().top - 50
                    }, 1500, 'easeInOutExpo');
                    return false;
                }
            }
        });

        // easeInOutExpo Declaration
        jQuery.extend(jQuery.easing, {
            easeInOutExpo: function (x, t, b, c, d) {
                if (t === 0) {
                    return b;
                }
                if (t === d) {
                    return b + c;
                }
                if ((t /= d / 2) < 1) {
                    return c / 2 * Math.pow(2, 10 * (t - 1)) + b;
                }
                return c / 2 * (-Math.pow(2, -10 * --t) + 2) + b;
            }
        });
        // -----------------------------
        //  Testimonial Slider
        // -----------------------------
        $('.testimonial-slider').slick({
            autoplay: false
        });
        // -----------------------------
        //  Screenshot Slider
        // -----------------------------
        $('.screenshot-slider').slick({
            dots: true,
            slidesToShow: 3,
            centerMode: true,
            infinite: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false
                }
            }]
        });
        // -----------------------------
        //  Video Replace
        // -----------------------------
        $('.video-box span.icon').click(function () {
            var video = '<iframe allowfullscreen src="' + $(this).attr('data-video') + '"></iframe>';
            $(this).replaceWith(video);
        });
        // -----------------------------
        //  Team Progress Bar
        // -----------------------------
        /* $('.team').waypoint(function () {
            $('.progress').each(function () {
                $(this).find('.progress-bar').animate({
                    width: $(this).attr('data-percent')
                });
            });
            this.destroy();
        }, {
            offset: 100
        }); */


        // -----------------------------
        //  Count Up
        // -----------------------------
        function counter() {
            var oTop;
            if ($('.count').length !== 0) {
                oTop = $('.count').offset().top - window.innerHeight;
            }
            if ($(window).scrollTop() > oTop) {
                $('.count').each(function () {
                    var $this = $(this),
                        countTo = $this.attr('data-count');
                    $({
                        countNum: $this.text()
                    }).animate({
                        countNum: countTo
                    }, {
                        duration: 1000,
                        easing: 'swing',
                        step: function () {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $this.text(this.countNum);
                        }
                    });
                });
            }
        }
        $(window).on('scroll', function () {
            counter();
        });

    });
    $(document).ready(function() {
        $('#testimonialsSlider').slick({
            slidesToShow: 4, // Display four testimonials on larger screens
            slidesToScroll: 1,
            dots: true,
            prevArrow: '<button type="button" class="slick-prev">Previous</button>',
            nextArrow: '<button type="button" class="slick-next">Next</button>',
            autoplay: true,
            autoplaySpeed: 5000,
            responsive: [{
                    breakpoint: 1024, // Breakpoint for larger screens (tablet)
                    settings: {
                        slidesToShow: 2, // Display three testimonials on tablet screens
                    }
                },
                {
                    breakpoint: 768, // Breakpoint for iPads (portrait) and smaller tablets
                    settings: {
                        slidesToShow: 2, // Display two testimonials on smaller tablets
                    }
                },
                {
                    breakpoint: 576, // Breakpoint for mobile devices
                    settings: {
                        slidesToShow: 1, // Display one testimonial on mobile screens
                    }
                }
            ],
            dots: true, // Enable dots navigation
            appendDots: $('#testimonialsSlider'),
        });

        $('.custom-prev').click(function() {
            $('#testimonialsSlider').slick('slickPrev');
        });

        $('.custom-next').click(function() {
            $('#testimonialsSlider').slick('slickNext');
        });
    });

    function checkViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function handleScroll() {
        const elements = document.querySelectorAll('.fade-in-up, .fade-in-down, .fade-in-left, .fade-in-right');

        elements.forEach(element => {
            if (checkViewport(element)) {
                element.classList.add("active");
            }
        });
    }

    // Add a scroll event listener
    window.addEventListener("scroll", handleScroll);

})(jQuery);