@extends('layouts.templates.master')
@section('content')

<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-title p-4 border-bottom">
                <h1>{{$post->title}} </h1>
             @auth
                 <div> <a href="{{ url('edit', ['slug'=> $post->slug]) }}">Edit</a></div> 
             @endauth
                <div class="container">
                    <small>{{ $post->updated_at->diffForHumans() }},&nbsp; By Admin</small>             
                </div>
            </div>
            <div class="card-body">
                <div class="fluid-container my-1">
                    <div class="container d-flex justify-content-center">
                        @if ($post->featured_image_url != '')
                        <img src="{{ asset(str_replace('public', 'storage', $post->featured_image_url)) }}" alt="image" height="340px" width="600px"  class="img-fluid rounded" >
                            
                        @endif
                    </div>
                    <div class="container">
                    <div class="mb-4"><strong>{{$post->excerpt}}</strong></div>

                    </div>
                    <div class="container">
                    <p>{!!$post->body!!}</p>
                    </div>
                    {{-- <div class="container my-1">
                         <p>{{$post->tags}}</p>
                    </div> --}}
           
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('styles')
    <style>
        h1{
            font-size: 1.4rem !important;
        }

        h2{
            font-size: 1.2rem !important;
        }

        h3{
            font-size: 1.1rem !important;
        }
       
    </style>
@endpush

    @section('title')
    <title>{{$post->title}}</title>
    @endsection

    @section('description')
    <meta name="description" content="{{$post->excerpt}}">
    @endsection

    @section('openGraph')

    <meta property="og:type" content="article">
    <meta property="og:title" content="{{$post->title}}">
    <meta property="og:description" content="{{$post->excerpt}}">
    <meta property="og:url" content="@php echo url()->full(); @endphp">
    <meta property="og:site_name" content="word counter">
    <meta property="og:image" content="{{ asset(str_replace('public', 'storage', $post->featured_image_url)) }}">
    <meta property="og:image:width" content="640">
    <meta property="og:image:height" content="352">
    <meta property="og:image:alt" content="{{$post->focus_keyword ?? 'word counter'}}">
    <meta property="og:image:type" content="image/jpeg">
    @endsection

    @if($post->tags != '')
    @section('tags')
        @php $tags = explode(',', $post->tags) @endphp
        @foreach ($tags as $tag)
            <meta property="article:tag" content="{{$tag}}">            
        @endforeach
    @endsection
    @endif

    @section('twitterCard')

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{$post->title}}">
    <meta name="twitter:description" content="{{ $post->excerpt }}">
    <meta name="twitter:image" content="{{ asset(str_replace('public', 'storage', $post->featured_image_url)) }}">
            
    @endsection 
   