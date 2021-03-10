<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('dashboard/material/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('dashboard/material/assets/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Material Dashboard PRO by Creative Tim</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  {{-- Canonical SEO --}}
  <link rel="canonical" href="{{url('/')}}" />
  {{--  Social tags      --}}
  <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, material dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, material design, material dashboard bootstrap 4 dashboard">
  <meta name="description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">

  {{-- Twitter Card data --}}
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim">
  <meta name="twitter:description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg">
  {{-- Open Graph data --}}
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Material Dashboard PRO by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="dashboard.html" />
  <meta property="og:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg" />
  <meta property="og:description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design." />
  <meta property="og:site_name" content="Creative Tim" />
  <link href="{{asset('css/wcounter.css')}}" rel="stylesheet" />

</head>

<body class="">

  <div class="wrappern" id="app" >




    <header class="navbar navbar-expand navbar-dark bg-info">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6">
            
    
      <a href="{{ url('/') }}" target="_blank" class="navbar-brand mr-0 mr-md-2 navbar-absolute-logo">
      Simple Word Counter
    </a> 
  </div>

    <div class="col-md-6" >
      
 <div class="navbar-nav-scrolls">
        <ul class="navbar-nav bd-navbar-nav flex-row ">
          <li class="nav-item">
            <a href="#" class="nav-link"> Blog </a></li> 
            <li class="nav-item"><a href="#" class="nav-link">Home</a></li> 
            <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>  
               <li class="nav-item"><a href="#" class="nav-link">
               About</a></li> 
              
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

         <router-view v-on:keyword_changed = "text_length"></router-view>
         {{-- /results --}}
         
        
        {{-- main content here --}}
        @yield('content')


                 {{-- <keyword-density-finder></keyword-density-finder> --}}
        <div class="row">
              <div class="card ">
                <div class="card-header card-header-rose card-header-icon">
                 {{--  <div class="card-icon">
                    <i class="material-icons">edit</i>
                  </div> --}}
                  <h3 class="card-title">Input Text</h3>
                </div>
                <div class="card-body ">
                   
                    <div class="form-group bmd-form-group">
                      {{-- <label for="examplePass" class="bmd-label-floating">Password</label> --}}
                      <textarea 
                      class="form-control" 
                      style="border:1px solid #eee; padding: 0.5rem"   
                      id="main_text" 
                      cols="30" 
                      rows="15" 
                      v-model="text_in_textarea"
                      class="form-control"  
                      v-on:keyup="text_length" 
                      v-on:change="text_length" 
                      v-on:paste="text_length" 
                      v-on:input="text_length" 
                      v-on:click="text_length"
                      placeholder='Copy paste or write your text here....'>
                        
                      </textarea>
                  </div>
                </div>
                <div class="card-footer ">
                  <a rel="noopener" href="#results" class="btn btn-round btn-info"><strong>Result</strong></a>
                </div>
              </div>
            </div> 

          </div>
        </div>
      </div>

      {{-- mycode --}}

      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="{{url('/')}}">
                  Home
                </a>
              </li>
              <li>
                <a href="{{ url('/') }}">
                  About Us
                </a>
              </li>
              <li>
                <a href="{{ url('/') }}">
                  Blog
                </a>
              </li>
              <li>
                <a href="{{ url('/') }}">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <span>
        year
            </span>, all rights reserved.
          </div>
        </div>
      </footer>
    </div>
  </div>

  {{--   Core JS Files   --}}
  {{-- <script src="{{asset('dashboard/material/assets/js/core/jquery.min.js')}}"></script> --}}
  <script src="{{asset('js/app.js')}}"></script>
  {{-- <script src="{{asset('dashboard/material/assets/js/core/popper.min.js')}}"></script> --}}
  {{-- <script src="{{asset('js/wcounter.js')}}"></script> --}}
  {{-- <script src="{{asset('dashboard/material/assets/js/core/bootstrap-material-design.min.js')}}"></script> --}}
  {{-- <script src="{{asset('dashboard/material/assets/js/plugins/perfect-scrollbar.min.js')}}"></script> --}}
  {{-- Plugin for the momentJs  --}}
  {{-- <script src="{{asset('dashboard/material/assets/js/plugins/moment.min.js')}}"></script> --}}
  {{--  Plugin for Sweet Alert --}}
  {{-- <script src="{{asset('dashboard/material/assets/js/plugins/sweetalert2.js')}}"></script> --}}
  {{-- Forms Validations Plugin --}}
  {{-- <script src="{{asset('dashboard/material/assets/js/plugins/jquery.validate.min.js')}}"></script> --}}
  {{-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard --}}
  {{-- <script src="{{asset('dashboard/material/assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script> --}}
  {{--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select --}}
  {{-- <script src="{{asset('dashboard/material/assets/js/plugins/bootstrap-selectpicker.js')}}"></script> --}}
  {{--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ --}}
  {{-- <script src="{{asset('dashboard/material/assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script> --}}
  {{--  DataTables.net Plugin, full documentation here: https://datatables.net/  --}}
  {{-- <script src="{{asset('dashboard/material/assets/js/plugins/jquery.dataTables.min.js')}}"></script> --}}
  {{--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  --}}
  {{-- <script src="{{asset('dashboard/material/assets/js/plugins/bootstrap-tagsinput.js')}}"></script> --}}
  {{-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput --}}
  {{-- <script src="{{asset('dashboard/material/assets/js/plugins/jasny-bootstrap.min.js')}}"></script> --}}
  {{--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    --}}
  {{-- <script src="{{asset('dashboard/material/assets/js/plugins/fullcalendar.min.js')}}"></script> --}}
  {{-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ --}}
  {{-- <script src="{{asset('dashboard/material/assets/js/plugins/jquery-jvectormap.js')}}"></script> --}}
  {{--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ --}}
  {{-- <script src="{{asset('dashboard/material/assets/js/plugins/nouislider.min.js')}}"></script> --}}
  {{-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert --}}
  {{-- <script src="../../../cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js')}}"></script> --}}
  {{-- Library for adding dinamically elements --}}
  {{-- <script src="{{asset('dashboard/material/assets/js/plugins/arrive.min.js')}}"></script> --}}
  {{--  Google Maps Plugin    --}}
  {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script> --}}
  {{-- Place this tag in your head or just before your close body tag. --}}
  {{-- <script async defer src="../../../buttons.github.io/buttons.js')}}"></script> --}}
  {{-- Chartist JS --}}
  {{-- <script src="{{asset('dashboard/material/assets/js/plugins/chartist.min.js')}}"></script> --}}
  {{--  Notifications Plugin    --}}
  {{-- <script src="{{asset('dashboard/material/assets/js/plugins/bootstrap-notify.js')}}"></script> --}}
  {{-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --}}
  {{-- <script src="{{asset('dashboard/material/assets/js/material-dashboard.min6c54.js?v=2.2.2')}}" type="text/javascript"></script> --}}
  {{-- Material Dashboard DEMO methods, don't include it in your project! --}}
 
  {{-- Sharrre libray --}}
  {{-- <script src="{{asset('dashboard/material/assets/demo/jquery.sharrre.js')}}"></script> --}}
 
</body>

</html>