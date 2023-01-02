@extends('frontend.layouts.master')
@section('title', 'News & Events')
@section('content')

<div role="main" class="main">
    <section
        class="page-header page-header-modern page-header-background page-header-background-sm overlay overlay-color-dark overlay-show overlay-op-7"
        style="background-image: url('assets/frontend/img/page-header/news-events.jpg')">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold">{{ $categoryWisePost->name }}</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="#">Home</a></li>
                        <li class="active">News & Events</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">
        <div class="row">

            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 order-lg-2">
                <!-- Sidebar -->
                @include('frontend.layouts.sidebar')
                <!-- Sidebar -->
            </div>

            <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12 order-lg-1">
                <div class="col">
                    <div class="blog-posts">
                        <div class="row">

                            @foreach($categoryWisePost->posts as $data)
                            <div class="col-md-4 col-lg-4">
                                <article class="post post-medium border-0 pb-0 mb-5">
                                    <div class="post-image">
                                        <a href="{{ route('NewsEventsDetailsPage', $data->slug) }}">
                                            <img src="{{ (!empty('uploads/blog_images/'.$data->image)) ? url('uploads/blog_images/'.$data->image) : url('uploads/no_image.jpg') }}"
                                                class="blog-imgs img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                alt="{{ $data->title }}" />
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2">
                                            <a href="{{ route('NewsEventsDetailsPage', $data->slug) }}">
                                                {{ $data->title }}
                                            </a>
                                        </h2>
                                        <p> {!! substr($data->description, 0, 200) !!} </p>
                                        <div class="post-meta">
                                            <span class="d-block mt-2">
                                                <a href="{{ route('NewsEventsDetailsPage', $data->slug) }}"
                                                    class="btn btn-xs btn-info text-uppercase">
                                                    Read More
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            @endforeach

                        </div>
                        <div class="row">
                            <div class="col">
                                <ul class="pagination float-right">

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

</div>

@endsection