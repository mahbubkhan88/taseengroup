@extends('dashboard.master')
@section('title', 'Admin Profile')

@section('main')



<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Admin Profile</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Admin Profile</li>
        </ol>
    </section>
    <!-- Content Header (Page header) -->

    <!-- Main content start -->
    <section class="content">
        <div class="row">
            <div class="col-md-4">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle"
                            src="{{ (!empty($adminData->image)) ? url('uploads/admin_images/'.$adminData->image) : url('uploads/no_image.jpg') }}"
                            alt="User profile picture">

                        <h3 class="profile-username text-center">{{ $adminData->name }}</h3>

                        <p class="text-muted text-center">Member since
                            {{ date('M d, Y', strtotime($adminData->created_at)) }}
                        </p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Name</b> <a class="pull-right">{{ $adminData->email }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Email</b> <a class="pull-right">{{ $adminData->name }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Username</b> <a class="pull-right">{{ $adminData->username }}</a>
                            </li>
                        </ul>

                        <a href="{{ route('edit.profile') }}" class="btn btn-primary btn-block"><b>Change Profile
                                Information</b></a>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- Main content end -->
</div>



@endsection