@extends('layouts.app')

@section('title', 'Our Team')

@section('content')
@include('partials.page-header', ['title' => 'Migrant Workers Office', 'breadcrumb' => [['label' => 'MWO']]])

@include('partials.video-section')

@include('pages.partials.team-block')
@endsection
