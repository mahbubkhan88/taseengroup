@extends('dashboard.master')
@section('title', 'Add Management Message')

@section('main')

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Add Management Message</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Add Management Message</li>
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
                        <h3 class="box-title">Add Management Message</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('management_message.store') }}" enctype="multipart/form-data"
                        class="form-horizontal">
                        @csrf
                        <div class="box-body">

                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" value="" id="title" placeholder="Title"
                                        class="form-control">
                                    @error('title')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" value="" id="name" placeholder="Name"
                                        class="form-control">
                                    @error('name')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="designation" class="col-sm-2 control-label">Designation</label>
                                <div class="col-sm-10">
                                    <input type="text" name="designation" value="" id="designation"
                                        placeholder="Designation" class="form-control">
                                    @error('designation')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="facebook_link" class="col-sm-2 control-label">Facebook Link</label>
                                <div class="col-sm-10">
                                    <input type="text" name="facebook_link" value="" id="facebook_link"
                                        placeholder="Facebook Link" class="form-control">
                                    @error('facebook_link')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="twitter_link" class="col-sm-2 control-label">Twitter Link</label>
                                <div class="col-sm-10">
                                    <input type="text" name="twitter_link" value="" id="twitter_link"
                                        placeholder="Twitter Link" class="form-control">
                                    @error('twitter_link')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="linkedin_link" class="col-sm-2 control-label">Linkedin Link</label>
                                <div class="col-sm-10">
                                    <input type="text" name="linkedin_link" value="" id="linkedin_link"
                                        placeholder="Linkedin Link" class="form-control">
                                    @error('linkedin_link')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
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
                                <label for="image" class="col-sm-2 control-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" value="" id="image" placeholder="Image"
                                        class="form-control">
                                    @error('image')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="showImage" class="col-sm-2 control-label">Show Image</label>
                                <div class="col-sm-10">
                                    <img id="showImage" src="" class="img-thumbnail" width="150">
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info btn-sm">ADD</button>
                            <a href="{{ route('management_message.list') }}" class="btn btn-danger btn-sm">BACK</a>
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