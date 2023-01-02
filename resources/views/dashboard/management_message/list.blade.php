@extends('dashboard.master')
@section('title', 'Management Message List')

@section('main')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Management Message List</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Management Message List</li>
        </ol>
    </section>
    <!-- Content Header (Page header) -->

    <!-- Main content start -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="col-md-2">
                        <div class="box-header">
                            <h3 class="box-title">Management Message List</h3>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <a href="{{ route('management_message.create') }}" class="btn btn-sm btn-danger mt5">ADD</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th width="10%">Name</th>
                                    <th width="10%">Designation</th>
                                    <th width="10%">Image</th>
                                    <th width="55%">Description</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach($messages as $msg)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $msg->name }}</td>
                                    <td>{{ $msg->designation }}</td>
                                    <td>
                                        <img src="{{ (!empty('uploads/management_message_images/'.$msg->image)) ? url('uploads/management_message_images/'.$msg->image) : url('uploads/no_image.jpg') }}"
                                            style="width: 150px; height: auto">
                                    </td>
                                    <td>{!! Str::limit("$msg->description", 500, ' ...') !!}
                                    </td>
                                    <td>
                                        <a href="{{ route('management_message.edit', $msg->id) }}"
                                            class="btn btn-success btn-sm"><span
                                                class="glyphicon glyphicon-edit"></span></a>

                                        <a href="{{ route('management_message.view', $msg->id) }}"
                                            class="btn btn-info btn-sm"><span
                                                class="glyphicon glyphicon-eye-open"></span></a>

                                        <a href="{{ route('management_message.delete', $msg->id) }}" id="delete"
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