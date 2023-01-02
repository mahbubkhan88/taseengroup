<header class="main-header">
    <!-- Logo -->
    <a href="{{ route('dashboard') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>TG</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Taseen Group</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        @php
        $id = Auth::user()->id;
        $adminData = App\Models\User::find($id);
        @endphp

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('assets/backend/dist/img/user2-160x160.jpg') }}" class="user-image"
                            alt="User Image">
                        <span class="hidden-xs">{{ $adminData->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ asset('assets/backend/dist/img/user2-160x160.jpg') }}" class="img-circle"
                                alt="User Image">

                            <p>
                                {{ $adminData->name }}
                                <small>{{ $adminData->username }}</small>
                                <small>{{ $adminData->email }}</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <a href="{{ route('admin.profile') }}" class="btn btn-default btn-flat"><i
                                            class="fa fa-cog">
                                            Profile Setting</i></a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ route('change.password') }}" class="btn btn-default btn-flat">Change
                                    Password</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('admin.logout') }}" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</header>