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
                <h3>Loading..</h3>
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

                                                    <a href="{{ route('about-us') }}" class="nav-link">About Us</a>

                                                </li>

                         <li class="nav-item">

                                    <a href="#" class="nav-link">

                                        Categories

                                        <i class="fas fa-angle-down"></i>

                                    </a>

                                    <ul class="dropdown-menu">

                                        <li class="nav-item">

                                            <a href="{{ route('tours-form-search') }}" class="nav-link">

                                                Tours

                                            </a>

                                        
                                        </li>

                                        <li class="nav-item">

                                            <a href="{{ route('flight-form-search') }}" class="nav-link">

                                                Flights

                                            </a>

                                          

                                        </li>

                                        <li class="nav-item">

                                            <a href="{{ route('search-hotel') }}" class="nav-link">

                                                Hotel

                                            </a>

                                        

                                        </li>

                                        <li class="nav-item">

                                            <a href="{{ route('visa-form-search') }}" class="nav-link">

                                                Visa

                                            </a>

                                        

                                        </li>
                                         <li class="nav-item">

                                            <a href="{{ route('pnr-search') }}" class="nav-link">
PNR Search
                                            </a>

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

                                            <a href="{{ route('teams') }}" class="nav-link">Team</a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="{{ route('testimonials') }}" class="nav-link">Testimonials</a>

                                        </li>

                                        <li class="nav-item">

                                            <a href="{{ route('faq') }}" class="nav-link">FAQ</a>

                                        </li>


                                        <!--<li class="nav-item">-->

                                        <!--    <a href="#" class="nav-link">User Pages</a>-->

                                        <!--    <ul class="dropdown-menu">-->

                                        <!--        <li class="nav-item">-->

                                        <!--            <a href="{{url('/User-login')}}" class="nav-link">Login</a>-->

                                        <!--        </li>-->

                                        <!--        <li class="nav-item">-->

                                        <!--            <a href="#" class="nav-link">Register</a>-->

                                        <!--        </li>-->

                                        <!--        <li class="nav-item">-->

                                        <!--            <a href="#" class="nav-link">Forget Password</a>-->

                                        <!--        </li>-->

                                        <!--        <li class="nav-item">-->

                                        <!--            <a href="#" class="nav-link">Verify OTP</a>-->

                                        <!--        </li>-->

                                              

                                        <!--    </ul>-->

                                        <!--</li>-->



                                        <li class="nav-item">

                                            <a href="{{url('/privacy-policy')}}" class="nav-link">Privacy Policy</a>

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



                                <!--<li class="nav-item">-->

                                <!--    <a href="#" class="nav-link">News <i class="fas fa-angle-down"></i></a>-->

                                <!--    <ul class="dropdown-menu">-->

                                <!--        <li class="nav-item">-->

                                <!--            <a href="#" class="nav-link">News</a>-->

                                <!--        </li>-->

                                <!--        <li class="nav-item">-->

                                <!--            <a href="#" class="nav-link">News v2</a>-->

                                <!--        </li>-->

                                <!--        <li class="nav-item">-->

                                <!--            <a href="#" class="nav-link">News v3</a>-->

                                <!--        </li>-->

                                <!--        <li class="nav-item">-->

                                <!--            <a href="#" class="nav-link">News v4</a>-->

                                <!--        </li>-->

                                <!--        <li class="nav-item">-->

                                <!--            <a href="#" class="nav-link">News Details</a>-->

                                <!--        </li>-->

                                <!--        <li class="nav-item">-->

                                <!--            <a href="#" class="nav-link">News Details v2</a>-->

                                <!--        </li>-->

                                <!--    </ul>-->

                                <!--</li>-->

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
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
 