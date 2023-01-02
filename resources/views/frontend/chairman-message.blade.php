@extends('frontend.layouts.master')
@section('title', 'Company Chairman')
@section('content')

<div role="main" class="main">
    <section
        class="page-header page-header-modern page-header-background page-header-background-sm overlay overlay-color-dark overlay-show overlay-op-7"
        style="background-image: url('assets/frontend/img/page-header/Chairman-Message.jpg')">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1><strong>Message from the Chairman & Vice-Chairman</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="#">Home</a></li>
                        <li class="active">Message</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Message Section -->
    <div class="container py-4">

        <?php $i = 1; ?>
        @foreach($message as $data)
        @if($i%2 == 0)
        <div class="row">
            <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation animated fadeInLeftShorter appear-animation-visible"
                data-appear-animation="fadeInLeftShorter" style="animation-delay: 100ms;">
                <img src="{{ (!empty('uploads/management_message_images/'.$data->image)) ? url('uploads/management_message_images/'.$data->image) : url('uploads/no_image.jpg') }}"
                    class="img-fluid" alt="{{ $data->name }}">
            </div>
            <div class="col-md-7 order-2">
                <div class="overflow-hidden">
                    <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation animated maskUp appear-animation-visible"
                        data-appear-animation="maskUp" data-appear-animation-delay="300"
                        style="animation-delay: 300ms;">{{ $data->title }}</h2>
                </div>
                <p class="appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
                    style="animation-delay: 800ms;">{!! $data->description !!}</p>
                <hr class="solid my-4 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900"
                    style="animation-delay: 900ms;">
                <div class="row align-items-center appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000"
                    style="animation-delay: 1000ms;">

                    @if($data->facebook_link || $data->twitter_link || $data->linkedin_link)
                    <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                        <strong class="text-uppercase text-1 me-3 text-dark">follow me on social network</strong>
                        <ul class="social-icons float-lg-end social_network">

                            @if($data->facebook_link)
                            <li class="social-icons-facebook msg-facebook">
                                <a href="{{ $data->facebook_link }}" target="_blank" title="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            @endif

                            @if($data->twitter_link)
                            <li class="social-icons-twitter msg-twitter">
                                <a href="{{ $data->twitter_link }}" target="_blank" title="Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            @endif

                            @if($data->linkedin_link)
                            <li class="social-icons-linkedin msg-linkedin">
                                <a href="{{ $data->linkedin_link }}" target="_blank" title="Linkedin">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        @else

        <div class="row">
            <div class="col-md-7 order-2">
                <div class="overflow-hidden">
                    <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation animated maskUp appear-animation-visible"
                        data-appear-animation="maskUp" data-appear-animation-delay="300"
                        style="animation-delay: 300ms;">{{ $data->title }}</h2>
                </div>
                <p class="pb-3 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
                    style="animation-delay: 800ms;">{!! $data->description !!}</p>

                <hr class="solid my-4 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900"
                    style="animation-delay: 900ms;">
                @if($data->facebook_link || $data->twitter_link || $data->linkedin_link)
                <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                    <strong class="text-uppercase text-1 me-3 text-dark">follow me on social network</strong>
                    <ul class="social-icons float-lg-end social_network">

                        @if($data->facebook_link)
                        <li class="social-icons-facebook msg-facebook">
                            <a href="{{ $data->facebook_link }}" target="_blank" title="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        @endif

                        @if($data->twitter_link)
                        <li class="social-icons-twitter msg-twitter">
                            <a href="{{ $data->twitter_link }}" target="_blank" title="Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        @endif

                        @if($data->linkedin_link)
                        <li class="social-icons-linkedin msg-linkedin">
                            <a href="{{ $data->linkedin_link }}" target="_blank" title="Linkedin">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
                @endif
            </div>
            <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation animated fadeInRightShorter appear-animation-visible"
                data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms;">
                <img src="{{ (!empty('uploads/management_message_images/'.$data->image)) ? url('uploads/management_message_images/'.$data->image) : url('uploads/no_image.jpg') }}"
                    class="img-fluid" alt="{{ $data->name }}">
            </div>
        </div>
        <br>
        <br>
        @endif
        <?php $i++ ?>
        @endforeach

    </div>
    <!-- Message Section -->

    <!-- Get Start Section -->
    <section class="section section-primary border-0 mb-0 appear-animation" data-appear-animation="fadeIn"
        data-plugin-options="{'accY': -150}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <p>
                        <span class="highlighted-word">Making your guest more delightful with our food</span>
                        <span>Check out our options and features included.</span>
                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="get-started text-left text-lg-right">
                        <a href="#" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Get Started
                            Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Get Start Section -->
</div>

@endsection