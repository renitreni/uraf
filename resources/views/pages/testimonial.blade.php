@extends('layouts.app')

@section('title', 'Testimonial')

@section('content')
@include('partials.page-header', ['title' => 'Testimonials', 'breadcrumb' => [['label' => 'Testimonials']]])

@include('partials.video-section')

@include('pages.partials.testimonial-block')
@endsection
