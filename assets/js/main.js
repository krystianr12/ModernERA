(function($) {
    "use strict";

    //when dom is ready
    $(document).ready(function() {

        // on scroll Navbar Fixed and back to top show
        $(window).on('scroll', function() {
            // prevent flickering in blog index page
            if($(location).attr('pathname').includes("blog/")) { return null; }

            if($(window).width() > 600){
                if ($(window).scrollTop() > 600) {
                    $('#header').addClass('navbar-fixed-top');
                    $('#back-to-top').addClass('reveal');
                } else {
                    $('#header').removeClass('navbar-fixed-top');
                    $('#back-to-top').removeClass('reveal');
                }
            }
        });

        // Search domain availability
        $('#search-domain').on('click', function(){
          var domain = $('#domain-value').val();

          if (isValidUrl(domain)){
            window.location.href = "https://billing.moderneradma.com/cart.php?a=add&domain=register&query=" + domain;
          } else {
            alert("Please enter a valid domain name.");
          }
        });

        $("#domain-value").keydown(function (e) {
          if (e.keyCode == 13) {
            alert($(this).val());
            window.location.href = "https://billing.moderneradma.com/cart.php?a=add&domain=register&query=" + domain;
          }
        });

        function isValidUrl(str) {
          var pattern = new RegExp('((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.?)+[a-z]{2,}|'+ // domain name
            '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
            '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
            '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
            '(\\#[-a-z\\d_]*)?$','i'); // fragment locator

          return pattern.test(str);
        }


        // Start Back to Top
        $('#back-to-top').on('click', function() {
            $("html, body").animate({scrollTop: 0}, 1000);
            return false;
        });

        // revolution slider start
        $("#rev_slider_1").show().revolution({
            sliderType: "standard",
            sliderLayout: "fullwidth",
            dottedOverlay: "none",
            delay: 9000,
            spinner: "spinner4",
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "on",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
                arrows: {
                    enable: true,
                    style: 'metis',
                    tmp: '',
                    rtl: false,
                    hide_onleave: true,
                    hide_onmobile: true,
                    hide_under: 0,
                    hide_over: 9999,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    left: {
                        container: 'slider',
                        h_align: 'left',
                        v_align: 'center',
                        h_offset: 20,
                        v_offset: 0
                    },
                    right: {
                        container: 'slider',
                        h_align: 'right',
                        v_align: 'center',
                        h_offset: 20,
                        v_offset: 0
                    }
                },
            },
            responsiveLevels: [1240, 1024, 767, 480],
            gridwidth: [1170, 1170, 767, 480],
            gridheight:[768,768,960,720],
            lazyType: "none",
            shadow: 0,
            shuffle: "off",
            autoHeight: "off",
        });
        // revolution slider end


        // Start Portfolio Section
        $(window).on('load', function() {

            //Portfolio Start
            var $container = $('.portfolio-box');
            $container.isotope({
                filter: '*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            $('.filter a').on('click', function() {
                $('.filter .active').removeClass('active');
                $(this).addClass('active');
                var selector = $(this).attr('data-filter');
                $('.portfolio-box').isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });
                return false;
            });
            //Portfolio End
        });


        // Start Animated Number
        $('.animated-counter').appear(function() {
            $('.animated-number').countTo({
                speed: 4000,
                refreshInterval: 60,
                formatter: function(value, options) {
                    return value.toFixed(options.decimals);
                }
            });
        });


        //Progress Bar
        $('.progress-bar').each(function(){
            var width = $(this).data('percentage');
            $(this).css({'transition': 'width 3s'});
            $(this).appear(function () {
                $(this).css('width', width + '%');
                $(this).find('.count').countTo({
                    from: 0,
                    to: width,
                    speed: 3000,
                    refreshInterval: 50,
                });
            });
        });

        // Start Easy Pie Chart
        $('.progress-chart-feature').appear(function() {
            $('.chart').easyPieChart({
                animate: 2000,
                barColor: '#ed1c24',
                trackColor: '#f6f6f6',
                scaleColor: '',
                lineCap: 'round',
                lineWidth: 10,
                size: 130
            });
        });

        //Owl Carousel-- Portfolio
        $(".portfolio-carousel").owlCarousel({
          items: 1,
          nav: false,
          loop: true
        });

        //Owl Carousel-- Hero Banner
        $(".hero-carousel").owlCarousel({
          items: 1,
          nav: false,
          dots: false,
          loop: true,
          touchDrag: false,
          mouseDrag: false
        });

        //Owl Carousel-- Hero Banner
        $(".video-carousel").owlCarousel({
          items: 1,
          nav: false,
          dots: true,
          loop: true
        });

        //Owl Carousel-- Hero Banner
        $(".photo-carousel").owlCarousel({
          items: 1,
          nav: false,
          dots: true,
          loop: true
        });

        //Owl Carousel-- Testimonial
        $(".testimonial-carousel").owlCarousel({
            navigation: false,
            items : 1,
            itemsDesktop : [1000,1],
            itemsDesktopSmall : [900,1],
            itemsTablet: [767,1],
            slideSpeed: 2500,
            stopOnHover: true,
            autoPlay: true,
            singleItem: false,
            navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
        });

        //Owl Carousel-- Latest News
        $(".news-carousel").owlCarousel({
            pagination: true,
            navigation: false,
            items : 3,
            itemsDesktop : [1000,3],
            itemsDesktopSmall : [900,3],
            itemsTablet: [767,2],
            slideSpeed: 2500,
            stopOnHover: true,
            autoPlay: true,
            singleItem: false,
            navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
        });

        // Important feature Tooltip
        $('[data-toggle="important-features"]').hover(
           function(){
            $(this).parents('.package-box').find('.important-features').css("visibility", "visible");
           }, function(){
            $(this).parents('.package-box').find('.important-features').css("visibility", "hidden");
           }
        );

        // Important feature Tooltip
        $('[data-toggle="basic-seo"]').hover(
           function(){
            $(this).parents('.package-box').find('.basic-seo').css("visibility", "visible");
           }, function(){
            $(this).parents('.package-box').find('.basic-seo').css("visibility", "hidden");
           }
        );

        $('[data-toggle="tooltip"]').tooltip();

        //video background
        try {
            jQuery(".player").mb_YTPlayer();
        } catch (err) {}

        //WOW js
        new WOW().init();

    });
    //dom ready end







})(jQuery);
