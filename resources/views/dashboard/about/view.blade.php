@extends('dashboard.master')
@section('title', 'View About')

@section('main')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>View About</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">View About</li>
        </ol>
    </section>
    <!-- Content Header (Page header) -->

    <!-- Main content start -->
    <section class="content">
        <div class="row">
            <div class="col-xs-8">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">View About</h3>
                    </div>
                    <div class="box-body">


                        <img class=""
                            src="{{ (!empty($about->image)) ? url('uploads/about_images/'.$about->image) : url('uploads/no_image.jpg') }}"
                            alt="About Image" style="width: 500px; height: auto">

                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Title:</label>
                                    {{ $about->title }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Sub Title:</label>
                                    {{ $about->sub_title }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description:</label>
                                    {!! $about->description !!}
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="edit-button">
                        <div class="box-footer">
                            <a href="{{ route('about.edit') }}" class="btn btn-danger btn-sm"><b>EDIT</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content end -->
</div>


@endsection