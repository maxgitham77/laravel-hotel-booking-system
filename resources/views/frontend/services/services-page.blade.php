@extends('frontend.layouts.master')

@section('frontend')
    <!-- Sub banner start -->
    <div class="sub-banner-room overview-bgi">
        <div class="container breadcrumb-area">
            <div class="breadcrumb-areas">
                <h1>Our Services</h1>
                <ul class="breadcrumbs">
                    <li><a href="javascript:;">Home</a></li>
                    <li class="active">Services</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->

    <!-- Service center strat -->
    <div class="service-body bg-service-color">
        <!-- Hotel Servic-2 Start-->
        <div class="hotel-service-2">
            <div class="container">
                <div class="service-main-title">
                    <h1>Our Special Services</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue
                        quis ut nunc. Semper ac dolor vitae accumsan. interdum hendrerit lacinia.</p>
                </div>
                <div class="row mgn-btm">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="content">
                            <i class="fas fa-swimmer"></i>
                            <h4>Fitness Facilities</h4>
                            <p>A deeply personalised spa experience over 15,000 square feet of the ultimate in luxury and
                                tranquility.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="content">
                            <i class="fas fa-spa"></i>
                            <h4>Unique Spa Experience</h4>
                            <p>A deeply personalised spa experience over 15,000 square feet of the ultimate in luxury and
                                tranquility.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="content">
                            <i class="fas fa-headset"></i>
                            <h4>24/7 Customer Support</h4>
                            <p>No holiday is complete without exploring the world beneath the water surrounding Hotel
                                Empire.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="content">
                            <i class="fas fa-ring"></i>
                            <h4>Weddings &amp; Honeymoons</h4>
                            <p>Dedicated wedding planner, pre wedding spa treatments, ceremony on the beach or in villa.</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-fill">Read More</a>
            </div>
        </div>
    </div>
    <!-- Service center end -->

    <!-- Service section 2 starts -->
    <div class="hotel-service-3">
        <div class="container">
                <div class="row">
                    <!-- Service box Start 1-->
                        <div class="col-lg-7 col-md-6 col-sm-12 details">
                            <h5>Our Facilities</h5>
                            <h1>SPA</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci.
                                Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis
                                blandit lorem.</p>
                            <p>Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci
                                urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices.</p>
                            <a href="#" class="btn btn-fill btn-md">Read More</a>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12 item-photo">
                            <img src="{{ asset('frontend/img/services/photo-services-5.jpg') }}" alt="photo-services">
                        </div>
                </div>
                    <!-- Service box End 1 -->

                    <!-- Service box Start 2-->
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-12 item-photo">
                            <img src="{{ asset('frontend/img/services/photo-services-6.jpg') }}" alt="photo-services">
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12 details">
                            <h5>Our Facilities</h5>
                            <h1>GYM</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci.
                                Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis
                                blandit lorem.</p>
                            <p>Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci
                                urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices.</p>
                            <a href="#" class="btn btn-fill btn-md">Read More</a>
                        </div>
                    </div>
                    <!-- Service box End 2 -->

                    <!-- Service box Start 3-->
                    <div class="row">
                        <div class="col-lg-7 col-md-6 col-sm-12 details">
                            <h5>Our Facilities</h5>
                            <h1>Swimming Pool</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci.
                                Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis
                                blandit lorem.</p>
                            <p>Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci
                                urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices.</p>
                            <a href="#" class="btn btn-fill btn-md">Read More</a>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12 item-photo">
                            <img src="{{ asset('frontend/img/services/photo-services-4.jpg') }}" alt="photo-services-4">
                        </div>
                    </div>
                    <!-- Service box End 3 -->

                    <!-- Service box Start 4-->
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-12 item-photo">
                            <img src="{{ asset('frontend/img/services/photo-services-1.jpg') }}" alt="photo-services-1">
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12 details">
                            <h5>Our Facilities</h5>
                            <h1>Sky Bar &amp; Lounge</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci.
                                Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis
                                blandit lorem.</p>
                            <p>Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci
                                urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices.</p>
                            <a href="#" class="btn btn-fill btn-md">Read More</a>
                        </div>
                    </div>
                    <!-- Service box End 4 -->

                    <!-- Service box Start 5 -->
                    <div class="row">
                        <div class="col-lg-7 col-md-6 col-sm-12 details">
                            <h5>Our Facilities</h5>
                            <h1>Private Dining</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci.
                                Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis
                                blandit lorem.</p>
                            <p>Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci
                                urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices.</p>
                            <a href="#" class="btn btn-fill btn-md">Read More</a>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12 item-photo">
                            <img src="{{ asset('frontend/img/services/photo-services-2.jpg') }}" alt="photo-services">
                        </div>
                    </div>
                    <!-- Service box End 5-->

                    <!-- Service box Start 6 -->
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-12 item-photo">
                            <img src="{{ asset('frontend/img/services/photo-services-3.jpg') }}" alt="photo-services">
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12 details">
                            <h5>Our Facilities</h5>
                            <h1>Wedding Venue</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget commodo orci.
                                Integer varius nibh eu mattis porta. Pellentesque dictum sem eget cursus semper. Nullam quis
                                blandit lorem.</p>
                            <p>Pellentesque dictum sem eget cursus semper. Nullam quis blandit lorem. Morbi blandit orci
                                urna, eu congue magna faucibus at. In bibendum in mauris nec ultrices.</p>
                            <a href="#" class="btn btn-fill btn-md">Read More</a>
                        </div>
                    </div>
                    <!-- Service box End 6 -->
                </div>
        </div>
    </div>
    <!-- Service section 2 ends -->



    <!-- Our team start -->
    @include('frontend.landing.team')
    <!-- Our team end -->
@endsection
