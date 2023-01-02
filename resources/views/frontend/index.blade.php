@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')


<div role="main" class="main">

    <!-- Slider Start -->
    @include('frontend.home.slider')
    <!-- Slider End -->

    <!-- Accordian Start -->
    @include('frontend.home.accordian')
    <!-- Accordian End -->

    <!-- About Section -->
    @include('frontend.home.about')
    <!-- About Section -->

    <!-- Company Start -->
    @include('frontend.home.company')
    <!-- Company End -->

    <!-- Profile Start -->
    @include('frontend.home.profile')
    <!-- Profile End -->

    <!-- Client Feedback -->
    @include('frontend.home.client-feedback')
    <!-- Client Feedback -->

    <!-- News & Events Start -->
    @include('frontend.home.news-events')
    <!-- News & Events End -->

    <!-- Happy Client Start -->
    @include('frontend.home.our-clients')
    <!-- Happy Client End -->
</div>


@endsection