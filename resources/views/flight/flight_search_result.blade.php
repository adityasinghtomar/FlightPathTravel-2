@extends('flight.header')
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
                        <h2>Flight search result</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span> Flight search result</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Form Area -->
    <section id="theme_search_form_tour">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="theme_search_form_area">
                        <div class="theme_search_form_tabbtn">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="flights-tab" data-bs-toggle="tab"
                                        data-bs-target="#flights" type="button" role="tab" aria-controls="flights"
                                        aria-selected="true"><i class="fas fa-plane-departure"></i>Flights</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="hotels-tab" data-bs-toggle="tab"
                                        data-bs-target="#hotels" type="button" role="tab" aria-controls="hotels"
                                        aria-selected="false"><i class="fas fa-hotel"></i>Hotels</button>
                                </li>
								<li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tours-tab" data-bs-toggle="tab" data-bs-target="#tours"
                                        type="button" role="tab" aria-controls="tours" aria-selected="false"><i
                                            class="fas fa-globe"></i>Tours</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="visa-tab" data-bs-toggle="tab"
                                        data-bs-target="#visa-application" type="button" role="tab" aria-controls="visa"
                                        aria-selected="false"><i class="fas fa-passport"></i> Visa</button>
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
                            <div class="tab-pane fade show active" id="flights" role="tabpanel"
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
                                                                      <input list="ShowDataList1" placeholder="From" id="from" class="selectpicker form-control from" name="from" style="background-color:white; width:200px;" required>
                                                                    <datalist id="ShowDataList1">
                                                                        <!--@foreach($filterResult as $state_)-->
                                                                        <!--<option value="{{$state_->AIRPORTCODE}}">{{__($state_->AIRPORTNAME)}} - {{__($state_->CITYNAME)}}  ( {{__($state_->COUNTRYCODE)}} )</option>-->
                                                                        <!--@endforeach-->
                                                                    </datalist>
                                                                    <span id="state-dropdown"></span>
                                                                    <div class="plan_icon_posation">
                                                                         
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                <div class="flight_Search_boxed">
                                                                    <p>To</p>
                                                                     <?php $filterResult =\App\Airport_Model::orderBy('id', 'DESC')->get(); ?>
                                                                      <input list="ShowDataList2" placeholder="To" class="selectpicker form-control to" name="to" id="to" style="background-color:white; width:200px;" required>
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
                                                                            <input type="date" id="demo" name="journey_date" onclick="myDate()" required>
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
                                                                                            <div class="text" name="adult"><span
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
                                                            <input type="hidden" name="adult" id="myInput" value="1">
                                                            <input type="hidden" name="children" id="myInput1">
                                                            <input type="hidden" name="infant" id="myInput2">
                                                                                                   
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
                                                                      <input list="ShowDataList1" placeholder="From" class="selectpicker form-control from" name="from" id="from12" style="background-color:white; width:200px;" required>
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
                                                                      <input list="ShowDataList2" placeholder="To" class="selectpicker form-control to" name="to" id="to12" style="background-color:white; width:200px;" required>
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
                                                    
                                                            <div class="col-lg-4  col-md-6 col-sm-12 col-12">
                                                                <div class="form_search_date">
                                                                    <div class="flight_Search_boxed date_flex_area">
                                                                        <div class="Journey_date">
                                                                            <p>Journey date</p>
                                                                            <input type="date" id="demo" name="journey_date" value="" required>
                                                                            <span></span>
                                                                        </div>
                                                                        <div class="Journey_date">
                                                                            <p>Return date</p>
                                                                            <input type="date" id="demo" name="return_date" value="" required>
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
                                                                                            <div class="text" name="adult"><span
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
                                                            <input type="hidden" name="adult" id="myInputA" valeu="1">
                                                            <input type="hidden" name="children" id="myInputB">
                                                            <input type="hidden" name="infant" id="myInputC">
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
                                                                      <input list="ShowDataList1" placeholder="From" class="selectpicker form-control from" name="from" id="from_1" style="background-color:white; width:200px;" required>
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
                                                                      <input list="ShowDataList2" placeholder="To" class="selectpicker form-control to" name="to" id="to_2" style="background-color:white; width:200px;" required>
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
                                                                                        value="" required>
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
                                                                                            <div class="text" name="adult"><span
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
                                                            <input type="hidden" name="adult" id="myInputAA" valeu="1">
                                                            <input type="hidden" name="children" id="myInputBB">
                                                            <input type="hidden" name="infant" id="myInputCC">
                                                                </div>
                                                            </div>
                                                            <div class="multi_city_form">
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                        <div class="flight_Search_boxed">
                                                                            <p>From</p>
                                                                    <?php $filterResult =\App\Airport_Model::get(); ?>
                                                                      <input list="ShowDataList1" placeholder="From" class="selectpicker form-control from" name="from1" id="from_3" style="background-color:white; width:200px;" required>
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
                                                                      <input list="ShowDataList2" placeholder="To" class="selectpicker form-control to" name="to1" id="to_4" style="background-color:white; width:200px;" required>
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
                                                                                        value="" required>
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
                                                                                            <div class="text" name="adult"><span
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Flight Search Areas -->
    <section id="explore_area" class="section_padding">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Flight List </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="left_side_search_area">
                        <div class="left_side_search_boxed">
                            <div class="left_side_search_heading">
                                <h5>Filter by price</h5>
                            </div>
                             <form action="{{url('/price-filter')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                            <div class="flight_Search_boxed">
        <style>
            .price-input {
  width: 100%;
  display: flex;
  margin: 30px 0 35px;
}
.price-input .field {
  display: flex;
  width: 100%;
  height: 45px;
  align-items: center;
}
.field input {
  width: 100%;
  height: 100%;
  outline: none;
  font-size: 19px;
  margin-left: 12px;
  border-radius: 5px;
  text-align: center;
  border: 1px solid #999;
  -moz-appearance: textfield;
}
input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
  -webkit-appearance: none;
}
.price-input .separator {
  width: 130px;
  display: flex;
  font-size: 19px;
  align-items: center;
  justify-content: center;
}
.slider {
  height: 5px;
  position: relative;
  background: #ddd;
  border-radius: 5px;
}
.slider .progress {
  height: 100%;
  left: 25%;
  right: 25%;
  position: absolute;
  border-radius: 5px;
  background: #17a2b8;
}
.range-input {
  position: relative;
}
.range-input input {
  position: absolute;
  width: 100%;
  height: 5px;
  top: -5px;
  background: none;
  pointer-events: none;
  -webkit-appearance: none;
  -moz-appearance: none;
}
input[type="range"]::-webkit-slider-thumb {
  height: 17px;
  width: 17px;
  border-radius: 50%;
  background: #17a2b8;
  pointer-events: auto;
  -webkit-appearance: none;
  box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
}
input[type="range"]::-moz-range-thumb {
  height: 17px;
  width: 17px;
  border: none;
  border-radius: 50%;
  background: #17a2b8;
  pointer-events: auto;
  -moz-appearance: none;
  box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
}

/* Support */
.support-box {
  top: 2rem;
  position: relative;
  bottom: 0;
  text-align: center;
  display: block;
}
.b-btn {
  color: white;
  text-decoration: none;
  font-weight: bold;
}
.b-btn.paypal i {
  color: blue;
}
.b-btn:hover {
  text-decoration: none;
  font-weight: bold;
}
.b-btn i {
  font-size: 20px;
  color: yellow;
  margin-top: 2rem;
}
        </style>                      
     <div class="price-input">
            <div class="field">
              <span>Min</span>
              <input type="number" class="input-min" value="2500" style="background-color:white;width: 62px;">
            </div>
            <div class="separator">-</div>
            <div class="field">
              <span>Max</span>
              <input type="number" class="input-max" value="7500" style="background-color:white;width: 62px;">
            </div>
      </div>
          <div class="slider">
            <div class="progress"></div>
          </div>
          <div class="range-input">
            <input type="range" class="range-min" min="0" max="100000" value="2500" step="100">
            <input type="range" class="range-max" min="0" max="100000" value="7500" step="100">
          </div>
    </div>
                            <input type="hidden" name="journey_date" value="<?php echo $journey_date;?>"> 
                                            <input type="hidden" name="from" value="<?php echo $from;?>">
                                            <input type="hidden" name="to" value="<?php echo $to; ?>">
                                            <input type="hidden" name="adult" value="<?php echo $adult;?>">
                                            <input type="hidden" name="children" value="<?php echo $children ;?>">
                                            <input type="hidden" name="infant" value="<?php echo $infant ;?>"> 
                                            <input type="hidden" name="cabin_class" value="<?php echo $cabin_class;?>"> 
                                            <button class="apply" style="margin-left: 190px;">Apply</button>
                            </form>
                        </div>
                        <div class="left_side_search_boxed">
                            <div class="left_side_search_heading">
                                <h5>Number of stops</h5>
                            </div>
                            <form action="{{url('/stops')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                            <div class="tour_search_type">
                                <div class="checkbox">
                                 
                                <input type="checkbox" name="stops" value="true" > <label style="margin-left: 20px;">  One Stop
                                 </label>
                                </div>
                                <div class="checkbox">
                                 
                                <input type="checkbox" name="stops" value="false" > <label style="margin-left: 20px;">  Multi Stop
                                 </label>
                                </div>
                                <div class="checkbox">
                                 
                                <input type="checkbox" name="stops" value="true" > <label style="margin-left: 20px;">  Non Stop
                                 </label>
                                </div>
                                <input type="hidden" name="journey_date" value="<?php echo $journey_date;?>"> 
                                            <input type="hidden" name="from" value="<?php echo $from;?>">
                                            <input type="hidden" name="to" value="<?php echo $to; ?>">
                                            <input type="hidden" name="adult" value="<?php echo $adult;?>">
                                            <input type="hidden" name="children" value="<?php echo $children ;?>">
                                            <input type="hidden" name="infant" value="<?php echo $infant ;?>"> 
                                            <input type="hidden" name="cabin_class" value="<?php echo $cabin_class;?>"> 
                                            <button class="apply" style="margin-left: 190px;">Apply</button>
                            </form>
                            </div>
                        </div>
                        <div class="left_side_search_boxed">
                            <div class="left_side_search_heading">
                                <h5>Flight class</h5>
                            </div>
                            <form action="{{url('/flight-class')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                               <div class="tour_search_type">
                                   <div class="checkbox">
                                     <input type="checkbox" name="cabin_class" value="1" > <label style="margin-left: 20px;">  All Class
                                 </label>
                                </div>
                                   <div class="checkbox">
                                     <input type="checkbox" name="cabin_class" value="2" > <label style="margin-left: 20px;">  Economy
                                 </label>
                                </div>
                                   <div class="checkbox">
                                     <input type="checkbox" name="cabin_class" value="3" > <label style="margin-left: 20px;">  Premium Economy
                                 </label>
                                </div>
                                   <div class="checkbox">
                                     <input type="checkbox" name="cabin_class" value="4" > <label style="margin-left: 20px;">  Business
                                 </label>
                                </div>
                                   <div class="checkbox">
                                     <input type="checkbox" name="cabin_class" value="5" > <label style="margin-left: 20px;">  Premium Business
                                 </label>
                                </div>
                                
                                   <div class="checkbox">
                                     <input type="checkbox" name="cabin_class" value="6" > <label style="margin-left: 20px;">  First Class
                                 </label>
                                </div>
                                <input type="hidden" name="journey_date" value="<?php echo $journey_date;?>"> 
                                            <input type="hidden" name="from" value="<?php echo $from;?>">
                                            <input type="hidden" name="to" value="<?php echo $to; ?>">
                                            <input type="hidden" name="adult" value="<?php echo $adult;?>">
                                            <input type="hidden" name="children" value="<?php echo $children ;?>">
                                            <input type="hidden" name="infant" value="<?php echo $infant ;?>"> 
                                            <button class="apply" style="margin-left: 190px;">Apply</button>
                            </form>
                            </div>
                        </div>
                        <div class="left_side_search_boxed">
                            <div class="left_side_search_heading">
                                <h5>Airlines</h5>
                            </div>
                            <div class="tour_search_type">
                                
                            <form action="{{url('/Airlines')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                               <select class="form-control MuiButton-label" name="airlines" required>
                                   <option value="Aer Lingus"> Aer Lingus </option>
                                   <option value="Air Fiji"> Air Fiji </option>
                                   <option value="Air India"> Air India </option>
                                   <option value="Akasa Air"> Akasa Air </option>
                                   <option value="Air Arabia"> Air Arabia </option>
                                   <option value="Air France"> Air France </option>
                                   <option value="Air India Express"> Air India Express </option>
                                   <option value="Astrakhan Airlines"> Astrakhan Airlines </option>
                                   <option value="Air Asia"> Air Asia </option>
                                   <option value="AirAsia X"> AirAsia X </option>
                                   <option value="Air Asia India"> Air Asia India </option>
                                   <option value="Austrian Airlines"> Austrian Airlines </option>
                                   <option value="British Airways"> British Airways </option>
                                   <option value="Condor Airlines"> Condor Airlines </option>
                                   <option value="Eastern Airways"> Eastern Airways </option>
                                   <option value="Emirates"> Emirates </option>
                                   <option value="Etihad Airways"> Etihad Airways </option>
                                   <option value="Finnair"> Finnair </option>
                                   <option value="Fly Scoot"> Fly Scoot </option>
                                   <option value="flydubai"> flydubai </option>
                                   <option value="Go first"> Go first </option>
                                   <option value="Gulf Air"> Gulf Air </option>
                                   <option value="Indigo"> Indigo </option>
                                   <option value="Indonesia AirAsia"> Indonesia AirAsia </option>
                                   <option value="Jazeera Airways"> Jazeera Airways </option>
                                   <option value="Jetstar Asia"> Jetstar Asia </option>
                                   <option value="KLM Airlines"> KLM Airlines </option>
                                   <option value="Kuwait Airways"> Kuwait Airways </option>
                                   <option value="Lufthansa"> Lufthansa </option>
                                   <option value="Malaysia Airlines"> Malaysia Airlines </option>
                                   <option value="Malmö Aviation"> Malmö Aviation </option>
                                   <option value="Mesaba Airlines"> Mesaba Airlines </option>
                                   <option value="Oman Air"> Oman Air </option>
                                   <option value="Qatar Airways"> Qatar Airways </option>
                                   <option value="Spicejet"> Spicejet </option>
                                   <option value="SriLankan"> SriLankan </option>
                                   <option value="SunExpress"> SunExpress </option>
                                   <option value="Thai AirAsia"> Thai AirAsia </option>
                                   <option value="Thai Airways"> Thai Airways </option>
                                   <option value="Thomas Cook Airlines"> Thomas Cook Airlines </option>
                                   <option value="Virgin Atlantic"> Virgin Atlantic </option>
                                   <option value="Vistara"> Vistara </option>
                                   <option value="WestJet"> WestJet </option>
                                   
                                </select>
                             
                            <input type="hidden" name="journey_date" value="<?php echo $journey_date;?>"> 
                                            <input type="hidden" name="from" value="<?php echo $from;?>">
                                            <input type="hidden" name="to" value="<?php echo $to; ?>">
                                            <input type="hidden" name="adult" value="<?php echo $adult;?>">
                                            <input type="hidden" name="children" value="<?php echo $children ;?>">
                                            <input type="hidden" name="infant" value="<?php echo $infant ;?>"> 
                                            <input type="hidden" name="cabin_class" value="<?php echo $cabin_class;?>"> 
                                            <button class="apply" style="margin-left: 190px;">Apply</button>
                            </form>
                            </div>
                        </div>
                        <div class="left_side_search_boxed">
                            <div class="left_side_search_heading">
                                <h5>Refundable</h5>
                            </div>
                            <form action="{{url('/Refundable')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                            <div class="tour_search_type">
                                <div class="checkbox">
                                 
                                <input type="checkbox" name="refundable" value="0" > <label style="margin-left: 20px;">  No
                                 </label>
                                </div>
                                <div class="checkbox">
                                 
                                <input type="checkbox" name="refundable" value="1" > <label style="margin-left: 20px;">  Yes
                                 </label>
                                </div>
                                <input type="hidden" name="journey_date" value="<?php echo $journey_date;?>"> 
                                            <input type="hidden" name="from" value="<?php echo $from;?>">
                                            <input type="hidden" name="to" value="<?php echo $to; ?>">
                                            <input type="hidden" name="adult" value="<?php echo $adult;?>">
                                            <input type="hidden" name="children" value="<?php echo $children ;?>">
                                            <input type="hidden" name="infant" value="<?php echo $infant ;?>"> 
                                            <input type="hidden" name="cabin_class" value="<?php echo $cabin_class;?>">
                                            <button class="apply" style="margin-left: 190px;">Apply</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
        <!--Flight Search Data Start--> 
        <!--Price Filter -->
@if(isset($price_filter))         
          <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="flight_search_result_wrapper">
                                <div class="flight_search_item_wrappper">
                                    @if(isset($ress))
                                    
         @foreach($ress as $res)
@if(isset($res->Results))        
    <?php $dat = $res->Results;?>
            
    @foreach($dat as $dat1)
        @foreach($dat1 as $key=>$dat2)
          <!--Filter Price Condition -->
                    @if($dat2->Fare->BaseFare < $price_filter)          
        <?php  $Segments = $dat2->Segments; ?>
        
         @foreach( $Segments as $Segment)
            @foreach( $Segment as $Segm)
          <?php $Origin = $Segm->Origin; ?>
         <?php  $Destination = $Segm->Destination; ?>
                
                                    <div class="flight_search_items">
                                        
                                        <div class="multi_city_flight_lists">
                                            <div class="left_side_search_heading">
                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                      <h5 class="apply" style="margin-left:10px;">Flight Name:  <?php echo $Segm->Airline->AirlineName; ?> </h5>
                                                                     </div>
                                                                     <div class="col-lg-6">
                                                                     <h5 class="apply" style="margin-left:10px;">Aircraft: <?php  echo $Segm->Craft; ?> </h5>
                                                                     </div>
                                                                 </div>     
                                        </div> 
                            <div class="flight_multis_area_wrapper"> 
                                            
                                                <div class="flight_search_left">
                                                    <div class="">
                                                        <img src="assets/AirlineLogo/<?php echo $dat2->AirlineCode;?>.gif" alt="img" style="height:100px;width:100px;object-fit: cover;">
                                                    </div>
                                                    <div class="flight_search_destination">
                                                        
                                                        <p>From</p>
                                                        <h3><?php echo $Origin->Airport->AirportCode; ?></h3>
                                                        <h6><?php echo $Origin->Airport->AirportName;?></h6>
                                                        <h6>Departure Time :</h6>
                                                        <h6>
                                                        <?php 
                                                            $input = $Origin->DepTime; 
                                                            $date = strtotime($input); 
                                                            echo date('d-M-Y h:i', $date); 
                                                            ?>
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="flight_search_middel">
                                                    <div class="flight_right_arrow">
                                                        <img src="assets/img/icon/right_arrow.png" alt="icon">
                                                        <h6>Non-stop</h6>
                                                        <p><?php  $minutes = $Segm->Duration; ?> 
                                                        <?php $hours = floor($minutes / 60);
                                                        $min = $minutes - ($hours * 60);
                                                        echo $hours."h : ".$min;echo"m ";
                                                        ?>        
                                                        </p>
                                                    </div>
                                                    <div class="flight_search_destination">
                                                        <p>To</p>
                                                         <h3><?php echo $Destination->Airport->AirportCode; ?></h3>
                                                        <h6><?php echo $Destination->Airport->AirportName;?></h6>
                                                        <h6>Arrival Time :</h6>
                                                        <h6>
                                                        <?php 
                                                            $input = $Destination->ArrTime;
                                                            $date = strtotime($input); 
                                                            echo date('d-M-Y h:i', $date); 
                                                            ?>
                                                            </h6>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="flight_search_right">
                                            <h5><del></del></h5>
                                            @if(session()->has('commision')) <?php $commision = session()->get('commision') ?>
                                            <h2><?php echo $dat2->Fare->Currency;?><?php $base123 = $dat2->Fare->PublishedFare;?> <?php $perce = $base123/100*$commision ?> <?php echo $perce + $base123; ?><sup>*% OFF</sup></h2>
                                            @else
                                            <h2><?php echo $dat2->Fare->Currency;?><?php echo $dat2->Fare->PublishedFare;?><sup>*% OFF</sup></h2>
                                            @endif
                                            <!--<a href="{{url('/flight_booking')}}" class="btn btn_theme btn_sm">Book-->
                                            <!--    now</a>-->
                                            <p>*Discount applicable on some conditions</p>
                                        @if($dat2->IsLCC == '1' )    
                                        <form action="{{url('/select_seat')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                            <input type="hidden" name="ResultIndex" value="<?php echo $dat2->ResultIndex;?>"> 
                                            <input type="hidden" name="TraceId" value="<?php echo $res->TraceId;?>">
                                            <input type="hidden" name="token_id" value="<?php echo $token_id; ?>">
                                            <input type="hidden" name="EndUserIp" value="192.168.11.120">
                                            <input type="hidden" name="BaseFare" value="<?php echo $dat2->Fare->BaseFare;?>">
                                            <input type="hidden" name="Currency" value="<?php echo $dat2->Fare->Currency ;?>">
                                            <input type="hidden" name="Tax" value="<?php echo $dat2->Fare->Tax ;?>"> 
                                            <input type="hidden" name="YQTax" value="<?php echo $dat2->Fare->YQTax;?>"> 
                                            <input type="hidden" name="AdditionalTxnFeeOfrd" value="<?php echo $dat2->Fare->AdditionalTxnFeeOfrd;?>"> 
                                            <input type="hidden" name="AdditionalTxnFeePub" value="<?php echo $dat2->Fare->AdditionalTxnFeePub;?>"> 
                                            <input type="hidden" name="OtherCharges" value="<?php echo $dat2->Fare->OtherCharges;?>">
                                            <input type="hidden" name="Discount" value="<?php echo $dat2->Fare->Discount;?>">
                                            <input type="hidden" name="PublishedFare" value="<?php echo $dat2->Fare->PublishedFare;?>">
                                            <input type="hidden" name="OfferedFare" value="<?php echo $dat2->Fare->OfferedFare;?>">
                                            <input type="hidden" name="TdsOnCommission" value="<?php echo $dat2->Fare->TdsOnCommission;?>">
                                            <input type="hidden" name="TdsOnPLB" value="<?php echo $dat2->Fare->TdsOnPLB;?>">
                                            <input type="hidden" name="TdsOnIncentive" value="<?php echo $dat2->Fare->TdsOnIncentive;?>">
                                            <input type="hidden" name="ServiceFee" value="<?php echo $dat2->Fare->ServiceFee;?>">
                                            <input type="hidden" name="Destination_name" value="<?php echo $Destination->Airport->AirportCode;?>">
                                            <input type="hidden" name="Destination_address" value="<?php echo $Destination->Airport->AirportName;?>">
                                            <input type="hidden" name="Source_name" value="<?php echo $Origin->Airport->AirportCode;?>">
                                            <input type="hidden" name="Source_address" value="<?php echo $Origin->Airport->AirportName;?>">
                                            <input type="hidden" name="Duration" value="<?php echo $Segm->Duration;?>">
                                            <input type="hidden" name="AirlineName" value="<?php echo $Segm->Airline->AirlineName;?>">
                                            
                                        <button class="btn btn_theme btn_sm">Select Seat</button>
                                        </form>
                                        @else 
                                        <form action="{{url('/book_now')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                            <input type="hidden" name="ResultIndex" value="<?php echo $dat2->ResultIndex;?>"> 
                                            <input type="hidden" name="TraceId" value="<?php echo $res->TraceId;?>">
                                            <input type="hidden" name="token_id" value="<?php echo $token_id; ?>">
                                            <input type="hidden" name="EndUserIp" value="192.168.11.120">
                                            <input type="hidden" name="BaseFare" value="<?php echo $dat2->Fare->BaseFare;?>">
                                            <input type="hidden" name="Currency" value="<?php echo $dat2->Fare->Currency ;?>">
                                            <input type="hidden" name="Tax" value="<?php echo $dat2->Fare->Tax ;?>"> 
                                            <input type="hidden" name="YQTax" value="<?php echo $dat2->Fare->YQTax;?>"> 
                                            <input type="hidden" name="AdditionalTxnFeeOfrd" value="<?php echo $dat2->Fare->AdditionalTxnFeeOfrd;?>"> 
                                            <input type="hidden" name="AdditionalTxnFeePub" value="<?php echo $dat2->Fare->AdditionalTxnFeePub;?>"> 
                                            <input type="hidden" name="OtherCharges" value="<?php echo $dat2->Fare->OtherCharges;?>">
                                            <input type="hidden" name="Discount" value="<?php echo $dat2->Fare->Discount;?>">
                                            <input type="hidden" name="PublishedFare" value="<?php echo $dat2->Fare->PublishedFare;?>">
                                            <input type="hidden" name="OfferedFare" value="<?php echo $dat2->Fare->OfferedFare;?>">
                                            <input type="hidden" name="TdsOnCommission" value="<?php echo $dat2->Fare->TdsOnCommission;?>">
                                            <input type="hidden" name="TdsOnPLB" value="<?php echo $dat2->Fare->TdsOnPLB;?>">
                                            <input type="hidden" name="TdsOnIncentive" value="<?php echo $dat2->Fare->TdsOnIncentive;?>">
                                            <input type="hidden" name="ServiceFee" value="<?php echo $dat2->Fare->ServiceFee;?>">
                                            <input type="hidden" name="Destination_name" value="<?php echo $Destination->Airport->AirportCode;?>">
                                            <input type="hidden" name="Destination_address" value="<?php echo $Destination->Airport->AirportName;?>">
                                            <input type="hidden" name="Source_name" value="<?php echo $Origin->Airport->AirportCode;?>">
                                            <input type="hidden" name="Source_address" value="<?php echo $Origin->Airport->AirportName;?>">
                                            <input type="hidden" name="Duration" value="<?php echo $Segm->Duration;?>">
                                            <input type="hidden" name="AirlineName" value="<?php echo $Segm->Airline->AirlineName;?>">
                                            
                                        <button class="btn btn_theme btn_sm">Book now</button>
                                        </form>
                                        @endif
                                         <!--<a href="{{url('/flight_booking')}}" class="btn btn_theme btn_sm">Book-->
                                         <!--       now</a>-->
                                            <!--<h6 data-bs-toggle="collapse" data-bs-target="#collapseExample"-->
                                            <!--    aria-expanded="false" aria-controls="collapseExample">Show more <i-->
                                            <!--        class="fas fa-chevron-down"></i></h6>-->
                                        </div>
                                    </div>
                                     &nbsp;
                                    @endforeach
                                    
                                @endforeach
                                <?php if($key == '20' ){ break;  }  ?>
                                 @endif
                                @endforeach
                               
                                @endforeach
                                @endif
                                @endforeach
                                
                                @endif
                                    <div class="flight_policy_refund collapse" id="collapseExample">
                                        <div class="flight_show_down_wrapper">
                                            <div class="flight-shoe_dow_item">
                                                <div class="airline-details">
                                                    <div class="img"><img src="assets/img/icon/bg.png" alt="img"></div>
                                                    <span class="airlineName fw-500">Biman Bangladesh Airlines &nbsp;
                                                        BG435</span>
                                                    <span class="flightNumber">BOEING 737-800 - 738</span>
                                                </div>
                                                <div class="flight_inner_show_component">
                                                    <div class="flight_det_wrapper">
                                                        <div class="flight_det">
                                                            <div class="code_time">
                                                                <span class="code">DAC</span>
                                                                <span class="time">15:00</span>
                                                            </div>
                                                            <p class="airport">Hazrat Shahjalal International Airport
                                                            </p>
                                                            <p class="date">7th Jun 2022</p>
                                                        </div>
                                                    </div>
                                                    <div class="flight_duration">
                                                        <div class="arrow_right"></div>
                                                        <span>01h 15m</span>
                                                    </div>
                                                    <div class="flight_det_wrapper">
                                                        <div class="flight_det">
                                                            <div class="code_time">
                                                                <span class="code">DAC</span>
                                                                <span class="time">15:00</span>
                                                            </div>
                                                            <p class="airport">Hazrat Shahjalal International Airport
                                                            </p>
                                                            <p class="date">7th Jun 2022</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flight_refund_policy">
                                                <div class="TabPanelInner flex_widht_less">
                                                    <h4>Refund Policy</h4>
                                                    <p class="fz12">1. Refund and Date Change are done as per the
                                                        following policies.</p>
                                                    <p class="fz12">2. Refund Amount= Refund Charge (as per airline
                                                        policy + ShareTrip Convenience Fee). </p>
                                                    <p class="fz12">3. Date Change Amount= Date Change Fee (as per
                                                        Airline Policy + ShareTrip Convenience Fee).</p>
                                                </div>
                                                <div class="TabPanelInner">
                                                    <h4>Baggage</h4>
                                                    <div class="flight_info_taable">
                                                        <h3>DAC-SPD</h3>
                                                        <p><span>20KG /</span> person</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flight_show_down_wrapper">
                                            <div class="flight-shoe_dow_item">
                                                <div class="airline-details">
                                                    <div class="img"><img src="assets/img/icon/bg.png" alt="img"></div>
                                                    <span class="airlineName fw-500">Biman Bangladesh Airlines &nbsp;
                                                        BG435</span>
                                                    <span class="flightNumber">BOEING 737-800 - 738</span>
                                                </div>
                                                <div class="flight_inner_show_component">
                                                    <div class="flight_det_wrapper">
                                                        <div class="flight_det">
                                                            <div class="code_time">
                                                                <span class="code">DAC</span>
                                                                <span class="time">15:00</span>
                                                            </div>
                                                            <p class="airport">Hazrat Shahjalal International Airport
                                                            </p>
                                                            <p class="date">7th Jun 2022</p>
                                                        </div>
                                                    </div>
                                                    <div class="flight_duration">
                                                        <div class="arrow_right"></div>
                                                        <span>01h 15m</span>
                                                    </div>
                                                    <div class="flight_det_wrapper">
                                                        <div class="flight_det">
                                                            <div class="code_time">
                                                                <span class="code">DAC</span>
                                                                <span class="time">15:00</span>
                                                            </div>
                                                            <p class="airport">Hazrat Shahjalal International Airport
                                                            </p>
                                                            <p class="date">7th Jun 2022</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flight_refund_policy">
                                                <div class="TabPanelInner flex_widht_less">
                                                    <h4>Refund Policy</h4>
                                                    <p class="fz12">1. Refund and Date Change are done as per the
                                                        following policies.</p>
                                                    <p class="fz12">2. Refund Amount= Refund Charge (as per airline
                                                        policy + ShareTrip Convenience Fee). </p>
                                                    <p class="fz12">3. Date Change Amount= Date Change Fee (as per
                                                        Airline Policy + ShareTrip Convenience Fee).</p>
                                                </div>
                                                <div class="TabPanelInner">
                                                    <h4>Baggage</h4>
                                                    <div class="flight_info_taable">
                                                        <h3>DAC-SPD</h3>
                                                        <p><span>20KG /</span> person</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flight_show_down_wrapper">
                                            <div class="flight-shoe_dow_item">
                                                <div class="airline-details">
                                                    <div class="img"><img src="assets/img/icon/bg.png" alt="img"></div>
                                                    <span class="airlineName fw-500">Biman Bangladesh Airlines &nbsp;
                                                        BG435</span>
                                                    <span class="flightNumber">BOEING 737-800 - 738</span>
                                                </div>
                                                <div class="flight_inner_show_component">
                                                    <div class="flight_det_wrapper">
                                                        <div class="flight_det">
                                                            <div class="code_time">
                                                                <span class="code">DAC</span>
                                                                <span class="time">15:00</span>
                                                            </div>
                                                            <p class="airport">Hazrat Shahjalal International Airport
                                                            </p>
                                                            <p class="date">7th Jun 2022</p>
                                                        </div>
                                                    </div>
                                                    <div class="flight_duration">
                                                        <div class="arrow_right"></div>
                                                        <span>01h 15m</span>
                                                    </div>
                                                    <div class="flight_det_wrapper">
                                                        <div class="flight_det">
                                                            <div class="code_time">
                                                                <span class="code">DAC</span>
                                                                <span class="time">15:00</span>
                                                            </div>
                                                            <p class="airport">Hazrat Shahjalal International Airport
                                                            </p>
                                                            <p class="date">7th Jun 2022</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flight_refund_policy">
                                                <div class="TabPanelInner flex_widht_less">
                                                    <h4>Refund Policy</h4>
                                                    <p class="fz12">1. Refund and Date Change are done as per the
                                                        following policies.</p>
                                                    <p class="fz12">2. Refund Amount= Refund Charge (as per airline
                                                        policy + ShareTrip Convenience Fee). </p>
                                                    <p class="fz12">3. Date Change Amount= Date Change Fee (as per
                                                        Airline Policy + ShareTrip Convenience Fee).</p>
                                                </div>
                                                <div class="TabPanelInner">
                                                    <h4>Baggage</h4>
                                                    <div class="flight_info_taable">
                                                        <h3>DAC-SPD</h3>
                                                        <p><span>20KG 1 /</span> person</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     
                                </div>
                                <!--Flight Search Data End-->
                               
                                
                            <div class="load_more_flight">
                            <form action="{{url('/all-flight')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                            <input type="hidden" name="journey_date" value="<?php echo $journey_date;?>"> 
                                            <input type="hidden" name="from" value="<?php echo $from;?>">
                                            <input type="hidden" name="to" value="<?php echo $to; ?>">
                                            <input type="hidden" name="adult" value="<?php echo $adult;?>">
                                            <input type="hidden" name="children" value="<?php echo $children ;?>">
                                            <input type="hidden" name="infant" value="<?php echo $infant ;?>"> 
                                            <input type="hidden" name="cabin_class" value="<?php echo $cabin_class;?>"> 
                                            <button class="btn btn_md"><i class="fas fa-spinner"></i> Load more..</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Price Filter--> 
@endif

        <!--Airlines Filter -->
@if(isset($airlines))         
          <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="flight_search_result_wrapper">
                                <div class="flight_search_item_wrappper">
                                    @if(isset($ress))
                                    
         @foreach($ress as $res)
@if(isset($res->Results))        
    <?php $dat = $res->Results;?>
            
    @foreach($dat as $dat1)
        @foreach($dat1 as $key=>$dat2)
          <!--Filter Price Condition -->
                             
        <?php  $Segments = $dat2->Segments; ?>
        
         @foreach( $Segments as $Segment)
            @foreach( $Segment as $Segm)
            @if($Segm->Airline->AirlineName == $airlines) 
          <?php $Origin = $Segm->Origin; ?>
         <?php  $Destination = $Segm->Destination; ?>
                
                                    <div class="flight_search_items">
                                        
                                        <div class="multi_city_flight_lists">
                                            <div class="left_side_search_heading">
                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                      <h5 class="apply" style="margin-left:10px;">Flight Name:  <?php echo $Segm->Airline->AirlineName; ?> </h5>
                                                                     </div>
                                                                     <div class="col-lg-6">
                                                                     <h5 class="apply" style="margin-left:10px;">Aircraft: <?php  echo $Segm->Craft; ?> </h5>
                                                                     </div>
                                                                 </div>     
                                        </div> 
                            <div class="flight_multis_area_wrapper"> 
                                            
                                                <div class="flight_search_left">
                                                    <div class="">
                                                        <img src="assets/AirlineLogo/<?php echo $dat2->AirlineCode;?>.gif" alt="img" style="height:100px;width:100px;object-fit: cover;">
                                                    </div>
                                                    <div class="flight_search_destination">
                                                        
                                                        <p>From</p>
                                                        <h3><?php echo $Origin->Airport->AirportCode; ?></h3>
                                                        <h6><?php echo $Origin->Airport->AirportName;?></h6>
                                                        <h6>Departure Time :</h6>
                                                        <h6>
                                                        <?php 
                                                            $input = $Origin->DepTime; 
                                                            $date = strtotime($input); 
                                                            echo date('d-M-Y h:i', $date); 
                                                            ?>
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="flight_search_middel">
                                                    <div class="flight_right_arrow">
                                                        <img src="assets/img/icon/right_arrow.png" alt="icon">
                                                        <h6>Non-stop</h6>
                                                        <p><?php  $minutes = $Segm->Duration; ?> 
                                                        <?php $hours = floor($minutes / 60);
                                                        $min = $minutes - ($hours * 60);
                                                        echo $hours."h : ".$min;echo"m ";
                                                        ?>        
                                                        </p>
                                                    </div>
                                                    <div class="flight_search_destination">
                                                        <p>To</p>
                                                         <h3><?php echo $Destination->Airport->AirportCode; ?></h3>
                                                        <h6><?php echo $Destination->Airport->AirportName;?></h6>
                                                        <h6>Arrival Time :</h6>
                                                        <h6>
                                                        <?php 
                                                            $input = $Destination->ArrTime;
                                                            $date = strtotime($input); 
                                                            echo date('d-M-Y h:i', $date); 
                                                            ?>
                                                            </h6>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="flight_search_right">
                                            <h5><del></del></h5>
                                            @if(session()->has('commision')) <?php $commision = session()->get('commision') ?>
                                            <h2><?php echo $dat2->Fare->Currency;?><?php $base123 = $dat2->Fare->PublishedFare;?> <?php $perce = $base123/100*$commision ?> <?php echo $perce + $base123; ?><sup>*% OFF</sup></h2>
                                            @else
                                            <h2><?php echo $dat2->Fare->Currency;?><?php echo $dat2->Fare->PublishedFare;?><sup>*% OFF</sup></h2>
                                            @endif
                                            <!--<a href="{{url('/flight_booking')}}" class="btn btn_theme btn_sm">Book-->
                                            <!--    now</a>-->
                                            <p>*Discount applicable on some conditions</p>
                                        @if($dat2->IsLCC == '1' )    
                                        <form action="{{url('/select_seat')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                            <input type="hidden" name="ResultIndex" value="<?php echo $dat2->ResultIndex;?>"> 
                                            <input type="hidden" name="TraceId" value="<?php echo $res->TraceId;?>">
                                            <input type="hidden" name="token_id" value="<?php echo $token_id; ?>">
                                            <input type="hidden" name="EndUserIp" value="192.168.11.120">
                                            <input type="hidden" name="BaseFare" value="<?php echo $dat2->Fare->BaseFare;?>">
                                            <input type="hidden" name="Currency" value="<?php echo $dat2->Fare->Currency ;?>">
                                            <input type="hidden" name="Tax" value="<?php echo $dat2->Fare->Tax ;?>"> 
                                            <input type="hidden" name="YQTax" value="<?php echo $dat2->Fare->YQTax;?>"> 
                                            <input type="hidden" name="AdditionalTxnFeeOfrd" value="<?php echo $dat2->Fare->AdditionalTxnFeeOfrd;?>"> 
                                            <input type="hidden" name="AdditionalTxnFeePub" value="<?php echo $dat2->Fare->AdditionalTxnFeePub;?>"> 
                                            <input type="hidden" name="OtherCharges" value="<?php echo $dat2->Fare->OtherCharges;?>">
                                            <input type="hidden" name="Discount" value="<?php echo $dat2->Fare->Discount;?>">
                                            <input type="hidden" name="PublishedFare" value="<?php echo $dat2->Fare->PublishedFare;?>">
                                            <input type="hidden" name="OfferedFare" value="<?php echo $dat2->Fare->OfferedFare;?>">
                                            <input type="hidden" name="TdsOnCommission" value="<?php echo $dat2->Fare->TdsOnCommission;?>">
                                            <input type="hidden" name="TdsOnPLB" value="<?php echo $dat2->Fare->TdsOnPLB;?>">
                                            <input type="hidden" name="TdsOnIncentive" value="<?php echo $dat2->Fare->TdsOnIncentive;?>">
                                            <input type="hidden" name="ServiceFee" value="<?php echo $dat2->Fare->ServiceFee;?>">
                                            <input type="hidden" name="Destination_name" value="<?php echo $Destination->Airport->AirportCode;?>">
                                            <input type="hidden" name="Destination_address" value="<?php echo $Destination->Airport->AirportName;?>">
                                            <input type="hidden" name="Source_name" value="<?php echo $Origin->Airport->AirportCode;?>">
                                            <input type="hidden" name="Source_address" value="<?php echo $Origin->Airport->AirportName;?>">
                                            <input type="hidden" name="Duration" value="<?php echo $Segm->Duration;?>">
                                            <input type="hidden" name="AirlineName" value="<?php echo $Segm->Airline->AirlineName;?>">
                                            
                                        <button class="btn btn_theme btn_sm">Select Seat</button>
                                        </form>
                                        @else 
                                        <form action="{{url('/book_now')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                            <input type="hidden" name="ResultIndex" value="<?php echo $dat2->ResultIndex;?>"> 
                                            <input type="hidden" name="TraceId" value="<?php echo $res->TraceId;?>">
                                            <input type="hidden" name="token_id" value="<?php echo $token_id; ?>">
                                            <input type="hidden" name="EndUserIp" value="192.168.11.120">
                                            <input type="hidden" name="BaseFare" value="<?php echo $dat2->Fare->BaseFare;?>">
                                            <input type="hidden" name="Currency" value="<?php echo $dat2->Fare->Currency ;?>">
                                            <input type="hidden" name="Tax" value="<?php echo $dat2->Fare->Tax ;?>"> 
                                            <input type="hidden" name="YQTax" value="<?php echo $dat2->Fare->YQTax;?>"> 
                                            <input type="hidden" name="AdditionalTxnFeeOfrd" value="<?php echo $dat2->Fare->AdditionalTxnFeeOfrd;?>"> 
                                            <input type="hidden" name="AdditionalTxnFeePub" value="<?php echo $dat2->Fare->AdditionalTxnFeePub;?>"> 
                                            <input type="hidden" name="OtherCharges" value="<?php echo $dat2->Fare->OtherCharges;?>">
                                            <input type="hidden" name="Discount" value="<?php echo $dat2->Fare->Discount;?>">
                                            <input type="hidden" name="PublishedFare" value="<?php echo $dat2->Fare->PublishedFare;?>">
                                            <input type="hidden" name="OfferedFare" value="<?php echo $dat2->Fare->OfferedFare;?>">
                                            <input type="hidden" name="TdsOnCommission" value="<?php echo $dat2->Fare->TdsOnCommission;?>">
                                            <input type="hidden" name="TdsOnPLB" value="<?php echo $dat2->Fare->TdsOnPLB;?>">
                                            <input type="hidden" name="TdsOnIncentive" value="<?php echo $dat2->Fare->TdsOnIncentive;?>">
                                            <input type="hidden" name="ServiceFee" value="<?php echo $dat2->Fare->ServiceFee;?>">
                                            <input type="hidden" name="Destination_name" value="<?php echo $Destination->Airport->AirportCode;?>">
                                            <input type="hidden" name="Destination_address" value="<?php echo $Destination->Airport->AirportName;?>">
                                            <input type="hidden" name="Source_name" value="<?php echo $Origin->Airport->AirportCode;?>">
                                            <input type="hidden" name="Source_address" value="<?php echo $Origin->Airport->AirportName;?>">
                                            <input type="hidden" name="Duration" value="<?php echo $Segm->Duration;?>">
                                            <input type="hidden" name="AirlineName" value="<?php echo $Segm->Airline->AirlineName;?>">
                                            
                                        <button class="btn btn_theme btn_sm">Book now</button>
                                        </form>
                                        @endif
                                         <!--<a href="{{url('/flight_booking')}}" class="btn btn_theme btn_sm">Book-->
                                         <!--       now</a>-->
                                            <!--<h6 data-bs-toggle="collapse" data-bs-target="#collapseExample"-->
                                            <!--    aria-expanded="false" aria-controls="collapseExample">Show more <i-->
                                            <!--        class="fas fa-chevron-down"></i></h6>-->
                                        </div>
                                    </div>
                                     &nbsp;
                                     
                                    @endif 
                                    @endforeach
                                    
                                @endforeach
                                <?php if($key == '20' ){ break;  }  ?>
                                 
                                @endforeach
                               
                                @endforeach
                                @endif
                                @endforeach
                                
                                @endif
                                    <div class="flight_policy_refund collapse" id="collapseExample">
                                        <div class="flight_show_down_wrapper">
                                            <div class="flight-shoe_dow_item">
                                                <div class="airline-details">
                                                    <div class="img"><img src="assets/img/icon/bg.png" alt="img"></div>
                                                    <span class="airlineName fw-500">Biman Bangladesh Airlines &nbsp;
                                                        BG435</span>
                                                    <span class="flightNumber">BOEING 737-800 - 738</span>
                                                </div>
                                                <div class="flight_inner_show_component">
                                                    <div class="flight_det_wrapper">
                                                        <div class="flight_det">
                                                            <div class="code_time">
                                                                <span class="code">DAC</span>
                                                                <span class="time">15:00</span>
                                                            </div>
                                                            <p class="airport">Hazrat Shahjalal International Airport
                                                            </p>
                                                            <p class="date">7th Jun 2022</p>
                                                        </div>
                                                    </div>
                                                    <div class="flight_duration">
                                                        <div class="arrow_right"></div>
                                                        <span>01h 15m</span>
                                                    </div>
                                                    <div class="flight_det_wrapper">
                                                        <div class="flight_det">
                                                            <div class="code_time">
                                                                <span class="code">DAC</span>
                                                                <span class="time">15:00</span>
                                                            </div>
                                                            <p class="airport">Hazrat Shahjalal International Airport
                                                            </p>
                                                            <p class="date">7th Jun 2022</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flight_refund_policy">
                                                <div class="TabPanelInner flex_widht_less">
                                                    <h4>Refund Policy</h4>
                                                    <p class="fz12">1. Refund and Date Change are done as per the
                                                        following policies.</p>
                                                    <p class="fz12">2. Refund Amount= Refund Charge (as per airline
                                                        policy + ShareTrip Convenience Fee). </p>
                                                    <p class="fz12">3. Date Change Amount= Date Change Fee (as per
                                                        Airline Policy + ShareTrip Convenience Fee).</p>
                                                </div>
                                                <div class="TabPanelInner">
                                                    <h4>Baggage</h4>
                                                    <div class="flight_info_taable">
                                                        <h3>DAC-SPD</h3>
                                                        <p><span>20KG /</span> person</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flight_show_down_wrapper">
                                            <div class="flight-shoe_dow_item">
                                                <div class="airline-details">
                                                    <div class="img"><img src="assets/img/icon/bg.png" alt="img"></div>
                                                    <span class="airlineName fw-500">Biman Bangladesh Airlines &nbsp;
                                                        BG435</span>
                                                    <span class="flightNumber">BOEING 737-800 - 738</span>
                                                </div>
                                                <div class="flight_inner_show_component">
                                                    <div class="flight_det_wrapper">
                                                        <div class="flight_det">
                                                            <div class="code_time">
                                                                <span class="code">DAC</span>
                                                                <span class="time">15:00</span>
                                                            </div>
                                                            <p class="airport">Hazrat Shahjalal International Airport
                                                            </p>
                                                            <p class="date">7th Jun 2022</p>
                                                        </div>
                                                    </div>
                                                    <div class="flight_duration">
                                                        <div class="arrow_right"></div>
                                                        <span>01h 15m</span>
                                                    </div>
                                                    <div class="flight_det_wrapper">
                                                        <div class="flight_det">
                                                            <div class="code_time">
                                                                <span class="code">DAC</span>
                                                                <span class="time">15:00</span>
                                                            </div>
                                                            <p class="airport">Hazrat Shahjalal International Airport
                                                            </p>
                                                            <p class="date">7th Jun 2022</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flight_refund_policy">
                                                <div class="TabPanelInner flex_widht_less">
                                                    <h4>Refund Policy</h4>
                                                    <p class="fz12">1. Refund and Date Change are done as per the
                                                        following policies.</p>
                                                    <p class="fz12">2. Refund Amount= Refund Charge (as per airline
                                                        policy + ShareTrip Convenience Fee). </p>
                                                    <p class="fz12">3. Date Change Amount= Date Change Fee (as per
                                                        Airline Policy + ShareTrip Convenience Fee).</p>
                                                </div>
                                                <div class="TabPanelInner">
                                                    <h4>Baggage</h4>
                                                    <div class="flight_info_taable">
                                                        <h3>DAC-SPD</h3>
                                                        <p><span>20KG /</span> person</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flight_show_down_wrapper">
                                            <div class="flight-shoe_dow_item">
                                                <div class="airline-details">
                                                    <div class="img"><img src="assets/img/icon/bg.png" alt="img"></div>
                                                    <span class="airlineName fw-500">Biman Bangladesh Airlines &nbsp;
                                                        BG435</span>
                                                    <span class="flightNumber">BOEING 737-800 - 738</span>
                                                </div>
                                                <div class="flight_inner_show_component">
                                                    <div class="flight_det_wrapper">
                                                        <div class="flight_det">
                                                            <div class="code_time">
                                                                <span class="code">DAC</span>
                                                                <span class="time">15:00</span>
                                                            </div>
                                                            <p class="airport">Hazrat Shahjalal International Airport
                                                            </p>
                                                            <p class="date">7th Jun 2022</p>
                                                        </div>
                                                    </div>
                                                    <div class="flight_duration">
                                                        <div class="arrow_right"></div>
                                                        <span>01h 15m</span>
                                                    </div>
                                                    <div class="flight_det_wrapper">
                                                        <div class="flight_det">
                                                            <div class="code_time">
                                                                <span class="code">DAC</span>
                                                                <span class="time">15:00</span>
                                                            </div>
                                                            <p class="airport">Hazrat Shahjalal International Airport
                                                            </p>
                                                            <p class="date">7th Jun 2022</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flight_refund_policy">
                                                <div class="TabPanelInner flex_widht_less">
                                                    <h4>Refund Policy</h4>
                                                    <p class="fz12">1. Refund and Date Change are done as per the
                                                        following policies.</p>
                                                    <p class="fz12">2. Refund Amount= Refund Charge (as per airline
                                                        policy + ShareTrip Convenience Fee). </p>
                                                    <p class="fz12">3. Date Change Amount= Date Change Fee (as per
                                                        Airline Policy + ShareTrip Convenience Fee).</p>
                                                </div>
                                                <div class="TabPanelInner">
                                                    <h4>Baggage</h4>
                                                    <div class="flight_info_taable">
                                                        <h3>DAC-SPD</h3>
                                                        <p><span>20KG 1 /</span> person</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     
                                </div>
                                <!--Flight Search Data End-->
                               
                                
                            <div class="load_more_flight">
                            <form action="{{url('/all-flight')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                            <input type="hidden" name="journey_date" value="<?php echo $journey_date;?>"> 
                                            <input type="hidden" name="from" value="<?php echo $from;?>">
                                            <input type="hidden" name="to" value="<?php echo $to; ?>">
                                            <input type="hidden" name="adult" value="<?php echo $adult;?>">
                                            <input type="hidden" name="children" value="<?php echo $children ;?>">
                                            <input type="hidden" name="infant" value="<?php echo $infant ;?>"> 
                                            <input type="hidden" name="cabin_class" value="<?php echo $cabin_class;?>"> 
                                            <button class="btn btn_md"><i class="fas fa-spinner"></i> Load more..</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Airline--> 
@endif

        <!--Flight Search Data Start--> 
@if(isset($refundable))         
          <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="flight_search_result_wrapper">
                                <div class="flight_search_item_wrappper">
                                    @if(isset($ress))
                                    
         @foreach($ress as $res)
@if(isset($res->Results))        
    <?php $dat = $res->Results;?>
            
    @foreach($dat as $dat1)
        @foreach($dat1 as $key=>$dat2)
          <!--Filter Price Condition -->
                    @if($dat2->IsRefundable == $refundable)          
        <?php  $Segments = $dat2->Segments; ?>
        
         @foreach( $Segments as $Segment)
            @foreach( $Segment as $Segm)
          <?php $Origin = $Segm->Origin; ?>
         <?php  $Destination = $Segm->Destination; ?>
                
                                    <div class="flight_search_items">
                                        
                                        <div class="multi_city_flight_lists">
                                            <div class="left_side_search_heading">
                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                      <h5 class="apply" style="margin-left:10px;">Flight Name:  <?php echo $Segm->Airline->AirlineName; ?> </h5>
                                                                     </div>
                                                                     <div class="col-lg-6">
                                                                     <h5 class="apply" style="margin-left:10px;">Aircraft: <?php  echo $Segm->Craft; ?> </h5>
                                                                     </div>
                                                                 </div>     
                                        </div> 
                            <div class="flight_multis_area_wrapper"> 
                                            
                                                <div class="flight_search_left">
                                                    <div class="">
                                                        <img src="assets/AirlineLogo/<?php echo $dat2->AirlineCode;?>.gif" alt="img" style="height:100px;width:100px;object-fit: cover;">
                                                    </div>
                                                    <div class="flight_search_destination">
                                                        
                                                        <p>From</p>
                                                        <h3><?php echo $Origin->Airport->AirportCode; ?></h3>
                                                        <h6><?php echo $Origin->Airport->AirportName;?></h6>
                                                        <h6>Departure Time :</h6>
                                                        <h6>
                                                        <?php 
                                                            $input = $Origin->DepTime; 
                                                            $date = strtotime($input); 
                                                            echo date('d-M-Y h:i', $date); 
                                                            ?>
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="flight_search_middel">
                                                    <div class="flight_right_arrow">
                                                        <img src="assets/img/icon/right_arrow.png" alt="icon">
                                                        <h6>Non-stop</h6>
                                                        <p><?php  $minutes = $Segm->Duration; ?> 
                                                        <?php $hours = floor($minutes / 60);
                                                        $min = $minutes - ($hours * 60);
                                                        echo $hours."h : ".$min;echo"m ";
                                                        ?>        
                                                        </p>
                                                    </div>
                                                    <div class="flight_search_destination">
                                                        <p>To</p>
                                                         <h3><?php echo $Destination->Airport->AirportCode; ?></h3>
                                                        <h6><?php echo $Destination->Airport->AirportName;?></h6>
                                                        <h6>Arrival Time :</h6>
                                                        <h6>
                                                        <?php 
                                                            $input = $Destination->ArrTime;
                                                            $date = strtotime($input); 
                                                            echo date('d-M-Y h:i', $date); 
                                                            ?>
                                                            </h6>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="flight_search_right">
                                            <h5><del></del></h5>
                                            @if(session()->has('commision')) <?php $commision = session()->get('commision') ?>
                                            <h2><?php echo $dat2->Fare->Currency;?><?php $base123 = $dat2->Fare->PublishedFare;?> <?php $perce = $base123/100*$commision ?> <?php echo $perce + $base123; ?><sup>*% OFF</sup></h2>
                                            @else
                                            <h2><?php echo $dat2->Fare->Currency;?><?php echo $dat2->Fare->PublishedFare;?><sup>*% OFF</sup></h2>
                                            @endif
                                            <!--<a href="{{url('/flight_booking')}}" class="btn btn_theme btn_sm">Book-->
                                            <!--    now</a>-->
                                            <p>*Discount applicable on some conditions</p>
                                        @if($dat2->IsLCC == '1' )    
                                        <form action="{{url('/select_seat')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                            <input type="hidden" name="ResultIndex" value="<?php echo $dat2->ResultIndex;?>"> 
                                            <input type="hidden" name="TraceId" value="<?php echo $res->TraceId;?>">
                                            <input type="hidden" name="token_id" value="<?php echo $token_id; ?>">
                                            <input type="hidden" name="EndUserIp" value="192.168.11.120">
                                            <input type="hidden" name="BaseFare" value="<?php echo $dat2->Fare->BaseFare;?>">
                                            <input type="hidden" name="Currency" value="<?php echo $dat2->Fare->Currency ;?>">
                                            <input type="hidden" name="Tax" value="<?php echo $dat2->Fare->Tax ;?>"> 
                                            <input type="hidden" name="YQTax" value="<?php echo $dat2->Fare->YQTax;?>"> 
                                            <input type="hidden" name="AdditionalTxnFeeOfrd" value="<?php echo $dat2->Fare->AdditionalTxnFeeOfrd;?>"> 
                                            <input type="hidden" name="AdditionalTxnFeePub" value="<?php echo $dat2->Fare->AdditionalTxnFeePub;?>"> 
                                            <input type="hidden" name="OtherCharges" value="<?php echo $dat2->Fare->OtherCharges;?>">
                                            <input type="hidden" name="Discount" value="<?php echo $dat2->Fare->Discount;?>">
                                            <input type="hidden" name="PublishedFare" value="<?php echo $dat2->Fare->PublishedFare;?>">
                                            <input type="hidden" name="OfferedFare" value="<?php echo $dat2->Fare->OfferedFare;?>">
                                            <input type="hidden" name="TdsOnCommission" value="<?php echo $dat2->Fare->TdsOnCommission;?>">
                                            <input type="hidden" name="TdsOnPLB" value="<?php echo $dat2->Fare->TdsOnPLB;?>">
                                            <input type="hidden" name="TdsOnIncentive" value="<?php echo $dat2->Fare->TdsOnIncentive;?>">
                                            <input type="hidden" name="ServiceFee" value="<?php echo $dat2->Fare->ServiceFee;?>">
                                            <input type="hidden" name="Destination_name" value="<?php echo $Destination->Airport->AirportCode;?>">
                                            <input type="hidden" name="Destination_address" value="<?php echo $Destination->Airport->AirportName;?>">
                                            <input type="hidden" name="Source_name" value="<?php echo $Origin->Airport->AirportCode;?>">
                                            <input type="hidden" name="Source_address" value="<?php echo $Origin->Airport->AirportName;?>">
                                            <input type="hidden" name="Duration" value="<?php echo $Segm->Duration;?>">
                                            <input type="hidden" name="AirlineName" value="<?php echo $Segm->Airline->AirlineName;?>">
                                            
                                        <button class="btn btn_theme btn_sm">Select Seat</button>
                                        </form>
                                        @else 
                                        <form action="{{url('/book_now')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                            <input type="hidden" name="ResultIndex" value="<?php echo $dat2->ResultIndex;?>"> 
                                            <input type="hidden" name="TraceId" value="<?php echo $res->TraceId;?>">
                                            <input type="hidden" name="token_id" value="<?php echo $token_id; ?>">
                                            <input type="hidden" name="EndUserIp" value="192.168.11.120">
                                            <input type="hidden" name="BaseFare" value="<?php echo $dat2->Fare->BaseFare;?>">
                                            <input type="hidden" name="Currency" value="<?php echo $dat2->Fare->Currency ;?>">
                                            <input type="hidden" name="Tax" value="<?php echo $dat2->Fare->Tax ;?>"> 
                                            <input type="hidden" name="YQTax" value="<?php echo $dat2->Fare->YQTax;?>"> 
                                            <input type="hidden" name="AdditionalTxnFeeOfrd" value="<?php echo $dat2->Fare->AdditionalTxnFeeOfrd;?>"> 
                                            <input type="hidden" name="AdditionalTxnFeePub" value="<?php echo $dat2->Fare->AdditionalTxnFeePub;?>"> 
                                            <input type="hidden" name="OtherCharges" value="<?php echo $dat2->Fare->OtherCharges;?>">
                                            <input type="hidden" name="Discount" value="<?php echo $dat2->Fare->Discount;?>">
                                            <input type="hidden" name="PublishedFare" value="<?php echo $dat2->Fare->PublishedFare;?>">
                                            <input type="hidden" name="OfferedFare" value="<?php echo $dat2->Fare->OfferedFare;?>">
                                            <input type="hidden" name="TdsOnCommission" value="<?php echo $dat2->Fare->TdsOnCommission;?>">
                                            <input type="hidden" name="TdsOnPLB" value="<?php echo $dat2->Fare->TdsOnPLB;?>">
                                            <input type="hidden" name="TdsOnIncentive" value="<?php echo $dat2->Fare->TdsOnIncentive;?>">
                                            <input type="hidden" name="ServiceFee" value="<?php echo $dat2->Fare->ServiceFee;?>">
                                            <input type="hidden" name="Destination_name" value="<?php echo $Destination->Airport->AirportCode;?>">
                                            <input type="hidden" name="Destination_address" value="<?php echo $Destination->Airport->AirportName;?>">
                                            <input type="hidden" name="Source_name" value="<?php echo $Origin->Airport->AirportCode;?>">
                                            <input type="hidden" name="Source_address" value="<?php echo $Origin->Airport->AirportName;?>">
                                            <input type="hidden" name="Duration" value="<?php echo $Segm->Duration;?>">
                                            <input type="hidden" name="AirlineName" value="<?php echo $Segm->Airline->AirlineName;?>">
                                            
                                        <button class="btn btn_theme btn_sm">Book now</button>
                                        </form>
                                        @endif
                                         <!--<a href="{{url('/flight_booking')}}" class="btn btn_theme btn_sm">Book-->
                                         <!--       now</a>-->
                                            <!--<h6 data-bs-toggle="collapse" data-bs-target="#collapseExample"-->
                                            <!--    aria-expanded="false" aria-controls="collapseExample">Show more <i-->
                                            <!--        class="fas fa-chevron-down"></i></h6>-->
                                        </div>
                                    </div>
                                     &nbsp;
                                    @endforeach
                                    
                                @endforeach
                                <?php if($key == '20' ){ break;  }  ?>
                                 @endif
                                @endforeach
                               
                                @endforeach
                                @endif
                                @endforeach
                                
                                @endif
                                    <div class="flight_policy_refund collapse" id="collapseExample">
                                        <div class="flight_show_down_wrapper">
                                            <div class="flight-shoe_dow_item">
                                                <div class="airline-details">
                                                    <div class="img"><img src="assets/img/icon/bg.png" alt="img"></div>
                                                    <span class="airlineName fw-500">Biman Bangladesh Airlines &nbsp;
                                                        BG435</span>
                                                    <span class="flightNumber">BOEING 737-800 - 738</span>
                                                </div>
                                                <div class="flight_inner_show_component">
                                                    <div class="flight_det_wrapper">
                                                        <div class="flight_det">
                                                            <div class="code_time">
                                                                <span class="code">DAC</span>
                                                                <span class="time">15:00</span>
                                                            </div>
                                                            <p class="airport">Hazrat Shahjalal International Airport
                                                            </p>
                                                            <p class="date">7th Jun 2022</p>
                                                        </div>
                                                    </div>
                                                    <div class="flight_duration">
                                                        <div class="arrow_right"></div>
                                                        <span>01h 15m</span>
                                                    </div>
                                                    <div class="flight_det_wrapper">
                                                        <div class="flight_det">
                                                            <div class="code_time">
                                                                <span class="code">DAC</span>
                                                                <span class="time">15:00</span>
                                                            </div>
                                                            <p class="airport">Hazrat Shahjalal International Airport
                                                            </p>
                                                            <p class="date">7th Jun 2022</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flight_refund_policy">
                                                <div class="TabPanelInner flex_widht_less">
                                                    <h4>Refund Policy</h4>
                                                    <p class="fz12">1. Refund and Date Change are done as per the
                                                        following policies.</p>
                                                    <p class="fz12">2. Refund Amount= Refund Charge (as per airline
                                                        policy + ShareTrip Convenience Fee). </p>
                                                    <p class="fz12">3. Date Change Amount= Date Change Fee (as per
                                                        Airline Policy + ShareTrip Convenience Fee).</p>
                                                </div>
                                                <div class="TabPanelInner">
                                                    <h4>Baggage</h4>
                                                    <div class="flight_info_taable">
                                                        <h3>DAC-SPD</h3>
                                                        <p><span>20KG /</span> person</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flight_show_down_wrapper">
                                            <div class="flight-shoe_dow_item">
                                                <div class="airline-details">
                                                    <div class="img"><img src="assets/img/icon/bg.png" alt="img"></div>
                                                    <span class="airlineName fw-500">Biman Bangladesh Airlines &nbsp;
                                                        BG435</span>
                                                    <span class="flightNumber">BOEING 737-800 - 738</span>
                                                </div>
                                                <div class="flight_inner_show_component">
                                                    <div class="flight_det_wrapper">
                                                        <div class="flight_det">
                                                            <div class="code_time">
                                                                <span class="code">DAC</span>
                                                                <span class="time">15:00</span>
                                                            </div>
                                                            <p class="airport">Hazrat Shahjalal International Airport
                                                            </p>
                                                            <p class="date">7th Jun 2022</p>
                                                        </div>
                                                    </div>
                                                    <div class="flight_duration">
                                                        <div class="arrow_right"></div>
                                                        <span>01h 15m</span>
                                                    </div>
                                                    <div class="flight_det_wrapper">
                                                        <div class="flight_det">
                                                            <div class="code_time">
                                                                <span class="code">DAC</span>
                                                                <span class="time">15:00</span>
                                                            </div>
                                                            <p class="airport">Hazrat Shahjalal International Airport
                                                            </p>
                                                            <p class="date">7th Jun 2022</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flight_refund_policy">
                                                <div class="TabPanelInner flex_widht_less">
                                                    <h4>Refund Policy</h4>
                                                    <p class="fz12">1. Refund and Date Change are done as per the
                                                        following policies.</p>
                                                    <p class="fz12">2. Refund Amount= Refund Charge (as per airline
                                                        policy + ShareTrip Convenience Fee). </p>
                                                    <p class="fz12">3. Date Change Amount= Date Change Fee (as per
                                                        Airline Policy + ShareTrip Convenience Fee).</p>
                                                </div>
                                                <div class="TabPanelInner">
                                                    <h4>Baggage</h4>
                                                    <div class="flight_info_taable">
                                                        <h3>DAC-SPD</h3>
                                                        <p><span>20KG /</span> person</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flight_show_down_wrapper">
                                            <div class="flight-shoe_dow_item">
                                                <div class="airline-details">
                                                    <div class="img"><img src="assets/img/icon/bg.png" alt="img"></div>
                                                    <span class="airlineName fw-500">Biman Bangladesh Airlines &nbsp;
                                                        BG435</span>
                                                    <span class="flightNumber">BOEING 737-800 - 738</span>
                                                </div>
                                                <div class="flight_inner_show_component">
                                                    <div class="flight_det_wrapper">
                                                        <div class="flight_det">
                                                            <div class="code_time">
                                                                <span class="code">DAC</span>
                                                                <span class="time">15:00</span>
                                                            </div>
                                                            <p class="airport">Hazrat Shahjalal International Airport
                                                            </p>
                                                            <p class="date">7th Jun 2022</p>
                                                        </div>
                                                    </div>
                                                    <div class="flight_duration">
                                                        <div class="arrow_right"></div>
                                                        <span>01h 15m</span>
                                                    </div>
                                                    <div class="flight_det_wrapper">
                                                        <div class="flight_det">
                                                            <div class="code_time">
                                                                <span class="code">DAC</span>
                                                                <span class="time">15:00</span>
                                                            </div>
                                                            <p class="airport">Hazrat Shahjalal International Airport
                                                            </p>
                                                            <p class="date">7th Jun 2022</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flight_refund_policy">
                                                <div class="TabPanelInner flex_widht_less">
                                                    <h4>Refund Policy</h4>
                                                    <p class="fz12">1. Refund and Date Change are done as per the
                                                        following policies.</p>
                                                    <p class="fz12">2. Refund Amount= Refund Charge (as per airline
                                                        policy + ShareTrip Convenience Fee). </p>
                                                    <p class="fz12">3. Date Change Amount= Date Change Fee (as per
                                                        Airline Policy + ShareTrip Convenience Fee).</p>
                                                </div>
                                                <div class="TabPanelInner">
                                                    <h4>Baggage</h4>
                                                    <div class="flight_info_taable">
                                                        <h3>DAC-SPD</h3>
                                                        <p><span>20KG 1 /</span> person</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     
                                </div>
                                <!--Flight Search Data End-->
                               
                                
                            <div class="load_more_flight">
                            <form action="{{url('/all-flight')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                            <input type="hidden" name="journey_date" value="<?php echo $journey_date;?>"> 
                                            <input type="hidden" name="from" value="<?php echo $from;?>">
                                            <input type="hidden" name="to" value="<?php echo $to; ?>">
                                            <input type="hidden" name="adult" value="<?php echo $adult;?>">
                                            <input type="hidden" name="children" value="<?php echo $children ;?>">
                                            <input type="hidden" name="infant" value="<?php echo $infant ;?>"> 
                                            <input type="hidden" name="cabin_class" value="<?php echo $cabin_class;?>"> 
                                            <button class="btn btn_md"><i class="fas fa-spinner"></i> Load more..</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
@endif    
@if(isset($fli_data)) 
<div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="flight_search_result_wrapper">
                                <div class="flight_search_item_wrappper">
                                    @if(isset($ress))
                                    
         @foreach($ress as $res)
@if(isset($res->Results))        
    <?php $dat = $res->Results;?>
            
    @foreach($dat as $dat1)
        @foreach($dat1 as $key=>$dat2)
        
        <?php  $Segments = $dat2->Segments; ?>
        <?php  $FareRules = $dat2->FareRules; ?>
         @foreach( $Segments as $Segment)
            @foreach( $Segment as $Segm)
          <?php $Origin = $Segm->Origin; ?> 
          
         <?php  $Destination = $Segm->Destination; ?>
                @if($Origin->Airport->AirportCode == $from)
                                    <div class="flight_search_items">
                                        
                                        <div class="multi_city_flight_lists">
                                            <div class="left_side_search_heading">
                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                      <h5 class="apply" style="margin-left:10px;"> <?php echo $Segm->Airline->AirlineName; ?> </h5>
                                                                     </div>
                                                                     <div class="col-lg-6">
                                                                     <h5 class="apply" style="margin-left:10px;">Aircraft: <?php  echo $Segm->Craft; ?> </h5>
                                                                     </div>
                                                                 </div>     
                                        </div> 
                            <div class="flight_multis_area_wrapper"> 
                                            
                                                <div class="flight_search_left">
                                                    <div class="">
                                                        <img src="assets/AirlineLogo/<?php echo $dat2->AirlineCode;?>.gif" alt="img" style="height:30px;width:30px;object-fit: cover;">
                                                    </div>
                                                    <div class="flight_search_destination">
                                                        
                                                        <p>From</p>
                                                        <h3><?php echo $Origin->Airport->AirportCode; ?></h3>
                                                        <h6><?php echo $Origin->Airport->AirportName;?></h6>
                                                        <h6>Departure Time :</h6>
                                                        <h6>
                                                        <?php 
                                                            $input = $Origin->DepTime; 
                                                            $date = strtotime($input); 
                                                            echo date('d-M-Y h:i a', $date); 
                                                            ?>
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="flight_search_middel">
                                                    <div class="flight_right_arrow">
                                                        <img src="assets/img/icon/right_arrow.png" alt="icon">
                                                        <h6>Non-stop</h6>
                                                        <p><?php  $minutes = $Segm->Duration; ?> 
                                                        <?php $hours = floor($minutes / 60);
                                                        $min = $minutes - ($hours * 60);
                                                        echo $hours."h : ".$min;echo"m ";
                                                        ?>        
                                                        </p>
                                                    </div>
                                                    <div class="flight_search_destination">
                                                        <p>To</p>
                                                         <h3><?php echo $Destination->Airport->AirportCode; ?></h3>
                                                        <h6><?php echo $Destination->Airport->AirportName;?></h6>
                                                        <h6>Arrival Time :</h6>
                                                        <h6>
                                                        <?php 
                                                            $input = $Destination->ArrTime;
                                                            $date = strtotime($input); 
                                                            echo date('d-M-Y h:i a', $date); 
                                                            ?>
                                                            </h6>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="flight_search_right">
                                            <h5><del></del></h5>
                                            @if(session()->has('commision')) <?php $commision = session()->get('commision') ?>
                                            <h2><?php echo $dat2->Fare->Currency;?><?php $base123 = $dat2->Fare->PublishedFare;?> <?php $perce = $base123/100*$commision ?> <?php echo $perce + $base123; ?><sup>*% OFF</sup></h2>
                                            @else
                                            <h2><?php echo $dat2->Fare->Currency;?><?php echo $dat2->Fare->PublishedFare;?><sup>*% OFF</sup></h2><sub style="width:10px;height:10px;"> / Adult X {{$adult}}</sub>
                                            @endif
                                            <!--<a href="{{url('/flight_booking')}}" class="btn btn_theme btn_sm">Book-->
                                            <!--    now</a>-->
                                            <p>*Discount applicable on some conditions</p>
                                        @if($dat2->IsLCC == '1' )    
                                        <form action="{{url('/select_seat')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                            <input type="hidden" name="ResultIndex" value="<?php echo $dat2->ResultIndex;?>"> 
                                            <input type="hidden" name="TraceId" value="<?php echo $res->TraceId;?>">
                                            <input type="hidden" name="token_id" value="<?php echo $token_id; ?>">
                                            <input type="hidden" name="EndUserIp" value="192.168.11.120">
                                            <input type="hidden" name="BaseFare" value="<?php echo $dat2->Fare->BaseFare;?>">
                                            <input type="hidden" name="Currency" value="<?php echo $dat2->Fare->Currency ;?>">
                                            <input type="hidden" name="Tax" value="<?php echo $dat2->Fare->Tax ;?>"> 
                                            <input type="hidden" name="YQTax" value="<?php echo $dat2->Fare->YQTax;?>"> 
                                            <input type="hidden" name="AdditionalTxnFeeOfrd" value="<?php echo $dat2->Fare->AdditionalTxnFeeOfrd;?>"> 
                                            <input type="hidden" name="AdditionalTxnFeePub" value="<?php echo $dat2->Fare->AdditionalTxnFeePub;?>"> 
                                            <input type="hidden" name="OtherCharges" value="<?php echo $dat2->Fare->OtherCharges;?>">
                                            <input type="hidden" name="Discount" value="<?php echo $dat2->Fare->Discount;?>">
                                            <input type="hidden" name="PublishedFare" value="<?php echo $dat2->Fare->PublishedFare;?>">
                                            <input type="hidden" name="OfferedFare" value="<?php echo $dat2->Fare->OfferedFare;?>">
                                            <input type="hidden" name="TdsOnCommission" value="<?php echo $dat2->Fare->TdsOnCommission;?>">
                                            <input type="hidden" name="TdsOnPLB" value="<?php echo $dat2->Fare->TdsOnPLB;?>">
                                            <input type="hidden" name="TdsOnIncentive" value="<?php echo $dat2->Fare->TdsOnIncentive;?>">
                                            <input type="hidden" name="ServiceFee" value="<?php echo $dat2->Fare->ServiceFee;?>">
                                            <input type="hidden" name="Destination_name" value="<?php echo $Destination->Airport->AirportCode;?>">
                                            <input type="hidden" name="Destination_address" value="<?php echo $Destination->Airport->AirportName;?>">
                                            <input type="hidden" name="Source_name" value="<?php echo $Origin->Airport->AirportCode;?>">
                                            <input type="hidden" name="Source_address" value="<?php echo $Origin->Airport->AirportName;?>">
                                            <input type="hidden" name="Duration" value="<?php echo $Segm->Duration;?>">
                                            <input type="hidden" name="AirlineName" value="<?php echo $Segm->Airline->AirlineName;?>">
                                            
                                        <button class="btn btn_theme btn_sm">Select Seat</button>
                                        </form>
                                        @else 
                                        <form action="{{url('/book_now')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                            <input type="hidden" name="ResultIndex" value="<?php echo $dat2->ResultIndex;?>"> 
                                            <input type="hidden" name="TraceId" value="<?php echo $res->TraceId;?>">
                                            <input type="hidden" name="token_id" value="<?php echo $token_id; ?>">
                                            <input type="hidden" name="EndUserIp" value="192.168.11.120">
                                            <input type="hidden" name="BaseFare" value="<?php echo $dat2->Fare->BaseFare;?>">
                                            <input type="hidden" name="Currency" value="<?php echo $dat2->Fare->Currency ;?>">
                                            <input type="hidden" name="Tax" value="<?php echo $dat2->Fare->Tax ;?>"> 
                                            <input type="hidden" name="YQTax" value="<?php echo $dat2->Fare->YQTax;?>"> 
                                            <input type="hidden" name="AdditionalTxnFeeOfrd" value="<?php echo $dat2->Fare->AdditionalTxnFeeOfrd;?>"> 
                                            <input type="hidden" name="AdditionalTxnFeePub" value="<?php echo $dat2->Fare->AdditionalTxnFeePub;?>"> 
                                            <input type="hidden" name="OtherCharges" value="<?php echo $dat2->Fare->OtherCharges;?>">
                                            <input type="hidden" name="Discount" value="<?php echo $dat2->Fare->Discount;?>">
                                            <input type="hidden" name="PublishedFare" value="<?php echo $dat2->Fare->PublishedFare;?>">
                                            <input type="hidden" name="OfferedFare" value="<?php echo $dat2->Fare->OfferedFare;?>">
                                            <input type="hidden" name="TdsOnCommission" value="<?php echo $dat2->Fare->TdsOnCommission;?>">
                                            <input type="hidden" name="TdsOnPLB" value="<?php echo $dat2->Fare->TdsOnPLB;?>">
                                            <input type="hidden" name="TdsOnIncentive" value="<?php echo $dat2->Fare->TdsOnIncentive;?>">
                                            <input type="hidden" name="ServiceFee" value="<?php echo $dat2->Fare->ServiceFee;?>">
                                            <input type="hidden" name="Destination_name" value="<?php echo $Destination->Airport->AirportCode;?>">
                                            <input type="hidden" name="Destination_address" value="<?php echo $Destination->Airport->AirportName;?>">
                                            <input type="hidden" name="Source_name" value="<?php echo $Origin->Airport->AirportCode;?>">
                                            <input type="hidden" name="Source_address" value="<?php echo $Origin->Airport->AirportName;?>">
                                            <input type="hidden" name="Duration" value="<?php echo $Segm->Duration;?>">
                                            <input type="hidden" name="AirlineName" value="<?php echo $Segm->Airline->AirlineName;?>">
                                            <input type="hidden" name="DepTime" value="<?php echo $Origin->DepTime;?>">
                                            <input type="hidden" name="ArrTime" value="<?php echo $Destination->ArrTime;?>">
                                            <input type="hidden" name="adult" value="<?php echo $adult;?>">
                                            
                                        <button class="btn btn_theme btn_sm">Book now</button>
                                        </form>
                                        @endif
                                         <!--<a href="{{url('/flight_booking')}}" class="btn btn_theme btn_sm">Book-->
                                         <!--       now</a>-->
                                            <h6 data-bs-toggle="collapse" data-bs-target="#collapseExample<?php echo $dat2->ResultIndex;?>"
                                                aria-expanded="false" aria-controls="collapseExample">Show more <i
                                                    class="fas fa-chevron-down"></i></h6>
                                        </div>
                                    </div>
                                        @endif 
                                    @endforeach
                                    
                                @endforeach
                                    @foreach( $Segments as $Segment)
                                    @foreach( $Segment as $Segm)
                                    <?php $Origin = $Segm->Origin; ?> 
                                    <?php $Airline = $Segm->Airline; ?> 
                                     
                                    <?php  $Destination = $Segm->Destination; ?>
                                     
                                    <div class="flight_policy_refund collapse" id="collapseExample<?php echo $dat2->ResultIndex;?>">
                                        <div class="flight_show_down_wrapper">
                                            <div class="flight-shoe_dow_item">
                                                <div class="airline-details">
                                                    <div class="img"><img src="assets/AirlineLogo/<?php  echo  $Airline->AirlineCode; ?>.gif" alt="img"></div>
                                                    <span class="airlineName fw-500"><?php  echo  $Airline->FlightNumber; ?> &nbsp;
                                                        </span>
                                                    <span class="flightNumber"></span>
                                                </div>
                                                <div class="flight_inner_show_component">
                                                    <div class="flight_det_wrapper">
                                                        <div class="flight_det">
                                                            <div class="code_time">
                                                                <p>From</p>
                                                                <span class="time"><?php  echo  $Origin->Airport->AirportCode; ?></span>
                                                                <span class="time"><?php 
                                                            $input = $Origin->DepTime; 
                                                            $date = strtotime($input); 
                                                            echo date('h:i a', $date); 
                                                            ?></span>
                                                             <h6><?php echo $Origin->Airport->AirportName;?>,<?php echo $Origin->Airport->CityName;?>,<?php echo $Origin->Airport->CountryName;?></h6>
                                                               
                                                            </div>
                                                            <p class="airport">
                                                            </p>
                                                            <h6><?php 
                                                            $input = $Origin->DepTime; 
                                                            $date = strtotime($input); 
                                                            echo date('d-M-Y', $date); 
                                                            ?></h6>
                                                        </div>
                                                    </div>
                                                    <div class="flight_duration">
                                                        <div class="arrow_right"></div>
                                                        <h6><?php  $minutes = $Segm->Duration; ?> 
                                                        <?php $hours = floor($minutes / 60);
                                                        $min = $minutes - ($hours * 60);
                                                        echo $hours."h : ".$min;echo"m ";
                                                        ?>  </h6>
                                                    </div>
                                                    <div class="flight_det_wrapper">
                                                        <div class="flight_det">
                                                            <div class="code_time">
                                                                <p>To</p>
                                                                <span class="time"><?php echo $Destination->Airport->AirportCode; ?></span>
                                                                 <span class="time"><?php 
                                                            $input = $Destination->ArrTime;
                                                            $date = strtotime($input); 
                                                            echo date('h:i a', $date); 
                                                            ?></span>
                                                            <h6><?php echo $Destination->Airport->AirportName;?>,<?php echo $Destination->Airport->CityName;?>,<?php echo $Destination->Airport->CountryName;?></h6>
                                                               
                                                            </div>
                                                            <p class="airport">
                                                            </p>
                                                            <h6><?php 
                                                            $input = $Destination->ArrTime;
                                                            $date = strtotime($input); 
                                                            echo date('d-M-Y', $date); 
                                                            ?></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flight_refund_policy">
                                                <div class="TabPanelInner flex_widht_less">
                                                    <h4>Refund Policy</h4>
                                                    <p class="fz12">1. Refund and Date Change are done as per the
                                                        following policies.</p>
                                                    <p class="fz12">2. Refund Amount= Refund Charge (as per airline
                                                        policy + ShareTrip Convenience Fee). </p>
                                                    <p class="fz12">3. Date Change Amount= Date Change Fee (as per
                                                        Airline Policy + ShareTrip Convenience Fee).</p>
                                                </div>
                                                <div class="TabPanelInner">
                                                    <h4>Baggage</h4>
                                                    <div class="flight_info_taable">
                                                        <h3><?php echo $Segm->Baggage; ?></h3>
                                                        <p><span>/</span> person</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach 
                                    @endforeach 
                                
                                <?php if($key == '11' ){ break;  }  ?>
                                @endforeach
                               
                                @endforeach
                                @endif
                                @endforeach
                                
                                @endif
                                    
                                <!--Flight Search Data End-->
                               
                                
                            <div class="load_more_flight">
                            <form action="{{url('/all-flight')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                            <input type="hidden" name="journey_date" value="<?php echo $journey_date;?>"> 
                                            <input type="hidden" name="from" value="<?php echo $from;?>">
                                            <input type="hidden" name="to" value="<?php echo $to; ?>">
                                            <input type="hidden" name="adult" value="<?php echo $adult;?>">
                                            <input type="hidden" name="children" value="<?php echo $children ;?>">
                                            <input type="hidden" name="infant" value="<?php echo $infant ;?>"> 
                                            <input type="hidden" name="cabin_class" value="<?php echo $cabin_class;?>"> 
                                            <button class="btn btn_md"><i class="fas fa-spinner"></i> Load more..</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif    
    
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
                            <h3> <a href="tel:+00-123-456-789">+00 123 456 789</a></h3>
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
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="faqs.html">Rewards</a></li>
                            <li><a href="terms-service.html">Work with Us</a></li>
                            <li><a href="tour-guides.html">Meet the Team </a></li>
                            <li><a href="news.html">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="footer_heading_area">
                        <h5>Support</h5>
                    </div>
                    <div class="footer_link_area">
                        <ul>
                            <li><a href="dashboard.html">Account</a></li>
                            <li><a href="faq.html">Faq</a></li>
                            <li><a href="testimonials.html">Legal</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="top-destinations.html"> Affiliate Program</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="footer_heading_area">
                        <h5>Other Services</h5>
                    </div>
                    <div class="footer_link_area">
                        <ul>
                            <li><a href="top-destinations-details.html">Community program</a></li>
                            <li><a href="top-destinations-details.html">Investor Relations</a></li>
                            <li><a href="flight-search-result.html">Rewards Program</a></li>
                            <li><a href="room-booking.html">PointsPLUS</a></li>
                            <li><a href="testimonials.html">Partners</a></li>
                            <li><a href="hotel-search.html">List My Hotel</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="footer_heading_area">
                        <h5>Top cities</h5>
                    </div>
                    <div class="footer_link_area">
                        <ul>
                            <li><a href="room-details.html">Chicago</a></li>
                            <li><a href="hotel-details.html">New York</a></li>
                            <li><a href="hotel-booking.html">San Francisco</a></li>
                            <li><a href="tour-search.html">California</a></li>
                            <li><a href="tour-booking.html">Ohio </a></li>
                            <li><a href="tour-guides.html">Alaska</a></li>
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
                        <img src="assets/img/common/cards.png" alt="img">
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
  var objectarray = document.getElementById( "first_field3").value; 
  if(objectarray =='1'){
      document.getElementById( 
            "second-field3").value = "All"
  }
  if(objectarray =='2'){
      document.getElementById( 
            "second-field3").value = "Economy"
  }
  if(objectarray =='3'){
      document.getElementById( 
            "second-field3").value = "Premium Economy"
  }
  if(objectarray =='4'){
      document.getElementById( 
            "second-field3").value = "Business"
  }if(objectarray =='5'){
      document.getElementById( 
            "second-field3").value = "PremiumBusiness"
  }
  if(objectarray =='6'){
      document.getElementById( 
            "second-field3").value = "First Class"
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
                            $("#state-dropdown").append('<option value="">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');
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
                            $("#state-dropdown1").append('<option value="">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');
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
                            $("#state-dropdown12").append('<option value="">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');
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
                            $("#state-dropdown112").append('<option value="">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');
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
                            $("#state-dropdown_1").append('<option value="">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');
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
                            $("#state-dropdown_2").append('<option value="">' + value.AIRPORTCODE +','+ value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');
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
                            $("#state-dropdown_3").append('<option value="">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');
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
                            $("#state-dropdown_4").append('<option value="">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');
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
            $('.from').on('keyup',function(){
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
                            $("#ShowDataList1").append('<option value="'+ value.AIRPORTCODE +'">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');
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
            $('.to').on('keyup',function(){
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
                            $("#ShowDataList2").append('<option value="'+ value.AIRPORTCODE +'">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');
                        });
                   }
                });
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
</script>  
<script>
    const rangeInput = document.querySelectorAll(".range-input input"),
  priceInput = document.querySelectorAll(".price-input input"),
  range = document.querySelector(".slider .progress");
let priceGap = 1000;

priceInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minPrice = parseInt(priceInput[0].value),
      maxPrice = parseInt(priceInput[1].value);

    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
      if (e.target.className === "input-min") {
        rangeInput[0].value = minPrice;
        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
      } else {
        rangeInput[1].value = maxPrice;
        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
      }
    }
  });
});

rangeInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minVal = parseInt(rangeInput[0].value),
      maxVal = parseInt(rangeInput[1].value);

    if (maxVal - minVal < priceGap) {
      if (e.target.className === "range-min") {
        rangeInput[0].value = maxVal - priceGap;
      } else {
        rangeInput[1].value = minVal + priceGap;
      }
    } else {
      priceInput[0].value = minVal;
      priceInput[1].value = maxVal;
      range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
      range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
    }
  });
});

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
    <!-- wow.js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom js -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/add-form.js"></script>
    <script src="assets/js/form-dropdown.js"></script>

</body>

</html>