@include('flight.header')
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
                        <h2>Explore the evergreen forest</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span><a href="tour-search.html">Tours</a></li>
                            <li><span><i class="fas fa-circle"></i></span> Tours Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        body {
    font-family: 'Cairo', sans-serif;
    font-weight: 400;
}
.flexTitle{display:flex; justify-content:center; align-items:center; width:100%;}
.flexTitle h1{color:#a31313; margin:0;}
.close {
    float: right;
    font-size: 21px;
    font-weight: bold;
    line-height: 1;
    color: #000000;
    text-shadow: 0 1px 0 #ffffff;
    opacity: 0.7;
    filter: alpha(opacity=70);
}
.close:hover,.close:focus {
    color: #000000;
    text-decoration: none;
    cursor: pointer;
}
button.close {
    padding: 0;
    cursor: pointer;
    background: transparent;
    border: 0;
    -webkit-appearance: none;
}
.modal-open {
    overflow: hidden;
}
.modal {
    display: none;
    overflow: hidden;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    -webkit-overflow-scrolling: touch;
    outline: 0;
}
.modal.fade .modal-dialog {
    -webkit-transform: translate(0, -25%);
    -ms-transform: translate(0, -25%);
    -o-transform: translate(0, -25%);
    transform: translate(0, -25%);
    -webkit-transition: -webkit-transform 0.3s ease-out;
    -o-transition: -o-transform 0.3s ease-out;
    transition: transform 0.3s ease-out;
}
.modal.in .modal-dialog {
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    -o-transform: translate(0, 0);
    transform: translate(0, 0);
}
.modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto;
}
.modal-dialog {
    position: relative;
    width: auto;
    margin: 10px;
}
.modal-content {
    position: relative;
}
.modal-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1040;
    background-color: #52637a;
}
.modal-backdrop.fade {
    opacity: 0;
    filter: alpha(opacity=0);
}
.modal-backdrop.in {
    opacity: 0.5;
    filter: alpha(opacity=50);
}
.modal-header {
    padding: 15px;
    min-height: 16.42857143px;
}
.modal-header .close {
    margin-top: -2px;
}
.modal-title {
    margin: 0;
    line-height: 1.42857143;
}
.modal-body {
    position: relative;
    padding: 35px 15px;
    background-color: #aa1515;
}
.modal-footer {
    padding: 15px;
    text-align: right;
    background-color: #fff;
}
.modal-footer .btn + .btn {
    margin-left: 5px;
    margin-bottom: 0;
}
.modal-footer .btn-group .btn + .btn {
    margin-left: -1px;
}
.modal-footer .btn-block + .btn-block {
    margin-left: 0;
}
.modal-scrollbar-measure {
    position: absolute;
    top: -9999px;
    width: 50px;
    height: 50px;
    overflow: scroll;
}
.clickable {
    cursor: pointer;
}
@media (min-width: 768px) {
    .modal-dialog {
    width: 600px;
    margin: 30px auto;
}
 .modal-sm {
    width: 300px;
}
}
@media (min-width: 992px) {
    .modal-lg {
    width: 900px;
}
}
.clearfix:before,.clearfix:after,.modal-footer:before,.modal-footer:after {
    content: " ";
    display: table;
}
.clearfix:after,.modal-footer:after {
    clear: both;
}
.center-block {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
.pull-right {
    float: right !important;
}
.pull-left {
    float: left !important;
}
.hide {
    display: none !important;
}
.show {
    display: block !important;
}
.invisible {
    visibility: hidden;
}
.text-hide {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0;
}
.hidden {
    display: none !important;
}
.affix {
    position: fixed;
}
.img-responsive-height {
    display: block;
    width: auto;
    max-height: 100%}
.img-responsive {
    display: block;
    max-width: 100%;
    height: auto;
}
.signCenter {
    text-align: center;
}
.closeSymbol {
    color: #fff;
    font-size: 40px;
    border: 3px solid #fff;
    width: 96px;
    heiht: 96px;
    border-radius: 50%;
    font-weight: 700;
    text-align: center;
    padding: 0 15px;
}
.snapHdr {
    color: #aa1515;
    font-size: 40px;
    margin: 0;
    font-weight: 700;
}
.info {
    margin: 0 0 10px 0;
}
.closeftr {
    background-color: #aa1515;
    color: #fff;
    padding: 5px 30px;
    border-radius: 10px;
    text-decoration: none;
    font-size: 16px;
    font-weight: 600;
}

    </style>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
<div class=""></div>
<div id="modal-content" class="modal fade" tabindex="-1" role="dialog" style="margin-top:15%;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                
            </div>
            <div class="modal-body">
                <p class="signCenter">
                  <span class="closeSymbol">X</span>
                </p>
            </div>
          <div class="modal-footer">
              <div class="container">
  <form action="#">
    <div class="row">
    <div class="col-sm-12">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
    </div>
    <div class="col-sm-12">
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    </div>
    <div class="col-sm-12">
    <label for="country">Phone</label>
    <input type="number" id="lname" name="number" placeholder="Your Mobile No..">
    </div>
    <div class="col-sm-12">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    </div>
    
    </div>
  </form>
</div>
               <input type="submit" value="Submit"> <a href="#" class="btn closeftr" data-dismiss="modal">Close</a>
                
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
    // set focus when modal is opened
$('#modal-content').on('shown.bs.modal', function () {
    $("#txtname").focus();
});

// show the modal onload
$('#modal-content').modal({
    show: true
});

// everytime the button is pushed, open the modal, and trigger the shown.bs.modal event
$('#openBtn').click(function () {
    $('#modal-content').modal({
        show: true
    });
});
</script>
  
    
  <section id="tour_details_main" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tour_details_leftside_wrapper">
                        <div class="tour_details_heading_wrapper">
                            <div class="tour_details_top_heading">
                                <h2>{{$flight->tour_name}}</h2>
                                <h5><i class="fas fa-map-marker-alt"></i>{{$flight->address}}</h5>
                            </div>
                            <div class="tour_details_top_heading_right">
                                <h4>Excellent</h4>
                                <h6>{{$flight->rating}}/5</h6>
                                <p>({{$flight->reviewes}} reviewes)</p>
                            </div>
                        </div>
                        <div class="tour_details_top_bottom">
                            <div class="toru_details_top_bottom_item">
                                <div class="tour_details_top_bottom_icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="tour_details_top_bottom_text">
                                    <h5>Duration</h5>
                                    <p>{{$flight->no_of_day}} days</p>
                                </div>
                            </div>
                            <div class="toru_details_top_bottom_item">
                                <div class="tour_details_top_bottom_icon">
                                    <i class="fas fa-paw"></i>
                                </div>
                                <div class="tour_details_top_bottom_text">
                                    <h5>Tour type</h5>
                                    <p>{{$flight->tour_type}} tour</p>
                                </div>
                            </div>
                            <div class="toru_details_top_bottom_item">
                                <div class="tour_details_top_bottom_icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="tour_details_top_bottom_text">
                                    <h5>size</h5>
                                    <p>{{$flight->no_of_people}} people</p>
                                </div>
                            </div>
                            <div class="toru_details_top_bottom_item">
                                <div class="tour_details_top_bottom_icon">
                                    <i class="fas fa-map-marked"></i>
                                </div>
                                <div class="tour_details_top_bottom_text">
                                    <h5>Location</h5>
                                    <p>{{$flight->address}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="tour_details_img_wrapper">
                            <div class="slider slider-for">
                                <div>
                                    <img src="public/images/{{$flight->image}}" alt="img">
                                </div>
                                <!--<div>-->
                                <!--    <img src="assets/img/tour/big-img2.png" alt="img">-->
                                <!--</div>-->
                                <!--<div>-->
                                <!--    <img src="assets/img/tour/big-img3.png" alt="img">-->
                                <!--</div>-->
                                <!--<div>-->
                                <!--    <img src="assets/img/tour/big-img4.png" alt="img">-->
                                <!--</div>-->
                                <!--<div>-->
                                <!--    <img src="assets/img/tour/big-img5.png" alt="img">-->
                                <!--</div>-->
                                <!--<div>-->
                                <!--    <img src="assets/img/tour/big-img6.png" alt="img">-->
                                <!--</div>-->
                                <!--<div>-->
                                <!--    <img src="assets/img/tour/big-img7.png" alt="img">-->
                                <!--</div>-->
                            </div>
                            <div class="slider slider-nav">
                                <div>
                                    <img src="public/images/{{$flight->images}}" alt="img">
                                </div>
                                <!--<div>-->
                                <!--    <img src="assets/img/tour/small2-img.png" alt="img">-->
                                <!--</div>-->
                                <!--<div>-->
                                <!--    <img src="assets/img/tour/small3-img.png" alt="img">-->
                                <!--</div>-->
                                <!--<div>-->
                                <!--    <img src="assets/img/tour/small4-img.png" alt="img">-->
                                <!--</div>-->
                                <!--<div>-->
                                <!--    <img src="assets/img/tour/small5-img.png" alt="img">-->
                                <!--</div>-->
                                <!--<div>-->
                                <!--    <img src="assets/img/tour/small6-img.png" alt="img">-->
                                <!--</div>-->
                                <!--<div>-->
                                <!--    <img src="assets/img/tour/small7-img.png" alt="img">-->
                                <!--</div>-->
                            </div>
                        </div>
                        <div class="tour_details_boxed">
                            <h3 class="heading_theme">Overview</h3>
                            <div class="tour_details_boxed_inner">
                                <p>{{$flight->overview}}</p>
                            </div>
                        </div>
                        <div class="tour_details_boxed">
                            <h3 class="heading_theme">Itinerary</h3>
                            <div class="tour_details_boxed_inner">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion_flex_area">
                                        <div class="accordion_left_side">
                                                                <h5></h5>
                                                            </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    Itinerary
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordion_itinerary_list">
                                                       <ul>
                                                        <?php $itinerary = json_decode($flight->itinerary,TRUE); ?>
                                                            <?php $i=1; ?>
                                                            @foreach($itinerary as $itinerarys)
                                                              <h5>Day{{$i}}</h5>
                                                           
                                                            <li>
                                                               <i class="fas fa-circle"></i>{{$itinerarys}}
                                                            </li>
                                                            <?php $i++;?>
                                                            @endforeach
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="accordion_flex_area">-->
                                    <!--    <div class="accordion_left_side">-->
                                    <!--        <h5>Day 2</h5>-->
                                    <!--    </div>-->
                                    <!--    <div class="accordion-item">-->
                                    <!--        <h2 class="accordion-header" id="headingTwo">-->
                                    <!--            <button class="accordion-button collapsed" type="button"-->
                                    <!--                data-bs-toggle="collapse" data-bs-target="#collapseTwo"-->
                                    <!--                aria-expanded="false" aria-controls="collapseTwo">-->
                                    <!--                Stet clita kasd gubergren, no sea takimata sanctus est-->
                                    <!--            </button>-->
                                    <!--        </h2>-->
                                    <!--        <div id="collapseTwo" class="accordion-collapse collapse"-->
                                    <!--            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">-->
                                    <!--            <div class="accordion-body">-->
                                    <!--                <div class="accordion_itinerary_list">-->
                                    <!--                    <ul>-->
                                    <!--                        <li>-->
                                    <!--                            <i class="fas fa-circle"></i>-->
                                    <!--                            There are many variations of passages of Lorem Ipsum-->
                                    <!--                            available, but the majority have-->
                                    <!--                            suffered alteration in some form-->
                                    <!--                        </li>-->
                                    <!--                        <li>-->
                                    <!--                            <i class="fas fa-circle"></i>-->
                                    <!--                            Lorem Ipsum is that it has a more-or-less normal-->
                                    <!--                            distribution of letters, to using 'Content here-->
                                    <!--                        </li>-->
                                    <!--                        <li>-->
                                    <!--                            <i class="fas fa-circle"></i>-->
                                    <!--                            The standard chunk of Lorem Ipsum used since the 1500s-->
                                    <!--                            is-->
                                    <!--                            reproduced below for those interested.-->
                                    <!--                        </li>-->
                                    <!--                    </ul>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!--<div class="accordion_flex_area">-->
                                    <!--    <div class="accordion_left_side">-->
                                    <!--        <h5>Day 3</h5>-->
                                    <!--    </div>-->
                                    <!--    <div class="accordion-item">-->
                                    <!--        <h2 class="accordion-header" id="headingThree">-->
                                    <!--            <button class="accordion-button collapsed" type="button"-->
                                    <!--                data-bs-toggle="collapse" data-bs-target="#collapseThree"-->
                                    <!--                aria-expanded="false" aria-controls="collapseThree">-->
                                    <!--                Stet clita kasd gubergren, no sea takimata sanctus est-->
                                    <!--            </button>-->
                                    <!--        </h2>-->
                                    <!--        <div id="collapseThree" class="accordion-collapse collapse"-->
                                    <!--            aria-labelledby="headingThree" data-bs-parent="#accordionExample">-->
                                    <!--            <div class="accordion-body">-->
                                    <!--                <div class="accordion_itinerary_list">-->
                                    <!--                    <ul>-->
                                    <!--                        <li>-->
                                    <!--                            <i class="fas fa-circle"></i>-->
                                    <!--                            Contrary to popular belief, Lorem Ipsum is not simply-->
                                    <!--                            random-->
                                    <!--                        </li>-->
                                    <!--                        <li>-->
                                    <!--                            <i class="fas fa-circle"></i>-->
                                    <!--                            Many desktop publishing packages and web page editors-->
                                    <!--                            now-->
                                    <!--                            use-->
                                    <!--                        </li>-->
                                    <!--                        <li>-->
                                    <!--                            <i class="fas fa-circle"></i>-->
                                    <!--                            Lorem Ipsum is that it has a more-or-less normal-->
                                    <!--                            distribution of letters, to using 'Content here-->
                                    <!--                        </li>-->
                                    <!--                        <li>-->
                                    <!--                            <i class="fas fa-circle"></i>-->
                                    <!--                            The standard chunk of Lorem Ipsum used since the 1500s-->
                                    <!--                            is-->
                                    <!--                            reproduced below for those interested.-->
                                    <!--                        </li>-->
                                    <!--                    </ul>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!--<div class="accordion_flex_area">-->
                                    <!--    <div class="accordion_left_side">-->
                                    <!--        <h5>Day 4</h5>-->
                                    <!--    </div>-->
                                    <!--    <div class="accordion-item">-->
                                    <!--        <h2 class="accordion-header" id="headingFour">-->
                                    <!--            <button class="accordion-button collapsed" type="button"-->
                                    <!--                data-bs-toggle="collapse" data-bs-target="#collapseFour"-->
                                    <!--                aria-expanded="false" aria-controls="collapseFour">-->
                                    <!--                Stet clita kasd gubergren, no sea takimata sanctus est-->
                                    <!--            </button>-->
                                    <!--        </h2>-->
                                    <!--        <div id="collapseFour" class="accordion-collapse collapse"-->
                                    <!--            aria-labelledby="headingFour" data-bs-parent="#accordionExample">-->
                                    <!--            <div class="accordion-body">-->
                                    <!--                <div class="accordion_itinerary_list">-->
                                    <!--                    <ul>-->
                                    <!--                        <li>-->
                                    <!--                            <i class="fas fa-circle"></i>-->
                                    <!--                            There are many variations of passages of Lorem Ipsum-->
                                    <!--                            available, but the majority have-->
                                    <!--                            suffered alteration in some form-->
                                    <!--                        </li>-->
                                    <!--                        <li>-->
                                    <!--                            <i class="fas fa-circle"></i>-->
                                    <!--                            Contrary to popular belief, Lorem Ipsum is not simply-->
                                    <!--                            random-->
                                    <!--                        </li>-->
                                    <!--                        <li>-->
                                    <!--                            <i class="fas fa-circle"></i>-->
                                    <!--                            Many desktop publishing packages and web page editors-->
                                    <!--                            now-->
                                    <!--                            use-->
                                    <!--                        </li>-->
                                    <!--                        <li>-->
                                    <!--                            <i class="fas fa-circle"></i>-->
                                    <!--                            The standard chunk of Lorem Ipsum used since the 1500s-->
                                    <!--                            is-->
                                    <!--                            reproduced below for those interested.-->
                                    <!--                        </li>-->
                                    <!--                    </ul>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                        <div class="tour_details_boxed">
                           <div class="tour_details_boxed_inner">
                                <div class="row">
                                <div class="col-sm-6">
                                    <ul>
                                        <h3 class="heading_theme">Included</h3>
                                    <li><i class="fas fa-circle"></i>{{$flight->included}}</li>
                                    
                                </ul>
                                </div>
                                <div class="col-sm-6">
                                   <ul>
                                       <h3 class="heading_theme">Excluded</h3>
                                    <li><i class="fas fa-circle"></i>{{$flight->excluded}}</li>
                                </ul>
                                </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="tour_details_boxed">
                            <h3 class="heading_theme">Tours location</h3>
                            <div class="map_area">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9916.975593321238!2d-0.2763166259126239!3d51.58209318700696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4877a17cca5d0001%3A0x46d236266ce7b49!2sFlightPath%20Travel!5e0!3m2!1sen!2sin!4v1693608443247!5m2!1sen!2sin"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-4">
                    <div class="tour_details_right_sidebar_wrapper">
                       @foreach($tour_package as $tour_packages)  <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>{{$tour_packages->tour_package_name}}</h3>
                                </div>
                                <div class="tour_package_details_bar_list">
                                    <h5>Package details</h5>
                                    <ul>
                                        <li><i class="fas fa-circle"></i>{{$tour_packages->details}}</li>
                                    </ul>
                                </div>
                                <div class="tour_package_details_bar_price">
                                    <h5>Price</h5>
                                    <div class="tour_package_bar_price">
                                        <h3>{{$tour_packages->amount}}<sub>/Per serson</sub> </h3>
                                    </div>
                                </div>
                            </div>
                            <form action="{{url('/book-package')}}" enctype="multipart/form-data" method="post">
                                                      @csrf   
                 
                            <input type="hidden" name="tour_id" value="{{$flight->id}}">
                            <input type="hidden" name="tour_package_id" value="{{$tour_packages->id}}">
                            <input type="hidden" name="tour_package_amount" value="{{$tour_packages->amount}}">
                            <div class="tour_select_offer_bar_bottom">
                                <button class="button btn btn_theme btn_md w-100">Select Package</button>
                            </div>
                </form>
              </div>

                        <!--    <div class="tour_select_offer_bar_bottom">-->
                        <!--        <button class="btn btn_theme btn_md w-100" data-bs-toggle="offcanvas"-->
                        <!--            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Select-->
                        <!--            offer</button>-->
                        <!--    </div>-->
                        <!--</div>-->
                    @endforeach
                    <!--<div class="tour_detail_right_sidebar">-->
                    <!--        <div class="tour_details_right_boxed">-->
                    <!--            <div class="tour_details_right_box_heading">-->
                    <!--                <h3>Deluxe package</h3>-->
                    <!--            </div>-->
                    <!--            <div class="tour_package_details_bar_list">-->
                    <!--                <h5>Package details</h5>-->
                    <!--                <ul>-->
                    <!--                    <li><i class="fas fa-circle"></i>Buffet breakfast as per the Itinerary</li>-->
                    <!--                    <li><i class="fas fa-circle"></i>Visit eight villages showcasing Polynesian-->
                    <!--                        culture-->
                    <!--                    </li>-->
                    <!--                    <li><i class="fas fa-circle"></i>Complimentary Camel safari, Bonfire,</li>-->
                    <!--                    <li><i class="fas fa-circle"></i>All toll tax, parking, fuel, and driver-->
                    <!--                        allowances-->
                    <!--                    </li>-->
                    <!--                    <li><i class="fas fa-circle"></i>Comfortable and hygienic vehicle</li>-->
                    <!--                </ul>-->
                    <!--            </div>-->
                    <!--            <div class="tour_package_details_bar_price">-->
                    <!--                <h5>Price</h5>-->
                    <!--                <div class="tour_package_bar_price">-->
                    <!--                    <h6><del>$ 35,500</del></h6>-->
                    <!--                    <h3>$ 30,500 <sub>/Per serson</sub> </h3>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="tour_select_offer_bar_bottom">-->
                    <!--            <button class="btn btn_theme btn_md w-100" data-bs-toggle="offcanvas"-->
                    <!--                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Select-->
                    <!--                offer</button>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="tour_detail_right_sidebar">-->
                    <!--        <div class="tour_details_right_boxed">-->
                    <!--            <div class="tour_details_right_box_heading">-->
                    <!--                <h3>Super deluxe package</h3>-->
                    <!--            </div>-->
                    <!--            <div class="tour_package_details_bar_list">-->
                    <!--                <h5>Package details</h5>-->
                    <!--                <ul>-->
                    <!--                    <li><i class="fas fa-circle"></i>Buffet breakfast as per the Itinerary</li>-->
                    <!--                    <li><i class="fas fa-circle"></i>Visit eight villages showcasing Polynesian-->
                    <!--                        culture-->
                    <!--                    </li>-->
                    <!--                    <li><i class="fas fa-circle"></i>Complimentary Camel safari, Bonfire,</li>-->
                    <!--                    <li><i class="fas fa-circle"></i>All toll tax, parking, fuel, and driver-->
                    <!--                        allowances-->
                    <!--                    </li>-->
                    <!--                    <li><i class="fas fa-circle"></i>Comfortable and hygienic vehicle</li>-->
                    <!--                </ul>-->
                    <!--            </div>-->
                    <!--            <div class="tour_package_details_bar_price">-->
                    <!--                <h5>Price</h5>-->
                    <!--                <div class="tour_package_bar_price">-->
                    <!--                    <h6><del>$ 35,500</del></h6>-->
                    <!--                    <h3>$ 30,500 <sub>/Per serson</sub> </h3>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="tour_select_offer_bar_bottom">-->
                    <!--            <button class="btn btn_theme btn_md w-100" data-bs-toggle="offcanvas"-->
                    <!--                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Select-->
                    <!--                offer</button>-->
                    <!--        </div>-->
                    <!--    </div>-->
                        <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>Why choose us</h3>
                                </div>

                                <div class="tour_package_details_bar_list first_child_padding_none">
                                    <ul>
                                        <li><i class="fas fa-circle"></i><p>{{$flight->why_choose_us}}</p></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="write_your_review_wrapper">
                        <h3 class="heading_theme">Write your review</h3>
                        <div class="write_review_inner_boxed">
                            <form action="!#" id="news_comment_form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-froup">
                                            <input type="text" class="form-control bg_input"
                                                placeholder="Enter full name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-froup">
                                            <input type="text" class="form-control bg_input"
                                                placeholder="Enter email address">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-froup">
                                            <input type="number" class="form-control bg_input"
                                                placeholder="Enter Mobile Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-froup">
                                            <textarea rows="6" placeholder="Write your comments"
                                                class="form-control bg_input"></textarea>
                                        </div>
                                        <div class="comment_form_submit">
                                            <button class="btn btn_theme btn_md">Post comment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="all_review_wrapper">
                        <h3 class="heading_theme">All review</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="all_review_box">
                        <div class="all_review_date_area">
                            <div class="all_review_date">
                                <h5>08 Dec, 2021</h5>
                            </div>
                            <div class="all_review_star">
                                <h5>Excellent</h5>
                                <div class="review_star_all">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="all_review_text">
                            <img src="assets/img/review/review1.png" alt="img">
                            <h4>Manresh Chandra</h4>
                            <p>" Loved the overall tour for all 6 days covering jaipur jodhpur and jaisalmer. worth ur
                                money for sure. thanks. Driver was very good and polite and safe driving for all 6 days.
                                on time pickup and drop overall. Thanks for it. "</p>
                        </div>
                        <div class="all_review_small_img">
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small1.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small2.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small3.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small4.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small5.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <h5>+5</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="all_review_box">
                        <div class="all_review_date_area">
                            <div class="all_review_date">
                                <h5>08 Dec, 2021</h5>
                            </div>
                            <div class="all_review_star">
                                <h5>Excellent</h5>
                                <div class="review_star_all">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="all_review_text">
                            <img src="assets/img/review/review2.png" alt="img">
                            <h4>Michel falak</h4>
                            <p>" Loved the overall tour for all 6 days covering jaipur jodhpur and jaisalmer. worth ur
                                money for sure. thanks. Driver was very good and polite and safe driving for all 6 days.
                                on time pickup and drop overall. Thanks for it. "</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="all_review_box">
                        <div class="all_review_date_area">
                            <div class="all_review_date">
                                <h5>08 Dec, 2021</h5>
                            </div>
                            <div class="all_review_star">
                                <h5>Excellent</h5>
                                <div class="review_star_all">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="all_review_text">
                            <img src="assets/img/review/review3.png" alt="img">
                            <h4>Chester dals</h4>
                            <p>" Loved the overall tour for all 6 days covering jaipur jodhpur and jaisalmer. worth ur
                                money for sure. thanks. Driver was very good and polite and safe driving for all 6 days.
                                on time pickup and drop overall. Thanks for it. "</p>
                        </div>
                        <div class="all_review_small_img">
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small1.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small2.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small5.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <h5>+15</h5>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="all_review_box">
                        <div class="all_review_date_area">
                            <div class="all_review_date">
                                <h5>08 Dec, 2021</h5>
                            </div>
                            <div class="all_review_star">
                                <h5>Excellent</h5>
                                <div class="review_star_all">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="all_review_text">
                            <img src="assets/img/review/review4.png" alt="img">
                            <h4>Casper mike</h4>
                            <p>" Loved the overall tour for all 6 days covering jaipur jodhpur and jaisalmer. worth ur
                                money for sure. thanks. Driver was very good and polite and safe driving for all 6 days.
                                on time pickup and drop overall. Thanks for it. "</p>
                        </div>
                        <div class="all_review_small_img">
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small4.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small5.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <h5>+19</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="all_review_box">
                        <div class="all_review_date_area">
                            <div class="all_review_date">
                                <h5>08 Dec, 2021</h5>
                            </div>
                            <div class="all_review_star">
                                <h5>Excellent</h5>
                                <div class="review_star_all">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="all_review_text">
                            <img src="assets/img/review/review5.png" alt="img">
                            <h4>Jason bruno</h4>
                            <p>" Loved the overall tour for all 6 days covering jaipur jodhpur and jaisalmer. worth ur
                                money for sure. thanks. Driver was very good and polite and safe driving for all 6 days.
                                on time pickup and drop overall. Thanks for it. "</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Related tour packages Area -->
    <section id="related_tour_packages" class="section_padding_bottom">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Related tour packages</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="promotional_tour_slider owl-theme owl-carousel dot_style">
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <img src="assets/img/tab-img/hotel1.png" alt="img">
                                <p><i class="fas fa-map-marker-alt"></i>New beach, Thailand</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="#!">Kantua hotel, Thailand</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>$99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <img src="assets/img/tab-img/hotel2.png" alt="img">
                                <p><i class="fas fa-map-marker-alt"></i>Indonesia</p>
                                <div class="discount_tab">
                                    <span>50%</span>
                                </div>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="#!">Hotel paradise international</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>$99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <img src="assets/img/tab-img/hotel3.png" alt="img">
                                <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="#!">Hotel kualalampur</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>$99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <img src="assets/img/tab-img/hotel4.png" alt="img">
                                <p><i class="fas fa-map-marker-alt"></i>Mariana island</p>
                                <div class="discount_tab">
                                    <span>50%</span>
                                </div>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="#!">Hotel deluxe</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>$99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <img src="assets/img/tab-img/hotel6.png" alt="img">
                                <p><i class="fas fa-map-marker-alt"></i>Beach view</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="#!">Thailand grand suit</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>$99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <img src="assets/img/tab-img/hotel7.png" alt="img">
                                <p><i class="fas fa-map-marker-alt"></i>Long island</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="#!">Zefi resort and spa</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>$99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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


    <!-- Offcanvas Area -->
    <div class="offcanvas select_offer_modal offcanvas-end" tabindex="-1" id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Book now</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="side_canvas_wrapper">
                <div class="travel_date_side">
                    <div class="form-group">
                        <label for="dates">Select your travel date</label>
                        <input type="date" id="dates" value="2022-05-05" class="form-control">
                    </div>
                </div>
                <div class="select_person_side">
                    <h3>Select person</h3>
                    <div class="select_person_item">
                        <div class="select_person_left">
                            <h6>Adult</h6>
                            <p>12y+</p>
                        </div>
                        <div class="select_person_right">
                            <div class="button-set">
                                <button type="button">
                                    <i class="fas fa-plus"></i>
                                </button>
                                <span>01</span>
                                <button type="button">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="select_person_item">
                        <div class="select_person_left">
                            <h6>Children</h6>
                            <p>2 - 12 years</p>
                        </div>
                        <div class="select_person_right">
                            <div class="button-set">
                                <button type="button">
                                    <i class="fas fa-plus"></i>
                                </button>
                                <span>01</span>
                                <button type="button">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="select_person_item">
                        <div class="select_person_left">
                            <h6>Infant</h6>
                            <p>Below 2 years</p>
                        </div>
                        <div class="select_person_right">
                            <div class="button-set">
                                <button type="button">
                                    <i class="fas fa-plus"></i>
                                </button>
                                <span>01</span>
                                <button type="button">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="write_spical_not">
                        <label for="textse">Write any special note</label>
                        <textarea rows="5" id="textse" class="form-control"
                            placeholder="Write any special note"></textarea>
                    </div>
                    <div class="form-check write_spical_check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf1">
                        <label class="form-check-label" for="flexCheckDefaultf1">
                            <span class="main_spical_check">
                                <span>I read and accept all <a href="terms-service.html">Terms and conditios</a></span>
                            </span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="proceed_booking_btn ">
            <a href="tour-booking-submission.html" class="btn btn_theme btn_md w-100">Proceed to Booking</a>
        </div>
    </div>
<script>
    (function() {
  var debounce, input = document.getElementById('words'),
    output = document.getElementById('container'),
    update = function() {
      var words = input.value.trim().split(/,\s*/);
      while (output.firstChild) output.removeChild(output.firstChild);
      for (var i = 0; i < words.length; i++) {
        var div = document.createElement('div');
        div.textContent = words[i];
        output.appendChild(div);
      }
    };
  input.addEventListener('input', function() {
    window.clearTimeout(debounce);
    debounce = window.setTimeout(update, 150);
  }, false);
  update();
})();
</script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- Meanu js -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- owl carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Slick js -->
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <!-- wow.js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom js -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/add-form.js"></script>

</body>

</html>