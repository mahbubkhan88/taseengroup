@extends('frontend.layouts.master')
@section('title', 'Galleries')
@section('content')

<div role="main" class="main">
    <section
        class="page-header page-header-modern page-header-background page-header-background-sm overlay overlay-color-dark overlay-show overlay-op-7"
        style="background-image: url('assets/frontend/img/page-header/our-works.jpeg')">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold">Image Gallery</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="#">Home</a></li>
                        <li class="active">Image Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-2">
        <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio"
            data-option-key="filter" data-plugin-options="{'layoutMode': 'masonry', 'filter': '*'}">
            <li class="nav-item active" data-option-value="*">
                <a class="nav-link text-1 text-uppercase active" href="#">
                    Show All
                </a>
            </li>
            @foreach($categories as $cat)
            <li class="nav-item" data-option-value="{{ '.'.$cat->name }}">
                <a class="nav-link text-1 text-uppercase" href="#">
                    {{ $cat->name }}
                </a>
            </li>
            @endforeach
        </ul>
        <!-- Project -->
        <div class="sort-destination-loader mt-4 pt-2 sort-destination-loader-loaded">
            <div class="row portfolio-list sort-destination" data-sort-id="portfolio" data-filter="*"
                style="position: relative; height: 772.14px;">

                @foreach($projects as $project)
                <div class="col-sm-6 col-lg-3 isotope-item {{ $project['projectCat']['name'] }}"
                    style="position: absolute; left: 285px; top: 241.625px;">
                    <div class="portfolio-item">
                        <a href="{{ route('ProjectDetailsPage', $project->slug) }}">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="{{ (!empty('uploads/project_images/'.$project->image)) ? url('uploads/project_images/'.$project->image) : url('uploads/no_image.jpg') }}"
                                        class="img-fluid border-radius-0" alt="{{ $project->project_title }}">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">{{ $project->project_title }}</span>
                                        <span class="thumb-info-type">{{ $project['projectCat']['name'] }}</span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="bounce-loader">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
            <!-- Pagination -->
            <div class="row">
                <div class="col">
                    <ul class="pagination float-right">
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                    </ul>
                </div>
            </div>
            <!-- Pagination -->
        </div>
        <!-- Project -->
    </div>
</div>

@endsection