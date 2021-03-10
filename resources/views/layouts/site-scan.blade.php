<!DOCTYPE html>
<html>
<head><meta http-equiv="content-type" content="text/html;charset=utf-8">


  <meta charset="utf-8">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('material-kit-proassets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('material-kit-proassets/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>
    Cards - Material Kit PRO by Creative Tim
  </title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport">

  <!--  Social tags      -->
  <meta name="keywords" content="bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, material, material kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, premium bootstrap 4 ui kit, premium template, bootstrap 4 template">
  <meta name="description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design">

  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Material Kit Pro by Creative Tim">
  <meta name="twitter:description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="{{asset('material-kit-pro/s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg')}}">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Material Kit Pro by Creative Tim">
  <meta property="og:type" content="article">
  <meta property="og:url" content="../../../presentation.html">
  <meta property="og:image" content="{{asset('material-kit-pro/s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg')}}">
  <meta property="og:description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design">
  <meta property="og:site_name" content="Creative Tim">
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
  {{-- <link rel="stylesheet" href="{{asset('material-kit-pro/fontawesome/fontawesome.min.css')}}"> --}}
  <!-- CSS Files -->
  <link href="{{asset('material-kit-pro/assets/css/material-kit.mind1f1.css?v=2.2.0')}}" rel="stylesheet">
  <!-- Documentation extras -->
  {{-- <link rel="stylesheet" href="{{asset('material-kit-pro/cdn.jsdelivr.net/docsearch.js/2/docsearch.min.css')}}"> --}}
  <link rel="stylesheet" href="{{asset('material-kit-pro/assets/demo/docs.min.css')}}">
  <style>
    .navbar-absolute-logo {
      padding-left: 45px;
    }

    .navbar-absolute-logo img {
      position: absolute;
      left: 15px;
      margin-top: -6px;
    }

    body {
      background: white;
    }
  </style>
      <style>
      .github-corner:hover .octo-arm {
        animation: octocat-wave 560ms ease-in-out
      }

      @keyframes octocat-wave {

        0%,
        100% {
          transform: rotate(0)
        }

        20%,
        60% {
          transform: rotate(-25deg)
        }

        40%,
        80% {
          transform: rotate(10deg)
        }
      }

      @media (max-width:500px) {
        .github-corner:hover .octo-arm {
          animation: none
        }

        .github-corner .octo-arm {
          animation: octocat-wave 560ms ease-in-out
        }
      }
    </style>
    <style>
.ck-editor__editable_inline {
    min-height: 400px;
}
</style>
  {{-- <link href="{{asset('material-kit-pro/assets/demo/demo.css')}}" rel="stylesheet"> --}}

{{-- <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/44/1/common.js"></script> --}}
{{-- <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/44/1/util.js"></script> --}}
</head>




<body class="bd-docs" data-spy="scroll" data-target=".bd-sidenav-active">
	<div id="app">
		


  <a id="skippy" class="sr-only sr-only-focusable" href="#content">
    <div class="container">
      <span class="skiplink-text">Skip to main content</span>
    </div>
  </a>
  <header class="navbar navbar-expand navbar-dark bg-primary flex-column flex-md-row bd-navbar">
    <a class="navbar-brand mr-0 mr-md-2 navbar-absolute-logo" href="https://www.creative-tim.com/product/material-kit-pro" target="_blank">
      Material Kit PRO
    </a>
    <ul class="navbar-nav flex-row d-none d-md-flex">
      <li class="nav-item dropdown">
        <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          v2.2.0
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
          <a class="dropdown-item" href="../getting-started/introduction.html">BS4 - 2.2.0</a>
          <a class="dropdown-item" href="../../2.0/getting-started/introduction.html">BS4 - 2.1.0</a>
          <a class="dropdown-item" href="https://demos.creative-tim.com/bs3/material-kit-pro/tutorial-components.html" target="_blank">BS3 - 1.3.0</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link p-2" href="https://github.com/creativetimofficial/ct-material-kit-pro" target="_blank" rel="noopener" aria-label="GitHub">
          <svg class="navbar-nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 499.36" focusable="false">
            <title>GitHub</title>
            <path d="M256 0C114.64 0 0 114.61 0 256c0 113.09 73.34 209 175.08 242.9 12.8 2.35 17.47-5.56 17.47-12.34 0-6.08-.22-22.18-.35-43.54-71.2 15.49-86.2-34.34-86.2-34.34-11.64-29.57-28.42-37.45-28.42-37.45-23.27-15.84 1.73-15.55 1.73-15.55 25.69 1.81 39.21 26.38 39.21 26.38 22.84 39.12 59.92 27.82 74.5 21.27 2.33-16.54 8.94-27.82 16.25-34.22-56.84-6.43-116.6-28.43-116.6-126.49 0-27.95 10-50.8 26.35-68.69-2.63-6.48-11.42-32.5 2.51-67.75 0 0 21.49-6.88 70.4 26.24a242.65 242.65 0 0 1 128.18 0c48.87-33.13 70.33-26.24 70.33-26.24 14 35.25 5.18 61.27 2.55 67.75 16.41 17.9 26.31 40.75 26.31 68.69 0 98.35-59.85 120-116.88 126.32 9.19 7.9 17.38 23.53 17.38 47.41 0 34.22-.31 61.83-.31 70.23 0 6.85 4.61 14.81 17.6 12.31C438.72 464.97 512 369.08 512 256.02 512 114.62 397.37 0 256 0z" fill="currentColor" fill-rule="evenodd"></path>
          </svg>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link p-2" href="https://twitter.com/CreativeTim" target="_blank" rel="noopener" aria-label="Twitter">
          <svg class="navbar-nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 416.32" focusable="false">
            <title>Twitter</title>
            <path d="M160.83 416.32c193.2 0 298.92-160.22 298.92-298.92 0-4.51 0-9-.2-13.52A214 214 0 0 0 512 49.38a212.93 212.93 0 0 1-60.44 16.6 105.7 105.7 0 0 0 46.3-58.19 209 209 0 0 1-66.79 25.37 105.09 105.09 0 0 0-181.73 71.91 116.12 116.12 0 0 0 2.66 24c-87.28-4.3-164.73-46.3-216.56-109.82A105.48 105.48 0 0 0 68 159.6a106.27 106.27 0 0 1-47.53-13.11v1.43a105.28 105.28 0 0 0 84.21 103.06 105.67 105.67 0 0 1-47.33 1.84 105.06 105.06 0 0 0 98.14 72.94A210.72 210.72 0 0 1 25 370.84a202.17 202.17 0 0 1-25-1.43 298.85 298.85 0 0 0 160.83 46.92" fill="currentColor"></path>
          </svg>
        </a>
      </li>
    </ul>
    <div class="navbar-nav-scroll ml-md-auto ">
      <ul class="navbar-nav bd-navbar-nav flex-row">
        <li class="nav-item">
          <a class="nav-link" href="https://www.creative-tim.com/product/material-kit-pro"> <i class="material-icons">card_membership</i> Buy Now! </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/index-2.html"><i class="material-icons">view_carousel</i> Live Preview</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://github.com/creativetimofficial/ct-material-kit-pro" target="_blank" rel="noopener"><i class="material-icons">star</i> Help with a star</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" target="_blank" rel="noopener"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" target="_blank" rel="noopener"></a>
        </li>
      </ul>
    </div>
 

  </header>
  <div class="container-fluid">
    <div class="row flex-xl-nowrap">
      <div class="col-12 col-md-4 col-xl-4 bd-sidebar">
        <nav class="collapse bd-links" {{-- id="bd-docs-navm" --}}>
          <div class="bd-toc-item active">
            <a class="bd-toc-link" href="#docs">
             Basic SEO Requirements
            </a>

            <ul class="nav bd-sidenav">
         
              <li class="">
                <a href="#">
                  Article Length
                  <span class="badge badge-warning" data-toggle="modal" data-target="#article_length" v-if="words_count < 600">
                  	@{{words_count}}&nbsp;Words</span>


                  <span class="badge badge-info" data-toggle="modal" data-target="#article_length" v-else="words_count >= 600">
                  	@{{words_count}}&nbsp;Words</span>

                </a>
              </li>
              <li class="">
                <a href="#">
                  Permalink
                  <span v-if="url_field == '' " class="badge badge-warning" data-toggle="modal" data-target="#URLmodal" title="permalink is missing">required</span>

                  <span v-else="url_field != ''" class="badge badge-info">ok</span>
                </a>
              </li>
              <li class="">
                <a href="#">
                  Meta Description
                  <span v-if="description_field == '' " class="badge badge-warning" data-toggle="modal" data-target="#metaDescriptionModal" title="Meta Description is missing">required</span>

                  <span v-else="description_field != '' " class="badge badge-info">ok</span>
                </a>
              </li>
              <li class="">
                <a href="#">
                  Keyword Density
                  <span class="badge badge-warning" v-if="Keyword_density_percentage > 3 || Keyword_density_percentage == 0 " title="Focus keyword repeated many times">@{{Keyword_density_percentage}}&nbsp;%</span>

                  <span v-else="Keyword_density_percentage <= 3 && Keyword_density_percentage !== 0 " class="badge badge-info" >@{{Keyword_density_percentage}}&nbsp;%</span>
                </a>
              </li>
              <li class="">
                <a href="#">
                  Inbond Links

                  <span class="badge badge-warning" v-if="internal_links == 0">required</span>
                  <span class="badge badge-info" v-if="internal_links > 0">ok</span>

                </a>
              </li>
              <li class="">
                <a href="#">
                 Outbond Links
                 
                  <span class="badge badge-warning" v-if="external_links == 0" >required</span>

                  <span class="badge badge-info" v-if="external_links > 0">ok</span>

                </a>
              </li>
              <li class="">
                <a href="#">
                  Images &amp; Videos
                  <span class="badge badge-info">ok</span>
                </a>
              </li>
            
            </ul>
          </div>
          <div class="bd-toc-item active">
            <a class="bd-toc-link" href="#docs">
              Focus Keyword
            </a>
            <ul class="nav bd-sidenav">
             
              <li class="">
                <a href="badge.html">
                  Add Focus Keyword
                  <span class="badge badge-warning" v-if="Keyword_density_field == '' ">required</span>
                  <span class="badge badge-info" v-else="Keyword_density_field != '' ">ok</span>
                </a>
              </li>
              <li class="">
                <a href="breadcrumb.html">
                  Keyword in title
                  <span class="badge badge-warning" v-if="keyword_in_title == '' ">required</span>
                  <span class="badge badge-info" v-if="keyword_in_title != '' ">ok</span>
                </a>
              </li>
              <li class="">
                <a href="buttons.html">
                  Keyword in description
                  <span class="badge badge-info" v-if="keyword_in_description != '' ">ok</span>
                  <span class="badge badge-warning" v-if="keyword_in_description == '' ">required</span>

                </a>
              </li>
              <li class="{{-- active bd-sidenav-active --}}">
                <a href="card.html">
                  In SEO permalink 
                  <span class="badge badge-warning" v-if="keyword_in_url == '' ">required</span>
                  <span class="badge badge-info" v-if="keyword_in_url != '' ">ok</span>

                </a>
              </li>
              <li class="">
                <a href="carousel.html">
                  Beginning of content
                  <span class="badge badge-warning" v-if="keyword_at_start == 0 ">required</span>
                  <span class="badge badge-info" v-if="keyword_at_start == 1 ">ok</span>
                  
                </a>
              </li>
              <li class="">
                <a href="carousel.html">
                  First 10% of content
                  <span class="badge badge-warning" v-if="keyword_in_first_ten_percent_content == '' ">required</span>

                  <span class="badge badge-info" v-if="keyword_in_first_ten_percent_content != '' ">ok</span>
                </a>
              </li>
              <li class="">
                <a href="collapse.html">
                  Keyword In Content
                  <span class="badge badge-warning" v-if="keyword_in_content == '' ">Required</span>
                  <span class="badge badge-info" v-if="keyword_in_content == 1 ">ok</span>
                </a>
              </li>
              <li class="">
                <a href="collapse.html">
                  Keyword In Headings & subheadings
                  <span class="badge badge-primary">Pro</span>
                </a>
              </li>
              <li class="">
                <a href="collapse.html">
                  Keyword as alt text of image
                  <span class="badge badge-primary">Pro</span>
                </a>
              </li>
                        
             
            </ul>
          </div>

         
       
       
        </nav>
      </div>

      <div class="d-xl-block col-xl-2 bd-toc">

      	 <div class="bd-toc-item mt-4">
          	<div class="form-group p-1" style="background:linear-gradient(45deg, #eee, #fafafa); border-radius: 5px; box-shadow: 1px 2px 4px gray;">
          		
          	<div class="form-group">          		
	          <label class="col-form-label"><strong>Focus Keyword</strong></label>
	          {{-- <label class="text-danger">the url error</label> --}}
	          <input type="text" class="form-control" v-model="Keyword_density_field" v-on:input="get_plain_text" placeholder="focus keyword">
          	</div>
          	
          	</div>
          </div>

          <div class="bd-toc-item">
          	<div class="form-group p-1" style="background:linear-gradient(45deg, #eee, #fafafa); border-radius: 5px;">
          		
          	<div class="form-group">          		
	          <label class=" col-form-label"><strong>Permalink</strong> (10 / 70)</label>
	          <br>
	          <small v-if="url_field_error != '' " class="text-danger">@{{url_field_error}}</small>
	          {{-- <label class="text-danger">the url error</label> --}}
	          <input type="url" class="form-control" placeholder="the-seo-url" v-model="url_field" v-on:input="validate_slug" v-on:focusout="text_length">
          	</div>

          	<div class="form-group">          		
	          <label class="col-form-label"><strong>Description</strong> (10 / 160)</label>
	          <label class="text-danger">the Description error</label>

	          <textarea class="form-control" rows="10" placeholder="input excerpt here..." v-model="description_field" v-on:input="text_length" v-on:focusout="text_length"></textarea>
          	</div>
          	
          	</div>
          </div>


      	 <div class="bd-toc-item mt-4">
          	<div class="form-group p-1 shadow" style="background-color: #fafafa; border-radius: 5px;">
          		
          	<div class="form-group">          		
	          <label class="col-form-label"><strong>Domain Name</strong></label>
	          <br><small><em>Domain name is required to indentify outbond and inbond links</em></small>
	          {{-- <label class="text-danger">the url error</label> --}}
	          <input type="text" class="form-control" v-model="domain_name_field" v-on:change="text_length" v-on:input="text_length" placeholder="e.g google.com">
          	</div>
          	
          	</div>
          </div>


      	  <a class="bd-toc-link" href="#docs">
              SEO Suggestions
            </a>
        <ul class="section-nav">
          <li class="" style="list-style: none;">
            <ul>
             
                <li>Use Table of content in your post</li>
                <li>Use short paragraphs</li>
                <li>Use rich media like images and videos</li>
                
                <li><a href="#here-is-the-icon">Add OpenGraph and twitter card or any other social media tags</a></li>
                <li>Add Alt text to every image in your post</li>
                <li>Focus keyword should be less than 3%</li>
                <li>Use focus keyword in headings and subheadings</li>
                <li>Use LSI keywords similar to focus keyword</li>
                <li>Add links or get links from authentic source</li>
                <li>Content should be at least 500 words long</li>
                <li>Avoid keyword stuffing, copy content, spamming or misleading</li>
            
            </ul>
          </li>
        
  
        </ul>
      </div>
      <main class="col-12 col-md-8 col-xl-7 py-md-3 pl-md-5 bd-content" role="main">
        
       
    
 {{-- main content here --}}
  {{-- <h2>The main content here</h2> --}}
     @yield('content')
   <div class="card"> 
    <div class="card-body">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Title" v-model="title_field" v-on:input="text_length">
      </div>

        <ckeditor :editor="editor" v-model="editorData" :config="editorConfig" v-on:input="html_to_text" v-on:blur="get_plain_text" ></ckeditor>
    {{-- <div id="app">
    </div> --}}
  </div>
  </div>
      </main>
    </div>
  </div>
  	</div>
  	{{-- for modals --}}


<!-- Modals -->
<div class="modal fade" id="article_length" tabindex="-1" role="dialog" aria-labelledby="article_lengthLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="article_lengthLabel">
        Basic SEO Settings</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="form-control"></div>
      <div class="modal-body">
        <div class="form-group">
        	<h5>Article Length</h5>
        	<label class="words" v-text="words_count">Words: </label><br>
        	<label class="sentences">sentences: <span v-text="sentence_count"></span></label><br>
        	<label class="sentences">paragraphs:  <span id="total_paragraphs" v-text="paragraph_count"></span></label><br>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info btn-round btn-sm" data-dismiss="modal">Close</button>
        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="URLmodal" tabindex="-1" role="dialog" aria-labelledby="URLmodalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="URLmodalLabel">URL and Meta Description</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="form-control"></div>
      <div class="modal-body">
          <div class="form-group">
        	<h4>Url And Meta Description</h4>
        	<label class="words">Add SEO permalink</label>
        	<label class="words">Add SEO description</label>
        </div>
        <div class="form-group">
        	<h4>Keyword Density</h4>
        	<label class="words">Keyword Density is greater than 3%</label>
        	{{-- <label class="words">Add SEO description</label> --}}
        </div>
        <div class="form-group">
        	<h4>Links</h4>
        	<label class="words">Add Inbound And Outbond Links</label>
        	{{-- <label class="words">Add SEO description</label> --}}
        </div>
        <div class="form-group">
        	<h4>Media</h4>
        	<label class="words">Add Images and Videos</label>
        	{{-- <label class="words">Add SEO description</label> --}}
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

{{-- Modals Ends --}}

                    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> --}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
{{-- for modals scripts end --}}


  <!--   Core JS Files   -->
  {{-- <script src="{{asset('material-kit-pro/assets/js/core/jquery.min.js')}}" type="text/javascript"></script> --}}
  {{-- <script src="{{asset('material-kit-pro/assets/js/core/popper.min.js')}}" type="text/javascript"></script> --}}
  {{-- <script src="{{asset('material-kit-pro/assets/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script> --}}
  {{-- <script src="{{asset('material-kit-pro/assets/js/plugins/moment.min.js')}}"></script> --}}
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  {{-- <script src="{{asset('material-kit-pro/assets/js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script> --}}
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  {{-- <script src="{{asset('material-kit-pro/assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script> --}}

  <!-- Place this tag in your head or just before your close body tag. -->
  {{-- <script async="" defer="" src="{{asset('material-kit-pro/buttons.github.io/buttons.js')}}"></script> --}}
  <!--	Plugin for Sharrre btn -->
  {{-- <script src="{{asset('material-kit-pro/assets/js/plugins/jquery.sharrre.js')}}" type="text/javascript"></script> --}}
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  {{-- <script src="{{asset('material-kit-pro/assets/js/plugins/bootstrap-tagsinput.js')}}"></script> --}}
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  {{-- <script src="{{asset('material-kit-pro/assets/js/plugins/bootstrap-selectpicker.js')}}" type="text/javascript"></script> --}}
  <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  {{-- <script src="{{asset('material-kit-pro/assets/js/plugins/jasny-bootstrap.min.js')}}" type="text/javascript"></script> --}}
  <!--	Plugin for Small Gallery in Product Page -->
  {{-- <script src="{{asset('material-kit-pro/assets/js/plugins/jquery.flexisel.js')}}" type="text/javascript"></script> --}}
  <!-- Place this tag in your head or just before your close body tag. -->
  {{-- <script async="" defer="" src="{{asset('material-kit-pro/buttons.github.io/buttons.js')}}"></script> --}}
  <!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
  {{-- <script src="{{asset('material-kit-pro/assets/demo/demo.js')}}" type="text/javascript"></script> --}}
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  {{-- <script src="{{asset('material-kit-pro/assets/js/material-kit.mind1f1.js')}}" type="text/javascript"></script> --}}
  <script type="text/javascript" src="{{asset('js/write-seo-article.js')}}"></script>



</body>
</html>