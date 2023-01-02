@extends('dashboard.master')
@section('title', 'Tag List')

@section('main')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Tag List</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tag List</li>
        </ol>
    </section>
    <!-- Content Header (Page header) -->

    <!-- Main content start -->
    <section class="content">
        <div class="row">
            <div class="col-xs-8">
                <div class="box">
                    <div class="col-md-2">
                        <div class="box-header">
                            <h3 class="box-title">Tag List</h3>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <a href="{{ route('blog_tag.create') }}" class="btn btn-sm btn-danger mt5">ADD</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach($tags as $tag)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $tag->name }} ({{ $tag->posts->count() }})</td>
                                    <td>{{ $tag->description }}</td>
                                    <td>
                                        <a href="{{ route('blog_tag.edit', $tag->id) }}"
                                            class="btn btn-success btn-sm"><span
                                                class="glyphicon glyphicon-edit"></span></a>

                                        <a href="{{ route('blog_tag.delete', $tag->id) }}" id="delete"
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