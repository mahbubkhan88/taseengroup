@extends('dashboard.master')
@section('title', 'Project List')

@section('main')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Project List</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Project List</li>
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
                            <h3 class="box-title">Project List</h3>
                        </div>
                    </div>

                    <div class="col-md-1">
                        <a href="{{ route('project.create') }}" class="btn btn-sm btn-danger mt5">ADD</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th width="15%">Title</th>
                                    <th width="15%">Category</th>
                                    <th width="10%">Client</th>
                                    <th width="10%">Image</th>
                                    <th width="35%">Description</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach($projects as $project)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $project->project_title }}</td>
                                    <td>{{ $project['projectCat']['name'] }}</td>
                                    <td>{{ $project->client_name }}</td>
                                    <td>
                                        <img src="{{ (!empty('uploads/project_images/'.$project->image)) ? url('uploads/project_images/'.$project->image) : url('uploads/no_image.jpg') }}"
                                            style="width: 150px; height: auto">
                                    </td>
                                    <td>
                                        {!! substr($project->description, 0, 200) !!}.....
                                        <a href="{{ route('project.view', $project->id) }}">Read More</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('project.edit', $project->id) }}"
                                            class="btn btn-success btn-sm"><span
                                                class="glyphicon glyphicon-edit"></span></a>

                                        <a href="{{ route('project.view', $project->slug) }}"
                                            class="btn btn-info btn-sm"><span
                                                class="glyphicon glyphicon-eye-open"></span></a>

                                        <a href="{{ route('project.delete', $project->id) }}" id="delete"
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