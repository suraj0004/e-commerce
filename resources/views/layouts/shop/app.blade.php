<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Title Tag  -->
    <title>Eshop - eCommerce HTML5 Template.</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- Web Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- StyleSheet -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <!-- Fancybox -->
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('css/niceselect.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{ asset('css/flex-slider.min.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <style>
        .main-category {
            opacity: 0;
            visibility: hidden;
        }

        .text-primary {
            color: #F7941D !important;
        }

        .bg-primary {
            background: #F7941D !important;
        }

        .btn-primary {
            background: #F7941D !important;
            color: #fff !important;
            font-size: 14px;
            text-align: center;
            line-height: 30px;
            text-transform: uppercase;
            font-weight: 500;
            border: none;
        }

    </style>
    @stack('css')
</head>

<body class="js">

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- End Preloader -->


    <!-- Header -->
    <header class="header shop">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-12">
                        <!-- Top Left -->
                        <div class="top-left">
                            <ul class="list-main">
                                <li><i class="ti-headphone-alt"></i> +060 (800) 801-582</li>
                                <li><i class="ti-email"></i> support@shophub.com</li>
                            </ul>
                        </div>
                        <!--/ End Top Left -->
                    </div>
                    <div class="col-lg-7 col-md-12 col-12">
                        <!-- Top Right -->
                        <div class="right-content">
                            <ul class="list-main">
                                <li><i class="ti-location-pin"></i> Store location</li>
                                @auth
                                    <li><i class="ti-user"></i> <a href="#">My account</a></li>
                                    <li>
                                        <i class="ti-power-off"></i>
                                        <a href="{{ route('logout') }}" onclick="logout()">Logout</a>
                                    </li>
                                @endauth
                                @guest
                                    <li><i class="ti-power-off"></i><a href="{{ route('login') }}">Login</a></li>
                                    <li><i class="fa fa-user-plus" aria-hidden="true"></i><a
                                            href="{{ route('register') }}">Register</a></li>
                                @endguest
                            </ul>
                        </div>
                        <!-- End Top Right -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <div class="middle-inner" style="padding: 0px; margin:0px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-12">
                        <!-- Logo -->
                        {{-- <div class="logo">
                            <a href="index.html"><img src="https://picsum.photos/20/20?random={{ mt_rand(1, 1000) }}"
                                    alt="logo"></a>
                        </div> --}}
                        <!--/ End Logo -->
                        <!-- Search Form -->
                        <div class="search-top">
                            <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                            <!-- Search Form -->
                            <div class="search-top">
                                <form class="search-form">
                                    <input type="text" placeholder="Search here..." name="search">
                                    <button value="search" type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                            <!--/ End Search Form -->
                        </div>
                        <!--/ End Search Form -->
                        <div class="mobile-nav"></div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-12">
                        <div class="search-bar-top">
                            <div class="search-bar">
                                <select>
                                    <option selected="selected">All Category</option>
                                    <option>watch</option>
                                    <option>mobile</option>
                                    <option>kid’s item</option>
                                </select>
                                <form>
                                    <input name="search" placeholder="Search Products Here....." type="search">
                                    <button class="btnn"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-12">
                        <div class="right-bar">
                            <!-- Search Form -->

                            <div class="sinlge-bar">
                                @auth
                                    <a href="#" class="single-icon"><i class="fa fa-user-circle-o"
                                            aria-hidden="true"></i></a>
                                @endauth

                                @guest
                                    <a href="{{ route('login') }}" class="single-icon"><i class="fa fa-sign-in"
                                            aria-hidden="true"></i></a>
                                @endguest
                            </div>
                            <div class="sinlge-bar shopping">
                                <a href="#" class="single-icon"><i class="ti-bag"></i> <span
                                        class="total-count">2</span></a>
                                <!-- Shopping Item -->
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span>2 Items</span>
                                        <a href="#">View Cart</a>
                                    </div>
                                    <ul class="shopping-list">
                                        <li>
                                            <a href="#" class="remove" title="Remove this item"><i
                                                    class="fa fa-remove"></i></a>
                                            <a class="cart-img" href="#"><img
                                                    src="https://picsum.photos/70/70?random={{ mt_rand(1, 1000) }}"
                                                    alt="#"></a>
                                            <h4><a href="#">Woman Ring</a></h4>
                                            <p class="quantity">1x - <span class="amount">$99.00</span></p>
                                        </li>
                                        <li>
                                            <a href="#" class="remove" title="Remove this item"><i
                                                    class="fa fa-remove"></i></a>
                                            <a class="cart-img" href="#"><img
                                                    src="https://picsum.photos/70/70?random={{ mt_rand(1, 1000) }}"
                                                    alt="#"></a>
                                            <h4><a href="#">Woman Necklace</a></h4>
                                            <p class="quantity">1x - <span class="amount">$35.00</span></p>
                                        </li>
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount">$134.00</span>
                                        </div>
                                        <a href="{{ route('checkout_name') }}" class="btn animate">Checkout</a>
                                    </div>
                                </div>
                                <!--/ End Shopping Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="cat-nav-head">
                    <div class="row">
                        @if (isset($page) && $page == 'home')
                            <div class="col-md-3">
                                <div class="all-category" onmouseout="toggleCategoryMenu('0','hidden')">
                                    <h3 class="cat-heading" onmouseover="toggleCategoryMenu('1','visible')"><i
                                            class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
                                    <ul class="main-category" onmouseover="toggleCategoryMenu('1','visible')">
                                        <li><a href="#">New Arrivals <i class="fa fa-angle-right"
                                                    aria-hidden="true"></i></a>
                                            <ul class="sub-category">
                                                <li><a href="#">accessories</a></li>
                                                <li><a href="#">best selling</a></li>
                                                <li><a href="#">top 100 offer</a></li>
                                                <li><a href="#">sunglass</a></li>
                                                <li><a href="#">watch</a></li>
                                                <li><a href="#">man’s product</a></li>
                                                <li><a href="#">ladies</a></li>
                                                <li><a href="#">westrn dress</a></li>
                                                <li><a href="#">denim </a></li>
                                            </ul>
                                        </li>
                                        <li class="main-mega"><a href="#">best selling <i class="fa fa-angle-right"
                                                    aria-hidden="true"></i></a>
                                            <ul class="mega-menu">
                                                <li class="single-menu">
                                                    <a href="#" class="title-link">Shop Kid's</a>
                                                    <div class="image">
                                                        <img src="https://picsum.photos/225/155?random={{ mt_rand(1, 1000) }}"
                                                            alt="#">
                                                    </div>
                                                    <div class="inner-link">
                                                        <a href="#">Kids Toys</a>
                                                        <a href="#">Kids Travel Car</a>
                                                        <a href="#">Kids Color Shape</a>
                                                        <a href="#">Kids Tent</a>
                                                    </div>
                                                </li>
                                                <li class="single-menu">
                                                    <a href="#" class="title-link">Shop Men's</a>
                                                    <div class="image">
                                                        <img src="https://picsum.photos/225/155?random={{ mt_rand(1, 1000) }}"
                                                            alt="#">
                                                    </div>
                                                    <div class="inner-link">
                                                        <a href="#">Watch</a>
                                                        <a href="#">T-shirt</a>
                                                        <a href="#">Hoodies</a>
                                                        <a href="#">Formal Pant</a>
                                                    </div>
                                                </li>
                                                <li class="single-menu">
                                                    <a href="#" class="title-link">Shop Women's</a>
                                                    <div class="image">
                                                        <img src="https://picsum.photos/225/155?random={{ mt_rand(1, 1000) }}"
                                                            alt="#">
                                                    </div>
                                                    <div class="inner-link">
                                                        <a href="#">Ladies Shirt</a>
                                                        <a href="#">Ladies Frog</a>
                                                        <a href="#">Ladies Sun Glass</a>
                                                        <a href="#">Ladies Watch</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">accessories</a></li>
                                        <li><a href="#">top 100 offer</a></li>
                                        <li><a href="#">sunglass</a></li>
                                        <li><a href="#">watch</a></li>
                                        <li><a href="#">man’s product</a></li>
                                        <li><a href="#">ladies</a></li>
                                        <li><a href="#">westrn dress</a></li>
                                        <li><a href="#">denim </a></li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                        <div class=" @if (isset($page) && $page=='home' ) col-md-9 @else offset-3 col-md-9 @endif">
                            <div class="menu-area">
                                <!-- Main Menu -->
                                <nav class="navbar navbar-expand-lg">
                                    <div class="navbar-collapse">
                                        <div class="nav-inner">
                                            <ul class="nav main-menu menu navbar-nav">
                                                <li class="@if (isset($page) && $page=='home' ) active @endif"><a
                                                        href="{{ route('home') }}">Home</a></li>
                                                <li class="@if (isset($page) &&
                                                    $page=='categories' ) active @endif"><a
                                                        href="{{ route('category') }}">Category</a></li>
                                                <li class="@if (isset($page) && $page=='brands'
                                                    ) active @endif"><a
                                                        href="{{ route('brand') }}">Brand</a></li>
                                                <li class="@if (isset($page) && $page=='contact'
                                                    ) active @endif"><a
                                                        href="{{ route('contact.index') }}">Contact Us</a></li>
                                                @guest
                                                    <li class="@if (isset($page) && $page=='login'
                                                        ) active @endif"><a
                                                            href="{{ route('login') }}">Login</a></li>
                                                    <li class="@if (isset($page) && $page=='register'
                                                        ) active @endif"><a
                                                            href="{{ route('register') }}">Register</a></li>
                                                @endguest
                                                @auth
                                                    <li class="@if (isset($page) && $page=='logout'
                                                        ) active @endif"><a
                                                            href="{{ route('logout') }}" onclick="logout()">Logout</a></li>
                                                @endauth
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <!--/ End Main Menu -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!--/ End Header -->
    <div>
        @yield('content')
    </div>

    <!-- Slider Area -->
    <section class="hero-slider">
        <!-- Single Slider -->
        <div class="single-slider">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-9 offset-lg-3 col-12">
                        <div class="text-inner">
                            <div class="row">
                                <div class="col-lg-7 col-12">
                                    <div class="hero-text">
                                        <h1><span>UP TO 50% OFF </span>Shirt For Man</h1>
                                        <p>Maboriosam in a nesciung eget magnae <br> dapibus disting tloctio in the find
                                            it pereri <br> odiy maboriosm.</p>
                                        <div class="button">
                                            <a href="#" class="btn">Shop Now!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Single Slider -->
    </section>
    <!--/ End Slider Area -->



    <!-- Start Shop Services Area -->
    @if (isset($page) && $page != 'login' && $page != 'register')
        <section class="shop-services section home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="ti-rocket"></i>
                            <h4>Free shiping</h4>
                            <p>Orders over $100</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="ti-reload"></i>
                            <h4>Free Return</h4>
                            <p>Within 30 days returns</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="ti-lock"></i>
                            <h4>Secure Payment</h4>
                            <p>100% secure payment</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="ti-tag"></i>
                            <h4>Best Peice</h4>
                            <p>Guaranteed price</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- End Shop Services Area -->

    @guest
        <section class="shop-newsletter section">
            <div class="container">
                <div class="inner-top">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-12">
                            <!-- Start Newsletter Inner -->
                            <div class="inner">
                                <h4>Newsletter</h4>
                                <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                                <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                    <input name="EMAIL" placeholder="Your email address" required="" type="email">
                                    <button class="btn">Subscribe</button>
                                </form>
                            </div>
                            <!-- End Newsletter Inner -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endguest



    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Footer Top -->
        <div class="footer-top section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer about">
                            <div class="logo">
                                <a href="index.html"><img
                                        src="https://picsum.photos/70/70?random={{ mt_rand(1, 1000) }}" alt="#"></a>
                            </div>
                            <p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, magna
                                eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor,
                                facilisis luctus, metus.</p>
                            <p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456
                                        789</a></span></p>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                            <h4>Customer Service</h4>
                            <ul>
                                <li><a href="#">Payment Methods</a></li>
                                <li><a href="#">Money-back</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer social">
                            <h4>Get In Tuch</h4>
                            <!-- Single Widget -->
                            <div class="contact">
                                <ul>
                                    <li>NO. 342 - London Oxford Street.</li>
                                    <li>012 United Kingdom.</li>
                                    <li>info@eshop.com</li>
                                    <li>+032 3456 7890</li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                            <ul>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter"></i></a></li>
                                <li><a href="#"><i class="ti-flickr"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Top -->
        <div class="copyright">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="left">
                                <p>Copyright © 2020 <a href="http://www.wpthemesgrid.com"
                                        target="_blank">Wpthemesgrid</a> - All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="right">
                                <img src="https://picsum.photos/70/70?random={{ mt_rand(1, 1000) }}" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>

    </footer>
    <!-- /End Footer Area -->

    <!-- Jquery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Slicknav JS -->
    <script src="{{ asset('js/slicknav.min.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('js/owl-carousel.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('js/magnific-popup.js') }}"></script>
    <!-- Waypoints JS -->
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <!-- Countdown JS -->
    <script src="{{ asset('js/finalcountdown.min.js') }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('js/nicesellect.js') }}"></script>
    <!-- Flex Slider JS -->
    <script src="{{ asset('js/flex-slider.js') }}"></script>
    <!-- ScrollUp JS -->
    <script src="{{ asset('js/scrollup.js') }}"></script>
    <!-- Onepage Nav JS -->
    <script src="{{ asset('js/onepage-nav.min.js') }}"></script>
    <!-- Easing JS -->
    <script src="{{ asset('js/easing.js') }}"></script>
    <!-- Active JS -->
    <script src="{{ asset('js/active.js') }}"></script>


    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        function logout() {
            event.preventDefault();
            document.getElementById('logout-form').submit();
        }

        function toggleCategoryMenu(opacity, visibility) {
            $('.main-category').css({
                'opacity': opacity,
                'visibility': visibility
            })
        }

    </script>

    @stack('js')
</body>

</html>
