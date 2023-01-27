<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from template.hasthemes.com/jesco/jesco/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Sep 2021 07:18:43 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="robots" content="index, follow" />
    <title>My eCommerce</title>
    <meta name="description" content="Jesco - Fashoin eCommerce HTML Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon/favicon.ico" type="image/png">
    {{-- <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" type="image/png"> --}}


    <!-- vendor css (Icon Font) -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.bundle.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="assets/css/vendor/font.awesome.css" /> -->

    <!-- plugins css (All Plugins Files) -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css" />
    <link rel="stylesheet" href="assets/css/plugins/venobox.css" /> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    {{-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/vendor.min.css') }}">
    {{-- <link rel="stylesheet" href="assets/css/plugins/plugins.min.css" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/plugins.min.css') }}">
    {{-- <link rel="stylesheet" href="assets/css/style.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">

    <!-- Main Style -->
    <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->

</head>

<body>

    <!-- Top Bar -->

    <div class="header-to-bar"> HELLO EVERYONE! 25% Off All Products </div>

    <!-- Top Bar -->
    <!-- Header Area Start -->

    <header>
        <div class="header-main sticky-nav ">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-auto align-self-center">
                        <div class="header-logo">
                            <a href="index.html"><img src="{{ asset('assets/images/logo/logo.png') }}"
                                    alt="Site Logo" /></a>
                        </div>
                    </div>
                    <div class="col align-self-center d-none d-lg-block">
                        <div class="main-menu">
                            <ul>
                                <li class="dropdown"><a href="{{ url('/') }}">Home <i
                                            class="pe-7s-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown position-static"><a href="#">Shop <i
                                            class="pe-7s-angle-down"></i></a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul class="d-block">

                                                <li class="title"><a href="#">Shop Page</a></li>

                                            </ul>
                                            <ul class="d-block">
                                                <li class="title"><a href="#">product Details Page</a></li>

                                            </ul>

                                            <ul class="d-block">
                                                <li class="title"><a href="#">Other Shop Pages</a></li>
                                                <li><a href="{{ route('chart.new') }}">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>


                                            </ul>
                                            <ul class="d-block">
                                                <li class="title"><a href="#">Pages</a></li>


                                            </ul>
                                        </li>
                                        <li>

                                            <ul class="menu-banner w-100">
                                                @foreach ($banner as $row)
                                                <li>
                                                    <a class="p-0" href="shop-left-sidebar.html"><img
                                                            class="img-responsive w-100"
                                                            src="{{ URL::to($row->banner_image) }}" alt="" style="height: 300px"></a>

                                                </li>

                                                @endforeach

                                            </ul>




                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown "><a href="#">Blogs <i class="pe-7s-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-grid.html">Blog Grid Page</a></li>
                                        <li><a href="blog-single.html">Blog Single Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Action Start -->
                    <div class="col col-lg-auto align-self-center pl-0">
                        <div class="header-actions">



                            @guest()

                                @if (Route::has('login'))
                                    <a href="login.html" class="header-action-btn login-btn" data-bs-toggle="modal"
                                        data-bs-target="#loginActive">Sign In</a>
                                @endif
                                @if (Route::has('register'))
                                    <a href="login.html" class="header-action-btn login-btn" data-bs-toggle="modal"
                                        data-bs-target="#RegisterActive">Register</a>
                                @endif
                            @else
                                <a href="login.html" class="header-action-btn login-btn" data-bs-toggle="modal"
                                    data-bs-target="#loginActive">{{ Auth::user()->name }}</a>

                                <a href="{{ route('logout') }}" class="header-action-btn login-btn"
                                    data-bs-toggle="modal"onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                                    data-bs-target="#loginActive">Sign Out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            @endguest

                            <!-- Single Wedge Start -->
                            <a href="#" class="header-action-btn" data-bs-toggle="modal"
                                data-bs-target="#searchActive">
                                <i class="pe-7s-search"></i>
                            </a>
                            <!-- Single Wedge End -->
                            <!-- Single Wedge Start -->

                            <!-- Single Wedge End -->
                            <a href="#offcanvas-cart"
                                class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                <i class="pe-7s-shopbag"></i>
                                <span class="header-action-num">{{ \Gloudemans\Shoppingcart\Facades\Cart::content()->count() }}</span>
                                <!-- <span class="cart-amount">€30.00</span> -->
                            </a>
                            <a href="#offcanvas-mobile-menu"
                                class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                <i class="pe-7s-menu"></i>
                            </a>
                        </div>
                        <!-- Header Action End -->
                    </div>
                </div>
            </div>
    </header>

    <!-- Header Area End -->
    <div class="offcanvas-overlay"></div>


    <!-- OffCanvas Wishlist End -->
    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>

            <div class="foot">
                <div class="buttons mt-30px">
                    <a href="{{ route('chart.new') }}" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                    <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Menu Start -->
    {{-- mobile manu bar --}}
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <button class="offcanvas-close"></button>

        <div class="inner customScroll">

            <div class="offcanvas-menu mb-4">
                <ul>
                    <li><a href="{{ url('/') }}"><span class="menu-text">Home</span></a>

                    </li>
                    <li><a href="#"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Shop Page</span></a>

                            </li>
                            <li>
                                <a href="#"><span class="menu-text">product Details Page</span></a>

                            </li>



                        </ul>
                    </li>

                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <!-- OffCanvas Menu End -->
            <div class="offcanvas-social mt-auto">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Menu End -->

    {{-- mobile manu bar --}}

    <!-- Hero/Intro Slider Start -->
    <div class="section ">
        <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
            <!-- Hero slider Active -->
            <div class="swiper-wrapper">
                <!-- Single slider item -->

                @foreach ($slider as $row)
                    <div class="hero-slide-item-2 slider-height swiper-slide d-flex bg-color1">
                        <div class="container align-self-center">
                            <div class="row">
                                <div class="col-xl-6 col-lg-5 col-md-5 col-sm-5 align-self-center sm-center-view">
                                    <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                        <span class="category">{{ $row->discount }}</span>
                                        <h2 class="title-1">{{ $row->title }}<br> Offer 2022</h2>
                                        <a href="shop-left-sidebar.html"
                                            class="btn btn-lg btn-primary btn-hover-dark">
                                            Shop
                                            Now <i class="fa fa-shopping-basket ml-15px" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div
                                    class="col-xl-6 col-lg-7 col-md-7 col-sm-7 d-flex justify-content-center position-relative">
                                    <div class="show-case">
                                        <div class="hero-slide-image">
                                            <img src="{{ URL::to($row->slider_image) }}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Single slider item -->

                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-white"></div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>

        <!-- Hero/Intro Slider End -->

        <!-- Feature Area Srart -->
        {{-- @include('layouts.User.featurearea') --}}
        <section>
            @yield('content')
        </section>

        <!-- Feature Area End -->

        <!-- Product Area Start -->

        <!-- Product Area End -->

        <!-- Banner Area Start -->

        <!-- Banner Area End -->

        <!-- Product Area Start -->

        <!-- Product Area End -->

        <!-- Deal Area Start -->

        <!-- Deal Area End -->
        <!--  Blog area Start -->

        <!--  Blog area End -->

        <!-- Footer Area Start -->
        <div class="footer-area m-lrb-30px">
            <div class="footer-container">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 mb-md-30px mb-lm-30px">
                                <div class="single-wedge">
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="assets/images/logo/logo-white.png"
                                                alt=""></a>
                                    </div>
                                    <p class="about-text">Lorem ipsum dolor sit amet consectet adipisicing elit, sed do
                                        eiusmod templ incididunt ut labore et dolore magnaol aliqua Ut enim ad minim.
                                    </p>
                                    <ul class="link-follow">
                                        <li>
                                            <a class="m-0" title="Twitter" href="#"><i
                                                    class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a title="Tumblr" href="#"><i class="fa fa-tumblr"
                                                    aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="Facebook" href="#"><i class="fa fa-facebook"
                                                    aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="Instagram" href="#"><i class="fa fa-instagram"
                                                    aria-hidden="true"></i>
                                                </i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-3 col-sm-6 col-lg-2 mb-md-30px mb-lm-30px pl-lg-50px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Quick Links</h4>
                                    <div class="footer-links">
                                        <div class="footer-row">
                                            <ul class="align-items-center">
                                                <li class="li"><a class="single-link" href="#">Support
                                                    </a></li>
                                                <li class="li"><a class="single-link" href="#">Helpline</a>
                                                </li>
                                                <li class="li"><a class="single-link" href="#">Courses</a>
                                                </li>
                                                <li class="li"><a class="single-link" href="about.html">About</a>
                                                </li>
                                                <li class="li"><a class="single-link" href="#">Event</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-3 col-lg-2 col-sm-6 mb-lm-30px pl-lg-50px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Other Page</h4>
                                    <div class="footer-links">
                                        <div class="footer-row">
                                            <ul class="align-items-center">
                                                <li class="li"><a class="single-link" href="about.html"> About
                                                    </a>
                                                </li>
                                                <li class="li"><a class="single-link"
                                                        href="blog-grid.html">Blog</a>
                                                </li>
                                                <li class="li"><a class="single-link" href="#">Speakers</a>
                                                </li>
                                                <li class="li"><a class="single-link"
                                                        href="contact.html">Contact</a>
                                                </li>
                                                <li class="li"><a class="single-link" href="#">Tricket</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-3 col-lg-2 col-sm-6 mb-lm-30px pl-lg-50px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Company</h4>
                                    <div class="footer-links">
                                        <div class="footer-row">
                                            <ul class="align-items-center">
                                                <li class="li"><a class="single-link" href="index.html">Jesco</a>
                                                </li>
                                                <li class="li"><a class="single-link"
                                                        href="shop-left-sidebar.html">Shop</a>
                                                </li>
                                                <li class="li"><a class="single-link" href="contact.html">Contact
                                                        us</a>
                                                </li>
                                                <li class="li"><a class="single-link" href="login.html">Log
                                                        in</a>
                                                </li>
                                                <li class="li"><a class="single-link" href="#">Help</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-4 col-lg-3 col-sm-6">
                                <div class="single-wedge">

                                    <h4 class="footer-herading">Store Information.</h4>
                                    <div class="footer-links">
                                        <!-- News letter area -->
                                        <p class="address">2005 Your Address Goes Here. <br>
                                            896, Address 10010, HGJ</p>
                                        <p class="phone">Phone/Fax:<a href="tel:0123456789">0123456789</a></p>
                                        <p class="mail">Email:<a href="mailto:demo@example.com">demo@example.com</a>
                                        </p>
                                        <img src="assets/images/icons/payment.png" alt=""
                                            class="payment-img img-fulid">

                                        <!-- News letter area  End -->
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <p class="copy-text"> © 2021 <strong>Jesco</strong> Made With <i class="fa fa-heart"
                                        aria-hidden="true"></i> By <a class="company-name"
                                        href="https://hasthemes.com/">
                                        <strong> HasThemes</strong></a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End -->

        <!-- Search Modal Start -->
        <div class="modal popup-search-style" id="searchActive">
            <button type="button" class="close-btn" data-bs-dismiss="modal"><span
                    aria-hidden="true">&times;</span></button>
            <div class="modal-overlay">
                <div class="modal-dialog p-0" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h2>Search Your Product</h2>
                            <form class="navbar-form position-relative" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search here...">
                                </div>
                                <button type="submit" class="submit-btn"><i class="pe-7s-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

        <!-- Login Modal Start -->
        <div class="modal popup-login-style" id="loginActive">
            <button type="button" class="close-btn" data-bs-dismiss="modal"><span
                    aria-hidden="true">&times;</span></button>
            <div class="modal-overlay">
                <div class="modal-dialog p-0" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="login-content">
                                <h2>Log in</h2>
                                <h3>Log in your account</h3>

                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <input type="email" placeholder="email" name="email">
                                    <input type="password" placeholder="Password" name="password">
                                    <div class="remember-forget-wrap">
                                        <div class="remember-wrap">
                                            <input type="checkbox">
                                            <p>Remember</p>
                                            <span class="checkmark"></span>
                                        </div>
                                        <div class="forget-wrap">
                                            <a href="#">Forgot your password?</a>
                                        </div>
                                    </div>
                                    <button type="submit">Log in</button>
                                    <div class="member-register">
                                        <p> Not a member? <a href="login.html"> Register now</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Modal End -->
        <div class="modal popup-login-style" id="RegisterActive">
            <button type="button" class="close-btn" data-bs-dismiss="modal"><span
                    aria-hidden="true">&times;</span></button>
            <div class="modal-overlay">
                <div class="modal-dialog p-0" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="login-content">
                                <h2>Register</h2>
                                <h3>Registration in your account</h3>

                                <form action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <input type="text" placeholder="User name" name="name"
                                        class="@error('name')is-invalid

                                @enderror"
                                        required autocomplete="name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="email" placeholder="email" name="email"
                                        class="@error('email')is-invalid

                                @enderror"
                                        required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="password" placeholder="New Password" name="password"
                                        class="@error('password')is-invalid

                                @enderror"
                                        required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input type="password" placeholder="Re-Type Password"
                                        name="password_confirmation"
                                        class="@error('password')is-invalid

                                @enderror"
                                        required autocomplete="new-password">
                                    <div class="remember-forget-wrap">
                                        <div class="remember-wrap">
                                            <input type="checkbox">
                                            <p>Remember</p>
                                            <span class="checkmark"></span>
                                        </div>
                                        <div class="forget-wrap">
                                            <a href="#">Forgot your password?</a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                                    </div>
                                    <div class="member-register">
                                        <p> Not a member? <a href="login.html"> LogIn now</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal modal-2 fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                                <!-- Swiper -->
                                <div class="swiper-container zoom-top">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto"
                                                src="assets/images/product-image/zoom-image/1.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto"
                                                src="assets/images/product-image/zoom-image/2.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto"
                                                src="{{ asset('assets/images/product-image/zoom-image/3.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto"
                                                src="{{ asset('assets/images/product-image/zoom-image/4.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-container zoom-thumbs mt-3 mb-3">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto"
                                                src="{{ asset('assets/images/product-image/small-image/1.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto"
                                                src="assets/images/product-image/small-image/2.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto"
                                                src="assets/images/product-image/small-image/3.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto"
                                                src="assets/images/product-image/small-image/4.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                                <div class="product-details-content quickview-content">
                                    <h2>Ardene Microfiber Tights</h2>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price not-cut">$18.90</li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-rating-wrap">
                                        <div class="rating-product">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <span class="read-review"><a class="reviews" href="#">( 5 Customer
                                                Review
                                                )</a></span>
                                    </div>
                                    <p class="mt-30px mb-0">Lorem ipsum dolor sit amet, consect adipisicing elit, sed
                                        do
                                        eiusmod tempor incidi ut labore
                                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita ullamco
                                        laboris nisi
                                        ut aliquip ex ea commodo </p>
                                    <div class="pro-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                                value="1" />
                                        </div>
                                        <div class="pro-details-cart">
                                            <button class="add-cart" href="#"> Add To
                                                Cart</button>
                                        </div>
                                        <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                            <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <div class="pro-details-compare-wishlist pro-details-compare">
                                            <a href="compare.html"><i class="pe-7s-refresh-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="pro-details-sku-info pro-details-same-style  d-flex">
                                        <span>SKU: </span>
                                        <ul class="d-flex">
                                            <li>
                                                <a href="#">Ch-256xl</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-categories-info pro-details-same-style d-flex">
                                        <span>Categories: </span>
                                        <ul class="d-flex">
                                            <li>
                                                <a href="#">Fashion.</a>
                                            </li>
                                            <li>
                                                <a href="#">eCommerce</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-social-info pro-details-same-style d-flex">
                                        <span>Share: </span>
                                        <ul class="d-flex">
                                            <li>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-google"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-youtube"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->

        <!-- Global Vendor, plugins JS -->

        <!-- Vendor JS -->
        <!-- <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script> -->

        <!--Plugins JS-->
        <!-- <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/countdown.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script> -->

        <!-- Use the minified version files listed below for better performance and remove the files listed above -->
        {{-- <script src="assets/js/vendor/vendor.min.js"></script> --}}
        <script src="{{ asset('assets/js/vendor/vendor.min.js') }}"></script>
        {{-- <script src="assets/js/plugins/plugins.min.js"></script> --}}
        <script src="{{ asset('assets/js/plugins/plugins.min.js') }}"></script>

        <!-- Main Js -->
        {{-- <script src="assets/js/main.js"></script> --}}
        <script src="{{ asset('assets/js/main.js') }}"></script>

        <script>
            (function (window, document) {
                var loader = function () {
                    var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
                    script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
                    tag.parentNode.insertBefore(script, tag);
                };

                window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
            })(window, document);
        </script>
</body>


<!-- Mirrored from template.hasthemes.com/jesco/jesco/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Sep 2021 07:19:21 GMT -->

</html>
