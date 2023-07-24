<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <title>SIGAFRI</title>
    <!-- Stylesheets -->
    <link href="{{ url('public') }}/landing/css/bootstrap.css" rel="stylesheet">
    <link href="{{ url('public') }}/landing/css/style.css" rel="stylesheet">
    <link href="{{ url('public') }}/landing/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" href="{{ url('public') }}/landing/images/afri.png" type="image/x-icon">
    <link rel="icon" href="{{ url('public') }}/landing/images/afri.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    @stack('style')

</head>

<body>

    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        <header class="main-header">


            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="outer-container clearfix">
                        <div class="logo-box">
                            <div class="logo"><a href="index.html"><img
                                        src="{{ url('public') }}/landing/images/logo-afri1.png" alt=""
                                        title=""></a></div>
                        </div>

                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-dark">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon  flaticon-menu-1"></span>
                                    </button>
                                </div>

                                <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current">
                                            <a href="{{ url('/') }}">Home</a>
                                        </li>

                                        <li class="dropdown"><a href="#">Spesies</a>
                                            <ul>
                                                <li><a href="{{ url('/amfibi') }}">Amfibi</a></li>
                                                <li><a href="{{ url('/reptil') }}">Reptil</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Kegiatan</a>
                                            <ul>
                                                <li><a href="{{ url('/seminar') }}">Seminar</a></li>
                                                <li><a href="{{ url('/trip') }}">Trip</a></li>
                                                <li><a href="{{ url('/berita') }}">Berita</a></li>
                                            </ul>
                                        </li>
                                        <li class="current">
                                            <a href="{{ url('/ebook') }}">E-book</a>
                                        </li>
                                        <li class="current">
                                            <a href="{{ url('/rescue') }}">Rescue</a>
                                        </li>

                                        
                                        @if (Auth::guard('anggota')->user())
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" href="#" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ url('public', Auth::guard('anggota')->user()->poto) }}"
                                                        onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';"
                                                        style="width: 30px; height: 30px; border-radius: 50%; margin-right: 5px;">
                                                    <span>{{ Auth::guard('anggota')->user()->nama }}</span>
                                                    <i class="material-icons dropdown-icon"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                   
                                                          <li><a href="{{ url('/TambahSpesies') }}">Tambah Spesies</a></li>
                                                    <li><a onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')"
                                                            href="{{ url('logout') }}">Log out</a></li>
                                                </ul>
                                                
                                            </li>
                                        @else
                                            <li>
                                                <a href="{{ url('login') }}">Login</a>
                                            </li>
                                        @endif


                                        {{-- @if (Auth::guard('anggota')->check())
                                            <li class="current">
                                                <a onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')" href="{{ url('logout') }}">Log out</a>
                                            </li>
                                        @endif --}}

                                    </ul>
                                </div>
                            </nav><!-- Main Menu End-->
                            <!-- Main Menu End-->
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!-- Sticky Header -->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="#" title=""><img src="{{ url('public') }}/landing/images/logo-afri1.png"
                                alt="" title=""></a>
                    </div>
                    <!--Right Col-->
                    <div class="pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-collapse show collapse clearfix">
                                <ul class="navigation clearfix">

                                    <li class="current">
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>

                                    <li class="dropdown"><a href="#">Spesies</a>
                                        <ul>
                                            <li><a href="{{ url('/amfibi') }}">Amfibi</a></li>
                                            <li><a href="{{ url('/reptil') }}">Reptil</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="plans.html">Kegiatan</a>
                                        <ul>
                                            <li><a href="{{ url('/seminar') }}">Seminar</a></li>
                                            <li><a href="{{ url('/trip') }}">Trip</a></li>
                                            <li><a href="{{ url('/berita') }}">Berita</a></li>
                                        </ul>
                                    </li>
                                    <li class="current">
                                        <a href="{{ url('/ebook') }}">E-book</a>
                                    </li>
                                    <li class="current">
                                        <a href="{{ url('/rescue') }}">Rescue</a>
                                    </li>


                                    @if (Auth::guard('anggota')->check())
    <li class="dropdown">
        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{ url('public', Auth::guard('anggota')->user()->poto) }}"
                onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';"
                style="width: 30px; height: 30px; border-radius: 50%; margin-right: 5px;">
            <span>{{ Auth::guard('anggota')->user()->nama }}</span>
            <i class="material-icons dropdown-icon"></i>
        </a>
        <ul class="dropdown-menu">
            <li><a href="{{ url('/TambahSpesies') }}">Tambah Spesies</a></li>
            <li><a onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')" href="{{ url('logout') }}">Log out</a></li>
        </ul>
    </li>
@else
    <li class="current">
        <a href="{{ url('login') }}">Login</a>
    </li>
@endif



                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>
                </div>
            </div>
        </header>
        <!--End Main Header -->

        <!--Form Back Drop-->
        <div class="form-back-drop"></div>

        <!-- Hidden Bar -->
        <section class="hidden-bar">
            <div class="inner-box">
                <div class="cross-icon"><span class="flaticon-cancel"></span></div>

                <div class="logo">
                    <a href="index.html"><img src="{{ url('public') }}/landing/images/logo-afri2.png"
                            alt="" /></a>
                </div>

                <!-- Subscribe Widget -->
                <div class="subscribe-widget">
                    <h4>LOGIN </h4>
                    <p>Silahkan login menggunakan akun anda</p>
                    <div class="subscribe-form">
                        <form method="post" action="#">
                            <div class="form-group">
                                <input type="email" name="email" value="" placeholder="Email..."
                                    required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="password" value="" placeholder="Password ..."
                                    required="">
                            </div>
                            <button type="submit" class="btn btn-block btn-primary mt-5">
                                SIGN-IN
                            </button>
                        </form>
                    </div>
                </div>
                <!-- Copyright Text -->
                <div class="copyright-text">Copyrights &copy; 2023 <a href="#">Erwinda Putri.</a></div>
            </div>
        </section>
        <!--End Hidden Bar -->
        @include('LandingPage.notification')
        @yield('content')
        {{-- @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif --}}
        <!--Main Footer-->
        <footer class="main-footer">
            <!--End Footer Top -->
            <div class="auto-container">
                <!-- Footer Top -->
                <div class="footer-top clearfix">
                    {{-- <div class="top-left">
                        <a href="contact.html" class="theme-btn"><i class="flaticon-budget"></i>Request an
                            Estimate</a>
                    </div> --}}

                    <div class="top-right clearfix">
                        <ul class="social-icon-two">
                            <li><a href="https://www.facebook.com/AFRINDONESIA/"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="https://www.instagram.com/amfibireptilindonesia/"><span class="fa fa-instagram"></span></a></li>
                            {{-- <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            <li><a href="#"><span class="fa fa-rss"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-vimeo"></span></a></li> --}}
                        </ul>
                        <div class="scroll-to-top scroll-to-target" data-target="html"><span
                                class="flaticon-up-chevron"></span> Move to the Top</div>
                    </div>
                </div>

                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">
                        <!--Footer Column-->
                        <div class="footer-column col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a ><img src="{{ url('public') }}/landing/images/logo-afri2.png"
                                            alt="" /></a>
                                </div>
                                <div class="text">Yayasan Amfibi Reptil Indonesia merupakan wadah pemersatu dunia konservasi yang berfokus
                                    pada satwa amfibi dan reptil tanpa memandang entitas social, ras, suku, agama dan budaya
                                    .</div>
                                {{-- <a href="#" class="read-more"></a> --}}
                                {{-- <div class="social-icon-one">
                                    <ul>
                                   <li><a href="https://www.facebook.com/AFRINDONESIA/"><span class="fab fa-facebook-f"></span></a></li>
                                   <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="https://www.instagram.com/amfibireptilindonesia/"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                                </div> --}}
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget lists-widget">
                                <div class="footer-title">
                                    <h2>Usefull Links</h2>
                                </div>
                                <div class="widget-content">
                                    <div class="row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <ul class="footer-list">
                                                <li><a href="#">About Us</a></li>
                                                <li><a href="#">Meet Our Team</a></li>
                                                <li><a href="#">Our Projects</a></li>
                                                <li><a href="#">Get a Quote</a></li>
                                                <li><a href="#">Testimonials</a></li>
                                                <li><a href="#">Contact Us</a></li>
                                            </ul>
                                        </div>

                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <ul class="footer-list">
                                                <li><a href="#">Our Services</a></li>
                                                <li><a href="#">Locations</a></li>
                                                <li><a href="#">News</a></li>
                                                <li><a href="#">Why Choose Us</a></li>
                                                <li><a href="#">Sustainability</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget news-widget">
                                <div class="footer-title">
                                    <h2>Visi & Misi</h2>
                                </div>
                                <div class="widget-content">
                                    <!--News Widget Block-->
                                    <div class="news-widget-block">
                                        <div class="widget-inner">
                                            <div class="post-date"><span class="fa fa-clock-o"></span> March 31, 2018
                                            </div>
                                            <h3><a href="blog-single.html">1. Membantu pemerintah dalam melaksanakan edukasi berkaitan dengan konservasi khususnya
                                                amfibi dan reptil...
                                                </a></h3>
                                        </div>
                                    </div>

                                    <!--News Widget Block-->
                                    <div class="news-widget-block">
                                        <div class="widget-inner">
                                            <div class="post-date"><span class="fa fa-clock-o"></span> March 06, 2018
                                            </div>
                                            <h3><a href="blog-single.html">More than 50 percent of the work we do today
                                                    didnot exist.</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <a href="blog.html" class="more-news">More News</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Main Footer-->
    </div>
    <!--End pagewrapper-->

     <!--Scroll to top-->
     <script src="{{ url('public') }}/landing/js/jquery.js"></script>
     <script src="{{ url('public') }}/landing/js/popper.min.js"></script>
     <script src="{{ url('public') }}/landing/js/bootstrap.min.js"></script>
     <script src="{{ url('public') }}/landing/js/jquery.fancybox.js"></script>
     <script src="{{ url('public') }}/landing/js/owl.js"></script>
     <script src="{{ url('public') }}/landing/js/wow.js"></script>
     <script src="{{ url('public') }}/landing/js/jquery.mCustomScrollbar.concat.min.js"></script>
     <script src="{{ url('public') }}/landing/js/isotope.js"></script>
     <script src="{{ url('public') }}/landing/js/appear.js"></script>
     <script src="{{ url('public') }}/landing/js/script.js"></script>
     <!--Google Map APi Key-->
     
     
     <!--End Google Map APi-->
     <script>
         $(document).ready(function () {
             // Your custom JavaScript code here
         });
     </script>
    @stack('script')
</body>

</html>
