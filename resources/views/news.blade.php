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
    <section id="" style="    background-image: url(public/images/flex/comen.jpg);
    padding: 200px 0 130px 0;

    background-repeat: no-repeat;
    background-size: cover;
">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>Blogs</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span>Blogs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Area -->
    <section id="news_main_arae" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Latest travel Blogs</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($feature1 as $row)
                <div class="col-lg-7">
                    <div class="news_area_top_left">
                        <a href="{{ route('blog', ['slug' => $row->slug]) }}"><img src="{{ asset('public/images/'.$row->featured_image_url)}}" style="height: 480px;"alt="img"></a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="news_area_top_right">
                        <h2>
                            <a href="{{ route('blog', ['slug' => $row->slug]) }}">{{ $row->title }}</a>
                        </h2>
                        <p>{!! substr($row->content,0,390) !!}
                        </p>
                        <a href="{{ route('blog', ['slug' => $row->slug]) }}">Read full article <i class="fas fa-arrow-right"></i></a>
                        <div class="news_author_area">
                           
                            <div class="news_author_area_name">

                                <p><a href="{{ route('blog', ['slug' => $row->slug]) }}">{{ \Carbon\Carbon::parse($row->created_at)->format('d/F/Y') }}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="new_main_news_box">
                <div class="row">
                    @foreach($posts1 as $row)
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="news_item_boxed">
                            <div class="news_item_img">
                                <a href="{{ route('blog', ['slug' => $row->slug]) }}l"><img src="{{ asset('public/images/'.$row->featured_image_url)}}" style="height:350px;" alt="img"></a>
                            </div>
                            <div class="news_item_content">
                                <h3><a href="{{ route('blog', ['slug' => $row->slug]) }}">{{ $row->title }}
                                    </a></h3>
                                <p>{!! substr($row->content,0,250) !!}</p>
                            </div>
                            <div class="news_author_area">
                               
                                <div class="news_author_area_name">
                                   
                                    <p><a href="{{ route('blog', ['slug' => $row->slug]) }}">{{ \Carbon\Carbon::parse($row->created_at)->format('d/F/Y') }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                   @endforeach
                    <div class="col-lg-12">
                        <div class="pagination_area">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
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

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- Meanu js -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- owl carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- wow.js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom js -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/add-form.js"></script>

</body>

</html>