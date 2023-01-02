@extends('dashboard.master')
@section('title', 'View Blog')

@section('main')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>View Blog</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">View Blog</li>
        </ol>
    </section>
    <!-- Content Header (Page header) -->

    <!-- Main content start -->
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-info">
                    <div class="box-body">
                        <h3 class="card-title">{{ $blog->title }}</h3>
                        <p>{!! $blog->description !!}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <!-- Button -->
                <a href="{{ route('blog.list') }}" class="btn btn-danger btn-sm">
                    BACK
                </a>

                <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-success btn-sm">
                    EDIT
                </a>
                <br><br>
                <!-- Button -->

                <!-- Author -->
                <div class="box box-info box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Author</h3>
                    </div>
                    <div class="box-body">
                        <div class="user-block">
                            <span class="username">Posted by: {{ $blog->user->name }}</span>
                            <span class="description">Blog Published -
                                {{date('D: d F, Y', strtotime($blog->created_at));  }}</span>
                        </div>
                    </div>
                </div>
                <!-- Author -->

                <!-- Category -->
                <div class="box box-success box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Blog Category</h3>
                    </div>
                    <div class="box-body">
                        {{ $blog['categories']['name'] }}
                    </div>
                </div>
                <!-- Category -->

                <!-- Tags -->
                <div class="box box-warning box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Blog Tags</h3>
                    </div>
                    <div class="box-body">
                        @foreach ($blog->tags as $tag)
                        <span class="label label-success dash-tags">{{ $tag->name }}</span>
                        @endforeach
                    </div>
                </div>
                <!-- Tags -->

                <!-- Image -->
                <div class="box box-danger box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Blog Image</h3>
                    </div>
                    <div class="box-body">
                        <img class="img-responsive pad blog-img-details"
                            src="{{ (!empty('uploads/blog_images/'.$blog->image)) ? url('uploads/blog_images/'.$blog->image) : url('uploads/no_image.jpg') }}"
                            alt="{{ $blog->title }}">
                    </div>
                </div>
                <!-- Image -->
            </div>
        </div>
    </section>
    <!-- Main content end -->
</div>


@endsection