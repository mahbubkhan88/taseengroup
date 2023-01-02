@extends('dashboard.master')
@section('title', 'Edit Blog')

@section('main')

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Blog</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Blog</li>
        </ol>
    </section>
    <!-- Content Header (Page header) -->

    <!-- Main content start -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-10">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Blog</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('blog.update', $blog->id) }}" enctype="multipart/form-data"
                        class="form-horizontal">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title">Blog Title</label>
                                            <input type="text" name="title" value="{{ $blog->title }}" id="title"
                                                placeholder="Blog Title" class="form-control">
                                            @error('title')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="blog_category_id">Blog Category</label>
                                            <select name="blog_category_id" class="form-control select2">
                                                <option selected="">Please Select a Category</option>
                                                @foreach ($categories as $cat)
                                                <option value="{{ $cat->id }}"
                                                    {{ $cat->id == $blog->blog_category_id ? 'selected' : '' }}>
                                                    {{ $cat->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            @error('blog_category_id')
                                            <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="tag">Blog Tags</label>
                                            <select name="tags[]" id="tag" class="form-control select2"
                                                multiple="multiple" data-placeholder="Select Tags">
                                                @foreach($tags as $tag)
                                                <option @foreach($blog->tags as $postTag)
                                                    {{ $postTag->id == $tag->id ? 'selected' :'' }}
                                                    @endforeach
                                                    value="{{ $tag->id }}">{{ $tag->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            @error('tags')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="row">

                                <div class="col-md-6">
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

                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="showImage">Show Image</label>
                                            <div class="col-sm-11">
                                                <img id="showImage"
                                                    src="{{ (!empty('uploads/blog_images/'.$blog->image)) ? url('uploads/blog_images/'.$blog->image) : url('uploads/no_image.jpg') }}"
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
                                            {{ $blog->description }}
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
                            <button type="submit" class="btn btn-danger btn-sm">UPDATE</button>
                            <a href="{{ route('blog.list') }}" class="btn btn-info btn-sm">
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