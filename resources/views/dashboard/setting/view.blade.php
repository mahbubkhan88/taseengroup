@extends('dashboard.master')
@section('title', 'View Setting')

@section('main')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>View Setting</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">View Setting</li>
        </ol>
    </section>
    <!-- Content Header (Page header) -->

    <!-- Main content start -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">View Setting</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Telephone:</label>
                                        {{ $setting->telephone }}
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mobile Two:</label>
                                        {{ $setting->phone_two }}
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Registered Office:</label>
                                        {{ $setting->registered_office }}
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Youtube Link:</label>
                                        {{ $setting->youtube_link }}
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Logo:</label>
                                        <img class=""
                                            src="{{ (!empty($setting->logo)) ? url('uploads/setting_images/'.$setting->logo) : url('uploads/no_image.jpg') }}"
                                            alt="Setting Image" style="width: 100px; height: auto">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Fax:</label>
                                        {{ $setting->fax }}
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email Address:</label>
                                        {{ $setting->email_address }}
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Facebook Link:</label>
                                        {{ $setting->facebook_link }}
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Instagram Link:</label>
                                        {{ $setting->instagram_link }}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mobile One:</label>
                                        {{ $setting->phone_one }}
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Corporate Office:</label>
                                        {{ $setting->corporate_office }}
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Linkedin Link:</label>
                                        {{ $setting->linkedin_link }}
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Footer Copyright:</label>
                                        {{ $setting->footer_copyright }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        {!! $setting->description !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="{{ route('setting.edit') }}" class="btn btn-danger btn-sm">EDIT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content end -->
</div>


@endsection