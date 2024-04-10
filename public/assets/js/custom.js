(function ($) {
    "use strict";

    function selectRefresh() {
        $('.select-from').select2({ placeholder: "Where from?" });
        $('.select-to').select2({ placeholder: "Where to?" });
        $('.select-destination').select2({ placeholder: "What is your destination?" });
        $('.select-tours').select2({ placeholder: "Tour Type" });
        $('.select-days').select2({ placeholder: "Days" });
        $('.select-country').select2({ placeholder: "Select Country" });
        $('.select-visa-type').select2({ placeholder: "Visa Type" });
    }

    $("#btnAddNewFlight").on('click', function () {
        $(".parentNewFlightRows").append(`
        <div class="row child-flight-row childFlightRow">
            <div class="col-lg-4 mb-20 mb-md-10">
                <select class="select-from select2-style-1 select-takeoff"
                    name="state">
                    <option></option>
                    <option>DBD,DHANBAD,Dhanbad,IN</option>
                    <option>DBR,Darbhanga Airport,Darbhanga,IN</option>
                    <option>DEL,Indira Gandhi Airport,Delhi,IN</option>
                    <option>DDN,DELTA DOWNS,Delta Downs,AU </option>
                    <option>DJN,Delta Junction,Delta Junction,US</option>
                </select>
            </div>
            <div class="col-lg-auto mb-20 mb-md-10 d-flex justify-content-center">
                <button class="btn btn-interchange px-10 py-10">
                    <svg viewBox="0 0 106 107" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M81.361 81.7225L96.9998 66.0414L81.361 50.3604L75.3591 56.3623L80.8538 61.8147H44.5464V70.2681H80.8538L75.3591 75.7206L81.361 81.7225Z" />
                        <path
                            d="M30.6407 50.3602L25.146 44.9078H61.4534V36.4544H25.146L30.6407 31.0019L24.6388 25L9 40.6811L24.6388 56.3622L30.6407 50.3602Z" />
                    </svg>
                </button>
            </div>
            <div class="col-lg-4 mb-20 mb-md-10">
                <select class="select-to select2-style-1 select-land" name="state">
                    <option></option>
                    <option>DBD,DHANBAD,Dhanbad,IN</option>
                    <option>DBR,Darbhanga Airport,Darbhanga,IN</option>
                    <option>DEL,Indira Gandhi Airport,Delhi,IN</option>
                    <option>DDN,DELTA DOWNS,Delta Downs,AU </option>
                    <option>DJN,Delta Junction,Delta Junction,US</option>
                </select>
            </div>
            <div class="col-lg mb-20 mb-md-10">
                <input type="date" value="<?php echo date('Y-m-d'); ?>" id="demo"
                    name="journey_date" class="txtDate form-control" required>
            </div>
            <div class="col-lg-auto mb-20 mb-md-10">
                <button type="submit"
                    class="btn btn-th-outline-danger btnRemove py-10 px-20"><i
                        class="fas fa-times"></i></button>
            </div>
        </div>
        `);
        selectRefresh();
        $(".btnRemove").css("opacity","1");   
    });

    $(".date-box").on('click', function () {
        $(this).next().hide();
        $(this).attr("type", "date");
    });

    $(document).on('click',".btnRemove", function(){
        var getChildFlightRowCount = $(".parentNewFlightRows").find(".childFlightRow").length;
        if(getChildFlightRowCount > 1) {
            $(this).closest(".childFlightRow").remove();    
            if(getChildFlightRowCount == 2) {
                $(".btnRemove").css("opacity","0.5");    
            }
        }
    });

    selectRefresh();

    var getFlightTripRadioButtonValue = $('input[type=radio][name=flighttrip]:checked').val();

    if (getFlightTripRadioButtonValue == "One Way") {
        $(".onChangeOneWay").css("display", "flex");
        $(".onChangeRoundTrip").css("display", "none");
        $(".onChangeMultiCity").css("display", "none");
    } else if (getFlightTripRadioButtonValue == "Round Trip") {
        $(".onChangeRoundTrip").css("display", "flex");
        $(".onChangeOneWay").css("display", "none");
        $(".onChangeMultiCity").css("display", "none");
    } else {
        $(".onChangeMultiCity").css("display", "flex");
        $(".onChangeOneWay").css("display", "none");
        $(".onChangeRoundTrip").css("display", "none");
    }

    $('input[type=radio][name=flighttrip]').change(function () {
        if (this.id == "tripOneway") {
            $(".onChangeOneWay").css("display", "flex");
            $(".onChangeRoundTrip").css("display", "none");
            $(".onChangeMultiCity").css("display", "none");
        } else if (this.id == "tripRoundtrip") {
            $(".onChangeRoundTrip").css("display", "flex");
            $(".onChangeOneWay").css("display", "none");
            $(".onChangeMultiCity").css("display", "none");
        } else {
            $(".onChangeMultiCity").css("display", "flex");
            $(".onChangeOneWay").css("display", "none");
            $(".onChangeRoundTrip").css("display", "none");
        }
    });

    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 10) { 
            $('.navbar-area').addClass("is-sticky"); 
            $('.main-navbar .navbar .others-options .option-item:last-child').css("display", "block");
        }
        else { 
            $('.navbar-area').removeClass("is-sticky"); 
            $('.main-navbar .navbar .others-options .option-item:last-child').css("display", "none");
        }
    });

    $(".dropdown-menu li a").on("click", function() { 
        var getText = $(this).text();
        $(this).closest(".dropdown").find(".btn span").empty();
        $(this).closest(".dropdown").find(".btn span").append(getText);
    });

    $(function () {
        $(window).on('scroll', function () {
            var scrolled = $(window).scrollTop();
            if (scrolled > 600) $('.go-top').addClass('active'); if (scrolled < 600) $('.go-top').removeClass('active');
        });

        $('.go-top').on('click', function () { $("html, body").animate({ scrollTop: "0" }, 500); });
    });

    jQuery('.mean-menu').meanmenu({
        meanScreenWidth: "1199"
    });

    $(".others-option-for-responsive .dot-menu").on("click", function () { $(".others-option-for-responsive .container .container").toggleClass("active"); });
    $(".others-options .search-box").on("click", function () { $(".search-overlay").toggleClass("search-overlay-active"); });
    $(".search-overlay-close").on("click", function () { $(".search-overlay").removeClass("search-overlay-active"); });
    $(".language-option").each(function () {
        var each = $(this)
        each.find(".lang-name").html(each.find(".language-dropdown-menu a:nth-child(1)").text());
        var allOptions = $(".language-dropdown-menu").children('a');
        each.find(".language-dropdown-menu").on("click", "a", function () {
            allOptions.removeClass('selected'); $(this).addClass('selected');
            $(this).closest(".language-option").find(".lang-name").html($(this).text());
        });
    })

    // Banner Slider
    $('.home_two_banner_slider_wrapper').owlCarousel({
        loop: true,
        autoplay: false,
        autoplayTimeout: 4000,
        animateOut: 'slideOutLeft',
        dots: false,
        nav: true,
        navText: ["<i class='fas fa-arrow-left'></i>", "<i class=' fas fa-arrow-right' ></i>"],
        responsive: {
            0: {
                items: 1
            },
            360: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    // Service Slider
    $('.promotional_tour_slider').owlCarousel({
        loop: true,
        dots: true,
        autoplayHoverPause: true,
        autoplay: true,
        smartSpeed: 1000,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 4
            }
        }
    });

    // Trending Slider
    $('.Trending_tour_slider').owlCarousel({
        loop: true,
        dots: false,
        autoplayHoverPause: true,
        autoplay: true,
        smartSpeed: 1000,
        margin: 10,
        nav: true,
        navText: ["<i class='fas fa-arrow-left'></i>", "<i class=' fas fa-arrow-right' ></i>"],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 4
            }
        }
    });
    // Popular Hotels Slider
    $('.Popular_hotels_slider').owlCarousel({
        loop: true,
        dots: false,
        autoplayHoverPause: true,
        autoplay: true,
        smartSpeed: 1000,
        margin: 10,
        nav: true,
        navText: ["<i class='fas fa-arrow-left'></i>", "<i class=' fas fa-arrow-right' ></i>"],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 4
            }
        }
    });
    // Home TWo Client Slider
    $('.home_two_client_slider').owlCarousel({
        loop: true,
        dots: true,
        autoplayHoverPause: true,
        autoplay: true,
        smartSpeed: 1000,
        margin: 0,
        nav: false,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 1,
            },
            992: {
                items: 1,
            },
            1200: {
                items: 1
            }
        }
    });
    // three_offer_slider
        $('.three_offer_slider').owlCarousel({
        loop: true,
        dots: false,
        autoplayHoverPause: true,
        autoplay: true,
        smartSpeed: 1000,
        margin: 30,
        nav: true,
        navText: ["<i class='fas fa-arrow-left'></i>", "<i class=' fas fa-arrow-right' ></i>"],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 4
            }
        }
    });
    // Best Offer
        $('.best_offers_four_item_slider').owlCarousel({
        loop: true,
        dots: false,
        autoplayHoverPause: true,
        autoplay: true,
        smartSpeed: 1000,
        margin: 30,
        nav: true,
        navText: ["<i class='fas fa-arrow-left'></i>", "<i class=' fas fa-arrow-right' ></i>"],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 4
            }
        }
    });
    // Tour Type Slider
        $('.tour_type_slider').owlCarousel({
        loop: true,
        dots: false,
        autoplayHoverPause: true,
        autoplay: true,
        smartSpeed: 1000,
        margin: 30,
        nav: true,
        navText: ["<i class='fas fa-arrow-left'></i>", "<i class=' fas fa-arrow-right' ></i>"],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 5
            }
        }
    });
    // Home Four Popular Slider 
        $('.popular_tours_four_slider').owlCarousel({
        loop: true,
        dots: false,
        autoplayHoverPause: true,
        autoplay: true,
        smartSpeed: 1000,
        margin: 30,
        nav: true,
        navText: ["<i class='fas fa-arrow-left'></i>", "<i class=' fas fa-arrow-right' ></i>"],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1399: {
                items: 3
            },
            1400: {
                items: 4
            }
        }
    });
    // Home Four Top Details Slider 
        $('.top_details_four_slider').owlCarousel({
        loop: true,
        dots: false,
        autoplayHoverPause: true,
        autoplay: true,
        smartSpeed: 1000,
        margin: 30,
        nav: true,
        navText: ["<i class='fas fa-arrow-left'></i>", "<i class=' fas fa-arrow-right' ></i>"],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 2,
            },
            1399: {
                items: 2
            },
            1400: {
                items: 3
            }
        }
    });
    // Home Four Testimonials Slider 
        $('.testimonials_slider_four_wrapper').owlCarousel({
        loop: true,
        dots: true,
        autoplayHoverPause: true,
        autoplay: true,
        smartSpeed: 1000,
        margin: 30,
        nav: false,
        navText: ["<i class='fas fa-arrow-left'></i>", "<i class=' fas fa-arrow-right' ></i>"],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 1,
            },
            992: {
                items: 1,
            },
            1399: {
                items: 1,
            },
            1400: {
                items: 1
            }
        }
    });
    // partner_slider_area Slider
    $('.partner_slider_area').owlCarousel({
        loop: true,
        dots: false,
        autoplayHoverPause: true,
        autoplay: true,
        smartSpeed: 1000,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 2,
            },
            768: {
                items: 4,
            },
            992: {
                items: 4,
            },
            1200: {
                items: 8
            }
        }
    });

    // Slider For category pages / filter price
    if (typeof noUiSlider === 'object') {
        var priceSlider = document.getElementById('price-slider');

        // Check if #price-slider elem is exists if not return
        // to prevent error logs
        if (priceSlider == null) return;

        noUiSlider.create(priceSlider, {
            start: [0, 750],
            connect: true,
            step: 50,
            margin: 200,
            range: {
                'min': 0,
                'max': 1000
            },
            tooltips: true,
            format: wNumb({
                decimals: 0,
                prefix: '$'
            })
        });
    }

}(jQuery));

$(document).ready(function () {
    $('#dashboard_dropdowns').on('click', (function () {
        $('#show_dropdown_item').slideToggle("slow");
    })
    )
});

// OTP Input
document.querySelectorAll(".otSc").forEach(function (otpEl) {
    otpEl.addEventListener("keyup", backSp);
    otpEl.addEventListener("keypress", function () {
        var nexEl = this.nextElementSibling;
        nexEl.focus();
    });
})
function backSp(backKey) {
    if (backKey.keyCode == 8) {
        var prev = this.previousElementSibling.focus()
    }
}

jQuery(window).on('load', function () { jQuery(".preloader").fadeOut(3000); });