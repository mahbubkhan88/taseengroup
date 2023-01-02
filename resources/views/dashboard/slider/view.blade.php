@extends('dashboard.master')
@section('title', 'View Slider')

@section('main')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>View Slider</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">View Slider</li>
        </ol>
    </section>
    <!-- Content Header (Page header) -->

    <!-- Main content start -->
    <section class="content">
        <div class="row">
            <div class="col-xs-8">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">View Slider</h3>
                    </div>
                    <div class="box-body">


                        <div class="img">
                            <img src="{{ (!empty('uploads/slider_images/'.$slider->image)) ? url('uploads/slider_images/'.$slider->image) : url('uploads/no_image.jpg') }}"
                                style="width: 600px; height: auto">
                        </div>

                        <div class="card-header">
                            <h3 class="card-title">Title: {{ $slider->title }}</h3>
                        </div>

                        <div class="card-body">
                            <p>Description: {!! $slider->description !!}</p>
                        </div>

                        <div class="card-footer">
                            <a href="{{ route('slider.edit', $slider->id) }}" class="btn btn-success btn-sm">
                                EDIT
                            </a>
                            <a href="{{ route('slider.delete', $slider->id) }}" id="delete"
                                class="btn btn-danger btn-sm">
                                DELETE
                            </a>
                            <a href="{{ route('slider.list') }}" class="btn btn-warning btn-sm">
                                BACK
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content end -->
</div>


@endsection