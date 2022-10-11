$(document).ready(function() {
    $('.main-slider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 2000,
        autoplay: false,
        slidesToShow: 1,
        slidesToscroll: 1,
        fade: false
            //  adaptiveHeight: true,
    });
    // $('.nav-open').click(function() {
    //     $('.nav-bar').toggleClass('active');
    //     $('.mainoverlay').toggleClass('active');
    // });
    // $(document).on("click", function(e) {
    //     if (
    //         $(e.target).closest(".nav-bar").length == 0 &&
    //         $(".nav-bar").hasClass("active") &&
    //         $(e.target).closest(".nav-open").length == 0
    //     ) {
    //         $('.nav-bar').toggleClass('active');
    //         $('.mainoverlay').toggleClass('active');
    //     }
    // });
    $('.nav-open').click(function() {
        $('.nav-bar').toggleClass('active');
        $('.mainoverlay').toggleClass('active');
        $('body').toggleClass('active');
    });
    $(document).on("click", function(e) {
        if (
            $(e.target).closest(".nav-bar").length == 0 &&
            $(".nav-bar").hasClass("active") &&
            $(e.target).closest(".nav-open").length == 0
        ) {
            $('.nav-bar').toggleClass('active');
            $('.mainoverlay').toggleClass('active');
            $('body').toggleClass('active');
        }
    });

    $('.offer-slider').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('.location-slider').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $('.review-slider-parent').slick({
        centerMode: true,
        infinite: true,
        centerPadding: '200px',
        slidesToShow: 3,
        speed: 2000,
        autoplay: false,
        variableWidth: false,
        arrows: false,
        dots: false,
        // useCSS: false,
        // useTransform: false,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    centerPadding: '100px',
                }
            },
            {
                breakpoint: 600,
                settings: {
                    centerPadding: '10px',
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    centerPadding: '10px',
                    slidesToShow: 1,
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $(document).ready(function() {

        $("link-active").click(function() {
            $(this).addClass("active").siblings().removeClass("active");
        });
    });


    // $('.count').each(function() {
    //     $(this).prop('Counter', 0).animate({
    //         Counter: $(this).text()
    //     }, {
    //         duration: 3000,
    //         easing: 'swing',
    //         step: function(now) {
    //             $(this).text(Math.ceil(now));
    //         }
    //     });
    // });

    $(".count").each(countUp);

    function countUp() {
        var num = $(this).text();
        var decimal = 0;
        if (num.indexOf(".") > 0) { // if number is Decimal
            decimal = num.toString().split(".")[1].length;
        }
        $(this)
            .prop("Counter", 0.0)
            .animate({
                Counter: $(this).text()
            }, {
                duration: 2000,
                easing: "swing",
                step: function(now) {
                    $(this).text(parseFloat(now).toFixed(decimal));
                }
            });
    }

    $('.center').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        console.log('beforeChange', currentSlide, nextSlide);
    });
    $('.center').on('afterChange', function(event, slick, currentSlide) {
        console.log('afterChange', currentSlide);
    });
    $('.light-zoom').zoom();
});
$('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
    $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
});
$('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
});
$('.forgot-password').click(function() {
    $('.forgot-box').toggleClass('d-none').fadeIn(100);
});