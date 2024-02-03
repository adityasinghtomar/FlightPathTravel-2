<section id="theme_search_form_tour">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="theme_search_form_area">
                        <div class="theme_search_form_tabbtn">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link <?if($form_status1 =="flight_form"){ echo "active"; }?>" id="flights-tab" data-bs-toggle="tab"
                                        data-bs-target="#flights" type="button" role="tab" aria-controls="flights"
                                        aria-selected="true"><i class="fas fa-plane-departure"></i>Flights</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link <?if($form_status1 =="hotel_form"){ echo "active"; }?>" id="hotels-tab" data-bs-toggle="tab"
                                        data-bs-target="#hotels" type="button" role="tab" aria-controls="hotels"
                                        aria-selected="false"><i class="fas fa-hotel"></i>Hotels</button>
                                </li>
								<li class="nav-item" role="presentation">
								    <!--<a href="{{url('/tour-list')}}" class="nav-link <?if($form_status1 =="tour_form"){ echo "active"; }?>"><i-->
            <!--                                class="fas fa-globe"></i>Tours</a>-->
                                    <button class="nav-link <?if($form_status1 =="tour_form"){ echo "active"; }?>" id="tours-tab" data-bs-toggle="tab" data-bs-target="#tours"
                                        type="button" role="tab" aria-controls="tours" aria-selected="false"><i
                                            class="fas fa-globe"></i>Tours</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <!--<a href="{{url('/Visa-list')}}" class="nav-link <?if($form_status1 =="visa_form"){ echo "active"; }?>"><i class="fas fa-passport"></i> Visa </a>-->
                                    <button class="nav-link <?if($form_status1 =="visa_form"){ echo "active"; }?>" id="visa-tab" data-bs-toggle="tab"
                                        data-bs-target="#visa" type="button" role="tab" aria-controls="visa"
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
                            <div class="tab-pane fade <?if(isset($form_status)){ echo "show"; }?> <?if(isset($form_status)){echo "active"; }?>" id="flights" role="tabpanel"
                                aria-labelledby="flights-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="flight_categories_search">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link <?if(isset($form_status)){if($form_status =="one"){ echo "active"; }}?>" id="oneway-tab" data-bs-toggle="tab"
                                                        data-bs-target="#oneway_flight" type="button" role="tab"
                                                        aria-controls="oneway_flight" aria-selected="true">One
                                                        Way</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link <?if(isset($form_status)){if($form_status =="return"){ echo "active"; }}?>" id="roundtrip-tab" data-bs-toggle="tab"
                                                        data-bs-target="#roundtrip" type="button" role="tab"
                                                        aria-controls="roundtrip"
                                                        aria-selected="false">Roundtrip</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link <?if(isset($form_status)){if($form_status =="multi"){ echo "active"; }}?>" id="multi_city-tab" data-bs-toggle="tab"
                                                        data-bs-target="#multi_city" type="button" role="tab"
                                                        aria-controls="multi_city" aria-selected="false">Multi
                                                        city</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                         <div class="tab-content" id="myTabContent1">
                                    <div class="tab-pane fade <?if(isset($form_status)){if($form_status =="one"){ echo "show"; }}?> <?if(isset($form_status)){if($form_status =="one"){ echo "active"; }}?>" id="oneway_flight" role="tabpanel"
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
                                                                      <input list="ShowDataList1" placeholder="From" id="from" class="selectpicker form-control from" name="from" value="<?if(isset($from)){ echo $from; }?>" style="background-color:white; width:200px;" required>
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
                                                                      <input list="ShowDataList2" placeholder="To" class="selectpicker form-control to" name="to" id="to" value="<?if(isset($to)){ echo $to; }?>" style="background-color:white; width:200px;" required>
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
                                                                            <input type="date" id="demo" name="journey_date" value="<?if(isset($journey_date)){ echo $journey_date; }?>" class="txtDate" required>
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
                                    
                                    <div class="tab-pane fade <?if(isset($form_status)){if($form_status =="return"){ echo "active"; } }?> <?if(isset($form_status)){if($form_status =="return"){ echo "show"; }}?>" id="roundtrip" role="tabpanel"
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
                                                                      <input list="ShowDataList1" placeholder="From" class="selectpicker form-control from" name="from" id="from12" value="<?if(isset($from)){ echo $from; }?>" style="background-color:white; width:200px;" required>
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
                                                                      <input list="ShowDataList2" placeholder="To" class="selectpicker form-control to" name="to" id="to12" value="<?if(isset($to)){ echo $to; }?>" style="background-color:white; width:200px;" required>
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
                                                                            <input type="date" id="demo" name="journey_date" class="txtDate" value="<?if(isset($journey_date)){ echo $journey_date; }?>" required>
                                                                            <span></span>
                                                                        </div>
                                                                        <div class="Journey_date">
                                                                            <p>Return date</p>
                                                                            <input type="date" id="demo" name="return_date" class="txtDate" value="<?if(isset($journey_date)){ echo $journey_date; }?>" required>
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
                                    <div class="tab-pane fade  <?if(isset($form_status)){ if(($form_status =="multi")){ echo "active"; }}?> <? if(isset($form_status)){ if($form_status =="multi"){ echo "show"; }}?>" id="multi_city" role="tabpanel"
                                        aria-labelledby="multi_city-tab">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="oneway_search_form">
                                                    <form action="{{url('/multi-city-flight-search')}}" enctype="multipart/form-data" method="post">
                                                        @csrf
                                                        <div class="multi_city_form_wrapper">
                                                            <div class="multi_city_form">
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                        <div class="flight_Search_boxed">
                                                                          <p>From</p>
                                                                    <?php $filterResult =\App\Airport_Model::get(); ?>
                                                                      <input list="ShowDataList1" placeholder="From" class="selectpicker form-control from"  value="<?if(isset($from)){ echo $from; }?>" name="from" id="from_1" style="background-color:white; width:200px;" required>
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
                                                                      <input list="ShowDataList2" placeholder="To" class="selectpicker form-control to"  value="<?if(isset($to)){ echo $to; }?>" name="to" id="to_2" style="background-color:white; width:200px;" required>
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
                                                                                         value="<?if(isset($journey_date)){ echo $journey_date; }?>" class="txtDate" required>
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
                                                                      <input list="ShowDataList1" placeholder="From" class="selectpicker form-control from"  value="<?if(isset($from1)){ echo $from1; }?>" name="from1" id="from_3" style="background-color:white; width:200px;" required>
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
                                                                      <input list="ShowDataList2" placeholder="To" class="selectpicker form-control to"  value="<?if(isset($to1)){ echo $to1; }?>" name="to1" id="to_4" style="background-color:white; width:200px;" required>
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
                                                                                        value="<?if(isset($journey_date1)){ echo $journey_date1; }?>" class="txtDate" required>
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
                            <div class="tab-pane fade <?if($form_status1 =="hotel_form"){ echo "active"; }?> <?if($form_status1 =="hotel_form"){ echo "show"; }?>" id="hotels" role="tabpanel" aria-labelledby="hotels-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tour_search_form">
                                             <form action="{{url('/hotel_search')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                                       <div class="flight_Search_boxed"> 
                                                            <p>Destination</p>
                                                            <input list="ShowDataList" placeholder="From" name="city_name" value="<?if(isset($city_name)){ echo $city_name; }?>" class="selectpicker form-control city_id" id="state_id" style="background-color:#e98c0617; width:202px;" required>
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
                                                                    <input type="date" name="checkin_date" value="<?if(isset($checkin_date)){ echo $checkin_date; }?>" class="txtDate" required>
                                                                    <span></span>
                                                                </div>
                                                                <div class="Journey_date" >
                                                                    <p>Check Out Date</p>
                                                                    <input type="date" name="checkout_date" value="<?if(isset($checkout_date)){ echo $checkout_date; }?>" class="txtDate" required>
                                                                    <span></span>
                                                                </div>
                                                                <div class="">
                                                                    <p>No Of Rooms</p>
                                                                    <input type="number" name="NoOfRoom" value="<?if(isset($NoOfRoom)){ echo $NoOfRoom; }?>" required>
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2  col-md-2 col-sm-12 col-12">
                                                        <div class="flight_Search_boxed dropdown_passenger_area">
                                                            <p>No. Of People </p>
                                                            <div class="dropdown">
                                                                <button class="dropdown-toggle final-count"
                                                                    data-toggle="dropdown" type="button"
                                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    1 No. Of People
                                                                </button>
                                                                <div class="dropdown-menu dropdown_passenger_info"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <div class="traveller-calulate-persons">
                                                                        <div class="passengers">
                                                                            <h6>No. Of People</h6> 
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
                                                             
                                                        </div>
                                                                       <input type="hidden" name="adult" id="myInput122" value="1">
                                                                        <input type="hidden" name="children" id="myInput1222">
                                                                        <input type="hidden" name="infant" id="myInput1222">
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
                            <div class="tab-pane fade <?if($form_status1 =="tour_form"){ echo "active"; }?> <?if($form_status1 =="tour_form"){ echo "show"; }?>" id="tours" role="tabpanel" aria-labelledby="tours-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tour_search_form">
                                            <form action="{{url('/tour-search-list')}}" enctype="multipart/form-data" method="post">
                                                        @csrf
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                                                        <div class="flight_Search_boxed">
                                                            <p>Destination</p>
                                                            <input list="ShowDataList" placeholder="From" name="city_name" class="selectpicker form-control" id="state_id" required>
                                                                <datalist id="ShowDataList">
                                                                <?php $data =\App\Hotel_City_Model::get(); ?>
                                                                @foreach($data as $state_)
                                                                    <option value="{{$state_->name}}">{{__($state_->name)}}</option>
                                                                @endforeach
                                                            </datalist>
                                                            <span>Where are you going?</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                                        <div class="flight_Search_boxed">
                                                                <p>Tour Type</p>
                                                                    <select class="form-control demo-select2-placeholder" name="tour_type" id="state_id" >
                                                                        <option value="single">Select Tour Type</option>
                                                                        <option value="single">Single</option>
                                                                       <option value="group">Group</option>
                                                                       <option value="couple">Couple</option>
                                                                    </select>
                                                            <span>Tour Type?</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                                        <div class="flight_Search_boxed">
                                                                 <p>Days</p>
                                                                    <input type="number" name="day" value="1" required>
                                                                    <span></span>
                                                            <span>Tour Days?</span>
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
                            <div class="tab-pane fade <?if($form_status1 =="visa_form"){ echo "active"; }?> <?if($form_status1 =="visa_form"){ echo "show"; }?>" id="visa" role="tabpanel" aria-labelledby="visa-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tour_search_form">
                                            <form action="{{url('/visa-search-list')}}" enctype="multipart/form-data" method="post">
                                                        @csrf
                                                <div class="row">
                                                    
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="flight_Search_boxed">
                                                                <p>Visa Type</p>
                                                                    <select class="form-control demo-select2-placeholder" name="visa_type" id="state_id" >
                                                                    <option value="single">Select Visa Type</option>
                                                                    <option value="Business visa">Business visa</option>
                                                                   <option value="Education visa">Education visa</option>
                                                                   <option value="Working visa">Working visa</option>
                                                                   <option value="Tourist visa">Tourist visa</option>
                                                                   <option value="Medical visa">Medical visa</option>
                                                                   <option value="On-arrival visa">On-arrival visa</option>
                                                                </select>
                                                            <span>Visa Type?</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="flight_Search_boxed">
                                                                 <p>Days</p>
                                                                    <input type="number" name="day" value="1" required>
                                                                    <span></span>
                                                            <span>Visa Days?</span>
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
    </section>