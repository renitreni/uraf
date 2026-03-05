@extends('layouts.app')

@section('title', 'Service')

@section('content')
@php $t = asset('theme'); @endphp
@include('partials.page-header', ['title' => 'Services', 'breadcrumb' => [['label' => 'Services']]])

@include('partials.video-section')

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
                    @foreach([
                        ['icon' => 'fa-plane-arrival', 'title' => 'Repatriation', 'desc' => 'Safe and orderly return of OFWs to the Philippines. We coordinate with posts and partners for your journey home.'],
                        ['icon' => 'fa-hands-helping', 'title' => 'Assistance', 'desc' => 'Emergency assistance, shelter, and support for OFWs in distress. MWO teams are on the ground to help.'],
                        ['icon' => 'fa-scale-balanced', 'title' => 'Legal Aid', 'desc' => 'Legal counseling and referral for labor and contract issues. We help you understand your rights abroad.'],
                        ['icon' => 'fa-heart', 'title' => 'Welfare Services', 'desc' => 'Psychosocial support, medical referral, and welfare assistance for OFWs and their families.'],
                        ['icon' => 'fa-file-lines', 'title' => 'Documentation', 'desc' => 'Help with lost or damaged documents, authentication, and other consular-related needs.'],
                        ['icon' => 'fa-phone-volume', 'title' => '24/7 Hotline', 'desc' => 'Reach MWO for emergencies. Contact your nearest Migrant Workers Office for immediate support.'],
                    ] as $i => $s)
                    <div class="col-sm-6 col-md-4 wow fadeIn" data-wow-delay="{{ 0.1 + ($i % 3) * 0.2 }}s">
                        <div class="service-item h-100">
                            <div class="btn-square bg-light mb-4">
                                <i class="fa {{ $s['icon'] }} fa-2x text-secondary"></i>
                            </div>
                            <h3>{{ $s['title'] }}</h3>
                            <p class="mb-2">{{ $s['desc'] }}</p>
                            <a href="{{ $s['title'] === '24/7 Hotline' ? route('contact') : route('uraf.form') }}">{{ $s['title'] === '24/7 Hotline' ? 'Contact Us' : 'Request Assistance' }}</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Donate Start -->
<div class="container-fluid donate py-5">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-7 donate-text bg-light py-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex flex-column justify-content-center h-100 p-5 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 mb-4">Request Assistance or Repatriation</h1>
                    <p class="fs-5 mb-0">Use the Unified Request for Assistance Form (URAF) to submit your request. DMW and MWO will review your case and respond as soon as possible.</p>
                </div>
            </div>
            <div class="col-lg-5 donate-form bg-primary py-5 text-center wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100 p-5 d-flex flex-column justify-content-center">
                    <h3 class="text-dark mb-4">Submit URAF</h3>
                    <p class="text-dark mb-4">Request assistance or repatriation through our official form. We respond to every request with care.</p>
                    <a class="btn btn-secondary py-3 w-100" href="{{ route('uraf.form') }}">Request Assistance</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Donate End -->

@include('pages.partials.testimonial-block')
@endsection
