@extends('dashboard.master')
@section('title', 'View Company Profile')

@section('main')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>View Company Profile</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">View Company Profile</li>
        </ol>
    </section>
    <!-- Content Header (Page header) -->

    <!-- Main content start -->
    <section class="content">
        <div class="row">
            <div class="col-xs-10">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">View Company Profile</h3>
                    </div>
                    <div class="box-body">

                        <img class=""
                            src="{{ (!empty($data->image)) ? url('uploads/company_profile_images/'.$data->image) : url('uploads/no_image.jpg') }}"
                            alt="About Image" style="width: 200px; height: auto">

                        <br>
                        <br>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Home Page Description:</label>
                                    {!! $data->home_description !!}
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Profile Page Description:</label>
                                    {!! $data->page_description !!}
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Company Name:</label>
                                    {{ $data->company_name }}
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Company Business:</label>
                                    {{ $data->company_business }}
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Company Type:</label>
                                    {{ $data->company_type }}
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Company Start Date:</label>
                                    {{ $data->company_start_date }}
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Number of Employee:</label>
                                    {{ $data->employee_number }}
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Year End:</label>
                                    {{ $data->year_end }}
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Video Link:</label>
                                    {{ $data->video_link }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="edit-button">
                        <div class="box-footer">
                            <a href="{{ route('company_profile.edit') }}" class="btn btn-danger btn-sm"><b>EDIT</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content end -->
</div>


@endsection