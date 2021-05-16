<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Word Counter & Keyword Density Checker') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"> --}}

<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
{{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    
</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Word Counter') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ Auth::user()->name }}</a>
                            </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{ url('admin-posts') }}">Posts</a>
                            </li>
                        
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>                      
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        {{-- bd 3.4 nav --}}
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      {{-- <a class="navbar-brand" href="#">Brand</a> --}}
          <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Word Counter') }}
                </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

         <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ Auth::user()->name }}</a>
                            </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{ url('admin-posts') }}">Admin Posts</a>
                            </li>
                              </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{ url('home') }}">Home</a>
                            </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{ url('blog') }}">Blog</a>
                            </li>
                        
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>                      
                        @endguest

      </ul>
 
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        {{-- bd 3.4 nav ends --}}
        <main class="py-4">
            {{-- @yield('content') --}}
{{-- content --}}

                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger" role="alert">
                                            {{ $error }}
                                        </div>
                                    @endforeach
                                @endif
                <div class="container">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header">
                                   <h3>Edit Post/Page</h3>
                                </div>

                                <div class="card-body">
                                    @if (session('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                <form action="{{ url('update') }}" method="POST" enctype="multipart/form-data" >
                    @method('PATCH')
                    @csrf

                <div class="form-group">
                    <label for="postType">Type</label>
                    <select type="text" class="form-control" name="postType" >
                    <option value="0" @if($post->type == 0) selected  @endif>Post</option>
                    <option value="1" @if($post->type == 1) selected  @endif>Page</option>
                    </select>

                </div>
      
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $post->title }}" >

                </div>
      
                <div class="form-group">
                    <label for="excerpt">Excerpt</label>
                    <input type="text" class="form-control" name="excerpt" id="excerpt"  value="{{ $post->excerpt }}">

                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" name="newslug" id="slug" placeholder="Slug"  value="{{ $post->slug }}">
                    <input type="hidden" class="form-control" name="oldslug"  value="{{ $post->slug }}">
                </div>

                <div class="form-group">
                    <label for="keyword">Keyword</label>
                    <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Focus Keyword"  value="{{ $post->focus_keyword }}">
                </div>

                <div class="form-group">
                    <label for="tags">Tags</label>
                    <input type="text" class="form-control" id="tags" name="tags" placeholder="Tags" value="{{ $post->tags }}">
                </div>
                <div class="form-group">
                        <img src="{{ asset(str_replace('public', 'storage', $post->featured_image_url)) }}" alt="image" width="300px"  class="img-fluid rounded" >

                </div>
                <div class="form-group">
                
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image">
                </div>

                <div class="form-group">
                <textarea id="summernote" name="editordata"> {{ $post->body }}</textarea>
                </div>

                <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
                </div>     
                </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- /content --}}
            </main>
    </div>
<script>
$(document).ready(function() {
$('#summernote').summernote();
});
</script>

    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}


</body>
</html>
