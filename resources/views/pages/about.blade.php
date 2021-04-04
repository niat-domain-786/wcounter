@extends('layouts.post')
@section('title')
  <title>About Us </title>
@endsection
@section('canonical')
  <link rel="canonical" href="{{url('/about–us')}}" />
@endsection
@section('component')
  <word-counter v-on:keyword_changed = "text_length"></word-counter> 
@endsection
@section('article')

<p>Welcome to online word counter tool, your number one source for all sources to count words, characters and calculate keyword density. We're dedicated to giving you the very besttool for free, with a focus on simple, fast and accurate online word counter tool.</p>


<p>Founded in 2021 by infopediya, online word counter has come a long way from its beginnings in USA. When infopediya first started out, their passion for creating simple tool to make fast and simple tools so that online word counter can offer you results in no time.</p>


<p>We hope you enjoy our tools as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.</p>


<p class="py-2">Sincerely,</p>

<p class="py-2"><a href="https://infopediya.com" target="_blank">infopediya team</a></p>

@endsection

