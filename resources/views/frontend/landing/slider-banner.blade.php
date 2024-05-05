<div class="banner" id="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner banner-slider-inner text-center">

                <div class="carousel-item banner-max-height active item-bg">
                <img class="d-block w-100 h-100" src="{{ asset('frontend/img/hamburg-bei-nacht.jpg') }}" alt="banner">
                <div class="carousel-content container banner-info-2 bi-2 text-left">
                    <h3>Welcome to ReiseZiel Hamburg</h3>
                    <h5>Our 68 rooms and suites are wonderfully comfortable with a sleek décor..</h5>
                    <a href="{{ route('rooms.page') }}" class="btn btn-lg btn-theme">VIEW ALL ROOMS</a>
                </div>
            </div>

            {{--<div class="carousel-item banner-max-height active item-bg">
                <img class="d-block w-100 h-100" src="{{ asset('frontend/img/hamburg-bei-nacht.jpg') }}" alt="banner">
                <div class="carousel-content container banner-info-2 bi-2 text-left">
                    <h3>Welcome to ReiseZiel Hamburg</h3>
                    <h5>Our 68 rooms and suites are wonderfully comfortable with a sleek décor..</h5>
                    <a href="{{ route('rooms.page') }}" class="btn btn-lg btn-theme">VIEW ALL ROOMS</a>
                </div>
            </div>
            <div class="carousel-item banner-max-height item-bg">
                <img class="d-block w-100 h-100" src="{{ asset('frontend/img/hamburg-bei-nacht-2.jpg') }}" alt="banner">
                <div class="carousel-content container banner-info-2 bi-2 text-left">
                    <h3>It's time to feel!</h3>
                    <h5>More great experience than hotel Both a destination and a journey</h5>
                    <a href="{{ route('services.page') }}" class="btn btn-lg btn-theme">VIEW OUR SERVICES</a>
                </div>
            </div>
            <div class="carousel-item banner-max-height item-bg">
                <img class="d-block w-100 h-100" src="{{ asset('frontend/img/hamburg-bei-nacht-3.jpeg') }}" alt="banner">
                <div class="carousel-content container banner-info-2 bi-2 text-left">
                    <h3>It's time to relax!</h3>
                    <h5>More great experience than hotel Both a destination and a journey</h5>
                    <a href="{{ route('services.page') }}" class="btn btn-lg btn-theme">VIEW OUR SERVICES</a>
                </div>
            </div>
            <div class="carousel-item banner-max-height item-bg">
                <img class="d-block w-100 h-100" src="{{ asset('frontend/img/hamburg-bei-nacht-4.jpg') }}" alt="banner">
                <div class="carousel-content container banner-info-2 bi-2 text-left">
                    <h3>It's time to relax!</h3>
                    <h5>More great experience than hotel Both a destination and a journey</h5>
                    <a href="{{ route('services.page') }}" class="btn btn-lg btn-theme">VIEW OUR SERVICES</a>
                </div>
            </div>
            <div class="carousel-item banner-max-height item-bg">
                <img class="d-block w-100 h-100" src="{{ asset('frontend/img/hamburg-bei-nacht-5.jpg') }}" alt="banner">
                <div class="carousel-content container banner-info-2 bi-2 text-left">
                    <h3>It's time to relax!</h3>
                    <h5>More great experience than hotel Both a destination and a journey</h5>
                    <a href="services.page" class="btn btn-lg btn-theme">VIEW OUR SERVICES</a>
                </div>
            </div>
            <div class="carousel-item banner-max-height item-bg">
                <img class="d-block w-100 h-100" src="{{ asset('frontend/img/hamburg-bei-nacht-6.jpg') }}" alt="banner">
                <div class="carousel-content container banner-info-2 bi-2 text-left">
                    <h3>It's time to relax!</h3>
                    <h5>More great experience than hotel Both a destination and a journey</h5>
                    <a href="{{ route('services.page') }}" class="btn btn-lg btn-theme">VIEW OUR SERVICES</a>
                </div>
            </div>--}}
        </div>
        <!-- Search box 3 start -->
        <div class="search-box-4 sb-8">
            <form action="#" method="">
                <div class="form-group">
                    <label for="checkin">Check In</label>
                    <input type="text" name="keyword" placeholder="Checkin Date" class="form-control">
                </div>
                <div class="form-group">
                    <label for="checkout">Check Out</label>
                    <input type="text" name="keyword" placeholder="Checkout Date" class="form-control">
                </div>
                <div class="form-group">
                    <label for="room">Room(s)</label>
                    <select class="form-control search-fields" name="select-brand">
                        <option selected="true" disabled="disabled">ROOM(S)</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="guest">Guest</label>
                    <select class="form-control search-fields" name="select-make">
                        <option selected="true" disabled="disabled">GUEST</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="range-slider clearfix">
                    <label>Price</label>
                    <div data-min="0" data-max="150000"  data-min-name="min_price" data-max-name="max_price" data-unit="USD" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <button class="btn btn-block button-theme btn-md" id="search-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Deactivated by admin">
                        <i class="fa fa-search"></i> Search
                    </button>
                </div>
            </form>
        </div>
        <!-- Search box 3 end -->
        <!--<a class="carousel-control-prev none-580" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
        </a>
        <a class="carousel-control-next none-580" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
        </a>-->
    </div>
</div>
