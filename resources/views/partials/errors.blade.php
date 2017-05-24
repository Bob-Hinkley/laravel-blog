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
