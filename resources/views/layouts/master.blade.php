<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('dashboard/material/assets/img/apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('dashboard/material/assets/img/favicon.ico')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Words, Character counter & keyword density checker - free online tool</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

  {{-- Canonical SEO --}}
  <link rel="canonical" href="{{url('/')}}" />

  {{--  Social tags      --}}
  <meta name="keywords" content="word counter online, Simple words counter, paragraph counter, character counter tool, sentecne counter, free online word counter, keyword density checker tool, characters with whitespaces counter tool ">
  <meta name="description" content="A simple online tool to count the words, characters, characters with whitespaces, sentences, paragraphs & calculate keyword density in plain english text.">

  {{-- Twitter Card data --}}
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@wcounter">
  <meta name="twitter:title" content="words, characters, sentences counter and keyword density checker | free online tool">
  <meta name="twitter:description" content="A simple online tool to count the words, characters, characters with whitespaces, sentences, paragraphs & calculates keyword density in plain english text.">

  <meta name="twitter:creator" content="@wcounter">
  <meta name="twitter:image" content="https://images.freeimages.com/images/small-previews/cfd/writinghand-1238351.jpg">
<meta property="article:tag" content="free online word counter">
<meta property="article:tag" content="online text word counter">
<meta property="article:tag" content="words and characters counter">
<meta property="article:tag" content="count words and characters">
<meta property="article:tag" content="online word and character count">
<meta property="article:tag" content="keyword density checker tool">
<meta property="article:tag" content="best keyword density checker">
<meta property="article:tag" content="word counter online">
<meta property="article:tag" content="Simple words counter">
<meta property="article:tag" content="paragraph counter">
<meta property="article:tag" content="word count tool online">
<meta property="article:tag" content="character counter tool">
<meta property="article:tag" content="sentecne counter">
<meta property="article:tag" content="keyword density checker">
<meta property="article:tag" content="keyword density checker free  ">
<meta property="article:tag" content="keyword frequency finder">
<meta property="article:tag" content="keyword frequency checker">
<meta property="article:tag" content="keywords highlighter">
<meta property="article:tag" content="word count and grammar check online">
<meta property="article:tag" content="spelling and grammar check">

{{-- <meta property="og:updated_time" content="<?php echo now(); ?>"> --}}
<meta property="og:updated_time" content="2021-03-21 08:18:32">


  {{-- <meta property="fb:app_id" content="#"> --}}
  <meta property="og:image" content="https://images.freeimages.com/images/small-previews/cfd/writinghand-1238351.jpg" />
  <meta property="og:site_name" content="Online Word Counter Tools" />
  {{-- Open Graph data --}}

  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="article">
  <meta property="og:title" content="words, characters, sentences counter and keyword density checker | free online tool">
  <meta property="og:description" content="A simple online tool to count the words, characters, characters with whitespaces, sentences, paragraphs & calculate keyword density in plain english text.">
  <meta property="og:url" content="https://www.wcounter.net">
  <link href="{{asset('css/wcounter.css')}}" rel="stylesheet" />
  <script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "SoftwareApplication",
  "name": "word counter",
  "applicationCategory": "Education, MS Word, Content Writing, English Text",
  "operatingSystem": "Web operating system",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "ratingCount": "12887"
  },
  "offers": {
    "@type": "Offer",
    "priceCurrency": "USD",
    "price": "0.00"
  }
}
</script>
  <meta name="google-site-verification" content="fLOCHpysy-n3OdJo05lRZuDKZrF08sA4rdAWR8LWe6o" />

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TH5J6WLP97"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TH5J6WLP97');
</script>

</head>

<body class="">

  <div class="wrappern" id="app" >

    <header class="navbar navbar-expand navbar-dark bg-info">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6">
            
    
      <a href="{{ url('/') }}" target="_blank" class="navbar-brand mr-0 mr-md-2 navbar-absolute-logo">
      Online Word Counter
    </a> 
  </div>

    <div class="col-md-6" >
      
 <div class="navbar-nav-scrolls">
        <ul class="navbar-nav bd-navbar-nav flex-row ">
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link"> Home </a></li> 
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

                  <a href="{{url('/privacy–policy')}}">Privacy</a>
              </li>
 
            <li><a href="{{url('/disclaimer')}}">Disclaimer</a></li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <span v-text='current_year'>
        
            </span>, all rights reserved.
          </div>
        </div>
      </footer>
    </div>
  </div>


  <script src="{{asset('js/app.js')}}" async></script>
</body>
</html>