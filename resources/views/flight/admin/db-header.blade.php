<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Stylesheets -->
  <link rel="stylesheet" href="public/admin/css/vendors.css">
  <link rel="stylesheet" href="public/admin/css/main.css">

  <title>Flight Path Travel - Admin Panel</title>
</head>

<body data-barba="wrapper">

  <div class="preloader js-preloader">

  </div>

  <div class="header-margin"></div>
  <header data-add-bg="" class="header -dashboard bg-white js-header" data-x="header" data-x-toggle="is-menu-opened">
    <div data-anim="fade" class="header__container px-30 sm:px-20">
      <div class="-left-side">
        <a href="#!" class="header-logo" data-x="header-logo" data-x-toggle="is-logo-dark">
          <img src="public/admin/img/general/logo.png" alt="logo icon">
          <img src="public/admin/img/general/logo.png" alt="logo icon">
        </a>
      </div>

      <div class="row justify-between items-center pl-60 lg:pl-20">
        <div class="col-auto">
          <div class="d-flex items-center">
            <button data-x-click="dashboard">
              <i class="icon-menu-2 text-20"></i>
            </button>

            <div class="single-field relative d-flex items-center md:d-none ml-30">
              <input class="pl-50 border-light text-dark-1 h-50 rounded-8" type="email" placeholder="Search">
              <button class="absolute d-flex items-center h-full">
                <i class="icon-search text-20 px-15 text-dark-1"></i>
              </button>
            </div>
          </div>
        </div>

        <div class="col-auto">
          <div class="d-flex items-center">
            <div class="row items-center x-gap-5 y-gap-20 pl-20 lg:d-none">
              <div class="col-auto">
                <button class="button -blue-1-05 size-50 rounded-22 flex-center">
                  <i class="icon-email-2 text-20"></i>
                </button>
              </div>

              <div class="col-auto">
                <button class="button -blue-1-05 size-50 rounded-22 flex-center">
                  <i class="icon-notification text-20"></i>
                </button>
              </div>
            </div>

            <div class="pl-15">
              <img src="public/admin/img/avatars/3.png" alt="image" class="size-50 rounded-22 object-cover">
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>


  <div class="dashboard" data-x="dashboard" data-x-toggle="-is-sidebar-open">
    <div class="dashboard__sidebar bg-white scroll-bar-1">
      <div class="sidebar -dashboard">
        <div class="sidebar__item">
          <div class="sidebar__button -is-active">
            <a href="#" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-border-all mr-15"></i>
              Dashboard
            </a>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-building mr-15"></i>
                    Manage Flight
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="{{url('/Flight-Details')}}" class="text-15">All Flight</a>
                  </li>

                  <li>
                    <a href="{{url('/Flight-Log')}}" class="text-15">Flight Log</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-building mr-15"></i>
                    Manage Hotel
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="{{url('/Hotel-Details')}}" class="text-15">All hotels</a>
                  </li>

                  <li>
                    <a href="#" class="text-15">Add hotel</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-flag  mr-15"></i>
                    Manage tour
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="{{url('/tour')}}" class="text-15">All tour</a>
                  </li>
                  <li>
                    <a href="{{url('/add-tour')}}" class="text-15">Add tour</a>
                  </li>
                  <li>
                    <a href="{{url('/add-tour-package')}}" class="text-15">Add tour Package</a>
                  </li>
                   <li>
                    <a href="{{url('/all-tour-package')}}" class="text-15">All tour Package</a>
                  </li>
                   <li>
                    <a href="{{url('/tour-booking-details')}}" class="text-15">Tour Booking Details</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
                <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-calendar-check mr-15"></i>
                    Visa
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="{{url('/Visa')}}" class="text-15">All Visa</a>
                  </li>

                  <li>
                    <a href="{{url('/Add-visa')}}" class="text-15">Add Visa</a>
                  </li>
                  <li>
                    <a href="{{url('/Visa-Package')}}" class="text-15">All Visa Package</a>
                  </li>
                  <li>
                    <a href="{{url('/Add-Visa-Package')}}" class="text-15">Add Visa Package</a>
                  </li>
                  <li>
                    <a href="{{url('/Visa-booking-details')}}" class="text-15">Visa Booking</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-star mr-15"></i>
                    Mark-Up
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="{{url('/all-markup')}}" class="text-15">All Mark-up</a>
                  </li>

                  <li>
                    <a href="{{url('/add-markup')}}" class="text-15">Add Mark-up</a>
                  </li>
                  <li>
                    <a href="{{url('/all-markup-apply')}}" class="text-15">All Apply Mark-up</a>
                  </li>

                  <li>
                    <a href="{{url('/apply-markup')}}" class="text-15">Apply Mark-up</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-bus-alt mr-15"></i>
                    Manage bus
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="#" class="text-15">All bus</a>
                  </li>

                  <li>
                    <a href="#" class="text-15">Add bus</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-calendar-check mr-15"></i>
                    Commission
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="{{url('/Commision-Details')}}" class="text-15">All Commission</a>
                  </li>

                  <li>
                    <a href="{{url('/Add-Commision')}}" class="text-15">Add Commission</a>
                  </li>
                  <li>
                    <a href="{{url('/Commision-Apply')}}" class="text-15">Apply Commision</a>
                  </li>
                  <li>
                    <a href="{{url('/All-Commision-Apply')}}" class="text-15">All Commision Apply </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-book t mr-15"></i>
                    News
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="#" class="text-15">All news</a>
                  </li>

                  <li>
                    <a href="#" class="text-15">Add news</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-map-marker-alt mr-15"></i>
                    Locations
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="#" class="text-15">All locations</a>
                  </li>

                  <li>
                    <a href="#" class="text-15">Add locations</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-calendar-check mr-15"></i>
                    Event
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="#" class="text-15">All events</a>
                  </li>

                  <li>
                    <a href="#" class="text-15">Add events</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-star mr-15"></i>
                    User plan
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="#" class="text-15">All plans</a>
                  </li>

                  <li>
                    <a href="#" class="text-15">Add plans</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-ticket-alt mr-15"></i>
                    Coupon
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="{{url('/Coupon-Details')}}" class="text-15">All Coupon</a>
                  </li>

                  <li>
                    <a href="{{url('/Add-Coupon')}}" class="text-15">Add Coupon</a>
                  </li>
                 
                </ul>
              </div>
            </div>
          </div>
        </div>
        
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-file-alt mr-15"></i>
                    Report
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="{{url('/Flight-report')}}" class="text-15">Flight</a>
                  </li>

                  <li>
                    <a href="{{url('/Hotel-report')}}" class="text-15">Hotels</a>
                  </li>
                 
                </ul>
              </div>
            </div>
          </div>
        </div>
        
        <div class="sidebar__item">
          <div class="sidebar__button">
            <a href="db-all-review.html" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-comments mr-15"></i>
             Review
            </a>
          </div>
        </div>
        <div class="sidebar__item">
          <div class="sidebar__button">
            <a href="#" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-folder mr-15"></i>
              Media
            </a>
          </div>
        </div>
        <div class="sidebar__item">
          <div class="sidebar__button">
            <a href="#" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="far fa-paper-plane mr-15"></i>
              All social links
            </a>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-wallet mr-15"></i>
                    Payment
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="{{url('/wallet')}}" class="text-15">Add Wallet</a>
                  </li>
                  <li>
                    <a href="{{url('/wallet-info')}}" class="text-15">Wallet information</a>
                  </li>
                  <li>
                    <a href="#" class="text-15">Payment information</a>
                  </li>
                        
                  <li>
                    <a href="#" class="text-15">All payment gateway</a>
                  </li>
                  <li>
                    <a href="#" class="text-15">Add payment method</a>
                  </li>
                  <!--<li>-->
                  <!--  <a href="#" class="text-15">Add currency</a>-->
                  <!--</li>-->
                  <li>
                    <a href="#" class="text-15">All withdrawal method</a>
                  </li>
                  <li>
                    <a href="#" class="text-15">Add withdrawal method</a>
                  </li>
                 
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-user-cog mr-15"></i>
                    User manage
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">
                  <li>
                    <a href="{{url('/User')}}" class="text-15">All users</a>
                  </li>
                  <li>
                    <a href="{{url('/Add-User')}}" class="text-15">Add user</a>
                  </li>
                  <li>
                    <a href="#" class="text-15">All role</a>
                  </li>
                  <li>
                    <a href="#" class="text-15">Add role</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar__item">
          <div class="sidebar__button ">
            <a href="#" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-sign-out-alt mr-15"></i>
              Logout
            </a>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-server mr-15"></i>
                    Setting
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">
                    <li>
                    <a href="{{url('/general-Setting')}}" class="text-15">General Setting</a>
                  </li>
                  <li>
                    <a href="{{url('/Setting')}}" class="text-15">Payment Setting</a>
                  </li>
                  <li>
                    <a href="{{url('/Api-Setting')}}" class="text-15">API Setting</a>
                  </li>
                   <li>
                    <a href="{{url('/flight-Setting')}}" class="text-15">Flight Setting</a>
                  </li>
                  <li>
                    <a href="{{url('/currency')}}" class="text-15">Currency Setting</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
