@extends('layouts.app')

@section('title', 'About Us')

@section('content')
@php $t = asset('theme'); @endphp
@include('partials.page-header', ['title' => 'About DMW / MWO', 'breadcrumb' => [['label' => 'About']]])

@include('partials.video-section')

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="about-img">
                    <img class="img-fluid w-100" src="{{ $t }}/img/about.jpg" alt="Image">
                </div>
            </div>
            <div class="col-lg-6">
                <p class="section-title bg-white text-start text-primary pe-3">About Us</p>
                <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.2s">Department of Migrant Workers & Migrant Workers Office</h1>
                <p class="mb-4 wow fadeIn" data-wow-delay="0.3s">The Department of Migrant Workers (DMW) is the Philippine government agency responsible for protecting and promoting the welfare of overseas Filipino workers (OFWs). Migrant Workers Offices (MWO) are our posts abroad that provide on-the-ground assistance, repatriation support, legal aid, and welfare services. Our sole purpose is to help OFWs in need.</p>
                <div class="row g-4 pt-2">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="h-100">
                            <h3>Our Mission</h3>
                            <p>To ensure the welfare of Filipino migrant workers and their families through assistance, repatriation, and protection of their rights.</p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i>Assistance for OFWs in distress</p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-2"></i>Safe and orderly repatriation</p>
                            <p class="text-dark mb-0"><i class="fa fa-check text-primary me-2"></i>Confidential and timely response</p>
                        </div>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100 bg-primary p-4 text-center">
                            <p class="fs-5 text-dark">Need help? Submit a request for assistance or repatriation through our official URAF form.</p>
                            <a class="btn btn-secondary py-2 px-4" href="{{ route('uraf.form') }}">Request Assistance</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

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

@include('pages.partials.features-block')
@include('pages.partials.team-block')
@endsection
