@extends('layouts.app')

@section('title', 'Home')

@section('content')
@php $t = asset('theme'); @endphp
<!-- Carousel Start -->
<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="owl-carousel header-carousel py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="carousel-text">
                        <h1 class="display-1 text-uppercase mb-3">Department of Migrant Workers</h1>
                        <p class="fs-5 mb-5">We are here to protect and support overseas Filipino workers. Request assistance or repatriation through our Unified Request for Assistance Form (URAF).</p>
                        <div class="d-flex">
                            <a class="btn btn-primary py-3 px-4 me-3" href="{{ route('uraf.form') }}">Request Assistance</a>
                            <a class="btn btn-secondary py-3 px-4" href="{{ route('contact') }}">Contact MWO</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="carousel-img">
                        <img class="w-100" src="{{ $t }}/img/ofw1.png" alt="DMW MWO">
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="carousel-text">
                        <h1 class="display-1 text-uppercase mb-3">Assistance & Repatriation</h1>
                        <p class="fs-5 mb-5">Migrant Workers Offices (MWO) provide on-the-ground support for OFWs in distress. Get help with repatriation, legal aid, welfare, and emergency assistance.</p>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary py-3 px-4 me-3" href="{{ route('uraf.form') }}">Request Assistance</a>
                            <a class="btn btn-secondary py-3 px-4" href="{{ route('service') }}">Our Services</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="carousel-img">
                        <img class="w-100" src="{{ $t }}/img/ofw2.png" alt="Assistance">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- Video Start -->
<div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-11">
                <div class="h-100 py-5 d-flex align-items-center">
                    <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                    <h3 class="ms-5 mb-0">DMW and MWO are committed to the welfare, protection, and safe repatriation of every overseas Filipino worker.</h3>
                </div>
            </div>
            <div class="d-none d-lg-block col-lg-1">
                <div class="h-100 w-100 bg-secondary d-flex align-items-center justify-content-center">
                    <span class="text-white" style="transform: rotate(-90deg);">Scroll Down</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video End -->

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="about-img">
                    <img class="img-fluid w-100" src="{{ $t }}/img/ofw-group-1.png" alt="DMW MWO">
                </div>
            </div>
            <div class="col-lg-6">
                <p class="section-title bg-white text-start text-primary pe-3">About Us</p>
                <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.2s">Department of Migrant Workers & Migrant Workers Office</h1>
                <p class="mb-4 wow fadeIn" data-wow-delay="0.3s">The Department of Migrant Workers (DMW) and Migrant Workers Offices (MWO) serve overseas Filipino workers (OFWs) by providing assistance, repatriation support, legal aid, and welfare services. Our sole purpose is to help OFWs in need.</p>
                <div class="row g-4 pt-2">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="h-100">
                            <h3>Our Mission</h3>
                            <p>To protect and promote the welfare of Filipino migrant workers and their families through assistance and repatriation.</p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i>Assistance for OFWs in distress.</p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i>Safe and orderly repatriation.</p>
                            <p class="text-dark mb-0"><i class="fa fa-check text-primary me-2"></i>Confidential and timely response.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100 bg-primary p-4 text-center">
                            <p class="fs-5 text-dark">Need help? Submit a request for assistance or repatriation through our official form.</p>
                            <a class="btn btn-secondary py-2 px-4" href="{{ route('uraf.form') }}">Request Assistance</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Service Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-12 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="service-title">
                    <h1 class="display-6 mb-4">How We Help OFWs</h1>
                    <p class="fs-5 mb-0">DMW and MWO provide assistance and repatriation support to overseas Filipino workers in need.</p>
                </div>
            </div>
            <div class="col-md-12 col-lg-8 col-xl-9">
                <div class="row g-5">
                    <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="service-item h-100">
                            <div class="btn-square bg-light mb-4">
                                <i class="fa fa-plane-arrival fa-2x text-secondary"></i>
                            </div>
                            <h3>Repatriation</h3>
                            <p class="mb-2">Safe and orderly return of OFWs to the Philippines. We coordinate with posts and partners for your journey home.</p>
                            <a href="{{ route('uraf.form') }}">Request Assistance</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="service-item h-100">
                            <div class="btn-square bg-light mb-4">
                                <i class="fa fa-hands-helping fa-2x text-secondary"></i>
                            </div>
                            <h3>Assistance</h3>
                            <p class="mb-2">Emergency assistance, shelter, and support for OFWs in distress. MWO teams are on the ground to help.</p>
                            <a href="{{ route('uraf.form') }}">Request Assistance</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="service-item h-100">
                            <div class="btn-square bg-light mb-4">
                                <i class="fa fa-scale-balanced fa-2x text-secondary"></i>
                            </div>
                            <h3>Legal Aid</h3>
                            <p class="mb-2">Legal counseling and referral for labor and contract issues. We help you understand your rights abroad.</p>
                            <a href="{{ route('service') }}">Read More</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="service-item h-100">
                            <div class="btn-square bg-light mb-4">
                                <i class="fa fa-heart fa-2x text-secondary"></i>
                            </div>
                            <h3>Welfare Services</h3>
                            <p class="mb-2">Psychosocial support, medical referral, and welfare assistance for OFWs and their families.</p>
                            <a href="{{ route('service') }}">Read More</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="service-item h-100">
                            <div class="btn-square bg-light mb-4">
                                <i class="fa fa-file-lines fa-2x text-secondary"></i>
                            </div>
                            <h3>Documentation</h3>
                            <p class="mb-2">Help with lost or damaged documents, authentication, and other consular-related needs.</p>
                            <a href="{{ route('service') }}">Read More</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="service-item h-100">
                            <div class="btn-square bg-light mb-4">
                                <i class="fa fa-phone-volume fa-2x text-secondary"></i>
                            </div>
                            <h3>24/7 Hotline</h3>
                            <p class="mb-2">Reach MWO for emergencies. Contact your nearest Migrant Workers Office for immediate support.</p>
                            <a href="{{ route('contact') }}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Features Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="rounded overflow-hidden">
                    <div class="row g-0">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="text-center bg-primary py-5 px-4 h-100">
                                <i class="fa fa-map-marker-alt fa-3x text-secondary mb-3"></i>
                                <h1 class="display-5 mb-0" data-toggle="counter-up">50</h1>
                                <span class="text-dark">MWO Posts</span>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="text-center bg-secondary py-5 px-4 h-100">
                                <i class="fa fa-users fa-3x text-primary mb-3"></i>
                                <h1 class="display-5 text-white mb-0" data-toggle="counter-up">500</h1>
                                <span class="text-white">Team Members</span>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="text-center bg-secondary py-5 px-4 h-100">
                                <i class="fa fa-hand-holding-heart fa-3x text-primary mb-3"></i>
                                <h1 class="display-5 text-white mb-0" data-toggle="counter-up">10000</h1>
                                <span class="text-white">OFWs Assisted</span>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="text-center bg-primary py-5 px-4 h-100">
                                <i class="fa fa-plane-arrival fa-3x text-secondary mb-3"></i>
                                <h1 class="display-5 mb-0" data-toggle="counter-up">8000</h1>
                                <span class="text-dark">Repatriations</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <p class="section-title bg-white text-start text-primary pe-3">Why DMW / MWO</p>
                <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.2s">Why OFWs Trust Us</h1>
                <p class="mb-4 wow fadeIn" data-wow-delay="0.3s">The Department of Migrant Workers and Migrant Workers Offices are the official government channels for assistance and repatriation. We respond to every request with confidentiality and care.</p>
                <p class="text-dark wow fadeIn" data-wow-delay="0.4s"><i class="fa fa-check text-primary me-2"></i>Official government assistance and repatriation</p>
                <p class="text-dark wow fadeIn" data-wow-delay="0.5s"><i class="fa fa-check text-primary me-2"></i>Confidential handling of your case</p>
                <p class="text-dark wow fadeIn" data-wow-delay="0.6s"><i class="fa fa-check text-primary me-2"></i>Dedicated MWO teams in host countries</p>
                <div class="d-flex mt-4 wow fadeIn" data-wow-delay="0.7s">
                    <a class="btn btn-primary py-3 px-4 me-3" href="{{ route('uraf.form') }}">Request Assistance</a>
                    <a class="btn btn-secondary py-3 px-4" href="{{ route('contact') }}">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->

<!-- How to Get Help Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Get Help</p>
            <h1 class="display-6 mb-4">Ways to Request Assistance & Repatriation</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="donation-item d-flex h-100 p-4">
                    <div class="donation-progress d-flex flex-column flex-shrink-0 text-center me-4">
                        <i class="fa fa-file-lines fa-3x text-primary mb-2"></i>
                        <h6 class="mb-0">Step 1</h6>
                    </div>
                    <div class="donation-detail">
                        <div class="position-relative mb-4">
                            <img class="img-fluid w-100" src="{{ $t }}/img/donation-1.jpg" alt="">
                            <a href="{{ route('uraf.form') }}" class="btn btn-sm btn-secondary px-3 position-absolute top-0 end-0">URAF</a>
                        </div>
                        <a href="{{ route('uraf.form') }}" class="h3 d-inline-block">Submit URAF Form</a>
                        <p>Fill out the Unified Request for Assistance Form online. Provide your details and describe your situation. All information is kept confidential.</p>
                        <a href="{{ route('uraf.form') }}" class="btn btn-primary w-100 py-3"><i class="fa fa-arrow-right me-2"></i>Request Assistance</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.13s">
                <div class="donation-item d-flex h-100 p-4">
                    <div class="donation-progress d-flex flex-column flex-shrink-0 text-center me-4">
                        <i class="fa fa-phone fa-3x text-primary mb-2"></i>
                        <h6 class="mb-0">Step 2</h6>
                    </div>
                    <div class="donation-detail">
                        <div class="position-relative mb-4">
                            <img class="img-fluid w-100" src="{{ $t }}/img/donation-2.jpg" alt="">
                            <a href="{{ route('contact') }}" class="btn btn-sm btn-secondary px-3 position-absolute top-0 end-0">Contact</a>
                        </div>
                        <a href="{{ route('contact') }}" class="h3 d-inline-block">Contact MWO</a>
                        <p>Reach your nearest Migrant Workers Office by phone or in person for urgent cases. MWO teams are available to assist OFWs in host countries.</p>
                        <a href="{{ route('contact') }}" class="btn btn-primary w-100 py-3"><i class="fa fa-arrow-right me-2"></i>Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="donation-item d-flex h-100 p-4">
                    <div class="donation-progress d-flex flex-column flex-shrink-0 text-center me-4">
                        <i class="fa fa-hand-holding-heart fa-3x text-primary mb-2"></i>
                        <h6 class="mb-0">Step 3</h6>
                    </div>
                    <div class="donation-detail">
                        <div class="position-relative mb-4">
                            <img class="img-fluid w-100" src="{{ $t }}/img/donation-3.jpg" alt="">
                            <a href="{{ route('service') }}" class="btn btn-sm btn-secondary px-3 position-absolute top-0 end-0">Services</a>
                        </div>
                        <a href="{{ route('service') }}" class="h3 d-inline-block">Our Services</a>
                        <p>Learn about repatriation, legal aid, welfare support, and documentation assistance. We coordinate with posts and partners for your safe return.</p>
                        <a href="{{ route('service') }}" class="btn btn-primary w-100 py-3"><i class="fa fa-arrow-right me-2"></i>View Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- How to Get Help End -->

<!-- Banner Start -->
<div class="container-fluid banner py-5">
    <div class="container">
        <div class="banner-inner bg-light p-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-8 py-5 text-center">
                    <h1 class="display-6 wow fadeIn" data-wow-delay="0.3s">We Are Here for Every Overseas Filipino Worker</h1>
                    <p class="fs-5 mb-4 wow fadeIn" data-wow-delay="0.5s">Whether you need assistance, repatriation, legal aid, or welfare support—DMW and MWO are your official channels. Submit your request through the URAF form or contact your nearest MWO.</p>
                    <div class="d-flex justify-content-center wow fadeIn" data-wow-delay="0.7s">
                        <a class="btn btn-primary py-3 px-4 me-3" href="{{ route('uraf.form') }}">Request Assistance</a>
                        <a class="btn btn-secondary py-3 px-4" href="{{ route('contact') }}">Contact MWO</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->

<!-- Events & Announcements Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Announcements</p>
            <h1 class="display-6 mb-4">Events & Updates</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="event-item h-100 p-4">
                    <img class="img-fluid w-100 mb-4" src="{{ $t }}/img/event-1.jpg" alt="">
                    <a href="{{ route('event') }}" class="h3 d-inline-block">Repatriation Flights</a>
                    <p>Schedule and updates on government-assisted repatriation flights for OFWs. Check with your nearest MWO for availability.</p>
                    <div class="bg-light p-4">
                        <p class="mb-1"><i class="fa fa-plane text-primary me-2"></i>Repatriation</p>
                        <p class="mb-0"><i class="fa fa-map-marker-alt text-primary me-2"></i>MWO Posts worldwide</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="event-item h-100 p-4">
                    <img class="img-fluid w-100 mb-4" src="{{ $t }}/img/event-2.jpg" alt="">
                    <a href="{{ route('event') }}" class="h3 d-inline-block">OFW Rights & Welfare</a>
                    <p>Information on labor rights, contract verification, and welfare programs for overseas Filipino workers.</p>
                    <div class="bg-light p-4">
                        <p class="mb-1"><i class="fa fa-scale-balanced text-primary me-2"></i>Legal & Welfare</p>
                        <p class="mb-0"><i class="fa fa-info-circle text-primary me-2"></i>DMW / MWO</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="event-item h-100 p-4">
                    <img class="img-fluid w-100 mb-4" src="{{ $t }}/img/event-3.jpg" alt="">
                    <a href="{{ route('event') }}" class="h3 d-inline-block">Emergency Hotlines</a>
                    <p>24/7 hotlines and contact details for Migrant Workers Offices. Save your local MWO number for emergencies.</p>
                    <div class="bg-light p-4">
                        <p class="mb-1"><i class="fa fa-phone text-primary me-2"></i>24/7 Support</p>
                        <p class="mb-0"><a href="{{ route('contact') }}" class="text-primary"><i class="fa fa-link me-2"></i>Contact page</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Events & Announcements End -->

<!-- Request Assistance CTA Start -->
<div class="container-fluid donate py-5">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-7 donate-text bg-light py-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex flex-column justify-content-center h-100 p-5 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 mb-4">Request Assistance or Repatriation</h1>
                    <p class="fs-5 mb-0">Use the Unified Request for Assistance Form (URAF) to submit your request. The Department of Migrant Workers and Migrant Workers Office will review your case and respond as soon as possible. Your information is kept confidential.</p>
                </div>
            </div>
            <div class="col-lg-5 donate-form bg-primary py-5 text-center wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100 p-5 d-flex flex-column justify-content-center">
                    <h3 class="text-dark mb-4">Submit URAF</h3>
                    <p class="text-dark mb-4">Fill out the form with your details and describe your situation. Required fields: first name and last name.</p>
                    <a class="btn btn-secondary py-3 w-100" href="{{ route('uraf.form') }}">Go to Request Form</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Request Assistance CTA End -->

<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">MWO</p>
            <h1 class="display-6 mb-4">Migrant Workers Office</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="team-item d-flex h-100 p-4">
                    <div class="team-detail pe-4">
                        <img class="img-fluid mb-4" src="{{ $t }}/img/team-1.jpg" alt="">
                        <h3>DMW Central Office</h3>
                        <span>Department of Migrant Workers</span>
                    </div>
                    <div class="team-social bg-light d-flex flex-column justify-content-center flex-shrink-0 p-4">
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-x-twitter"></i></a>
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="team-item d-flex h-100 p-4">
                    <div class="team-detail pe-4">
                        <img class="img-fluid mb-4" src="{{ $t }}/img/team-2.jpg" alt="">
                        <h3>MWO Team</h3>
                        <span>Migrant Workers Office</span>
                    </div>
                    <div class="team-social bg-light d-flex flex-column justify-content-center flex-shrink-0 p-4">
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-x-twitter"></i></a>
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="team-item d-flex h-100 p-4">
                    <div class="team-detail pe-4">
                        <img class="img-fluid mb-4" src="{{ $t }}/img/team-3.jpg" alt="">
                        <h3>Assistance & Repatriation</h3>
                        <span>OFW Support</span>
                    </div>
                    <div class="team-social bg-light d-flex flex-column justify-content-center flex-shrink-0 p-4">
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-x-twitter"></i></a>
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-primary my-2" href="#!"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-12 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="testimonial-title">
                    <h1 class="display-6 mb-4">What OFWs Say About DMW / MWO</h1>
                    <p class="fs-5 mb-0">We are committed to assistance and repatriation for every overseas Filipino worker in need.</p>
                </div>
            </div>
            <div class="col-md-12 col-lg-8 col-xl-9">
                <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.3s">
                    <div class="testimonial-item">
                        <div class="row g-5 align-items-center">
                            <div class="col-md-6">
                                <div class="testimonial-img">
                                    <img class="img-fluid" src="{{ $t }}/img/testimonial-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-text pb-5 pb-md-0">
                                    <div class="mb-2">
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                    </div>
                                    <p class="fs-5">The MWO team helped me with repatriation when I was in distress. They responded quickly and arranged my flight home. I am grateful to DMW and MWO.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="btn-lg-square bg-light text-secondary flex-shrink-0">
                                            <i class="fa fa-quote-right fa-2x"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h5 class="mb-0">OFW, Middle East</h5>
                                            <span>Repatriation assistance</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="row g-5 align-items-center">
                            <div class="col-md-6">
                                <div class="testimonial-img">
                                    <img class="img-fluid" src="{{ $t }}/img/testimonial-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-text pb-5 pb-md-0">
                                    <div class="mb-2">
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                    </div>
                                    <p class="fs-5">I submitted the URAF form and got a call from the MWO within days. They assisted me with documentation and welfare support. Thank you, DMW.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="btn-lg-square bg-light text-secondary flex-shrink-0">
                                            <i class="fa fa-quote-right fa-2x"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h5 class="mb-0">OFW, Asia</h5>
                                            <span>Assistance & documentation</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="row g-5 align-items-center">
                            <div class="col-md-6">
                                <div class="testimonial-img">
                                    <img class="img-fluid" src="{{ $t }}/img/testimonial-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-text pb-5 pb-md-0">
                                    <div class="mb-2">
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                    </div>
                                    <p class="fs-5">When I needed legal aid abroad, the Migrant Workers Office referred me to the right services. They are the official channel for OFW assistance and repatriation.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="btn-lg-square bg-light text-secondary flex-shrink-0">
                                            <i class="fa fa-quote-right fa-2x"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h5 class="mb-0">OFW, Europe</h5>
                                            <span>Legal aid & referral</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
@endsection
