@extends('frontend.layouts.master')

@section('frontend')
    <!-- Banner start -->
    @include('frontend.landing.slider-banner')
    <!-- Banner end -->

    <!-- Search box 2 end -->

    <!-- Favorite Rooms One start -->
    @include('frontend.landing.favorite-room-one')
    <!-- Favorite Rooms One end -->

    <!-- Favorite Rooms Two starts -->
    @include('frontend.landing.favorite-room-two')
    <!-- Favorite Rooms Two end -->

    <!-- Short Intro Starts -->
    @include('frontend.landing.short-intro')
    <!-- Short Intro Ends -->

    <!-- Different Services Starts -->
    @include('frontend.landing.different-services')
    <!-- Different Services Starts -->

    <!-- Rencently Added Rooms start -->
    @include('frontend.landing.favorite-room-three')
    <!-- Rencently Added Rooms Ends -->

    <!-- Download App Starts -->
    @include('frontend.landing.download-app')
    <!-- Download App ends -->

    <!-- Experience starts -->
    @include('frontend.landing.experience')
    <!-- Experience ends -->

    <!-- Our team start -->
    @include('frontend.landing.team')
    <!-- Our team end -->

    <!-- Adverts section start -->
    @include('frontend.landing.adverts')
    <!-- Adverts section end -->

@endsection
