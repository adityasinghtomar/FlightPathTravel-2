@include('flight.header')
    <!-- search -->
    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>
                <div class="search-overlay-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="button"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Common Banner Area -->
    <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>Hotel details</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span><a href="hotel-search.html">Hotel</a></li>
                            <li><span><i class="fas fa-circle"></i></span> Hotel Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@if(isset($ress->HotelInfoResult->HotelDetails))
                <?php $data = $ress->HotelInfoResult->HotelDetails->HotelName; ?>
    <!-- Hotel Search Areas -->
    <section id="tour_details_main" class="section_padding">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-8">
                    
                    <div class="tour_details_leftside_wrapper">
                        <div class="tour_details_heading_wrapper">
                            <div class="tour_details_top_heading">
                                <h2><?php print_r($data); ?></h2>
                                <h5><i class="fasfa-map-marker-alt"></i> Los angeles</h5>
                            </div>
                            <div class="tour_details_top_heading_right">
                                <h4>Excellent</h4>
                                <h6>4.8/5</h6>
                                <p>(1214 reviewes)</p>
                            </div>
                        </div>
                        <div class="tour_details_top_bottom">
                            <div class="toru_details_top_bottom_item">
                                <div class="tour_details_top_bottom_icon">
                                    <img src="assets/img/icon/ac.png" alt="icon">
                                </div>
                                <div class="tour_details_top_bottom_text">
                                    <p>Air condition</p>
                                </div>
                            </div>
                            <div class="toru_details_top_bottom_item">
                                <div class="tour_details_top_bottom_icon">
                                    <img src="assets/img/icon/tv.png" alt="icon">
                                </div>
                                <div class="tour_details_top_bottom_text">
                                    <p>Flat television</p>
                                </div>
                            </div>
                            <div class="toru_details_top_bottom_item">
                                <div class="tour_details_top_bottom_icon">
                                    <img src="assets/img/icon/gym.png" alt="icon">
                                </div>
                                <div class="tour_details_top_bottom_text">
                                    <p>Fitness center</p>
                                </div>
                            </div>
                            <div class="toru_details_top_bottom_item">
                                <div class="tour_details_top_bottom_icon">
                                    <img src="assets/img/icon/wifi.png" alt="icon">
                                </div>
                                <div class="tour_details_top_bottom_text">
                                    <p>Free Wi-fi</p>
                                </div>
                            </div>
                        </div>
                        <div class="tour_details_img_wrapper">
                            @if(isset($ress->HotelInfoResult->HotelDetails->Images))
                            <div class="slider slider-for">
                                
                                <div>
                                    <img src="<?php echo $ress->HotelInfoResult->HotelDetails->Images['0']; ?>" alt="img">
                                </div>
                                
                            </div>
                            <div class="slider slider-nav">
                                <?php $image = $ress->HotelInfoResult->HotelDetails->Images; ?>
                                @foreach($image as $images)
                                <div>
                                    <img src="<?php echo $images; ?>" alt="img" style="width:200px;height:200px; margin-right:3px;">
                                </div>
                                @endforeach
                            </div>
                            @endif
                        </div>
                        <div class="tour_details_boxed">
                            <h3 class="heading_theme">Overview</h3>
                            <div class="tour_details_boxed_inner">
                                <p><?php echo $ress->HotelInfoResult->HotelDetails->Description; ?>
                                </p>
                            </div>
                        </div>
                        <!--<div class="tour_details_boxed">-->
                        <!--    <h3 class="heading_theme">Select your room</h3>-->
                        <!--    <div class="room_select_area">-->
                        <!--        <ul class="nav nav-tabs" id="myTab" role="tablist">-->
                        <!--            <li class="nav-item" role="presentation">-->
                        <!--                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"-->
                        <!--                    data-bs-target="#home" type="button" role="tab" aria-controls="home"-->
                        <!--                    aria-selected="true">Book</button>-->
                        <!--            </li>-->
                        <!--            <li class="nav-item" role="presentation">-->
                        <!--                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"-->
                        <!--                    data-bs-target="#profile" type="button" role="tab" aria-controls="profile"-->
                        <!--                    aria-selected="false">Enquiry</button>-->
                        <!--            </li>-->
                        <!--        </ul>-->
                        <!--        <div class="tab-content" id="myTabContent">-->
                        <!--            <div class="tab-pane fade show active" id="home" role="tabpanel"-->
                        <!--                aria-labelledby="home-tab">-->
                        <!--                <div class="room_booking_area">-->
                        <!--                    <div class="tour_search_form">-->
                        <!--                        <form action="!#">-->
                        <!--                            <div class="row">-->
                        <!--                                <div class="col-lg-8 col-md-6 col-sm-12 col-12">-->
                        <!--                                    <div class="form_search_date">-->
                        <!--                                        <div class="flight_Search_boxed date_flex_area">-->
                        <!--                                            <div class="Journey_date">-->
                        <!--                                                <p>Check In date</p>-->
                        <!--                                                <input type="date" value="2022-05-03">-->
                        <!--                                                <span>Thursday</span>-->
                        <!--                                            </div>-->
                        <!--                                            <div class="Journey_date">-->
                        <!--                                                <p>Check Out date</p>-->
                        <!--                                                <input type="date" value="2022-05-05">-->
                        <!--                                                <span>Thursday</span>-->
                        <!--                                            </div>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">-->
                        <!--                                    <div class="flight_Search_boxed dropdown_passenger_area">-->
                        <!--                                        <p>Guests</p>-->
                        <!--                                        <div class="dropdown">-->
                        <!--                                            <button class="dropdown-toggle"-->
                        <!--                                                data-toggle="dropdown" type="button"-->
                        <!--                                                id="dropdownMenuButton1"-->
                        <!--                                                data-bs-toggle="dropdown" aria-expanded="false">-->
                        <!--                                                1 Guests-->
                        <!--                                            </button>-->
                        <!--                                            <div class="dropdown-menu dropdown_passenger_info"-->
                        <!--                                                aria-labelledby="dropdownMenuButton1">-->
                        <!--                                                <div class="traveller-calulate-persons">-->
                        <!--                                                    <div class="passengers">-->
                        <!--                                                        <h6>Passengers</h6>-->
                        <!--                                                        <div class="passengers-types">-->
                        <!--                                                            <div class="passengers-type">-->
                        <!--                                                                <div class="text"><span-->
                        <!--                                                                        class="count">2</span>-->
                        <!--                                                                    <div class="type-label">-->
                        <!--                                                                        <p>Adult</p>-->
                        <!--                                                                        <span>12+-->
                        <!--                                                                            yrs</span>-->
                        <!--                                                                    </div>-->
                        <!--                                                                </div>-->
                        <!--                                                                <div class="button-set">-->
                        <!--                                                                    <button type="button">-->
                        <!--                                                                        <i-->
                        <!--                                                                            class="fas fa-plus"></i>-->
                        <!--                                                                    </button>-->
                        <!--                                                                    <button type="button">-->
                        <!--                                                                        <i-->
                        <!--                                                                            class="fas fa-minus"></i>-->
                        <!--                                                                    </button>-->
                        <!--                                                                </div>-->
                        <!--                                                            </div>-->
                        <!--                                                            <div class="passengers-type">-->
                        <!--                                                                <div class="text"><span-->
                        <!--                                                                        class="count">0</span>-->
                        <!--                                                                    <div class="type-label">-->
                        <!--                                                                        <p class="fz14 mb-xs-0">-->
                        <!--                                                                            Children-->
                        <!--                                                                        </p><span>2-->
                        <!--                                                                            - Less than 12-->
                        <!--                                                                            yrs</span>-->
                        <!--                                                                    </div>-->
                        <!--                                                                </div>-->
                        <!--                                                                <div class="button-set">-->
                        <!--                                                                    <button type="button">-->
                        <!--                                                                        <i-->
                        <!--                                                                            class="fas fa-plus"></i>-->
                        <!--                                                                    </button>-->
                        <!--                                                                    <button type="button">-->
                        <!--                                                                        <i-->
                        <!--                                                                            class="fas fa-minus"></i>-->
                        <!--                                                                    </button>-->
                        <!--                                                                </div>-->
                        <!--                                                            </div>-->
                        <!--                                                            <div class="passengers-type">-->
                        <!--                                                                <div class="text"><span-->
                        <!--                                                                        class="count">0</span>-->
                        <!--                                                                    <div class="type-label">-->
                        <!--                                                                        <p class="fz14 mb-xs-0">-->
                        <!--                                                                            Infant-->
                        <!--                                                                        </p><span>Less-->
                        <!--                                                                            than 2-->
                        <!--                                                                            yrs</span>-->
                        <!--                                                                    </div>-->
                        <!--                                                                </div>-->
                        <!--                                                                <div class="button-set">-->
                        <!--                                                                    <button type="button">-->
                        <!--                                                                        <i-->
                        <!--                                                                            class="fas fa-plus"></i>-->
                        <!--                                                                    </button>-->
                        <!--                                                                    <button type="button">-->
                        <!--                                                                        <i-->
                        <!--                                                                            class="fas fa-minus"></i>-->
                        <!--                                                                    </button>-->
                        <!--                                                                </div>-->
                        <!--                                                            </div>-->
                        <!--                                                        </div>-->
                        <!--                                                    </div>-->

                        <!--                                                </div>-->
                        <!--                                            </div>-->
                        <!--                                        </div>-->
                        <!--                                        <span>Adult</span>-->

                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                                <div class="top_form_search_button text-right">-->
                        <!--                                    <button class="btn btn_theme btn_md" type="button">Check-->
                        <!--                                        availability</button>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </form>-->
                        <!--                    </div>-->
                        <!--                    <div class="room_book_item">-->
                        <!--                        <div class="room_book_img">-->
                        <!--                            <img src="assets/img/hotel/room-1.png" alt="img">-->
                        <!--                        </div>-->
                        <!--                        <div class="room_booking_right_side">-->
                        <!--                            <div class="room_booking_heading">-->
                        <!--                                <h3><a href="room-booking.html">Culpa cupidatat laborum eiusmod-->
                        <!--                                        amet</a></h3>-->
                        <!--                                <div class="room_fasa_area">-->
                        <!--                                    <ul>-->
                        <!--                                        <li><img src="assets/img/icon/ac.png" alt="icon">Air-->
                        <!--                                            condition</li>-->
                        <!--                                        <li><img src="assets/img/icon/gym.png"-->
                        <!--                                                alt="icon">Fitness-->
                        <!--                                            center</li>-->
                        <!--                                    </ul>-->
                        <!--                                    <ul>-->
                        <!--                                        <li><img src="assets/img/icon/tv.png" alt="icon">Flat-->
                        <!--                                            television</li>-->
                        <!--                                        <li><img src="assets/img/icon/wifi.png" alt="icon">Free-->
                        <!--                                            Wi-fi</li>-->
                        <!--                                    </ul>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                            <div class="room_person_select">-->
                        <!--                                <h3>$1200.00/ <sub>Per night</sub></h3>-->
                        <!--                                <select class="form-select" aria-label="Default select example">-->
                        <!--                                    <option selected>1</option>-->
                        <!--                                    <option value="2">2</option>-->
                        <!--                                    <option value="3">3</option>-->
                        <!--                                    <option value="4">4</option>-->
                        <!--                                </select>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                    <div class="room_book_item">-->
                        <!--                        <div class="room_book_img">-->
                        <!--                            <img src="assets/img/hotel/room-2.png" alt="img">-->
                        <!--                        </div>-->
                        <!--                        <div class="room_booking_right_side">-->
                        <!--                            <div class="room_booking_heading">-->
                        <!--                                <h3><a href="room-booking.html">Aliquip sit nisi est laboris-->
                        <!--                                        eiusmod</a></h3>-->
                        <!--                                <div class="room_fasa_area">-->
                        <!--                                    <ul>-->
                        <!--                                        <li><img src="assets/img/icon/ac.png" alt="icon">Air-->
                        <!--                                            condition</li>-->
                        <!--                                        <li><img src="assets/img/icon/gym.png"-->
                        <!--                                                alt="icon">Fitness-->
                        <!--                                            center</li>-->
                        <!--                                    </ul>-->
                        <!--                                    <ul>-->
                        <!--                                        <li><img src="assets/img/icon/tv.png" alt="icon">Flat-->
                        <!--                                            television</li>-->
                        <!--                                        <li><img src="assets/img/icon/wifi.png" alt="icon">Free-->
                        <!--                                            Wi-fi</li>-->
                        <!--                                    </ul>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                            <div class="room_person_select">-->
                        <!--                                <h3>$1200.00/ <sub>Per night</sub></h3>-->
                        <!--                                <select class="form-select" aria-label="Default select example">-->
                        <!--                                    <option selected>1</option>-->
                        <!--                                    <option value="2">2</option>-->
                        <!--                                    <option value="3">3</option>-->
                        <!--                                    <option value="4">4</option>-->
                        <!--                                </select>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                    <div class="room_book_item">-->
                        <!--                        <div class="room_book_img">-->
                        <!--                            <img src="assets/img/hotel/room-3.png" alt="img">-->
                        <!--                        </div>-->
                        <!--                        <div class="room_booking_right_side">-->
                        <!--                            <div class="room_booking_heading">-->
                        <!--                                <h3><a href="room-booking.html">Ea sint elit duis nostrud-->
                        <!--                                        consequat</a></h3>-->
                        <!--                                <div class="room_fasa_area">-->
                        <!--                                    <ul>-->
                        <!--                                        <li><img src="assets/img/icon/ac.png" alt="icon">Air-->
                        <!--                                            condition</li>-->
                        <!--                                        <li><img src="assets/img/icon/gym.png"-->
                        <!--                                                alt="icon">Fitness-->
                        <!--                                            center</li>-->
                        <!--                                    </ul>-->
                        <!--                                    <ul>-->
                        <!--                                        <li><img src="assets/img/icon/tv.png" alt="icon">Flat-->
                        <!--                                            television</li>-->
                        <!--                                        <li><img src="assets/img/icon/wifi.png" alt="icon">Free-->
                        <!--                                            Wi-fi</li>-->
                        <!--                                    </ul>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                            <div class="room_person_select">-->
                        <!--                                <h3>$1200.00/ <sub>Per night</sub></h3>-->
                        <!--                                <select class="form-select" aria-label="Default select example">-->
                        <!--                                    <option selected>1</option>-->
                        <!--                                    <option value="2">2</option>-->
                        <!--                                    <option value="3">3</option>-->
                        <!--                                    <option value="4">4</option>-->
                        <!--                                </select>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--            <div class="tab-pane fade" id="profile" role="tabpanel"-->
                        <!--                aria-labelledby="profile-tab">-->
                        <!--                <div class="write_review_inner_boxed">-->
                        <!--                    <form action="!#" id="news_comment_form">-->
                        <!--                        <div class="row">-->
                        <!--                            <div class="col-lg-6">-->
                        <!--                                <div class="form-froup">-->
                        <!--                                    <input type="text" class="form-control bg_input"-->
                        <!--                                        placeholder="Enter full name">-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                            <div class="col-lg-6">-->
                        <!--                                <div class="form-froup">-->
                        <!--                                    <input type="text" class="form-control bg_input"-->
                        <!--                                        placeholder="Enter email address">-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                            <div class="col-lg-12">-->
                        <!--                                <div class="form-froup">-->
                        <!--                                    <textarea rows="6" placeholder="Write your comments"-->
                        <!--                                        class="form-control bg_input"></textarea>-->
                        <!--                                </div>-->
                        <!--                                <div class="comment_form_submit">-->
                        <!--                                    <button class="btn btn_theme btn_md">Enquiry</button>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </form>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="tour_details_boxed">-->
                        <!--    <h3 class="heading_theme">Included/Excluded</h3>-->
                        <!--    <div class="tour_details_boxed_inner">-->
                        <!--        <p>-->
                        <!--            Stet clitaStet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor-->
                        <!--            sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy-->
                        <!--            eirmod.-->
                        <!--        </p>-->
                        <!--        <ul>-->
                        <!--            <li><i class="fas fa-circle"></i>Buffet breakfast as per the Itinerary</li>-->
                        <!--            <li><i class="fas fa-circle"></i>Visit eight villages showcasing Polynesian culture-->
                        <!--            </li>-->
                        <!--            <li><i class="fas fa-circle"></i>Complimentary Camel safari, Bonfire, and Cultural-->
                        <!--                Dance at Camp</li>-->
                        <!--            <li><i class="fas fa-circle"></i>All toll tax, parking, fuel, and driver allowances-->
                        <!--            </li>-->
                        <!--            <li><i class="fas fa-circle"></i>Comfortable and hygienic vehicle (SUV/Sedan) for-->
                        <!--                sightseeing on all days as per the itinerary.</li>-->
                        <!--        </ul>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="tour_details_boxed">
                            <h3 class="heading_theme">Hotel location</h3>
                            <div class="map_area">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9916.975593321238!2d-0.2763166259126239!3d51.58209318700696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4877a17cca5d0001%3A0x46d236266ce7b49!2sFlightPath%20Travel!5e0!3m2!1sen!2sin!4v1693608443247!5m2!1sen!2sin"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tour_details_right_sidebar_wrapper">
                        <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>Price</h3>
                                </div>
                                <div class="tour_package_bar_price">
                                    <h6><del><?php echo $CurrencyCode?> <?php echo $total?></del></h6>
                                    @if(session()->has('commision')) <?php $commision = session()->get('commision') ?>
                                            <h3><?php echo $CurrencyCode;?><?php $base123 = $total?> <?php $perce = $base123/100*$commision ?> <?php echo  round($perce + $base123); ?></h3>
                                        @else
                                    <h3><?php echo $CurrencyCode?>  <?php echo $total?> <sub>/Per serson</sub> </h3>
                                    @endif
                                </div>

                                <div class="tour_package_details_bar_list">
                                    <h5>Hotel facilities</h5>
                                    <ul>
                                        <?php $fac = $ress->HotelInfoResult->HotelDetails->HotelFacilities; ?>
                                        @foreach($fac as $facs)
                                        <li><i class="fas fa-circle"></i><?php echo $facs; ?></li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>Why choose us</h3>
                                </div>

                                <div class="tour_package_details_bar_list first_child_padding_none">
                                    <ul>
                                        <li><i class="fas fa-circle"></i>Buffet breakfast as per the Itinerary</li>
                                        <li><i class="fas fa-circle"></i>Visit eight villages showcasing Polynesian
                                            culture
                                        </li>
                                        <li><i class="fas fa-circle"></i>Complimentary Camel safari, Bonfire,</li>
                                        <li><i class="fas fa-circle"></i>All toll tax, parking, fuel, and driver
                                            allowances
                                        </li>
                                        <li><i class="fas fa-circle"></i>Comfortable and hygienic vehicle</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="write_your_review_wrapper">
                        <h3 class="heading_theme">Write your review</h3>
                        <div class="write_review_inner_boxed">
                            <form action="!#" id="news_comment_form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-froup">
                                            <input type="text" class="form-control bg_input"
                                                placeholder="Enter full name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-froup">
                                            <input type="text" class="form-control bg_input"
                                                placeholder="Enter email address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-froup">
                                            <textarea rows="6" placeholder="Write your comments"
                                                class="form-control bg_input"></textarea>
                                        </div>
                                        <div class="comment_form_submit">
                                            <button class="btn btn_theme btn_md">Post comment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="all_review_wrapper">
                        <h3 class="heading_theme">All review</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="all_review_box">
                        <div class="all_review_date_area">
                            <div class="all_review_date">
                                <h5>08 Dec, 2021</h5>
                            </div>
                            <div class="all_review_star">
                                <h5>Excellent</h5>
                                <div class="review_star_all">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="all_review_text">
                            <img src="assets/img/review/review1.png" alt="img">
                            <h4>Manresh Chandra</h4>
                            <p>" Loved the overall tour for all 6 days covering jaipur jodhpur and jaisalmer. worth ur
                                money for sure. thanks. Driver was very good and polite and safe driving for all 6 days.
                                on time pickup and drop overall. Thanks for it. "</p>
                        </div>
                        <div class="all_review_small_img">
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small1.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small2.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small3.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small4.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small5.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <h5>+5</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="all_review_box">
                        <div class="all_review_date_area">
                            <div class="all_review_date">
                                <h5>08 Dec, 2021</h5>
                            </div>
                            <div class="all_review_star">
                                <h5>Excellent</h5>
                                <div class="review_star_all">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="all_review_text">
                            <img src="assets/img/review/review2.png" alt="img">
                            <h4>Michel falak</h4>
                            <p>" Loved the overall tour for all 6 days covering jaipur jodhpur and jaisalmer. worth ur
                                money for sure. thanks. Driver was very good and polite and safe driving for all 6 days.
                                on time pickup and drop overall. Thanks for it. "</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="all_review_box">
                        <div class="all_review_date_area">
                            <div class="all_review_date">
                                <h5>08 Dec, 2021</h5>
                            </div>
                            <div class="all_review_star">
                                <h5>Excellent</h5>
                                <div class="review_star_all">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="all_review_text">
                            <img src="assets/img/review/review3.png" alt="img">
                            <h4>Chester dals</h4>
                            <p>" Loved the overall tour for all 6 days covering jaipur jodhpur and jaisalmer. worth ur
                                money for sure. thanks. Driver was very good and polite and safe driving for all 6 days.
                                on time pickup and drop overall. Thanks for it. "</p>
                        </div>
                        <div class="all_review_small_img">
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small1.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small2.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small5.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <h5>+15</h5>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="all_review_box">
                        <div class="all_review_date_area">
                            <div class="all_review_date">
                                <h5>08 Dec, 2021</h5>
                            </div>
                            <div class="all_review_star">
                                <h5>Excellent</h5>
                                <div class="review_star_all">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="all_review_text">
                            <img src="assets/img/review/review4.png" alt="img">
                            <h4>Casper mike</h4>
                            <p>" Loved the overall tour for all 6 days covering jaipur jodhpur and jaisalmer. worth ur
                                money for sure. thanks. Driver was very good and polite and safe driving for all 6 days.
                                on time pickup and drop overall. Thanks for it. "</p>
                        </div>
                        <div class="all_review_small_img">
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small4.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small5.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <h5>+19</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="all_review_box">
                        <div class="all_review_date_area">
                            <div class="all_review_date">
                                <h5>08 Dec, 2021</h5>
                            </div>
                            <div class="all_review_star">
                                <h5>Excellent</h5>
                                <div class="review_star_all">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="all_review_text">
                            <img src="assets/img/review/review5.png" alt="img">
                            <h4>Jason bruno</h4>
                            <p>"Loved the overall tour for all 6 days covering jaipur jodhpur and jaisalmer. worth ur
                                money for sure. thanks. Driver was very good and polite and safe driving for all 6 days.
                                on time pickup and drop overall. Thanks for it."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Related tour packages Area -->
    <section id="related_tour_packages" class="section_padding_bottom">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Related hotels</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="promotional_tour_slider owl-theme owl-carousel dot_style">
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="hotel-details.html"><img src="assets/img/tab-img/hotel1.png" alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i>New beach, Thailand</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="hotel-details.html">Kantua hotel, Thailand</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>$99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="hotel-details.html"><img src="assets/img/tab-img/hotel2.png" alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i>Indonesia</p>
                                <div class="discount_tab">
                                    <span>50%</span>
                                </div>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="hotel-details.html">Hotel paradise international</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>$99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="hotel-details.html"><img src="assets/img/tab-img/hotel3.png" alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="hotel-details.html">Hotel kualalampur</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>$99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="hotel-details.html"><img src="assets/img/tab-img/hotel4.png" alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i>Mariana island</p>
                                <div class="discount_tab">
                                    <span>50%</span>
                                </div>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="hotel-details.html">Hotel deluxe</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>$99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="hotel-details.html"><img src="assets/img/tab-img/hotel6.png" alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i>Beach view</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="#!">Thailand grand suit</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>$99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="hotel-details.html"><img src="assets/img/tab-img/hotel7.png" alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i>Long island</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="hotel-details.html">Zefi resort and spa</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>$99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta Area -->
    <section id="cta_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="cta_left">
                        <div class="cta_icon">
                            <img src="assets/img/common/email.png" alt="icon">
                        </div>
                        <div class="cta_content">
                            <h4>Get the latest news and offers</h4>
                            <h2>Subscribe to our newsletter</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cat_form">
                        <form id="cta_form_wrappper">
                            <div class="input-group"><input type="text" class="form-control"
                                    placeholder="Enter your mail address"><button class="btn btn_theme btn_md"
                                    type="button">Subscribe</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer  -->
    @include('auth.cust_footer')
    <div class="go-top">
        <i class="fas fa-chevron-up"></i>
        <i class="fas fa-chevron-up"></i>
    </div>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- Meanu js -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- Range js -->
    <script src="assets/js/nouislider.min.js"></script>
    <script src="assets/js/wNumb.js"></script>
    <!-- owl carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Slick js -->
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <!-- wow.js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom js -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/add-form.js"></script>

</body>

</html>