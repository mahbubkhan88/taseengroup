@extends('dashboard.master')
@section('title', 'Category List')

@section('main')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Category List</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Category List</li>
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
                            <h3 class="box-title">Category List</h3>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <a href="{{ route('project_category.create') }}" class="btn btn-sm btn-danger mt5">ADD</a>
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
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td>
                                        <a href="{{ route('project_category.edit', $category->id) }}"
                                            class="btn btn-success btn-sm"><span
                                                class="glyphicon glyphicon-edit"></span></a>

                                        <a href="{{ route('project_category.delete', $category->id) }}" id="delete"
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