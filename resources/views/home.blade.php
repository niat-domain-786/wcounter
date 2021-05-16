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
                                    <a class="nav-link" href="{{ url('admin-posts') }}">Posts</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ url('blog') }}">Blog</a>
                            </li>
                            </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{ url('home') }}">Home</a>
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
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header">
                                   <h3>Add New Blog Post</h3>
                                </div>

                                <div class="card-body">
                                    @if (session('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger" role="alert">
                                            {{ $error }}
                                        </div>
                                    @endforeach
                                @endif

                                    <form action="{{ url('submit') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label for="postType">Type</label>
                                        <select type="text" class="form-control" name="postType" >
                                        <option value="0">Post</option>
                                        <option value="1">Page</option>
                                        </select>

                                    </div>
                        
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" name="title" value="{{ old('title')}}" >

                                    </div>
                        
                                    <div class="form-group">
                                        <label for="excerpt">Excerpt</label>
                                        <input type="text" class="form-control" name="excerpt" id="excerpt" value="{{ old('excerpt')}}" >

                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug" value="{{ old('slug')}}" >
                                    </div>

                                    <div class="form-group">
                                        <label for="keyword">Keyword</label>
                                        <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Focus Keyword" value="{{ old('keyword')}}" >
                                    </div>

                                    <div class="form-group">
                                        <label for="tags">Tags</label>
                                        <input type="text" class="form-control" id="tags" name="tags" placeholder="Tags" value="{{ old('tags')}}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" id="image" name="image">
                                    </div>

                                    <div class="form-group">
                                    <textarea id="summernote" name="editordata" value="{{ old('editordata')}}" ></textarea>
                                    </div>

                                    <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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

</body>
</html>
