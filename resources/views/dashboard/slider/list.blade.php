@extends('dashboard.master')
@section('title', 'Slider List')

@section('main')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Slider List</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Slider List</li>
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
                            <h3 class="box-title">Slider List</h3>
                        </div>
                    </div>

                    <div class="col-md-1">
                        <a href="{{ route('slider.create') }}" class="btn btn-sm btn-danger mt5">ADD</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach($sliders as $slider)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $slider->title }}</td>
                                    <td>
                                        <img src="{{ (!empty('uploads/slider_images/'.$slider->image)) ? url('uploads/slider_images/'.$slider->image) : url('uploads/no_image.jpg') }}"
                                            style="width: 150px; height: auto">
                                    </td>
                                    <td>{!! $slider->description !!}</td>
                                    <td>
                                        <a href="{{ route('slider.edit', $slider->id) }}"
                                            class="btn btn-success btn-sm"><span
                                                class="glyphicon glyphicon-edit"></span></a>

                                        <a href="{{ route('slider.view', $slider->id) }}"
                                            class="btn btn-info btn-sm"><span
                                                class="glyphicon glyphicon-eye-open"></span></a>

                                        <a href="{{ route('slider.delete', $slider->id) }}" id="delete"
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