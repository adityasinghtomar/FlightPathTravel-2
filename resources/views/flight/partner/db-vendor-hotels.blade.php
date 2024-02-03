@include('flight.partner.db-header')
    <div class="dashboard__main">
      <div class="dashboard__content">
        <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
          <div class="col-auto">

            <h1 class="text-30 lh-14 fw-600">All Hotels</h1>
            <div class="text-15 text-light-1">Lorem ipsum dolor sit amet, consectetur.</div>

          </div>

          <div class="col-auto">

          </div>
        </div>


        <div class="py-30 px-30 rounded-4 bg-white custom_shadow">
          <div class="tabs -underline-2 js-tabs">
            <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">

              <div class="col-auto">
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">All Flight</button>
              </div>

            </div>

            <div class="tabs__content pt-30 js-tabs-content">

              <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="overflow-scroll scroll-bar-1">
                  <table class="table-4 -border-bottom col-12">
                    <thead class="bg-light-2">
                      <tr>
                        <th>

                          <div class="d-flex items-center">
                            <div class="form-checkbox ">
                              <input type="checkbox" name="name">
                              <div class="form-checkbox__mark">
                                <div class="form-checkbox__icon icon-check"></div>
                              </div>
                            </div>

                          </div>

                        </th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Booking ID</th>	
                        <th>Confimation No</th>
                        <th>Booking Status</th>
                        <th>Reviews</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if(isset($flight))    
                    @foreach($flight as $flights)    
                     <tr>
                        <td>
                          <div class="d-flex items-center">
                            <div class="form-checkbox ">
                              <input type="checkbox" name="name">
                              <div class="form-checkbox__mark">
                                <div class="form-checkbox__icon icon-check"></div>
                              </div>
                            </div>

                          </div>
                        </td>
                        <td><?php print_r($flights->name);?> <?php print_r($flights->lname);?></td>
                        <td><?php print_r($flights->email);?></td>
                        <td><?php print_r($flights->mobile);?></td>
                        <td> <?php print_r($flights->booking_id);?></td>
                        <td><?php print_r($flights->confimation_no);?></td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-yellow-4 text-yellow-3">Confirmed</span></td>
                        <td>
                          <div class="rounded-4 size-35 bg-blue-1 text-white flex-center text-12 fw-600">4.8</div>
                        </td>
                        <td>
                          <div class="row x-gap-10 y-gap-10 items-center">

                            <div class="col-auto">
                              <button class="flex-center bg-light-2 rounded-4 size-35">
                                <i class="icon-eye text-16 text-light-1"></i>
                              </button>
                            </div>

                            <div class="col-auto">
                              <button class="flex-center bg-light-2 rounded-4 size-35">
                                <i class="icon-edit text-16 text-light-1"></i>
                              </button>
                            </div>

                            <div class="col-auto">
                              <button class="flex-center bg-light-2 rounded-4 size-35">
                                <i class="icon-trash-2 text-16 text-light-1"></i>
                              </button>
                            </div>

                          </div>
                        </td>
                      </tr>
                    @endforeach
                    @endif
                    </tbody>
                  </table>
                </div>
              </div>

            </div>
          </div>

          <div class="pt-30">
            <div class="row justify-between">
              <div class="col-auto">
                <button class="button -blue-1 size-40 rounded-full border-light">
                  <i class="icon-chevron-left text-12"></i>
                </button>
              </div>

              <div class="col-auto">
                <div class="row x-gap-20 y-gap-20 items-center">

                  <div class="col-auto">

                    <div class="size-40 flex-center rounded-full">1</div>

                  </div>

                  <div class="col-auto">

                    <div class="size-40 flex-center rounded-full bg-dark-1 text-white">2</div>

                  </div>

                  <div class="col-auto">

                    <div class="size-40 flex-center rounded-full">3</div>

                  </div>

                  <div class="col-auto">

                    <div class="size-40 flex-center rounded-full bg-light-2">4</div>

                  </div>

                  <div class="col-auto">

                    <div class="size-40 flex-center rounded-full">5</div>

                  </div>

                  <div class="col-auto">

                    <div class="size-40 flex-center rounded-full">...</div>

                  </div>

                  <div class="col-auto">

                    <div class="size-40 flex-center rounded-full">20</div>

                  </div>

                </div>
              </div>

              <div class="col-auto">
                <button class="button -blue-1 size-40 rounded-full border-light">
                  <i class="icon-chevron-right text-12"></i>
                </button>
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
  <!-- JavaScript -->
  <script src="public/partner/js/chart.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
  <script src="../../../unpkg.com/%40googlemaps/markerclusterer%402.0.13/dist/index.min.js"></script>

  <script src="public/partner/js/vendors.js"></script>
  <script src="public/partner/js/main.js"></script>
</body>

</html>