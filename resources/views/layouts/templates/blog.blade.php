@extends('layouts.templates.master')
@section('content')

 @forelse ($posts as $post)
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">               
                <div class="card-body">
                    <!-- <h5 class="card-title mb-4">Manage Tickets</h5> -->
                        <a href="/{{$post->slug}}">
                            <h3>{{$post->title}}</h3>
                        </a> {{-- post link--}}
                    <div class="fluid-container">
                        <div class="row ticket-card mt-3 pb-2 mb-3">
                            <!-- <div class="col-md-4 d-flex justify-content-center">
                                <img class=" mb-4 mb-md-0 d-block mx-md-auto"
                                    src="http://placehold.it/270x170/" alt="profile image">
                            </div> -->
                            <div class="ticket-details col-md-12">

                                <p class="text-gray ellipsis mb-2">{{$post->excerpt}}</p>

                                <div class="row text-gray d-md-flex d-none">
                                    <div class="col-4 d-flex">
                                        <small class="mb-0 mr-2 text-muted text-muted">Published
                                            :</small>
                                        <small class="Last-responded mr-2 mb-0 text-muted text-muted">{{$post->updated_at->diffForHumans()}}</small>
                                    </div>
                                    {{-- <div class="col-4 d-flex">
                                        <small class="mb-0 mr-2 text-muted text-muted">Due in
                                            :</small>
                                        <small class="Last-responded mr-2 mb-0 text-muted text-muted">2
                                            Days</small>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </div>

    @empty
        
    <h3>No Post Found!</h3>

    @endforelse
    @if($posts != [])
    <div class="container my-2 d-flex justify-content-center">
        {{$posts->links()}}

    </div>
    @endif


@endsection