@extends('dashboard.master')
@section('title', 'Client Feedback List')

@section('main')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Client Feedback List</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Client Feedback List</li>
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
                            <h3 class="box-title">Client Feedback List</h3>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <a href="{{ route('client_feedback.create') }}" class="btn btn-sm btn-danger mt5">ADD</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Image</th>
                                    <th>Comment</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach($clientFeedback as $comment)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $comment->client_name }}</td>
                                    <td>{{ $comment->designation }}</td>
                                    <td>
                                        <img src="{{ (!empty('uploads/client_feedback_images/'.$comment->image)) ? url('uploads/client_feedback_images/'.$comment->image) : url('uploads/no_image.jpg') }}"
                                            style="width: 100px; height: auto">
                                    </td>
                                    <td>{!! $comment->comment !!}</td>
                                    <td>
                                        <a href="{{ route('client_feedback.edit', $comment->id) }}"
                                            class="btn btn-success btn-sm"><span
                                                class="glyphicon glyphicon-edit"></span></a>

                                        <a href="{{ route('client_feedback.view', $comment->id) }}"
                                            class="btn btn-info btn-sm"><span
                                                class="glyphicon glyphicon-eye-open"></span></a>

                                        <a href="{{ route('client_feedback.delete', $comment->id) }}" id="delete"
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