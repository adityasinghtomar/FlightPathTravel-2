
<style>
    /********************************************
************ Global settings ****************
*********************************************/

html {
  box-sizing: border-box;  
}
*, *:before, *:after {
  box-sizing: inherit;
}

/********************************************
************ Floating label ****************
*********************************************/

.form-capsule .form-group {
  /* Form group*/
  position: relative;
}

/******* Label *******/

.form-capsule .form-group label {
  /* Input field floating label */
  position: absolute;
  font-size: 0.8em;
  top: 0px;
  width: 100%;
  padding: 0 10px;
  margin: 5px 0 10px 0;
  opacity: 0;
  transition: opacity 0.2s ease-out;
  /* prevent flickering */
  -webkit-backface-visibility: hidden;
  pointer-events: none;
}

.form-capsule .show-label label {
  /* Active state for label when visible */
  opacity: 1;
}

/******** Form control fields ********/

.form-capsule .form-control {
  /* Form control fields */
  height: 50px;
  padding: 15px 10px;
  box-shadow: 0 0 0 2px transparent;  
  transition: all 0.2s ease-out;
}

.form-capsule .form-control:focus{
  /* Focus state for form-control fields */
  box-shadow: 0 0 0 2px #000066;
  outline: transparent;
  border-color: transparent;
}

.form-capsule .show-label .form-control {
  /* Active state for form-control fields */
  padding-top: 25px;
  padding-bottom: 5px;
}

/********************************************
************ Textarea ***********************
*********************************************/

.form-capsule .form-group-textarea label {
  /* Textarea floating label */
  background-color: white;
  width: auto;
  right: 0;
  left: 0;
  margin: 1px 18px 1px 1px;
  border-radius: 3px 3px 0 0;
  padding-top:4px;
}

.form-capsule .form-group-textarea .form-control {
  /* Textarea */
  min-height: 100px;
  height:auto;
  max-width:100%;
  min-width: 100%;
}

/********************************************
************ Markdown ***********************
*********************************************/

.form-capsule .form-group-markdown label {
  /* Markdown textarea floating label */
  background-color: white;
  width: auto;
  right: 0;
  left: 0;
  margin: 1px 18px 1px 1px;
  border-radius: 3px 3px 0 0;
  padding-top:4px;
}


.form-capsule .form-group-markdown .form-control {
  /* Markdown textarea */
  margin-top: 10px;
  min-height: 200px;
  height:auto;
  max-width:100%;
  min-width: 100%;  
}

.form-capsule .markdown-upload-button {
  /* Markdown file upload buttong */
  cursor: pointer;
  color: blue;
}

.form-capsule .markdown-preview {
  /* Markdown preview */
  margin-top: 10px;
  margin-bottom: 10px;
  height: 230px;  
  width:100%;
  border: 1px solid #CCC;
  border-radius: 4px;
}

/********************************************
************ Select *************************
*********************************************/

.form-capsule .form-group-select label {
  /* Select floating label */
  opacity: 1;
  z-index: 1;
}

.form-capsule .form-group-select .form-control {
  /* Select */
  padding-top: 25px;
  padding-bottom: 5px;
  -webkit-appearance: none;
  -moz-appearance: none;
}

.select-wrapper {
  /* Select wrapper */
  position:relative;
  z-index: 0;
}

.select-wrapper:before {
  /* Select arrow image background */
  content:'';
  position: absolute;
  right: 0;
  top: 0;
  bottom: 0;
  width:50px;
  background-position: center center;
  background-repeat: no-repeat;
  pointer-events: none;
  background-image: url(https://tlc-web.qcode.co.uk/Graphics/dropdown-arrow-down-dark.svg);
}



/********************************************
************ Help block *********************
*********************************************/

.help-block-inline {
  /* Inline help block */
  position: absolute;
  top: 0;
  right: 25px;
  line-height: 50px;
  margin: 0;
  font-size: 90%;
  color: #CCC;
}

/********************************************
************ Units help-block ***************
*********************************************/

.help-block-floating {
  /* Inline help block for units */
  color: #555;  
}

.help-block-background {
  right: 0;
  background-color: #eee;
  color: #555;
  border-radius:0 3px 3px 0;
  height: 48px;
  margin: 1px;
  padding: 0 12px;
}

/********************************************
************ Tooltip ************************
*********************************************/

.tooltip-icon {
  /* Tooltip icon */
  position: absolute;
  top: 15px;
  right: 30px;
}

/********************************************
************ Radio group ********************
*********************************************/

.radio-group {
  border: 1px solid #ccc;
  border-radius: 4px;  
}

.radio, .radio+.radio {
  border-bottom: 1px solid #ccc;
  margin:0;
}

.radio:last-child {
  border-bottom:0;
}

.radio-option {
  display: none;
}

.radio-option:checked + .radio-option-label:before {
  border-color: #000666;
  border-width: 5px;  
}

.radio-option-label {
  display:table
}
.radio-option-label:before {
  content:"";
  display: block;
  width: 16px;
  height: 16px;
  border: 1px solid #ccc;
  margin: 17px;
  border-radius: 50%;
  background-color: white;
  transition: border-width 0.3s ease;
}

.radio-option-label-text {
  display: table-cell;
  vertical-align: middle;
  padding: 10px 10px 10px 0;
  width: 100%;
  margin: 0;
}

</style>
@include('auth.cust_header')
 <section id="" style="    background-image: url(public/images/flex/comen.jpg);
    padding: 200px 0 130px 0;
    background-repeat: no-repeat;
    background-size: cover;
">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>Enquiry Form</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span>Enquiry Form</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section>
    <div class="container">
        <div style="    background: #f5f5f5f5;
    padding: 15px;
    margin-top: 20px;">
            <form action="{{url('/tour-enquiry')}}" enctype="multipart/form-data" method="post" style="padding:50px;">
                 @csrf
                <div style="margin-bottom:15px;"> 
                     <h2 style="border-bottom: 3px solid #054887;
    width: max-content;">Tour Details</h2>
                </div>
                <div class="row">
                   
                    <div class="col-md-3">
                        <div class="form-group">
                            <label style="font-size: 18px;
    font-weight: 600;">Destination</label>
                            <select class="form-control" name="destination">
                                <option>--SELECT DESTINATION -- </option>
                                @foreach($flight as $row)
                                <option value="{{ $row->country}}">{{ $row->country}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                     <div class="col-md-3">
                        <div class="form-group">
                            <label style="font-size: 18px;
    font-weight: 600;">Interested In</label>
                            <select class="form-control" name="interested_in">
                                <option>--SELECT TOUR NAME -- </option>
                               
                                @foreach($flight as $row)
                                <option value="{{ $row->tour_name }}">{{ $row->tour_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                     <div class="col-md-3">
                        <div class="form-group">
                            <label style="font-size: 18px;
    font-weight: 600;">Preferred Category</label>
                            <select class="form-control" name="Preferred_Category">
                                <option>--SELECT CATEGORY -- </option>
                                <option value="Standard">Standard</option>
                                 <option value="Superior">Superior</option>
                                  <option value="Deluxe">Deluxe</option>
                                   <option value="Luxury">luxury</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label style="font-size: 18px;
    font-weight: 600;">Preferred Depart Date</label>
                            <input type="date" class="form-control" name="Preferred_Depart_Date">
                        </div>
                    </div>
                </div>
                <div style="margin:15px 0px 15px 0px;"> 
                     <h2 style="border-bottom: 3px solid #054887;
    width: max-content;">Personal Details</h2>
                </div>
                 <div class="row">
                   
                    <div class="col-md-3">
                        <div class="form-group">
                            <label style="font-size: 18px;
    font-weight: 600;">Title</label>
                            <select class="form-control" name="Title">
                                <option value="Mr">Mr</option>
                                <option value="Mrs">Mrs</option>
                                <option value="Miss">Miss</option>
                                <option value="Ms">Ms</option>
                               
                            </select>
                        </div>
                    </div>
                     <div class="col-md-3">
                        <div class="form-group">
                            <label style="font-size: 18px;
                            font-weight: 600;">Full name*</label>
                            <input type="text" name="Full_name" class="form-control" placeholder="Full Name*" required>
                        </div>
                    </div>
                      <div class="col-md-3">
                        <div class="form-group">
                            <label style="font-size: 18px;
                            font-weight: 600;">Telephone*</label>
                            <input type="tel" name="Telephone" placeholder="Phone Number*" class="form-control" required>
                        </div>
                    </div>
                  <div class="col-md-3">
                        <div class="form-group">
                            <label style="font-size: 18px;
                            font-weight: 600;">Email*</label>
                            <input type="email" name="Email" placeholder="Email Id*" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group" >
                            <label style="font-size: 18px;
                            font-weight: 600;">Your Message</label>
                           <textarea name="Your_Message" id="" class="form-control" cols="10" rows="5" placeholder="Enter Your Message"></textarea>
                        </div>
                        
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div style="margin-top:35px;"> <button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@include('auth.cust_footer')
