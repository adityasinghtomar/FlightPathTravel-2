 
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
.custom-model-main1 {
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
  margin: 0px auto;
  max-width: 99%;
}

.custom-model-wrap {
     /*position: fixed;*/
    top: 0;
    left: 0;
   

    background-color: rgba(255, 255, 255, 0.8); /* Adjust the background color and opacity */
    backdrop-filter: blur(10px); /* Adjust the blur intensity */
    z-index: 9999; /* Set a high z-index to ensure it appears above other elements */
    overflow: auto; /* Allow scrolling if the content exceeds the viewport */
  display: block;
  width: 100%;
  position: relative;
  height:100vh;
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

 
  
    
   .flight-card {
  width: 805px;
  height: 100%;
  margin: 100px auto;
  border-radius: 50px;
  background: #fff;
  overflow: hidden;
  box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
}

.flight-card .flight-card-header {
  height: 250px;
  width: 100%;
  background: linear-gradient(to bottom, #264b76 0%, #002c5f 100%);
  padding: 30px 50px;
  border-bottom: 7px solid #6DBE47;
  position: relative;
}
.flight-card .flight-card-header1 {
  height: 420px;
  width: 100%;
  background: url('https://elw.flightpathtravel.com/public/tourhotel.jpg');
  background-size:cover;
  padding: 30px 50px;
  border-bottom: 7px solid #6DBE47;
  position: relative;
}

.flight-card .flight-card-header .flight-logo {
  height: 110px;
  width: 100%;
}

.flight-card .flight-card-header .flight-logo img {
  width: 150px;
}

.flight-card .flight-card-header .flight-data {
  height: auto;
  border-top: 2px solid #3E5177;
  padding-top: 1em;
  display: grid;
  grid-template-columns: 2fr 1fr 1fr;
  text-align: left;
}

.flight-card .flight-card-header .flight-data span {
  display: block;
}

.flight-card .flight-card-header .flight-data .title {
  color: #838EA8;
  font-size: 16px;
}

.flight-card .flight-card-header .flight-data .detail {
  font-size: 18px;
  padding-top: 3px;
  color: white;
}

 .flight-card-content {
  width: 100%;
  height: auto;
  display: inline-block;
}

.flight-card-content .flight-row {
  width: 100%;
  padding: 50px 50px;
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
}

.flight-card-content .flight-row .plane {
  text-align: center;
  position: relative;
}

.flight-card-content .flight-row .plane img {
  width: 90px;
}

.flight-card-content .flight-row .plane:before {
  content: '';
  width: 135px;
  height: 3px;
  background: #efefef;
  position: absolute;
  top: 45px;
  left: -75px;
}

.flight-card-content .flight-row .plane:after {
  content: '';
  width: 135px;
  height: 3px;
  background-color: #efefef;
  position: absolute;
  top: 45px;
  right: -75px;
}

.flight-card-content .flight-from {
  text-align: left;
  float: left;
}

.flight-card-content .flight-to {
  text-align: right;
  float: right;
}

.flight-card-content .flight-from span,
.flight-card-content .flight-to span {
  display: block;
}

.flight-card-content .flight-from .from-code,
.flight-card-content .flight-to .to-code {
  font-size: 60px;
  color: #002C5F;
  font-weight: 200;
}

.flight-card-content .flight-from .from-city,
.flight-card-content .flight-to .to-city {
  font-size: 18px;
  color: #002C5F;
  font-weight: 400;
}

.flight-card-content .flight-details-row {
  width: 100%;
  display: grid;
  padding: 30px 50px;
  grid-template-columns: 1fr 1fr 1fr;
}

.flight-card-content .flight-details-row span {
  display: block;
}

.flight-card-content .flight-details-row .title {
  color: #6a8597;
  font-size: 16px;
  letter-spacing: 3px;
}

.flight-card-content .flight-details-row .detail {
  margin-top: .2em;
  color: #002C5F;
  font-size: 18px;
}

.flight-card-content .flight-details-row .flight-operator {
  text-align: left;
  float: left;
}

.flight-card-content .flight-details-row .flight-class {
  float: right;
  text-align: right;
}

.flight-card-content .flight-details-row .flight-number {
  padding-left: 80px;
}

  
     @media only screen and (max-width: 600px) {
   .flight-card{
  width:100%;
  height: auto;
  margin: 100px auto;
  border-radius: 50px;
  background:#fff;
  overflow:hidden;
  box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
       
   }
   .flight-card-content .flight-details-row .flight-number {
    padding-left: 46px;
}
.flight-card-content .flight-row .plane:after {
    content: '';
    width: 32px;
    height: 3px;
    background-color: #efefef;
    position: absolute;
    top: 45px;
    right: 1px;
}
.flight-card-content .flight-row .plane:before {
  content: '';
  width: 35px;
  height: 3px;
  background: #efefef;
  position: absolute;
  top: 45px;
  left: -5px;
}
   
}
    #sky {
  /*animation: skycolor;*/
  animation-direction: alternate-reverse;
  animation-duration: 60s;
  animation-iteration-count: infinite;
  height: 100%;
  position: absolute;
  width: 100%;
}

@keyframes skycolor {
  0%   { background-color: #D4DDE6; }
  10%  { background-color: #95B3D2; }
  20%  { background-color: #419FEE; }
  30%  { background-color: #4E85D3; }
  40%  { background-color: #2259B9; }
  50%  { background-color: #385fa3; }
  60%  { background-color: #2b497d; }
  70%  { background-color: #1e3357; }
  80%  { background-color: #111d31; }
  90%  { background-color: #030241; }
  100% { background-color: #010123; }
}

.cloud,
.cloud:before,
.cloud:after {
  animation: cloudcolor;
  animation-direction: alternate;
  animation-duration: 30s;
  animation-iteration-count: infinite;
  position: absolute;
}

.cloud {
  border-radius: 2em;
  height: 30px;
  width: 100px;
}

@keyframes cloudcolor {
  0%   { background-color: #D4DDE6; }
  100% { background-color: #95B3D2; }
}

.cloud:before,
.cloud:after {
  content: '';
  border-radius: 50%;
}

.cloud:before {
  height: 40px;
  width: 40px;
  left: 1em;
  bottom: .5em;
}

.cloud:after {
  height: 50px;
  width: 50px;
  right: 1em;
  bottom: .4em;
}

#plane:after,
#plane:before {
  position: absolute;
  font-size: 100px;
}

#plane:after {
  color: #eceff1;
  content: '✈';
  text-shadow: 4px 1px 0 #01579b;
  transition-property: 'transform';
}

#plane:before {
  content: '✈';
  color: #c51162;
  left: -3px;
  text-shadow: -5px 1px 0px #0091ea;
}
   
</style>   
<div class="custom-model-main1" style="width:100%; height:100%">
    <div class="custom-model-inner" style="width:100%;">        
    <!--<div class="close-btn">×</div>-->
        <div class="custom-model-wrap">
            <div class="pop-up-content-wrap">
       <style>
           .hidden {
    display: none;
}
       </style>     

  <mains class="">
      
       <div class="custom-modal-contenttt">
      
      <div class="flight-card">
          <div style="background:#ff9300;height:67px">
              <div style="float:left;margin:9px">
              
              </div>
              <div style="float:right;margin:23px;color:#fff;">
                  <h5>Contact No. <span> +44 (0) 203 463 7788</span></h5>
              </div>
          </div>
   <div class="flight-card-header1">
      
   </div>
  <div class="flight-card-content">
  
    <div class="flight-details-row">
      <div class="flight-operator">
        <span class="title">City</span>
        <p id="cityDisplay"></p>
      </div>
      <div class="flight-number"> 
        <span class="title">Check In</span>
     <p id="hoteldaete1"></p>
      </div>
      <div class="flight-class">
        <span class="title" style="margin-right:20px;">Check Out</span>
      <p id="hoteldaete2"></p>
      </div>
     
    </div>
  </div>
   <div style="background:#ff9300;height:100%;">
       <diV style="margin: auto;
  width: 80%;
  padding:11px 50px 5px 52px;">
           <table>
               <tr>
                   <td>
                       <div style="
                        /* padding: 10px; */
                        border-radius: 20px;
                        margin:-12px 0px 0px 0px;">
                            <img src="https://elw.flightpathtravel.com/public/images/flex/logo.png" style="width:100px;">
                         
                       </div>
                     
                   </td> 
                  
                    <td>
                       <div style="
                            /* padding: 10px; */
                            border-radius: 20px;
                            margin:-15px 43px 5px 45px">
                            <img src="https://elw.flightpathtravel.com/public/images/flex/expertise.png"style="width:55px;">
                       </div>
                       <div><p style="text-align: center;
                            color: #fff;
                            font-family: 'Roboto';">Expertise</p></div>
                   </td> 
                    <td>
                       <div style="
                            /* padding: 10px; */
                            border-radius: 20px;
                            margin:-15px 43px 5px 45px;">
                            <img src="https://elw.flightpathtravel.com/public/images/flex/payment.png"style="width:55px;">
                       </div>
                       <div><p style="text-align: center;
                        color: #fff;
                        font-family: 'Roboto';">Flexible Payment</p></div>
                   </td> 
                    <td>
                       <div style="
                                /* padding: 10px; */
                                border-radius: 20px;
                                margin:10px 0px 0px 48px;">
                            <img src="https://elw.flightpathtravel.com/public/images/flex/availability.png"style="width:61px;">
                       </div>
                       <div><p style="text-align: center;
                            color: #fff;
                            font-family: 'Roboto';">24X7 Customer Support</p></div>
                   </td> 
               </tr>
           </table>
       </diV>
   </div>
</div>
      
    </div>
      
   
  </mains>
            </div>
        </div>  
    </div>  
</div>

    <!-- Header Area -->
<div class="custom-model-main" style="width:100%; height:100%">
    <div class="custom-model-inner" style="width:100%;">        
    <!--<div class="close-btn">×</div>-->
        <div class="custom-model-wrap">
            <div class="pop-up-content-wrap">
       <style>
           .hidden {
    display: none;
}
       </style>     

  <mains class="">
      
       <div class="custom-modal-contenttt">
      
      <div class="flight-card">
   <div class="flight-card-header">
      
    <div id="sky">
  <div id="plane"></div>
</div>
   </div>
  <div class="flight-card-content">
    <div class="flight-row">
      <div class="flight-from">
        <!--<span class="from-code">TIA</span>-->
        <span class="from-city"><p id="fromdisplay"> </p></span>
      </div>
      <div class="plane">
        <img src="https://www.flightofox.ca/Content/Assets/images/flight-loading.gif" alt="">
      </div>
      <div class="flight-to">
        <!--<span class="to-code">MUC</span>-->
        <span class="to-city"><p id="todisplay"></p></span>
        <span>
            
        </span>
      </div>
    </div>
    <div class="flight-details-row rowone flight-card-content">
      <div class="flight-operator">
        <span class="title">Departure</span>
        <span class="detail"><p id="dateDisplay"></p></span>
        
       
      </div>
      <div class="flight-number"> 
        <span class="title">Travellers</span>
        <span class="detail" style="margin-left: 48px;"><p id="totalTravellers"></span>
      </div>
      <div class="flight-class hidden" id="returnDetail">
       <span class="title">Return</span>

    <span class="detail " ><p id="returnDate" class=""></p></span>
      </div>
    </div>
  </div>
</div>
      
    </div>
      
   
  </mains>
            </div>
        </div>  
    </div>  
</div>
<style>
        .custom-select-wrapper {
            position: relative;
        }

        .select-options {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
            border: 1px solid #ced4da;
            border-top: none;
            border-radius: 0 0 0.25rem 0.25rem;
            background-color: #fff;
        }
         .select-options1 {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
            border: 1px solid #ced4da;
            border-top: none;
            border-radius: 0 0 0.25rem 0.25rem;
            background-color: #fff;
        }

        .option {
            padding: 0.5rem;
            cursor: pointer;
        }

        .option:hover {
            background-color: #f8f9fa;
        }
         .option1 {
            padding: 0.5rem;
            cursor: pointer;
        }

        .option1:hover {
            background-color: #f8f9fa;
        }
        
        .select-options3 {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
            border: 1px solid #ced4da;
            border-top: none;
            border-radius: 0 0 0.25rem 0.25rem;
            background-color: #fff;
        }

        .option3 {
            padding: 0.5rem;
            cursor: pointer;
        }

        .option3:hover {
            background-color: #f8f9fa;
        }
           .select-options2 {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
            border: 1px solid #ced4da;
            border-top: none;
            border-radius: 0 0 0.25rem 0.25rem;
            background-color: #fff;
        }

        .option2 {
            padding: 0.5rem;
            cursor: pointer;
        }

        .option2:hover {
            background-color: #f8f9fa;
        }
         .option3:hover {
            background-color: #f8f9fa;
        }
           .select-options4{
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
            border: 1px solid #ced4da;
            border-top: none;
            border-radius: 0 0 0.25rem 0.25rem;
            background-color: #fff;
        }

        .option4 {
            padding: 0.5rem;
            cursor: pointer;
        }

        .option4:hover {
            background-color: #f8f9fa;
        }
       
           .select-options5 {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
            border: 1px solid #ced4da;
            border-top: none;
            border-radius: 0 0 0.25rem 0.25rem;
            background-color: #fff;
        }

        .option5 {
            padding: 0.5rem;
            cursor: pointer;
        }

        .option5:hover {
            background-color: #f8f9fa;
        }
        .select-options6 {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
            border: 1px solid #ced4da;
            border-top: none;
            border-radius: 0 0 0.25rem 0.25rem;
            background-color: #fff;
        }

        .option6 {
            padding: 0.5rem;
            cursor: pointer;
        }

        .option6:hover {
            background-color: #f8f9fa;
        }
         .select-options11 {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
            border: 1px solid #ced4da;
            border-top: none;
            border-radius: 0 0 0.25rem 0.25rem;
            background-color: #fff;
        }

        .option11 {
            padding: 0.5rem;
            cursor: pointer;
        }

        .option11:hover {
            background-color: #f8f9fa;
        }
        .select-options7 {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
            border: 1px solid #ced4da;
            border-top: none;
            border-radius: 0 0 0.25rem 0.25rem;
            background-color: #fff;
        }

        .option7 {
            padding: 0.5rem;
            cursor: pointer;
        }

        .option7:hover {
            background-color: #f8f9fa;
        }
         .select-options8 {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
            border: 1px solid #ced4da;
            border-top: none;
            border-radius: 0 0 0.25rem 0.25rem;
            background-color: #fff;
        }

        .option8 {
            padding: 0.5rem;
            cursor: pointer;
        }

        .option8:hover {
            background-color: #f8f9fa;
        }
          .select-options9 {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
            border: 1px solid #ced4da;
            border-top: none;
            border-radius: 0 0 0.25rem 0.25rem;
            background-color: #fff;
        }

        .option9 {
            padding: 0.5rem;
            cursor: pointer;
        }

        .option9:hover {
            background-color: #f8f9fa;
        }
         .select-options10 {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
            border: 1px solid #ced4da;
            border-top: none;
            border-radius: 0 0 0.25rem 0.25rem;
            background-color: #fff;
        }

        .option10 {
            padding: 0.5rem;
            cursor: pointer;
        }

        .option10:hover {
            background-color: #f8f9fa;
        }
          .select-options12 {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
            border: 1px solid #ced4da;
            border-top: none;
            border-radius: 0 0 0.25rem 0.25rem;
            background-color: #fff;
        }

        .option12 {
            padding: 0.5rem;
            cursor: pointer;
        }

        .option12:hover {
            background-color: #f8f9fa;
        }
           .select-options11 {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
            border: 1px solid #ced4da;
            border-top: none;
            border-radius: 0 0 0.25rem 0.25rem;
            background-color: #fff;
        }

        .option11 {
            padding: 0.5rem;
            cursor: pointer;
        }

        .option11:hover {
            background-color: #f8f9fa;
        }
           .select-options13 {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
            border: 1px solid #ced4da;
            border-top: none;
            border-radius: 0 0 0.25rem 0.25rem;
            background-color: #fff;
        }

        .option13 {
            padding: 0.5rem;
            cursor: pointer;
        }

        .option13:hover {
            background-color: #f8f9fa;
        }
           .select-options14 {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
            border: 1px solid #ced4da;
            border-top: none;
            border-radius: 0 0 0.25rem 0.25rem;
            background-color: #fff;
        }

        .option14 {
            padding: 0.5rem;
            cursor: pointer;
        }

        .option14:hover {
            background-color: #f8f9fa;
        }
           .select-options15 {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
            border: 1px solid #ced4da;
            border-top: none;
            border-radius: 0 0 0.25rem 0.25rem;
            background-color: #fff;
        }

        .option15 {
            padding: 0.5rem;
            cursor: pointer;
        }

        .option15:hover {
            background-color: #f8f9fa;
        }
           .select-options16 {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
            border: 1px solid #ced4da;
            border-top: none;
            border-radius: 0 0 0.25rem 0.25rem;
            background-color: #fff;
        }

        .option16 {
            padding: 0.5rem;
            cursor: pointer;
        }

        .option16:hover {
            background-color: #f8f9fa;
        }
           .select-options17 {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
            border: 1px solid #ced4da;
            border-top: none;
            border-radius: 0 0 0.25rem 0.25rem;
            background-color: #fff;
        }

        .option17 {
            padding: 0.5rem;
            cursor: pointer;
        }

        .option17:hover {
            background-color: #f8f9fa;
        }
           .select-options18 {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
            border: 1px solid #ced4da;
            border-top: none;
            border-radius: 0 0 0.25rem 0.25rem;
            background-color: #fff;
        }

        .option18 {
            padding: 0.5rem;
            cursor: pointer;
        }

        .option18:hover {
            background-color: #f8f9fa;
        }
    </style>
       <script>
    // helpers
const get = (id) => document.getElementById(id);
const create = (type) => document.createElement(type);
const createArr = (val) => new Array(val).fill(undefined);
const randomInRange = (min, max) => Math.round(min + Math.random() * (max - min));
const randomHPos = (parent) => `${randomInRange(100, parent.clientWidth - 100)}px`;
const randomVPos = (parent) => `${randomInRange(100, parent.clientHeight - 100)}px`;
const transFuncs = ['linear', 'ease', 'ease-in', 'ease-in-out', 'ease-out'];
const randomTimingFunction = () => transFuncs[randomInRange(0, transFuncs.length - 1)];
const randomDuration = () => `${randomInRange(.5, 3)}s`;
const randomSkew = () => `${randomInRange(-20, 20)}deg`;
const randomRotate = () => `${randomInRange(-5, 5)}deg`;
const randomScale = () => `scale(${randomInRange(3, 10) / 10})`;
const randomMarginLeft = (parent) => `${randomInRange(10, parent.clientWidth - 10)}px`;
const randomMarginTop = () => `${randomInRange(10, 200)}px`;

// obtain DOM refs
const sky = get('sky');
const plane = get('plane');

// init plane animation
plane.addEventListener('transitionend', planeAnimation);

// add 10 clouds to DOM and start their animations
addClouds(20).forEach(cloudAnimation);

// start plane animation
planeAnimation();

// animate plane transition
function planeAnimation() {
  requestAnimationFrame(doPlaneTransition);
}

function doPlaneTransition() {
  const { style } = plane;
  style.transitionTimingFunction = randomTimingFunction();
  style.transitionDuration = randomDuration();
  style.transform = `
    translateX(${randomHPos(sky)})   
    translateY(${randomVPos(sky)})
    skew(${randomSkew()})
    rotate(${randomRotate()})
  `;
}

// animate a cloud transition
function cloudAnimation(c) {
  requestAnimationFrame(() => {
    doCloudTransition(c);
  });
}

function doCloudTransition({ style }) {
  style.marginLeft = '-100px';
}

// reset cloud transition
function onCloudTransitionend() {
  const { style } = this;

  // make transition instant and move of screen to the right
  style.marginLeft = `${sky.clientWidth + 100}px`;
  style.transitionDuration = '0s';
  
  setTimeout(() => {
    initCloud(this);
    cloudAnimation(this);    
  }, 1000);
}

// initialize cloud with random props
function initCloud({ style }) {
  style.transform = randomScale();
  style.transitionProperty = 'margin-left';
  style.transitionDuration = `${randomInRange(3, 60)}s`;
  style.transitionTimingFunction = randomTimingFunction();
  style.marginTop = randomMarginTop();
}

// create cloud dom element
function createCloud() {
  const c = create('div');

  // set class and initial position
  c.className = 'cloud';
  c.style.marginLeft = randomMarginLeft(sky);

  // initialize random props
  initCloud(c);

  // setup listener and return
  c.addEventListener('transitionend', onCloudTransitionend);
  return c;
}

// add clouds to the DOM
function addClouds(amt) {
  return createArr(amt).map(() => {
    const c = createCloud();
    sky.appendChild(c);
    return c;
  });
}
</script>
<script>
 document.addEventListener('DOMContentLoaded', function() {
    const adultInput = document.querySelector('.getadult_data');
    const childInput = document.querySelector('.form-control[name="child"]');
    const adultCountDisplay = document.getElementById('adultCount');
    const childCountDisplay = document.getElementById('childCount');
       const adult1CountDisplay = document.getElementById('adultCount1');
    const child1CountDisplay = document.getElementById('childCount1');
    const totalTravellersDisplay = document.getElementById('totalTravellers');
    const doneButton = document.getElementById('doneButton');

    // Function to update the display for both adult and child counts
    const updateDisplay = () => {
        const adultCount = parseInt(adultInput.value) || 0;
        const childCount = parseInt(childInput.value) || 0;
        const totalTravellers = adultCount + childCount;

         adultCountDisplay.textContent = adultCount;
        childCountDisplay.textContent = childCount;
             adult1CountDisplay.value = adultCount;
        child1CountDisplay.value = childCount;
        totalTravellersDisplay.textContent = totalTravellers;
    };

    // Increase Adult count
    document.querySelector('.inc-dec-count-box__plus').addEventListener('click', function() {
        adultInput.value = parseInt(adultInput.value) + 1;
        updateDisplay(); // Update the display
    });

    // Decrease Adult count
    document.querySelector('.inc-dec-count-box__minus').addEventListener('click', function() {
        const currentValue = parseInt(adultInput.value);
        if (currentValue > 1) {
            adultInput.value = currentValue - 1;
        } else {
            adultInput.value = 1; // Ensure adult count doesn't go below 1
        }
        updateDisplay(); // Update the display
    });

    // Increase Child count
    document.querySelector('.inc-dec-count-box__plus1').addEventListener('click', function() {
        childInput.value = parseInt(childInput.value) + 1;
        updateDisplay(); // Update the display
    });

    // Decrease Child count
    document.querySelector('.inc-dec-count-box__minus1').addEventListener('click', function() {
        const currentValue = parseInt(childInput.value);
        if (currentValue > 0) {
            childInput.value = currentValue - 1;
        }
        updateDisplay(); // Update the display
    });

    // Done button click event (you can replace this with your actual logic)
    doneButton.addEventListener('click', function() {
        alert('Passenger selection done!');
    });
});


</script>
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
                                <button class="nav-link <?if($form_status1 =="flight_form"){ echo "active"; }?>" id="nav-flights-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-flights" type="button" role="tab" aria-controls="nav-flights"
                                    aria-selected="true">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M26.7504 15.0318L23.3019 14.0739V12.4423C23.3019 12.1882 23.201 11.9446 23.0213 11.7649C22.8417 11.5853 22.598 11.4844 22.344 11.4844C22.0899 11.4844 21.8463 11.5853 21.6666 11.7649C21.487 11.9446 21.3861 12.1882 21.3861 12.4423V13.5407L17.8737 12.5636V5.41761C17.8737 4.65545 17.571 3.9245 17.032 3.38557C16.4931 2.84665 15.7622 2.54388 15 2.54388C14.2378 2.54388 13.5069 2.84665 12.968 3.38557C12.429 3.9245 12.1263 4.65545 12.1263 5.41761V12.5668L8.61394 13.5247V12.4423C8.61394 12.1882 8.51302 11.9446 8.33338 11.7649C8.15373 11.5853 7.91009 11.4844 7.65603 11.4844C7.40198 11.4844 7.15833 11.5853 6.97869 11.7649C6.79905 11.9446 6.69812 12.1882 6.69812 12.4423V14.0739L3.24965 15.0318C3.04777 15.0877 2.86977 15.2082 2.7429 15.3748C2.61602 15.5415 2.54728 15.7452 2.54718 15.9546V19.1476C2.54725 19.2952 2.5814 19.4407 2.64698 19.5729C2.71255 19.7051 2.80777 19.8204 2.92522 19.9097C3.04267 19.999 3.17916 20.06 3.32405 20.0879C3.46895 20.1157 3.61832 20.1098 3.76053 20.0704L12.1263 17.7491V22.1683L11.6569 22.2992C11.0573 22.473 10.5301 22.8363 10.1543 23.3348C9.7784 23.8333 9.57407 24.4401 9.57185 25.0643V26.4916C9.57214 26.6396 9.60671 26.7855 9.67285 26.9179C9.739 27.0503 9.83492 27.1656 9.95309 27.2547C10.0713 27.3438 10.2085 27.4043 10.354 27.4314C10.4994 27.4586 10.6492 27.4517 10.7916 27.4112L15 26.2106L19.2084 27.4112C19.2934 27.4366 19.3816 27.4495 19.4703 27.4495C19.6784 27.4486 19.8808 27.3815 20.0482 27.258C20.1666 27.1684 20.2625 27.0525 20.3285 26.9196C20.3944 26.7866 20.4285 26.6401 20.4282 26.4916V25.0611C20.4281 24.4372 20.2249 23.8302 19.8493 23.3319C19.4737 22.8336 18.9461 22.4711 18.3463 22.2992L17.8737 22.1651V17.7491L26.2395 20.0704C26.3817 20.1098 26.5311 20.1157 26.676 20.0879C26.8209 20.06 26.9574 19.999 27.0748 19.9097C27.1922 19.8204 27.2875 19.7051 27.353 19.5729C27.4186 19.4407 27.4528 19.2952 27.4528 19.1476V15.9546C27.4527 15.7452 27.384 15.5415 27.2571 15.3748C27.1302 15.2082 26.9522 15.0877 26.7504 15.0318Z" />
                                    </svg>
                                    <span>Flights</span>
                                </button>
                                <button class="nav-link <?if($form_status1 =="hotel_form"){ echo "active"; }?>" id="nav-hotels-tab" data-bs-toggle="tab"
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
                                <button class="nav-link  <?if($form_status1 =="tour_form"){ echo "active"; }?>" id="nav-tours-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-tours" type="button" role="tab" aria-controls="nav-tours"
                                    aria-selected="false">
                                    <svg width="25" height="25" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15 2.54385C8.12174 2.54385 2.54715 8.11844 2.54715 14.9967C2.54715 21.8749 8.12174 27.4495 15 27.4495C21.8782 27.4495 27.4528 21.8749 27.4528 14.9967C27.4528 8.11844 21.8782 2.54385 15 2.54385ZM24.8358 12.6618H23.537C23.1246 12.6618 22.783 13.0023 22.783 13.4158V13.7502C22.783 14.036 22.6239 14.2974 22.3706 14.4254L21.6155 14.8021C21.374 14.9237 21.0853 14.9055 20.8616 14.7535L19.9782 14.1639C19.7838 14.0362 19.5423 13.9997 19.3186 14.0788L19.1882 14.1211C18.717 14.2731 18.5286 14.8386 18.7995 15.2521L19.4474 16.2191C19.5822 16.4268 19.8206 16.5533 20.0735 16.5533H20.4741C20.8923 16.5533 21.228 16.8938 21.228 17.3073V17.8608C21.228 18.025 21.175 18.1831 21.0749 18.3108L20.1677 19.5269C20.097 19.6181 20.0499 19.7275 20.0263 19.837L19.8202 20.95C19.7907 21.1081 19.7083 21.254 19.5846 21.3695C19.1251 21.7891 18.7187 22.2636 18.3709 22.786L17.7346 23.7346C17.66 23.8482 17.5448 23.9174 17.4422 24.0015C17.0298 24.1137 16.6075 24.1997 16.1745 24.2544C15.8481 24.1412 15.5689 23.9116 15.4079 23.5885C15.1428 23.0593 15.0015 22.4697 15.0015 21.8738V20.4205C15 20.007 14.6643 19.6665 14.246 19.6665H12.9861C12.2852 19.6665 11.6076 19.3868 11.107 18.8882C10.6123 18.392 10.3302 17.7159 10.3302 17.0105V16.3247C10.3302 15.4919 10.7248 14.7009 11.3964 14.2023L12.7337 13.193C13.1953 12.8515 13.7547 12.6618 14.3287 12.6618H14.3699C14.7823 12.6618 15.1944 12.7591 15.5598 12.9415L16.2782 13.3002C16.4544 13.3914 16.6636 13.406 16.8533 13.3428L19.1566 12.5767C19.4629 12.4733 19.6751 12.1814 19.6751 11.8592C19.6751 11.4396 19.3335 11.1052 18.9212 11.1052H18.4265C18.2262 11.1052 18.0377 11.0261 17.8962 10.8863L17.5605 10.5458C17.4176 10.4047 17.223 10.3269 17.0236 10.3269H12.6408C12.2284 10.3269 11.8868 9.98636 11.8868 9.57289V9.35886C11.8868 9.01227 12.1224 8.708 12.4583 8.62336L13.1651 8.45311C13.3477 8.40447 13.5068 8.29502 13.6069 8.13693L14.0016 7.54736C14.139 7.3416 14.3773 7.21367 14.6254 7.21367H15.8036C16.2218 7.21367 16.5576 6.87316 16.5576 6.45968V5.01107C20.6232 5.64393 23.8921 8.70217 24.8358 12.6618Z" />
                                    </svg>
                                    <span>Tours</span>
                                </button>
                                <button class="nav-link <?if($form_status1 =="visa_form"){ echo "active"; }?>" id="nav-visa-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-visa" type="button" role="tab" aria-controls="nav-visa" aria-selected="false">
                                    <svg width="25" height="25" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.2675 11.1052H12.169C12.2415 9.79033 12.4871 8.60731 12.8602 7.68016C11.5123 8.3242 10.5243 9.58651 10.2675 11.1052ZM10.2675 12.6618C10.5248 14.1804 11.5123 15.4427 12.8602 16.0868C12.4866 15.1596 12.2415 13.9766 12.169 12.6618H10.2675ZM14.8585 16.4896C15.2326 16.1272 15.8688 14.8152 15.9982 12.6618H13.7183C13.8482 14.8148 14.4844 16.1272 14.8585 16.4896ZM13.7188 11.1052H15.9987C15.8693 8.9522 15.2331 7.63978 14.859 7.27739C14.4844 7.63978 13.8482 8.9522 13.7188 11.1052ZM16.8568 16.0868C18.2047 15.4427 19.1927 14.1804 19.4495 12.6618H17.548C17.4755 13.9766 17.2304 15.1596 16.8568 16.0868ZM24.1981 2.54385H7.07549C5.35593 2.54385 3.96228 3.9375 3.96228 5.65706V24.3363C3.96228 26.0559 5.35593 27.4495 7.07549 27.4495H24.1981C25.0577 27.4495 25.7547 26.7524 25.7547 25.8929V4.10046C25.7547 3.24092 25.0577 2.54385 24.1981 2.54385ZM20.3066 22.7797H9.41039C8.98233 22.7797 8.63209 22.4295 8.63209 22.0014C8.63209 21.5733 8.98233 21.2231 9.41039 21.2231H20.3066C20.7347 21.2231 21.0849 21.5733 21.0849 22.0014C21.0849 22.4295 20.7347 22.7797 20.3066 22.7797ZM14.8585 18.1099C11.4199 18.1099 8.63209 15.3221 8.63209 11.8835C8.63209 8.44484 11.4199 5.65706 14.8585 5.65706C18.2971 5.65706 21.0849 8.44484 21.0849 11.8835C21.0849 15.3221 18.2971 18.1099 14.8585 18.1099ZM16.8568 7.68016C17.2304 8.60731 17.4755 9.79033 17.548 11.1052H19.4495C19.1927 9.58651 18.2047 8.3242 16.8568 7.68016Z" />
                                    </svg>
                                    <span>Visa</span>
                                </button>
                            </div>
                        </nav>
                        
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade <?if(isset($form_status)){ echo "show"; }?> <?if(isset($form_status)){echo "active"; }?>" id="nav-flights" role="tabpanel"
                                aria-labelledby="nav-flights-tab">
                            
                                <div class="row">
                                    <div class="col-sm-auto mb-20">
                                        <label for="exampleInputEmail1" class="form-label fw-bold">Select your
                                            destination</label>
                                        <div>
                                            
                                        
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flighttrip"
                                                    id="tripOneway" value="One Way"  <?php if(isset($journey_date) && !isset($return_date)){ echo 'checked'; } ?>>
                                                <label class="form-check-label" for="tripOneway">One Way</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flighttrip"
                                                    id="tripRoundtrip" value="Round Trip"<?php if(isset($journey_date) && isset($return_date)){ echo 'checked'; } ?> >
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
                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span>Adult <span id="adultCount">1</span></span>
                                            <span>Child <span id="childCount">0</span></span>
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
                                                                        <input type="text" class="form-control getadult_data"
                                                                            id="exampleFormControlInput1"  value="1">
                                                                           
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
                                                                    <div class="inc-dec-count-box__minus1">
                                                                        <i class="fas fa-minus"></i>
                                                                    </div>
                                                                    <div class="inc-dec-count-box__value">
                                                                        <input type="text" class="form-control childget"
                                                                            id="exampleFormControlInput1"  value="0">
                                                                          
                                                                    </div>
                                                                    <div class="inc-dec-count-box__plus1">
                                                                        <i class="fas fa-plus"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
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
                                                    <span id="selectedClass">Economy</span> <!-- Update this line if needed -->
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li>
                                                        <a class="dropdown-item dropdown-item11" href="javascript:void(0)">Economy</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item dropdown-item11" href="javascript:void(0)">Premium Economy</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item dropdown-item11" href="javascript:void(0)">Business</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item dropdown-item11" href="javascript:void(0)">First Class</a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </div>
                                </div>
                                <form action="{{url('/flight_search')}}" enctype="multipart/form-data" method="post">
                                         @csrf
                                <div class="row opt-one-way onChangeOneWay">
                                    
                                    <div class="col-xxl-4 col-xl-3 col-lg-3 mb-10">
                                        <div class="custom-select-wrapper">
                    <input type="text" class="form-control select-input fromInput" name="from" value="<?if(isset($from)){ echo $from; }?>"id="from" placeholder="Select an option">
                      <?php $filterResult =\App\Airport_Model::get(); ?>
                    <ul class="list-unstyled select-options">
                        
                          @foreach($filterResult as $state_)
                                
                            <li class="option" data-value="{{ $state_->AIRPORTCODE }}">{{ $state_->AIRPORTCODE }} - {{ $state_->AIRPORTNAME }} - {{ $state_->CITYNAME }} ({{ $state_->COUNTRYCODE }})</li>
                        @endforeach
                                    </ul>
                                </div>
                                    </div>
                                    <div class="col-xxl-auto col-xl-auto col-lg-auto col-md mb-10 d-flex justify-content-center">
                                        <a class="btn btn-interchange px-10 py-10 interchangeButton">
                                           <i class="fas fa-exchange-alt" style="font-size: 25px;"></i>
                                        </a>
                                    </div>
                                    <div class="col-xxl-4 col-xl-3 col-lg-3 mb-10 mb-md-20">
                                      <div class="custom-select-wrapper">
                    <input type="text" class="form-control select-input1 toInput"  value="<?if(isset($to)){ echo $to; }?>" name="to" id="to" placeholder="Select an option">
                     
                    <ul class="list-unstyled select-options1">
                        
                          @foreach($filterResult as $state_)
                            <li class="option1" data-value="{{ $state_->AIRPORTCODE }}">{{ $state_->CITYNAME }} - {{ $state_->AIRPORTCODE }} - {{ $state_->AIRPORTNAME }} - ({{ $state_->COUNTRYCODE }})</li>
                        @endforeach
                    </ul>
                </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-3 col-lg mb-10 mb-md-20">
                                        <input type="date" value="<?if(isset($journey_date)){ echo $journey_date; }else{ echo date('Y-m-d'); }?>" id="demo11"
                                            name="journey_date" class="txtDate form-control getDate" required>
                                    </div>
                                      <input type="hidden" id="adultCount1" name="adult" value="1">
                                      <input type="hidden" id="childCount1" name="children" value="0">
                                      <input type="hidden" name="infant" value="0">
                                      <input type="hidden" name="cabin_class"  id="classDisplay">
                                      <input type="hidden" name="form_status" value="one"> 
                                    <div class="col mb-10 d-flex justify-content-lg-end justify-content-center">
                                        <button type="submit" class="btn btn-theme-blue px-30 py-10 Click-here">Search</button>
                                    </div>
                                      
                                </div>
                                    </form>
                                <form action="{{url('/return-flight-search')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                <div class="row opt-round-trip onChangeRoundTrip">
                                    <div class="col-md-3 mb-10">
                                             <div class="custom-select-wrapper">
                                            <input type="text" class="form-control select-input2 fromInput1" value="<?if(isset($from)){ echo $from; }?>" name="from"  id="from1"placeholder="Select an option">
                                              <?php $filterResult =\App\Airport_Model::get(); ?>
                                            <ul class="list-unstyled select-options2">
                                                
                                                  @foreach($filterResult as $state_)
                                                    <li class="option2" data-value="{{ $state_->AIRPORTCODE }}"> {{ $state_->AIRPORTCODE }} - {{ $state_->AIRPORTNAME }} - {{ $state_->CITYNAME }} ({{ $state_->COUNTRYCODE }})</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto mb-10 d-flex justify-content-center">
                                        <a class="btn btn-interchange px-10 py-10 interchangeButton1">
                                          <i class="fas fa-exchange-alt" style="font-size: 25px;"></i>
                                        </a>
                                    </div>
                                    <div class="col-md-3 mb-10 mb-md-20">
                                             <div class="custom-select-wrapper">
                                            <input type="text" class="form-control select-input3 toInput1"value="<?if(isset($to)){ echo $to; }?>" name="to" id="to1" placeholder="Select an option">
                                              <?php $filterResult =\App\Airport_Model::get(); ?>
                                            <ul class="list-unstyled select-options3">
                                                
                                                  @foreach($filterResult as $state_)
                                                    <li class="option3" data-value="{{ $state_->AIRPORTCODE }}">{{ $state_->AIRPORTCODE }} - {{ $state_->AIRPORTNAME }} - {{ $state_->CITYNAME }} ({{ $state_->COUNTRYCODE }})</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="col-md-2 col-md-2 mb-10 mb-md-20 position-relative">
                                         <input type="date" value="<?if(isset($journey_date)){ echo $journey_date; }else{ echo date('Y-m-d'); }?>" id="demo1"
                                                        name="journey_date" class="txtDate form-control getDate" required>
                                        <!--<input type="text" id="demo" value="" name="journey_date"-->
                                        <!--    class="txtDate form-control date-box getDate" placeholder="Journey Date"-->
                                        <!--    min="date()" required>-->
                                        <!--<i class="far fa-calendar"></i>-->
                                    </div>
                                    <div class="col-md-2 col-md-2 mb-10 mb-md-20 position-relative">
                                       <input type="date" value="<?if(isset($return_date)){ echo $return_date; }else{ echo date('Y-m-d'); }?>" id="demo3"
                                                        name="return_date" class="txtDate form-control getDate" required>
                                       <!--<input type="text" value="" name="return_date"-->
                                       <!--     class="txtDate form-control date-box" placeholder="Return Date" min="date()"-->
                                       <!--     required>-->
                                        <!--<i class="far fa-calendar"></i>-->
                                    </div>
                                    <input type="hidden" name="adult" value="1">
                                      <input type="hidden" name="children" value="0">
                                      <input type="hidden" name="infant" value="0">
                                      <input type="hidden" name="cabin_class" value="2">
                                      <input type="hidden" name="form_status" value="return">
                                    <div class="col mb-10 d-flex justify-content-xxl-end justify-content-center">
                                        <button type="submit" class="btn btn-theme-blue px-30 py-10 Click-here">Search</button>
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
                                                     <div class="custom-select-wrapper">
                                            <input type="text" class="form-control select-input4 fromInput2"value="<?if(isset($from)){ echo $from; }?>" name="from[]"id="from5" placeholder="Select an option">
                                              <?php $filterResult =\App\Airport_Model::get(); ?>
                                            <ul class="list-unstyled select-options4">
                                                
                                                  @foreach($filterResult as $state_)
                                                    <li class="option4" data-value="{{ $state_->AIRPORTCODE }}">{{ $state_->AIRPORTCODE }} - {{ $state_->AIRPORTNAME }} - {{ $state_->CITYNAME }} ({{ $state_->COUNTRYCODE }})</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                                   
                                                </div>
                                                <div class="col-lg-auto mb-20 mb-md-10 d-flex justify-content-center">
                                                    <a class="btn btn-interchange px-10 py-10 interchangeButton2">
                                                       <i class="fas fa-exchange-alt" style="font-size: 25px;"></i>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 mb-20">
                                                     <div class="custom-select-wrapper">
                                            <input type="text" class="form-control select-input5 toInput2"value="<?if(isset($to)){ echo $to; }?>" name="to[]" id="to5" placeholder="Select an option">
                                              <?php $filterResult =\App\Airport_Model::get(); ?>
                                            <ul class="list-unstyled select-options5">
                                                
                                                  @foreach($filterResult as $state_)
                                                    <li class="option5" data-value="{{ $state_->AIRPORTCODE }}">{{ $state_->AIRPORTCODE }} - {{ $state_->AIRPORTNAME }} - {{ $state_->CITYNAME }} ({{ $state_->COUNTRYCODE }})</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                                </div>
                                                <div class="col-lg mb-20 mb-md-10">
                                                    
                                                    <input type="date" value="<?php echo date('Y-m-d'); ?>" id="demo2"
                                                        name="journey_date[]" class="txtDate form-control getDate" required>
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
                                                     <div class="custom-select-wrapper">
                                            <input type="text" class="form-control select-input6" name="from[]"  placeholder="Select an option">
                                              <?php $filterResult =\App\Airport_Model::get(); ?>
                                            <ul class="list-unstyled select-options6">
                                                
                                                  @foreach($filterResult as $state_)
                                                    <li class="option6" data-value="{{ $state_->AIRPORTCODE }}">{{ $state_->AIRPORTCODE }} - {{ $state_->AIRPORTNAME }} - {{ $state_->CITYNAME }} ({{ $state_->COUNTRYCODE }})</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                                </div>
                                                <div class="col-lg-auto mb-20 mb-md-10 d-flex justify-content-center">
                                                    <button class="btn btn-interchange px-10 py-10">
                                                       <i class="fas fa-exchange-alt" style="font-size: 25px;"></i>
                                                    </button>
                                                </div>
                                                <div class="col-lg-4 mb-20">
                                                    <div class="custom-select-wrapper">
                                            <input type="text" class="form-control select-input7" name="to[]" placeholder="Select an option">
                                              <?php $filterResult =\App\Airport_Model::get(); ?>
                                            <ul class="list-unstyled select-options7">
                                                
                                                  @foreach($filterResult as $state_)
                                                    <li class="option7" data-value="{{ $state_->AIRPORTCODE }}">{{ $state_->AIRPORTCODE }} - {{ $state_->AIRPORTNAME }} - {{ $state_->CITYNAME }} ({{ $state_->COUNTRYCODE }})</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                                </div>
                                                <div class="col-lg mb-20 mb-md-10">
                                                    <input type="date" value="<?php echo date('Y-m-d'); ?>" 
                                                        name="journey_date[]" class="txtDate form-control getDate" required>
                                                </div>
                                                <div class="col-lg-auto mb-20 mb-md-10">
                                                    <button type="submit"
                                                        class="btn btn-th-outline-danger btnRemove py-10 px-20"><i
                                                            class="fas fa-times"></i></button>
                                                </div>
                                            </div>
                                             <div class="row child-flight-row childFlightRow">
                                                <div class="col-lg-4 mb-20 mb-md-10">
                                                     <div class="custom-select-wrapper"style="margin-bottom:10px;" >
                                            <input type="text" class="form-control select-input11" name="from[]"  placeholder="Select an option">
                                                    
                                             <ul class="list-unstyled select-options11">
                                                
                                                  @foreach($filterResult as $state_)
                                                    <li class="option11" data-value="{{ $state_->AIRPORTCODE }}">{{ $state_->AIRPORTCODE }} - {{ $state_->AIRPORTNAME }} - {{ $state_->CITYNAME }} ({{ $state_->COUNTRYCODE }})</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                                </div>
                                                <div class="col-lg-auto mb-20 mb-md-10 d-flex justify-content-center">
                                                    <button class="btn btn-interchange px-10 py-10">
                                                       <i class="fas fa-exchange-alt" style="font-size: 25px;"></i>
                                                    </button>
                                                </div>
                                                <div class="col-lg-4 mb-20">
                                                    <div class="custom-select-wrapper"style="margin-bottom:10px;" >
                                            <input type="text" class="form-control select-input12" name="to[]" placeholder="Select an option">
                                            
                                            <ul class="list-unstyled select-options12">
                                                
                                                  @foreach($filterResult as $state_)
                                                    <li class="option12" data-value="{{ $state_->AIRPORTCODE }}">{{ $state_->AIRPORTCODE }} - {{ $state_->AIRPORTNAME }} - {{ $state_->CITYNAME }} ({{ $state_->COUNTRYCODE }})</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                                </div>
                                                <div class="col-lg mb-20 mb-md-10">
                                                    <input type="date" value="<?php echo date('Y-m-d'); ?>" 
                                                        name="journey_date[]" class="txtDate form-control getDate" required>
                                                </div>
                                                <div class="col-lg-auto mb-20 mb-md-10">
                                                    <button type="submit"
                                                        class="btn btn-th-outline-danger btnRemove py-10 px-20"><i
                                                            class="fas fa-times"></i></button>
                                                </div>
                                            </div>
                                             <div class="row child-flight-row childFlightRow">
                                                <div class="col-lg-4 mb-20 mb-md-10">
                                                     <div class="custom-select-wrapper"style="margin-bottom:10px;" >
                                            <input type="text" class="form-control select-input13" name="from[]"  placeholder="Select an option">
                                                    
                                             <ul class="list-unstyled select-options13">
                                                
                                                  @foreach($filterResult as $state_)
                                                    <li class="option13" data-value="{{ $state_->AIRPORTCODE }}">{{ $state_->AIRPORTCODE }} - {{ $state_->AIRPORTNAME }} - {{ $state_->CITYNAME }} ({{ $state_->COUNTRYCODE }})</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                                </div>
                                                <div class="col-lg-auto mb-20 mb-md-10 d-flex justify-content-center">
                                                    <button class="btn btn-interchange px-10 py-10">
                                                       <i class="fas fa-exchange-alt" style="font-size: 25px;"></i>
                                                    </button>
                                                </div>
                                                <div class="col-lg-4 mb-20">
                                                    <div class="custom-select-wrapper"style="margin-bottom:10px;" >
                                            <input type="text" class="form-control select-input14" name="to[]" placeholder="Select an option">
                                            
                                            <ul class="list-unstyled select-options14">
                                                
                                                  @foreach($filterResult as $state_)
                                                    <li class="option14" data-value="{{ $state_->AIRPORTCODE }}">{{ $state_->AIRPORTCODE }} - {{ $state_->AIRPORTNAME }} - {{ $state_->CITYNAME }} ({{ $state_->COUNTRYCODE }})</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                                </div>
                                                <div class="col-lg mb-20 mb-md-10">
                                                    <input type="date" value="<?php echo date('Y-m-d'); ?>" 
                                                        name="journey_date[]" class="txtDate form-control getDate" required>
                                                </div>
                                                <div class="col-lg-auto mb-20 mb-md-10">
                                                    <button type="submit"
                                                        class="btn btn-th-outline-danger btnRemove py-10 px-20"><i
                                                            class="fas fa-times"></i></button>
                                                </div>
                                            </div>
                                             <div class="row child-flight-row childFlightRow">
                                                <div class="col-lg-4 mb-20 mb-md-10">
                                                     <div class="custom-select-wrapper"style="margin-bottom:10px;" >
                                            <input type="text" class="form-control select-input15" name="from[]"  placeholder="Select an option">
                                                    
                                             <ul class="list-unstyled select-options15">
                                                
                                                  @foreach($filterResult as $state_)
                                                    <li class="option15" data-value="{{ $state_->AIRPORTCODE }}">{{ $state_->AIRPORTCODE }} - {{ $state_->AIRPORTNAME }} - {{ $state_->CITYNAME }} ({{ $state_->COUNTRYCODE }})</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                                </div>
                                                <div class="col-lg-auto mb-20 mb-md-10 d-flex justify-content-center">
                                                    <button class="btn btn-interchange px-10 py-10">
                                                       <i class="fas fa-exchange-alt" style="font-size: 25px;"></i>
                                                    </button>
                                                </div>
                                                <div class="col-lg-4 mb-20">
                                                    <div class="custom-select-wrapper"style="margin-bottom:10px;" >
                                            <input type="text" class="form-control select-input16" name="to[]" placeholder="Select an option">
                                            
                                            <ul class="list-unstyled select-options16">
                                                
                                                  @foreach($filterResult as $state_)
                                                    <li class="option16" data-value="{{ $state_->AIRPORTCODE }}">{{ $state_->AIRPORTCODE }} - {{ $state_->AIRPORTNAME }} - {{ $state_->CITYNAME }} ({{ $state_->COUNTRYCODE }})</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                                </div>
                                                <div class="col-lg mb-20 mb-md-10">
                                                    <input type="date" value="<?php echo date('Y-m-d'); ?>" 
                                                        name="journey_date[]" class="txtDate form-control getDate" required>
                                                </div>
                                                <div class="col-lg-auto mb-20 mb-md-10">
                                                    <button type="submit"
                                                        class="btn btn-th-outline-danger btnRemove py-10 px-20"><i
                                                            class="fas fa-times"></i></button>
                                                </div>
                                            </div>
                                             <div class="row child-flight-row childFlightRow">
                                                <div class="col-lg-4 mb-20 mb-md-10">
                                                     <div class="custom-select-wrapper"style="margin-bottom:10px;" >
                                            <input type="text" class="form-control select-input17" name="from[]"  placeholder="Select an option">
                                                    
                                             <ul class="list-unstyled select-options17">
                                                
                                                  @foreach($filterResult as $state_)
                                                    <li class="option17" data-value="{{ $state_->AIRPORTCODE }}">{{ $state_->AIRPORTCODE }} - {{ $state_->AIRPORTNAME }} - {{ $state_->CITYNAME }} ({{ $state_->COUNTRYCODE }})</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                                </div>
                                                <div class="col-lg-auto mb-20 mb-md-10 d-flex justify-content-center">
                                                    <button class="btn btn-interchange px-10 py-10">
                                                       <i class="fas fa-exchange-alt" style="font-size: 25px;"></i>
                                                    </button>
                                                </div>
                                                <div class="col-lg-4 mb-20">
                                                    <div class="custom-select-wrapper"style="margin-bottom:10px;" >
                                            <input type="text" class="form-control select-input18" name="to[]" placeholder="Select an option">
                                            
                                            <ul class="list-unstyled select-options18">
                                                
                                                  @foreach($filterResult as $state_)
                                                    <li class="option18" data-value="{{ $state_->AIRPORTCODE }}">{{ $state_->AIRPORTCODE }} - {{ $state_->AIRPORTNAME }} - {{ $state_->CITYNAME }} ({{ $state_->COUNTRYCODE }})</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                                </div>
                                                <div class="col-lg mb-20 mb-md-10">
                                                    <input type="date" value="<?php echo date('Y-m-d'); ?>" 
                                                        name="journey_date[]" class="txtDate form-control getDate" required>
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
                                                <!--<a href="javascript:void(0)" id="btnAddNewFlight">-->
                                                <!--    <div-->
                                                <!--        class="border-box-radius-10 d-flex justify-content-center align-items-center">-->
                                                <!--        <i class="fas fa-plus"></i> <span class="pl-10">Add a new-->
                                                <!--            flight</span>-->
                                                <!--    </div>-->
                                                <!--</a>-->
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 d-flex justify-content-center"  style="margin-top:15px;">
                                                <button type="submit"
                                                    class="btn btn-theme-blue px-30 py-10 Click-here">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                          
                            </div>
                            <div class="tab-pane fade  <?if($form_status1 =="hotel_form"){ echo "active"; }?> <?if($form_status1 =="hotel_form"){ echo "show"; }?>" id="nav-hotels" role="tabpanel" aria-labelledby="nav-hotels-tab">
                               <form action="{{url('/hotel_search')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                <div class="row">
                                    
                                    <div class="col-xxl-4 col-xl-3 col-lg-4 mb-20">
                                        <div class="custom-select-wrapper">
                                            <label>City</label>
                                          <input type="text" class="form-control select-input8 hoteldate1" id="hoteldate" name="city_display"  placeholder="Select an option" autocomplete="off">
                                                <input type="hidden" name="city_name" class="hoteldate2" id="city_name">
                                                <ul class="list-unstyled select-options8" id="city_list">
                                                    <?php $data =\App\Hotel_City_Model::select()->take(500)->get(); ?>
                                                    @foreach($data as $state_)
                                                        <li class="option8" data-value="{{$state_->name}}">{{$state_->name}} - {{$state_->CountryName}}</li>
                                                    @endforeach
                                                </ul>
                                        </div>
                                       
                                    </div>
                                 
                                     <div class="col-xl-2 col-md-6 col-lg-4 mb-20 position-relative">
                                        <label>Check In</label>
                                                <input type="date"  value="<?if(isset($checkin_date)){ echo $checkin_date; }?>" id="demo7"
                                            name="checkin_date" class="txtDate form-control getDate" required>
                                      
                                    </div>
                                    <div class="col-xl-2 col-md-6 col-lg-4 mb-20 position-relative">
                                        <label>Check Out</label>
                                                <input type="date" vavalue="<?if(isset($checkout_date)){ echo $checkout_date; }?>" id="demo8"
                                            name="checkout_date" class="txtDate form-control getDate" required>
                                     
                                    </div>
                                    <div class="col-xl-auto col-md-6 mb-20">
                                        <label>Rooms</label>
                                        <input type="number" name="NoOfRoom" class="form-control" value="<?if(isset($NoOfRoom)){ echo $NoOfRoom; }else{ echo '1';}?>" id="exampleFormControlInput1" placeholder="Rooms" required>
                                    </div>
                                    
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script>
 document.addEventListener('DOMContentLoaded', function() {
    const adultInput = document.querySelector('.getadult_data');
    const childInput = document.querySelector('.childget');
    const adultCountDisplay = document.getElementById('adultCount');
    const childCountDisplay = document.getElementById('childCount');
    const adult1CountDisplay = document.getElementById('adultCount1');
    const child1CountDisplay = document.getElementById('childCount1');
    const totalTravellersDisplay = document.getElementById('totalTravellers');
    const doneButton = document.getElementById('doneButton');

    // Set default values
    if (!adultInput.value) adultInput.value = 1; // Ensure default value is set for adults
    if (!childInput.value) childInput.value = 0; // Ensure default value is set for children

    // Function to update the display for both adult and child counts
    const updateDisplay = () => {
        const adultCount = parseInt(adultInput.value) || 1; // Default to 1 if parsing fails
        const childCount = parseInt(childInput.value) || 0; // Default to 0 if parsing fails
        const totalTravellers = adultCount + childCount;

        adultCountDisplay.textContent = adultCount;
        childCountDisplay.textContent = childCount;
        adult1CountDisplay.value = adultCount;
        child1CountDisplay.value = childCount;
        totalTravellersDisplay.textContent = totalTravellers;
    };

    // Initial display update to reflect default values
    updateDisplay();

    // Increase Adult count
    document.querySelector('.inc-dec-count-box__plus').addEventListener('click', function() {
        adultInput.value = parseInt(adultInput.value) + 1;
        updateDisplay(); // Update the display
    });

    // Decrease Adult count
    document.querySelector('.inc-dec-count-box__minus').addEventListener('click', function() {
        const currentValue = parseInt(adultInput.value);
        if (currentValue > 1) {
            adultInput.value = currentValue - 1;
        } else {
            adultInput.value = 1; // Ensure adult count doesn't go below 1
        }
        updateDisplay(); // Update the display
    });

    // Increase Child count
    document.querySelector('.inc-dec-count-box__plus1').addEventListener('click', function() {
        childInput.value = parseInt(childInput.value) + 1;
        updateDisplay(); // Update the display
    });

    // Decrease Child count
    document.querySelector('.inc-dec-count-box__minus1').addEventListener('click', function() {
        const currentValue = parseInt(childInput.value);
        if (currentValue > 0) {
            childInput.value = currentValue - 1;
        }
        updateDisplay(); // Update the display
    });

    // Done button click event (you can replace this with your actual logic)
    doneButton.addEventListener('click', function() {
        alert('Passenger selection done!');
    });
});

</script>
<script>
 document.addEventListener('DOMContentLoaded', function() {
    const adultInput = document.querySelector('.getadult_data1');
    const childInput = document.querySelector('.getchild_data1');
    const adultCountDisplay = document.getElementById('adultCount2');
    const childCountDisplay = document.getElementById('childCount2');
    
     const adult3CountDisplay = document.getElementById('adultCount3');
    const child3CountDisplay = document.getElementById('childCount3');
    const totalTravellersDisplay = document.getElementById('totalTravellers');
    const doneButton = document.getElementById('doneButton');
    

    // Function to update the display for both adult and child counts
    const updateDisplay = () => {
        const adultCount = parseInt(adultInput.value) || 0;
        const childCount = parseInt(childInput.value) || 0;
        const totalTravellers = adultCount + childCount;

        adultCountDisplay.textContent = adultCount;
        childCountDisplay.textContent = childCount;
        totalTravellersDisplay.textContent = totalTravellers;
        
        adult3CountDisplay.value = adultCount;
        child3CountDisplay.value = childCount;
    };

    // Increase Adult count
    document.querySelector('.inc-dec-count-box__plus3').addEventListener('click', function() {
        adultInput.value = parseInt(adultInput.value) + 1;
        updateDisplay(); // Update the display
    });

    // Decrease Adult count
    document.querySelector('.inc-dec-count-box__minus3').addEventListener('click', function() {
        const currentValue = parseInt(adultInput.value);
        if (currentValue > 1) {
            adultInput.value = currentValue - 1;
        } else {
            adultInput.value = 1; // Ensure adult count doesn't go below 1
        }
        updateDisplay(); // Update the display
    });

    // Increase Child count
    document.querySelector('.inc-dec-count-box__plus4').addEventListener('click', function() {
        childInput.value = parseInt(childInput.value) + 1;
        updateDisplay(); // Update the display
    });

    // Decrease Child count
    document.querySelector('.inc-dec-count-box__minus4').addEventListener('click', function() {
        const currentValue = parseInt(childInput.value);
        if (currentValue > 0) {
            childInput.value = currentValue - 1;
        }
        updateDisplay(); // Update the display
    });

    // Done button click event (you can replace this with your actual logic)
    doneButton.addEventListener('click', function() {
        alert('Passenger selection done!');
    });
});
</script>
                
                                    
                                    <div class="col-md mb-20 mb-20">
                                        <div class="dropdown dropdown-style-2">
                                            <label>Guest</label>
                                          <button class="btn dropdown-toggle w-100" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                       <span>Adult:<span id="adultCount2">2</span></span>
                                        <span>Child: <span id="childCount2">0</span></span>
                                    </button>

                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li>
                                                     <a class="dropdown-item" href="#">Action</a> 
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
                                                                    <div class="inc-dec-count-box__minus3">
                                                                        <i class="fas fa-minus"></i>
                                                                    </div>
                                                                    <div class="inc-dec-count-box__value">
                                                                        <input type="number" class="form-control getadult_data1" name="adult12"
                                                                            id="exampleFormControlInput1" value="2">
                                                                    </div>
                                                                    <div class="inc-dec-count-box__plus3">
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
                                                                    <div class="inc-dec-count-box__minus4">
                                                                        <i class="fas fa-minus"></i>
                                                                    </div>
                                                                    <div class="inc-dec-count-box__value">
                                                                        <input type="number" class="form-control getchild_data1"
                                                                           name="child12" id="exampleFormControlInput1" value="0">
                                                                    </div>
                                                                    <div class="inc-dec-count-box__plus4">
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
                                    <input type="hidden" id="adultCount3" name="adult" value="1">
                                    <input type="hidden" id="childCount3" name="children" value="0">
                                    <input type="hidden" name="infant" value="0">
                                    <input type="hidden" name="form_status" id="hostels">
                                    <div class="col-md-12 d-flex justify-content-center" style="margin-top:15px;">
                                        <button type="submit" class="btn btn-theme-blue px-30 py-10 Click-here1">Search</button>
                                    </div>
                                
                                
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane fade <?if($form_status1 =="tour_form"){ echo "active"; }?> <?if($form_status1 =="tour_form"){ echo "show"; }?>" id="nav-tours" role="tabpanel"
                                aria-labelledby="nav-tours-tab">
                                
                                <form action="{{url('/tour-search-list')}}" enctype="multipart/form-data" method="post">
                                                        @csrf
                                <div class="row">
                                    <div class="col-lg-4 mb-md-20">
                                        
                                        <div class="custom-select-wrapper">
                                          
                                                <input type="text" class="form-control select-input9" name="city_name" placeholder="Select an option">
                                          <?php $data =\App\CountryCode_Model::get(); ?>
                                            <ul class="list-unstyled select-options9">
                                                
                                                   @foreach($data as $state_)
                                                    <li class="option9" data-value="{{$state_->name}}">{{__($state_->name)}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                     
                                    </div>
                                    <div class="col-lg-3 mb-md-20">
                                        <select class="select-tours select2-style-2" name="tour_type" required>
                                             <option value="<?if(isset($tour_type)){ echo $tour_type; }?>"><?if(isset($tour_type)){ echo $tour_type; }?></option>
                                            <option value="single">Single</option>
                                            <option value="group">Group</option>
                                            <option value="couple">Couple</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 mb-md-20">
                                        <input type="number" class="form-control" id="exampleFormControlInput1" value="<?if(isset($day)){ echo $day; }?>" placeholder="Days" name="day" required>
                                    </div>  
                                    <div class="col d-flex justify-content-lg-end justify-content-center">
                                        <button type="submit" class="btn btn-theme-blue px-30 py-10">Search</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane fade <?if($form_status1 =="visa_form"){ echo "active"; }?> <?if($form_status1 =="visa_form"){ echo "show"; }?>" id="nav-visa" role="tabpanel" aria-labelledby="nav-visa-tab">
                                <form action="{{url('/visa-search-list')}}" enctype="multipart/form-data" method="post">
                                                        @csrf
                                <div class="row">
                                    <div class="col-lg-4 mb-md-20">
                                        <div class="custom-select-wrapper">
                                           
                                                <input type="text" class="form-control select-input10" name="city_name" placeholder="Select an option">
                                          <?php $data =\App\CountryCode_Model::get(); ?>
                                            <ul class="list-unstyled select-options10">
                                                
                                                   @foreach($data as $state_)
                                                    <li class="option10" data-value="{{$state_->name}}">{{__($state_->name)}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-3 mb-md-20">
                                        <select class="select-visa-type select2-style-2" name="visa_type" required>
                                          <option value="<?if(isset($visa_type)){ echo $visa_type; }?>"><?if(isset($visa_type)){ echo $visa_type; }?></option>
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
                                    <input type="number" name="day" class="form-control"value="<?if(isset($day)){ echo $day; }?>" id="exampleFormControlInput1" placeholder="Days" required>
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

   
    
    
   
 
