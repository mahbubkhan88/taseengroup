@extends('dashboard.master')
@section('title', 'View Strength')

@section('main')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>View Strength</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">View Strength</li>
        </ol>
    </section>
    <!-- Content Header (Page header) -->

    <!-- Main content start -->
    <section class="content">
        <div class="row">
            <div class="col-xs-8">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">View Strength</h3>
                    </div>
                    <div class="box-body">


                        <img class=""
                            src="{{ (!empty($strength->image)) ? url('uploads/strength_images/'.$strength->image) : url('uploads/no_image.jpg') }}"
                            alt="About Image" style="width: 500px; height: auto">

                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Name:</label>
                                    {{ $strength->name }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description:</label>
                                    {!! $strength->description !!}
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="edit-button">
                        <div class="box-footer">
                            <a href="{{ route('strength.edit') }}" class="btn btn-danger btn-sm"><b>EDIT</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content end -->
</div>


@endsection