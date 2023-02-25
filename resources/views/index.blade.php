<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Oguru </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/preloader.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/backToTop.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fontAwesome5Pro.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/elegantFont.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        @vite(['resources/js/app.js', 'resources/css/app.css'])
    </head>
    <body>

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- header area start -->
    <header>
        <div id="header-sticky" class="header__area header__transparent header__padding">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-2 col-sm-4 col-6">
                        <div class="header__left d-flex">
                            <div class="logo">
                                <a href="/">
                                    <img src="assets/img/logo/logo.png" alt="logo">
                                </a>
                            </div>
                            <div class="header__category d-none d-lg-block">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="/course" class="cat-menu d-flex align-items-center">
                                                <div class="cat-dot-icon d-inline-block">
                                                    <svg viewBox="0 0 276.2 276.2">
                                                        <g>
                                                            <g>
                                                                <path class="cat-dot" d="M33.1,2.5C15.3,2.5,0.9,17,0.9,34.8s14.5,32.3,32.3,32.3s32.3-14.5,32.3-32.3S51,2.5,33.1,2.5z"/>
                                                                <path class="cat-dot" d="M137.7,2.5c-17.8,0-32.3,14.5-32.3,32.3s14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3S155.5,2.5,137.7,2.5    z"/>
                                                                <path class="cat-dot" d="M243.9,67.1c17.8,0,32.3-14.5,32.3-32.3S261.7,2.5,243.9,2.5S211.6,17,211.6,34.8S226.1,67.1,243.9,67.1z"/>
                                                                <path class="cat-dot" d="M32.3,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3S0,120.4,0,138.2S14.5,170.5,32.3,170.5z"/>
                                                                <path class="cat-dot" d="M136.8,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3c-17.8,0-32.3,14.5-32.3,32.3    C104.5,156.1,119,170.5,136.8,170.5z"/>
                                                                <path class="cat-dot" d="M243,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3s-32.3,14.5-32.3,32.3    C210.7,156.1,225.2,170.5,243,170.5z"/>
                                                                <path class="cat-dot" d="M33,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3s32.3-14.5,32.3-32.3S50.8,209.1,33,209.1z    "/>
                                                                <path class="cat-dot" d="M137.6,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3    S155.4,209.1,137.6,209.1z"/>
                                                                <path class="cat-dot" d="M243.8,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3    S261.6,209.1,243.8,209.1z"/>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <span>Category</span>
                                            </a>
                                            <ul class="cat-submenu">
                                                @foreach(category() as $row)
                                                    <li><a href="#">{{ $row->name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-10 col-sm-8 col-6">
                        <div class="header__right d-flex justify-content-end align-items-center">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="">
                                            <a href="/">Home</a>
                                        </li>
                                        <li class="">
                                            <a href="/course">Courses</a>
                                        </li>
                                        <li>
                                            <a href="#">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header__search p-relative ml-50 d-none d-md-block">
                                <form action="#">
                                    <input type="text" placeholder="Search...">
                                    <button type="submit"><i class="fad fa-search"></i></button>
                                </form>
                                <div class="header__cart">
                                    <a href="javascript:void(0);" class="cart-toggle-btn">
                                        <div class="header__cart-icon">
                                            <svg viewBox="0 0 24 24">
                                                <circle class="st0" cx="9" cy="21" r="1"/>
                                                <circle class="st0" cx="20" cy="21" r="1"/>
                                                <path class="st0" d="M1,1h4l2.7,13.4c0.2,1,1,1.6,2,1.6h9.7c1,0,1.8-0.7,2-1.6L23,6H6"/>
                                            </svg>
                                        </div>
                                        <span class="cart-item">0</span>
                                    </a>
                                </div>
                            </div>
                            <div class="header__btn ml-20 d-none d-sm-block">
                                <a href="/login" class="e-btn">Try for free</a>
                            </div>
                            <div class="sidebar__menu d-xl-none">
                                <div class="sidebar-toggle-btn ml-30" id="sidebar-toggle">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->

    <!-- cart mini area start -->
    <div class="cartmini__area">
        <div class="cartmini__wrapper">
            <div class="cartmini__title">
                <h4>Shopping cart</h4>
            </div>
            <div class="cartmini__close">
                <button type="button" class="cartmini__close-btn"><i class="fal fa-times"></i></button>
            </div>
            <div class="cartmini__widget">
                <div class="cartmini__inner">
                    <!-- <ul>
                        <li>
                            <div class="cartmini__thumb">
                                <a href="#">
                                    <img src="assets/img/course/sm/cart-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="cartmini__content">
                                <h5><a href="#">Strategy law and organization Foundation </a></h5>
                                <div class="product-quantity mt-10 mb-10">
                                    <span class="cart-minus">-</span>
                                    <input class="cart-input" type="text" value="1"/>
                                    <span class="cart-plus">+</span>
                                </div>
                                <div class="product__sm-price-wrapper">
                                    <span class="product__sm-price">$46.00</span>
                                </div>
                            </div>
                            <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                        </li>
                        <li>
                            <div class="cartmini__thumb">
                                <a href="#">
                                    <img src="assets/img/course/sm/cart-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="cartmini__content">
                                <h5><a href="#">Fundamentals of music theory Learn new</a></h5>
                                <div class="product-quantity mt-10 mb-10">
                                    <span class="cart-minus">-</span>
                                    <input class="cart-input" type="text" value="1"/>
                                    <span class="cart-plus">+</span>
                                </div>
                                <div class="product__sm-price-wrapper">
                                    <span class="product__sm-price">$32.00</span>
                                </div>
                            </div>
                            <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                        </li>
                        <li>
                            <div class="cartmini__thumb">
                                <a href="#">
                                    <img src="assets/img/course/sm/cart-3.jpg" alt="">
                                </a>
                            </div>
                            <div class="cartmini__content">
                                <h5><a href="#">Strategy law and organization Foundation </a></h5>
                                <div class="product-quantity mt-10 mb-10">
                                    <span class="cart-minus">-</span>
                                    <input class="cart-input" type="text" value="1"/>
                                    <span class="cart-plus">+</span>
                                </div>
                                <div class="product__sm-price-wrapper">
                                    <span class="product__sm-price">$62.00</span>
                                </div>
                            </div>
                            <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                        </li>
                    </ul> -->
                </div>
                <div class="cartmini__checkout">
                    <div class="cartmini__checkout-title mb-30">
                        <h4>Subtotal:</h4>
                        <span>0</span>
                    </div>
                    <div class="cartmini__checkout-btn">
                        <a href="#" class="e-btn e-btn-border mb-10 w-100"> <span></span> view cart</a>
                        <a href="#" class="e-btn w-100"> <span></span> checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- cart mini area end -->


    <!-- sidebar area start -->
    <div class="sidebar__area">
        <div class="sidebar__wrapper">
            <div class="sidebar__close">
                <button class="sidebar__close-btn" id="sidebar__close-btn">
                    <span><i class="fal fa-times"></i></span>
                    <span>close</span>
                </button>
            </div>
            <div class="sidebar__content">
                <div class="logo mb-40">
                    <a href="/">
                        <img src="assets/img/logo/logo.png" alt="logo">
                    </a>
                </div>
                <div class="mobile-menu fix"></div>

                <div class="sidebar__search p-relative mt-40 ">
                    <form action="#">
                        <input type="text" placeholder="Search...">
                        <button type="submit"><i class="fad fa-search"></i></button>
                    </form>
                </div>
                <div class="sidebar__cart mt-30">
                    <a href="#">
                        <div class="header__cart-icon">
                            <svg viewBox="0 0 24 24">
                                <circle class="st0" cx="9" cy="21" r="1"/>
                                <circle class="st0" cx="20" cy="21" r="1"/>
                                <path class="st0" d="M1,1h4l2.7,13.4c0.2,1,1,1.6,2,1.6h9.7c1,0,1.8-0.7,2-1.6L23,6H6"/>
                            </svg>
                        </div>
                        <span class="cart-item">0</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- sidebar area end -->
    <div class="body-overlay"></div>
    <!-- sidebar area end -->


{{--    <div id="header"></div>--}}
    <div id="app"></div>
    <footer>
        <div class="footer__area footer-bg">
            <div class="footer__top pt-190 pb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="footer__widget mb-50">
                                <div class="footer__widget-head mb-22">
                                    <div class="footer__logo">
                                        <a href="/">
                                            <img src="assets/img/logo/logo-2.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="footer__widget-body">
                                    <p>Great lesson ideas and lesson plans for ESL teachers! Educators can customize lesson plans to best.</p>

                                    <div class="footer__social">
                                        <ul>
                                            <li><a href="#"><i class="social_facebook"></i></a></li>
                                            <li><a href="https://www.instagram.com/oguruindonesia/" target="_blank" class="tw"><i class="social_instagram"></i></a></li>
                                            <li><a href="https://www.youtube.com/channel/UCHUIGc7M2ocYjGCpqELLOxQ" target="_blank" class="pin"><i class="social_youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 offset-xxl-1 col-xl-2 offset-xl-1 col-lg-3 offset-lg-0 col-md-2 offset-md-1 col-sm-5 offset-sm-1">
                            <div class="footer__widget mb-50">
                                <div class="footer__widget-head mb-22">
                                    <h3 class="footer__widget-title">Company</h3>
                                </div>
                                <div class="footer__widget-body">
                                    <div class="footer__link">
                                        <ul>
                                            <li><a href="/about">About</a></li>
                                            <li><a href="/terms">Terms and Conditions</a></li>
                                            <li><a href="/privacy">Privacy Policy</a></li>
                                            <li><a href="/support">Support</a></li>
                                            <!-- <li><a href="#">Events</a></li> -->
                                            <!-- <li><a href="#">Instructor</a></li> -->
                                            <!-- <li><a href="#">Career</a></li> -->
                                            <!-- <li><a href="#">Become a Teacher</a></li> -->
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-xxl-2 col-xl-2 col-lg-2 offset-lg-0 col-md-3 offset-md-1 col-sm-6">
                            <div class="footer__widget mb-50">
                                <div class="footer__widget-head mb-22">
                                    <h3 class="footer__widget-title">Platform</h3>
                                </div>
                                <div class="footer__widget-body">
                                    <div class="footer__link">
                                        <ul>
                                            <li><a href="#">Browse Library</a></li>
                                            <li><a href="#">Library</a></li>
                                            <li><a href="#">Partners</a></li>
                                            <li><a href="#">News & Blogs</a></li>
                                            <li><a href="#">FAQs</a></li>
                                            <li><a href="#">Tutorials</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5 col-sm-6">
                            <div class="footer__widget footer__pl-70 mb-50">
                                <div class="footer__widget-head mb-22">
                                    <h3 class="footer__widget-title">Subscribe</h3>
                                </div>
                                <div class="footer__widget-body">
                                    <div class="footer__subscribe">
                                        <form action="#">
                                            <div class="footer__subscribe-input mb-15">
                                                <input type="email" placeholder="Your email address">
                                                <button type="submit">
                                                    <i class="far fa-arrow-right"></i>
                                                    <i class="far fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </form>
                                        <p>Get the latest news and updates right at your inbox.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="footer__copyright text-center">
                                <p>© 2022 Educal, All Rights Reserved. Design By <a href="/">Theme Pure</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

        <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
        <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
        <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/parallax.min.js') }}"></script>
        <script src="{{ asset('assets/js/backToTop.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>
