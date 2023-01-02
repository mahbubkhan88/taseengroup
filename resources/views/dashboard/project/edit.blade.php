@extends('dashboard.master')
@section('title', 'Edit Project')

@section('main')

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Project</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Project</li>
        </ol>
    </section>
    <!-- Content Header (Page header) -->

    <!-- Main content start -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Project</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('project.update', $project->id) }}"
                        enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        <div class="box-body">
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="project_title">Project Title</label>
                                            <input type="text" name="project_title"
                                                value="{{ $project->project_title }}" id="project_title"
                                                placeholder="Project Title" class="form-control">
                                            @error('project_title')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="project_name">Project Name</label>
                                            <input type="text" name="project_name" value="{{ $project->project_name }}"
                                                id="project_name" placeholder="Project Name" class="form-control">
                                            @error('project_name')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="client_name">Client Name</label>
                                            <input type="text" name="client_name" value="{{ $project->client_name }}"
                                                id="client_name" placeholder="Client Name" class="form-control">
                                            @error('client_name')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="project_category_id">Project Category</label>
                                            <select name="project_category_id" class="form-control">
                                                <option selected="">Please Select a Category</option>
                                                @foreach ($categories as $cat)
                                                <option value="{{ $cat->id }}"
                                                    {{ $cat->id == $project->project_category_id ? 'selected' : '' }}>
                                                    {{ $cat->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="date">Date</label>
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" name="date" value="{{ $project->date }}"
                                                    id="datepicker" class="form-control">
                                                @error('date')
                                                <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="location">Location</label>
                                            <input type="text" name="location" value="{{ $project->location }}"
                                                id="location" placeholder="Location" class="form-control">
                                            @error('location')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="project_link">Project URL</label>
                                            <input type="text" name="project_link" value="{{ $project->project_link }}"
                                                id="project_link" placeholder="Project URL" class="form-control">
                                            @error('project_link')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" name="image" id="image" placeholder="Image"
                                                class="form-control">
                                            @error('image')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="showImage">Show Image</label>
                                            <div class="col-sm-11">
                                                <img id="showImage"
                                                    src="{{ (!empty('uploads/project_images/'.$project->image)) ? url('uploads/project_images/'.$project->image) : url('uploads/no_image.jpg') }}"
                                                    class="img-thumbnail" width="150">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="textarea" name="description" value="" id="description"
                                                placeholder="Description"
                                                style="width: 100%; height: 250px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                            {{ $project->description }}
                                            </textarea>
                                            @error('description')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-sm btn-info">UPDATE</button>
                            <a href="{{ route('project.list') }}" class="btn btn-danger btn-sm">BACK</a>
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