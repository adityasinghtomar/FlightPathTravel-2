<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Tour Details - Andtourtravel </title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="assets/css/fontawesome.all.min.css" />
    <link rel="stylesheet" href="../../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.8.2/font/bootstrap-icons.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <!-- Slick css -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css" />
    <!--slick-theme.css-->
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.min.css" />
    <!-- Rangeslider css -->
    <link rel="stylesheet" href="assets/css/nouislider.css" />
    <!-- owl.theme.default css -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <!-- navber css -->
    <link rel="stylesheet" href="assets/css/navber.css" />
    <!-- meanmenu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.css" />
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>

<body>
   

  @include('auth.cust_header')

    <!-- search -->
     <?php $Currency_active =\App\Currency_Model::where('currency_active','0')->first(); ?>
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
                        <h2>{{ $flight->tour_name }}</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span><a href="tour-search.html">Tours</a></li>
                            <li><span><i class="fas fa-circle"></i></span> {{ $flight->tour_name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<style>
    .fa.checked {
  color: orange;
}
</style>
    <!-- Tour Search Areas -->
    <section id="tour_details_main" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tour_details_leftside_wrapper">
                        <div class="tour_details_heading_wrapper">
                            <div class="tour_details_top_heading">
                                <h2>{{ $flight->tour_name }}</h2>
                          
                            </div>
                           
                        </div>
                        <div class="tour_details_top_bottom">
                            <div class="toru_details_top_bottom_item">
                                <div class="tour_details_top_bottom_icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="tour_details_top_bottom_text">
                                    <h5>Duration</h5>
                                    <p>{{ $flight->no_of_day }} Days and {{ $flight->no_of_people }} Night</p>
                                </div>
                            </div>
                            <div class="toru_details_top_bottom_item">
                                <div class="tour_details_top_bottom_icon">
                                    <i class="fas fa-paw"></i>
                                </div>
                                <div class="tour_details_top_bottom_text">
                                    <h5>Tour type</h5>
                                    <p>Private Tour</p>
                                </div>
                            </div>
                              <div class="toru_details_top_bottom_item">
                                <div class="tour_details_top_bottom_icon">
                                    <i class="fas fa-paw"></i>
                                </div>
                                <div class="tour_details_top_bottom_text">
                                    <h5>Location</h5>
                                    <p>Private Tour</p>
                                </div>
                            </div>
                          
                           
                        </div>
                        <div class="tour_details_img_wrapper">
                            <div class="slider slider-for">
                                
                                <?php
$flig = $flight->images;
$flg = json_decode($flig);
$i=1;
foreach ($flg as $row) {
    ?>
     <div>
                                 <img src="public/images/{{$row}}">
                                </div>
    <?php
}
?>
                               
                               
                            </div>
                            <div class="slider slider-nav">
                               <?php
$flig = $flight->images;
$flg = json_decode($flig);
$i=1;
foreach ($flg as $row) {
    ?>
     <div style="padding-left:10px;">
                                 <img src="public/images/{{$row}}">
                                </div>
    <?php
}
?>
                               
                            </div>
                        </div>
                      
                      
                        <div class="tour_details_boxed">
                            <h3 class="heading_theme">Itinerary</h3>
                            <div class="tour_details_boxed_inner">
                                <div class="accordion" id="accordionExample">
                                    
                              <?php
$flig = $flight->itinerary;
$flg = json_decode($flig);
$i=1;
foreach ($flg as $row) {

?>
                                  
                                    
                                    <div class="accordion_flex_area">
                                        <div class="accordion_left_side">
                                            <h5>Day <?php echo $i++; ?></h5>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                    Wise Itinerary
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse"
                                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordion_itinerary_list">
                                                       <?php echo $row ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php  } ?>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
                <div class="col-lg-4">
                       
                    <div class="tour_details_right_sidebar_wrapper">
                            <div class="tour_details_right_boxed">
                                
                               
                                <div class="tour_package_details_bar_list">
                                    <h5>Tour Details</h5>
                                  <div class="tour_package_bar_price">
                                        <sub>Starting From</sub>
                                        <h3> {{ $Currency_active->currency_symbol}} <?php $subtotal1= $flight->price / $Currency_active->currency_rates ;echo round($subtotal1, 2);?> <sub>/ Per serson</sub> </h3>
                                    </div>
                                  <ul>
                                      <li><i class="fas fa-circle"></i> {{ $flight->country }} </li>
                                      <li><i class="fas fa-circle"></i> {{ $flight->no_of_day }} Days and {{ $flight->no_of_people }} Night</li>
                                  </ul>
                                </div>
                               
                            </div>
                            <div class="tour_select_offer_bar_bottom">
                                <form action="{{url('/book-package')}}" enctype="multipart/form-data" method="post">
                                                      @csrf   
                 
                            <input type="hidden" name="tour_id" value="{{$flight->id}}">
                            <input type="hidden" name="tour_package_id" value="{{$flight->id}}">
                            <input type="hidden" name="tour_package_amount" value="{{$flight->price}}">
                            <div class="tour_select_offer_bar_bottom">
                                <button class="button btn btn_theme btn_md w-100">Enquire Via Email</button>
                            </div>
                         </form>
                            </div>
                     <div class="tour_detail_right_sidebar" style="margin-top:10px;">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>Overview</h3>
                                </div>
                                 <p>{{$flight->overview}}
                                </p>
                            </div>
                          
                        </div>
                        <div class="tour_detail_right_sidebar" style="margin-top:10px;">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>Inclusions</h3>
                                </div>
                                 <p>{{$flight->included}}
                                </p>
                            </div>
                          
                        </div>
                        <div class="tour_detail_right_sidebar" style="margin-top:10px;">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>Exclusions</h3>
                                </div>
                                 <p>{{$flight->excluded}}
                                </p>
                            </div>
                          
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


    <!-- Offcanvas Area -->
    <div class="offcanvas select_offer_modal offcanvas-end" tabindex="-1" id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Book now</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="side_canvas_wrapper">
                <div class="travel_date_side">
                    <div class="form-group">
                        <label for="dates">Select your travel date</label>
                        <input type="date" id="dates" value="2022-05-05" class="form-control">
                    </div>
                </div>
                <div class="select_person_side">
                    <h3>Select person</h3>
                    <div class="select_person_item">
                        <div class="select_person_left">
                            <h6>Adult</h6>
                            <p>12y+</p>
                        </div>
                        <div class="select_person_right">
                            <div class="button-set">
                                <button type="button">
                                    <i class="fas fa-plus"></i>
                                </button>
                                <span>01</span>
                                <button type="button">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="select_person_item">
                        <div class="select_person_left">
                            <h6>Children</h6>
                            <p>2 - 12 years</p>
                        </div>
                        <div class="select_person_right">
                            <div class="button-set">
                                <button type="button">
                                    <i class="fas fa-plus"></i>
                                </button>
                                <span>01</span>
                                <button type="button">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="select_person_item">
                        <div class="select_person_left">
                            <h6>Infant</h6>
                            <p>Below 2 years</p>
                        </div>
                        <div class="select_person_right">
                            <div class="button-set">
                                <button type="button">
                                    <i class="fas fa-plus"></i>
                                </button>
                                <span>01</span>
                                <button type="button">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="write_spical_not">
                        <label for="textse">Write any special note</label>
                        <textarea rows="5" id="textse" class="form-control"
                            placeholder="Write any special note"></textarea>
                    </div>
                    <div class="form-check write_spical_check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf1">
                        <label class="form-check-label" for="flexCheckDefaultf1">
                            <span class="main_spical_check">
                                <span>I read and accept all <a href="terms-service.html">Terms and conditios</a></span>
                            </span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="proceed_booking_btn ">
            <a href="tour-booking-submission.html" class="btn btn_theme btn_md w-100">Proceed to Booking</a>
        </div>
    </div>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- Meanu js -->
    <script src="assets/js/jquery.meanmenu.js"></script>
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