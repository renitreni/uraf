@extends('layouts.app')

@section('title', 'Request Submitted')

@section('content')
@include('partials.page-header', ['title' => 'Request Submitted', 'breadcrumb' => [['label' => 'Request Assistance', 'url' => route('uraf.form')], ['label' => 'Success']]])

<div class="container-fluid py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-light rounded p-5 text-center">
                    <div class="btn-square bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                        <i class="fa fa-check fa-3x text-secondary"></i>
                    </div>
                    <h1 class="display-6 mb-3">Request Submitted Successfully</h1>
                    <p class="fs-5 mb-4">Thank you for submitting your request. The Department of Migrant Workers (DMW) / Migrant Workers Office (MWO) has received your information and will get back to you as soon as possible.</p>
                    <p class="text-muted mb-4">Reference: <strong>#{{ $urafRequest->id }}</strong></p>
                    <a href="{{ route('uraf.form') }}" class="btn btn-primary py-3 px-4 me-2">Submit another request</a>
                    <a href="{{ route('home') }}" class="btn btn-secondary py-3 px-4">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
