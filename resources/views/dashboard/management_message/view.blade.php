@extends('dashboard.master')
@section('title', 'View Management Message')

@section('main')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>View Management Message</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">View Management Message</li>
        </ol>
    </section>
    <!-- Content Header (Page header) -->

    <!-- Main content start -->
    <section class="content">
        <div class="row">
            <div class="col-xs-10">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">View Management Message</h3>
                    </div>
                    <div class="box-body">

                        <div class="img">
                            <img src="{{ (!empty('uploads/management_message_images/'.$message->image)) ? url('uploads/management_message_images/'.$message->image) : url('uploads/no_image.jpg') }}"
                                style="width: 150px; height: auto">
                        </div>

                        <div class="card-header">
                            <h3 class="card-title">{{ $message->title }}</h3>
                        </div>

                        <p>{!! $message->description !!}</p>

                        <br>
                        <br>

                        <P>{{ $message->name }}</P>
                        <P>{{ $message->designation }}, Taseen Group</P>

                        <a href="{{ $message->facebook_link }}" target="_blank">Facebook</a>
                        <a href="{{ $message->twitter_link }}" target="_blank">Twitter</a>
                        <a href="{{ $message->linkedin_link }}" target="_blank">Linkedin</a>

                        <p>
                            Facebook Link: {{ $message->facebook_link }} || Twitter Link: {{ $message->twitter_link }}
                            ||
                            Linkedin Link: {{ $message->linkedin_link }}
                        </p>

                        <br>
                        <br>

                        <div class="card-footer">
                            <a href="{{ route('management_message.edit', $message->id) }}"
                                class="btn btn-success btn-sm">
                                EDIT
                            </a>
                            <a href="{{ route('management_message.delete', $message->id) }}" id="delete"
                                class="btn btn-danger btn-sm">
                                DELTE
                            </a>
                            <a href="{{ route('management_message.list') }}" class="btn btn-warning btn-sm">
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