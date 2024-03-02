<!DOCTYPE html>

<html lang="zxx">



<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->

    <title>Book Flights, Hotels, Tours, Cabs at one Place - Flight Path Travel </title>

    <!-- Bootstrap css -->

    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css" />

    <!-- animate css -->

    <link rel="stylesheet" href="public/assets/css/animate.min.css" />

    <!-- Fontawesome css -->

    <link rel="stylesheet" href="public/assets/css/fontawesome.all.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <!-- owl.carousel css -->

    <link rel="stylesheet" href="public/assets/css/owl.carousel.min.css" />

    <!-- owl.theme.default css -->

    <link rel="stylesheet" href="public/assets/css/owl.theme.default.min.css" />

    <!-- navber css -->

    <link rel="stylesheet" href="public/assets/css/navber.css" />

    <!-- meanmenu css -->

    <link rel="stylesheet" href="public/assets/css/meanmenu.css" />

    <!-- Spacing css -->

    <link rel="stylesheet" href="public/assets/css/spacing.css" />

    <!-- Style css -->

    <link rel="stylesheet" href="public/assets/css/style.css" />

    <!-- Responsive css -->

    <link rel="stylesheet" href="public/assets/css/responsive.css" />

    <!-- Select2 -->

    <link rel="stylesheet" href="public/assets/css/select2.min.css" />

    <!-- Favicon -->

    <link rel="icon" type="image/png" href="public/assets/img/favicon.png">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>



<body>

    <!-- preloader Area -->

    <div class="preloader">

        <div class="d-table">

            <div class="d-table-cell">

                <div class="lds-spinner">

                    <div></div>

                    <div></div>

                    <div></div>

                    <div></div>

                    <div></div>

                    <div></div>

                    <div></div>

                    <div></div>

                    <div></div>

                    <div></div>

                    <div></div>

                    <div></div>

                </div>

            </div>

        </div>

    </div>

    <?php 

//  $ip = $_SERVER['SERVER_ADDR'];

// $ipdat = @json_decode(file_get_contents( 

// 	"http://www.geoplugin.net/json.gp?ip=" . $ip)); 



// echo 'Country Name: ' . $ipdat->geoplugin_countryName . "\n"; 

// echo 'City Name: ' . $ipdat->geoplugin_city . "\n"; 

// echo 'Continent Name: ' . $ipdat->geoplugin_continentName . "\n"; 

// echo 'Latitude: ' . $ipdat->geoplugin_latitude . "\n"; 

// echo 'Longitude: ' . $ipdat->geoplugin_longitude . "\n"; 

$Currency_Symbol= "df"; 

 $Currency = "dd"; 

// echo 'Timezone: ' . $ipdat->geoplugin_timezone; 



?>

    <!-- Header Area -->

    <header class="main_header_arae">

        <!-- Top Bar -->

        <div class="topbar-area">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-6 col-md-6">

                        <ul class="topbar-list">

                            <li>

                                <a href="#!"><i class="fab fa-facebook"></i></a>

                                <a href="#!"><i class="fab fa-twitter-square"></i></a>

                                <a href="#!"><i class="fab fa-instagram"></i></a>

                                <a href="#!"><i class="fab fa-linkedin"></i></a>

                            </li>

                            <li><a href="#!"><span>+44 (0) 203 463 7788</span></a></li>

                            <li><a href="#!"><span>info@flightpathtravel.com</span></a></li>

                        </ul>

                    </div>

                    <div class="col-lg-6 col-md-6">

                        <ul class="topbar-others-options">

                            <li>
                                <a href="#" class="btn btn_navber">Become a partner</a>

                                @if(session()->has('name'))

                                <a href="#" class="btn btn_navber">{{session()->get('name')}}</a>

                                <a href="{{url('/logout')}}" class="btn btn_navber">Logout</a>

                                @else

                                <a href="{{url('/User-login')}}" class="btn btn_navber d-none d-lg-inline-block">Login</a>

                                <a href="{{url('/User-Register')}}" class="btn btn_navber d-none d-lg-inline-block">Sign up</a>

                                @endif

                            </li>

                            <li>

                                <div class="dropdown language-option">

                                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">

                                        <span class="lang-name"></span>

                                    </button>

                                    <div class="dropdown-menu language-dropdown-menu">

                                        <a class="dropdown-item" href="#">English</a>

                                        <a class="dropdown-item" href="#">Arabic</a>

                                        <a class="dropdown-item" href="#">French</a>

                                    </div>

                                </div>

                            </li>

                            <li>
<div>
                                         <?php $Currency1 =\App\Currency_Model::where('status','0')->orderBy('currency_active', 'ASC')->get(); ?>
                                         <?php $Currency_active =\App\Currency_Model::where('currency_active','0')->first(); ?>
                                         <select  id="country-dropdown" style=" min-width: 13px;appearance: none;-webkit-appearance: none;width: 100%;font-size: 1.0rem;padding: 0.675em 1em 0.675em 1em;background-color: #fff;border: 1px solid #caced1;border-radius: 1.25rem;color: #000;cursor: pointer;">
                                              @foreach($Currency1 as $Currency12)
                                                <option value="{{$Currency12->id}}">{{ $Currency12->currency_symbol}} ({{__($Currency12->currency_code)}})</option>
                                                @endforeach
                                        </select>        
                                   
                                </div>

                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>







        <!-- Navbar Bar -->

        <div class="navbar-area">

            <div class="main-responsive-nav">

                <div class="container">

                    <div class="main-responsive-menu">

                        <div class="logo">

                            <a href="/">

                                <img src="public/assets/img/logo.png" alt="logo">

                            </a>

                        </div>

                        <div class="login-func-visible">
                            <a href="https://www.flightpathtravel.com/User-login" class="text-white"><i class="fa fa-user"></i></a>
                        </div>

                    </div>

                </div>

            </div>

            <div class="main-navbar">

                <div class="container">

                    <nav class="navbar navbar-expand-md navbar-light">

                        <a class="navbar-brand" href="/">

                            <img src="public/assets/img/logo.png" alt="logo">

                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">

                            <ul class="navbar-nav">

                                <li class="nav-item">

                                    <a href="/" class="nav-link active">

                                        Home

                                    </a>

                                </li>

                                <li class="nav-item">

                                    <a href="#" class="nav-link">

                                        Categories

                                        <i class="fas fa-angle-down"></i>

                                    </a>

                                    <ul class="dropdown-menu">

                                        <li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Tours

                                            </a>

                                            <ul class="dropdown-menu">

                                                <li class="nav-item">

                                                    <a href="{{url('/tour-search')}}" class="nav-link">Tour Grid</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="{{url('/tour-list')}}" class="nav-link">Tour List</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">Tour Map</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="{{url('/tour-details')}}" class="nav-link">Tour Details</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">Tour Booking</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">Top Destination</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">Destination

                                                        Details</a>

                                                </li>

                                            </ul>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Flights

                                            </a>

                                            <ul class="dropdown-menu">

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">Flight</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">Flight Booking</a>

                                                </li>

                                            </ul>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Hotel

                                            </a>

                                            <ul class="dropdown-menu">

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">Hotel Grid</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="{{url('/hotel')}}" class="nav-link">Hotel List</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">Hotel Map</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">Hotel Booking</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">Room Details</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">Room Booking</a>

                                                </li>

                                            </ul>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Visa

                                            </a>

                                            <ul class="dropdown-menu">

                                                <li class="nav-item">

                                                    <a href="{{url('/Visa-list')}}" class="nav-link">Visa List</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">Visa Application</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">Business visa </a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">Education visa </a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">Working visa </a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">Tourist visa </a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">Medical visa </a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">On-arrival visa </a>

                                                </li>

                                            </ul>

                                        </li>

                                        <!--<li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Apartments

                                            </a>

                                            <ul class="dropdown-menu">

                                                <li class="nav-item">

                                                    <a href="apartment-search.html" class="nav-link">Apartments Grid</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="apartment-search-list.html" class="nav-link">Apartments List</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="apartment-search-map.html" class="nav-link">Apartments Map</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="apartment-details.html" class="nav-link">Apartments Details</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="apartment-booking.html" class="nav-link">Apartments Booking</a>

                                                </li>

                                            </ul>

                                        </li>-->

                                        <!--<li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Bus/Cab

                                            </a>

                                            <ul class="dropdown-menu">

                                                <li class="nav-item">

                                                    <a href="bus-search-list.html" class="nav-link">Bus/Cab</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="bus-search-map.html" class="nav-link">Bus Map</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="bus-booking.html" class="nav-link">Bus Booking</a>

                                                </li>

                                            </ul>

                                        </li>-->

                                        <!--<li class="nav-item">

                                            <a href="#" class="nav-link">

                                                Cruise

                                            </a>

                                            <ul class="dropdown-menu">

                                                <li class="nav-item">

                                                    <a href="cruise-search-list.html" class="nav-link">Cruise</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="cruise-map.html" class="nav-link">Cruise Map</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="cruise-details.html" class="nav-link">Cruise Details</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="cruise-booking.html" class="nav-link">Cruise Booking</a>

                                                </li>

                                            </ul>

                                        </li>-->

                                    </ul>

                                </li>

                                <li class="nav-item">

                                    <a href="#" class="nav-link">

                                        Pages

                                        <i class="fas fa-angle-down"></i>

                                    </a>

                                    <ul class="dropdown-menu">

                                        <li class="nav-item">

                                            <a href="#" class="nav-link">About</a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#" class="nav-link">Team</a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#" class="nav-link">Testimonials</a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#" class="nav-link">FAQ</a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#" class="nav-link">Booking Confirmation</a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#" class="nav-link">Become Expert </a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#" class="nav-link">User Pages</a>

                                            <ul class="dropdown-menu">

                                                <li class="nav-item">

                                                    <a href="{{url('/User-login')}}" class="nav-link">Login</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">Register</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">Forget Password</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">Verify OTP</a>

                                                </li>

                                                <li class="nav-item">

                                                    <a href="#" class="nav-link">Reset Password</a>

                                                </li>

                                            </ul>

                                        </li>



                                        <li class="nav-item">

                                            <a href="{{url('/privacy-policy')}}" class="nav-link">Privacy Policy</a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#" class="nav-link">404 Error</a>

                                        </li>

                                    </ul>

                                </li>

                                @if(session()->has('user_id'))
                                <li class="nav-item">
                                    <a href="{{url('/customer-dashboard')}}" class="nav-link">Dashboard</a>
                                </li>
                                @endif

                                <!--<ul class="dropdown-menu">-->

                                <!--     <li class="nav-item">-->

                                <!--         <a href="#" class="nav-link">Dashboard</a>-->

                                <!--     </li>-->

                                <!--     <li class="nav-item">-->

                                <!--         <a href="#" class="nav-link">Hotel booking</a>-->

                                <!--     </li>-->

                                <!--     <li class="nav-item">-->

                                <!--         <a href="#" class="nav-link">Flight booking</a>-->

                                <!--     </li>-->

                                <!--     <li class="nav-item">-->

                                <!--         <a href="#" class="nav-link">Tour booking</a>-->

                                <!--     </li>-->

                                <!--     <li class="nav-item">-->

                                <!--         <a href="#" class="nav-link">Booking history</a>-->

                                <!--     </li>-->

                                <!--     <li class="nav-item">-->

                                <!--         <a href="#" class="nav-link">My profile</a>-->

                                <!--     </li>-->

                                <!--     <li class="nav-item">-->

                                <!--         <a href="#" class="nav-link">Wallet</a>-->

                                <!--     </li>-->

                                <!--     <li class="nav-item">-->

                                <!--         <a href="#" class="nav-link">Notifications</a>-->

                                <!--     </li>-->

                                <!-- </ul>-->



                                <li class="nav-item">

                                    <a href="#" class="nav-link">News <i class="fas fa-angle-down"></i></a>

                                    <ul class="dropdown-menu">

                                        <li class="nav-item">

                                            <a href="#" class="nav-link">News</a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#" class="nav-link">News v2</a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#" class="nav-link">News v3</a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#" class="nav-link">News v4</a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#" class="nav-link">News Details</a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="#" class="nav-link">News Details v2</a>

                                        </li>

                                    </ul>

                                </li>

                                <li class="nav-item">

                                    <a href="{{url('/contact-us')}}" class="nav-link">Contact Us</a>

                                    <!--<ul class="dropdown-menu">-->

                                    <!--    <li class="nav-item">-->

                                    <!--        <a href="#" class="nav-link">Contact v1</a>-->

                                    <!--    </li>-->

                                    <!--    <li class="nav-item">-->

                                    <!--        <a href="#" class="nav-link">Contact v2</a>-->

                                    <!--    </li>-->

                                    <!--</ul>-->

                                </li>

                            </ul>

                            <div class="others-options d-flex align-items-center">

                                <div class="option-item">

                                    <a href="#" class="search-box">

                                        <i class="bi bi-search"></i>

                                    </a>

                                </div>

                                <div class="option-item">

                                    @if(session()->has('name'))

                                    <a href="#" class="btn btn_navber">{{session()->get('name')}}</a>

                                    <a href="{{url('/logout')}}" class="btn btn_navber">Logout</a>

                                    @else

                                    <a href="{{url('/User-login')}}" class="btn btn_navber">Login</a>

                                    <a href="{{url('/User-Register')}}" class="btn btn_navber">Sign up</a>

                                    @endif

                                </div>

                            </div>

                        </div>

                    </nav>

                </div>

            </div>

            <!-- <div class="others-option-for-responsive">

                <div class="container">

                    <div class="dot-menu">

                        <div class="inner">

                            <div class="circle circle-one"></div>

                            <div class="circle circle-two"></div>

                            <div class="circle circle-three"></div>

                        </div>

                    </div>

                    <div class="container">

                        <div class="option-inner">

                            <div class="others-options d-flex align-items-center">

                                <div class="option-item">

                                    <a href="#" class="search-box"><i class="fas fa-search"></i></a>

                                </div>

                                <div class="option-item">

                                    <a href="#" class="btn btn_navber">Get free quote</a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div> -->

        </div>

    </header>



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



    <!-- Banner Area -->

    <section id="home_one_banner">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-12">

                    <div class="banner_one_text">

                        <h1>Explore the world together</h1>

                        <h3>Find awesome flights, hotel, tour, car and packages</h3>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="sec-booking">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box-radius-10 position-relative">
                        <!-- <div class="btns-top-right">
                            <a class="btn btn-outline-blue">
                                <svg width="25" height="25" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="25" height="25" />
                                    <path
                                        d="M10.2675 11.1052H12.169C12.2415 9.79033 12.4871 8.60731 12.8602 7.68016C11.5123 8.3242 10.5243 9.58651 10.2675 11.1052ZM10.2675 12.6618C10.5248 14.1804 11.5123 15.4427 12.8602 16.0868C12.4866 15.1596 12.2415 13.9766 12.169 12.6618H10.2675ZM14.8585 16.4896C15.2326 16.1272 15.8688 14.8152 15.9982 12.6618H13.7183C13.8482 14.8148 14.4844 16.1272 14.8585 16.4896ZM13.7188 11.1052H15.9987C15.8693 8.9522 15.2331 7.63978 14.859 7.27739C14.4844 7.63978 13.8482 8.9522 13.7188 11.1052ZM16.8568 16.0868C18.2047 15.4427 19.1927 14.1804 19.4495 12.6618H17.548C17.4755 13.9766 17.2304 15.1596 16.8568 16.0868ZM24.1981 2.54385H7.07549C5.35593 2.54385 3.96228 3.9375 3.96228 5.65706V24.3363C3.96228 26.0559 5.35593 27.4495 7.07549 27.4495H24.1981C25.0577 27.4495 25.7547 26.7524 25.7547 25.8929V4.10046C25.7547 3.24092 25.0577 2.54385 24.1981 2.54385ZM20.3066 22.7797H9.41039C8.98233 22.7797 8.63209 22.4295 8.63209 22.0014C8.63209 21.5733 8.98233 21.2231 9.41039 21.2231H20.3066C20.7347 21.2231 21.0849 21.5733 21.0849 22.0014C21.0849 22.4295 20.7347 22.7797 20.3066 22.7797ZM14.8585 18.1099C11.4199 18.1099 8.63209 15.3221 8.63209 11.8835C8.63209 8.44484 11.4199 5.65706 14.8585 5.65706C18.2971 5.65706 21.0849 8.44484 21.0849 11.8835C21.0849 15.3221 18.2971 18.1099 14.8585 18.1099ZM16.8568 7.68016C17.2304 8.60731 17.4755 9.79033 17.548 11.1052H19.4495C19.1927 9.58651 18.2047 8.3242 16.8568 7.68016Z" />
                                </svg>
                                <span>Visa</span>
                            </a>
                        </div> -->
                        <nav class="nav-style-1">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-flights-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-flights" type="button" role="tab" aria-controls="nav-flights"
                                    aria-selected="true">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M26.7504 15.0318L23.3019 14.0739V12.4423C23.3019 12.1882 23.201 11.9446 23.0213 11.7649C22.8417 11.5853 22.598 11.4844 22.344 11.4844C22.0899 11.4844 21.8463 11.5853 21.6666 11.7649C21.487 11.9446 21.3861 12.1882 21.3861 12.4423V13.5407L17.8737 12.5636V5.41761C17.8737 4.65545 17.571 3.9245 17.032 3.38557C16.4931 2.84665 15.7622 2.54388 15 2.54388C14.2378 2.54388 13.5069 2.84665 12.968 3.38557C12.429 3.9245 12.1263 4.65545 12.1263 5.41761V12.5668L8.61394 13.5247V12.4423C8.61394 12.1882 8.51302 11.9446 8.33338 11.7649C8.15373 11.5853 7.91009 11.4844 7.65603 11.4844C7.40198 11.4844 7.15833 11.5853 6.97869 11.7649C6.79905 11.9446 6.69812 12.1882 6.69812 12.4423V14.0739L3.24965 15.0318C3.04777 15.0877 2.86977 15.2082 2.7429 15.3748C2.61602 15.5415 2.54728 15.7452 2.54718 15.9546V19.1476C2.54725 19.2952 2.5814 19.4407 2.64698 19.5729C2.71255 19.7051 2.80777 19.8204 2.92522 19.9097C3.04267 19.999 3.17916 20.06 3.32405 20.0879C3.46895 20.1157 3.61832 20.1098 3.76053 20.0704L12.1263 17.7491V22.1683L11.6569 22.2992C11.0573 22.473 10.5301 22.8363 10.1543 23.3348C9.7784 23.8333 9.57407 24.4401 9.57185 25.0643V26.4916C9.57214 26.6396 9.60671 26.7855 9.67285 26.9179C9.739 27.0503 9.83492 27.1656 9.95309 27.2547C10.0713 27.3438 10.2085 27.4043 10.354 27.4314C10.4994 27.4586 10.6492 27.4517 10.7916 27.4112L15 26.2106L19.2084 27.4112C19.2934 27.4366 19.3816 27.4495 19.4703 27.4495C19.6784 27.4486 19.8808 27.3815 20.0482 27.258C20.1666 27.1684 20.2625 27.0525 20.3285 26.9196C20.3944 26.7866 20.4285 26.6401 20.4282 26.4916V25.0611C20.4281 24.4372 20.2249 23.8302 19.8493 23.3319C19.4737 22.8336 18.9461 22.4711 18.3463 22.2992L17.8737 22.1651V17.7491L26.2395 20.0704C26.3817 20.1098 26.5311 20.1157 26.676 20.0879C26.8209 20.06 26.9574 19.999 27.0748 19.9097C27.1922 19.8204 27.2875 19.7051 27.353 19.5729C27.4186 19.4407 27.4528 19.2952 27.4528 19.1476V15.9546C27.4527 15.7452 27.384 15.5415 27.2571 15.3748C27.1302 15.2082 26.9522 15.0877 26.7504 15.0318Z" />
                                    </svg>
                                    <span>Flights</span>
                                </button>
                                <button class="nav-link" id="nav-hotels-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-hotels" type="button" role="tab" aria-controls="nav-hotels"
                                    aria-selected="false">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M25.8962 24.3363V5.65706C26.7558 5.65706 27.4528 4.95999 27.4528 4.10046C27.4528 3.24092 26.7558 2.54385 25.8962 2.54385H4.10378C3.24425 2.54385 2.54718 3.24092 2.54718 4.10046C2.54718 4.95999 3.24425 5.65706 4.10378 5.65706V24.3363C3.24425 24.3363 2.54718 25.0334 2.54718 25.8929C2.54718 26.7524 3.24425 27.4495 4.10378 27.4495H12.6651V22.7797H17.3349V27.4495H25.8962C26.7558 27.4495 27.4528 26.7524 27.4528 25.8929C27.4528 25.0319 26.7572 24.3363 25.8962 24.3363ZM13.4434 7.83631C13.4434 7.5262 13.7535 7.2161 14.0636 7.2161H15.9364C16.2453 7.21415 16.5566 7.52499 16.5566 7.83631V9.7091C16.5566 10.0192 16.2465 10.3293 15.9364 10.3293H14.0636C13.7547 10.3269 13.4434 10.0156 13.4434 9.7091V7.83631ZM13.4434 12.5061C13.4434 12.196 13.7535 11.8859 14.0636 11.8859H15.9364C16.2453 11.8835 16.5566 12.1948 16.5566 12.5061V14.3789C16.5566 14.689 16.2465 14.9991 15.9364 14.9991H14.0636C13.7547 14.9967 13.4434 14.6854 13.4434 14.3789V12.5061ZM7.21699 7.83631C7.21699 7.5262 7.5271 7.2161 7.8372 7.2161H9.70999C10.0189 7.21464 10.3302 7.52499 10.3302 7.83631V9.7091C10.3302 10.0192 10.0201 10.3293 9.70999 10.3293H7.8372C7.52831 10.3269 7.21699 10.0156 7.21699 9.7091V7.83631ZM9.71242 14.9967H7.83963C7.52831 14.9967 7.21699 14.6854 7.21699 14.3789V12.5061C7.21699 12.196 7.5271 11.8859 7.8372 11.8859H9.70999C10.0189 11.8835 10.3302 12.1948 10.3302 12.5061V14.3789C10.3302 14.6854 10.0189 14.9967 9.71242 14.9967ZM10.3302 21.2231C10.3302 18.645 12.4219 16.5533 15 16.5533C17.5781 16.5533 19.6698 18.645 19.6698 21.2231H10.3302ZM22.783 14.3789C22.783 14.689 22.4729 14.9991 22.1628 14.9991H20.29C19.9811 14.9967 19.6698 14.6854 19.6698 14.3789V12.5061C19.6698 12.196 19.9799 11.8859 20.29 11.8859H22.1628C22.4717 11.8835 22.783 12.1948 22.783 12.5061V14.3789ZM22.783 9.7091C22.783 10.0192 22.4729 10.3293 22.1628 10.3293H20.29C19.9811 10.3269 19.6698 10.0156 19.6698 9.7091V7.83631C19.6698 7.5262 19.9799 7.2161 20.29 7.2161H22.1628C22.4717 7.21464 22.783 7.52499 22.783 7.83631V9.7091Z" />
                                        </g>
                                    </svg>
                                    <span>Hotels</span>
                                </button>
                                <button class="nav-link" id="nav-tours-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-tours" type="button" role="tab" aria-controls="nav-tours"
                                    aria-selected="false">
                                    <svg width="25" height="25" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15 2.54385C8.12174 2.54385 2.54715 8.11844 2.54715 14.9967C2.54715 21.8749 8.12174 27.4495 15 27.4495C21.8782 27.4495 27.4528 21.8749 27.4528 14.9967C27.4528 8.11844 21.8782 2.54385 15 2.54385ZM24.8358 12.6618H23.537C23.1246 12.6618 22.783 13.0023 22.783 13.4158V13.7502C22.783 14.036 22.6239 14.2974 22.3706 14.4254L21.6155 14.8021C21.374 14.9237 21.0853 14.9055 20.8616 14.7535L19.9782 14.1639C19.7838 14.0362 19.5423 13.9997 19.3186 14.0788L19.1882 14.1211C18.717 14.2731 18.5286 14.8386 18.7995 15.2521L19.4474 16.2191C19.5822 16.4268 19.8206 16.5533 20.0735 16.5533H20.4741C20.8923 16.5533 21.228 16.8938 21.228 17.3073V17.8608C21.228 18.025 21.175 18.1831 21.0749 18.3108L20.1677 19.5269C20.097 19.6181 20.0499 19.7275 20.0263 19.837L19.8202 20.95C19.7907 21.1081 19.7083 21.254 19.5846 21.3695C19.1251 21.7891 18.7187 22.2636 18.3709 22.786L17.7346 23.7346C17.66 23.8482 17.5448 23.9174 17.4422 24.0015C17.0298 24.1137 16.6075 24.1997 16.1745 24.2544C15.8481 24.1412 15.5689 23.9116 15.4079 23.5885C15.1428 23.0593 15.0015 22.4697 15.0015 21.8738V20.4205C15 20.007 14.6643 19.6665 14.246 19.6665H12.9861C12.2852 19.6665 11.6076 19.3868 11.107 18.8882C10.6123 18.392 10.3302 17.7159 10.3302 17.0105V16.3247C10.3302 15.4919 10.7248 14.7009 11.3964 14.2023L12.7337 13.193C13.1953 12.8515 13.7547 12.6618 14.3287 12.6618H14.3699C14.7823 12.6618 15.1944 12.7591 15.5598 12.9415L16.2782 13.3002C16.4544 13.3914 16.6636 13.406 16.8533 13.3428L19.1566 12.5767C19.4629 12.4733 19.6751 12.1814 19.6751 11.8592C19.6751 11.4396 19.3335 11.1052 18.9212 11.1052H18.4265C18.2262 11.1052 18.0377 11.0261 17.8962 10.8863L17.5605 10.5458C17.4176 10.4047 17.223 10.3269 17.0236 10.3269H12.6408C12.2284 10.3269 11.8868 9.98636 11.8868 9.57289V9.35886C11.8868 9.01227 12.1224 8.708 12.4583 8.62336L13.1651 8.45311C13.3477 8.40447 13.5068 8.29502 13.6069 8.13693L14.0016 7.54736C14.139 7.3416 14.3773 7.21367 14.6254 7.21367H15.8036C16.2218 7.21367 16.5576 6.87316 16.5576 6.45968V5.01107C20.6232 5.64393 23.8921 8.70217 24.8358 12.6618Z" />
                                    </svg>
                                    <span>Tours</span>
                                </button>
                                <button class="nav-link" id="nav-visa-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-visa" type="button" role="tab" aria-controls="nav-visa" aria-selected="false">
                                    <svg width="25" height="25" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.2675 11.1052H12.169C12.2415 9.79033 12.4871 8.60731 12.8602 7.68016C11.5123 8.3242 10.5243 9.58651 10.2675 11.1052ZM10.2675 12.6618C10.5248 14.1804 11.5123 15.4427 12.8602 16.0868C12.4866 15.1596 12.2415 13.9766 12.169 12.6618H10.2675ZM14.8585 16.4896C15.2326 16.1272 15.8688 14.8152 15.9982 12.6618H13.7183C13.8482 14.8148 14.4844 16.1272 14.8585 16.4896ZM13.7188 11.1052H15.9987C15.8693 8.9522 15.2331 7.63978 14.859 7.27739C14.4844 7.63978 13.8482 8.9522 13.7188 11.1052ZM16.8568 16.0868C18.2047 15.4427 19.1927 14.1804 19.4495 12.6618H17.548C17.4755 13.9766 17.2304 15.1596 16.8568 16.0868ZM24.1981 2.54385H7.07549C5.35593 2.54385 3.96228 3.9375 3.96228 5.65706V24.3363C3.96228 26.0559 5.35593 27.4495 7.07549 27.4495H24.1981C25.0577 27.4495 25.7547 26.7524 25.7547 25.8929V4.10046C25.7547 3.24092 25.0577 2.54385 24.1981 2.54385ZM20.3066 22.7797H9.41039C8.98233 22.7797 8.63209 22.4295 8.63209 22.0014C8.63209 21.5733 8.98233 21.2231 9.41039 21.2231H20.3066C20.7347 21.2231 21.0849 21.5733 21.0849 22.0014C21.0849 22.4295 20.7347 22.7797 20.3066 22.7797ZM14.8585 18.1099C11.4199 18.1099 8.63209 15.3221 8.63209 11.8835C8.63209 8.44484 11.4199 5.65706 14.8585 5.65706C18.2971 5.65706 21.0849 8.44484 21.0849 11.8835C21.0849 15.3221 18.2971 18.1099 14.8585 18.1099ZM16.8568 7.68016C17.2304 8.60731 17.4755 9.79033 17.548 11.1052H19.4495C19.1927 9.58651 18.2047 8.3242 16.8568 7.68016Z" />
                                    </svg>
                                    <span>Visa</span>
                                </button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-flights" role="tabpanel"
                                aria-labelledby="nav-flights-tab">
                                <div class="row">
                                    <div class="col-sm-auto mb-20">
                                        <label for="exampleInputEmail1" class="form-label fw-bold">Select your
                                            destination</label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flighttrip"
                                                    id="tripOneway" value="One Way" checked>
                                                <label class="form-check-label" for="tripOneway">One Way</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flighttrip"
                                                    id="tripRoundtrip" value="Round Trip">
                                                <label class="form-check-label" for="tripRoundtrip">Round Trip</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flighttrip"
                                                    id="tripMulticity" value="Multi City">
                                                <label class="form-check-label" for="tripMulticity">Multi City</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto mb-20 d-none d-md-flex">
                                        <div class="vertical-line ml-5 mr-5"></div>
                                    </div>
                                    <div class="col-auto mb-20">
                                        <label for="exampleInputEmail1" class="form-label fw-bold">Passengers</label>
                                        <div class="dropdown dropdown-style-1">
                                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <span>Adult 1</span>
                                            </button>
                                            <ul class="dropdown-menu pt-0 pb-0" aria-labelledby="dropdownMenuButton1">
                                                <li>
                                                    <!-- <a class="dropdown-item" href="javascript:void(0)">Action</a> -->
                                                    <div class="dropdown-menu-passenger-selection">
                                                        <div class="dropdown-menu-passenger-selection__block mb-20">
                                                            <div class="dropdown-menu-passenger-selection__block__left">
                                                                <div class="block-title"><span>Adults</span></div>
                                                                <div class="block-sub-title"><span><small>Age
                                                                            18+</small></span></div>
                                                            </div>
                                                            <div
                                                                class="dropdown-menu-passenger-selection__block__right">
                                                                <div class="inc-dec-count-box">
                                                                    <div class="inc-dec-count-box__minus">
                                                                        <i class="fas fa-minus"></i>
                                                                    </div>
                                                                    <div class="inc-dec-count-box__value">
                                                                        <input type="email" class="form-control getadult_data"
                                                                            id="exampleFormControlInput1" name="adult" value="1">
                                                                    </div>
                                                                    <div class="inc-dec-count-box__plus">
                                                                        <i class="fas fa-plus"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="dropdown-menu-passenger-selection__block">
                                                            <div class="dropdown-menu-passenger-selection__block__left">
                                                                <div class="block-title"><span>Child</span></div>
                                                                <div class="block-sub-title"><span><small>Age 0 -
                                                                            17</small></span></div>
                                                            </div>
                                                            <div
                                                                class="dropdown-menu-passenger-selection__block__right">
                                                                <div class="inc-dec-count-box">
                                                                    <div class="inc-dec-count-box__minus">
                                                                        <i class="fas fa-minus"></i>
                                                                    </div>
                                                                    <div class="inc-dec-count-box__value">
                                                                        <input type="email" class="form-control"
                                                                            id="exampleFormControlInput1" name="child" value="0">
                                                                    </div>
                                                                    <div class="inc-dec-count-box__plus">
                                                                        <i class="fas fa-plus"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="dropdown-menu-footer">
                                                        <div class="dropdown-menu-footer__total-travellers">
                                                            <span class="fw-bold">6</span> <span>travellers</span>
                                                        </div>
                                                        <div class="dropdown-menu-footer__done-selected-travellers">
                                                            <a href="javascript:void(0)" class="btn btn-theme-blue">
                                                                Done </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto mb-20 d-none d-md-flex">
                                        <div class="vertical-line ml-5 mr-5"></div>
                                    </div>
                                    <div class="col-auto mb-20">
                                        <label for="exampleInputEmail1" class="form-label fw-bold">Cabin Class</label>
                                        <div class="dropdown dropdown-style-1">
                                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <span>Economy</span>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0)">Economy</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0)">Premium
                                                        Economy</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0)">Business</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0)">First Class</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{url('/flight_search')}}" enctype="multipart/form-data" method="post">
                                         @csrf
                                <div class="row opt-one-way onChangeOneWay">
                                    
                                    <div class="col-xxl-4 col-xl-3 col-lg-3 mb-10">
                                        <?php $filterResult =\App\Airport_Model::get(); ?>
                                        <select class="select-from select2-style-1 select-takeoff" id="select_to" name="from" required>
                                            <option></option>
                                             @foreach($filterResult as $state_)
                                            <option value="{{$state_->AIRPORTCODE}}">{{__($state_->CITYNAME)}}  ( {{__($state_->AIRPORTCODE)}} ) {{__($state_->COUNTRYCODE)}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                    <div class="col-xxl-auto col-xl-auto col-lg-auto col-md mb-10 d-flex justify-content-center">
                                        <button class="btn btn-interchange px-10 py-10">
                                            <svg viewBox="0 0 106 107" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M81.361 81.7225L96.9998 66.0414L81.361 50.3604L75.3591 56.3623L80.8538 61.8147H44.5464V70.2681H80.8538L75.3591 75.7206L81.361 81.7225Z" />
                                                <path
                                                    d="M30.6407 50.3602L25.146 44.9078H61.4534V36.4544H25.146L30.6407 31.0019L24.6388 25L9 40.6811L24.6388 56.3622L30.6407 50.3602Z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="col-xxl-4 col-xl-3 col-lg-3 mb-10 mb-md-20">
                                        <select class="select-to select2-style-1 select-land" name="to" id="select_from" required>
                                            <option></option>
                                             @foreach($filterResult as $state_)
                                            <option value="{{$state_->AIRPORTCODE}}">{{__($state_->CITYNAME)}}  ( {{__($state_->AIRPORTCODE)}} ) {{__($state_->COUNTRYCODE)}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                    <div class="col-xxl-2 col-xl-3 col-lg mb-10 mb-md-20">
                                        <input type="date" value="<?php echo date('Y-m-d'); ?>" id="demo"
                                            name="journey_date" class="txtDate form-control getDate" required>
                                    </div>
                                      <input type="hidden" name="adult" value="1">
                                      <input type="hidden" name="children" value="0">
                                      <input type="hidden" name="infant" value="0">
                                      <input type="hidden" name="cabin_class" value="2">
                                      <input type="hidden" name="form_status" value="one"> 
                                    <div class="col mb-10 d-flex justify-content-lg-end justify-content-center">
                                        <button type="submit" class="btn btn-theme-blue px-30 py-10 Click-here">Search</button>
                                    </div>
                                      
                                </div>
                                    </form>
                                <form action="{{url('/return-flight-search')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                <div class="row opt-round-trip onChangeRoundTrip">
                                    <div class="col-xxl-3 mb-10">
                                        <select class="select-from select2-style-1 select-takeoff" name="from" required>
                                            <option></option>
                                            @foreach($filterResult as $state_)
                                            <option value="{{$state_->AIRPORTCODE}}">{{__($state_->CITYNAME)}}  ( {{__($state_->AIRPORTCODE)}} ) {{__($state_->COUNTRYCODE)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xxl-auto mb-10 d-flex justify-content-center">
                                        <button class="btn btn-interchange px-10 py-10">
                                            <svg viewBox="0 0 106 107" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M81.361 81.7225L96.9998 66.0414L81.361 50.3604L75.3591 56.3623L80.8538 61.8147H44.5464V70.2681H80.8538L75.3591 75.7206L81.361 81.7225Z" />
                                                <path
                                                    d="M30.6407 50.3602L25.146 44.9078H61.4534V36.4544H25.146L30.6407 31.0019L24.6388 25L9 40.6811L24.6388 56.3622L30.6407 50.3602Z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="col-xxl-3 mb-10 mb-md-20">
                                        <select class="select-to select2-style-1 select-land" name="to" required>
                                            <option></option>
                                            @foreach($filterResult as $state_)
                                            <option value="{{$state_->AIRPORTCODE}}">{{__($state_->CITYNAME)}}  ( {{__($state_->AIRPORTCODE)}} ) {{__($state_->COUNTRYCODE)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xxl-2 col-md-6 mb-10 mb-md-20 position-relative">
                                        <input type="text" id="demo" value="" name="journey_date"
                                            class="txtDate form-control date-box getDate" placeholder="Journey Date"
                                            min="date()" required>
                                        <i class="far fa-calendar"></i>
                                    </div>
                                    <div class="col-xxl-2 col-md-6 mb-10 mb-md-20 position-relative">
                                        <input type="text" value="" name="return_date"
                                            class="txtDate form-control date-box" placeholder="Return Date" min="date()"
                                            required>
                                        <i class="far fa-calendar"></i>
                                    </div>
                                    <input type="hidden" name="adult" value="1">
                                      <input type="hidden" name="children" value="0">
                                      <input type="hidden" name="infant" value="0">
                                      <input type="hidden" name="cabin_class" value="2">
                                      <input type="hidden" name="form_status" value="return">
                                    <div class="col mb-10 d-flex justify-content-xxl-end justify-content-center">
                                        <button type="submit" class="btn btn-theme-blue px-30 py-10">Search</button>
                                    </div>
                                </div>
                                </form>
                                 <form action="{{url('/multi-city-flight-search')}}" enctype="multipart/form-data" method="post">
                                                        @csrf
                                <div class="row mb-10 opt-multi-city onChangeMultiCity">
                                    <div class="col-md-12">
                                        <div class="parent-new-flight-row parentNewFlightRows">
                                            <div class="row child-flight-row childFlightRow">
                                                <div class="col-lg-4 mb-20 mb-md-10">
                                                    <select class="select-from select2-style-1 select-takeoff"
                                                        name="from" required>
                                                        <option></option>
                                                        @foreach($filterResult as $state_)
                                            <option value="{{$state_->AIRPORTCODE}}">{{__($state_->CITYNAME)}}  ( {{__($state_->AIRPORTCODE)}} ) {{__($state_->COUNTRYCODE)}}</option>
                                            @endforeach
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
                                                <div class="col-lg-4 mb-20">
                                                    <select class="select-to select2-style-1 select-land" name="to" required>
                                                        <option></option>
                                                         @foreach($filterResult as $state_)
                                            <option value="{{$state_->AIRPORTCODE}}">{{__($state_->CITYNAME)}}  ( {{__($state_->AIRPORTCODE)}} ) {{__($state_->COUNTRYCODE)}}</option>
                                            @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-lg mb-20 mb-md-10">
                                                    <input type="date" value="<?php echo date('Y-m-d'); ?>" id="demo"
                                                        name="journey_date" class="txtDate form-control datePicker" required>
                                                </div>
                                                <div class="col-lg-auto mb-20 mb-md-10">
                                                    <button type="submit"
                                                        class="btn btn-th-outline-danger btnRemove py-10 px-20"><i
                                                            class="fas fa-times"></i></button>
                                                </div>
                                            </div>
                                                <input type="hidden" name="adult" value="1">
                                      <input type="hidden" name="children" value="0">
                                      <input type="hidden" name="infant" value="0">
                                      <input type="hidden" name="cabin_class" value="2">
                                      <input type="hidden" name="form_status" value="multi">
                                    
                                            <div class="row child-flight-row childFlightRow">
                                                <div class="col-lg-4 mb-20 mb-md-10">
                                                    <select class="select-from select2-style-1 select-takeoff"
                                                        name="from1" required>
                                                        <option></option>
                                                         @foreach($filterResult as $state_)
                                            <option value="{{$state_->AIRPORTCODE}}">{{__($state_->CITYNAME)}}  ( {{__($state_->AIRPORTCODE)}} ) {{__($state_->COUNTRYCODE)}}</option>
                                            @endforeach
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
                                                <div class="col-lg-4 mb-20">
                                                    <select class="select-to select2-style-1 select-land" name="to1" required>
                                                        <option></option>
                                                         @foreach($filterResult as $state_)
                                            <option value="{{$state_->AIRPORTCODE}}">{{__($state_->CITYNAME)}}  ( {{__($state_->AIRPORTCODE)}} ) {{__($state_->COUNTRYCODE)}}</option>
                                            @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-lg mb-20 mb-md-10">
                                                    <input type="date" value="<?php echo date('Y-m-d'); ?>" id="demo"
                                                        name="journey_date1" class="txtDate form-control" required>
                                                </div>
                                                <div class="col-lg-auto mb-20 mb-md-10">
                                                    <button type="submit"
                                                        class="btn btn-th-outline-danger btnRemove py-10 px-20"><i
                                                            class="fas fa-times"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row mb-20">
                                            <div class="col-md-12">
                                                <a href="javascript:void(0)" id="btnAddNewFlight">
                                                    <div
                                                        class="border-box-radius-10 d-flex justify-content-center align-items-center">
                                                        <i class="fas fa-plus"></i> <span class="pl-10">Add a new
                                                            flight</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 d-flex justify-content-center">
                                                <button type="submit"
                                                    class="btn btn-theme-blue px-30 py-10">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-hotels" role="tabpanel" aria-labelledby="nav-hotels-tab">
                               <form action="{{url('/hotel_search')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                <div class="row">
                                    
                                    <div class="col-xxl-4 col-xl-3 col-lg-4 mb-20">
                                        <select class="select-destination select2-style-1 select-takeoff"
                                            name="city_name" required>
                                            <?php $data =\App\Hotel_City_Model::get(); ?>
                                             <option></option>
                                               @foreach($data as $state_)
                                                <option value="{{$state_->name}}">{{__($state_->name)}}</option>
                                               @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-2 col-md-6 col-lg-4 mb-20 position-relative">
                                        <input type="text" id="demo" value="" name="checkin_date"
                                            class="txtDate form-control date-box" placeholder="Check In Date"
                                            min="date()" required>
                                        <i class="far fa-calendar"></i>
                                    </div>
                                    <div class="col-xl-2 col-md-6 col-lg-4 mb-20 position-relative">
                                        <input type="text" value="" name="checkout_date"
                                            class="txtDate form-control date-box" placeholder="Check Out Date" min="date()"
                                            required>
                                        <i class="far fa-calendar"></i>
                                    </div>
                                    <div class="col-xl-auto col-md-6 mb-20">
                                        <input type="number" name="NoOfRoom" class="form-control" id="exampleFormControlInput1" placeholder="Rooms" required>
                                    </div>
                                    <div class="col-md mb-20 mb-20">
                                        <div class="dropdown dropdown-style-2">
                                            <button class="btn dropdown-toggle w-100" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                No. of People
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li>
                                                    <!-- <a class="dropdown-item" href="#">Action</a> -->
                                                    <div class="dropdown-menu-passenger-selection">
                                                        <div class="dropdown-menu-passenger-selection__block mb-20">
                                                            <div class="dropdown-menu-passenger-selection__block__left">
                                                                <div class="block-title"><span>Adults</span></div>
                                                                <div class="block-sub-title"><span><small>Age
                                                                            18+</small></span></div>
                                                            </div>
                                                            <div
                                                                class="dropdown-menu-passenger-selection__block__right">
                                                                <div class="inc-dec-count-box">
                                                                    <div class="inc-dec-count-box__minus">
                                                                        <i class="fas fa-minus"></i>
                                                                    </div>
                                                                    <div class="inc-dec-count-box__value">
                                                                        <input type="number" class="form-control" name="adult12"
                                                                            id="exampleFormControlInput1" value="1">
                                                                    </div>
                                                                    <div class="inc-dec-count-box__plus">
                                                                        <i class="fas fa-plus"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="dropdown-menu-passenger-selection__block">
                                                            <div class="dropdown-menu-passenger-selection__block__left">
                                                                <div class="block-title"><span>Child</span></div>
                                                                <div class="block-sub-title"><span><small>Age 0 -
                                                                            17</small></span></div>
                                                            </div> 
                                                            <div
                                                                class="dropdown-menu-passenger-selection__block__right">
                                                                <div class="inc-dec-count-box">
                                                                    <div class="inc-dec-count-box__minus">
                                                                        <i class="fas fa-minus"></i>
                                                                    </div>
                                                                    <div class="inc-dec-count-box__value">
                                                                        <input type="number" class="form-control"
                                                                           name="child12" id="exampleFormControlInput1" value="0">
                                                                    </div>
                                                                    <div class="inc-dec-count-box__plus">
                                                                        <i class="fas fa-plus"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="dropdown-menu-footer">
                                                        <div class="dropdown-menu-footer__total-travellers">
                                                            <span class="fw-bold">6</span> 
                                                            <span>People</span>
                                                        </div>
                                                        <div class="dropdown-menu-footer__done-selected-travellers">
                                                            <a href="javascript:void(0)" class="btn btn-theme-blue">
                                                                Done </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <input type="hidden" name="adult" value="1">
                                    <input type="hidden" name="children" value="0">
                                    <input type="hidden" name="infant" value="0">
                                    <input type="hidden" name="form_status" id="hostels">
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-theme-blue px-30 py-10">Search</button>
                                    </div>
                                
                                
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane fade show" id="nav-tours" role="tabpanel"
                                aria-labelledby="nav-tours-tab">
                                
                                <form action="{{url('/tour-search-list')}}" enctype="multipart/form-data" method="post">
                                                        @csrf
                                <div class="row">
                                    <div class="col-lg-4 mb-md-20">
                                        <select class="select-destination select2-style-1 select-takeoff" name="city_name" required>
                                            <?php $data =\App\Hotel_City_Model::get(); ?>
                                             <option></option>
                                               @foreach($data as $state_)
                                                <option value="{{$state_->name}}">{{__($state_->name)}}</option>
                                               @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-3 mb-md-20">
                                        <select class="select-tours select2-style-2" name="tour_type" required>
                                            <option value="single">Single</option>
                                            <option value="group">Group</option>
                                            <option value="couple">Couple</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 mb-md-20">
                                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Days" name="day" required>
                                    </div>  
                                    <div class="col d-flex justify-content-lg-end justify-content-center">
                                        <button type="submit" class="btn btn-theme-blue px-30 py-10">Search</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane fade show" id="nav-visa" role="tabpanel" aria-labelledby="nav-visa-tab">
                                <form action="{{url('/visa-search-list')}}" enctype="multipart/form-data" method="post">
                                                        @csrf
                                <div class="row">
                                    <div class="col-lg-4 mb-md-20">
                                        <select class="select-country select2-style-2" name="country_name" required>
                                            <?php $data =\App\Hotel_City_Model::get(); ?>
                                             <option></option>
                                               @foreach($data as $state_)
                                                <option value="{{$state_->name}}">{{__($state_->name)}}</option>
                                               @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-3 mb-md-20">
                                        <select class="select-visa-type select2-style-2" name="visa_type" required>
                                            <option></option>
                                             <option value="single">Single Visa</option>
                                                                    <option value="Business visa">Business visa</option>
                                                                   <option value="Education visa">Education visa</option>
                                                                   <option value="Working visa">Working visa</option>
                                                                   <option value="Tourist visa">Tourist visa</option>
                                                                   <option value="Medical visa">Medical visa</option>
                                                                   <option value="On-arrival visa">On-arrival visa</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 mb-md-20">
                                    <input type="number" name="day" class="form-control" id="exampleFormControlInput1" placeholder="Days" required>
                                    </div>
                                    <div class="col d-flex justify-content-lg-end justify-content-center">
                                        <button type="submit" class="btn btn-theme-blue px-30 py-10">Search</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
<style>
   
.custom-model-main {
  text-align: center;
  overflow: hidden;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0; /* z-index: 1050; */
  -webkit-overflow-scrolling: touch;
  outline: 0;
  opacity: 0;
  -webkit-transition: opacity 0.15s linear, z-index 0.15;
  -o-transition: opacity 0.15s linear, z-index 0.15;
  transition: opacity 0.15s linear, z-index 0.15;
  z-index: -1;
  overflow-x: hidden;
  overflow-y: auto;
}

.model-open {
  z-index: 99999;
  opacity: 1;
  overflow: hidden;
}
.custom-model-inner {
  -webkit-transform: translate(0, -25%);
  -ms-transform: translate(0, -25%);
  transform: translate(0, -25%);
  -webkit-transition: -webkit-transform 0.3s ease-out;
  -o-transition: -o-transform 0.3s ease-out;
  transition: -webkit-transform 0.3s ease-out;
  -o-transition: transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
  transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
  display: inline-block;
  vertical-align: middle;
  width: 600px;
  margin: 30px auto;
  max-width: 97%;
}
.custom-model-wrap {
  display: block;
  width: 100%;
  position: relative;
  background-color: #fff;
  border: 1px solid #999;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 6px;
  -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  background-clip: padding-box;
  outline: 0;
  text-align: left;
  padding: -20px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.model-open .custom-model-inner {
  -webkit-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  transform: translate(0, 0);
  position: relative;
  z-index: 999;
}
.close-btn {
  position: absolute;
  right: 0;
  top: -30px;
  cursor: pointer;
  z-index: 99;
  font-size: 30px;
  color: #fff;
}

@media screen and (min-width:800px){
	.custom-model-main:before {
	  content: "";
	  display: inline-block;
	  height: auto;
	  vertical-align: middle;
	  margin-right: -0px;
	  height: 100%;
	}
}
@media screen and (max-width:799px){
  .custom-model-inner{margin-top: 45px;}
}

    h1 {
      font-size: 24px;
      margin-bottom: 0;
    }

    .booking-summary {
      border: 1px solid #e98c06;
      padding: 20px;
      border-radius: 5px;
      background-color: #fff;
      width: 60%; /* Use percentages for responsiveness */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Subtle shadow */
    }

    .booking-summary h2 {
      margin-bottom: 10px;
    }

    .price-box {
      background-color: #e98c06;
      padding: 20px;
      border-radius: 5px;
      text-align: center;
      color: #fff;
      width: 40%; /* Adjust width as needed */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Subtle shadow */
    }

    .price-box p {
      margin-bottom: 5px;
    }

    .services {
      width: 100%;
      margin-top: 100px;
    }

    .loader-container {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: auto; /* Adjust as needed */
    }

    .loader {
      width: 150px;
      height: 150px;
    }
    main {
      background-image: url("https://images.pexels.com/photos/1003864/pexels-photo-1003864.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
      background-size: cover;
      background-position: center;
      min-height: 100vh; /* Fill the viewport */
    }
</style>                                
<div class="custom-model-main" style="width:100%; height:100%">
    <div class="custom-model-inner" style="width:100%;">        
    <div class="close-btn">×</div>
        <div class="custom-model-wrap">
            <div class="pop-up-content-wrap">
                <style>

  </style>
</head>
<body>
  <main>
    <div>
    <div class="row">    
      <div class="booking-summary col-6">
        <h2>Booking Summary</h2>
        <b>From:</b> <p id="selected_from"></p>
        <b>To:</b> <p id="selected_to"></p>
        <b>Depart:</b> <p class="getDate"></p>
        <b>Return:</b></p>
        <b>Travellers:</b><p class="getadult"></p>
        <div class="loader-container">
          <img src="https://www.flightofox.ca/Content/Assets/images/flight-loading.gif" alt="Loader" class="loader">    
        </div> 
      </div>
      <div class="price-box col-6" >
        <h2>Best Price Guarantee</h2>
        <p>Opening Hours: 7 days a week, 9:00AM - 11:00PM</p>
        <p>Serving since 10+ Years</p>
        <p>100% Secure Credit/Debit Card Transactions</p>
        <img src="public/services-image.png" alt="Out Services" class="services">
      </div></div>
    </div>
  </main>
            </div>
        </div>  
    </div>  
</div>                                 
     <script>
         $(".Click-here").on('click', function() {
  $(".custom-model-main").addClass('model-open');
$(window).load(function() {
		// Animate loader off screen
		$(".custom-model-main").fadeOut("slow");
	});
         }); 
$(".close-btn, .bg-overlay").click(function(){
  $(".custom-model-main").removeClass('model-open');
});

     </script>                           
    <!-- Form Area -->  

    <!-- imagination Area -->
  <section id="go_beyond_area" class="section_padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="heading_left_area">
                        <h2>Go beyond your <span>imagination</span></h2>
                        <h5>Discover your ideal experience with us</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="imagination_boxed">
                        <a href="top-destinations.html">
                            <img src="public/assets/img/imagination/imagination1.png" alt="img">
                        </a>
                        <h3><a href="top-destinations.html">7% Discount for all <span>Airlines</span></a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="imagination_boxed">
                        <a href="top-destinations.html">
                            <img src="public/assets/img/imagination/imagination2.png" alt="img">
                        </a>
                        <h3><a href="#!">Travel around<span>the world</span></a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="imagination_boxed">
                        <a href="top-destinations.html">
                            <img src="public/assets/img/imagination/imagination3.png" alt="img">
                        </a>
                        <h3><a href="top-destinations.html">Luxury resorts<span>top deals</span></a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top destinations -->
    <section id="top_destinations" class="section_padding_top">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Top destinations</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="destinations_content_box img_animation">
                        <img src="public/assets/img/destination/big-img.png" alt="img">
                        <div class="destinations_content_inner">
                            <h2>Up to</h2>
                            <div class="destinations_big_offer">
                                <h1>50</h1>
                                <h6><span>%</span> <span>Off</span></h6>
                            </div>
                            <h2>Holiday packages</h2>
                            <a href="top-destinations.html" class="btn btn_theme btn_md">Book now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="destinations_content_box img_animation">
                                <a href="top-destinations.html">
                                    <img src="public/assets/img/destination/destination1.png" alt="img">
                                </a>
                                <div class="destinations_content_inner">
                                    <h3><a href="top-destinations.html">China</a></h3>
                                </div>
                            </div>
                            <div class="destinations_content_box img_animation">
                                <a href="top-destinations.html">
                                    <img src="public/assets/img/destination/destination2.png" alt="img">
                                </a>
                                <div class="destinations_content_inner">
                                    <h3><a href="top-destinations.html">Darjeeling</a></h3>
                                </div>
                            </div>
                            <div class="destinations_content_box img_animation">
                                <a href="top-destinations.html">
                                    <img src="public/assets/img/destination/destination3.png" alt="img">
                                </a>
                                <div class="destinations_content_inner">
                                    <h3><a href="top-destinations.html">Malaysia</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="destinations_content_box img_animation">
                                <a href="top-destinations.html">
                                    <img src="public/assets/img/destination/destination4.png" alt="img">
                                </a>
                                <div class="destinations_content_inner">
                                    <h3><a href="top-destinations.html">Gangtok</a></h3>
                                </div>
                            </div>
                            <div class="destinations_content_box img_animation">
                                <a href="top-destinations.html">
                                    <img src="public/assets/img/destination/destination5.png" alt="img">
                                </a>
                                <div class="destinations_content_inner">
                                    <h3><a href="top-destinations.html">Thailand</a></h3>
                                </div>
                            </div>
                            <div class="destinations_content_box img_animation">
                                <a href="top-destinations.html">
                                    <img src="public/assets/img/destination/destination6.png" alt="img">
                                </a>
                                <div class="destinations_content_inner">
                                    <h3><a href="top-destinations.html">Australia</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="destinations_content_box img_animation">
                                <a href="top-destinations.html">
                                    <img src="public/assets/img/destination/destination7.png" alt="img">
                                </a>
                                <div class="destinations_content_inner">
                                    <h3><a href="top-destinations.html">London</a></h3>
                                </div>
                            </div>
                            <div class="destinations_content_box img_animation">
                                <a href="top-destinations.html">
                                    <img src="public/assets/img/destination/destination8.png" alt="img">
                                </a>
                                <div class="destinations_content_inner">
                                    <h3><a href="top-destinations.html">USA</a></h3>
                                </div>
                            </div>
                            <div class="destinations_content_box">
                                <a href="top-destinations.html" class="btn btn_theme btn_md w-100">View all</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Explore our hot deals -->
    <section id="explore_area" class="section_padding_top">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Explore our hot deals</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="theme_nav_tab">
                        <nav class="theme_nav_tab_item">
                            <div class="nav nav-tabs" id="nav-tab1" role="tablist">
                                <button class="nav-link active" id="nav-hotels-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-hotels" type="button" role="tab" aria-controls="nav-hotels"
                                    aria-selected="true">Hotels</button>
                                <button class="nav-link" id="nav-tours-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-tours" type="button" role="tab" aria-controls="nav-tours"
                                    aria-selected="false">Tours</button>
                                <button class="nav-link" id="nav-space-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-space" type="button" role="tab" aria-controls="nav-space"
                                    aria-selected="false">Visa</button>
                                <!--<button class="nav-link" id="nav-events-tab" data-bs-toggle="tab"-->
                                <!--    data-bs-target="#nav-events" type="button" role="tab" aria-controls="nav-events"-->
                                <!--    aria-selected="false">Events</button>-->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-hotels" role="tabpanel"
                            aria-labelledby="nav-hotels-tab">
                            <div class="row">
                                <?php $tour =\App\Hotel_Details_Model::orderBy('id', 'desc')->get(); ?>
                                @foreach($tour as $key=>$tours)
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="theme_common_box_two img_hover">
                                        <div class="theme_two_box_img">
                                            <a href="#">
                                                <img src="{{$tours->hotel_image}}" alt="img" style="height:200px;">
                                            </a>
                                            <p><i class="fas fa-map-marker-alt"></i>{{$tours->hotel_address}}</p>
                                        </div>
                                        <div class="theme_two_box_content">
                                            <h4><a href="#">{{$tours->hotel_name}}</a></h4>
                                            <p><span class="review_rating">{{$tours->hotel_rating}}/5 Excellent</span> <span
                                                    class="review_count"></span></p>
                                            <h3>{{ $Currency_active->currency_symbol}} <?php  $subtotal= $tours->hotel_price / $Currency_active->currency_rates ;echo round($subtotal, 2); ?> <span>Price starts from</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <? if($key == '3' ){ break;  }  ?>
                                @endforeach
                                <!--<div class="col-lg-3 col-md-6 col-sm-6 col-12">-->
                                <!--    <div class="theme_common_box_two img_hover">-->
                                <!--        <div class="theme_two_box_img">-->
                                <!--            <a href="hotel-details.html">-->
                                <!--                <img src="public/assets/img/tab-img/hotel2.png" alt="img">-->
                                <!--            </a>-->
                                <!--            <p><i class="fas fa-map-marker-alt"></i>Indonesia</p>-->
                                <!--            <div class="discount_tab">-->
                                <!--                <span>50%</span>-->
                                <!--            </div>-->

                                <!--        </div>-->
                                <!--        <div class="theme_two_box_content">-->
                                <!--            <h4><a href="hotel-details.html">Hotel paradise international</a></h4>-->
                                <!--            <p><span class="review_rating">4.8/5 Excellent</span> <span-->
                                <!--                    class="review_count">(1214-->
                                <!--                    reviewes)</span></p>-->
                                <!--            <h3>$99.00 <span>Price starts from</span></h3>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="col-lg-3 col-md-6 col-sm-6 col-12">-->
                                <!--    <div class="theme_common_box_two img_hover">-->
                                <!--        <div class="theme_two_box_img">-->
                                <!--            <a href="hotel-details.html">-->
                                <!--                <img src="public/assets/img/tab-img/hotel3.png" alt="img">-->
                                <!--            </a>-->
                                <!--            <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>-->
                                <!--        </div>-->
                                <!--        <div class="theme_two_box_content">-->
                                <!--            <h4><a href="hotel-details.html">Hotel kualalampur</a></h4>-->
                                <!--            <p><span class="review_rating">4.8/5 Excellent</span> <span-->
                                <!--                    class="review_count">(1214-->
                                <!--                    reviewes)</span></p>-->
                                <!--            <h3>$99.00 <span>Price starts from</span></h3>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="col-lg-3 col-md-6 col-sm-6 col-12">-->
                                <!--    <div class="theme_common_box_two img_hover">-->
                                <!--        <div class="theme_two_box_img">-->
                                <!--            <a href="hotel-details.html">-->
                                <!--                <img src="public/assets/img/tab-img/hotel4.png" alt="img">-->
                                <!--            </a>-->
                                <!--            <p><i class="fas fa-map-marker-alt"></i>Mariana island</p>-->
                                <!--            <div class="discount_tab">-->
                                <!--                <span>50%</span>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        <div class="theme_two_box_content">-->
                                <!--            <h4><a href="hotel-details.html">Hotel deluxe</a></h4>-->
                                <!--            <p><span class="review_rating">4.8/5 Excellent</span> <span-->
                                <!--                    class="review_count">(1214-->
                                <!--                    reviewes)</span></p>-->
                                <!--            <h3>$99.00 <span>Price starts from</span></h3>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="col-lg-3 col-md-6 col-sm-6 col-12">-->
                                <!--    <div class="theme_common_box_two img_hover">-->
                                <!--        <div class="theme_two_box_img">-->
                                <!--            <a href="hotel-details.html">-->
                                <!--                <img src="public/assets/img/tab-img/hotel5.png" alt="img">-->
                                <!--            </a>-->
                                <!--            <p><i class="fas fa-map-marker-alt"></i>Kathmundu, Nepal</p>-->
                                <!--        </div>-->
                                <!--        <div class="theme_two_box_content">-->
                                <!--            <h4><a href="hotel-details.html">Hotel rajavumi</a></h4>-->
                                <!--            <p><span class="review_rating">4.8/5 Excellent</span> <span-->
                                <!--                    class="review_count">(1214-->
                                <!--                    reviewes)</span></p>-->
                                <!--            <h3>$99.00 <span>Price starts from</span></h3>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="col-lg-3 col-md-6 col-sm-6 col-12">-->
                                <!--    <div class="theme_common_box_two img_hover">-->
                                <!--        <div class="theme_two_box_img">-->
                                <!--            <a href="hotel-details.html">-->
                                <!--                <img src="public/assets/img/tab-img/hotel6.png" alt="img">-->
                                <!--            </a>-->
                                <!--            <p><i class="fas fa-map-marker-alt"></i>Beach view</p>-->
                                <!--        </div>-->
                                <!--        <div class="theme_two_box_content">-->
                                <!--            <h4><a href="hotel-details.html">Thailand grand suit</a></h4>-->
                                <!--            <p><span class="review_rating">4.8/5 Excellent</span> <span-->
                                <!--                    class="review_count">(1214-->
                                <!--                    reviewes)</span></p>-->
                                <!--            <h3>$99.00 <span>Price starts from</span></h3>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="col-lg-3 col-md-6 col-sm-6 col-12">-->
                                <!--    <div class="theme_common_box_two img_hover">-->
                                <!--        <div class="theme_two_box_img">-->
                                <!--            <a href="hotel-details.html">-->
                                <!--                <img src="public/assets/img/tab-img/hotel7.png" alt="img">-->
                                <!--            </a>-->
                                <!--            <p><i class="fas fa-map-marker-alt"></i>Long island</p>-->
                                <!--        </div>-->
                                <!--        <div class="theme_two_box_content">-->
                                <!--            <h4><a href="hotel-details.html">Zefi resort and spa</a></h4>-->
                                <!--            <p><span class="review_rating">4.8/5 Excellent</span> <span-->
                                <!--                    class="review_count">(1214-->
                                <!--                    reviewes)</span></p>-->
                                <!--            <h3>$99.00 <span>Price starts from</span></h3>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="col-lg-3 col-md-6 col-sm-6 col-12">-->
                                <!--    <div class="theme_common_box_two img_hover">-->
                                <!--        <div class="theme_two_box_img">-->
                                <!--            <a href="hotel-details.html">-->
                                <!--                <img src="public/assets/img/tab-img/hotel8.png" alt="img">-->
                                <!--            </a>-->
                                <!--            <p><i class="fas fa-map-marker-alt"></i>Philippine</p>-->
                                <!--        </div>-->
                                <!--        <div class="theme_two_box_content">-->
                                <!--            <h4><a href="hotel-details.html">Manila international resort</a></h4>-->
                                <!--            <p><span class="review_rating">4.8/5 Excellent</span> <span-->
                                <!--                    class="review_count">(1214-->
                                <!--                    reviewes)</span></p>-->
                                <!--            <h3>$99.00 <span>Price starts from</span></h3>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-tours" role="tabpanel" aria-labelledby="nav-tours-tab">
                            <div class="row">
                                <?php $tour =\App\Tour_Model::orderBy('id', 'desc')->get(); ?>
                                @foreach($tour as $key=>$tours)
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="theme_common_box_two img_hover">
                                        <div class="theme_two_box_img">
                                            <a href="#">
                                                <img src="public/images/{{$tours->image}}" style="height:200px;" alt="img">
                                            </a>
                                            <p><i class="fas fa-map-marker-alt"></i>{{$tours->address}}</p>
                                        </div>
                                        <div class="theme_two_box_content">
                                            <h4><a href="#">{{$tours->tour_name}}  {{$tours->tour_type}}</a></h4>
                                            <p><span class="review_rating">{{$tours->rating}}/5 Excellent</span> <span
                                                    class="review_count">({{$tours->reviewes}}
                                                    reviewes)</span></p>
                                            <h3>{{ $Currency_active->currency_symbol}} <?php  $subtotal= $tours->price / $Currency_active->currency_rates ;echo round($subtotal, 2); ?> <span>Price starts from</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <? if($key == '3' ){ break;  }  ?>
                                @endforeach
                                <!--<div class="col-lg-3 col-md-6 col-sm-6 col-12">-->
                                <!--    <div class="theme_common_box_two img_hover">-->
                                <!--        <div class="theme_two_box_img">-->
                                <!--            <a href="hotel-details.html">-->
                                <!--                <img src="public/assets/img/tab-img/hotel3.png" alt="img">-->
                                <!--            </a>-->
                                <!--            <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>-->
                                <!--        </div>-->
                                <!--        <div class="theme_two_box_content">-->
                                <!--            <h4><a href="hotel-details.html">Hotel kualalampur</a></h4>-->
                                <!--            <p><span class="review_rating">4.8/5 Excellent</span> <span-->
                                <!--                    class="review_count">(1214-->
                                <!--                    reviewes)</span></p>-->
                                <!--            <h3>$99.00 <span>Price starts from</span></h3>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="col-lg-3 col-md-6 col-sm-6 col-12">-->
                                <!--    <div class="theme_common_box_two img_hover">-->
                                <!--        <div class="theme_two_box_img">-->
                                <!--            <a href="hotel-details.html">-->
                                <!--                <img src="public/assets/img/tab-img/hotel8.png" alt="img">-->
                                <!--            </a>-->
                                <!--            <p><i class="fas fa-map-marker-alt"></i>Philippine</p>-->
                                <!--        </div>-->
                                <!--        <div class="theme_two_box_content">-->
                                <!--            <h4><a href="hotel-details.html">Manila international resort</a></h4>-->
                                <!--            <p><span class="review_rating">4.8/5 Excellent</span> <span-->
                                <!--                    class="review_count">(1214-->
                                <!--                    reviewes)</span></p>-->
                                <!--            <h3>$99.00 <span>Price starts from</span></h3>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-space" role="tabpanel" aria-labelledby="nav-space-tab">
                            <div class="row">
                                <?php $visa =\App\Visa_Model::orderBy('id', 'desc')->get(); ?>
                                @foreach($visa as $key=>$visas)
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="theme_common_box_two img_hover">
                                        <div class="theme_two_box_img">
                                            <a href="#">
                                                <img src="public/images/{{$visas->image}}" style="height:200px;" alt="img">
                                            </a>
                                            <p><i class="fas fa-map-marker-alt"></i></p>
                                        </div>
                                        <div class="theme_two_box_content">
                                            <h4><a href="#">{{$visas->visa_name}}</a></h4>
                                            <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                    class="review_count">(1214
                                                    reviewes)</span></p>
                                            <h3>{{ $Currency_active->currency_symbol}} <?php  $subtotal= $visas->amount / $Currency_active->currency_rates ;echo round($subtotal, 2); ?> <span>Price starts from</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                if($key == '3' ){ break;  }  
                                ?>
                                @endforeach
                                <!--<div class="col-lg-3 col-md-6 col-sm-6 col-12">-->
                                <!--    <div class="theme_common_box_two img_hover">-->
                                <!--        <div class="theme_two_box_img">-->
                                <!--            <a href="hotel-details.html">-->
                                <!--                <img src="public/assets/img/tab-img/hotel4.png" alt="img">-->
                                <!--            </a>-->
                                <!--            <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>-->
                                <!--        </div>-->
                                <!--        <div class="theme_two_box_content">-->
                                <!--            <h4><a href="hotel-details.html">Hotel kualalampur</a></h4>-->
                                <!--            <p><span class="review_rating">4.8/5 Excellent</span> <span-->
                                <!--                    class="review_count">(1214-->
                                <!--                    reviewes)</span></p>-->
                                <!--            <h3>$99.00 <span>Price starts from</span></h3>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="theme_common_box_two img_hover">
                                        <div class="theme_two_box_img">
                                            <a href="hotel-details.html">
                                                <img src="public/assets/img/tab-img/hotel1.png" alt="img">
                                            </a>
                                            <p><i class="fas fa-map-marker-alt"></i>New beach, Thailand</p>
                                        </div>
                                        <div class="theme_two_box_content">
                                            <h4><a href="hotel-details.html">Kantua hotel, Thailand</a></h4>
                                            <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                    class="review_count">(1214
                                                    reviewes)</span></p>
                                            <h3>$99.00 <span>Price starts from</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="theme_common_box_two img_hover">
                                        <div class="theme_two_box_img">
                                            <a href="hotel-details.html">
                                                <img src="public/assets/img/tab-img/hotel8.png" alt="img">
                                            </a>
                                            <p><i class="fas fa-map-marker-alt"></i>Philippine</p>
                                        </div>
                                        <div class="theme_two_box_content">
                                            <h4><a href="hotel-details.html">Manila international resort</a></h4>
                                            <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                    class="review_count">(1214
                                                    reviewes)</span></p>
                                            <h3>{{ $Currency_active->currency_symbol}}99.00 <span>Price starts from</span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Offer Area -->
    <section id="offer_area" class="section_padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="offer_area_box d-none-phone img_animation">
                        <img src="public/assets/img/offer/offer1.png" alt="img">
                        <div class="offer_area_content">
                            <h2>Special Offers</h2>
                            <p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                accusam et justo duo dolores et ea rebum. Stet clita kasd dolor sit amet. Lorem ipsum
                                dolor sit amet.</p>
                            <a href="#!" class="btn btn_theme btn_md">Holiday deals</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="offer_area_box img_animation">
                        <img src="public/assets/img/offer/offer2.png" alt="img">
                        <div class="offer_area_content">
                            <h2>News letter</h2>
                            <p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et.</p>
                            <a href="#!" class="btn btn_theme btn_md">Subscribe now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="offer_area_box img_animation">
                        <img src="public/assets/img/offer/offer3.png" alt="img">
                        <div class="offer_area_content">
                            <h2>Travel tips</h2>
                            <p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et.</p>
                            <a href="#!" class="btn btn_theme btn_md">Get tips</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Promotional Tours Area -->
    <section id="promotional_tours" class="section_padding_top">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Our best promotional tours</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="promotional_tour_slider owl-theme owl-carousel dot_style">
                        <?php $tour =\App\Tour_Model::get(); ?>
                                @foreach($tour as $tours)
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="#"><img src="public/images/{{$tours->image}}" style="height:200px;" alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i>{{$tours->address}}</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="#">{{$tours->tour_name}} {{$tours->tour_type}}</a></h4>
                                <p><span class="review_rating">{{$tours->rating}}/5 Excellent</span> <span class="review_count">({{$tours->reviewes}}
                                        reviewes)</span></p>
                                <h3>{{ $Currency_active->currency_symbol}} <?php  $subtotal= $tours->price / $Currency_active->currency_rates ;echo round($subtotal, 2); ?> <span>Price starts from</span></h3>
                            </div>
                        </div>
                        @endforeach
                        <!--<div class="theme_common_box_two img_hover">-->
                        <!--    <div class="theme_two_box_img">-->
                        <!--        <a href="hotel-details.html"><img src="public/assets/img/tab-img/hotel2.png" alt="img"></a>-->
                        <!--        <p><i class="fas fa-map-marker-alt"></i>Indonesia</p>-->
                        <!--        <div class="discount_tab">-->
                        <!--            <span>50%</span>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--    <div class="theme_two_box_content">-->
                        <!--        <h4><a href="hotel-details.html">Hotel paradise international</a></h4>-->
                        <!--        <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214-->
                        <!--                reviewes)</span></p>-->
                        <!--        <h3>$99.00 <span>Price starts from</span></h3>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="theme_common_box_two img_hover">-->
                        <!--    <div class="theme_two_box_img">-->
                        <!--        <a href="hotel-details.html"><img src="public/assets/img/tab-img/hotel3.png" alt="img"></a>-->
                        <!--        <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>-->
                        <!--    </div>-->
                        <!--    <div class="theme_two_box_content">-->
                        <!--        <h4><a href="hotel-details.html">Hotel kualalampur</a></h4>-->
                        <!--        <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214-->
                        <!--                reviewes)</span></p>-->
                        <!--        <h3>$99.00 <span>Price starts from</span></h3>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="theme_common_box_two img_hover">-->
                        <!--    <div class="theme_two_box_img">-->
                        <!--        <a href="hotel-details.html"><img src="public/assets/img/tab-img/hotel4.png" alt="img"></a>-->
                        <!--        <p><i class="fas fa-map-marker-alt"></i>Mariana island</p>-->
                        <!--        <div class="discount_tab">-->
                        <!--            <span>50%</span>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--    <div class="theme_two_box_content">-->
                        <!--        <h4><a href="hotel-details.html">Hotel deluxe</a></h4>-->
                        <!--        <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214-->
                        <!--                reviewes)</span></p>-->
                        <!--        <h3>$99.00 <span>Price starts from</span></h3>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="theme_common_box_two img_hover">-->
                        <!--    <div class="theme_two_box_img">-->
                        <!--        <a href="hotel-details.html"><img src="public/assets/img/tab-img/hotel6.png" alt="img"></a>-->
                        <!--        <p><i class="fas fa-map-marker-alt"></i>Beach view</p>-->
                        <!--    </div>-->
                        <!--    <div class="theme_two_box_content">-->
                        <!--        <h4><a href="hotel-details.html">Thailand grand suit</a></h4>-->
                        <!--        <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214-->
                        <!--                reviewes)</span></p>-->
                        <!--        <h3>$99.00 <span>Price starts from</span></h3>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="theme_common_box_two img_hover">-->
                        <!--    <div class="theme_two_box_img">-->
                        <!--        <a href="hotel-details.html"><img src="public/assets/img/tab-img/hotel7.png" alt="img"></a>-->
                        <!--        <p><i class="fas fa-map-marker-alt"></i>Long island</p>-->
                        <!--    </div>-->
                        <!--    <div class="theme_two_box_content">-->
                        <!--        <h4><a href="hotel-details.html">Zefi resort and spa</a></h4>-->
                        <!--        <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214-->
                        <!--                reviewes)</span></p>-->
                        <!--        <h3>$99.00 <span>Price starts from</span></h3>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Destinations Area -->
    <section id="destinations_area" class="section_padding_top">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Destinations for you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 offset-lg-1">
                    <div class="theme_nav_tab">
                        <nav class="theme_nav_tab_item">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-nepal-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-nepal" type="button" role="tab" aria-controls="nav-nepal"
                                    aria-selected="true">Nepal</button>
                                <button class="nav-link" id="nav-malaysia-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-malaysia" type="button" role="tab" aria-controls="nav-malaysia"
                                    aria-selected="false">Malaysia</button>
                                <button class="nav-link" id="nav-indonesia-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-indonesia" type="button" role="tab"
                                    aria-controls="nav-indonesia" aria-selected="false">Indonesia</button>
                                <button class="nav-link" id="nav-turkey-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-turkey" type="button" role="tab" aria-controls="nav-turkey"
                                    aria-selected="false">Turkey</button>
                                <button class="nav-link" id="nav-china-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-china" type="button" role="tab" aria-controls="nav-china"
                                    aria-selected="false">China</button>
                                <button class="nav-link" id="nav-darjeeling-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-darjeeling" type="button" role="tab"
                                    aria-controls="nav-darjeeling" aria-selected="false">Darjeeling</button>
                                <button class="nav-link" id="nav-italy-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-italy" type="button" role="tab" aria-controls="nav-italy"
                                    aria-selected="false">Italy</button>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="nav-tabContent1">
                        <div class="tab-pane fade show active" id="nav-nepal" role="tabpanel"
                            aria-labelledby="nav-nepal-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="public/assets/img/destination/destination-small1.png" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Everest trek to Base Camp</a></h3>
                                            <p>Price starts at <span>{{ $Currency_active->currency_symbol}}105.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="public/assets/img/destination/destination-small2.png" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Kathmundu tour</a></h3>
                                            <p>Price starts at <span>{{ $Currency_active->currency_symbol}}85.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="public/assets/img/destination/destination-small3.png" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Beautiful pokhara</a></h3>
                                            <p>Price starts at <span>{{ $Currency_active->currency_symbol}}100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="public/assets/img/destination/destination-small4.png" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Annapurna region</a></h3>
                                            <p>Price starts at <span>{{ $Currency_active->currency_symbol}}75.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="public/assets/img/destination/destination-small5.png" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Chitwan national park</a></h3>
                                            <p>Price starts at <span>{{ $Currency_active->currency_symbol}}105.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="public/assets/img/destination/destination-small6.png" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Langtang region</a></h3>
                                            <p>Price starts at <span>{{ $Currency_active->currency_symbol}}105.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-malaysia" role="tabpanel" aria-labelledby="nav-malaysia-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="public/assets/img/destination/destination-small2.png" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Kathmundu tour</a></h3>
                                            <p>Price starts at <span>{{ $Currency_active->currency_symbol}}85.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="public/assets/img/destination/destination-small3.png" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Beautiful pokhara</a></h3>
                                            <p>Price starts at <span>{{ $Currency_active->currency_symbol}}100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html">
                                                <img src="public/assets/img/destination/destination-small4.png" alt="img">
                                            </a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Annapurna region</a></h3>
                                            <p>Price starts at <span>{{ $Currency_active->currency_symbol}}75.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="public/assets/img/destination/destination-small6.png" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Langtang region</a></h3>
                                            <p>Price starts at <span>{{ $Currency_active->currency_symbol}}105.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-indonesia" role="tabpanel"
                            aria-labelledby="nav-indonesia-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="public/assets/img/destination/destination-small3.png" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Beautiful pokhara</a></h3>
                                            <p>Price starts at <span>{{ $Currency_active->currency_symbol}}100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="public/assets/img/destination/destination-small4.png" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Annapurna region</a></h3>
                                            <p>Price starts at <span>{{ $Currency_active->currency_symbol}}75.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="public/assets/img/destination/destination-small6.png" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Langtang region</a></h3>
                                            <p>Price starts at <span>{{ $Currency_active->currency_symbol}}105.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-turkey" role="tabpanel" aria-labelledby="nav-turkey-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="public/assets/img/destination/destination-small2.png" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Kathmundu tour</a></h3>
                                            <p>Price starts at <span>{{ $Currency_active->currency_symbol}}85.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="public/assets/img/destination/destination-small3.png" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Beautiful pokhara</a></h3>
                                            <p>Price starts at <span>{{ $Currency_active->currency_symbol}}100.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="public/assets/img/destination/destination-small4.png" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Annapurna region</a></h3>
                                            <p>Price starts at <span>{{ $Currency_active->currency_symbol}}75.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-china" role="tabpanel" aria-labelledby="nav-china-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="public/assets/img/destination/destination-small4.png" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Annapurna region</a></h3>
                                            <p>Price starts at <span>{{ $Currency_active->currency_symbol}}75.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="public/assets/img/destination/destination-small6.png" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Langtang region</a></h3>
                                            <p>Price starts at <span>{{ $Currency_active->currency_symbol}}105.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-darjeeling" role="tabpanel"
                            aria-labelledby="nav-darjeeling-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="public/assets/img/destination/destination-small4.png" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Annapurna region</a></h3>
                                            <p>Price starts at <span>{{ $Currency_active->currency_symbol}}75.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-italy" role="tabpanel" aria-labelledby="nav-italy-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="public/assets/img/destination/destination-small4.png" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Annapurna region</a></h3>
                                            <p>Price starts at <span>{{ $Currency_active->currency_symbol}}75.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="tab_destinations_boxed">
                                        <div class="tab_destinations_img">
                                            <a href="top-destinations.html"><img
                                                    src="public/assets/img/destination/destination-small6.png" alt="img"></a>
                                        </div>
                                        <div class="tab_destinations_conntent">
                                            <h3><a href="top-destinations.html">Langtang region</a></h3>
                                            <p>Price starts at <span>{{ $Currency_active->currency_symbol}}105.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Area -->
    <section id="home_news" class="section_padding_top">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Latest travel news</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="home_news_left_wrapper">
                        <div class="home_news_item">
                            <div class="home_news_img">
                                <a href="news-details.html"><img src="public/assets/img/news/small1.png" alt="img"></a>
                            </div>
                            <div class="home_news_content">
                                <h3><a href="news-details.html">Revolutionising the travel industry,
                                        one partnership at a time</a></h3>
                                <p><a href="news.html">26 Oct 2021</a> <span> <i class="fas fa-circle"></i>5min
                                        read</span> </p>
                            </div>
                        </div>
                        <div class="home_news_item">
                            <div class="home_news_img">
                                <a href="news-details.html"><img src="public/assets/img/news/small2.png" alt="img"></a>
                            </div>
                            <div class="home_news_content">
                                <h3><a href="news-details.html">t is a long established fact that a reader will be
                                        distracted.</a></h3>
                                <p><a href="news.html">26 Oct 2021</a> <span> <i class="fas fa-circle"></i>5min
                                        read</span> </p>
                            </div>
                        </div>
                        <div class="home_news_item">
                            <div class="home_news_img">
                                <a href="news-details.html"><img src="public/assets/img/news/small3.png" alt="img"></a>
                            </div>
                            <div class="home_news_content">
                                <h3><a href="#!">There are many variations of passages of sum available</a></h3>
                                <p><a href="news.html">26 Oct 2021</a> <span> <i class="fas fa-circle"></i>5min
                                        read</span> </p>
                            </div>
                        </div>
                        <div class="home_news_item">
                            <div class="home_news_img">
                                <a href="news-details.html"><img src="public/assets/img/news/small4.png" alt="img"></a>
                            </div>
                            <div class="home_news_content">
                                <h3><a href="news-details.html">Contrary to popular belief, Lorem Ipsum is not
                                        simply.</a></h3>
                                <p><a href="news.html">26 Oct 2021</a> <span> <i class="fas fa-circle"></i>5min
                                        read</span> </p>
                            </div>
                        </div>
                        <div class="home_news_item">
                            <div class="seeall_link">
                                <a href="news.html">See all article <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="home_news_big">
                        <div class="news_home_bigest img_hover">
                            <a href="news-details.html"><img src="public/assets/img/news/new-big.png" alt="img"></a>
                        </div>
                        <h3><a href="news-details.html">There are many variations of passages available but</a> </h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of.
                            The point of using Lorem Ipsum is that it has a more</p>
                        <p>It is a long established fact that a reader will be distracted by the readable long
                            established fact that a reader will be distracted content of a
                            page when looking at its layout.</p>
                        <a href="news-details.html">Read full article <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our partners Area -->
    <section id="our_partners" class="section_padding">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Our partners</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="partner_slider_area owl-theme owl-carousel">
                        <div class="partner_logo">
                            <a href="#!"><img src="public/assets/img/partner/1.png" alt="logo"></a>
                        </div>
                        <div class="partner_logo">
                            <a href="#!"><img src="public/assets/img/partner/2.png" alt="logo"></a>
                        </div>
                        <div class="partner_logo">
                            <a href="#!"><img src="public/assets/img/partner/3.png" alt="logo"></a>
                        </div>
                        <div class="partner_logo">
                            <a href="#!"><img src="public/assets/img/partner/4.png" alt="logo"></a>
                        </div>
                        <div class="partner_logo">
                            <a href="#!"><img src="public/assets/img/partner/5.png" alt="logo"></a>
                        </div>
                        <div class="partner_logo">
                            <a href="#!"><img src="public/assets/img/partner/6.png" alt="logo"></a>
                        </div>
                        <div class="partner_logo">
                            <a href="#!"><img src="public/assets/img/partner/7.png" alt="logo"></a>
                        </div>
                        <div class="partner_logo">
                            <a href="#!"><img src="public/assets/img/partner/8.png" alt="logo"></a>
                        </div>
                        <div class="partner_logo">
                            <a href="#!"><img src="public/assets/img/partner/5.png" alt="logo"></a>
                        </div>
                        <div class="partner_logo">
                            <a href="#!"><img src="public/assets/img/partner/3.png" alt="logo"></a>
                        </div>
                        <div class="partner_logo">
                            <a href="#!"><img src="public/assets/img/partner/2.png" alt="logo"></a>
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
                            <img src="public/assets/img/common/email.png" alt="icon">
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
    
    <!-- Footer  -->
        <footer id="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer_heading_area">
                        <h5>Need any help?</h5>
                    </div>
                    <div class="footer_first_area">
                        <div class="footer_inquery_area">
                            <h5>Call 24/7 for any help</h5>
                            <h3> <a href="tel:+44-203-463-7788">+44 (0) 203 463 7788</a></h3>
                        </div>
                        <div class="footer_inquery_area">
                            <h5>Mail to our support team</h5>
                            <h3> <a href="mailto:support@flightpathtravel.com">support@flightpathtravel.com</a></h3>
                        </div>
                        <div class="footer_inquery_area">
                            <h5>Follow us on</h5>
                            <ul class="soical_icon_footer">
                                <li><a href="#!"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#!"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-6 col-sm-6 col-12">
                    <div class="footer_heading_area">
                        <h5>Company</h5>
                    </div> 
                    <div class="footer_link_area">
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Rewards</a></li>
                            <li><a href="#">Work with Us</a></li>
                            <li><a href="#">Meet the Team </a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="footer_heading_area">
                        <h5>Support</h5>
                    </div>
                    <div class="footer_link_area">
                        <ul>
                            <li><a href="#">Account</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="{{url('/contact-us')}}">contact us</a></li>
                            <li><a href="{{url('/refund_policy')}}">Refund Policy</a></li>
                            <li><a href="{{url('/term-conditions')}}">Term & Conditions</a></li>
                            <li><a href="{{url('/privacy-policy')}}" class="nav-link">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="footer_heading_area">
                        <h5>Other Services</h5>
                    </div>
                    <div class="footer_link_area">
                        <ul>
                            <li><a href="#">Community program</a></li>
                            <li><a href="#">Investor Relations</a></li>
                            <li><a href="#">Rewards Program</a></li>
                            <li><a href="#">PointsPLUS</a></li>
                            <li><a href="#">Partners</a></li>
                            <li><a href="#">List My Hotel</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="footer_heading_area">
                        <h5>Top cities</h5>
                    </div>
                    <div class="footer_link_area">
                        <ul>
                            <li><a href="#">Chicago</a></li>
                            <li><a href="#">New York</a></li>
                            <li><a href="#">San Francisco</a></li>
                            <li><a href="#">California</a></li>
                            <li><a href="#">Ohio </a></li>
                            <li><a href="#">Alaska</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="co-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="copyright_left">
                        <p>Copyright © 2022 All Rights Reserved</p>
                    </div>
                </div>
                <div class="co-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="copyright_right">
                        <img src="public/assets/img/common/cards.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="go-top"> 
        <i class="fas fa-chevron-up"></i>
        <i class="fas fa-chevron-up"></i>
    </div>

    <script>



        function updateFields2(first_field2) {

            document.getElementById(

                "second-field2").value =

                document.getElementById(

                    "first_field2").value;

        }

    </script>



    <script>



        function updateFields1(first_field1) {

            document.getElementById(

                "second-field1").value =

                document.getElementById(

                    "first_field1").value;

        }

    </script>



    <script>



        function updateFields(first_field) {

            document.getElementById(

                "second-field").value =

                document.getElementById(

                    "first_field").value;

        }

    </script>

    <script>



        function updateFields3(first_field3) {

            var objectarray = document.getElementById("first_field3").value;

            if (objectarray == '1') {

                document.getElementById(

                    "second-field3").value = "All"

            }

            if (objectarray == '2') {

                document.getElementById(

                    "second-field3").value = "Economy"

            }

            if (objectarray == '3') {

                document.getElementById(

                    "second-field3").value = "Premium Economy"

            }

            if (objectarray == '4') {

                document.getElementById(

                    "second-field3").value = "Business"

            } if (objectarray == '5') {

                document.getElementById(

                    "second-field3").value = "PremiumBusiness"

            }

            if (objectarray == '6') {

                document.getElementById(

                    "second-field3").value = "First Class"

            }

        }

    </script>



    <!--Return-->

    <script>



        function updateFields21(first_field21) {

            document.getElementById(

                "second-field21").value =

                document.getElementById(

                    "first_field21").value;

        }

    </script>



    <script>



        function updateFields11(first_field11) {

            document.getElementById(

                "second-field11").value =

                document.getElementById(

                    "first_field11").value;

        }

    </script>



    <script>



        function updateFields01(first_field01) {

            document.getElementById(

                "second-field01").value =

                document.getElementById(

                    "first_field01").value;

        }

    </script>

    <script>



        function updateFields31(first_field31) {

            var objectarray = document.getElementById("first_field31").value;

            if (objectarray == '1') {

                document.getElementById(

                    "second-field31").value = "All"

            }

            if (objectarray == '2') {

                document.getElementById(

                    "second-field31").value = "Economy"

            }

            if (objectarray == '31') {

                document.getElementById(

                    "second-field31").value = "Premium Economy"

            }

            if (objectarray == '4') {

                document.getElementById(

                    "second-field31").value = "Business"

            } if (objectarray == '5') {

                document.getElementById(

                    "second-field31").value = "PremiumBusiness"

            }

            if (objectarray == '6') {

                document.getElementById(

                    "second-field31").value = "First Class"

            }

        }

    </script>





    <!--Return-->

    <script>



        function updateFields001(first_field21) {

            document.getElementById(

                "second-field001").value =

                document.getElementById(

                    "first_field001").value;

        }

    </script>



    <script>



        function updateFields002(first_field11) {

            document.getElementById(

                "second-field002").value =

                document.getElementById(

                    "first_field002").value;

        }

    </script>



    <script>



        function updateFields003(first_field01) {

            document.getElementById(

                "second-field003").value =

                document.getElementById(

                    "first_field003").value;

        }

    </script>

    <script>



        function updateFields004(first_field31) {

            var objectarray = document.getElementById("first_field004").value;

            if (objectarray == '1') {

                document.getElementById(

                    "second-field004").value = "All"

            }

            if (objectarray == '2') {

                document.getElementById(

                    "second-field004").value = "Economy"

            }

            if (objectarray == '31') {

                document.getElementById(

                    "second-field004").value = "Premium Economy"

            }

            if (objectarray == '4') {

                document.getElementById(

                    "second-field004").value = "Business"

            } if (objectarray == '5') {

                document.getElementById(

                    "second-field004").value = "PremiumBusiness"

            }

            if (objectarray == '6') {

                document.getElementById(

                    "second-field004").value = "First Class"

            }

        }

    </script>





    <!--Return-->

    <script>



        function updateFields0001(first_field21) {

            document.getElementById(

                "second-field0001").value =

                document.getElementById(

                    "first_field0001").value;

        }

    </script>



    <script>



        function updateFields0002(first_field11) {

            document.getElementById(

                "second-field0002").value =

                document.getElementById(

                    "first_field0002").value;

        }

    </script>



    <script>



        function updateFields0003(first_field01) {

            document.getElementById(

                "second-field0003").value =

                document.getElementById(

                    "first_field0003").value;

        }

    </script>

    <script>



        function updateFields0004(first_field31) {

            var objectarray = document.getElementById("first_field0004").value;

            if (objectarray == '1') {

                document.getElementById(

                    "second-field0004").value = "All"

            }

            if (objectarray == '2') {

                document.getElementById(

                    "second-field0004").value = "Economy"

            }

            if (objectarray == '31') {

                document.getElementById(

                    "second-field0004").value = "Premium Economy"

            }

            if (objectarray == '4') {

                document.getElementById(

                    "second-field0004").value = "Business"

            } if (objectarray == '5') {

                document.getElementById(

                    "second-field0004").value = "PremiumBusiness"

            }

            if (objectarray == '6') {

                document.getElementById(

                    "second-field0004").value = "First Class"

            }

        }

    </script>

    <script>

        const d = new Date();

        let text = d.toLocaleString();

        document.getElementById("demo").innerHTML = text;

    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>

        $(document).ready(function () {



            /*------------------------------------------

            --------------------------------------------

            Country Dropdown Change Event

            --------------------------------------------

            --------------------------------------------*/

            $('#from').on('change', function () {

                var idCountry = this.value;

                $("#state-dropdown").html('');

                $.ajax({

                    url: "/fetch-from",

                    type: "POST",

                    data: {

                        country_id: idCountry,

                        _token: '{{csrf_token()}}'

                    },

                    dataType: 'json',

                    success: function (result) {

                        $.each(result.states, function (key, value) {

                            $("#state-dropdown").append('<option value="">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

                        });

                    }

                });

            });

        });

    </script>



    <script>

        $(document).ready(function () {



            /*------------------------------------------

            --------------------------------------------

            Country Dropdown Change Event

            --------------------------------------------

            --------------------------------------------*/

            $('#to').on('change', function () {

                var idCountry = this.value;

                $("#state-dropdown1").html('');

                $.ajax({

                    url: "/fetch-from",

                    type: "POST",

                    data: {

                        country_id: idCountry,

                        _token: '{{csrf_token()}}'

                    },

                    dataType: 'json',

                    success: function (result) {

                        $.each(result.states, function (key, value) {

                            $("#state-dropdown1").append('<option value="">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

                        });

                    }

                });

            });

        });

    </script>



    <script>

        $(document).ready(function () {



            /*------------------------------------------

            --------------------------------------------

            Country Dropdown Change Event

            --------------------------------------------

            --------------------------------------------*/

            $('#from12').on('change', function () {

                var idCountry = this.value;

                $("#state-dropdown12").html('');

                $.ajax({

                    url: "/fetch-from",

                    type: "POST",

                    data: {

                        country_id: idCountry,

                        _token: '{{csrf_token()}}'

                    },

                    dataType: 'json',

                    success: function (result) {

                        $.each(result.states, function (key, value) {

                            $("#state-dropdown12").append('<option value="">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

                        });

                    }

                });

            });

        });

    </script>



    <script>

        $(document).ready(function () {



            /*------------------------------------------

            --------------------------------------------

            Country Dropdown Change Event

            --------------------------------------------

            --------------------------------------------*/

            $('#to12').on('change', function () {

                var idCountry = this.value;

                $("#state-dropdown112").html('');

                $.ajax({

                    url: "/fetch-from",

                    type: "POST",

                    data: {

                        country_id: idCountry,

                        _token: '{{csrf_token()}}'

                    },

                    dataType: 'json',

                    success: function (result) {

                        $.each(result.states, function (key, value) {

                            $("#state-dropdown112").append('<option value="">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

                        });

                    }

                });

            });

        });

    </script>



    <!---->

    <script>

        $(document).ready(function () {



            /*------------------------------------------

            --------------------------------------------

            Country Dropdown Change Event

            --------------------------------------------

            --------------------------------------------*/

            $('#from_1').on('change', function () {

                var idCountry = this.value;

                $("#state-dropdown_1").html('');

                $.ajax({

                    url: "/fetch-from",

                    type: "POST",

                    data: {

                        country_id: idCountry,

                        _token: '{{csrf_token()}}'

                    },

                    dataType: 'json',

                    success: function (result) {

                        $.each(result.states, function (key, value) {

                            $("#state-dropdown_1").append('<option value="">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

                        });

                    }

                });

            });

        });

    </script>



    <script>

        $(document).ready(function () {



            /*------------------------------------------

            --------------------------------------------

            Country Dropdown Change Event

            --------------------------------------------

            --------------------------------------------*/

            $('#to_2').on('change', function () {

                var idCountry = this.value;

                $("#state-dropdown_2").html('');

                $.ajax({

                    url: "/fetch-from",

                    type: "POST",

                    data: {

                        country_id: idCountry,

                        _token: '{{csrf_token()}}'

                    },

                    dataType: 'json',

                    success: function (result) {

                        $.each(result.states, function (key, value) {

                            $("#state-dropdown_2").append('<option value="">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

                        });

                    }

                });

            });

        });

    </script>



    <script>

        $(document).ready(function () {



            /*------------------------------------------

            --------------------------------------------

            Country Dropdown Change Event

            --------------------------------------------

            --------------------------------------------*/

            $('#from_3').on('change', function () {

                var idCountry = this.value;

                $("#state-dropdown_3").html('');

                $.ajax({

                    url: "/fetch-from",

                    type: "POST",

                    data: {

                        country_id: idCountry,

                        _token: '{{csrf_token()}}'

                    },

                    dataType: 'json',

                    success: function (result) {

                        $.each(result.states, function (key, value) {

                            $("#state-dropdown_3").append('<option value="">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

                        });

                    }

                });

            });

        });

    </script>



    <script>

        $(document).ready(function () {



            /*------------------------------------------

            --------------------------------------------

            Country Dropdown Change Event

            --------------------------------------------

            --------------------------------------------*/

            $('#to_4').on('change', function () {

                var idCountry = this.value;

                $("#state-dropdown_4").html('');

                $.ajax({

                    url: "/fetch-from",

                    type: "POST",

                    data: {

                        country_id: idCountry,

                        _token: '{{csrf_token()}}'

                    },

                    dataType: 'json',

                    success: function (result) {

                        $.each(result.states, function (key, value) {

                            $("#state-dropdown_4").append('<option value="">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

                        });

                    }

                });

            });

        });

    </script>



    <!--Search-->

    <script>

        $(document).ready(function () {



            /*------------------------------------------

            --------------------------------------------

            Country Dropdown Change Event

            --------------------------------------------

            --------------------------------------------*/

            $('.from').on('keyup', function () {

                var idCountry = this.value;

                $("#ShowDataList1").html('');

                $.ajax({

                    url: "/fetch-from1",

                    type: "POST",

                    data: {

                        country_id: idCountry,

                        _token: '{{csrf_token()}}'

                    },

                    dataType: 'json',

                    success: function (result) {

                        $.each(result.states, function (key, value) {

                            $("#ShowDataList1").append('<option value="' + value.AIRPORTCODE + '">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

                        });

                    }

                });

            });

        });

    </script>



    <script>

        $(document).ready(function () {



            /*------------------------------------------

            --------------------------------------------

            Country Dropdown Change Event

            --------------------------------------------

            --------------------------------------------*/

            $('.to').on('keyup', function () {

                var idCountry = this.value;

                $("#ShowDataList2").html('');

                $.ajax({

                    url: "/fetch-from1",

                    type: "POST",

                    data: {

                        country_id: idCountry,

                        _token: '{{csrf_token()}}'

                    },

                    dataType: 'json',

                    success: function (result) {

                        $.each(result.states, function (key, value) {

                            $("#ShowDataList2").append('<option value="' + value.AIRPORTCODE + '">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

                        });

                    }

                });

            });

        });

    </script>



    <script>

        $(document).ready(function () {



            /*------------------------------------------

            --------------------------------------------

            Country Dropdown Change Event

            --------------------------------------------

            --------------------------------------------*/

            $('.city_id').on('keyup', function () {

                var idCountry = this.value;

                $("#city_id").html('');

                $.ajax({

                    url: "/city_details",

                    type: "POST",

                    data: {

                        country_id: idCountry,

                        _token: '{{csrf_token()}}'

                    },

                    dataType: 'json',

                    success: function (result) {

                        $.each(result.states, function (key, value) {

                            $("#city_id").append('<input type="hidden" name="Destination" value="' + value.city_id + '">');

                        });

                    }

                });

            });

        });

    </script>

    <script>

        $(document).ready(function () {



            /*------------------------------------------

            --------------------------------------------

            Country Dropdown Change Event

            --------------------------------------------

            --------------------------------------------*/

            $('.dateget').on('keyup', function () {

                var idCountry = this.value;

                const date_str = "11/02/2023";

                const date = new Date(date_str);

                const full_day_name = date.toLocaleDateString('default', { weekday: 'long' });

                console.log(full_day_name)

            });

        });

    </script>

    <script>

        function myDate() {

            var a = new Date(this.value);

            console.log(a);

            var weekdays = new Array(7);

            weekdays[0] = "Sunday";

            weekdays[1] = "Monday";

            weekdays[2] = "Tuesday";

            weekdays[3] = "Wednesday";

            weekdays[4] = "Thursday";

            weekdays[5] = "Friday";

            weekdays[6] = "Saturday";

            var r = weekdays[a.getDay()];

            document.getElementById("myId").innerHTML = r;

        }

        $(function () {

            var dtToday = new Date();



            var month = dtToday.getMonth() + 1;

            var day = dtToday.getDate();

            var year = dtToday.getFullYear();

            if (month < 10)

                month = '0' + month.toString();

            if (day < 10)

                day = '0' + day.toString();



            var minDate = year + '-' + month + '-' + day;



            $('.txtDate').attr('min', minDate);

        });

    </script>
<script>
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
                        @foreach($filterResult as $state_)
                          <option value="{{$state_->AIRPORTCODE}}">{{__($state_->CITYNAME)}}  ( {{__($state_->AIRPORTCODE)}} ) {{__($state_->COUNTRYCODE)}}</option>
                        @endforeach
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
                         @foreach($filterResult as $state_)
                         <option value="{{$state_->AIRPORTCODE}}">{{__($state_->CITYNAME)}}  ( {{__($state_->AIRPORTCODE)}} ) {{__($state_->COUNTRYCODE)}}</option>
                        @endforeach
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


        $(document).ready(function () {

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
        });
    </script>
    <script>
 $('input[type="email"]').on('keydown, keyup', function () {
  var productNameInput = $('input[name="adult"]').val();
    var productBrandField = $('input[name="adult"]');
    var productBrandValue = productBrandField.val(productNameInput);
    console.log(productNameInput);
    console.log(productBrandValue.val());
 
});

$('input[type="email"]').on('keydown, keyup', function () {
  var productNameInput = $('input[name="child"]').val();
    var productBrandField = $('input[name="children"]');
    var productBrandValue = productBrandField.val(productNameInput);
    console.log(productNameInput);
    console.log(productBrandValue.val());
 
});
</script>
 <script>
 $('input[type="number"]').on('keydown, keyup', function () {
  var productNameInput = $('input[name="adult12"]').val();
    var productBrandField = $('input[name="adult"]');
    var productBrandValue = productBrandField.val(productNameInput);
    console.log(productNameInput);
    console.log(productBrandValue.val());
 
});

$('input[type="number"]').on('keydown, keyup', function () {
  var productNameInput = $('input[name="child12"]').val();
    var productBrandField = $('input[name="children"]');
    var productBrandValue = productBrandField.val(productNameInput);
    console.log(productNameInput);
    console.log(productBrandValue.val());
 
});

$(function(){
    var select = $('#select_from');
    var selected = $('#selected_from');

    select.on('change', function(){
        var selectedOptionText = $(this).children(':selected').text();
        
        selected.text(selectedOptionText + '');
    });
});
$(function(){
    var select = $('#select_to');
    var selected = $('#selected_to');

    select.on('change', function(){
        var selectedOptionText = $(this).children(':selected').text();
        
        selected.text(selectedOptionText + '');
    });
});

console.log($('.getDate').html($('.datePicker').val()))
console.log($('.getadult').html($('.getadult_data').val()))
</script>
<script>
   
        $(document).ready(function () {
  
            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#country-dropdown').on('change', function () {
                var idCountry = this.value;
               $.ajax({
                    url: "{{url('/currency-change')}}",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        location.reload();
                    //     $('#state-dropdown').html('<option value="">-- Select State --</option>');
                    //     $.each(result.states, function (key, value) {
                    //         $("#state-dropdown").append('<option value="' + value
                    //             .id + '">' + value.name + '</option>');
                    //     });
                    }
                });
            });
        });
    </script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script src="public/assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap js -->

    <script src="public/assets/js/bootstrap.bundle.js"></script>

    <!-- Meanu js -->

    <script src="public/assets/js/jquery.meanmenu.js"></script>

    <!-- owl carousel js -->

    <script src="public/assets/js/owl.carousel.min.js"></script>

    <!-- wow.js -->

    <script src="public/assets/js/wow.min.js"></script>

    <!-- Select2 -->

    <script src="public/assets/js/select2.min.js"></script>

    <!-- Custom js -->

    <script src="public/assets/js/custom.js"></script>

    <script src="public/assets/js/add-form.js"></script>

    <script src="public/assets/js/form-dropdown.js"></script>

</body>



</html>