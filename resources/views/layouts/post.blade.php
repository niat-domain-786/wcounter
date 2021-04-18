<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('images/favicon.ico')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('css/wcounter.css')}}" rel="stylesheet" />
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <meta name="google-site-verification" content="fLOCHpysy-n3OdJo05lRZuDKZrF08sA4rdAWR8LWe6o" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TH5J6WLP97"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-TH5J6WLP97');

    </script>


    @yield('title')

    @yield('canonical')

    @yield('metaTags')

    @yield('twitterCard')

    @yield('tags')

    @yield('updateTime')

    @yield('openGraph')

    @yield('jsonLd')


</head>

<body class="">
    <div class="wrappern" id="app">
        <header class="navbar navbar-expand navbar-dark bg-info">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ url('/') }}" target="_blank"
                            class="navbar-brand mr-0 mr-md-2 navbar-absolute-logo">Online Word Counter</a>
                    </div>

                    <div class="col-md-6">
                        <div class="navbar-nav-scrolls">
                            <ul class="navbar-nav bd-navbar-nav flex-row ">
                                <li class="nav-item"><a href="{{ url('/') }}" class="nav-link"> Home </a></li>
                                <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Blog</a></li>
                                <li class="nav-item"><a href="{{url('/about–us')}}" class="nav-link">About</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <div class="main-panel-m ">

            {{-- Navbar --}}

            <div class="content" id="results">
                <div class="content">
                    <div class="container">
                        {{-- results --}}

                        <router-view v-on:keyword_changed="text_length"></router-view>
                        {{-- /results --}}


                        {{-- component --}}
                        {{-- <word-counter v-on:keyword_changed = "text_length"></word-counter> --}}
                        @yield('component')

                        <div class="row">
                            <div class="card ">
                                <div class="card-header card-header-rose card-header-icon">
                                    <h3 class="card-title">Input Text</h3>
                                </div>
                                <div class="card-body ">

                                    <div class="form-group bmd-form-group">
                                        <textarea class="form-control textarea"
                                            style="border:1px solid #eee; padding: 0.5rem" id="main_text" cols="30"
                                            rows="15" v-model="text_in_textarea" class="form-control"
                                            v-on:keyup="text_length" v-on:change="text_length" v-on:paste="text_length"
                                            v-on:input="text_length" v-on:click="text_length"
                                            placeholder='Copy paste or write your text here....'>

							</textarea>
                                    </div>
                                </div>
                                <div class="card-footer ">
                                    <a rel="noopener" href="#results" class="btn btn-round btn-info">
                                        <strong>Result</strong>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container "
                style="background-color: #fff; padding-top: 2rem; padding-left: 1rem; padding-bottom: 2rem; padding-right: 1rem; border-radius: 6px;">

                {{-- content Main content --}}
                @yield('article')

            </div>
            {{-- footer --}}

            <footer class="footer">
                <div class="container-fluid">
                    <nav class="float-left">
                        <ul>
                            <li><a href="{{url('/privacy–policy')}}">Privacy</a></li>
                            <li><a href="{{url('/disclaimer')}}">Disclaimer</a></li>
                        </ul>
                    </nav>
                    <div class="copyright float-right"> &copy;<span v-text='current_year'></span>, all rights reserved.
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="{{asset('js/app.js')}}" async></script>
    @stack('scripts')
</body>

</html>
