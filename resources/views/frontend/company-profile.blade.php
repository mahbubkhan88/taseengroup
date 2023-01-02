@extends('frontend.layouts.master')
@section('title', 'Company Profile')
@section('content')

<div role="main" class="main">
    <section
        class="page-header page-header-modern page-header-background page-header-background-sm overlay overlay-color-dark overlay-show overlay-op-7"
        style="background-image: url('assets/frontend/img/page-header/company-profile.jpg')">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold">Company Profile</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="#">Home</a></li>
                        <li class="active">Company Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row pt-5">
            <div class="col">
                <div class="row mt-3 mb-5">
                    <div class="col-md-12 appear-animation" data-appear-animation="fadeInLeftShorter"
                        data-appear-animation-delay="800">
                        <h2 class="text-color-dark font-weight-normal text-6 mb-2"><strong
                                class="font-weight-extra-bold">Company Profile</strong></h2>

                        <p class="text-justify">
                            {!! $profileData->page_description !!}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col mb-4">
            <hr class="my-5">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row mt-3 mb-5">
                    <div class="col-md-12 appear-animation" data-appear-animation="fadeInLeftShorter"
                        data-appear-animation-delay="Information">
                        <h2 class="text-color-dark font-weight-normal text-6 mb-2"><strong
                                class="font-weight-extra-bold">Company Information</strong></h2>
                        <dl class="horizontal">
                            <dt>Full Name</dt>
                            <dd>: {{ $profileData->company_name }} </dd>
                            <dt>Business Nature</dt>
                            <dd>: {{ $profileData->company_business }} </dd>
                            <dt>Incorporation Date</dt>
                            <dd>: {{ $profileData->company_start_date }} </dd>
                            <dt>Company Type</dt>
                            <dd>: {{ $profileData->company_type }} </dd>
                            <dt>Number of employees</dt>
                            <dd>: {{ $profileData->employee_number }} </dd>
                            <dt>Year End</dt>
                            <dd>: {{ $profileData->year_end }} </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection