<section id="theme_search_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="theme_search_form_area">
                        <div class="theme_search_form_tabbtn">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="flights-tab" data-bs-toggle="tab"
                                        data-bs-target="#flights" type="button" role="tab" aria-controls="flights"
                                        aria-selected="true"><i class="fas fa-plane-departure"></i>Flights</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="hotels-tab" data-bs-toggle="tab"
                                        data-bs-target="#hotels" type="button" role="tab" aria-controls="hotels"
                                        aria-selected="false"><i class="fas fa-hotel"></i>Hotels</button>
                                </li>
								<li class="nav-item" role="presentation">
								    <a href="{{url('/tour-list')}}" class="nav-link"><i
                                            class="fas fa-globe"></i>Tours</a>
                                    <!--<button class="nav-link" id="tours-tab1" data-bs-toggle="tab" data-bs-target="#tours"-->
                                    <!--    type="button1" role="tab" aria-controls="tours" aria-selected="false"><i-->
                                    <!--        class="fas fa-globe"></i>Tours</button>-->
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="{{url('/Visa-list')}}" class="nav-link active"><i class="fas fa-passport"></i> Visa </a>
                                    <!--<button class="nav-link" id="visa-tab" data-bs-toggle="tab"-->
                                    <!--    data-bs-target="#visa-application" type="button" role="tab" aria-controls="visa"-->
                                    <!--    aria-selected="false"><i class="fas fa-passport"></i> Visa</button>-->
                                </li>
                                <!--<li class="nav-item" role="presentation">
                                    <button class="nav-link" id="apartments-tab" data-bs-toggle="tab"
                                        data-bs-target="#apartments" type="button" role="tab" aria-controls="apartments"
                                        aria-selected="false"><i class="fas fa-building"></i> Apartments</button>
                                </li>-->
                                <!--<li class="nav-item" role="presentation">
                                    <button class="nav-link" id="bus-tab" data-bs-toggle="tab"
                                        data-bs-target="#bus" type="button" role="tab" aria-controls="bus"
                                        aria-selected="false"><i class="fas fa-bus"></i> Bus/Cab</button>
                                </li>-->
                                <!--<li class="nav-item" role="presentation">
                                    <button class="nav-link" id="cruise-tab" data-bs-toggle="tab"
                                        data-bs-target="#cruise" type="button" role="tab" aria-controls="cruise"
                                        aria-selected="false"><i class="fas fa-ship"></i> Cruise</button>
                                </li>-->

                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="flights" role="tabpanel"
                                aria-labelledby="flights-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="flight_categories_search">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="oneway-tab" data-bs-toggle="tab"
                                                        data-bs-target="#oneway_flight" type="button" role="tab"
                                                        aria-controls="oneway_flight" aria-selected="true">One
                                                        Way</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="roundtrip-tab" data-bs-toggle="tab"
                                                        data-bs-target="#roundtrip" type="button" role="tab"
                                                        aria-controls="roundtrip"
                                                        aria-selected="false">Roundtrip</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="multi_city-tab" data-bs-toggle="tab"
                                                        data-bs-target="#multi_city" type="button" role="tab"
                                                        aria-controls="multi_city" aria-selected="false">Multi
                                                        city</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                               <div class="tab-content" id="myTabContent1">
                                    <div class="tab-pane fade show active" id="oneway_flight" role="tabpanel"
                                        aria-labelledby="oneway-tab">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="oneway_search_form">
                                                    <form action="{{url('/flight_search')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                <div class="flight_Search_boxed">
                                                                    <p>From</p>
                                                                    <?php $filterResult =\App\Airport_Model::get(); ?>
                                                                      <input list="ShowDataList1" placeholder="From" id="from" class="selectpicker form-control from" name="from" style="  width:225px;" required>
                                                                    <datalist id="ShowDataList1">
                                                                        <!--@foreach($filterResult as $state_)-->
                                                                        <!--<option value="{{$state_->AIRPORTCODE}}">{{__($state_->AIRPORTNAME)}} - {{__($state_->CITYNAME)}}  ( {{__($state_->COUNTRYCODE)}} )</option>-->
                                                                        <!--@endforeach-->
                                                                    </datalist>
                                                                    <span id="state-dropdown"></span>
                                                                    <div class="plan_icon_posation">
                                                                        <i class="fas fa-plane-departure"></i>
                                                                         
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                <div class="flight_Search_boxed">
                                                                    <p>To</p>
                                                                     <?php $filterResult =\App\Airport_Model::orderBy('id', 'DESC')->get(); ?>
                                                                      <input list="ShowDataList2" placeholder="To" class="selectpicker form-control to" name="to" id="to" style="  width:225px;" required>
                                                                    <datalist id="ShowDataList2">
                                                                        <!--@foreach($filterResult as $state_)-->
                                                                        <!--<option value="{{$state_->AIRPORTCODE}}">{{__($state_->AIRPORTNAME)}} - {{__($state_->CITYNAME)}}  ( {{__($state_->COUNTRYCODE)}} )</option>-->
                                                                        <!--@endforeach-->
                                                                    </datalist>

                                                                    <span id="state-dropdown1"></span>
                                                                    <div class="plan_icon_posation">
                                                                        <i class="fas fa-plane-arrival"></i>
                                                                    </div>
                                                                    <div class="range_plan">
                                                                        <i class="fas fa-exchange-alt"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3  col-md-6 col-sm-12 col-12">
                                                                <div class="form_search_date">
                                                                    <div class="flight_Search_boxed date_flex_area">
                                                                        <div class="Journey_date">
                                                                            <p>Journey date</p>
                                                                            <input type="date" id="demo" name="journey_date" class="txtDate" required>
                                                                           
                                                                            <span></span>
                                                                            <!--<p id="myId"></p>-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                                <div
                                                                    class="flight_Search_boxed dropdown_passenger_area">
                                                                    <p>Passenger, Class </p>
                                                                    <div class="dropdown">
                                                                        <button class="dropdown-toggle final-count"
                                                                            data-toggle="dropdown" type="button"
                                                                            id="dropdownMenuButton1"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            1 Passenger
                                                                        </button>
                                                                        <div class="dropdown-menu dropdown_passenger_info"
                                                                            aria-labelledby="dropdownMenuButton1">
                                                                            <div class="traveller-calulate-persons">
                                                                                <div class="passengers">
                                                                                    <h6>Passengers</h6>
                                                                                    <div class="passengers-types">
                                                                                        <div class="passengers-type">
                                                                                            <div class="text"><span
                                                                                                    class="count pcount">1</span>
                                                                                                <div class="type-label">
                                                                                                    <p>Adult</p>
                                                                                                    <span>12+
                                                                                                        yrs</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="button-set">
                                                                                                <button type="button"
                                                                                                    class="btn-add">
                                                                                                    <i
                                                                                                        class="fas fa-plus"></i>
                                                                                                </button>
                                                                                                <button type="button"
                                                                                                    class="btn-subtract">
                                                                                                    <i
                                                                                                        class="fas fa-minus"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="passengers-type">
                                                                                            <div class="text"><span
                                                                                                    class="count ccount">0</span>
                                                                                                <div class="type-label">
                                                                                                    <p
                                                                                                        class="fz14 mb-xs-0">
                                                                                                        Children
                                                                                                    </p><span>2
                                                                                                        - Less than 12
                                                                                                        yrs</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="button-set">
                                                                                                <button type="button"
                                                                                                    class="btn-add-c">
                                                                                                    <i
                                                                                                        class="fas fa-plus"></i>
                                                                                                </button>
                                                                                                <button type="button"
                                                                                                    class="btn-subtract-c">
                                                                                                    <i
                                                                                                        class="fas fa-minus"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="passengers-type">
                                                                                            <div class="text"><span
                                                                                                    class="count incount">0</span>
                                                                                                <div class="type-label">
                                                                                                    <p
                                                                                                        class="fz14 mb-xs-0">
                                                                                                        Infant
                                                                                                    </p><span>Less
                                                                                                        than 2
                                                                                                        yrs</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="button-set">
                                                                                                <button type="button"
                                                                                                    class="btn-add-in">
                                                                                                    <i
                                                                                                        class="fas fa-plus"></i>
                                                                                                </button>
                                                                                                <button type="button"
                                                                                                    class="btn-subtract-in">
                                                                                                    <i
                                                                                                        class="fas fa-minus"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cabin-selection">
                                                                                    <h6>Cabin Class</h6>
                                                                                    <div class="cabin-list">
                                                                                        <select name="cabin_class" style="width:100%;">
                                                                                           <option value="2">Economy</option>
                                                                                           <option value="1">All</option>
                                                                                           <option value="3">Premium Economy</option>
                                                                                           <option value="4">Business</option>
                                                                                           <option value="5">PremiumBusiness</option>
                                                                                           <option value="6">First Class</option>
                                                                                           
                                                                                           
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--<span>Business</span>-->
                                                                </div>
                                                            </div> 
                                                            <input type="hidden" name="adult" id="myInput" value="1">
                                                            <input type="hidden" name="children" id="myInput1">
                                                            <input type="hidden" name="infant" id="myInput2">
                                                            <input type="hidden" name="form_status" value="one">
                                                                                                   
                                                            <div class="top_form_search_button">
                                                                <button class="btn btn_theme btn_md">Search</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="tab-pane fade" id="roundtrip" role="tabpanel"
                                        aria-labelledby="roundtrip-tab">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="oneway_search_form">
                                                    <form action="{{url('/return-flight-search')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                <div class="flight_Search_boxed">
                                                                    <p>From</p>
                                                                    <?php $filterResult =\App\Airport_Model::get(); ?>
                                                                      <input list="ShowDataList1" placeholder="From" class="selectpicker form-control from" name="from" id="from12" style="  width:225px;" required>
                                                                    <datalist id="ShowDataList1">
                                                                        <!--@foreach($filterResult as $state_)-->
                                                                        <!--<option value="{{$state_->AIRPORTCODE}}">{{__($state_->AIRPORTNAME)}} - {{__($state_->CITYNAME)}}  ( {{__($state_->COUNTRYCODE)}} )</option>-->
                                                                        <!--@endforeach-->
                                                                    </datalist>
                                                                   <span id="state-dropdown12"></span> <!--<span>JFK - John F. Kennedy International...</span>-->
                                                                    <div class="plan_icon_posation">
                                                                        <i class="fas fa-plane-departure"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                <div class="flight_Search_boxed">
                                                                    <p>To</p>
                                                                     <?php $filterResult =\App\Airport_Model::get(); ?>
                                                                      <input list="ShowDataList2" placeholder="To" class="selectpicker form-control to" name="to" id="to12" style="  width:225px;" required>
                                                                    <datalist id="ShowDataList2">
                                                                        <!--@foreach($filterResult as $state_)-->
                                                                        <!--<option value="{{$state_->AIRPORTCODE}}">{{__($state_->AIRPORTNAME)}} - {{__($state_->CITYNAME)}}  ( {{__($state_->COUNTRYCODE)}} )</option>-->
                                                                        <!--@endforeach-->
                                                                    </datalist>

                                                                   <span id="state-dropdown112"></span> <!--<span>LCY, London city airport </span>-->
                                                                    <div class="plan_icon_posation">
                                                                        <i class="fas fa-plane-arrival"></i>
                                                                    </div>
                                                                    <div class="range_plan">
                                                                        <i class="fas fa-exchange-alt"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                        <div class="form_search_date">
                                                            <div class="flight_Search_boxed date_flex_area">
                                                                <div class="Journey_date">
                                                                            <p>Journey date</p>
                                                                            <input type="date" id="demo" name="journey_date" class="txtDate" value="" required>
                                                                            <span></span>
                                                                        </div>
                                                                        <div class="Journey_date">
                                                                            <p>Return date</p>
                                                                            <input type="date" id="demo" name="return_date" class="txtDate" value="" required>
                                                                            <span></span>
                                                                        </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                            <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                                <div
                                                                    class="flight_Search_boxed dropdown_passenger_area">
                                                                    <p>Passenger, Class </p>
                                                                    <div class="dropdown">
                                                                        <button class="dropdown-toggle final-count"
                                                                            data-toggle="dropdown" type="button"
                                                                            id="dropdownMenuButton1"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            1 Passenger
                                                                        </button>
                                                                        <div class="dropdown-menu dropdown_passenger_info"
                                                                            aria-labelledby="dropdownMenuButton1">
                                                                            <div class="traveller-calulate-persons">
                                                                                <div class="passengers">
                                                                                    <h6>Passengers</h6>
                                                                                    <div class="passengers-types">
                                                                                        <div class="passengers-type">
                                                                                            <div class="text"><span
                                                                                                    class="count pcount">1</span>
                                                                                                <div class="type-label">
                                                                                                    <p>Adult</p>
                                                                                                    <span>12+
                                                                                                        yrs</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="button-set">
                                                                                                <button type="button"
                                                                                                    class="btn-add">
                                                                                                    <i
                                                                                                        class="fas fa-plus"></i>
                                                                                                </button>
                                                                                                <button type="button"
                                                                                                    class="btn-subtract">
                                                                                                    <i
                                                                                                        class="fas fa-minus"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="passengers-type">
                                                                                            <div class="text"><span
                                                                                                    class="count ccount">0</span>
                                                                                                <div class="type-label">
                                                                                                    <p
                                                                                                        class="fz14 mb-xs-0">
                                                                                                        Children
                                                                                                    </p><span>2
                                                                                                        - Less than 12
                                                                                                        yrs</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="button-set">
                                                                                                <button type="button"
                                                                                                    class="btn-add-c">
                                                                                                    <i
                                                                                                        class="fas fa-plus"></i>
                                                                                                </button>
                                                                                                <button type="button"
                                                                                                    class="btn-subtract-c">
                                                                                                    <i
                                                                                                        class="fas fa-minus"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="passengers-type">
                                                                                            <div class="text"><span
                                                                                                    class="count incount">0</span>
                                                                                                <div class="type-label">
                                                                                                    <p
                                                                                                        class="fz14 mb-xs-0">
                                                                                                        Infant
                                                                                                    </p><span>Less
                                                                                                        than 2
                                                                                                        yrs</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="button-set">
                                                                                                <button type="button"
                                                                                                    class="btn-add-in">
                                                                                                    <i
                                                                                                        class="fas fa-plus"></i>
                                                                                                </button>
                                                                                                <button type="button"
                                                                                                    class="btn-subtract-in">
                                                                                                    <i
                                                                                                        class="fas fa-minus"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cabin-selection">
                                                                                    <h6>Cabin Class</h6>
                                                                                   <div class="cabin-list">
                                                                                        <select name="cabin_class" style="width:100%;">
                                                                                           <option value="2">Economy</option>
                                                                                           <option value="1">All</option>
                                                                                           <option value="3">Premium Economy</option>
                                                                                           <option value="4">Business</option>
                                                                                           <option value="5">PremiumBusiness</option>
                                                                                           <option value="6">First Class</option>
                                                                                           
                                                                                           
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <input type="hidden" name="adult" id="myInputA" value="1">
                                                            <input type="hidden" name="children" id="myInputB">
                                                            <input type="hidden" name="infant" id="myInputC">
                                                            <input type="hidden" name="form_status" value="return">
                                                            <div class="top_form_search_button">
                                                                <button class="btn btn_theme btn_md">Search</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="multi_city" role="tabpanel"
                                        aria-labelledby="multi_city-tab">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="oneway_search_form">
                                                    <form action="{{url('/multi-city-flight-search')}}" enctype="multipart/form-data" method="post">
                                                        <div class="multi_city_form_wrapper">
                                                            <div class="multi_city_form">
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                        <div class="flight_Search_boxed">
                                                                          <p>From</p>
                                                                    <?php $filterResult =\App\Airport_Model::get(); ?>
                                                                      <input list="ShowDataList1" placeholder="From" class="selectpicker form-control from" name="from" id="from_1" style="  width:225px;" required>
                                                                    <datalist id="ShowDataList1">
                                                                        <!--@foreach($filterResult as $state_)-->
                                                                        <!--<option value="{{$state_->AIRPORTCODE}}">{{__($state_->AIRPORTNAME)}} - {{__($state_->CITYNAME)}}  ( {{__($state_->COUNTRYCODE)}} )</option>-->
                                                                        <!--@endforeach-->
                                                                    </datalist>
                                                                    <span id="state-dropdown_1"></span><!--<span>JFK - John F. Kennedy International...</span>-->
                                                                    <div class="plan_icon_posation">
                                                                        <i class="fas fa-plane-departure"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                <div class="flight_Search_boxed">
                                                                    <p>To</p>
                                                                     <?php $filterResult =\App\Airport_Model::get(); ?>
                                                                      <input list="ShowDataList2" placeholder="To" class="selectpicker form-control to" name="to" id="to_2" style="  width:225px;" required>
                                                                    <datalist id="ShowDataList2">
                                                                        <!--@foreach($filterResult as $state_)-->
                                                                        <!--<option value="{{$state_->AIRPORTCODE}}">{{__($state_->AIRPORTNAME)}} - {{__($state_->CITYNAME)}}  ( {{__($state_->COUNTRYCODE)}} )</option>-->
                                                                        <!--@endforeach-->
                                                                    </datalist>

                                                                    <span id="state-dropdown_2"></span><!--<span>LCY, London city airport </span>-->
                                                                    <div class="plan_icon_posation">
                                                                        <i class="fas fa-plane-arrival"></i>
                                                                    </div>
                                                                    <div class="range_plan">
                                                                        <i class="fas fa-exchange-alt"></i>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                                        <div class="form_search_date">
                                                                            <div
                                                                                class="flight_Search_boxed date_flex_area">
                                                                                <div class="Journey_date">
                                                                                    <p>Journey date</p>
                                                                                    <input type="date" id="demo" name="journey_date"
                                                                                        value="" class="txtDate" required>
                                                                                    <span></span>
                                                                                </div>
                                                                                <!--<div class="Journey_date">-->
                                                                                <!--    <p>Return date</p>-->
                                                                                <!--    <input type="date" id="demo" name="return_date"-->
                                                                                <!--        value="" required>-->
                                                                                <!--    <span></span>-->
                                                                                <!--</div>-->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                                <div
                                                                    class="flight_Search_boxed dropdown_passenger_area">
                                                                    <p>Passenger, Class </p>
                                                                    <div class="dropdown">
                                                                        <button class="dropdown-toggle final-count"
                                                                            data-toggle="dropdown" type="button"
                                                                            id="dropdownMenuButton1"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            1 Passenger
                                                                        </button>
                                                                        <div class="dropdown-menu dropdown_passenger_info"
                                                                            aria-labelledby="dropdownMenuButton1">
                                                                            <div class="traveller-calulate-persons">
                                                                                <div class="passengers">
                                                                                    <h6>Passengers</h6>
                                                                                    <div class="passengers-types">
                                                                                        <div class="passengers-type">
                                                                                            <div class="text"><span
                                                                                                    class="count pcount">1</span>
                                                                                                <div class="type-label">
                                                                                                    <p>Adult</p>
                                                                                                    <span>12+
                                                                                                        yrs</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="button-set">
                                                                                                <button type="button"
                                                                                                    class="btn-add">
                                                                                                    <i
                                                                                                        class="fas fa-plus"></i>
                                                                                                </button>
                                                                                                <button type="button"
                                                                                                    class="btn-subtract">
                                                                                                    <i
                                                                                                        class="fas fa-minus"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="passengers-type">
                                                                                            <div class="text"><span
                                                                                                    class="count ccount">0</span>
                                                                                                <div class="type-label">
                                                                                                    <p
                                                                                                        class="fz14 mb-xs-0">
                                                                                                        Children
                                                                                                    </p><span>2
                                                                                                        - Less than 12
                                                                                                        yrs</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="button-set">
                                                                                                <button type="button"
                                                                                                    class="btn-add-c">
                                                                                                    <i
                                                                                                        class="fas fa-plus"></i>
                                                                                                </button>
                                                                                                <button type="button"
                                                                                                    class="btn-subtract-c">
                                                                                                    <i
                                                                                                        class="fas fa-minus"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="passengers-type">
                                                                                            <div class="text"><span
                                                                                                    class="count incount">0</span>
                                                                                                <div class="type-label">
                                                                                                    <p
                                                                                                        class="fz14 mb-xs-0">
                                                                                                        Infant
                                                                                                    </p><span>Less
                                                                                                        than 2
                                                                                                        yrs</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="button-set">
                                                                                                <button type="button"
                                                                                                    class="btn-add-in">
                                                                                                    <i
                                                                                                        class="fas fa-plus"></i>
                                                                                                </button>
                                                                                                <button type="button"
                                                                                                    class="btn-subtract-in">
                                                                                                    <i
                                                                                                        class="fas fa-minus"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cabin-selection">
                                                                                    <h6>Cabin Class</h6>
                                                                                    <div class="cabin-list">
                                                                                        <button type="button"
                                                                                            class="label-select-btn">
                                                                                            <span
                                                                                                class="muiButton-label">Economy
                                                                                            </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="label-select-btn active">
                                                                                            <span
                                                                                                class="muiButton-label">
                                                                                                Business
                                                                                            </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="label-select-btn">
                                                                                            <span
                                                                                                class="MuiButton-label">First
                                                                                                Class </span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <span>Business</span>
                                                                </div>
                                                            </div> 
                                                            <input type="hidden" name="adult" id="myInputAA" value="1">
                                                            <input type="hidden" name="children" id="myInputBB">
                                                            <input type="hidden" name="infant" id="myInputCC">
                                                            <input type="hidden" name="form_status" value="multi">
                                                                </div>
                                                            </div>
                                                            <div class="multi_city_form">
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                        <div class="flight_Search_boxed">
                                                                            <p>From</p>
                                                                    <?php $filterResult =\App\Airport_Model::get(); ?>
                                                                      <input list="ShowDataList1" placeholder="From" class="selectpicker form-control from" name="from1" id="from_3" style="  width:225px;" required>
                                                                    <datalist id="ShowDataList1">
                                                                        <!--@foreach($filterResult as $state_)-->
                                                                        <!--<option value="{{$state_->AIRPORTCODE}}">{{__($state_->AIRPORTNAME)}} - {{__($state_->CITYNAME)}}  ( {{__($state_->COUNTRYCODE)}} )</option>-->
                                                                        <!--@endforeach-->
                                                                    </datalist>
                                                                    <span id="state-dropdown_3"></span><!--<span>JFK - John F. Kennedy International...</span>-->
                                                                    <div class="plan_icon_posation">
                                                                        <i class="fas fa-plane-departure"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                <div class="flight_Search_boxed">
                                                                    <p>To</p>
                                                                     <?php $filterResult =\App\Airport_Model::get(); ?>
                                                                      <input list="ShowDataList2" placeholder="To" class="selectpicker form-control to" name="to1" id="to_4" style="  width:225px;" required>
                                                                    <datalist id="ShowDataList2">
                                                                        <!--@foreach($filterResult as $state_)-->
                                                                        <!--<option value="{{$state_->AIRPORTCODE}}">{{__($state_->AIRPORTNAME)}} - {{__($state_->CITYNAME)}}  ( {{__($state_->COUNTRYCODE)}} )</option>-->
                                                                        <!--@endforeach-->
                                                                    </datalist>

                                                                   <span id="state-dropdown_4"></span> <!--<span>LCY, London city airport </span>-->
                                                                    <div class="plan_icon_posation">
                                                                        <i class="fas fa-plane-arrival"></i>
                                                                    </div>
                                                                    <div class="range_plan">
                                                                        <i class="fas fa-exchange-alt"></i>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                                        <div class="form_search_date">
                                                                            <div
                                                                                class="flight_Search_boxed date_flex_area">
                                                                                <div class="Journey_date">
                                                                                    <p>Journey date</p>
                                                                                    <input type="date" id="demo" name="journey_date1"
                                                                                        value="" class="txtDate" required>
                                                                                    <span></span>
                                                                                </div>
                                                                                <!--<div class="Journey_date">-->
                                                                                <!--    <p>Return date</p>-->
                                                                                <!--    <input type="date" id="demo" name="return_date1"-->
                                                                                <!--        value="" required>-->
                                                                                <!--    <span></span>-->
                                                                                <!--</div>-->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                                <div
                                                                    class="flight_Search_boxed dropdown_passenger_area">
                                                                    <p>Passenger, Class </p>
                                                                    <div class="dropdown">
                                                                        <button class="dropdown-toggle final-count"
                                                                            data-toggle="dropdown" type="button"
                                                                            id="dropdownMenuButton1"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            1 Passenger
                                                                        </button>
                                                                        <div class="dropdown-menu dropdown_passenger_info"
                                                                            aria-labelledby="dropdownMenuButton1">
                                                                            <div class="traveller-calulate-persons">
                                                                                <div class="passengers">
                                                                                    <h6>Passengers</h6>
                                                                                    <div class="passengers-types">
                                                                                        <div class="passengers-type">
                                                                                            <div class="text"><span
                                                                                                    class="count pcount">1</span>
                                                                                                <div class="type-label">
                                                                                                    <p>Adult</p>
                                                                                                    <span>12+
                                                                                                        yrs</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="button-set">
                                                                                                <button type="button"
                                                                                                    class="btn-add">
                                                                                                    <i
                                                                                                        class="fas fa-plus"></i>
                                                                                                </button>
                                                                                                <button type="button"
                                                                                                    class="btn-subtract">
                                                                                                    <i
                                                                                                        class="fas fa-minus"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="passengers-type">
                                                                                            <div class="text"><span
                                                                                                    class="count ccount">0</span>
                                                                                                <div class="type-label">
                                                                                                    <p
                                                                                                        class="fz14 mb-xs-0">
                                                                                                        Children
                                                                                                    </p><span>2
                                                                                                        - Less than 12
                                                                                                        yrs</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="button-set">
                                                                                                <button type="button"
                                                                                                    class="btn-add-c">
                                                                                                    <i
                                                                                                        class="fas fa-plus"></i>
                                                                                                </button>
                                                                                                <button type="button"
                                                                                                    class="btn-subtract-c">
                                                                                                    <i
                                                                                                        class="fas fa-minus"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="passengers-type">
                                                                                            <div class="text"><span
                                                                                                    class="count incount">0</span>
                                                                                                <div class="type-label">
                                                                                                    <p
                                                                                                        class="fz14 mb-xs-0">
                                                                                                        Infant
                                                                                                    </p><span>Less
                                                                                                        than 2
                                                                                                        yrs</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="button-set">
                                                                                                <button type="button"
                                                                                                    class="btn-add-in">
                                                                                                    <i
                                                                                                        class="fas fa-plus"></i>
                                                                                                </button>
                                                                                                <button type="button"
                                                                                                    class="btn-subtract-in">
                                                                                                    <i
                                                                                                        class="fas fa-minus"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cabin-selection">
                                                                                    <h6>Cabin Class</h6>
                                                                                    <div class="cabin-list">
                                                                                        <button type="button"
                                                                                            class="label-select-btn">
                                                                                            <span
                                                                                                class="muiButton-label">Economy
                                                                                            </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="label-select-btn active">
                                                                                            <span
                                                                                                class="muiButton-label">
                                                                                                Business
                                                                                            </span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="label-select-btn">
                                                                                            <span
                                                                                                class="MuiButton-label">First
                                                                                                Class </span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <span>Business</span>
                                                                </div>
                                                            </div> 
                                                            <!--<input type="hidden" name="adult" id="myInput">-->
                                                            <!--<input type="hidden" name="children" id="myInput1">-->
                                                            <!--<input type="hidden" name="infant" id="myInput2">-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="add_multy_form">
                                                                    <button type="button" id="addMulticityRow">+ Add
                                                                        another
                                                                        flight</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="top_form_search_button">
                                                            <button class="btn btn_theme btn_md">Search</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tours" role="tabpanel" aria-labelledby="tours-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tour_search_form">
                                            <form action="#!">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <div class="flight_Search_boxed">
                                                            <p>Destination</p>
                                                            <input type="text" placeholder="Where are you going?">
                                                            <span>Where are you going?</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                        <div class="form_search_date">
                                                            <div class="flight_Search_boxed date_flex_area">
                                                                <div class="Journey_date">
                                                                    <p>Journey date</p>
                                                                    <input type="date" value="2022-05-03">
                                                                    <span>Thursday</span>
                                                                </div>
                                                                <div class="Journey_date">
                                                                    <p>Return date</p>
                                                                    <input type="date" value="2022-05-05">
                                                                    <span>Thursday</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                        <div class="flight_Search_boxed dropdown_passenger_area">
                                                            <p>Passenger, Class </p>
                                                            <div class="dropdown">
                                                                <button class="dropdown-toggle final-count"
                                                                    data-toggle="dropdown" type="button"
                                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    1 Passenger
                                                                </button>
                                                                <div class="dropdown-menu dropdown_passenger_info"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <div class="traveller-calulate-persons">
                                                                        <div class="passengers">
                                                                            <h6>Passengers</h6>
                                                                            <div class="passengers-types">
                                                                                <div class="passengers-type">
                                                                                    <div class="text"><span
                                                                                            class="count pcount">1</span>
                                                                                        <div class="type-label">
                                                                                            <p>Adult</p>
                                                                                            <span>12+
                                                                                                yrs</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="button-set">
                                                                                        <button type="button"
                                                                                            class="btn-add">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn-subtract">
                                                                                            <i class="fas fa-minus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="passengers-type">
                                                                                    <div class="text"><span
                                                                                            class="count ccount">0</span>
                                                                                        <div class="type-label">
                                                                                            <p class="fz14 mb-xs-0">
                                                                                                Children
                                                                                            </p><span>2
                                                                                                - Less than 12
                                                                                                yrs</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="button-set">
                                                                                        <button type="button"
                                                                                            class="btn-add-c">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn-subtract-c">
                                                                                            <i class="fas fa-minus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="passengers-type">
                                                                                    <div class="text"><span
                                                                                            class="count incount">0</span>
                                                                                        <div class="type-label">
                                                                                            <p class="fz14 mb-xs-0">
                                                                                                Infant
                                                                                            </p><span>Less
                                                                                                than 2
                                                                                                yrs</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="button-set">
                                                                                        <button type="button"
                                                                                            class="btn-add-in">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn-subtract-in">
                                                                                            <i class="fas fa-minus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cabin-selection">
                                                                            <h6>Cabin Class</h6>
                                                                            <div class="cabin-list">
                                                                                <button type="button"
                                                                                    class="label-select-btn">
                                                                                    <span
                                                                                        class="muiButton-label">Economy
                                                                                    </span>
                                                                                </button>
                                                                                <button type="button"
                                                                                    class="label-select-btn active">
                                                                                    <span class="muiButton-label">
                                                                                        Business
                                                                                    </span>
                                                                                </button>
                                                                                <button type="button"
                                                                                    class="label-select-btn">
                                                                                    <span class="MuiButton-label">First
                                                                                        Class </span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <span>Business</span>
                                                        </div>
                                                    </div>
                                                    <div class="top_form_search_button">
                                                        <button class="btn btn_theme btn_md">Search</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="hotels" role="tabpanel" aria-labelledby="hotels-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tour_search_form">
                                             <form action="{{url('/hotel_search')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                                        <div class="flight_Search_boxed"> 
                                                            <p>Destination</p>
                                                            <input list="ShowDataList" placeholder="From" name="city_name" class="selectpicker form-control city_id" id="state_id" style="background-color:#e98c0617; width:202px;" required>
                                                                <datalist id="ShowDataList">
                                                                <?php $data =\App\Hotel_City_Model::get(); ?>
                                                                @foreach($data as $state_)
                                                                    <option value="{{$state_->name}}">{{__($state_->name)}}</option>
                                                                @endforeach
                                                            </datalist>
                                                            <span id="city_id"></span>
                                                            <span>Where are you going?</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form_search_date">
                                                            <div class="flight_Search_boxed date_flex_area">
                                                                <div class="Journey_date">
                                                                    <p>Check In Date</p>
                                                                    <input type="date" name="checkin_date" class="txtDate" required>
                                                                    <span></span>
                                                                </div>
                                                                <div class="Journey_date" >
                                                                    <p>Check Out Date</p>
                                                                    <input type="date" name="checkout_date" class="txtDate" required>
                                                                    <span></span>
                                                                </div>
                                                                <div class="">
                                                                    <p>No Of Rooms</p>
                                                                    <input type="number" name="NoOfRoom" value="1" required>
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2  col-md-2 col-sm-12 col-12">
                                                        <div class="flight_Search_boxed dropdown_passenger_area">
                                                            <p>No Of People </p>
                                                            <div class="dropdown">
                                                                <button class="dropdown-toggle final-count"
                                                                    data-toggle="dropdown" type="button"
                                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    1 No Of People 
                                                                </button>
                                                                <div class="dropdown-menu dropdown_passenger_info"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <div class="traveller-calulate-persons">
                                                                        <div class="passengers">
                                                                            <h6>Passengers</h6> 
                                                                            <div class="passengers-types">
                                                                                <div class="passengers-type">
                                                                                    <div class="text"><span
                                                                                            class="count pcount">1</span>
                                                                                        <div class="type-label">
                                                                                            <p>Adult</p>
                                                                                            <span>12+
                                                                                                yrs</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="button-set">
                                                                                        <button type="button"
                                                                                            class="btn-add">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn-subtract">
                                                                                            <i class="fas fa-minus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="passengers-type">
                                                                                    <div class="text"><span
                                                                                            class="count ccount">0</span>
                                                                                        <div class="type-label">
                                                                                            <p class="fz14 mb-xs-0">
                                                                                                Children
                                                                                            </p><span>2
                                                                                                - Less than 12
                                                                                                yrs</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="button-set">
                                                                                        <button type="button"
                                                                                            class="btn-add-c">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn-subtract-c">
                                                                                            <i class="fas fa-minus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="passengers-type">
                                                                                    <div class="text"><span
                                                                                            class="count incount">0</span>
                                                                                        <div class="type-label">
                                                                                            <p class="fz14 mb-xs-0">
                                                                                                Infant
                                                                                            </p><span>Less
                                                                                                than 2
                                                                                                yrs</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="button-set">
                                                                                        <button type="button"
                                                                                            class="btn-add-in">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn-subtract-in">
                                                                                            <i class="fas fa-minus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--<div class="cabin-selection">-->
                                                                        <!--    <h6>Cabin Class</h6>-->
                                                                        <!--    <div class="cabin-list">-->
                                                                        <!--        <button type="button"-->
                                                                        <!--            class="label-select-btn">-->
                                                                        <!--            <span-->
                                                                        <!--                class="muiButton-label">Economy-->
                                                                        <!--            </span>-->
                                                                        <!--        </button>-->
                                                                        <!--        <button type="button"-->
                                                                        <!--            class="label-select-btn active">-->
                                                                        <!--            <span class="muiButton-label">-->
                                                                        <!--                Business-->
                                                                        <!--            </span>-->
                                                                        <!--        </button>-->
                                                                        <!--        <button type="button"-->
                                                                        <!--            class="label-select-btn">-->
                                                                        <!--            <span class="MuiButton-label">First-->
                                                                        <!--                Class </span>-->
                                                                        <!--        </button>-->
                                                                        <!--    </div>-->
                                                                        <!--</div>-->
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <!--<span>Business</span>-->
                                                        </div>
                                                        <input type="hidden" name="adult" id="myInput122" value="1">
                                                                        <input type="hidden" name="children" id="myInput1222">
                                                                        <input type="hidden" name="infant" id="myInput1222">
                                                                        <input type="hidden" name="form_status" id="hostels">
                                                    
                                                    </div>
                                                    <div class="top_form_search_button">
                                                        <button class="btn btn_theme btn_md">Search</button>
                                                    </div>
                                                </div>
                                            </form>
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="visa-application" role="tabpanel" aria-labelledby="visa-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tour_search_form">
                                            <form action="#!">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                                                        <div class="flight_Search_boxed">
                                                            <p>Select country</p>
                                                            <input type="text" value="United states">
                                                            <span>Where are you going?</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                                                        <div class="flight_Search_boxed">
                                                            <p>Your nationality</p>
                                                            <input type="text" value="Bangladesh">
                                                            <span>Where are you going?</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                        <div class="form_search_date">
                                                            <div class="flight_Search_boxed date_flex_area">
                                                                <div class="Journey_date">
                                                                    <p>Entry date</p>
                                                                    <input type="date" value="2022-05-03">
                                                                    <span>Thursday</span>
                                                                </div>
                                                                <div class="Journey_date">
                                                                    <p>Exit date</p>
                                                                    <input type="date" value="2022-05-05">
                                                                    <span>Thursday</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                        <div class="flight_Search_boxed dropdown_passenger_area">
                                                            <p>Traveller, Class </p>
                                                            <div class="dropdown">
                                                                <button class="dropdown-toggle final-count"
                                                                    data-toggle="dropdown" type="button"
                                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    0 Traveller
                                                                </button>
                                                                <div class="dropdown-menu dropdown_passenger_info"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <div class="traveller-calulate-persons">
                                                                        <div class="passengers">
                                                                            <h6>Traveller</h6>
                                                                            <div class="passengers-types">
                                                                                <div class="passengers-type">
                                                                                    <div class="text"><span
                                                                                            class="count pcount">1</span>
                                                                                        <div class="type-label">
                                                                                            <p>Adult</p>
                                                                                            <span>12+
                                                                                                yrs</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="button-set">
                                                                                        <button type="button"
                                                                                            class="btn-add">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn-subtract">
                                                                                            <i class="fas fa-minus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="passengers-type">
                                                                                    <div class="text"><span
                                                                                            class="count ccount">0</span>
                                                                                        <div class="type-label">
                                                                                            <p class="fz14 mb-xs-0">
                                                                                                Children
                                                                                            </p><span>2
                                                                                                - Less than 12
                                                                                                yrs</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="button-set">
                                                                                        <button type="button"
                                                                                            class="btn-add-c">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn-subtract-c">
                                                                                            <i class="fas fa-minus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="passengers-type">
                                                                                    <div class="text"><span
                                                                                            class="count incount">0</span>
                                                                                        <div class="type-label">
                                                                                            <p class="fz14 mb-xs-0">
                                                                                                Infant
                                                                                            </p><span>Less
                                                                                                than 2
                                                                                                yrs</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="button-set">
                                                                                        <button type="button"
                                                                                            class="btn-add-in">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn-subtract-in">
                                                                                            <i class="fas fa-minus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <span>Business</span>
                                                        </div>
                                                    </div>
                                                    <div class="top_form_search_button">
                                                        <button class="btn btn_theme btn_md">Search</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="apartments" role="tabpanel" aria-labelledby="apartments-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tour_search_form">
                                            <form action="#!">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <div class="flight_Search_boxed">
                                                            <p>Destination</p>
                                                            <input type="text" placeholder="Where are you going?">
                                                            <span>Where are you going?</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                        <div class="form_search_date">
                                                            <div class="flight_Search_boxed date_flex_area">
                                                                <div class="Journey_date">
                                                                    <p>Journey date</p>
                                                                    <input type="date" value="2022-05-03">
                                                                    <span>Thursday</span>
                                                                </div>
                                                                <div class="Journey_date">
                                                                    <p>Return date</p>
                                                                    <input type="date" value="2022-05-05">
                                                                    <span>Thursday</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                        <div class="flight_Search_boxed dropdown_passenger_area">
                                                            <p>Passenger, Class </p>
                                                            <div class="dropdown">
                                                                <button class="dropdown-toggle final-count"
                                                                    data-toggle="dropdown" type="button"
                                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    0 Traveler
                                                                </button>
                                                                <div class="dropdown-menu dropdown_passenger_info"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <div class="traveller-calulate-persons">
                                                                        <div class="passengers">
                                                                            <h6>Passengers</h6>
                                                                            <div class="passengers-types">
                                                                                <div class="passengers-type">
                                                                                    <div class="text"><span
                                                                                            class="count pcount">1</span>
                                                                                        <div class="type-label">
                                                                                            <p>Adult</p>
                                                                                            <span>12+
                                                                                                yrs</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="button-set">
                                                                                        <button type="button"
                                                                                            class="btn-add">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn-subtract">
                                                                                            <i class="fas fa-minus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="passengers-type">
                                                                                    <div class="text"><span
                                                                                            class="count ccount">0</span>
                                                                                        <div class="type-label">
                                                                                            <p class="fz14 mb-xs-0">
                                                                                                Children
                                                                                            </p><span>2
                                                                                                - Less than 12
                                                                                                yrs</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="button-set">
                                                                                        <button type="button"
                                                                                            class="btn-add-c">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn-subtract-c">
                                                                                            <i class="fas fa-minus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="passengers-type">
                                                                                    <div class="text"><span
                                                                                            class="count incount">0</span>
                                                                                        <div class="type-label">
                                                                                            <p class="fz14 mb-xs-0">
                                                                                                Infant
                                                                                            </p><span>Less
                                                                                                than 2
                                                                                                yrs</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="button-set">
                                                                                        <button type="button"
                                                                                            class="btn-add-in">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn-subtract-in">
                                                                                            <i class="fas fa-minus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cabin-selection">
                                                                            <h6>Cabin Class</h6>
                                                                            <div class="cabin-list">
                                                                                <button type="button"
                                                                                    class="label-select-btn">
                                                                                    <span
                                                                                        class="muiButton-label">Economy
                                                                                    </span>
                                                                                </button>
                                                                                <button type="button"
                                                                                    class="label-select-btn active">
                                                                                    <span class="muiButton-label">
                                                                                        Business
                                                                                    </span>
                                                                                </button>
                                                                                <button type="button"
                                                                                    class="label-select-btn">
                                                                                    <span class="MuiButton-label">First
                                                                                        Class </span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <span>Business</span>
                                                        </div>
                                                    </div>
                                                    <div class="top_form_search_button">
                                                        <button class="btn btn_theme btn_md">Search</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="bus" role="tabpanel" aria-labelledby="bus-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tour_search_form">
                                            <form action="#!">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="oneway_search_form">
                                                            <form action="#!">
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                        <div class="flight_Search_boxed">
                                                                            <p>From</p>
                                                                            <input type="text" value="Dhaka">
                                                                            <span>Bus Trtminal</span>
                                                                            <div class="plan_icon_posation">
                                                                                <i class="fas fa-plane-departure"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                        <div class="flight_Search_boxed">
                                                                            <p>To</p>
                                                                            <input type="text" value="Cox’s Bazar ">
                                                                            <span>Bus Trtminal</span>
                                                                            <div class="plan_icon_posation">
                                                                                <i class="fas fa-plane-arrival"></i>
                                                                            </div>
                                                                            <div class="range_plan">
                                                                                <i class="fas fa-exchange-alt"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4  col-md-6 col-sm-12 col-12">
                                                                        <div class="form_search_date">
                                                                            <div class="flight_Search_boxed date_flex_area">
                                                                                <div class="Journey_date">
                                                                                    <p>Journey date</p>
                                                                                    <input type="date" value="2022-05-05">
                                                                                    <span>Thursday</span>
                                                                                </div>
                                                                                <div class="Journey_date">
                                                                                    <p>Return date</p>
                                                                                    <input type="date" value="2022-05-08">
                                                                                    <span>Saturday</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                                        <div
                                                                            class="flight_Search_boxed dropdown_passenger_area">
                                                                            <p>Passenger, Class </p>
                                                                            <div class="dropdown">
                                                                                <button class="dropdown-toggle final-count"
                                                                                    data-toggle="dropdown" type="button"
                                                                                    id="dropdownMenuButton1"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false">
                                                                                    1 Passenger
                                                                                </button>
                                                                                <div class="dropdown-menu dropdown_passenger_info"
                                                                                    aria-labelledby="dropdownMenuButton1">
                                                                                    <div class="traveller-calulate-persons">
                                                                                        <div class="passengers">
                                                                                            <h6>Passengers</h6>
                                                                                            <div class="passengers-types">
                                                                                                <div class="passengers-type">
                                                                                                    <div class="text"><span
                                                                                                            class="count pcount">1</span>
                                                                                                        <div class="type-label">
                                                                                                            <p>Adult</p>
                                                                                                            <span>12+
                                                                                                                yrs</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="button-set">
                                                                                                        <button type="button"
                                                                                                            class="btn-add">
                                                                                                            <i
                                                                                                                class="fas fa-plus"></i>
                                                                                                        </button>
                                                                                                        <button type="button"
                                                                                                            class="btn-subtract">
                                                                                                            <i
                                                                                                                class="fas fa-minus"></i>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="passengers-type">
                                                                                                    <div class="text"><span
                                                                                                            class="count ccount">0</span>
                                                                                                        <div class="type-label">
                                                                                                            <p
                                                                                                                class="fz14 mb-xs-0">
                                                                                                                Children
                                                                                                            </p><span>2
                                                                                                                - Less than 12
                                                                                                                yrs</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="button-set">
                                                                                                        <button type="button"
                                                                                                            class="btn-add-c">
                                                                                                            <i
                                                                                                                class="fas fa-plus"></i>
                                                                                                        </button>
                                                                                                        <button type="button"
                                                                                                            class="btn-subtract-c">
                                                                                                            <i
                                                                                                                class="fas fa-minus"></i>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="passengers-type">
                                                                                                    <div class="text"><span
                                                                                                            class="count incount">0</span>
                                                                                                        <div class="type-label">
                                                                                                            <p
                                                                                                                class="fz14 mb-xs-0">
                                                                                                                Infant
                                                                                                            </p><span>Less
                                                                                                                than 2
                                                                                                                yrs</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="button-set">
                                                                                                        <button type="button"
                                                                                                            class="btn-add-in">
                                                                                                            <i
                                                                                                                class="fas fa-plus"></i>
                                                                                                        </button>
                                                                                                        <button type="button"
                                                                                                            class="btn-subtract-in">
                                                                                                            <i
                                                                                                                class="fas fa-minus"></i>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cabin-selection">
                                                                                            <h6>Cabin Class</h6>
                                                                                            <div class="cabin-list">
                                                                                                <button type="button"
                                                                                                    class="label-select-btn">
                                                                                                    <span
                                                                                                        class="muiButton-label">Economy
                                                                                                    </span>
                                                                                                </button>
                                                                                                <button type="button"
                                                                                                    class="label-select-btn active">
                                                                                                    <span
                                                                                                        class="muiButton-label">
                                                                                                        Business
                                                                                                    </span>
                                                                                                </button>
                                                                                                <button type="button"
                                                                                                    class="label-select-btn">
                                                                                                    <span
                                                                                                        class="MuiButton-label">First
                                                                                                        Class </span>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <span>Business</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="top_form_search_button">
                                                                        <button class="btn btn_theme btn_md">Search</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="cruise" role="tabpanel" aria-labelledby="cruise-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tour_search_form">
                                            <form action="#!">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <div class="flight_Search_boxed">
                                                            <p>Destination</p>
                                                            <input type="text" placeholder="Where are you going?">
                                                            <span>Where are you going?</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                        <div class="flight_Search_boxed">
                                                            <p>Cruise line</p>
                                                            <input type="text" placeholder="American line">
                                                            <span>Choose your cruise</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                        <div class="form_search_date">
                                                            <div class="flight_Search_boxed date_flex_area">
                                                                <div class="Journey_date">
                                                                    <p>Journey date</p>
                                                                    <input type="date" value="2022-05-03">
                                                                    <span>Thursday</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="top_form_search_button">
                                                        <button class="btn btn_theme btn_md">Search</button>
                                                    </div>
                                                </div>
                                            </form>
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