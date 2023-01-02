@extends('dashboard.master')
@section('title', 'View Why Choose Us')

@section('main')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>View Why Choose Us</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">View Why Choose Us</li>
        </ol>
    </section>
    <!-- Content Header (Page header) -->

    <!-- Main content start -->
    <section class="content">
        <div class="row">
            <div class="col-xs-8">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">View Why Choose Us</h3>
                    </div>
                    <div class="box-body">


                        <img class=""
                            src="{{ (!empty($whyChoose->image)) ? url('uploads/why_choose_us_images/'.$whyChoose->image) : url('uploads/no_image.jpg') }}"
                            alt="About Image" style="width: 500px; height: auto">

                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Name:</label>
                                    {{ $whyChoose->name }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description:</label>
                                    {!! $whyChoose->description !!}
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="edit-button">
                        <div class="box-footer">
                            <a href="{{ route('why_choose_us.edit') }}" class="btn btn-info btn-sm"><b>EDIT</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content end -->
</div>


@endsection