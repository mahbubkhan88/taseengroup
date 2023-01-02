@php
$id = Auth::user()->id;
$adminData = App\Models\User::find($id);
@endphp

<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('assets/backend/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ $adminData->name }}</p>
                <i class="fa fa-circle text-success"></i> {{ $adminData->username }}
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>

            <li class="active treeview">
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>

            <!-- Menu Start -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Home Page Setting</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <!-- Slider Menu -->
                    <li class="active"><a href="{{ route('slider.list') }}"><i class="fa fa-circle-o"></i> Slider
                            List</a>
                    </li>
                    <li class="active"><a href="{{ route('slider.create') }}"><i class="fa fa-circle-o"></i> Add
                            Slider</a>
                    </li>
                    <!-- Slider Menu -->
                    <hr class="t_b_pdding">
                    <!-- About Menu -->
                    <li class="active"><a href="{{ route('about.view') }}"><i class="fa fa-circle-o"></i> About
                            Page</a>
                    </li>
                    <!-- About Menu -->
                    <hr class="t_b_pdding">
                    <!-- Company Menu -->
                    <li class="active"><a href=""><i class="fa fa-circle-o"></i>
                            Company List</a>
                    </li>
                    <li class="active"><a href=""><i class="fa fa-circle-o"></i>
                            Add Company</a>
                    </li>
                    <!-- Company Menu -->
                    <hr class="t_b_pdding">
                    <!-- Testimonial Menu -->
                    <li class="active"><a href="{{ route('client_feedback.list') }}"><i class="fa fa-circle-o"></i>
                            Testimonial List</a>
                    </li>
                    <li class="active"><a href="{{ route('client_feedback.create') }}"><i class="fa fa-circle-o"></i>
                            Add Testimonial</a>
                    </li>
                    <!-- Testimonial Menu -->
                    <hr class="t_b_pdding">
                    <!-- Blog Menu -->
                    <li class="active"><a href="{{ route('blog.list') }}"><i class="fa fa-circle-o"></i>
                            Blog List</a>
                    </li>
                    <li class="active"><a href="{{ route('blog.create') }}"><i class="fa fa-circle-o"></i>
                            Add Blog</a>
                    </li>
                    <!-- Blog Menu -->
                    <hr class="t_b_pdding">
                    <!-- Client Menu -->
                    <li class="active"><a href="{{ route('client.list') }}"><i class="fa fa-circle-o"></i>
                            Client List</a>
                    </li>
                    <li class="active"><a href="{{ route('client.create') }}"><i class="fa fa-circle-o"></i>
                            Add Feedback</a>
                    </li>
                    <!-- Client Menu -->
                </ul>
            </li>
            <hr class="t_b_pdding">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>About Page Setting</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <!-- Company Profile Menu -->
                    <li class="active"><a href="{{ route('company_profile.view') }}"><i class="fa fa-circle-o"></i>
                            Company Profile</a>
                    </li>
                    <!-- Company Profile Menu -->
                    <hr class="t_b_pdding">
                    <!-- Mission Vision & Value Menu -->
                    <li class="active"><a href="{{ route('mission_vision_value.list') }}"><i class="fa fa-circle-o"></i>
                            Mission Vission Value List</a>
                    </li>
                    <!-- Mission Vision & Value Menu -->
                    <hr class="t_b_pdding">
                    <!-- Strength menu -->
                    <li class="active"><a href="{{ route('strength.view') }}"><i class="fa fa-circle-o"></i>
                            Our Strength</a>
                    </li>
                    <!-- Strength menu -->
                    <hr class="t_b_pdding">
                    <!-- Why Choose -->
                    <li class="active"><a href="{{ route('why_choose_us.view') }}"><i class="fa fa-circle-o"></i>
                            Why Choose Us</a>
                    </li>
                    <!-- Why Choose -->
                    <hr class="t_b_pdding">
                    <!-- Counter Menu -->
                    <li class="active"><a href="{{ route('counter.list') }}"><i class="fa fa-circle-o"></i>
                            Counter List</a>
                    </li>
                    <!-- Counter Menu -->
                    <hr class="t_b_pdding">
                    <!-- CM & Vice CM Message Menu -->
                    <li class="active"><a href="{{ route('management_message.list') }}"><i class="fa fa-circle-o"></i>
                            Message List</a>
                    </li>
                    <!-- CM & Vice CM Message Menu -->
                </ul>
            </li>
            <hr class="t_b_pdding">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Project Page Setting</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <!-- Project Category Menu -->
                    <li class="active"><a href="{{ route('project_category.create') }}"><i class="fa fa-circle-o"></i>
                            Add Category</a>
                    </li>
                    <li class="active"><a href="{{ route('project_category.list') }}"><i class="fa fa-circle-o"></i>
                            Category List</a>
                    </li>
                    <!-- Project Category Menu -->
                    <hr class="t_b_pdding">
                    <!-- Project Menu -->
                    <li class="active"><a href="{{ route('project.create') }}"><i class="fa fa-circle-o"></i>
                            Add Project</a>
                    </li>
                    <li class="active"><a href="{{ route('project.list') }}"><i class="fa fa-circle-o"></i>
                            Project List</a>
                    </li>
                    <!-- Project Menu -->
                </ul>
            </li>
            <hr class="t_b_pdding">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>News & Events Setting</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <!-- Blog Category Menu -->
                    <li class="active"><a href="{{ route('blog_category.list') }}"><i class="fa fa-circle-o"></i>
                            Category List</a>
                    </li>
                    <hr class="t_b_pdding">
                    <li class="active"><a href="{{ route('blog_tag.list') }}"><i class="fa fa-circle-o"></i>
                            Tag List</a>
                    </li>
                    <!-- Blog Category Menu -->
                    <hr class="t_b_pdding">
                    <!-- Blog Menu -->
                    <li class="active"><a href="{{ route('blog.create') }}"><i class=" fa fa-circle-o"></i>
                            Add Blog</a>
                    </li>
                    <li class="active"><a href="{{ route('blog.list') }}"><i class=" fa fa-circle-o"></i>
                            Blog List</a>
                    </li>
                    <!-- Blog Menu -->
                </ul>
            </li>
            <hr class="t_b_pdding">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cog"></i> <span>Website Setting</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{ route('setting.view') }}"><i class="fa fa-circle-o"></i> Website
                            Setting</a>
                    </li>
                </ul>
            </li>
            <!-- Menu End -->
        </ul>
    </section>
</aside>