<div class="featured-car content-area-5">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Favorite  <span>Rooms</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc.
                Semper ac dolor vitae accumsan. interdum hendrerit lacinia.</p>
        </div>
        <!-- Slick slider area start -->
        <div class="slick-slider-area clearfix">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
               @foreach($singleRoomTypesDetails as $single)
                    @foreach($single['single_room_type'] as $item)
                    <div class="slick-slide-item">
                    <div class="car-box-3">
                        <div class="car-thumbnail">
                            <a href="#" class="car-img">
                                <div class="tag-2">Featured</div>
                                <div class="price-box">
                                    <span class="del"><del>$805.00</del></span>
                                    <br>
                                    <span>$780.00</span>
                                </div>
                                <img class="d-block w-100" src="{{ asset('frontend/img/room/bedroom-1.jpg') }}" alt="car">
                            </a>
                            <div class="carbox-overlap-wrapper">
                                <div class="overlap-box">
                                    <div class="overlap-btns-area">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="#"> {{ $item->room_name }}</a>
                            </h1>
                            <div class="location">
                                <a href="#">
                                    €98 / PER NIGHT
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endforeach


                {{--<div class="slick-slide-item">
                    <div class="car-box-3">
                        <div class="car-thumbnail">
                            <a href="#" class="car-img">
                                <div class="tag-2">Featured</div>
                                <div class="price-box">
                                    <span class="del"><del>$805.00</del></span>
                                    <br>
                                    <span>$780.00</span>
                                </div>
                                <img class="d-block w-100" src="{{ asset('frontend/img/room/bedroom-1.jpg') }}" alt="car">
                            </a>
                            <div class="carbox-overlap-wrapper">
                                <div class="overlap-box">
                                    <div class="overlap-btns-area">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="#">Single Room</a>
                            </h1>
                            <div class="location">
                                <a href="#">
                                    €98 / PER NIGHT
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{--<div class="slick-slide-item">
                    <div class="car-box-3">
                        <div class="car-thumbnail">
                            <a href="#" class="car-img">
                                <div class="tag-2">Unavailable</div>
                                <div class="price-box">
                                    <span class="del"><del>$830.00</del></span>
                                    <br>
                                    <span>$940.00</span>
                                </div>
                                <img class="d-block w-100" src="{{ asset('frontend/img/room/bedroom-2.jpg') }}" alt="Booking System">
                            </a>
                            <div class="carbox-overlap-wrapper">
                                <div class="overlap-box">
                                    <div class="overlap-btns-area">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="#">Double Room</a>
                            </h1>
                            <div class="location">
                                <a href="#">
                                    €190 / PER NIGHT
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="car-box-3">
                        <div class="car-thumbnail">
                            <a href="#" class="car-img">
                                <div class="tag-2">Available</div>
                                <div class="price-box">
                                    <span class="del"><del>€240.00</del></span>
                                    <br>
                                    <span>$500.00</span>
                                </div>
                                <img class="d-block w-100" src="{{ asset('frontend/img/room/bedroom-2.jpg') }}" alt="Booking System">
                            </a>
                            <div class="carbox-overlap-wrapper">
                                <div class="overlap-box">
                                    <div class="overlap-btns-area">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="#">Family Room</a>
                            </h1>
                            <div class="location">
                                <a href="#">
                                   €240 / PER NIGHT
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="car-box-3">
                        <div class="car-thumbnail">
                            <a href="#" class="car-img">
                                <div class="tag-2">Available</div>
                                <div class="price-box">
                                    <span class="del"><del>€1500.00</del></span>
                                    <br>
                                    <span>€105.00</span>
                                </div>
                                <img class="d-block w-100" src="{{ asset('frontend/img/room/bedroom-3.jpg') }}" alt="Booking System">
                            </a>
                            <div class="carbox-overlap-wrapper">
                                <div class="overlap-box">

                                </div>
                            </div>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="#">Double Room</a>
                            </h1>
                            <div class="location">
                                <a href="#">
                                    <i class="flaticon-pin"></i>€105 / PER NIGHT
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="car-box-3">
                        <div class="car-thumbnail">
                            <a href="#" class="car-img">
                                <div class="tag-2">Unavailable</div>
                                <div class="price-box">
                                    <span class="del"><del>€300.00</del></span>
                                    <br>
                                    <span>€167.00</span>
                                </div>
                                <img class="d-block w-100" src="{{ asset('frontend/img/room/bedroom-2.jpg') }}" alt="car">
                            </a>
                            <div class="carbox-overlap-wrapper">
                                <div class="overlap-box">
                                    <div class="overlap-btns-area">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="#">Single Suite</a>
                            </h1>
                            <div class="location">
                                <a href="#">
                                   €167 / PER NIGHT
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="car-box-3">
                        <div class="car-thumbnail">
                            <a href="#" class="car-img">
                                <div class="tag-2">Available</div>
                                <div class="price-box">
                                    <span class="del"><del>€250.00</del></span>
                                    <br>
                                    <span>€123.00</span>
                                </div>
                                <img class="d-block w-100" src="{{ asset('frontend/img/room/bedroom-2.jpg') }}" alt="car">
                            </a>
                            <div class="carbox-overlap-wrapper">
                                <div class="overlap-box">
                                    <div class="overlap-btns-area">
                                        <!-- THUMBNAIL OVERLAY -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="#">Single Room</a>
                            </h1>
                            <div class="location">
                                <a href="#">
                                    €123 / PER NIGHT
                                </a>
                            </div>
                        </div>
                    </div>
                </div>--}}
            </div>
            <div class="slick-btn">
                <div class="slick-prev slick-arrow-buton sab-4">
                    <i class="fa fa-angle-left"></i>
                </div>
                <div class="slick-next slick-arrow-buton sab-3">
                    <i class="fa fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
