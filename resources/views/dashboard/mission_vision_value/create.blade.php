@extends('dashboard.master')
@section('title', 'Add Mission Vision & Value')

@section('main')

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Add Mission Vision & Value</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Add Mission Vision & Value</li>
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
                        <h3 class="box-title">Add Mission Vision & Value</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('mission_vision_value.store') }}" enctype="multipart/form-data"
                        class="form-horizontal">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="title" class="col-sm-1 control-label">Title</label>
                                <div class="col-sm-11">
                                    <input type="text" name="title" value="" id="title" placeholder="Title"
                                        class="form-control">
                                    @error('title')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description" class="col-sm-1 control-label">Description</label>
                                <div class="col-sm-11">
                                    <textarea class="textarea" name="description" value="" id="description"
                                        placeholder="Description"
                                        style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                    </textarea>
                                    @error('description')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="image" class="col-sm-1 control-label">Image</label>
                                <div class="col-sm-11">
                                    <input type="file" name="image" value="" id="image" placeholder="Image"
                                        class="form-control">
                                    @error('image')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="showImage" class="col-sm-1 control-label">Show Image</label>
                                <div class="col-sm-11">
                                    <img id="showImage" src="" class="img-thumbnail" width="150">
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info btn-sm">ADD</button>
                            <a href="{{ route('mission_vision_value.list') }}" class="btn btn-warning btn-sm">
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