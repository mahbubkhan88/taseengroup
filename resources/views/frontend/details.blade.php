@extends('frontend.layouts.master')
@section('title', 'Details Information')
@section('content')

<div role="main" class="main">
    <section
        class="page-header page-header-modern page-header-background page-header-background-sm overlay overlay-color-dark overlay-show overlay-op-7"
        style="background-image: url('assets/frontend/img/page-header/news-events.jpg')">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold">{{ $blogDetails->title }}</h1>
                    <span class="sub-title">Check out our Latest News!</span>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="#">Home</a></li>
                        <li class="active">Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">
        <div class="row">
            <div class="col-lg-3 order-lg-2">
                <!-- Sidebar -->
                @include('frontend.layouts.sidebar')
                <!-- Sidebar -->
            </div>
            <div class="col-lg-9 order-lg-1">
                <div class="blog-posts single-post">
                    <article class="post post-large blog-single-post border-0 m-0 p-0">
                        <div class="post-image ml-0">
                            <img src="{{ (!empty('uploads/blog_images/'.$blogDetails->image)) ? url('uploads/blog_images/'.$blogDetails->image) : url('uploads/no_image.jpg') }}"
                                class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0 img-size"
                                alt="{{ $blogDetails->title }}" />

                        </div>
                        <div class="post-content ml-0">
                            <h2 class="font-weight-bold">{{ $blogDetails->title }}</h2>
                            <div class="post-meta">
                                <span><i class="far fa-clock"></i>
                                    {{date('D: d F, Y', strtotime($blogDetails->created_at));  }} </span>
                                <span><i class="far fa-user"></i> {{ $blogDetails->user->name }} </span>
                                <span><i class="far fa-folder"></i>
                                    {{ $blogDetails['categories']['name'] }}
                                </span>
                                <span><i class="far fa-folder"></i>
                                    @foreach ($blogDetails->tags as $tag)
                                    <span class="label label-success dash-tags">
                                        {{ $tag->name }}
                                    </span>
                                    @endforeach
                                </span>
                            </div>

                            <p>{!! $blogDetails->description !!}</p>

                            <div class="post-block mt-5 post-share">
                                <h4 class="mb-3">Share this Post</h4>
                                <div class="addthis_toolbox addthis_default_style ">
                                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                    <a class="addthis_button_tweet"></a>
                                    <a class="addthis_button_pinterest_pinit"></a>
                                    <a class="addthis_counter addthis_pill_style"></a>
                                </div>
                                <script type="text/javascript" src="#"></script>
                            </div>

                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection