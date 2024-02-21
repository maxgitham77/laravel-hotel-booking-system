@extends('frontend.layouts.master')

@section('frontend')

    <!-- Sub banner start -->
    <div class="sub-banner-about-us overview-bgi">
        <div class="container breadcrumb-area">
            <div class="breadcrumb-areas">
                <h1>About Us</h1>
                <ul class="breadcrumbs">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->

    <!-- About us starts -->
    <section class="about-us mt_120 xs_mt_90">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5 wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                    <div class="about-us-img">
                        <img src="{{ asset('frontend/img/about/about-us-2.jpg') }}" alt="about us" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                    <div class="section-heading mb_40">
                        <h4>About Company</h4>
                        <h2>Helathy Foods Provider</h2>
                        <span>
                            <img src="images/heading_shapes.png" alt="shapes" class="img-fluid w-100">
                        </span>
                    </div>
                    <div class="about-us-text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate aspernatur molestiae
                            minima pariatur consequatur voluptate sapiente deleniti soluta, animi ab necessitatibus
                            optio similique quasi fuga impedit corrupti obcaecati neque consequatur sequi.</p>
                        <ul>
                            <li>Delicious &amp; Healthy Foods </li>
                            <li>Spacific Family &amp; Kids Zone</li>
                            <li>Best Price &amp; Offers</li>
                            <li>Made By Fresh Ingredients</li>
                            <li>Music &amp; Other Facilities</li>
                            <li>Delicious &amp; Healthy Foods </li>
                            <li>Spacific Family &amp; Kids Zone</li>
                            <li>Best Price &amp; Offers</li>
                            <li>Made By Fresh Ingredients</li>
                            <li>Delicious &amp; Healthy Foods </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About us ends -->



    <!-- Our team start -->
    @include('frontend.landing.team')
    <!-- Our team end -->
@endsection
