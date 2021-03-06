@extends('layouts.admin')

@section('content')
  {{-- //If logic for errors --}}
@if(count($errors->all()))
  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-danger">
        <ul>
          {{-- laravel comes with some default error messages built in.  To see, go to lang > en > validation.php --}}
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
  @endif
    <div class="row">
        <div class="col-md-12">
          {{-- Method set to POST! --}}
            <form action="{{ route('admin.create') }}" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="text" class="form-control" id="content" name="content">
                </div>
                {{-- // adding security CSFR token.  It's hidden by default. --}}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
