<header class="main-header sticky-header header-with-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand company-logo" href="{{ url('/') }}">
                <img src="{{ asset('frontend/img/logos/reiseZielHamburg-logo.png') }}" alt="Reise Ziel Hamburg">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="navbar-collapse collapse w-100" id="navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rooms.page') }}">
                            ROOMS
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about.page') }}">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services.page') }}">
                            Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('testimonials.page') }}">
                            Testimonials
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blogs.page') }}">
                            Blog
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('shop.index') }}">Shop</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('contact.page') }}">Contact</a>
                    </li>
                    <li class="nav-item dropdown m-hide">
                        <a href="#full-page-search" class="nav-link h-icon">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>


