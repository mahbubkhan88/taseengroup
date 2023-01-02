@extends('dashboard.master')
@section('title', 'View Client Feedback')

@section('main')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>View Client Feedback</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">View Client Feedback</li>
        </ol>
    </section>
    <!-- Content Header (Page header) -->

    <!-- Main content start -->
    <section class="content">
        <div class="row">
            <div class="col-xs-6">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">View Client Feedback</h3>
                    </div>
                    <div class="box-body">


                        <div class="img">
                            <img src="{{ (!empty('uploads/client_feedback_images/'.$comment->image)) ? url('uploads/client_feedback_images/'.$comment->image) : url('uploads/no_image.jpg') }}"
                                style="width: 300px; height: auto">
                        </div>

                        <div class="card-header">
                            <h3 class="card-title">Client Name: {{ $comment->client_name }}</h3>
                        </div>

                        <div class="card-header">
                            <h3 class="card-title">Client Designation: {{ $comment->designation }}</h3>
                        </div>

                        <div class="card-body">
                            <p>Comment: {!! $comment->comment !!}</p>
                        </div>

                        <div class="card-footer">
                            <a href="{{ route('client_feedback.edit', $comment->id) }}" class="btn btn-success btn-sm">
                                EDIT
                            </a>
                            <a href="{{ route('client_feedback.delete', $comment->id) }}" id="delete"
                                class="btn btn-danger btn-sm">
                                DELETE
                            </a>
                            <a href="{{ route('client_feedback.list') }}" class="btn btn-warning btn-sm">
                                BACK
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content end -->
</div>


@endsection