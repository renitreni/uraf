@extends('layouts.app')

@section('title', 'Donation')

@section('content')
@php $t = asset('theme'); @endphp
@include('partials.page-header', ['title' => 'Get Help', 'breadcrumb' => [['label' => 'Get Help']]])

@include('partials.video-section')

<!-- Donation Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Get Help</p>
            <h1 class="display-6 mb-4">Ways to Request Assistance & Repatriation</h1>
        </div>
        <div class="row g-4">
            @foreach([
                ['img' => 'donation-1.jpg', 'tag' => 'URAF', 'title' => 'Submit URAF Form', 'pct' => 100, 'desc' => 'Fill out the Unified Request for Assistance Form online. Provide your details and describe your situation. All information is kept confidential.'],
                ['img' => 'donation-2.jpg', 'tag' => 'Contact', 'title' => 'Contact MWO', 'pct' => 100, 'desc' => 'Reach your nearest Migrant Workers Office by phone or in person for urgent cases. MWO teams are available to assist OFWs in host countries.'],
                ['img' => 'donation-3.jpg', 'tag' => 'Services', 'title' => 'Our Services', 'pct' => 100, 'desc' => 'Learn about repatriation, legal aid, welfare support, and documentation assistance. We coordinate with posts and partners for your safe return.'],
                ['img' => 'donation-1.jpg', 'tag' => 'URAF', 'title' => 'Submit URAF Form', 'pct' => 100, 'desc' => 'Fill out the Unified Request for Assistance Form online.'],
                ['img' => 'donation-2.jpg', 'tag' => 'Contact', 'title' => 'Contact MWO', 'pct' => 100, 'desc' => 'Reach your nearest Migrant Workers Office.'],
                ['img' => 'donation-3.jpg', 'tag' => 'Services', 'title' => 'Our Services', 'pct' => 100, 'desc' => 'Repatriation, legal aid, welfare, documentation.'],
            ] as $i => $d)
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="{{ $i < 3 ? 0.1 + $i * 0.03 : 0.5 }}s">
                <div class="donation-item d-flex h-100 p-4">
                    <div class="donation-progress d-flex flex-column flex-shrink-0 text-center me-4">
                        <i class="fa fa-hand-holding-heart fa-3x text-primary mb-2"></i>
                        <h6 class="mb-0">{{ $d['tag'] }}</h6>
                    </div>
                    <div class="donation-detail">
                        <div class="position-relative mb-4">
                            <img class="img-fluid w-100" src="{{ $t }}/img/{{ $d['img'] }}" alt="">
                            <span class="btn btn-sm btn-secondary px-3 position-absolute top-0 end-0">{{ $d['tag'] }}</span>
                        </div>
                        <span class="h3 d-inline-block">{{ $d['title'] }}</span>
                        <p>{{ $d['desc'] }}</p>
                        <a href="{{ $d['tag'] === 'URAF' ? route('uraf.form') : ($d['tag'] === 'Contact' ? route('contact') : route('service')) }}" class="btn btn-primary w-100 py-3"><i class="fa fa-arrow-right me-2"></i>{{ $d['tag'] === 'URAF' ? 'Request Assistance' : ($d['tag'] === 'Contact' ? 'Contact Us' : 'View Services') }}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Donation End -->
@endsection
