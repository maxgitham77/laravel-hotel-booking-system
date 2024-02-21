@extends('frontend.layouts.master')

@section('frontend')
    <!-- Sub banner start -->
    <div class="sub-banner-room overview-bgi">
        <div class="container breadcrumb-area">
            <div class="breadcrumb-areas">
                <h1>Contact</h1>
                <ul class="breadcrumbs">
                    <li><a href="javascript:;">Home</a></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->

    <!-- Contact page starts -->
    <section class="fp__contact mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                    <div class="fp__contact_info">
                        <span><i class="fal fa-phone-alt" aria-hidden="true"></i></span>
                        <div class="text">
                            <h3>call</h3>
                            <p>+49 40-430-9510</p>
                            <p>+949 0155745554002</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                    <div class="fp__contact_info">
                        <span><i class="fal fa-envelope" aria-hidden="true"></i></span>
                        <div class="text">
                            <h3>mail</h3>
                            <p>info@reiseziel@gmail.com</p>
                            <p>example@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                    <div class="fp__contact_info">
                        <span><i class="fas fa-street-view" aria-hidden="true"></i></span>
                        <div class="text">
                            <h3>location</h3>
                            <p>Borstler Chausee 234, Hamburg, Germany</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fp__contact_form_area mt_100 xs_mt_70">
                <div class="row">
                    <div class="col-xl-12 wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                        <form class="fp__contact_form">
                            <h3>contact</h3>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="fp__contact_form_input">
                                        <span><i class="fal fa-user-alt" aria-hidden="true"></i></span>
                                        <input class="form-control" type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="fp__contact_form_input">
                                        <span><i class="fal fa-envelope" aria-hidden="true"></i></span>
                                        <input class="form-control" type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="fp__contact_form_input">
                                        <span><i class="fal fa-phone-alt" aria-hidden="true"></i></span>
                                        <input class="form-control" type="text" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="fp__contact_form_input">
                                        <span><i class="fal fa-book" aria-hidden="true"></i></span>
                                        <input class="form-control" type="text" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="fp__contact_form_input textarea">
                                        <span><i class="fal fa-book" aria-hidden="true"></i></span>
                                        <textarea class="form-control" rows="8" placeholder="Message"></textarea>
                                    </div>
                                    <button class="btn btn-primary" type="submit">send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt_100 xs_mt_70">
                    <div class="col-xl-12 wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                        <div class="fp__contact_map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29199.78758207035!2d90.43684581929195!3d23.819543211524437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c62fce7d991f%3A0xacfaf1ac8e944c05!2sBasundhara%20Residential%20Area%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1667021568123!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact page ends -->

@endsection
