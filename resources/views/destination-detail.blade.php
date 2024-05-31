@include('auth.cust_header')

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
    <section id="" style="    background-image:linear-gradient(0deg, rgb(0 0 0 / 30%), rgb(0 0 0 / 33%)), url({{ asset('public/destination/'.$post->image)}});
    padding: 200px 0 130px 0;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    
">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>{{ $post->title }}</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span>{{ $post->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Area -->
    <section id="news_details_main_arae" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="news_detail_wrapper">
                        <div class="news_details_content_area">
                            <img src="{{ asset('public/destination/'.$post->image)}}" style="height:500px;" alt="img">
                            <h2>{{ $post->title }}</h2>
                            {!! $post->description !!}
                            
                           
                            
                           
                        </div>
                        
                      
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="news_details_rightbar">
                        <div class="news_details_right_item">
                            <h3>Recent news</h3>
                            @foreach($posts as $row)
                            <div class="recent_news_item">
                                <div class="recent_news_img" >
                                    <img src="{{ asset('public/destination/'.$row->image) }}" style="width:88px;" alt="img">
                                </div>
                                <div class="recent_news_text">
                                    <h5><a href="{{ route('destination', ['slug' => $row->slug]) }}">{{ $row->title }}</a></h5>
                                    <p><a href="{{ route('destination', ['slug' => $row->slug]) }}">{{ \Carbon\Carbon::parse($row->created_at)->format('d/F/Y') }}</a> </p>
                                </div>
                            </div>
                         @endforeach
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

    <!-- Footer -->
@include('auth.cust_footer')
    <div class="go-top">
        <i class="fas fa-chevron-up"></i>
        <i class="fas fa-chevron-up"></i>
    </div>

     <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->


    <script src="public/assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap js -->

    <script src="public/assets/js/bootstrap.bundle.js"></script>

    <!-- Meanu js -->

    <script src="public/assets/js/jquery.meanmenu.js"></script>

    <!-- owl carousel js -->

    <script src="public/assets/js/owl.carousel.min.js"></script>

    <!-- wow.js -->

    <!--<script src="public/assets/js/wow.min.js"></script>-->

    <!-- Select2 -->

    <script src="public/assets/js/select2.min.js"></script>
 
    <!-- Custom js -->

    <script src="public/assets/js/custom.js"></script>

    <!--<script src="public/assets/js/add-form.js"></script>-->

    <!--<script src="public/assets/js/form-dropdown.js"></script>-->

</body>

</html>