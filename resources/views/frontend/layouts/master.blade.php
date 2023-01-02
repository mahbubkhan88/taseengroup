<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield ('title') - Welcome to Taseen Group</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Taseen - A Group of Company in Bangladesh">
    <meta name="author" content="okler.net">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/frontend/img/favicon.ico') }}" type="image/x-icon" />

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <!-- Web Fonts  -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400"
        rel="stylesheet" type="text/css">
    <!-- Vendor CSS -->
    <link href="{{ asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/owl.carousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/magnific-popup/magnific-popup.min.css') }}" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="{{ asset('assets/frontend/css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/theme-elements.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/theme-blog.css') }}" rel="stylesheet">
    <!-- Current Page CSS -->
    <link href="{{ asset('assets/frontend/vendor/rs-plugin/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/rs-plugin/css/layers.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/rs-plugin/css/navigation.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/vendor/circle-flip-slideshow/css/component.css') }}" rel="stylesheet">
    <!-- Skin CSS -->
    <link href="{{ asset('assets/frontend/css/skins/default.css') }}" rel="stylesheet">
    <!-- Theme Custom CSS -->
    <link href="{{ asset('assets/frontend/css/custom.css') }}" rel="stylesheet">
</head>

<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay
    data-plugin-options="{'hideDelay': 500}">
    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <div class="body">
        <!-- Header -->
        @include('frontend.layouts.header')
        <!-- Header -->

        <!-- Main Content -->
        @yield('content')
        <!-- Main Content -->

        <!-- Footer -->
        @include('frontend.layouts.footer')
        <!-- Footer -->
    </div>
    <!-- Vendor -->
    <script type="text/javascript" src="{{ asset('assets/frontend/vendor/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/vendor/jquery.appear/jquery.appear.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('assets/frontend/vendor/jquery.easing/jquery.easing.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('assets/frontend/vendor/jquery.cookie/jquery.cookie.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('assets/frontend/master/style-switcher/style.switcher.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('assets/frontend/vendor/popper/umd/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/vendor/common/common.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/vendor/jquery.validation/jquery.validate.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('assets/frontend/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/vendor/jquery.lazyload/jquery.lazyload.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('assets/frontend/vendor/isotope/jquery.isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/vendor/owl.carousel/owl.carousel.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('assets/frontend/vendor/magnific-popup/jquery.magnific-popup.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('assets/frontend/vendor/vide/jquery.vide.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/vendor/vivus/vivus.min.js') }}"></script>
    <!-- Theme Base, Components and Settings -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/theme.js') }}"></script>
    <!-- Current Page Vendor and Views -->
    <script type="text/javascript"
        src="{{ asset('assets/frontend/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('assets/frontend/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/frontend/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/views/view.home.js') }}"></script>
    <!-- Theme Initialization Files -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/theme.init.js') }}"></script>
</body>

</html>