<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="robots" content="index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
    <link rel="canonical" href="@php echo url()->full(); @endphp" />
    <meta property="og:locale" content="en_US">
    <title>word counter, free online tool</title>
    <meta name="description" content="word counter is a free online tool to count words and characters. It also calculates keyword density">


    @yield('title')
    @yield('description')
    @yield('tags')
    @yield('openGraph')
    @yield('twitterCard')
    @stack('styles')

    {{-- <!-- <link rel="stylesheet" href="{{ asset('template/assets/vendors/css/vendor.bundle.base.css')}}"> --> --}}
   

    {{-- <link rel="stylesheet" href="{{ asset('template/assets/css/shared/style.css')}}"> --}}
    <link rel="stylesheet" href="{{ asset('css/template.min.css')}}">

    <link rel="shortcut icon" href="{{ asset('template/assets/images/favicon.png')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,400,500,700">
     <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.9.55/css/materialdesignicons.min.css"
        integrity="sha512-vIgFb4o1CL8iMGoIF7cYiEVFrel13k/BkTGvs0hGfVnlbV6XjAA0M0oEHdWqGdAVRTDID3vIZPOHmKdrMAUChA=="
        crossorigin="anonymous" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="{{ url('/') }}">
                    <img src="{{ asset('template/assets/images/logo_11.svg')}}" alt="logo" /> </a>
                <a class="navbar-brand brand-logo-mini" href="{{ url('/') }}">
                    <img src="{{ asset('template/assets/images/logo-mini_11.svg')}}" alt="logo" /> </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <ul class="navbar-nav navbar-nav-left header-links">
                    <li class="nav-item d-none active d-md-flex">
                        <a href="{{ url('pdf-to-text-converter') }}" class="nav-link">PDF To Text Tool <span class="badge badge-primary ml-1">New</span>
                        </a>
                    </li>
                    <li class="nav-item d-none active d-md-flex">
                        <a href="{{ url('blog') }}" class="nav-link">
                            <i class="mdi mdi-text-box-plus"></i>Blog</a>
                    </li>
                    {{-- <li class="nav-item active d-none d-md-flex">
                        <a href="{{ url('about') }}" class="nav-link">
                            <i class="mdi mdi-card-account-details"></i>About</a>
                    </li> --}}

                </ul>
                <!-- <ul class="navbar-nav navbar-nav-right"></ul> -->
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper" id="results">

            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
                <ul class="nav">

                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">
                            <i class="menu-icon mdi mdi-television"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('blog') }}">
                            <i class="menu-icon mdi mdi-text-box-plus"></i>
                            <span class="menu-title">Blog</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('pdf-to-text-converter') }}">
                            <i class="menu-icon mdi mdi-file-pdf"></i>
                            <span class="menu-title">PDF To Text</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">
                            <i class="menu-icon mdi mdi-note-search"></i>
                            <span class="menu-title">Keyword Density</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">
                            <i class="menu-icon mdi mdi-calculator"></i>
                            <span class="menu-title">Word Counter</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about') }}">
                            <i class="menu-icon mdi mdi-account"></i>
                            
                            <span class="menu-title">About Us</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('disclaimer') }}">
                            <i class="menu-icon mdi mdi-file-restore"></i>
                            
                            <span class="menu-title">Disclaimer</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('privacy') }}">
                            <i class="menu-icon mdi mdi-cctv"></i>
                            
                            <span class="menu-title">Privacy</span>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#resources-dropdown" aria-expanded="false"
                            aria-controls="resources-dropdown">
                            <i class="menu-icon mdi mdi-book-open-page-variant"></i>
                            <span class="menu-title">Pages</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="resources-dropdown">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('about') }}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('disclaimer') }}">Disclaimer</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('privacy') }}">Privacy</a>
                                </li>
                            </ul>
                        </div>
                    </li> --}}


                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel" id="app">
                <div class="content-wrapper">
                    {{-- main content --}}
                    @yield('content')
                    <!-- add rows here -->
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="container-fluid clearfix">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © <span v-text="current_year"></span> <a
                                href="{{ url('/') }}">Wcounter</a>. All rights
                            reserved.</span>
                        <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                class="mdi mdi-heart text-danger"></i>
            </span> -->
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    {{-- <script src="{{ asset('template/assets/vendors/js/vendor.bundle.base.js')}}" defer></script> --}}
    <!-- endinject -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
    <!-- Plugin js for this page -->
    {{-- <script src="{{ asset('template/assets/vendors/chart.js/Chart.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('template/assets/vendors/jquery-sparkline/jquery.sparkline.min.js')}}" defer> --}}
    </script>

    <script src="{{ asset('template/assets/js/shared/misc.js')}}" defer></script>

    <script src="{{ asset('js/app.js') }}" defer></script>
    @stack('scripts')

</body>

</html>
