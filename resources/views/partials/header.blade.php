<!-- Topbar Start -->
<div class="container-fluid bg-secondary top-bar wow fadeIn" data-wow-delay="0.1s">
    <div class="row align-items-center h-100">
        <div class="col-lg-4 text-center text-lg-start">
            <a href="{{ route('home') }}">
                <h1 class="display-5 text-primary m-0">DMW / MWO</h1>
            </a>
        </div>
        <div class="col-lg-8 d-none d-lg-block">
            <div class="row">
                <div class="col-lg-4">
                    <div class="d-flex justify-content-end">
                        <div class="flex-shrink-0 btn-square bg-primary">
                            <i class="fa fa-phone-alt text-dark"></i>
                        </div>
                        <div class="ms-2">
                            <h6 class="text-primary mb-0">MWO Hotline</h6>
                            <span class="text-white">Contact your nearest MWO</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex justify-content-end">
                        <div class="flex-shrink-0 btn-square bg-primary">
                            <i class="fa fa-envelope-open text-dark"></i>
                        </div>
                        <div class="ms-2">
                            <h6 class="text-primary mb-0">Email</h6>
                            <span class="text-white">See Contact page</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex justify-content-end">
                        <div class="flex-shrink-0 btn-square bg-primary">
                            <i class="fa fa-map-marker-alt text-dark"></i>
                        </div>
                        <div class="ms-2">
                            <h6 class="text-primary mb-0">MWO Posts</h6>
                            <span class="text-white">Worldwide</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid bg-secondary px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="nav-bar">
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark px-4 py-lg-0">
            <h4 class="d-lg-none m-0">Menu</h4>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav me-auto">
                    <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('uraf.form') }}" class="nav-item nav-link {{ request()->routeIs('uraf.*') ? 'active' : '' }}">Request Assistance</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                    <a href="{{ route('service') }}" class="nav-item nav-link {{ request()->routeIs('service') ? 'active' : '' }}">Services</a>
                    <div class="nav-item dropdown">
                        <a href="#!" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">More</a>
                        <div class="dropdown-menu bg-light m-0">
                            <a href="{{ route('event') }}" class="dropdown-item">Events & Announcements</a>
                            <a href="{{ route('feature') }}" class="dropdown-item">Why DMW / MWO</a>
                            <a href="{{ route('team') }}" class="dropdown-item">MWO</a>
                            <a href="{{ route('testimonial') }}" class="dropdown-item">Testimonials</a>
                            <a href="{{ route('donation') }}" class="dropdown-item">Get Help</a>
                            <a href="{{ route('page.404') }}" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                </div>
                <div class="d-none d-lg-flex ms-auto">
                    <a class="btn btn-square btn-dark ms-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-dark ms-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-dark ms-2" href="#!"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
