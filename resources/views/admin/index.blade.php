@extends('layouts.admin')

@section('content')
  {{-- //if session has info, show info block.  Else, don't. --}}
  @if(Session::has('info'))
  <div class="row">
    <div class="col-md-12">
      {{-- // info is key name assigned in routes file, under last Post request --}}
      <p class="alert alert-info">{{ Session::get('info') }}</p>
    </div>
  </div>
@endif
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.create') }}" class="btn btn-success">New Post</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <p><strong>Learning Laravel</strong> <a href="{{ route('admin.edit', ['id' => 1]) }}">Edit</a></p>
        </div>
    </div>
@endsection
