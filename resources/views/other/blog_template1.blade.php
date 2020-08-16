<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Web Informasi Desa Tempursari Malang</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	<!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hamburgers.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <link rel="stylesheet" href="{{ asset('css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gijgo.css') }}">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>     
                                        <li><i class="fas fa-phone"></i> {{ $main_info->nomor_telepon }} </li>
                                        <li><i class="far fa-envelope"></i> {{ $main_info->email }} </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-8">
                                <div class="menu-wrapper  d-flex align-items-center">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav> 
                                            <ul id="navigation">              
                                                <li class="active"><a href="/">Home</a></li>                                                                            
                                                <li><a href="#">Profil Desa</a>
                                                    <ul class="submenu">
                                                        <li><a href="/sejarah">Sejarah Desa</a></li>
                                                        <li><a href="/tentang">Tentang Desa</a></li>
                                                        <li><a href="/visi-misi">Visi Misi</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Kelembagaan</a>
                                                    <ul class="submenu">
                                                        <li><a href="/">Struktur Pemerintahan</a></li>
                                                        <li><a href="/perangkat">Perangkat Desa</a></li>
                                                        <li><a href="/bpm">Badan Permusyawaratan</a></li>
                                                        <li><a href="/lpm">LPM</a></li>
                                                        <li><a href="/karang-taruna">Karang Taruna</a></li>
                                                        <li><a href="/pkk">PKK</a></li>
                                                    </ul>
                                                </li>
                                                <!-- <li><a href="#">Berita</a>
                                                    <ul class="submenu">
                                                        <li><a href="#">sub</a></li>
                                                    </ul>
                                                </li> -->
                                                <!-- <li><a href="#">Potensi</a>
                                                    <ul class="submenu">
                                                        <li><a href="#">sub</a></li>
                                                    </ul>
                                                </li> -->
                                                <li><a href="/anggaran">Anggaran</a></li>
                                                <!-- <li><a href="contact.html">Lainnya</a>
                                                    <ul class="submenu">
                                                        <li><a href="#">Foto</a></li>
                                                        <li><a href="#">Video</a></li>
                                                        <li><a href="#">Kritik & Saran</a></li>
                                                    </ul>
                                                </li> -->
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-xl-1 col-lg-2">
                                <!-- Search Box -->
                                <div class="search d-none d-lg-block">
                                    <ul>
                                        <li>
                                            <div class="nav-search search-switch">
                                                <span class="fas fa-search"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    @yield('content')

    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <!-- <h4>Company</h4>
                                <ul>
                                    <li><a href="#">Why choose us</a></li>
                                    <li><a href="#"> Review</a></li>
                                    <li><a href="#">Customers</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Carrier</a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7 col-md-9 col-sm-13">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Hubungi Kami</h4>
                                <div class="footer-pera">
                                    <p class="info1">Alamat: {{ $main_info->alamat }} </p>
                                </div>
                            </div>
                            <div class="footer-number">
                                <p>Phone: {{ $main_info->nomor_telepon }} </p>
                                <p>Email: {{ $main_info->email }} </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <!-- <h4>Production</h4>
                                <ul>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Products</a></li>
                                    <li><a href="#">Quality</a></li>
                                    <li><a href="#">Sales geography</a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                    
                    <!-- <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle mb-50">
                                <h4>Newsletter</h4>
                                <p>Subscribe our newsletter to get updates about our services</p>
                            </div> -->
                            <!-- Form -->
                            <!-- <div class="footer-form">
                                <div id="mc_embed_signup">
                                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                        <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'">
                                        <div class="form-icon">
                                            <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                Subscribe
                                            </button>
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                <p>Copyright ©2020 KKN Unikama Kelompok 23 | This template is made with <i class="fa fa-heart" aria-hidden="true"></i>  by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            <!-- <div class="footer-social f-right">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/animated.headline.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>

    <!-- Date Picker -->
    <script src="{{ asset('js/gijgo.min.js') }}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <!-- Progress -->
    <script src="{{ asset('js/jquery.barfiller.js') }}"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/hover-direction-snake.min.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    
    </body>
</html>