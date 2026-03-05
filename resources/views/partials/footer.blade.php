<!-- Request Assistance CTA Start -->
<div class="container-fluid bg-primary py-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-6 mb-4">Need Assistance or Repatriation?</h1>
                <p class="fs-5 mb-4">Submit the Unified Request for Assistance Form (URAF). DMW and MWO are here to help overseas Filipino workers.</p>
                <a class="btn btn-secondary py-3 px-5" href="{{ route('uraf.form') }}">Request Assistance</a>
            </div>
        </div>
    </div>
</div>
<!-- Request Assistance CTA End -->

<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 py-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">DMW / MWO</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Migrant Workers Offices worldwide</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>Contact your nearest MWO</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>See Contact page for details</p>
                <div class="d-flex pt-3">
                    <a class="btn btn-square btn-primary me-2" href="#!"><i class="fab fa-x-twitter"></i></a>
                    <a class="btn btn-square btn-primary me-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-primary me-2" href="#!"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-primary me-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Quick Links</h4>
                <a class="btn btn-link" href="{{ route('uraf.form') }}">Request Assistance</a>
                <a class="btn btn-link" href="{{ route('about') }}">About DMW / MWO</a>
                <a class="btn btn-link" href="{{ route('contact') }}">Contact Us</a>
                <a class="btn btn-link" href="{{ route('service') }}">Our Services</a>
                <a class="btn btn-link" href="{{ route('event') }}">Events & Announcements</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Assistance</h4>
                <p class="mb-1">URAF (Request Form)</p>
                <h6 class="text-light">24/7 online submission</h6>
                <p class="mb-1">MWO Hotlines</p>
                <h6 class="text-light">See Contact page</h6>
                <p class="mb-1">Repatriation & Welfare</p>
                <h6 class="text-light">DMW / MWO</h6>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Gallery</h4>
                <div class="row g-2">
                    <div class="col-4">
                        <img class="img-fluid w-100" src="{{ asset('theme/img/gallery-1.jpg') }}" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid w-100" src="{{ asset('theme/img/gallery-2.jpg') }}" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid w-100" src="{{ asset('theme/img/gallery-3.jpg') }}" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid w-100" src="{{ asset('theme/img/gallery-4.jpg') }}" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid w-100" src="{{ asset('theme/img/gallery-5.jpg') }}" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid w-100" src="{{ asset('theme/img/gallery-6.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright pt-5">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-semi-bold" href="{{ route('home') }}">Department of Migrant Workers (DMW) / Migrant Workers Office (MWO)</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    Designed By <a class="fw-semi-bold" href="https://www.yaramay.online/">Yaramay</a>. Distributed by
                    <a class="fw-semi-bold" href="https://www.smartinboxtech.site/">Smart Inbox</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
