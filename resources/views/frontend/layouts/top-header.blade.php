<header class="top-header th-2 top-header-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-7">
                <div class="list-inline">
                    <a href="tel:+49-040-634-7071"><i class="fa fa-phone"></i>+49-040-634-7071</a>
                    <a href="tel:info@reisezielhamburg.de"><i class="fa fa-envelope"></i>info@reisezielhamburg.de</a>
                    <a href="tel:info@reisezielhamburg.de"><i class="fa fa-clock-o"></i>Mon - Sun: 8:00 AM - 22:00 PM</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-5">
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        <ul class="top-social-media pull-right">
                            {{--<li>
                                <div class="language-list">
                                    <select class="language-list-item">
                                        <option>English</option>
                                        <option>German</option>
                                    </select>
                                </div>
                            </li>--}}
                            @auth
                                <li>
                                    <a href="{{ url('/dashboard') }}" class="sign-in">Dashboard</a>
                                </li>
                                <li>
                                    <a href="{{ route('user.logout') }}" class="sign-in"><i class="fa fa-sign-in"></i> Logout</a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('login') }}" class="sign-in"><i class="fa fa-sign-in"></i> Log in</a>
                                </li>
                                @if (Route::has('register'))
                                    <li>
                                        <a href="{{ route('register') }}" class="sign-in"> <i class="fa fa-user"></i> Register</a>
                                    </li>
                                @endif
                            @endauth
                        </ul>
                    </div>

                @endif

            </div>
        </div>
    </div>
</header>
