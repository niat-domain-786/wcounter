
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<title>Word Counter - Word &amp; Characters Counting Tool</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="word counting tool, online word wounter, character counter online, paragraph counter, seo checker, sentence counter, keywords density finder, find keyword density online">




<!-- css file -->
   <link rel="stylesheet" href="{{asset('theme/vendors/iconfonts/font-awesome/css/all.min.css')}}">
   <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
<!-- endinject -->
   <link rel="shortcut icon" href="{{asset('theme/images/favicon.png')}}" />
<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <style>
      h1, h2, h3, h4, h5, h6, p,label, small, li, span  .form-control .menu-title{
        font-family: Nunito !important;
      }  

      .result{
        font-size: 12px !important;
      }
    
    </style>


</head>
<body>
  <div class="container-scroller" id="app">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar" >
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index-2.html"><img src="{{asset('theme/images/logo.svg')}}" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index-2.html"><img src="{{asset('theme/images/logo-mini.svg')}}" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fas fa-bars"></span>
        </button>
        <ul class="navbar-nav">
          <li class="nav-item nav-search d-none d-md-flex">
            <div class="nav-link">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-search"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Search" aria-label="Search">
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
      
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="fas fa-bell mx-0"></i>
              <span class="count">16</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 16 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-danger">
                    <i class="fas fa-exclamation-circle mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Application Error</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="fas fa-wrench mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="far fa-envelope mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">New user registration</h6>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-envelope mx-0"></i>
              <span class="count">25</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                </p>
                <span class="badge badge-info badge-pill float-right">View all</span>
              </div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="{{asset('theme/images/faces/face4.jpg')}}" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium">David Grey
                    <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="{{asset('theme/images/faces/face2.jpg')}}" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium">Tim Cook
                    <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    New product launch
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="{{asset('theme/images/faces/face3.jpg')}}" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium"> Johnson
                    <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{asset('theme/images/faces/face5.jpg')}}" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="fas fa-cog text-primary"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item">
                <i class="fas fa-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
       
        </ul>

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="fas fa-bars"></span>
        </button>
       
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
    
   
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
       {{--    <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="{{asset('theme/images/faces/face5.jpg')}}" alt="image"/>
              </div>
              <div class="profile-name">
                <p class="name">
                  Welcome Jane
                </p>
                <p class="designation">
                  Super Admin
                </p>
              </div>
            </div>
          </li> --}}
          <li class="nav-item" data-toggle="tooltip" data-placement="bottom"  data-original-title="A counter for counting words, characters, sentence and paragraphs in your content." v-on:click="show_textarea_function">
            <router-link class="nav-link" to = "/">
              <i class="fas fa-keyboard menu-icon"></i>
              <span class="menu-title"  >Words, Characters,<br> Sentences, Paragraphs</span>
            </router-link>

          </li>
          <li class="nav-item" v-on:click="show_textarea_function">
             <router-link class="nav-link" to = "/keyword-density-finder">
              <i class="fas fa-file-word menu-icon" ></i>
              <span class="menu-title"  >Find Keyword Density</span>
            </router-link>
          </li>
          <li class="nav-item" v-on:click="hide_textarea_function">
             <router-link class="nav-link" to = "/meta-tags-generator">
              <i class="fa fa-code menu-icon" ></i>
              <span class="menu-title">Meta Tags </span>
            </router-link>
          </li>
          <li class="nav-item" v-on:click="hide_textarea_function">
             <router-link class="nav-link" to = "/schema-generator">
              <i class="fab fa-google menu-icon" ></i>
              <span class="menu-title">Schema (JSON-LD) </span>
            </router-link>
          </li>
          <li class="nav-item" v-on:click="hide_textarea_function">
             <router-link class="nav-link" to = "/open-graph-generator">
              <i class="fab fa-facebook menu-icon" ></i>
              <span class="menu-title">Open Graph </span>
            </router-link>
          </li>
          <li class="nav-item" v-on:click="hide_textarea_function">
             <router-link class="nav-link" to = "/twitter-card-generator">
              <i class="fab fa-twitter menu-icon"></i>
              <span class="menu-title">Twitter Card </span>
            </router-link>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="bottom"  data-original-title="Write SEO Optimize Article For Your Blog For Free">
             <a class="nav-link" href = "{{url('write-seo-optimized-article')}}" target="_blank">
              <i class="fas fa-edit menu-icon"></i>
              <span class="menu-title">SEO Optimized Article</span>
            </a>
          </li>
          <li class="nav-item" v-on:click="hide_textarea_function" data-toggle="tooltip" data-placement="bottom"  data-original-title="Scan your site for SEO">
             {{-- <a class="nav-link" href = "{{url('site-seo-checker')}}" target="_blank"> --}}
              <router-link class="nav-link" to = "/site-seo-checker">
              <i class="fas fa-edit menu-icon"></i>
              <span class="menu-title">Site SEO Checker</span>
            </router-link>
            {{-- </a> --}}
          </li>

      
       
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">


         {{-- results --}}
         <router-view v-on:keyword_changed = "text_length" v-on:input_domain_url = scan_site_for_seo></router-view>
         {{-- /results --}}


   @yield('content')
   
  <div class="row"   v-if="show_textarea == 1">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Copy paste or write below</h4>
          <div >
            <form action="">

              <textarea 
                id="main_text" 
                cols="30" 
                rows="20" 
                v-model="text_in_textarea"
                class="form-control"  
                v-on:keyup="text_length" 
                v-on:change="text_length" 
                v-on:paste="text_length" 
                v-on:input="text_length" 
                v-on:click="text_length"
                placeholder="Copy paste or write here....">
              </textarea>

            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
      
      
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
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
  <script src="{{asset('theme/vendors/js/vendor.bundle.base.js')}}"></script>
  {{-- <script src="{{asset('theme/vendors/js/vendor.bundle.addons.js')}}"></script> --}}
  <script src="{{asset('theme/js/off-canvas.js')}}"></script>

  <script src="{{asset('theme/js/misc.js')}}"></script>
  <script src="{{asset('js/app.js')}}"></script>

 {{--    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>



    <script>
      $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script> --}}

    <script>
      {{-- for tooltips --}}
  (function($) {
  'use strict';

  $(function() {
    /* Code for attribute data-custom-class for adding custom class to tooltip */
    if (typeof $.fn.tooltip.Constructor === 'undefined') {
      throw new Error('Bootstrap Tooltip must be included first!');
    }

    var Tooltip = $.fn.tooltip.Constructor;

    // add customClass option to Bootstrap Tooltip
    $.extend(Tooltip.Default, {
      customClass: ''
    });

    var _show = Tooltip.prototype.show;

    Tooltip.prototype.show = function() {

      // invoke parent method
      _show.apply(this, Array.prototype.slice.apply(arguments));

      if (this.config.customClass) {
        var tip = this.getTipElement();
        $(tip).addClass(this.config.customClass);
      }

    };
    $('[data-toggle="tooltip"]').tooltip();

  });
})(jQuery);
    </script>
   
</body>



</html>