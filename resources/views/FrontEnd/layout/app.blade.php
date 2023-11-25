<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ETE department</title>
    <meta name="author" content="md abdur rahman">
    <meta name="description" content="department of ETE in international islamic university(IIUC)">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        #blood .blood-btn a{
            position: relative;
            background-color: #198754;
            display: block;
            z-index: 1;
        }
        #blood .blood-btn a::after{
          content: '';
          position: absolute;
          width: 100%;
          height: 100%;
          padding:30px 0px;
          top: 0;
          left: 0;
          transform: scale(0);
          background-color: rgb(160, 25, 25) !important;
          transition: 0.5s all ease;
          transform-origin: top;
          z-index: -1;
        }
        #blood .blood-btn a:hover::after{
          transform: scale(1);
        }
    </style>
    <!-- Favicon -->
    @stack('frontEndCSS')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/icons.min.css') }}">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    
    {{-- custom css --}}
    @stack('frontendcss')

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.11.7.min.js') }}"></script>
</head>

<body>
<header class="header-area">
    <div class="header-top bg-img" style="background-image:url(assets/img/icon-img/header-shape.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-12 col-sm-8">
                    <div class="header-contact">
                        <ul>
                            <li><i class="fa fa-phone"></i> +98 558 547 589</li>
                            <li><i class="fa fa-envelope-o"></i><a href="blog.html#">education@email.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-12 col-sm-4">
                    <div class="login-register">
                        <ul>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-bar clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-4">
                    <div class="logo">
                        <a href="index.html">
                            <img alt="" src="{{ asset('assets/img/logo/logo.png') }}">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-6 col-8">
                    <div class="menu-cart-wrap">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="{{ ('/') }}"> HOME </a>
                                        {{-- <ul class="submenu">
                                            <li><a href="index.html">home version 1</a></li>
                                            <li><a href="index-2.html">home version 2</a></li>
                                            <li><a href="index-3.html">home version 3</a></li>
                                        </ul> --}}
                                    </li>
                                    <li><a href="{{ route('teachers.index') }}"> ABOUT  </a></li>
                                    <li class="mega-menu-position top-hover"><a href="shop.html"> SHOP <i class="fa fa-angle-down"></i> </a>
                                        <ul class="mega-menu">
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"><a href="blog.html#">Categories 01</a></li>
                                                    <li><a href="shop.html">bag</a></li>
                                                    <li><a href="shop.html">Pen</a></li>
                                                    <li><a href="shop.html">Erasers</a></li>
                                                    <li><a href="shop.html">Glue sticks</a></li>
                                                    <li><a href="shop.html">Lunchbox </a></li>
                                                    <li><a href="shop.html">Pencil box </a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"><a href="blog.html#">Categories 02</a></li>
                                                    <li><a href="shop.html">bag</a></li>
                                                    <li><a href="shop.html">Pen</a></li>
                                                    <li><a href="shop.html">Erasers</a></li>
                                                    <li><a href="shop.html">Glue sticks</a></li>
                                                    <li><a href="shop.html">Lunchbox </a></li>
                                                    <li><a href="shop.html">Pencil box </a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"><a href="blog.html#">Categories 03</a></li>
                                                    <li><a href="shop.html">bag</a></li>
                                                    <li><a href="shop.html">Pen</a></li>
                                                    <li><a href="shop.html">Erasers</a></li>
                                                    <li><a href="shop.html">Glue sticks</a></li>
                                                    <li><a href="shop.html">Lunchbox </a></li>
                                                    <li><a href="shop.html">Pencil box </a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"><a href="blog.html#">Categories 04</a></li>
                                                    <li><a href="shop.html">bag</a></li>
                                                    <li><a href="shop.html">Pen</a></li>
                                                    <li><a href="shop.html">Erasers</a></li>
                                                    <li><a href="shop.html">Glue sticks</a></li>
                                                    <li><a href="shop.html">Lunchbox </a></li>
                                                    <li><a href="shop.html">Pencil box </a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('frontend.attendance.check.index') }}"> PAGES <i class="fa fa-angle-down"></i> </a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('frontend.attendance.check.index') }}">Check Attendance</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('courses.record') }}"> COURSES </a></li>
                                    <li><a href="{{ route('all.blog.list') }}"> BLOG </a>
                                        <ul class="submenu">
                                            {{-- <li><a href="{{ route('blog.index') }}">blog</a></li> --}}
                                            <li><a href="{{ route('all.blog.list') }}">blog details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html"> CONTACT </a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="cart-search-wrap">
                            <div class="cart-wrap">
                                <button class="icon-cart">
                                    <i class="fa fa-cart-plus"></i>
                                    <span class="count-style">02</span>
                                </button>
                                <div class="shopping-cart-content">
                                    <ul>
                                        <li class="single-shopping-cart">
                                            <div class="shopping-cart-img">
                                                <a href="blog.html#"><img alt="" src="assets/img/cart/cart-1.png"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="blog.html#">Color Box </a></h4>
                                                <h6>Qty: 02</h6>
                                                <span>$260.00</span>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="blog.html#"><i class="fa fa-times-circle"></i></a>
                                            </div>
                                        </li>
                                        <li class="single-shopping-cart">
                                            <div class="shopping-cart-img">
                                                <a href="blog.html#"><img alt="" src="assets/img/cart/cart-2.png"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="blog.html#">Color Box </a></h4>
                                                <h6>Qty: 02</h6>
                                                <span>$260.00</span>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="blog.html#"><i class="fa fa-times-circle"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-total">
                                        <h4>Shipping : <span>$20.00</span></h4>
                                        <h4>Total : <span class="shop-total">$260.00</span></h4>
                                    </div>
                                    <div class="shopping-cart-btn">
                                        <a class="default-btn btn-hover" href="cart.html">view cart</a>
                                        <a class="default-btn btn-hover" href="checkout.html">checkout</a>
                                    </div>
                                </div>
                            </div>
                            <div class="header-search">
                                <button class="search-toggle">
                                    <i class="fa fa-search"></i>
                                </button>
                                <div class="search-content">
                                    {{-- <form action="blog.html#">
                                        <input type="text" placeholder="Search">
                                        <button>
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form> --}}

                                    <form action="{{ route('blog.search') }}" method="GET">
                                        @csrf
                                        <input type="search" name="search" placeholder="Search by post title">
                                        <button><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="{{ ('/') }}">HOME</a>
                                {{-- <ul>
                                    <li><a href="index.html">home version 1</a></li>
                                    <li><a href="index-2.html">home version 2</a></li>
                                    <li><a href="index-3.html">home version 3</a></li>
                                </ul> --}}
                            </li>
                            <li><a href="{{ route('teachers.index') }}">About</a></li>
                            <li><a href="shop.html">Shop</a>
                                <ul>
                                    <li><a href="blog.html#">Categories 01</a>
                                        <ul>
                                            <li><a href="shop.html">bag</a></li>
                                            <li><a href="shop.html">Pen</a></li>
                                            <li><a href="shop.html">Erasers</a></li>
                                            <li><a href="shop.html">Glue sticks</a></li>
                                            <li><a href="shop.html">Lunchbox </a></li>
                                            <li><a href="shop.html">Pencil box </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html#">Categories 02</a>
                                        <ul>
                                            <li><a href="shop.html">bag</a></li>
                                            <li><a href="shop.html">Pen</a></li>
                                            <li><a href="shop.html">Erasers</a></li>
                                            <li><a href="shop.html">Glue sticks</a></li>
                                            <li><a href="shop.html">Lunchbox </a></li>
                                            <li><a href="shop.html">Pencil box </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html#">Categories 03</a>
                                        <ul>
                                            <li><a href="shop.html">bag</a></li>
                                            <li><a href="shop.html">Pen</a></li>
                                            <li><a href="shop.html">Erasers</a></li>
                                            <li><a href="shop.html">Glue sticks</a></li>
                                            <li><a href="shop.html">Lunchbox </a></li>
                                            <li><a href="shop.html">Pencil box </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html#">Categories 04</a>
                                        <ul>
                                            <li><a href="shop.html">bag</a></li>
                                            <li><a href="shop.html">Pen</a></li>
                                            <li><a href="shop.html">Erasers</a></li>
                                            <li><a href="shop.html">Glue sticks</a></li>
                                            <li><a href="shop.html">Lunchbox </a></li>
                                            <li><a href="shop.html">Pencil box </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ route('frontend.attendance.check.index') }}">Pages</a>
                                <ul>
                                    <li><a href="{{ route('frontend.attendance.check.index') }}">Check Attendance</a></li>
                                </ul>
                            </li>
                            <li><a href="about-us.html">About us</a></li>
                            <li><a href="{{ route('all.blog.list') }}">Blog</a>
                                <ul>
                                    {{-- <li> <a href="{{ route('blog.index') }}">blog</a></li> --}}
                                    <li><a href="{{ route('all.blog.list') }}">blog details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

{{-- MISSING FITCH  --}}
   @yield('frontEnd-layour')

<footer class="footer-area">
    <div class="footer-top bg-img default-overlay pt-130 pb-80" style="background-image:url(assets/img/bg/bg-4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>ABOUT US</h4>
                        </div>
                        <div class="footer-about">
                            <p>Ugiat nulla pariatur. Edeserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natu</p>
                            <div class="f-contact-info">
                                <div class="single-f-contact-info">
                                    <i class="fa fa-home"></i>
                                    <span>Uttara, Dhaka, Bangladesh</span>
                                </div>
                                <div class="single-f-contact-info">
                                    <i class="fa fa-envelope-o"></i>
                                    <span><a href="blog.html#">education@email.com</a></span>
                                </div>
                                <div class="single-f-contact-info">
                                    <i class="fa fa-phone"></i>
                                    <span> +98 558 547 589</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>QUICK LINK</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="{{ ('/') }}">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="{{ route('courses.record') }}">Courses</a></li>
                                <li><a href="blog.html#">Admission</a></li>
                                <li><a href="blog.html#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-widget negative-mrg-30 mb-40">
                        <div class="footer-title">
                            <h4>COURSES</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="blog.html#">Under Graduate Programmes </a></li>
                                <li><a href="blog.html#">Graduate Programmes </a></li>
                                <li><a href="blog.html#">Diploma Courses</a></li>
                                <li><a href="blog.html#">Others Programmes</a></li>
                                <li><a href="blog.html#">Short Courses</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>GALLERY</h4>
                        </div>
                        <div class="footer-gallery">
                            <ul>
                                <li><a href="blog.html#"><img src="assets/img/gallery/gallery-1.png" alt=""></a></li>
                                <li><a href="blog.html#"><img src="assets/img/gallery/gallery-2.png" alt=""></a></li>
                                <li><a href="blog.html#"><img src="assets/img/gallery/gallery-3.png" alt=""></a></li>
                                <li><a href="blog.html#"><img src="assets/img/gallery/gallery-4.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>News Latter</h4>
                        </div>
                        <div class="subscribe-style">
                            <p>Dugiat nulla pariatur. Edeserunt mollit anim id est laborum. Sed ut perspiciatis unde</p>
                            <div id="mc_embed_signup" class="subscribe-form">
                                <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                    <div id="mc_embed_signup_scroll" class="mc-form">
                                        <input class="email" type="email" required="" placeholder="Your E-mail Address" name="EMAIL" value="">
                                        <div class="mc-news" aria-hidden="true">
                                            <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                        </div>
                                        <div class="clear">
                                            <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="SUBMIT">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt-15 pb-15">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="copyright">
                        <p>
                            Copyright ©
                            <a href="blog.html#">GLAXDU</a>
                            . All Right Reserved.
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="footer-menu-social">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="blog.html#">Privecy & Policy</a></li>
                                <li><a href="blog.html#">Terms & Conditions of Use</a></li>
                            </ul>
                        </div>
                        <div class="footer-social">
                            <ul>
                                <li><a class="facebook" href="blog.html#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="youtube" href="blog.html#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a class="twitter" href="blog.html#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="google-plus" href="blog.html#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>













<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{ asset('assets/js/vendor/jquery-v2.2.4.min.js') }}"></script>
<!-- Popper JS -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Plugins JS -->
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<!-- Ajax Mail -->
<script src="{{ asset('assets/js/ajax-mail.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

{{-- custom js --}}
@stack('frontendJs')

</body>

</html>