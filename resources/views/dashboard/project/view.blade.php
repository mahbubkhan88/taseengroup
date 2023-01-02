@extends('dashboard.master')
@section('title', 'View Project')

@section('main')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>View Project</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">View Project</li>
        </ol>
    </section>
    <!-- Content Header (Page header) -->

    <!-- Main content start -->
    <section class="content">
        <div class="row">
            <div class="col-xs-8">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">View Project</h3>
                    </div>
                    <div class="box-body">


                        <div class="img">
                            <img src="{{ (!empty('uploads/project_images/'.$project->image)) ? url('uploads/project_images/'.$project->image) : url('uploads/no_image.jpg') }}"
                                style="width: 300px; height: auto">
                        </div>

                        <div class="card-header">
                            <h3 class="card-title">Project Title: {{ $project->project_title }}</h3>
                            <h4 class="card-title">Project Name: {{ $project->project_name }}</h4>
                            <h4 class="card-title">Client Name: {{ $project->client_name }}</h4>
                            <h4 class="card-title">Category Name: {{ $project['projectCat']['name'] }}</h4>
                            <h4 class="card-title">Date: {{ \Carbon\Carbon::parse($project->date)->format('d F Y') }}
                            </h4>
                            <h4 class="card-title">Location: {{ $project->location }}</h4>
                            <h4 class="card-title">Project URL: {{ $project->project_link }}</h4>
                        </div>

                        <div class="card-body">
                            <p><strong>Description:</strong> {!! $project->description !!}</p>
                        </div>

                        <div class="card-footer">
                            <a href="{{ route('project.edit', $project->id) }}" class="btn btn-success btn-sm">
                                EDIT
                            </a>
                            <a href="{{ route('project.delete', $project->id) }}" id="delete"
                                class="btn btn-danger btn-sm">
                                DELETE
                            </a>
                            <a href="{{ route('project.list') }}" class="btn btn-warning btn-sm">
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