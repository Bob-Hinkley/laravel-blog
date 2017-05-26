@extends('layouts.admin')

@section('content')
  {{-- // calling $error logic from another file --}}
  @include('partials.errors')
    <div class="row">
        <div class="col-md-12">
          {{-- Notice -> Method set to POST! --}}
            <form action="{{ route('admin.update') }}" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    {{-- // values $post being linked from routes.web --}}
                    <input type="text" class="form-control" id="title" name="title" value="{{ $post['title'] }}">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="text" class="form-control" id="content" name="content" value="{{ $post['content'] }}">
                </div>
                {{-- // adding security CSFR token.  It's hidden by default --}}
                {{ csrf_field() }}
                <input type="hidden" name="id" value={{ $postId }}>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
