@extends('dashboard.master')
@section('title', 'Blog List')

@section('main')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Blog List</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Blog List</li>
        </ol>
    </section>
    <!-- Content Header (Page header) -->

    <!-- Main content start -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="col-md-1">
                        <div class="box-header">
                            <h3 class="box-title">Blog List</h3>
                        </div>
                    </div>

                    <div class="col-md-1">
                        <a href="{{ route('blog.create') }}" class="btn btn-sm btn-danger mt5">ADD</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th width="10%">User</th>
                                    <th width="15%">Title</th>
                                    <th width="10%">Category</th>
                                    <th width="10%">Tags</th>
                                    <th width="10%">Image</th>
                                    <th width="30%">Description</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach($blogs as $blog)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $blog->user->username }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->categories->name }}</td>
                                    <td>
                                        @foreach ($blog->tags as $tag)<span
                                            class="label label-success dash-tags">{{ $tag->name }}</span>
                                        @endforeach</td>
                                    <td>
                                        <img class="blog-img"
                                            src="{{ (!empty('uploads/blog_images/'.$blog->image)) ? url('uploads/blog_images/'.$blog->image) : url('uploads/no_image.jpg') }}">
                                    </td>
                                    <td>
                                        {!! substr($blog->description, 0, 200) !!}....
                                    </td>
                                    <td>
                                        <a href="{{ route('blog.edit', $blog->id) }}"
                                            class="btn btn-success btn-sm"><span
                                                class="glyphicon glyphicon-edit"></span></a>

                                        <a href="{{ route('blog.view', $blog->slug) }}"
                                            class="btn btn-info btn-sm"><span
                                                class="glyphicon glyphicon-eye-open"></span></a>

                                        <a href="{{ route('blog.delete', $blog->id) }}" id="delete"
                                            class="btn btn-danger btn-sm"><span
                                                class="glyphicon glyphicon-trash"></span></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- Main content end -->
</div>


<script type="text/javascript">
$(function() {
    $('#example1').DataTable()
    $('#example1').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
    })
})
</script>


@endsection