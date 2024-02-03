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
  <link rel="stylesheet" href="public/partner/css/vendors.css">
  <link rel="stylesheet" href="public/partner/css/main.css">

  <title>Flight Path Travel</title>
</head>

<body data-barba="wrapper">

  <div class="preloader js-preloader">

  </div>


  <div class="header-margin"></div>
  <header data-add-bg="" class="header -dashboard bg-white js-header" data-x="header" data-x-toggle="is-menu-opened">
    <div data-anim="fade" class="header__container px-30 sm:px-20">
      <div class="-left-side">
        <a href="#!" class="header-logo" data-x="header-logo" data-x-toggle="is-logo-dark">
          <img src="public/partner/img/general/logo.png" alt="logo icon">
          <img src="public/partner/img/general/logo.png" alt="logo icon">
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
              <img src="public/partner/img/avatars/3.png" alt="image" class="size-50 rounded-22 object-cover">
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
        <div class="sidebar__item">
          <div class="sidebar__button">
            <a href="#" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-cart-plus mr-15"></i>
              Booking history
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
                    Manage Hotel
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="{{url('/Agent-Hotel-Details')}}" class="text-15">All hotels</a>
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
                    <i class="fas fa-building mr-15"></i>
                    Manage Flight
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>
 
              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="{{url('/Agent-Flight-Details')}}" class="text-15">All Flight</a>
                  </li>

                  <li>
                    <a href="#" class="text-15">Add Flight</a>
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
                    <a href="#" class="text-15">All tour</a>
                  </li>

                  <li>
                    <a href="#" class="text-15">Add tour</a>
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

        <div class="sidebar__item">
          <div class="sidebar__button">
            <a href="#" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-tags mr-15"></i>
              Wishlist
            </a>
          </div>
        </div>

        <div class="sidebar__item">
          <div class="sidebar__button ">
            <a href="#" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-user-circle  mr-15"></i>
              My profile
            </a>
          </div>
        </div>
        <div class="sidebar__item">
          <div class="sidebar__button ">
            <a href="#" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-wallet mr-15"></i>
              Notification
            </a>
          </div>
        </div>
        <div class="sidebar__item">
          <div class="sidebar__button ">
            <a href="#" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-cog mr-15"></i>
              Settings
            </a>
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
      </div>
    </div>

    <div class="dashboard__main">
      <div class="dashboard__content">
        <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
          <div class="col-auto">
            <h1 class="text-30 lh-14 fw-500">Dashboard</h1>
            <div class="text-15 text-light-1">Lorem ipsum dolor sit amet, consectetur.</div>
          </div>

          <div class="col-auto">

          </div>
        </div>

        <div class="row y-gap-30">

          <div class="col-xl-3 col-md-6 col-sm-6 col-12">
            <div class="py-15 px-15 custom_border_left_blue custom_rounded bg-white custom_shadow">
              <div class="row y-gap-20 justify-between items-center">
                <div class="col-md-6">
                  <div class="fw-500 lh-14">Total earnings</div>
                  <div class="text-30 lh-16 fw-600 mt-5 text_blue">$12,800</div>
                  <div class="text-15 lh-14 text-light-1 mt-5 text_green">(+2.35%) <span><i class="fas fa-arrow-up"></i></span></div>
                </div>

                <div class="col-md-6">
                  <img src="public/partner/img/dashboard/icons/arrow-1.png" alt="icon">
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 col-sm-6 col-12">
            <div class="py-15 px-30 custom_border_left_oreng custom_rounded bg-white custom_shadow">
              <div class="row y-gap-20 justify-between items-center">
                <div class="col-md-6">
                  <div class="fw-500 lh-14">Total expense</div>
                  <div class="text-30 lh-16 fw-600 mt-5 text_oreng">$14,200</div>
                  <div class="text-15 lh-14 text-light-1 mt-5 text_green">(+2.35%) <span><i class="fas fa-arrow-up"></i></span></div>
                </div>

                <div class="col-md-6">
                  <img src="public/partner/img/dashboard/icons/arrow-2.png" alt="icon">
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 col-sm-6 col-12">
            <div class="py-15 px-30 custom_border_left_sky custom_rounded bg-white custom_shadow">
              <div class="row y-gap-20 justify-between items-center">
                <div class="col-md-6">
                  <div class="fw-500 lh-14">Total bookings</div>
                  <div class="text-30 lh-16 fw-600 mt-5 text_sky">$8,100</div>
                  <div class="text-15 lh-14 text-light-1 mt-5 text_red">(+2.35%) <span><i class="fas fa-arrow-up"></i></span></div>
                </div>

                <div class="col-md-6">
                  <img src="public/partner/img/dashboard/icons/arrow-3.png" alt="icon">
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 col-sm-6 col-12">
            <div class="py-15 px-30 custom_border_left_green custom_rounded bg-white custom_shadow">
              <div class="row y-gap-20 justify-between items-center">
                <div class="col-md-6">
                  <div class="fw-500 lh-14">Total services</div>
                  <div class="text-30 lh-16 fw-600 mt-5 text_green">22,786</div>
                  <div class="text-15 lh-14 text-light-1 mt-5 text_green">(+2.35%) <span><i class="fas fa-arrow-up"></i></span></div>
                </div>

                <div class="col-md-6">
                  <img src="public/partner/img/dashboard/icons/arrow-4.png" alt="icon">
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="row y-gap-30 pt-20">
          <div class="col-xl-6 col-md-6">
            <div class="py-30 px-30 custom_rounded bg-white custom_shadow">
              <div class="d-flex justify-between items-center heading_border">
                <h2 class="text-18 lh-1 fw-500">
                  Expense overview
                </h2>
              </div>

              <div class="pt-30">
                <canvas id="lineChart"></canvas>
              </div>
            </div>
          </div>

          <div class="col-xl-6 col-md-6">
            <div class="py-30 px-30 rounded-4 bg-white custom_shadow">
              <div class="d-flex justify-between items-center heading_border">
                <h2 class="text-18 lh-1 fw-500">
                  My bookings
                </h2>
              </div>

              <div class="overflow-scroll scroll-bar-1 pt-30">
                <table class="table-2 col-12">
                  <thead class="">
                    <tr>
                      <th>Sl no.</th>
                      <th>Booking ID</th>
                      <th>Booking type</th>
                      <th>Booking amount</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>01.</td>
                      <td>#JK589V80</td>
                      <td>Hotel</td>
                      <td>$754.00</td>
                      <td>
                        <div class="text-center col-12 text-14 fw-500 text-yellow-3">Completed</div>
                      </td>
                      <td><i class="fas fa-eye"></i></td>
                    </tr>
                    <tr>
                    <tr>
                      <td>02.</td>
                      <td>#JK589V80</td>
                      <td> Flight</td>
                      <td>$754.00</td>
                      <td>
                        <div class="text-center col-12 text-14 fw-500 text-yellow-3">Completed</div>
                      </td>
                      <td><i class="fas fa-eye"></i></td>
                    </tr>
                    <tr>
                      <td>03.</td>
                      <td>#JK589V80</td>
                      <td>Tour</td>
                      <td>$754.00</td>
                      <td>
                        <div class="text-center col-12 text-14 fw-500 text-yellow-3">Completed</div>
                      </td>
                      <td><i class="fas fa-eye"></i></td>
                    </tr>
                    <tr>
                      <td>04.</td>
                      <td>#JK589V80</td>
                      <td>Flight</td>
                      <td>$754.00</td>
                      <td>
                        <div class="text-center col-12 text-14 fw-500 text-yellow-3">Completed</div>
                      </td>
                      <td><i class="fas fa-eye"></i></td>
                    </tr>
                    <tr>
                      <td>05.</td>
                      <td>#JK589V80</td>
                      <td>Hotel</td>
                      <td>$754.00</td>
                      <td>
                        <div class="text-center col-12 text-14 fw-500 text-red-3">Canceled</div>
                      </td>
                      <td><i class="fas fa-eye"></i></td>
                    </tr>
                    <tr>
                      <td>06.</td>
                      <td>#JK589V80</td>
                      <td>Tour</td>
                      <td>$754.00</td>
                      <td>
                        <div class="text-center col-12 text-14 fw-500 text-yellow-3">Completed</div>
                      </td>
                      <td><i class="fas fa-eye"></i></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <footer class="footer -dashboard mt-60">
          <div class="footer__row row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="row y-gap-20 items-center">
                <div class="col-auto">
                  <div class="text-14 lh-14 mr-30">Copyright © 2022 All Rights Reserved</div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <div class="d-flex x-gap-5 y-gap-5 items-center">
                <img src="./img/avatars/card.png" alt="img">
             </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>

  <!-- JavaScript -->
  <script src="public/partner/js/chart.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
  <script src="../../../unpkg.com/%40googlemaps/markerclusterer%402.0.13/dist/index.min.js"></script>

  <script src="public/partner/js/vendors.js"></script>
  <script src="public/partner/js/main.js"></script>
</body>

</html>