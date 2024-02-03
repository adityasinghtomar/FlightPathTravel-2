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
    <!-- Style css -->
    <link rel="stylesheet" href="public/assets/css/style.css" />
    <!-- Responsive css -->
    <link rel="stylesheet" href="public/assets/css/responsive.css" />
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
 $ip = $_SERVER['SERVER_ADDR'];
$ipdat = @json_decode(file_get_contents( 
	"http://www.geoplugin.net/json.gp?ip=" . $ip)); 

// echo 'Country Name: ' . $ipdat->geoplugin_countryName . "\n"; 
// echo 'City Name: ' . $ipdat->geoplugin_city . "\n"; 
// echo 'Continent Name: ' . $ipdat->geoplugin_continentName . "\n"; 
// echo 'Latitude: ' . $ipdat->geoplugin_latitude . "\n"; 
// echo 'Longitude: ' . $ipdat->geoplugin_longitude . "\n"; 
$Currency_Symbol= "dd"; 
 $Currency = "d"; 
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
                                    <a href="#" class="btn  btn_navber">Become a partner</a></li>
                            
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
                                <div class="dropdown language-option">
                                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="lang-name"></span>
                                    </button>
                                    <div class="dropdown-menu language-dropdown-menu">
                                       <?php $Currency1 =\App\Currency_Model::where('status','0')->get(); ?>
                                                <a class="dropdown-item" href="#">{{$Currency_Symbol}} ({{$Currency}})</a>
                                                @foreach($Currency1 as $Currency12)
                                                <a class="dropdown-item" href="#">{{ $Currency12->currency_symbol}} ({{__($Currency12->currency_code)}})</a>
                                                @endforeach
                                    </div>
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
                                <li class="nav-item">
                                    
                                   @if(session()->has('user_id'))  <a href="{{url('/customer-dashboard')}}" class="nav-link">Dashboard </a>  @endif
                                    <!--<ul class="dropdown-menu">-->
                                    <!--    <li class="nav-item">-->
                                    <!--        <a href="#" class="nav-link">Dashboard</a>-->
                                    <!--    </li>-->
                                    <!--    <li class="nav-item">-->
                                    <!--        <a href="#" class="nav-link">Hotel booking</a>-->
                                    <!--    </li>-->
                                    <!--    <li class="nav-item">-->
                                    <!--        <a href="#" class="nav-link">Flight booking</a>-->
                                    <!--    </li>-->
                                    <!--    <li class="nav-item">-->
                                    <!--        <a href="#" class="nav-link">Tour booking</a>-->
                                    <!--    </li>-->
                                    <!--    <li class="nav-item">-->
                                    <!--        <a href="#" class="nav-link">Booking history</a>-->
                                    <!--    </li>-->
                                    <!--    <li class="nav-item">-->
                                    <!--        <a href="#" class="nav-link">My profile</a>-->
                                    <!--    </li>-->
                                    <!--    <li class="nav-item">-->
                                    <!--        <a href="#" class="nav-link">Wallet</a>-->
                                    <!--    </li>-->
                                    <!--    <li class="nav-item">-->
                                    <!--        <a href="#" class="nav-link">Notifications</a>-->
                                    <!--    </li>-->
                                    <!--</ul>-->
                                </li>
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
                                    <a href="#" class="btn  btn_navber">{{session()->get('name')}}</a>
                                    <a href="{{url('/logout')}}" class="btn  btn_navber">Logout</a>
                         @else
                        <a href="{{url('/User-login')}}" class="btn  btn_navber">Login</a>
                            <a href="{{url('/User-Register')}}" class="btn  btn_navber">Sign up</a>
                        @endif
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="others-option-for-responsive">
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
                                    <a href="#" class="btn  btn_navber">Get free quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
