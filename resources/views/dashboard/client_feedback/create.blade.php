@extends('dashboard.master')
@section('title', 'Add Client Feedback')

@section('main')

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Add Client Feedback</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Add Client Feedback</li>
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
                        <h3 class="box-title">Add Client Feedback</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('client_feedback.store') }}" enctype="multipart/form-data"
                        class="form-horizontal">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="client_name" class="col-sm-1 control-label">Client Name</label>
                                <div class="col-sm-11">
                                    <input type="text" name="client_name" value="" id="client_name"
                                        placeholder="Client Name" class="form-control">
                                    @error('client_name')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="designation" class="col-sm-1 control-label">Client Designation</label>
                                <div class="col-sm-11">
                                    <input type="text" name="designation" value="" id="designation"
                                        placeholder="Client Designation" class="form-control">
                                    @error('designation')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="comment" class="col-sm-1 control-label">Comment</label>
                                <div class="col-sm-11">
                                    <textarea class="textarea" name="comment" value="" id="comment"
                                        placeholder="Comment"
                                        style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                    </textarea>
                                    @error('comment')
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
                            <a href="{{ route('client_feedback.list') }}" class="btn btn-danger btn-sm">
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