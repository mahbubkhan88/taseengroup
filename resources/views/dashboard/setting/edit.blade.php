@extends('dashboard.master')
@section('title', 'Edit Setting')

@section('main')

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Setting</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Setting</li>
        </ol>
    </section>
    <!-- Content Header (Page header) -->

    <!-- Main content start -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Setting</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('setting.update') }}" enctype="multipart/form-data"
                        class="form-horizontal">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="telephone">Telephone</label>
                                            <input type="text" name="telephone" value="{{ $setting->telephone }}"
                                                id="telephone" placeholder="Telephone" class="form-control">
                                            @error('telephone')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="phone_two">Mobile Two</label>
                                            <input type="text" name="phone_two" value="{{ $setting->phone_two }}"
                                                id="phone_two" placeholder="Mobile Two" class="form-control">
                                            @error('phone_two')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="registered_office">Registered Office</label>
                                            <input type="text" name="registered_office"
                                                value="{{ $setting->registered_office }}" id="registered_office"
                                                placeholder="Registered Office" class="form-control">
                                            @error('registered_office')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="youtube_link">Youtube Link</label>
                                            <input type="text" name="youtube_link" value="{{ $setting->youtube_link }}"
                                                id="youtube_link" placeholder="Youtube Link" class="form-control">
                                            @error('youtube_link')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="logo">Logo</label>
                                            <input type="file" name="logo" id="logo" placeholder="Logo"
                                                class="form-control">
                                            @error('logo')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fax">Fax</label>
                                            <input type="text" name="fax" value="{{ $setting->fax }}" id="fax"
                                                placeholder="Fax" class="form-control">
                                            @error('fax')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email_address">Email Address</label>
                                            <input type="email" name="email_address"
                                                value="{{ $setting->email_address }}" id="email_address"
                                                placeholder="Email Address" class="form-control">
                                            @error('email_address')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="facebook_link">Facebook Link</label>
                                            <input type="text" name="facebook_link"
                                                value="{{ $setting->facebook_link }}" id="facebook_link"
                                                placeholder="Facebook Link" class="form-control">
                                            @error('facebook_link')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="instagram_link">Instagram Link</label>
                                            <input type="text" name="instagram_link"
                                                value="{{ $setting->instagram_link }}" id="instagram_link"
                                                placeholder="Instagram Link" class="form-control">
                                            @error('instagram_link')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="showImage">Show Logo</label>
                                            <img src="{{ (!empty($setting->logo)) ? url('uploads/setting_images/'.$setting->logo) : url('uploads/no_image.jpg') }}"
                                                id="showImage" class="img-thumbnail" width="150">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="phone_one">Mobile One</label>
                                            <input type="text" name="phone_one" value="{{ $setting->phone_one }}"
                                                id="phone_one" placeholder="Mobile One" class="form-control">
                                            @error('phone_one')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="corporate_office">Corporate Office</label>
                                            <input type="text" name="corporate_office"
                                                value="{{ $setting->corporate_office }}" id="corporate_office"
                                                placeholder="Corporate Office" class="form-control">
                                            @error('corporate_office')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="linkedin_link">Linkedin Link</label>
                                            <input type="text" name="linkedin_link"
                                                value="{{ $setting->linkedin_link }}" id="linkedin_link"
                                                placeholder="Linkedin Link" class="form-control">
                                            @error('linkedin_link')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="footer_copyright">Footer Copyright</label>
                                            <input type="text" name="footer_copyright"
                                                value="{{ $setting->footer_copyright }}" id="footer_copyright"
                                                placeholder="Footer Copyright" class="form-control">
                                            @error('footer_copyright')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="textarea" name="description" id="description"
                                                placeholder="Description"
                                                style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                            {{ $setting->description }}
                                            </textarea>
                                            @error('description')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info btn-sm">UPDATE</button>
                            <a href="{{ route('setting.view') }}" class="btn btn-danger btn-sm">BACK</a>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- Main content end -->
</div>

<script>
$(function() {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
})
</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#logo').change(function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#showImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
});
</script>


@endsection