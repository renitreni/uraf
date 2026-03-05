@extends('layouts.app')

@section('title', 'Feature')

@section('content')
@include('partials.page-header', ['title' => 'Why DMW / MWO', 'breadcrumb' => [['label' => 'Why Us']]])

@include('partials.video-section')

@include('pages.partials.features-block')
@endsection
