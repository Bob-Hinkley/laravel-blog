@extends('layouts.master')

@section('content')


{{-- <div class="row"> --}}
  {{-- <div class="col-md-12"> --}}
    {{-- <h1>Control Structures</h1> --}}
    {{-- Simple 1 line logic --}}
    {{-- <p>{{ 2 == 3 ? "Hello" : "Does not equal"}}</p> --}}

    {{-- If else statement --}}
    {{-- @if(false) --}}
      {{-- <p>This only displays if true</p> --}}
    {{-- @else --}}
      {{-- <p>This only displays if it false</p> --}}
    {{-- @endif --}}


    {{-- <hr /> --}}
    {{-- for each loop --}}
    {{-- @for($i=0; $i < 5; $i++) --}}
      {{-- <p>{{$i + 1}} Iteration</p> --}}
    {{-- @endfor --}}

    {{-- <hr> --}}
    {{-- <h2>XSS Test</h2> --}}
    {{-- Escaped --}}
    {{-- {{"<script>alert('Hello');</script>"}} --}}

    {{-- controlled --}}
    {{-- {!!"<script>alert('Hello');</script>"!!} --}}
  {{-- </div> --}}
{{-- </div> --}}


<div class="row">
  <div class="col-md-12">
    <p class="quote">The beautiful Laravel</p>
  </div>
</div>

<div class="row">
  <div class="col-md-12 text-center">
    <h1 class="post-title">Learning Laravel</h1>
    <p>This Blog post will get you right on track with Laravel!</p>
    <p><a href="{{ route('blog.post', ['id' => 1]) }}">Read more...</a></p>
  </div>
</div>

<div class="row">
  <div class="col-md-12 text-center">
    <h1 class="post-title">The next Steps</h1>
    <p>Understanding the Basics is great, but you need to be able to make the next steps.</p>
    <p><a href="{{ route('blog.post', ['id' => 2]) }}">Read more...</a></p>
  </div>
</div>

<div class="row">
  <div class="col-md-12 text-center">
    <h1 class="post-title">Laravel 5.3</h1>
    <p>Though announced as a "minor release", Laravel 5.3 ships with some very interesting additions and features</p>
    <p><a href="{{ route('blog.post', ['id' => 3]) }}">Read more...</a></p>
  </div>
</div>


@endsection
