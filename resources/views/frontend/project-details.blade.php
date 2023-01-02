@extends('frontend.layouts.master')
@section('title', 'Project Details Information')
@section('content')

<div role="main" class="main">
    <section
        class="page-header page-header-modern page-header-background page-header-background-sm overlay overlay-color-dark overlay-show overlay-op-7"
        style="background-image: url('assets/frontend/img/page-header/meet-the-team.jpg')">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold">{{ $project->project_title }}</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="#">Home</a></li>
                        <li class="active">Project Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">
        <div class="row pt-4 mt-2 mb-5">
            <div class="col-md-8 mb-4 mb-md-0">
                <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                    <img src="{{ (!empty('uploads/project_images/'.$project->image)) ? url('uploads/project_images/'.$project->image) : url('uploads/no_image.jpg') }}"
                        class="img-fluid border-radius-0" alt="">
                </div>
                <br>
                <h2 class="text-color-dark font-weight-normal text-5 mb-2">
                    <strong class="font-weight-extra-bold">
                        {{ $project->project_title }}
                    </strong>
                </h2>

                <p>{!! $project->description !!}</p>


            </div>
            <div class="col-md-4 project__sidebar">
                <div class="widget">
                    <h5 class="title">Project Information</h5>
                    <ul class="list list-icons list-primary list-borders text-2">

                        <li>
                            <i class="fas fa-caret-right left-10"></i>
                            <strong class="text-color-primary">Project Name:</strong>
                            {{ $project->project_name }}
                        </li>

                        <li>
                            <i class="fas fa-caret-right left-10"></i>
                            <strong class="text-color-primary">Project Category:</strong>
                            {{ $project['projectCat']['name'] }}
                        </li>

                        <li>
                            <i class="fas fa-caret-right left-10"></i>
                            <strong class="text-color-primary">Client Name:</strong>
                            {{ $project->client_name }}
                        </li>

                        <li>
                            <i class="fas fa-caret-right left-10"></i>
                            <strong class="text-color-primary">Date:</strong>
                            {{ date('M j, Y', strtotime($project->date)) }}
                        </li>

                        <li>
                            <i class="fas fa-caret-right left-10"></i>
                            <strong class="text-color-primary">Project URL:</strong>
                            <a href="#" target="_blank" class="text-dark">
                                {{ $project->project_link }}
                            </a>
                        </li>

                        <li>
                            <i class="fas fa-caret-right left-10"></i>
                            <strong class="text-color-primary">Location:</strong>
                            {{ $project->location }}
                        </li>

                    </ul>
                </div>

                <div class="widget">
                    <h5 class="title">Recent Project</h5>
                    <ul class="list list-icons list-primary list-borders text-2">

                        <div class="tab-pane" id="recentPosts">
                            <ul class="simple-post-list">
                                @foreach ($recentProject as $project)
                                <li>
                                    <div class="post-image">
                                        <div class="img-thumbnail img-thumbnail-no-borders d-block"> <a
                                                href="{{ route('ProjectDetailsPage', $project->slug) }}"> <img
                                                    src="{{ (!empty('uploads/project_images/'.$project->image)) ? url('uploads/project_images/'.$project->image) : url('uploads/no_image.jpg') }}"
                                                    width="80" height="auto" alt="{{ $project->project_title }}"> </a>
                                        </div>
                                    </div>
                                    <div class="post-info">
                                        <a
                                            href="{{ route('ProjectDetailsPage', $project->slug) }}">{{ $project->project_title }}</a>
                                        <div class="post-meta"> {{ date('M j, Y', strtotime($project->date)) }} </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="section section-height-3 bg-color-grey m-0 border-0">
        <div class="container py-4">
            <h4 class="mb-3 text-4 text-uppercase"><strong class="font-weight-extra-bold">Related Projects</strong></h4>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                    <div class="portfolio-item">
                        <a href="portfolio-single.html">
                            <span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="{{ asset('assets/frontend/img/event/1.jpg') }}"
                                        class="img-fluid border-radius-0" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Presentation</span>
                                        <span class="thumb-info-type">Brand</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon bg-dark opacity-8"><i
                                                class="fas fa-plus"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                    <div class="portfolio-item">
                        <a href="portfolio-single.html">
                            <span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="{{ asset('assets/frontend/img/event/2.jpg') }}"
                                        class="img-fluid border-radius-0" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Identity</span>
                                        <span class="thumb-info-type">Logo</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon bg-dark opacity-8"><i
                                                class="fas fa-plus"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                    <div class="portfolio-item">
                        <a href="portfolio-single.html">
                            <span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="{{ asset('assets/frontend/img/event/3.jpg') }}"
                                        class="img-fluid border-radius-0" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Watch Mockup</span>
                                        <span class="thumb-info-type">Brand</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon bg-dark opacity-8"><i
                                                class="fas fa-plus"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                    <div class="portfolio-item">
                        <a href="portfolio-single.html">
                            <span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="{{ asset('assets/frontend/img/event/4.jpg') }}"
                                        class="img-fluid border-radius-0" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Three Bottles</span>
                                        <span class="thumb-info-type">Logo</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon bg-dark opacity-8"><i
                                                class="fas fa-plus"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection