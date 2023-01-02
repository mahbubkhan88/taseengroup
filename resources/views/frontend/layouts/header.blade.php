@php
$route = Route::current()->getName();
$headerData = App\Models\SettingModel::find(1);
@endphp

<header id="header"
    data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 45, 'stickySetTop': '-45px', 'stickyChangeLogo': true}">

    <div class="header-body border-top-0">
        <div class="header-top">
            <div class="container">
                <div class="header-row">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li
                                        class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-md-show">
                                        <span class="ws-nowrap"><i class="fa fa-phone"></i>Tel:
                                            {{ $headerData->telephone }}
                                        </span>
                                        <span class="ws-nowrap"><i class="fa fa-fax"></i>Fax:
                                            {{ $headerData->fax }}
                                        </span>
                                        <span class="ws-nowrap"><i class="fa fa-mobile"></i>Cell:
                                            {{ $headerData->phone_one }}
                                            (Hotline) </span>
                                        <span class="ws-nowrap"><i class="fa fa-envelope"></i>Email:
                                            {{ $headerData->email_address }} </span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean">

                                <li class="social-icons-facebook facebook-icon">
                                    <a href="{{ $headerData->facebook_link }}" target="_blank" title="Facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>

                                <li class="social-icons-linkedin linkedin-icon">
                                    <a href="{{ $headerData->linkedin_link }}" target="_blank" title="Linkedin">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>

                                <li class="social-icons-youtube youtube-icon">
                                    <a href="{{ $headerData->youtube_link }}" target="_blank" title="Youtube">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>

                                <li class="social-icons-instagram instagram-icon">
                                    <a href="{{ $headerData->instagram_link }}" target="_blank" title="Instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ route('HomePage') }}">
                                <img src="{{ (!empty('uploads/setting_images/'.$headerData->logo)) ? url('uploads/setting_images/'.$headerData->logo) : url('uploads/no_image.jpg') }}"
                                    width="90%" height="90%" alt="Taseen Group">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div
                            class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
                            <div
                                class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">

                                        <li>
                                            <a class="{{ ($route == 'HomePage') ? 'active' : '' }}"
                                                href="{{ route('HomePage') }}">
                                                HOME </a>
                                        </li>

                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="javascript:void(0)">ABOUT
                                                US</a>
                                            <ul class="dropdown-menu">

                                                <li>
                                                    <a class="dropdown-item {{ ($route == 'CompanyProfilePage') ? 'active' : '' }}"
                                                        href="{{ route('CompanyProfilePage') }}">
                                                        COMPANY PROFILE
                                                    </a>
                                                </li>

                                                <li>
                                                    <a class="dropdown-item {{ ($route == 'MissionVisionValuePage') ? 'active' : '' }}"
                                                        href="{{ route('MissionVisionValuePage') }}">
                                                        MISSION, VISION & VALUE
                                                    </a>
                                                </li>

                                                <li>
                                                    <a class="dropdown-item {{ ($route == 'ChairmanMessagePage') ? 'active' : '' }}"
                                                        href="{{ route('ChairmanMessagePage') }}">
                                                        CHAIRMAN'S MESSAGE
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>

                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="javascript:void(0)">OUR
                                                SERVICES</a>
                                            <ul class="dropdown-menu">
                                                <li> <a class="dropdown-item" href="taseen-engineering.html">TASEEN
                                                        ENGINEERING</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">TSN FIELD SERVICES</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">MAISARAH EVENTS</a></li>
                                                <li> <a class="dropdown-item" href="#">MUMTAHINA CATERING</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">TASEEN FASHION BD</a>
                                                </li>
                                                <li> <a class="dropdown-item" href="#">TASEEN TRANSPORT
                                                        SERVICE</a></li>
                                                <li> <a class="dropdown-item" href="#">SAFETY NEED BD</a></li>
                                                <li> <a class="dropdown-item" href="#">RR ENTERPRISE</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a class="{{ ($route == 'ProjectsPage') ? 'active' : '' }}"
                                                href="{{ route('ProjectsPage') }}">
                                                PROJECT
                                            </a>
                                        </li>

                                        <li>
                                            <a class="{{ ($route == 'NewsEventsPage') ? 'active' : '' }}"
                                                href="{{ route('NewsEventsPage') }}">
                                                NEWS & EVENTS
                                            </a>
                                        </li>

                                        <li>
                                            <a class="{{ ($route == 'ContactPage') ? 'active' : '' }}"
                                                href="{{ route('ContactPage') }}">
                                                CONTACT US
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div
                            class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                <a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i
                                        class="fas fa-search header-nav-top-icon"></i></a>
                                <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                    <form role="search" action="page-search-results.html" method="get">
                                        <div class="simple-search input-group">
                                            <input class="form-control text-1" id="headerSearch" name="q" type="search"
                                                value="" placeholder="Search...">
                                            <span class="input-group-append">
                                                <button class="btn" type="submit">
                                                    <i class="fa fa-search header-nav-top-icon"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>