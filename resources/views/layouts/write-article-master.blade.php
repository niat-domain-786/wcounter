
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
   <link rel="stylesheet" href="{{ asset('theme/vendors/iconfonts/font-awesome/css/all.min.css') }}">
   <link rel="stylesheet" href="{{ asset('theme/css/style.css') }}">

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

        .ck-editor__editable {
          height: 80vh;
         }
    
    </style>
    


</head>
<body>
  <div class="container-scroller" id="app">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center px-1">
        <a class="navbar-brand brand-logo" href="/">
          {{-- <img src="{{asset('images/logo-h2.svg')}}" alt="logo"/> --}}
          <h4 class="text-info ">SEO WordBook</h4>
        </a>

        <a class="navbar-brand brand-logo-mini" href="/">
          {{-- <img src="{{asset('images/logo-o.svg')}}" alt="logo"/> --}}
          <h4 class="text-info ">SEO</h4>
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
       {{--  <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fas fa-bars"></span>
        </button> --}}
     {{--    <ul class="navbar-nav">
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
        </ul> --}}
        <ul class="navbar-nav navbar-nav-right">
      
       

           <li class="nav-item dropdown"> 
          
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
              <i class="fas fa-bell mx-0"></i>
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
               <i class="fas fa-paper-plane text-primary"></i> 

                Share
              </a>

              <div class="dropdown-divider"></div>
              <a class="dropdown-item">
               <i class="fas fa-save text-primary"></i> 

                Save
              </a>

              <div class="dropdown-divider"></div>
              <a class="dropdown-item">
              <i class="fas fa-file-pdf text-primary "></i>

                Export PDF
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
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
 
          <li class="nav-item" >
            <div class="mt-1">
                    <div class="accordion" id="accordion" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-1">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#collapse-1" aria-expanded="false" aria-controls="collapse-1" class="collapsed">
                              Words, Sentences &amp; Paragraphs
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-1" class="collapse" role="tabpanel" aria-labelledby="heading-1" data-parent="#accordion" style="">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-12">
                                <p><small>Words: <span v-text="words_count"></span></small>                            
                               <br><small>Sentences: <span v-text="sentence_count"></span> </small>                            
                               <br><small>Paragraphs: <span id="total_paragraphs" v-text="paragraph_count"></span></small> </p> 
                               <hr>  
                               <p><small>Characters With <br>Whitespaces: <span v-text="characters_with_whitespaces"></span></small>
                               </p>
                               <hr>
                               <p>                                                         
                              <small>Characters Without Whitespaces: <span v-text="character_count"></span></small></p>
        

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>                   
                    </div>
                  </div>
          </li>


            <li class="nav-item" >
            <div class="mt-0">
                    <div class="accordion" id="accordion" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-5">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5" class="collapsed">

                             

                              <span v-if="description_field_length != 0 && description_field_length < 150 && url_field != '' && url_field_error == '' " class="text-success">URL &amp; Meta Description</span>

                              <span v-else-if="url_field_error != '' " class="text-warning">URL &amp; Meta Description</span>
                              <span v-else-if="description_field_length > 150 " class="text-warning">URL &amp; Meta Description</span>

                              <span v-else-if="url_field == '' && description_field_length != 0 " class="text-warning">URL &amp; Meta Description</span>
                              <span v-else-if="url_field != '' && description_field_length == 0 " class="text-warning">URL &amp; Meta Description</span>

                               <span v-else="description_field_length == 0 && url_field == '' " >URL &amp; Meta Description</span>

                            </a>
                          </h6>
                        </div>
                        <div id="collapse-5" class="collapse" role="tabpanel" aria-labelledby="heading-5" data-parent="#accordion" style="">
                          <div class="card-body">
                            <div class="row">
                         
                              <div class="col-12">
                                <div class="form-group">

                              

                                  <input type="text" class="form-control" placeholder="URL" v-model="url_field" v-on:input="validate_slug" v-on:focusout="text_length">

                                 <em> <p class="text-danger" v-if="url_field_error != '' " v-text="url_field_error"></p></em>
                                 <em> <p class="text-success" v-if="url_field_success != '' " v-text="url_field_success"></p></em>
                                </div>

                                <div class="">

                                  <p class="text-success" v-if="description_field_length < 150 " >
                                   <em> <span v-text="description_field_length"></span>/150 characters left</em>
                                   </p>

                                  <p class="text-danger" v-else="description_field_length > 150 " >
                                   <em> <span v-text="description_field_length"></span>/150 characters left</em>
                                   </p>

                                  <textarea class="form-control" cols="30" rows="10" placeholder="Description of article" v-on:input="validate_description" v-on:change="validate_description" v-model="description_field" v-on:focusout="text_length">
                                    
                                  </textarea>
                                </div>
                                                           
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>                   
                    </div>
                  </div>
          </li>


          <li class="nav-item" >
            <div class="mt-0">
                    <div class="accordion" id="accordion" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-2">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-1" class="collapsed">

                              <span v-if="editorData != '' && ( no_of_Keyword_appear == 0 || keyword_in_url != 1 || keyword_in_description != 1 || keyword_in_title != 1 || keyword_in_content != 1 || keyword_in_subheading != 1 || keyword_in_first_ten_percent_content != 1)" class="text-warning">Focus Keyword &amp;  Keyword Density</span>

                              <span v-else-if="(no_of_Keyword_appear > 0 && keyword_in_url == 1 && keyword_in_description == 1 && keyword_in_title == 1 && keyword_in_content == 1 &&  keyword_in_subheading == 1 && keyword_in_first_ten_percent_content ==1)" class="text-success">Focus Keyword &amp;  Keyword Density</span>

                              <span v-else="editorData == '' ">Focus Keyword &amp;  Keyword Density</span>

                           
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-2" class="collapse" role="tabpanel" aria-labelledby="heading-2" data-parent="#accordion" style="">
                          <div class="card-body">
                            <div class="row">
                         
                              <div class="col-12">
                                <input type="text" class="form-control" v-model="Keyword_density_field" v-on:input="get_plain_text" placeholder="Focus Keyword">
                                
                                <p class="mt-2">
                                  <small>Keyword Density: <span v-text="Keyword_density_percentage"></span>%</small>
                                  <br>
                                  <small>Keyword Appeared: <span v-text="no_of_Keyword_appear"></span> times</small>
                                </p>
                                <hr>
                                <p class="text-success"><em>Keyword Found in:</em></p>
                                <p>
                                  <small v-if="keyword_in_url == 1" >URL: <span class="text-success">Yes!</span>                         
                                  </small>

                                  <small  v-if="keyword_in_url != 1">URL: <span  class="text-danger">Not Found!</span>                    
                                  </small>
                                

                                <br><small>Title: 
                                  <span v-if="keyword_in_title == 1 " class="text-success">Yes!</span>
                                  <span v-else="keyword_in_title != 1 " class="text-danger"> Not Found!</span>
                                </small>

                                <br><small>Meta Description: 
                                  <span v-if="keyword_in_description == 1 " class="text-success">Yes!</span>
                                  <span v-else="keyword_in_description != 1 " class="text-danger"> Not Found!</span>
                                </small>
                                {{--  <br><small>Content: 
                                  <span v-if="keyword_in_content == 1 " class="text-success">Yes!</span>
                                  <span v-else="keyword_in_content != 1 " class="text-danger"> Not Found!</span>
                                </small> --}}

                                <br><small>Headings: 
                                  <span v-if="keyword_in_subheading == 1" class="text-success">Yes!</span>
                                  <span v-else="keyword_in_subheading != 1 " class="text-danger"> Not Found!</span>
                                </small>

                                <br>
                                <small v-if="keyword_in_first_ten_percent_content != 1">First 10% of Content: <span  class="text-danger">Not Found!</span></small>
                                <small v-else="keyword_in_first_ten_percent_content == 1">First 10% of Content: <span  class="text-success">Yes!</span></small>
                              </p>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>                   
                    </div>
                  </div>
          </li>
          <li class="nav-item" >
            <div class="mt-0">
                    <div class="accordion" id="accordion" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-3">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-1" class="collapsed">

                              <span  v-if="total_links == 0" >Inbond &amp; Outbond Links</span>

                              <span  v-if=" total_links > 0 && (external_links == 0 || internal_links == 0)" class="text-warning">Inbond &amp; Outbond Links</span>

                              <span  v-if="total_links > 0 && external_links > 0 && internal_links > 0" class="text-success">Inbond &amp; Outbond Links</span>
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-3" class="collapse" role="tabpanel" aria-labelledby="heading-3" data-parent="#accordion" style="">
                          <div class="card-body">
                            <div class="row">
                         
                              <div class="col-12">
                                <div class="form-group">
                              
                                  <p class="text-success"><em>Enter Domain Name to Identify Internal Links</em></p>
                                  <input id="homepageurl" type="text" class="form-control" placeholder="domain name" title="Domain Determine Internal Linking" v-model="domain_name_field" v-on:change="text_length" v-on:input="text_length">
                                  <ul>
                                    <hr>
                                    
                                
                                 <li> <p><small>Total Links: <span v-text="total_links"></span></small></p></li>
                                
                                 <li>
                                    <p><small>Internal Links: <span v-text="internal_links"></span></small> </p></li>

                                    <li>
                                      <p><small>External Links: <span v-text="external_links"></span></small>
                                  </p>
                                </li>
                                  </ul>
                                 
                                </div>                             
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>                   
                    </div>
                  </div>
          </li>
     
          <li class="nav-item" >
            <div class="mt-0">
                    <div class="accordion" id="accordion" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4" class="collapsed">
                              Images &amp; Videos
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-4" class="collapse" role="tabpanel" aria-labelledby="heading-4" data-parent="#accordion" style="">
                          <div class="card-body">
                            <div class="row">
                         
                              <div class="col-12">
                                You can pay for the product you have purchased using credit cards, debit cards, or via online banking. 
                                We also provide cash-on-delivery services.                             
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>                   
                    </div>
                  </div>
          </li>
     
          <li class="nav-item" >
            <div class="mt-0">
                    <div class="accordion" id="accordion" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-6">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#collapse-6" aria-expanded="false" aria-controls="collapse-6" class="collapsed">
                             <span v-if="(words_count > 0 && words_count < 600) ||  (external_links == 0 || internal_links == 0)" class="text-warning"> Messages</span>
                             <span v-else-if="words_count > 600" class="text-success"> Messages</span>
                         
                             <span v-else> Messages</span>
                             {{-- <span v-else > Messages</span> --}}
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-6" class="collapse" role="tabpanel" aria-labelledby="heading-6" data-parent="#accordion" style="">
                          <div class="card-body">
                            <div class="row">
                         
                              <div class="col-12">
                              <ul>
                              <li v-if = "words_count < 600">     
                               <p  class="text-warning"><small>Content is <span v-text="words_count"></span> words long. Consider using at least 600 words. </small></p>
                              </li>

                              <li v-if = "words_count > 600">     
                               <p  class="text-success"><small>Content is <span v-text="words_count"></span> words long. Good! </small></p>
                              </li>

                              <li v-if = "(external_links == 0 )">     
                               <p  class="text-warning"><small>Consider Adding External Links </small></p>
                              </li>

                              <li v-if = "(internal_links == 0)">     
                               <p  class="text-warning"><small>Consider Adding Internal Links </small></p>
                              </li>

                              <li v-if = "(external_links != 0 ) || (internal_links != 0)">     
                               <p  class="text-success"><small><span v-text="external_links"></span> External &amp; <span v-text="internal_links"></span> Internal Links Found! </small></p>
                              </li>

                           {{--    <li v-if = "(internal_links != 0)">     
                               <p  class="text-success"><small><span v-text="internal_links"></span> Internal Links Found!</small></p>
                              </li>
 --}}                               
                               </ul>                           
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>                   
                    </div>
                  </div>
          </li>
          <li class="nav-item" >
            <div class="mt-0">
                    <div class="accordion" id="accordion" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-7">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#collapse-7" aria-expanded="false" aria-controls="collapse-7" class="collapsed">
                              Suggestions
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-7" class="collapse" role="tabpanel" aria-labelledby="heading-7" data-parent="#accordion" style="">
                          <div class="card-body">
                            <div class="row">
                         
                              <div class="col-12">
                              <ul>
                              <li>message no 1</li>
                               <li>message no 2</li>
                               <li>message no 3</li>  
                               </ul>                           
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>                   
                    </div>
                  </div>
          </li>
      
     
    
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">


         {{-- results --}}
         <router-view v-on:keyword_changed = "text_length"></router-view>
         {{-- /results --}}


   @yield('content')
   <div class="card shadow"> 
    <div class="card-body">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Title" v-model="title_field" v-on:input="text_length">
      </div>

        <ckeditor :editor="editor" v-model="editorData" :config="editorConfig" v-on:input="html_to_text" v-on:blur="get_plain_text"></ckeditor>
    {{-- <div id="app">
    </div> --}}
  </div>
  </div>


      
      
        </div>
    
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright &copy; 
              <span id="current_year">2018</span> 
              <a href="https://github.com/niat786" target="_blank" id="footer_name">niat786.</a>. 
            All rights reserved.</span>
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
  <script src="{{asset('js/write-seo-article.js')}}"></script>


</body>
</html>