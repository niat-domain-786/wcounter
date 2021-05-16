<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Word Counter & Keyword Density Checker') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/app.css')}}"> 
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
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
                                    <a class="nav-link" href="{{ url('home') }}">Add New Post</a>
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
                </div>
            </div>
        </nav>
        <main class="py-4">
     
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <form action="{{ url('admin-posts') }}" method="GET">

                            
                                   <h3>List of Posts</h3>
                                   <select name="type" id="type" class="form-control">
                                       <option value="0" @if(request('type') == 0) selected @endif>Posts</option>
                                       <option value="1" @if(request('type') == 1) selected @endif>Pages</option>
                                   </select>
                                   <button class="btn btn-sm btn-primary my-1">submit</button>
                                    </form>
                                </div>

                                <div class="card-body">
                                    @if (session('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                         @if (session('error'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ session('error') }}
                                        </div>
                                    @endif

                @forelse ($allPosts as $post)
           
               
                <div class="card mb-1">
                {{-- <div class="card-header">
                    Featured
                </div> --}}
                <div class="card-body col-md-12">
                    <div class="row">
                    <div class="col-md-9">
                    <h5 class="card-title"><a href="{{$post->slug}}">{{$post->title}}</a></h5>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    </div>
                <div class="col-md-3 d-flex">
                   <form> <a href="{{ url('edit', ['slug'=> $post->slug]) }}" type="submit" class="btn btn-primary btn-sm mx-1">Edit</a></form>
                    <form action="{{ url('delete') }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" name="slug" value="{{ $post->slug }}">

                        <button type="submit" class="btn btn-link text-danger btn-sm">Delete</button>

                        
                    </form>

                </div>
                    </div>
                 
                </div>
                </div>

                                        
                                    @empty
                                    <h2>No Posts found</h2>
                                        
                                    @endforelse
 
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
    </div>


</body>
</html>
