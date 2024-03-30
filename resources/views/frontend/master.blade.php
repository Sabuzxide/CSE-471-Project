<!DOCTYPE html>
<html lang="zxx">

<head>

    <title>Mental Health and Peaceful Mind</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css" type="text/css">
    <style>
        .primary-btn:hover{
            color: white;
            background: #13a2b7;

        }
        .hos {
    font-size: 20px;
    font-weight: bold;
}
    </style>
</head>

<body>

    <!-- Page Preloder
    <div id="preloder">
        <div class="loader"></div>
    </div>
     -->
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="./index.html">Mental health and peaceful mind</a>
        </div>
        <div id="mobile-menu-wrap"></div>

        <div class="offcanvas__btn">
            <a href="#" class="primary-btn">Register</a>
        </div>

        <ul class="offcanvas__widget">
            <li><i class="fa fa-phone"></i> 1-677-124-44227</li>
            <li><i class="fa fa-map-marker"></i> Mohakhali, Dhaka</li>
            <li><i class="fa fa-clock-o"></i> Mon to Sat 9:00am to 18:00pm</li>
        </ul>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <ul class="header__top__left">
                            <li><i class="fa fa-phone"></i>01728872300</li>
                            <li><i class="fa fa-map-marker"></i> Mohakhali, Dhaka - 1212</li>
                            <li><i class="fa fa-clock-o"></i> Mon to Sat 9:00am to 18:00pm</li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="header__top__right">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="header__logo">
                        <div class="hos">Mental Health Solution</div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__menu__option">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="/">Home</a></li>
                                <li><a href="#">About</a></li>
                                @if (Auth::check())
                                <li><a href="#">Doctor List</a></li>
                                @endif
                                <li><a href="blog.html">Blog</a></li>
                                @if (!Auth::check())
                                <li><a href="#">Login</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('login') }}">Patient</a></li>
                                        <li><a href="{{ route('doctor.login') }}">Doctor</a></li>
                                        <li><a href="{{ route('admin.login') }}">Admin</a></li>
                                    </ul>
                                </li>
                                @else
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="border-0 bg-transparent">Logout</button>
                                    </form>
                                </li>
                                @endif
                            </ul>
                        </nav>
                        @if (!Auth::check())
                        <div class="header__btn">
                            <a href="{{ route('register') }}" class="primary-btn">Register</a>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    @yield('content')

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="footer__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="footer__logo">
                            <p>Mental Health Solution</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="footer__newslatter">

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h5>Company</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Departments</a></li>
                            <li><a href="#">Find a Doctor</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h5>Quick links</h5>
                        <ul>
                            <li><a href="#">Mental Peace</a></li>
                            <li><a href="#">Healthy life Styles</a></li>
                            <li><a href="#">Short Storys</a></li>
                            <li><a href="#">Receent Blogs</a></li>
                            <li><a href="#">Statistics</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__address">
                        <h5>Contact Us</h5>
                        <ul>
                            <li><i class="fa fa-map-marker"></i> Mohakhali, Dhaka - 1212</li>
                            <li><i class="fa fa-phone"></i> 01728872300</li>
                            <li><i class="fa fa-envelope"></i> workwithsabuzahmed@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-6">
                    <div class="footer__map">
                        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48158.305462977965!2d-74.13283844036356!3d41.02757295168286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2e440473470d7%3A0xcaf503ca2ee57958!2sSaddle%20River%2C%20NJ%2007458%2C%20USA!5e0!3m2!1sen!2sbd!4v1575917275626!5m2!1sen!2sbd"
                        height="190" style="border:0" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <p class="text-center text-md-end text-xl-start">
                All Rights Reserved By Sabuz Ahmed
              </p>
                    </div>
                    <div class="col-lg-5">
                        <ul>
                            <li>Terms & Use</li>
                            <li>Privacy Policy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('frontend') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('frontend') }}/js/masonry.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery-ui.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.slicknav.js"></script>
    <script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/js/main.js"></script>
</body>

</html>
