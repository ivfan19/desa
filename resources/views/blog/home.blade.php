@extends('other.blog_template1')
@section('content')
<main>
        <!--? slider Area Start-->
        <div class="slider-area position-relative">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInDown" data-delay="0.2s">Selamat datang </h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">Web Informasi Desa Tempursari Malang</p>
                                    <a href="#moree" class="btn hero-btn" data-animation="fadeInLeft" data-delay="1s">Pelajari Lagi <i class="ti-arrow-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
            <!-- Video icon -->
            <!-- <div class="video-icon">
                <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0" data-animation="bounceIn" data-delay=".4s"><i class="fas fa-play"></i></a>
            </div> -->
        </div>
        <!-- slider Area End-->
        <!--? About 1 Start-->
        <section class="about-low-area section-padding40" id="moree">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-lg-6 col-md-10">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span class="element">Sekilas</span>
                                <h2>Tentang Desa Tempursari</h2>
                            </div>
                                <p>{{ $main_info->tentang }}</p>
                            </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="experience">
                                    <span>{{ $main_info->luas }} m<sup style="color: #FF3514;">2</sup></span>
                                    <p>Luas Wilayah</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="experience">
                                    <span>{{ $main_info->jumlah_penduduk }} Jiwa</span>
                                    <p>Penduduk</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-5 col-lg-6 col-md-9 offset-md-1 offset-sm-1">
                        <div class="about-right-cap">
                            <div class="about-right-img">
                                <img src="assets/img/gallery/about1.png" alt="">
                            </div>
                            <div class="img-cap">
                                <span>20</span>
                                <p>Years of experience</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- About  End-->
        <!--? Gallery Area Start -->
        <!-- <div class="gallery-area">
            <div class="container-fluid p-0 fix">
                <div class="row no-gutters">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-gallery text-center">
                            <div class="gallery-img" style="background-image: url(assets/img/gallery/gallery1.png);"></div>
                            <div class="thumb-content-box">
                                <div class="thumb-content">
                                    <h3>Mechanical Engineering</h3>
                                    <p>We collect and analyze information about your general usage of the website, products, services.</p>
                                    <a href="services.html">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-gallery no-margin text-center">
                            <div class="gallery-img" style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                            <div class="thumb-content-box">
                                <div class="thumb-content">
                                    <h3>Mechanical Engineering</h3>
                                    <p>We collect and analyze information about your general usage of the website, products, services.</p>
                                    <a href="services.html">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-gallery text-center">
                            <div class="gallery-img" style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                            <div class="thumb-content-box">
                                <div class="thumb-content">
                                    <h3>Mechanical Engineering</h3>
                                    <p>We collect and analyze information about your general usage of the website, products, services.</p>
                                    <a href="services.html">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Gallery Area End -->
        <!--? Categories Area Start -->
        <!-- <div class="categories-area section-padding40 gray-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-100">
                            <span class="element">Sekilas</span>
                            <h2>Desa Tempursari</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/icon1.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">1</a></h5>
                                <p>We collect and analyze information about your general usage of the website, products, services, and courses.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/icon2.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">2</a></h5>
                                <p>We collect and analyze information about your general usage of the website, products, services, and courses.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/icon3.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">3</a></h5>
                                <p>We collect and analyze information about your general usage of the website, products, services, and courses.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/icon4.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">4</a></h5>
                                <p>We collect and analyze information about your general usage of the website, products, services, and courses.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- cat End -->
        
        <!--? Blog Area Start -->
        <!-- <section class="home-blog-area pb-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="section-tittle mb-100">
                            <span class="element">Berita Terbaru</span>
                            <h2>Artikel</h2>
                            <p><i class="fa fa-user"></i> Oleh Admin web Desa tempursari</p>
                            <a href="blog_details.html" class="all-btn">View All</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/home-blog1.png" alt="">
                                </div>
                                <div class="blog-cap">
                                    <p>22 Apr 2020</p>
                                    <h3><a href="blog_details.html">We might track your usage patterns to see</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/home-blog2.png" alt="">
                                </div>
                                <div class="blog-cap">
                                    <p>22 Apr 2020</p>
                                    <h3><a href="blog_details.html">The massive stadium screens at the MCG</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Blog Area End -->
        
        @include('other.google_maps') 
    </main>
@endsection