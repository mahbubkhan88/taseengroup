@extends('frontend.layouts.master')
@section('title', 'Mission, Vision & Value')
@section('content')

<div role="main" class="main">
    <section
        class="page-header page-header-modern page-header-background page-header-background-sm overlay overlay-color-dark overlay-show overlay-op-7"
        style="background-image: url('assets/frontend/img/page-header/mission-vision-value.jpg')">

        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold"> Mission, Vision & Value </h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="#">Home</a></li>
                        <li class="active"> Mission, Vision & Value </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row pt-5">
            <div class="col">
                <!-- Misssion Vision and Value Section -->
                <div class="row py-3 justify-content-center">
                    @foreach($dataList as $data)
                    <div class="col-sm-8 col-md-4 mb-4 mb-md-0 appear-animation animated fadeIn appear-animation-visible"
                        data-appear-animation="fadeIn" style="animation-delay: 100ms;">
                        <article>
                            <div class="row">
                                <div class="col">
                                    <img src="{{ (!empty('uploads/mission_vision_value_images/'.$data->image)) ? url('uploads/mission_vision_value_images/'.$data->image) : url('uploads/no_image.jpg') }}"
                                        class="img-fluid hover-effect-2 mb-3" alt="{{ $data->title }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h4 class="mb-2"><strong>{{ $data->title }}</strong></h4>
                                    </p>
                                    <p class="text-2">
                                        {!! $data->description !!}
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endforeach
                </div>
                <!-- Misssion Vision and Value Section -->
            </div>
        </div>
    </div>

    <section class="section bg-color-grey section-height-3 border-0 mt-5 mb-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row align-items-center pt-5 pb-3 appear-animation"
                        data-appear-animation="fadeInRightShorter">
                        <div class="col-md-8 pr-md-5 mb-5 mb-md-0">
                            <h4 class="mb-2"><strong>OUR STRENGTHS</strong></h4>
                            {!! $strength->description !!}
                        </div>
                        <div class="col-md-4 px-5 px-md-3">
                            <img class="img-fluid scale-2 my-4"
                                src="{{ (!empty('uploads/strength_images/'.$strength->image)) ? url('uploads/strength_images/'.$strength->image) : url('uploads/no_image.jpg') }}"
                                alt="{{ $strength->name }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-color-white section-height-3 border-0 mb-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <img class="img-fluid pr-5 pr-md-0 my-4"
                                src="{{ (!empty('uploads/why_choose_us_images/'.$why_choose->image)) ? url('uploads/why_choose_us_images/'.$why_choose->image) : url('uploads/no_image.jpg') }}"
                                alt="{{ $why_choose->name }}" />
                        </div>
                        <div class="col-md-8 pl-md-5">
                            <h4 class="mb-2"><strong>WHY CHOOSE US</strong></h4>
                            <p>
                                {!! $why_choose->description !!}"
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section section-primary border-0 mb-0 appear-animation" data-appear-animation="fadeIn"
        data-plugin-options="{'accY': -150}">
        <div class="container">
            <div class="row counters counters-sm pb-4 pt-3">

                @foreach($counters as $coutner)
                <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                    <div class="counter">
                        <i class="{{ $coutner->icon }}"></i>
                        <strong class="text-color-light font-weight-extra-bold"
                            data-to="{{ $coutner->counter }}">{{ $coutner->counter }}</strong>
                        <label class="text-4 mt-1 text-color-light">{{ $coutner->title }}</label>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
</div>

@endsection