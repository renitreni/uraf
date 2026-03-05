@extends('layouts.app')

@section('title', 'Contact')

@section('content')
@include('partials.page-header', ['title' => 'Contact MWO', 'breadcrumb' => [['label' => 'Contact']]])

@include('partials.video-section')

<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                <p class="section-title bg-white text-start text-primary pe-3">Contact</p>
                <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.2s">Migrant Workers Office (MWO)</h1>
                <p class="mb-4">MWO posts are located in countries with significant OFW presence. For assistance and repatriation, you may also submit the <a href="{{ route('uraf.form') }}">Unified Request for Assistance Form (URAF)</a> online.</p>
                <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.7558365000003!2d121.01725427499999!3d14.554717785932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c90264a0ed01%3A0x2b2e2e2e2e2e2e2e!2sManila%2C%20Philippines!5e0!3m2!1sen!2sph!4v1603794290143!5m2!1sen!2sph" frameborder="0" style="height: 425px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                <h3>Get In Touch</h3>
                <p class="mb-4">For assistance, repatriation, or welfare support, contact your nearest Migrant Workers Office. You can also submit a request through the <a href="{{ route('uraf.form') }}">URAF form</a>. For emergencies, call the MWO hotline in your host country.</p>
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 250px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary py-3 px-4" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection
