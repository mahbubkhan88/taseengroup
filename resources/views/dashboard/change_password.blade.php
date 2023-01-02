@extends('dashboard.master')
@section('title', 'Update Password')

@section('main')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Update Password</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Update Password</li>
        </ol>
    </section>
    <!-- Content Header (Page header) -->

    <!-- Main content start -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Update Password</h3>

                        <!-- Erro message -->
                        @if(count($errors))
                        @foreach($errors->all() as $error)
                        <p class="alert alert-danger alert-dismissible show">
                            {{ $error }}
                        </p>
                        @endforeach
                        @endif
                        <!-- Erro message -->

                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('update.password') }}" class="form-horizontal">
                        @csrf
                        <div class="box-body">

                            <div class="form-group">
                                <label for="old_password" class="col-sm-2 control-label">Old Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="old_password" id="old_password"
                                        placeholder="Old Password" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="new_password" class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="password" name="new_password" id="new_password"
                                        placeholder="New Password" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="confirm_password" class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="password" name="confirm_password" id="confirm_password"
                                        placeholder="Confirm Password" class="form-control">
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-danger">Update Password</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- Main content end -->
</div>


@endsection