@php $t = asset('theme'); @endphp
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
                                        @for($i=0;$i<5;$i++) <i class="fa fa-star text-primary"></i> @endfor
                                    </div>
                                    <p class="fs-5">The MWO team helped me with repatriation when I was in distress. They responded quickly and arranged my flight home. I am grateful to DMW and MWO.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="btn-lg-square bg-light text-secondary flex-shrink-0"><i class="fa fa-quote-right fa-2x"></i></div>
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
                                        @for($i=0;$i<5;$i++) <i class="fa fa-star text-primary"></i> @endfor
                                    </div>
                                    <p class="fs-5">I submitted the URAF form and got a call from the MWO within days. They assisted me with documentation and welfare support. Thank you, DMW.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="btn-lg-square bg-light text-secondary flex-shrink-0"><i class="fa fa-quote-right fa-2x"></i></div>
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
                                        @for($i=0;$i<5;$i++) <i class="fa fa-star text-primary"></i> @endfor
                                    </div>
                                    <p class="fs-5">When I needed legal aid abroad, the Migrant Workers Office referred me to the right services. They are the official channel for OFW assistance and repatriation.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="btn-lg-square bg-light text-secondary flex-shrink-0"><i class="fa fa-quote-right fa-2x"></i></div>
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
