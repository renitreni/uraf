@extends('layouts.app')

@section('title', 'Events')

@section('content')
@php $t = asset('theme'); @endphp
@include('partials.page-header', ['title' => 'Events & Announcements', 'breadcrumb' => [['label' => 'Events']]])

@include('partials.video-section')

<!-- Event Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Announcements</p>
            <h1 class="display-6 mb-4">Events & Updates for OFWs</h1>
        </div>
        <div class="row g-4">
            @foreach([
                ['img' => 'event-1.jpg', 'title' => 'Repatriation Flights', 'desc' => 'Schedule and updates on government-assisted repatriation flights for OFWs. Check with your nearest MWO for availability.', 'icon' => 'fa-plane', 'sub' => 'MWO Posts worldwide'],
                ['img' => 'event-2.jpg', 'title' => 'OFW Rights & Welfare', 'desc' => 'Information on labor rights, contract verification, and welfare programs for overseas Filipino workers.', 'icon' => 'fa-scale-balanced', 'sub' => 'DMW / MWO'],
                ['img' => 'event-3.jpg', 'title' => 'Emergency Hotlines', 'desc' => '24/7 hotlines and contact details for Migrant Workers Offices. Save your local MWO number for emergencies.', 'icon' => 'fa-phone', 'sub' => 'Contact page'],
            ] as $i => $e)
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="{{ 0.1 + $i * 0.2 }}s">
                <div class="event-item h-100 p-4">
                    <img class="img-fluid w-100 mb-4" src="{{ $t }}/img/{{ $e['img'] }}" alt="">
                    <span class="h3 d-inline-block">{{ $e['title'] }}</span>
                    <p>{{ $e['desc'] }}</p>
                    <div class="bg-light p-4">
                        <p class="mb-1"><i class="fa {{ $e['icon'] }} text-primary me-2"></i>{{ $e['title'] }}</p>
                        <p class="mb-0"><i class="fa fa-info-circle text-primary me-2"></i>{{ $e['sub'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Event End -->
@endsection
