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

@foreach ($posts as $post)
<div class="row">
  <div class="col-md-12 text-center">
    {{-- referencing post titles and content, which are dynamically added --}}
    <h1 class="post-title">{{ $post['title'] }}</h1>
    <p>T{{ $post['content'] }}</p>
    <p><a href="{{ route('blog.post', ['id' => array_search($post, $posts)]) }}">Read more...</a></p>
  </div>
</div>
@endforeach



@endsection
