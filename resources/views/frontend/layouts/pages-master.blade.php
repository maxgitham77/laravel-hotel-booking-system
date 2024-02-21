<!doctype html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/pagesassets/css/bootstrap.min.css') }}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/pagesassets/css/animate.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/pagesassets/fonts/flaticon.css') }}">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/pagesassets/css/boxicons.min.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/pagesassets/css/magnific-popup.css') }}">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/pagesassets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/pagesassets/css/owl.theme.default.min.css') }}">
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/pagesassets/css/nice-select.min.css') }}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/pagesassets/css/meanmenu.css') }}">
    <!-- Jquery Ui CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/pagesassets/css/jquery-ui.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/pagesassets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/pagesassets/css/responsive.css') }}">
    <!-- Theme Dark CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/pagesassets/css/theme-dark.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/pagesassets/css/toastr.css') }}">
    <!--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >-->

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('frontend/pagesassets/img/favicon.ico') }}">

    <title>Reiseziel Hamburg</title>
    <style>
        .navbar .company-logo {
            padding: 5px 0;
            float: left;
        }

        .navbar .company-logo img {
            height: 100px;
        }

        .logo-login {
            display: flex;
            align-items: center;
            justify-items: center;
            justify-content: center;
            padding-top: 48px;
            background-: red;
        }

        .login-copyright{
            display: flex;
            justify-content: center;
            border-top: 1px solid #E4BA16;
            padding-top: 10px;
        }
        .login-copyright a {
            color: #A38307;
        }
    </style>
</head>
<body>

<!-- PreLoader Start -->
<div class="preloader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="sk-cube-area">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>
</div>
<!-- PreLoader End -->
@if (request()->is(['login', 'register']))
    <div class="logo-login">
        <a href="{{ url('/') }}">
            <img src="{{ asset('frontend/pagesassets/img/logos/reiseZielHamburg-logo-black.png') }}" alt="Logo"
                 width="200px" height="120px">
        </a>
    </div>

@else
    <!-- Top Header Start -->
    <header class="top-header top-header-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-2 pr-0">
                    <div class="language-list">
                        <select class="language-list-item">
                            <option>English</option>
                            <option>العربيّة</option>
                            <option>Deutsch</option>
                            <option>Português</option>
                            <option>简体中文</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-9 col-md-10">
                    <div class="header-right">
                        <ul>
                            <li>
                                <i class='bx bx-home-alt'></i>
                                <a href="#">123 Virgil A Stanton, Virginia, USA</a>
                            </li>
                            <li>
                                <i class='bx bx-phone-call'></i>
                                <a href="tel:+1-(123)-456-7890">+1 (123) 456 7890</a>
                            </li>
                            <li>
                                <i class='bx bx-envelope'></i>
                                <a href="mailto:hello@atoli.com">hello@atoli.com</a>
                            </li>

                            @auth
                                <li>
                                    <i class='bx bxs-user-pin'></i>
                                    <a href="{{ route('dashboard') }}">Dashboard</a>
                                </li>

                                <li>
                                    <i class='bx bxs-user-rectangle'></i>
                                    <a href="{{ route('user.logout') }}">Logout</a>
                                </li>
                            @else
                                <li>
                                    <i class='bx bxs-user-pin'></i>
                                    <a href="{{ route('login') }}">Login</a>
                                </li>

                                <li>
                                    <i class='bx bxs-user-rectangle'></i>
                                    <a href="{{ route('register') }}">Register</a>
                                </li>
                            @endauth

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Top Header End -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="index.html" class="logo">
                <img src="assets/img/logos/logo-3.png" class="logo-one" alt="Logo">
                <img src="assets/img/logos/footer-logo3.png" class="logo-two" alt="Logo">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav nav-three">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light ">
                    <a class="navbar-brand company-logo" href="{{ url('/') }}">
                        <img src="{{ asset('frontend/img/logos/reiseZielHamburg-logo.png') }}" alt="ReiseZiel Hamburg">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Home
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="index.html" class="nav-link">
                                            Home One
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-2.html" class="nav-link">
                                            Home Two
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-3.html" class="nav-link">
                                            Home Three
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="about.html" class="nav-link">
                                    About
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    Pages
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="book.html" class="nav-link">
                                            Booking
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="team.html" class="nav-link">
                                            Team
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="faq.html" class="nav-link">
                                            FAQ
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="restaurant.html" class="nav-link">
                                            Restaurant
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="reservation.html" class="nav-link">
                                            Reservation
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="gallery.html" class="nav-link">
                                            Gallery
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="testimonials.html" class="nav-link">
                                            Testimonials
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="checkout.html" class="nav-link">
                                            Check out
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="sign-in.html" class="nav-link active">
                                            Sign In
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="sign-up.html" class="nav-link">
                                            Sign Up
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="terms-condition.html" class="nav-link">
                                            Terms & Conditions
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="privacy-policy.html" class="nav-link">
                                            Privacy Policy
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="404.html" class="nav-link">
                                            404 page
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="coming-soon.html" class="nav-link">
                                            Coming Soon
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Services
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="services-1.html" class="nav-link">
                                            Services Style One
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="services-2.html" class="nav-link">
                                            Services Style Two
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="service-details.html" class="nav-link">
                                            Service Details
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Blog
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="blog-1.html" class="nav-link">
                                            Blog Style One
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-2.html" class="nav-link">
                                            Blog Style Two
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-details.html" class="nav-link">
                                            Blog Details
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Rooms
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="room.html" class="nav-link">
                                            Rooms
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="room-details.html" class="nav-link">
                                            Room Details
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">
                                    Contact
                                </a>
                            </li>

                            <li class="nav-item-btn ">
                                <a href="#" class="default-btn btn-bg-one border-radius-5">Book Now</a>
                            </li>
                        </ul>

                        <div class="nav-btn">
                            <a href="#" class="default-btn btn-bg-three">Book Now</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
@endif



@yield('content')

@if (request()->is(['login', 'register']))
    <div class="login-copyright">
        <p>
            Copyright @
            <script>document.write(new Date().getFullYear())</script>
            All Rights Reserved by
            <a href="#" target="_blank">Reiseziel Hamburg</a>
        </p>

    </div>
@else
    <!-- Footer Area -->
    <footer class="footer-area footer-bg">
        <div class="container">
            <div class="footer-top pt-100 pb-70">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html">
                                    <img src="assets/img/logos/footer-logo3.png" alt="Images">
                                </a>
                            </div>
                            <p>
                                Aenean finibus convallis nisl sit amet hendrerit. Etiam blandit velit non lorem mattis,
                                non ultrices eros bibendum .
                            </p>
                            <ul class="footer-list-contact">
                                <li>
                                    <i class='bx bx-home-alt'></i>
                                    <a href="#">123 Stanton, Virginia, USA</a>
                                </li>
                                <li>
                                    <i class='bx bx-phone-call'></i>
                                    <a href="tel:+1-(123)-456-7890">+1 (123) 456 7890</a>
                                </li>
                                <li>
                                    <i class='bx bx-envelope'></i>
                                    <a href="mailto:hello@atoli.com">hello@atoli.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget pl-5">
                            <h3>Links</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="about.html" target="_blank">
                                        <i class='bx bx-caret-right'></i>
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="services-1.html" target="_blank">
                                        <i class='bx bx-caret-right'></i>
                                        Services
                                    </a>
                                </li>
                                <li>
                                    <a href="team.html" target="_blank">
                                        <i class='bx bx-caret-right'></i>
                                        Team
                                    </a>
                                </li>
                                <li>
                                    <a href="gallery.html" target="_blank">
                                        <i class='bx bx-caret-right'></i>
                                        Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="terms-condition.html" target="_blank">
                                        <i class='bx bx-caret-right'></i>
                                        Terms
                                    </a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html" target="_blank">
                                        <i class='bx bx-caret-right'></i>
                                        Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3>Useful Links</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="index.html" target="_blank">
                                        <i class='bx bx-caret-right'></i>
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-1.html" target="_blank">
                                        <i class='bx bx-caret-right'></i>
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="faq.html" target="_blank">
                                        <i class='bx bx-caret-right'></i>
                                        FAQ
                                    </a>
                                </li>
                                <li>
                                    <a href="testimonials.html" target="_blank">
                                        <i class='bx bx-caret-right'></i>
                                        Testimonials
                                    </a>
                                </li>
                                <li>
                                    <a href="gallery.html" target="_blank">
                                        <i class='bx bx-caret-right'></i>
                                        Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html" target="_blank">
                                        <i class='bx bx-caret-right'></i>
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3>Newsletter</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Nullam tempor eget ante fringilla rutrum aenean sed venenatis .
                            </p>
                            <div class="footer-form">
                                <form class="newsletter-form" data-toggle="validator" method="POST">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Your Email*"
                                                       name="EMAIL" required autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <button type="submit" class="default-btn btn-bg-three">
                                                Subscribe Now
                                            </button>
                                            <div id="validator-newsletter" class="form-result"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copy-right-area">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="copy-right-text text-align1">
                            <p>
                                Copyright @
                                <script>document.write(new Date().getFullYear())</script>
                                Atoli. All Rights Reserved by
                                <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="social-icon text-align2">
                            <ul class="social-link">
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-youtube'></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->
@endif




<!-- Jquery Min JS -->
<script src="{{ asset('frontend/pagesassets/js/jquery.min.js') }}"></script>
<!-- Bootstrap Bundle Min JS -->
<script src="{{ asset('frontend/pagesassets/js/bootstrap.bundle.min.js') }}"></script>
<!-- Magnific Popup Min JS -->
<script src="{{ asset('frontend/pagesassets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Owl Carousel Min JS -->
<script src="{{ asset('frontend/pagesassets/js/owl.carousel.min.js') }}"></script>
<!-- Nice Select Min JS -->
<script src="{{ asset('frontend/pagesassets/js/jquery.nice-select.min.js') }}"></script>
<!-- Wow Min JS -->
<script src="{{ asset('frontend/pagesassets/js/wow.min.js') }}"></script>
<!-- Jquery Ui JS -->
<script src="{{ asset('frontend/pagesassets/js/jquery-ui.js') }}"></script>
<!-- Meanmenu JS -->
<script src="{{ asset('frontend/pagesassets/js/meanmenu.js') }}"></script>
<!-- Ajaxchimp Min JS -->
<script src="{{ asset('frontend/pagesassets/js/jquery.ajaxchimp.min.js') }}"></script>
<!-- Form Validator Min JS -->
<script src="{{ asset('frontend/pagesassets/js/form-validator.min.js') }}"></script>
<!-- Contact Form JS -->
<script src="{{-- asset('frontend/pagesassets/js/contact-form-script.js') --}}"></script>
<!-- Custom JS -->
<script src="{{ asset('frontend/pagesassets/js/custom.js') }}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
        @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch (type) {
        case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

        case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

        case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

        case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
    }
    @endif
</script>


</body>
</html>
