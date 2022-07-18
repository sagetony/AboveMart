@include('home.head')
@include('home.header')
<!-- PAGE TITLE
        ================================================== -->
        <section class="top-position1 py-0">
            <div class="page-title-section bg-img cover-background left-overlay-dark" data-overlay-dark="7" data-background="img/bg/bg-03.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>About Us</h1>
                            <div class="breadcrumb">
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="#!">Pages</a></li>
                                    <li><a href="#!">About Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="page-title-shape1 d-none d-sm-block"></span>
            <span class="page-title-shape2 d-none d-sm-block"></span>
            <div class="d-inline-block p-2 border-secondary border border-width-2 position-absolute left-5 bottom-10 bottom-sm-25 ani-left-right z-index-1"></div>
            <div class="d-inline-block p-2 bg-secondary rounded-circle position-absolute right-40 top-25 ani-move z-index-1"></div>
        </section>

        <!-- ABOUTUS
        ================================================== -->
        <section class="about-style1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-1-9 mb-sm-2-2 mb-lg-0 wow fadeIn" data-wow-delay="200ms">
                        <div class="position-relative h-100 text-center text-sm-start">
                            <img src="img/content/about-05.jpg" class="border-radius-10 mb-sm-10 mb-lg-0" alt="...">
                            <img src="img/content/about-04.jpg" class="position-absolute border-radius-10 bottom-0 end-0 d-none d-sm-block" alt="...">
                            <div class="bg-secondary text-center border-radius-10 p-1-9 d-inline-block position-absolute bottom-5 left-5">
                                <h4 class="exp-no fw-bold text-white"><span class="countup">4</span>+</h4>
                                <span class="text-white">Years of experience</span>
                            </div>
                            <img src="img/content/line-02.png" class="position-absolute right-25 top-10 ani-top-bottom d-none d-sm-block" alt="...">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="400ms">
                        <div class="ps-xl-6">
                            <h2 class="h1 mb-4 font-weight-700">Discover A Wider <span class="font-weight-400">World Of Comminication</span></h2>
                            <p class="lead text-primary">AboveVTU offers a higher-speed of data transmission.</p>
                            <p class="mb-4">We’ve streamlined our plans to give you the fastest internet available at your address for one low monthly price.</p>
                            <div class="about-list mb-3 active">
                                <div class="d-flex align-items-center">
                                    <i class="ti-check text-primary display-26"></i>
                                    <div class="ms-3">
                                        <h4 class="h6 mb-0">Our fastest ever router</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="about-list mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="ti-check text-primary display-26"></i>
                                    <div class="ms-3">
                                        <h4 class="h6 mb-0">Browse and download around the clock</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="about-list">
                                <div class="d-flex align-items-center">
                                    <i class="ti-check text-primary display-26"></i>
                                    <div class="ms-3">
                                        <h4 class="h6 mb-0">Superfast and ultra-reliable</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-1-9">
                                <div class="d-flex align-items-center">
                                    <div class="bg-img px-7 text-center py-3 cover-background border-radius-10 border-primary border border-width-3" data-background="img/content/about-03.jpg">
                                        <div class="z-index-1 position-relative">
                                            <a class="popup-social-video" href="https://www.youtube.com/watch?v=yd1JhZzoS6A"><i class="fas fa-play display-20 text-primary"></i></a>
                                        </div>
                                    </div>
                                    <div class="ms-2 ms-md-5">
                                        <h4 class="mb-0 h5">Steve Ever</h4>
                                        <span class="small">CEO</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- EXTRA
        ================================================== -->
        <section class="bg-img cover-background" data-overlay-dark="4" data-background="img/bg/bg-05.jpg">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-lg-9 col-xl-8 col-xxl-6">
                        <h2 class="display-3 fw-bolder text-white mb-5 text-capitalize">All Your Telecommunication Services, in One Place</h2>
                        <a class="popup-social-video video_btn border-radius-5" href="https://www.youtube.com/watch?v=yd1JhZzoS6A"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </section>

@include('home.team')
@include('home.whyus')
@include('home.counter')
@include('home.testimonies')
@include('home.footer')