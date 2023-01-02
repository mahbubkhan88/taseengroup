@extends('dashboard.master')
@section('title', 'Edit Client')

@section('main')

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Client</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Client</li>
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
                        <h3 class="box-title">Edit Client</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('client.update', $client->id) }}" enctype="multipart/form-data"
                        class="form-horizontal">
                        @csrf
                        <input type="hidden" id="id" name="id" value="{{ $client->id }}">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name" class="col-sm-1 control-label">Organization Name</label>
                                <div class="col-sm-11">
                                    <input type="text" name="name" value="{{ $client->name }}" id="name"
                                        placeholder="Organization Name" class="form-control">
                                    @error('name')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="logo" class="col-sm-1 control-label">Logo</label>
                                <div class="col-sm-11">
                                    <input type="file" name="logo" value="" id="logo" placeholder="Logo"
                                        class="form-control">
                                    @error('logo')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="showImage" class="col-sm-1 control-label">Show Logo</label>
                                <div class="col-sm-11">
                                    <img id="showImage"
                                        src="{{ (!empty('uploads/client_images/'.$client->logo)) ? url('uploads/client_images/'.$client->logo) : url('uploads/no_image.jpg') }}"
                                        class="img-thumbnail" width="150">
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info btn-sm">UPDATE</button>
                            <a href="{{ route('client.list') }}" class="btn btn-danger btn-sm">
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
    $('#logo').change(function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#showImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
});
</script>

@endsection