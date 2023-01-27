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

        <title>Laravel</title>

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
                                <a href="index.html">
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
                                                <li><a href="course-details.html"> </a></li>
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
                                        <li class="has-dropdown">
                                            <a href="blog.html">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="course-grid.html">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="instructor.html">Instructor</a></li>
                                                <li><a href="instructor-details.html">Instructor Details</a></li>
                                                <li><a href="event-details.html">Event Details</a></li>
                                                <li><a href="cart.html">My Cart</a></li>
                                                <li><a href="wishlist.html">My Wishlist</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="sign-in.html">Sign In</a></li>
                                                <li><a href="sign-up.html">Sign Up</a></li>
                                                <li><a href="error.html">Error</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
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
                                        <span class="cart-item">2</span>
                                    </a>
                                </div>
                            </div>
                            <div class="header__btn ml-20 d-none d-sm-block">
                                <a href="contact.html" class="e-btn">Try for free</a>
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
                    <ul>
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
                    </ul>
                </div>
                <div class="cartmini__checkout">
                    <div class="cartmini__checkout-title mb-30">
                        <h4>Subtotal:</h4>
                        <span>$113.00</span>
                    </div>
                    <div class="cartmini__checkout-btn">
                        <a href="cart.html" class="e-btn e-btn-border mb-10 w-100"> <span></span> view cart</a>
                        <a href="checkout.html" class="e-btn w-100"> <span></span> checkout</a>
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
                    <a href="index.html">
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
                        <span class="cart-item">2</span>
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
