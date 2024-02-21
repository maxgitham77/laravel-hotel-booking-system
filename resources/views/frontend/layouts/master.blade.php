<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap-submenu.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/linearicons/style.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('frontend/css/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('frontend/css/dropzone.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('frontend/css/lightbox.min.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('frontend/css/jnoty.css') }}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/service-page.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/testimonial-page.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/blog-page.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/contact-page.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/shop-page.css') }}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('frontend/css/skins/red.css') }}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.ico') }}" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">



    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/ie10-viewport-bug-workaround.css') }}">

    <script  src="{{ asset('frontend/js/ie-emulation-modes-warning.js') }}"></script>
</head>
<body>
<div class="page_loader"></div>

<!-- Top header start -->
@include('frontend.layouts.top-header')
<!-- Top header end -->

<!-- Main header start -->
@include('frontend.layouts.sticky-header')
<!-- Main header end -->


@yield('frontend')

<!-- Footer start -->
@include('frontend.layouts.footer')
<!-- Footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="https://storage.googleapis.com/theme-vessel/carhouse/index.html#" class="search-header">
        <input type="search" value="" placeholder="type keyword(s) here. Eg: audi, benz etc" />
        <button type="submit" class="btn btn-sm button-theme">Search</button>
    </form>
</div>

<!-- Car Overview Modal -->
<div class="car-model-2">
    <div class="modal fade" id="carOverviewModal" tabindex="-1" role="dialog" aria-labelledby="carOverviewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title" id="carOverviewModalLabel">
                        <h4>Explore Your Dream Car</h4>
                        <h5><i class="flaticon-pin"></i> 123 Kathal St. Tampa City,</h5>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row modal-raw">
                        <div class="col-lg-6 modal-left">
                            <div class="item active">
                                <img src="img/car-13.jpg" alt="best-car" class="img-fluid modalLabel-1">
                                <img src="img/car-14.jpg" alt="best-car" class="img-fluid modalLabel-2">
                                <div class="sobuz">
                                    <div class="price-box" style="padding-bottom: 5px;">
                                        <span class="del-2">$1050.00</span>
                                    </div>
                                    <div class="">
                                        <a href="car-details.html" class="btn btn-md btn-round btn-theme">Convertible</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 modal-right">
                            <div class="modal-right-content">
                                <section>
                                    <h3>Features</h3>
                                    <div class="features">
                                        <ul class="bullets">
                                            <li>Cruise Control</li>
                                            <li>Airbags</li>
                                            <li>Air Conditioning</li>
                                            <li>Alarm System</li>
                                            <li>Audio Interface</li>
                                            <li>CDR Audio</li>
                                            <li>Seat Heating</li>
                                            <li>ParkAssist</li>
                                        </ul>
                                    </div>
                                </section>
                                <section>
                                    <h3>Overview</h3>
                                    <ul class="bullets">
                                        <li>Model</li>
                                        <li>Year</li>
                                        <li>Condition</li>
                                        <li>Price</li>
                                        <li>Audi</li>
                                        <li>2020</li>
                                        <li>Brand New</li>
                                        <li>$178,000</li>
                                    </ul>
                                </section>
                                <div class="description">
                                    <h3>Description</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                                    <a href="car-details.html" class="btn btn-md btn-round btn-theme">Show Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('frontend/js/jquery-2.2.0.min.js') }}"></script>
<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/Font-Awesome.js') }}"></script>
<script  src="{{ asset('frontend/js/bootstrap-submenu.js') }}"></script>
<script  src="{{ asset('frontend/js/rangeslider.js') }}"></script>
<script  src="{{ asset('frontend/js/jquery.mb.YTPlayer.js') }}"></script>
<script  src="{{ asset('frontend/js/bootstrap-select.min.js') }}"></script>
<script  src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
<script  src="{{ asset('frontend/js/jquery.scrollUp.js') }}"></script>
<script  src="{{ asset('frontend/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script  src="{{ asset('frontend/js/dropzone.js') }}"></script>
<script  src="{{ asset('frontend/js/slick.min.js') }}"></script>
<script  src="{{ asset('frontend/js/jquery.filterizr.js') }}"></script>
<script  src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
<script  src="{{ asset('frontend/js/jquery.countdown.js') }}"></script>
<script  src="{{ asset('frontend/js/jquery.mousewheel.min.js') }}"></script>
<script  src="{{ asset('frontend/js/lightgallery-all.js') }}"></script>
<script  src="{{ asset('frontend/js/jnoty.js') }}"></script>
<script  src="{{ asset('frontend/js/app.js') }}"></script>

<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    $(document).ready(function () {
        $('#search-btn').click(function (e) {
            e.preventDefault();

        })
    })
</script>
</body>

</html>

