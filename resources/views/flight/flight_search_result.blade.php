@include('flight.header')
    <!-- search -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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

    @include('flight.flight_search_form')
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
<!--                        <div class="left_side_search_boxed">-->
<!--                            <div class="left_side_search_heading">-->
<!--                                <h5>Filter by price</h5>-->
<!--                            </div>-->
                             
<!--                            <div class="flight_Search_boxed">-->
<!--        <style>-->
<!--            .price-input {-->
<!--  width: 100%;-->
<!--  display: flex;-->
<!--  margin: 30px 0 35px;-->
<!--}-->
<!--.price-input .field {-->
<!--  display: flex;-->
<!--  width: 100%;-->
<!--  height: 45px;-->
<!--  align-items: center;-->
<!--}-->
<!--.field input {-->
<!--  width: 100%;-->
<!--  height: 100%;-->
<!--  outline: none;-->
<!--  font-size: 19px;-->
<!--  margin-left: 12px;-->
<!--  border-radius: 5px;-->
<!--  text-align: center;-->
<!--  border: 1px solid #999;-->
<!--  -moz-appearance: textfield;-->
<!--}-->
<!--input[type="number"]::-webkit-outer-spin-button,-->
<!--input[type="number"]::-webkit-inner-spin-button {-->
<!--  -webkit-appearance: none;-->
<!--}-->
<!--.price-input .separator {-->
<!--  width: 130px;-->
<!--  display: flex;-->
<!--  font-size: 19px;-->
<!--  align-items: center;-->
<!--  justify-content: center;-->
<!--}-->
<!--.slider {-->
<!--  height: 5px;-->
<!--  position: relative;-->
<!--  background: #ddd;-->
<!--  border-radius: 5px;-->
<!--}-->
<!--.slider .progress {-->
<!--  height: 100%;-->
<!--  left: 25%;-->
<!--  right: 25%;-->
<!--  position: absolute;-->
<!--  border-radius: 5px;-->
<!--  background: #17a2b8;-->
<!--}-->
<!--.range-input {-->
<!--  position: relative;-->
<!--}-->
<!--.range-input input {-->
<!--  position: absolute;-->
<!--  width: 100%;-->
<!--  height: 5px;-->
<!--  top: -5px;-->
<!--  background: none;-->
<!--  pointer-events: none;-->
<!--  -webkit-appearance: none;-->
<!--  -moz-appearance: none;-->
<!--}-->
<!--input[type="range"]::-webkit-slider-thumb {-->
<!--  height: 17px;-->
<!--  width: 17px;-->
<!--  border-radius: 50%;-->
<!--  background: #17a2b8;-->
<!--  pointer-events: auto;-->
<!--  -webkit-appearance: none;-->
<!--  box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);-->
<!--}-->
<!--input[type="range"]::-moz-range-thumb {-->
<!--  height: 17px;-->
<!--  width: 17px;-->
<!--  border: none;-->
<!--  border-radius: 50%;-->
<!--  background: #17a2b8;-->
<!--  pointer-events: auto;-->
<!--  -moz-appearance: none;-->
<!--  box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);-->
<!--}-->

<!--.support-box {-->
<!--  top: 2rem;-->
<!--  position: relative;-->
<!--  bottom: 0;-->
<!--  text-align: center;-->
<!--  display: block;-->
<!--}-->
<!--.b-btn {-->
<!--  color: white;-->
<!--  text-decoration: none;-->
<!--  font-weight: bold;-->
<!--}-->
<!--.b-btn.paypal i {-->
<!--  color: blue;-->
<!--}-->
<!--.b-btn:hover {-->
<!--  text-decoration: none;-->
<!--  font-weight: bold;-->
<!--}-->
<!--.b-btn i {-->
<!--  font-size: 20px;-->
<!--  color: yellow;-->
<!--  margin-top: 2rem;-->
<!--}-->
<!--        </style>                      -->
<!--     <div class="price-input">-->
<!--            <div class="field">-->
<!--              <span>Min</span>-->
<!--              <input type="number" class="input-min" name="price_filter1" value="2500" style="background-color:white;width: 62px;">-->
<!--            </div>-->
<!--            <div class="separator">-</div>-->
<!--            <div class="field">-->
<!--              <span>Max</span>-->
<!--              <input type="number" class="input-max" name="price_filter" value="7500" style="background-color:white;width: 62px;">-->
<!--            </div>-->
<!--      </div>-->
<!--          <div class="slider">-->
<!--            <div class="progress"></div>-->
<!--          </div>-->
<!--          <div class="range-input">-->
<!--            <input type="range" class="range-min" min="0" max="100000" value="2500" step="100">-->
<!--            <input type="range" class="range-max" min="0" max="100000" value="7500" step="100">-->
<!--          </div>-->
<!--    </div>-->
                            
<!--                        </div>-->
                        <div class="left_side_search_boxed">
                            <div class="left_side_search_heading">
                                <h5>Number of stops</h5>
                            </div>
                            
                            <div class="tour_search_type">
                                <div class="checkbox">
                                 
                                <input type="checkbox" name="stops" value="One" > <label style="margin-left: 20px;">  One Stop
                                 </label>
                                </div>
                                <div class="checkbox">
                                 
                                <input type="checkbox" name="stops" value="Multi" > <label style="margin-left: 20px;">  Multi Stop
                                 </label>
                                </div>
                                <div class="checkbox">
                                 
                                <input type="checkbox" name="stops" value="Non"  > <label style="margin-left: 20px;"  >  Non Stop
                                 </label>
                                </div>
                                
                            </div>
                        </div>
                        <!--<div class="left_side_search_boxed">-->
                        <!--    <div class="left_side_search_heading">-->
                        <!--        <h5>Flight class</h5>-->
                        <!--    </div>-->
                            
                        <!--       <div class="tour_search_type">-->
                        <!--           <div class="checkbox">-->
                        <!--             <input type="checkbox" name="cabin_class" value="1"  > <label style="margin-left: 20px;">  All Class-->
                        <!--         </label>-->
                        <!--        </div>-->
                        <!--           <div class="checkbox">-->
                        <!--             <input type="checkbox" name="cabin_class" value="2" > <label style="margin-left: 20px;">  Economy-->
                        <!--         </label>-->
                        <!--        </div>-->
                        <!--           <div class="checkbox">-->
                        <!--             <input type="checkbox" name="cabin_class" value="3" > <label style="margin-left: 20px;">  Premium Economy-->
                        <!--         </label>-->
                        <!--        </div>-->
                        <!--           <div class="checkbox">-->
                        <!--             <input type="checkbox" name="cabin_class" value="4" > <label style="margin-left: 20px;">  Business-->
                        <!--         </label>-->
                        <!--        </div>-->
                        <!--           <div class="checkbox">-->
                        <!--             <input type="checkbox" name="cabin_class" value="5" > <label style="margin-left: 20px;">  Premium Business-->
                        <!--         </label>-->
                        <!--        </div>-->
                                
                        <!--           <div class="checkbox">-->
                        <!--             <input type="checkbox" name="cabin_class" value="6" > <label style="margin-left: 20px;">  First Class-->
                        <!--         </label>-->
                        <!--        </div>-->
                                
                        <!--    </div>-->
                        <!--</div>--> 
                        <div class="left_side_search_boxed">
                            <div class="left_side_search_heading">
                                <h5>Airlines</h5>
                            </div>
                            <style>
                                .container1 { height: 100px; overflow-y: scroll;
                            </style>
                            <div class="tour_search_type container1">
                                
                           
                                   <div class="checkbox"><input type="checkbox" name="airlines" value="AerLingus"><label style="margin-left: 20px;"> Aer Lingus </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="AirFiji"><label style="margin-left: 20px;"> Air Fiji </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="AirIndia"><label style="margin-left: 20px;"> Air India </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="AkasaAir"><label style="margin-left: 20px;"> Akasa Air </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="AirArabia"><label style="margin-left: 20px;"> Air Arabia </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="AirFrance"><label style="margin-left: 20px;"> Air France </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="AirIndia Express"><label style="margin-left: 20px;"> Air India Express </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="AstrakhanAirlines"><label style="margin-left: 20px;"> Astrakhan Airlines </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="AirAsia"><label style="margin-left: 20px;"> Air Asia </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="AirAsiaX"><label style="margin-left: 20px;"> AirAsia X </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="AirAsiaIndia"><label style="margin-left: 20px;"> Air Asia India </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="AustrianAirlines"><label style="margin-left: 20px;"> Austrian Airlines </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="BritishAirways"><label style="margin-left: 20px;"> British Airways </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="CondorAirlines"><label style="margin-left: 20px;"> Condor Airlines </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="EasternAirways"><label style="margin-left: 20px;"> Eastern Airways </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="Emirates"><label style="margin-left: 20px;"> Emirates </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="EtihadAirways"><label style="margin-left: 20px;"> Etihad Airways </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="Finnair"><label style="margin-left: 20px;"> Finnair </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="FlyScoot"><label style="margin-left: 20px;"> Fly Scoot </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="flydubai"><label style="margin-left: 20px;"> flydubai </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="Gofirst"><label style="margin-left: 20px;"> Go first </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="GulfAir"><label style="margin-left: 20px;"> Gulf Air </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="Indigo"><label style="margin-left: 20px;"> Indigo </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="IndonesiaAirAsia"><label style="margin-left: 20px;"> Indonesia AirAsia </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="JazeeraAirways"><label style="margin-left: 20px;"> Jazeera Airways </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="JetstarAsia"><label style="margin-left: 20px;"> Jetstar Asia </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="KLMAirlines"><label style="margin-left: 20px;"> KLM Airlines </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="KuwaitAirways"><label style="margin-left: 20px;"> Kuwait Airways </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="Lufthansa"><label style="margin-left: 20px;"> Lufthansa </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="MalaysiaAirlines"><label style="margin-left: 20px;"> Malaysia Airlines </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="MalmöAviation"><label style="margin-left: 20px;"> Malmö Aviation </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="MesabaAirlines"><label style="margin-left: 20px;"> Mesaba Airlines </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="OmanAir"><label style="margin-left: 20px;"> Oman Air </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="QatarAirways"><label style="margin-left: 20px;"> Qatar Airways </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="Spicejet"><label style="margin-left: 20px;"> Spicejet </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="SriLankan"><label style="margin-left: 20px;"> SriLankan </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="SunExpress"><label style="margin-left: 20px;"> SunExpress </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="ThaiAirAsia"><label style="margin-left: 20px;"> Thai AirAsia </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="ThaiAirways"><label style="margin-left: 20px;"> Thai Airways </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="ThomasCookAirlines"><label style="margin-left: 20px;"> Thomas Cook Airlines </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="VirginAtlantic"><label style="margin-left: 20px;"> Virgin Atlantic </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="Vistara"><label style="margin-left: 20px;"> Vistara </label></div>
                                   <div class="checkbox"><input type="checkbox" name="airlines"value="WestJet"><label style="margin-left: 20px;"> WestJet </label></div>
                                   
                               
                           
                            </div>
                        </div>
                        <div class="left_side_search_boxed">
                            <div class="left_side_search_heading">
                                <h5>Refundable</h5>
                            </div>
                            
                            <div class="tour_search_type">
                                <div class="checkbox">
                                 
                                <input type="checkbox" name="refundable" value="false"  > <label style="margin-left: 20px;">  No
                                 </label>
                                </div>
                                <div class="checkbox">
                                 
                                <input type="checkbox" name="refundable" value="true" > <label style="margin-left: 20px;">  Yes
                                 </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <?php $Currency_active =\App\Currency_Model::where('currency_active','0')->first(); ?>
        <!--Flight Search Data Start--> 
        <!--Price Filter -->
    <style>
        .content {

  display: none;
}
#loadMore {
  width: 200px;
  color: #fff;
  display: block;
  text-align: center;
  margin: 20px auto;
  padding: 10px;
  border-radius: 10px;
  border: 1px solid transparent;
  background-color: blue;
  transition: .3s;
}
#loadMore:hover {
  color: blue;
  background-color: #fff;
  border: 1px solid blue;
  text-decoration: none;
}
.noContent {
  color: #000 !important;
  background-color: transparent !important;
  pointer-events: none;
}
    </style>    
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
                                    <?php $count = 0; ?>
                                    <?php $Times = 0; ?>
                                                @foreach( $Segments as $Segment)
                                    @foreach( $Segment as $Segm)
                                    
                                    <?php  $Destination = $Segm->Destination; ?>
                                    <?php  $AirportCode = $Destination->Airport->AirportCode; ?>
                                   <?php  $ArrTime = $Destination->ArrTime; ?>
                                   <?php $AirportName = $Destination->Airport->AirportName;?>
                                   <?php $CityName = $Destination->Airport->CityName;?>
                                   <?php $Times += $Segm->Duration;?>
                                  <? $count++ ?>
                                    @endforeach
                                    @endforeach
                <!-- @if($Origin->Airport->AirportCode == $from) -->
                 <?php 
                                                            if($count == 1){
                                                                $stops1 = "Non"; 
                                                                }
                                                            if($count == 2){
                                                                $stops1 = "One"; 
                                                                }
                                                            if($count > 2){
                                                                $stops1 = "Multi"; 
                                                                }    
                                                            
                                                             ?>
                <?php 
                                        if($dat2->IsRefundable == 1){
                                            $refund ="false";
                                        }else{
                                            $refund ="true";
                                        }
                                        $str = str_replace(' ', '', $Segm->Airline->AirlineName);
                                        ?>
                                    
                                    <div class="flight_search_items content player <?php echo $str; ?> <?php echo $refund;?> <?php echo $stops1;?> ">
                                        
                                        <div class="multi_city_flight_lists ">
                                            <div class="left_side_search_heading">
                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                      <h5 class="apply " style="margin-left:10px;"> <?php echo $Segm->Airline->AirlineName; ?> </h5>
                                                                     </div>
                                                                     <div class="col-lg-6">
                                                                     <h5 class="apply" style="margin-left:10px;">Aircraft: <?php  echo $Segm->Craft; ?> </h5>
                                                                     </div>
                                                                 </div>     
                                        </div> 
                            <div class="flight_multis_area_wrapper"> 
                                            
                                                <div class="flight_search_left">
                                                    <div class="">
                                                        <img src="public/assets/AirlineLogo/<?php echo $dat2->AirlineCode;?>.gif" alt="img" style="height:30px;width:30px;object-fit: cover;">
                                                    </div>
                                                    <div class="flight_search_destination">
                                                        
                                                        <p>From</p>
                                                        <h3><?php echo $sou_code = $Origin->Airport->AirportCode; ?></h3>
                                                        <h6><?php echo $sou_name = $Origin->Airport->AirportName;?></h6>
                                                        <h6>Departure Time :</h6>
                                                        <h6>
                                                        <?php 
                                                            $input1 = $Origin->DepTime; 
                                                            $date = strtotime($input1); 
                                                            echo $dapa_time = date('d-M-Y h:i a', $date); 
                                                            ?>
                                                        </h6> 
                                                        
                                                    </div>
                                                </div>
                                                
                                                <div class="flight_search_middel">
                                                    <div class="flight_right_arrow">
                                                        <img src="assets/img/icon/right_arrow.png" alt="icon">
                                                        <h6>
                                                            <?php 
                                                            if($count == 1){
                                                                echo "Non"; 
                                                                }
                                                            if($count == 2){
                                                                echo "One"; 
                                                                }
                                                            if($count > 2){
                                                                echo "Multi"; 
                                                                }    
                                                            
                                                             ?> Stops</h6>
                                                        <p>
                                                            <?php 
                                                            // $input1 = $Origin->DepTime; 
                                                            // $date = strtotime($input1); 
                                                            //  $dapa_time = date('d-M-Y h:i a', $date); 
                                                            ?>
                                                            <?php 
                                                        //     $input = $ArrTime;
                                                        //     $date = strtotime($input); 
                                                        //      $arr1_time = date('d-M-Y h:i a', $date); 
                                                            
                                                        //     $from_time = strtotime($dapa_time); 
                                                        //         $to_time = strtotime($arr1_time); 
                                                        //     $diff_minutes = abs($from_time - $to_time) / 60; 
                                                           
                                                        //   $hours = floor($diff_minutes / 60);
                                                        // $min = $diff_minutes - ($hours * 60);
                                                        // echo $hours."h : ".$min;echo"m ";
                                                       
                                                            ?>  
                                                            <?php  $minutes = $Times ?> 
                                                        <?php $hours = floor($minutes / 60);
                                                        $min = $minutes - ($hours * 60);
                                                        echo $hours."h : ".$min;echo"m ";
                                                        ?>
                                                        </p>
                                                    </div>
                                                    <div class="flight_search_destination">
                                                        <p>To</p>
                                    
                                    
                                                         <h3><?php echo $AirportCode; ?></h3>
                                                        <h6><?php echo $AirportName;?> ,<?php echo $CityName;?></h6>
                                                        <h6>Arrival Time :</h6>
                                                        <h6>
                                                        <?php 
                                                            $input = $ArrTime;
                                                            $date = strtotime($input); 
                                                            echo $arr1_time = date('d-M-Y h:i a', $date); 
                                                            ?>
                                                            </h6>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="flight_search_right">
                                            <h5><del></del></h5>
                                            @if(session()->get('user_id')) <?php $comm= \App\Commision_Add_Model::where('user_id',session()->get('user_id'))->where('commision_type','flight')->first();  ?> <?php $markup= \App\Markup_Apply_Model::where('user_id',session()->get('user_id'))->first();  ?>
                                            <?php if($comm) {  
                                            $commision= \App\Commision_Model::where('id',$comm->commision_id)->first();
                                            if($commision){
                                            $commis= $commision->commision ; $commis_type = $commision->commision_type; 
                                            }else {$commis= 0; $commis_type ='';}
                                            }
                                            else {$commis= 0; $commis_type ='';} ?>
                                            <?php if($markup) {  $mark_up= \App\Markup_Model::where('id',$markup->markup_id)->first(); $mark_up1= $mark_up->markup_amount ;  }else {$mark_up1= 0; } ?>
                                           <h2><?php echo $dat2->Fare->Currency;?> <?php echo $dat2->Fare->PublishedFare;?><sup> </sup></h2><h6><sub style="width:10px;height:10px;"> Commision : {{$commis}} {{$commis_type}}</sub></h6><h6> <sub style="width:10px;height:10px;"> Mark-UP : {{$mark_up1}}</sub></h6> <h6><sub style="width:10px;height:10px;">Adult X {{$adult}}</sub></h6>
                                            @else
                                            <h2>{{ $Currency_active->currency_symbol}} <?php  $subtotal= $dat2->Fare->PublishedFare / $Currency_active->currency_rates ;echo round($subtotal, 2); ?><sup> </sup></h2><sub style="width:10px;height:10px;">Adult X {{$adult}}</sub>
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
                                            <input type="hidden" name="Source_name" value="<?php echo $sou_code;?>">
                                            <input type="hidden" name="Source_address" value="<?php echo $sou_name;?>">
                                            <input type="hidden" name="Duration" value="<?php echo $Segm->Duration;?>">
                                            <input type="hidden" name="AirlineName" value="<?php echo $Segm->Airline->AirlineName;?>">
                                            <input type="hidden" name="DepTime" value="<?php echo $input1;?>">
                                            <input type="hidden" name="ArrTime" value="<?php echo $Destination->ArrTime;?>">
                                            <input type="hidden" name="adult" value="<?php echo $adult;?>">
                                            <input type="hidden" name="count" value="<?php echo $count;?>">
                                            
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
                                        <!-- @endif  -->
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
                                                    <div class="img"><img src="public/assets/AirlineLogo/<?php  echo  $Airline->AirlineCode; ?>.gif" alt="img"></div>
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
                                &nbsp;
                                
                                @endforeach
                               
                                @endforeach
                                @endif
                                @endforeach
                                
                                @endif
                                    
                                <!--Flight Search Data End-->
                               
                                
                            <div class="load_more_flight">
                            <a href="#" id="loadMore">Load More</a>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif   
<!--All Flight-->
@if(isset($all_data)) 
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
                <!-- @if($Origin->Airport->AirportCode == $from) -->
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
                                                        <img src="public/assets/AirlineLogo/<?php echo $dat2->AirlineCode;?>.gif" alt="img" style="height:30px;width:30px;object-fit: cover;">
                                                    </div>
                                                    <div class="flight_search_destination">
                                                        
                                                        <p>From</p>
                                                        <h3><?php echo $sou_code = $Origin->Airport->AirportCode; ?></h3>
                                                        <h6><?php echo $sou_name = $Origin->Airport->AirportName;?></h6>
                                                        <h6>Departure Time :</h6>
                                                        <h6>
                                                        <?php 
                                                            $input1 = $Origin->DepTime; 
                                                            $date = strtotime($input1); 
                                                            echo $dapa_time = date('d-M-Y h:i a', $date); 
                                                            ?>
                                                        </h6> 
                                                        
                                                    </div>
                                                </div>
                                                <?php $count = 0; ?>
                                                @foreach( $Segments as $Segment)
                                    @foreach( $Segment as $Segm)
                                    
                                    <?php  $Destination = $Segm->Destination; ?>
                                    <?php  $AirportCode = $Destination->Airport->AirportCode; ?>
                                   <?php  $ArrTime = $Destination->ArrTime; ?>
                                   <?php $AirportName = $Destination->Airport->AirportName;?>
                                   <?php $CityName = $Destination->Airport->CityName;?>
                                  <? $count++ ?>
                                    @endforeach
                                    @endforeach
                                                <div class="flight_search_middel">
                                                    <div class="flight_right_arrow">
                                                        <img src="assets/img/icon/right_arrow.png" alt="icon">
                                                        <h6>
                                                            <?php 
                                                            if($count == 1){
                                                                echo "Non"; 
                                                                }
                                                            if($count == 2){
                                                                echo "One"; 
                                                                }
                                                            if($count > 2){
                                                                echo "Multi"; 
                                                                }    
                                                            
                                                             ?> Stops</h6>
                                                        <p>
                                                            <?php 
                                                            $input1 = $Origin->DepTime; 
                                                            $date = strtotime($input1); 
                                                             $dapa_time = date('d-M-Y h:i a', $date); 
                                                            ?>
                                                            <?php 
                                                            $input = $ArrTime;
                                                            $date = strtotime($input); 
                                                             $arr1_time = date('d-M-Y h:i a', $date); 
                                                            
                                                            $from_time = strtotime($dapa_time); 
                                                                $to_time = strtotime($arr1_time); 
                                                            $diff_minutes = abs($from_time - $to_time) / 60; 
                                                           
                                                           $hours = floor($diff_minutes / 60);
                                                        $min = $diff_minutes - ($hours * 60);
                                                        echo $hours."h : ".$min;echo"m ";
                                                       
                                                            ?>  
                                                            
                                                        </p>
                                                    </div>
                                                    <div class="flight_search_destination">
                                                        <p>To</p>
                                    
                                    
                                                         <h3><?php echo $AirportCode; ?></h3>
                                                        <h6><?php echo $AirportName;?> ,<?php echo $CityName;?></h6>
                                                        <h6>Arrival Time :</h6>
                                                        <h6>
                                                        <?php 
                                                            $input = $ArrTime;
                                                            $date = strtotime($input); 
                                                            echo $arr1_time = date('d-M-Y h:i a', $date); 
                                                            ?>
                                                            </h6>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="flight_search_right">
                                            <h5><del></del></h5>
                                            @if(session()->has('commision')) <?php $commision = session()->get('commision') ?>
                                            <h2><?php echo $dat2->Fare->Currency;?><?php $base123 = $dat2->Fare->PublishedFare;?> <?php $perce = $base123/100*$commision ?> <?php echo $perce + $base123; ?><sup> </sup></h2>
                                            @else
                                            <h2><?php echo $dat2->Fare->Currency;?><?php echo $dat2->Fare->PublishedFare;?><sup> </sup></h2><sub style="width:10px;height:10px;">Adult X {{$adult}}</sub>
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
                                            <input type="hidden" name="Source_name" value="<?php echo $sou_code;?>">
                                            <input type="hidden" name="Source_address" value="<?php echo $sou_name;?>">
                                            <input type="hidden" name="Duration" value="<?php echo $Segm->Duration;?>">
                                            <input type="hidden" name="AirlineName" value="<?php echo $Segm->Airline->AirlineName;?>">
                                            <input type="hidden" name="DepTime" value="<?php echo $input1;?>">
                                            <input type="hidden" name="ArrTime" value="<?php echo $Destination->ArrTime;?>">
                                            <input type="hidden" name="adult" value="<?php echo $adult;?>">
                                            <input type="hidden" name="count" value="<?php echo $count;?>">
                                            
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
                                        <!-- @endif  -->
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
                                                    <div class="img"><img src="public/assets/AirlineLogo/<?php  echo  $Airline->AirlineCode; ?>.gif" alt="img"></div>
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
                                &nbsp;
                                <?php 
                                // if($key == '11' ){ break;  }  
                                ?>
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
                                            <!--<button class="btn btn_md"><i class="fas fa-spinner"></i> Load more..</button>-->
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
      $(function(){
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

    var minDate= year + '-' + month + '-' + day;

    $('.txtDate').attr('min', minDate);
});
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
<script>
        $(document).ready(function () {
  
            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('.city_id').on('keyup',function(){
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
                            $("#city_id").append('<input type="hidden" name="Destination" value="'+ value.city_id +'">');
                        });
                   }
                });
            });
        });
    </script> 
<!--Filter -->
<script>
    // not exactly vanilla as there is one lodash function

var allCheckboxes = document.querySelectorAll('input[type=checkbox]');
var allPlayers = Array.from(document.querySelectorAll('.player'));
var checked = {};

getChecked('stops');
getChecked('cabin_class');
getChecked('refundable');
getChecked('airlines');
getChecked('conference');

console.log(allCheckboxes);

Array.prototype.forEach.call(allCheckboxes, function (el) {
  el.addEventListener('change', toggleCheckbox);
});

function toggleCheckbox(e) {
  getChecked(e.target.name);
  setVisibility();
}

function getChecked(name) {
  checked[name] = Array.from(document.querySelectorAll('input[name=' + name + ']:checked')).map(function (el) {
    return el.value;
  });
}

function setVisibility() {
  allPlayers.map(function (el) {
    var stops = checked.stops.length ? _.intersection(Array.from(el.classList), checked.stops).length : true;
    var cabin_class = checked.cabin_class.length ? _.intersection(Array.from(el.classList), checked.cabin_class).length : true;
    var refundable = checked.refundable.length ? _.intersection(Array.from(el.classList), checked.refundable).length : true;
    var airlines = checked.airlines.length ? _.intersection(Array.from(el.classList), checked.airlines).length : true;
    var conference = checked.conference.length ? _.intersection(Array.from(el.classList), checked.conference).length : true;
    if (stops && cabin_class && refundable && airlines && conference) {
      el.style.display = 'block';
    } else {
      el.style.display = 'none';
    }
  });
}
</script>
<script>
    $(document).ready(function(){
  $(".content").slice(0, 10).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".content:hidden").slice(0, 4).slideDown();
    if($(".content:hidden").length == 0) {
      $("#loadMore").text("No Content").addClass("noContent");
    }
  });
  
})
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="public/assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js -->
    <script src="public/assets/js/bootstrap.bundle.js"></script>
    <!-- Meanu js -->
    <script src="public/assets/js/jquery.meanmenu.js"></script>
    <!-- Range js -->
    <script src="public/assets/js/nouislider.min.js"></script>
    <script src="public/assets/js/wNumb.js"></script>
    <!-- owl carousel js -->
    <script src="public/assets/js/owl.carousel.min.js"></script>
    <!-- wow.js -->
    <script src="public/assets/js/wow.min.js"></script>
    <!-- Custom js -->
    <script src="public/assets/js/custom.js"></script>
    <script src="public/assets/js/add-form.js"></script>
    <script src="public/assets/js/form-dropdown.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/0.10.0/lodash.min.js"></script>
</body>

</html>