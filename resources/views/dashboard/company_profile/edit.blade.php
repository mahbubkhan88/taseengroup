@extends('dashboard.master')
@section('title', 'Edit Company Profile')

@section('main')

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Company Profile</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Company Profile</li>
        </ol>
    </section>
    <!-- Content Header (Page header) -->

    <!-- Main content start -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Company Profile</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('company_profile.update') }}" enctype="multipart/form-data"
                        class="form-horizontal">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="company_name">Company Name</label>
                                            <input type="text" name="company_name" value="{{ $data->company_name }}"
                                                id="company_name" placeholder="Company Name" class="form-control">
                                            @error('company_name')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="company_business">Company Business</label>
                                            <input type="text" name="company_business"
                                                value="{{ $data->company_business }}" id="company_business"
                                                placeholder="Company Business" class="form-control">
                                            @error('company_business')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="company_type">Company Type</label>
                                            <input type="text" name="company_type" value="{{ $data->company_type }}"
                                                id="company_type" placeholder="Company Type" class="form-control">
                                            @error('company_type')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="company_start_date">Start Date</label>
                                            <input type="text" name="company_start_date"
                                                value="{{ $data->company_start_date }}" id="company_start_date"
                                                placeholder="Start Date" class="form-control">
                                            @error('company_start_date')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="employee_number">Number of Employee</label>
                                            <input type="text" name="employee_number"
                                                value="{{ $data->employee_number }}" id="employee_number"
                                                placeholder="Number of Employee" class="form-control">
                                            @error('employee_number')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="year_end">Year End</label>
                                            <input type="text" name="year_end" value="{{ $data->year_end }}"
                                                id="year_end" placeholder="Year End" class="form-control">
                                            @error('year_end')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="video_link">Video Link</label>
                                            <input type="text" name="video_link" value="{{ $data->video_link }}"
                                                id="video_link" placeholder="Video Link" class="form-control">
                                            @error('video_link')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="home_description">Home Description</label>
                                    <textarea class="textarea" name="home_description" id="home_description"
                                        placeholder="Home Description"
                                        style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                    {{ $data->home_description }}
                                    </textarea>
                                    @error('home_description')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="page_description">Profile Page Description</label>
                                    <textarea class="textarea" name="page_description" id="page_description"
                                        placeholder="Profile Page Description"
                                        style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                    {{ $data->page_description }}
                                    </textarea>
                                    @error('page_description')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" id="image" placeholder="Image" class="form-control">
                                    @error('image')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="showImage">Show Image</label>
                                    <img src="{{ (!empty($data->image)) ? url('uploads/company_profile_images/'.$data->image) : url('uploads/no_image.jpg') }}"
                                        id="showImage" class="img-thumbnail" width="150">
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info btn-sm">UPDATE</button>
                            <a href="{{ route('company_profile.view') }}" class="btn btn-warning btn-sm">
                                BACK
                            </a>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- Main content end -->
</div>

<script>
$(function() {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
})
</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#image').change(function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#showImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
});
</script>


@endsection