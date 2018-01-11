@extends('layouts.back')

@section('content')

    <h1 class="text-center">Insert a Team</h1>

    <hr>

<div class="container">
  <div class="col-md-6 col-md-offset-3">
    <form method="post" action="/teams/create" enctype="multipart/form-data">

      {{ csrf_field() }}

      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>

      <div class="form-group">
        <label for="trigram">Trigram</label>
        <input type="text" class="form-control" id="trigram" name="trigram" maxlength="3" style='text-transform:uppercase'>
      </div>

      <div class="form-group">
        <label for="crest">Team Crest</label>
        <input type="file" class="form-control-file" id="crest" name="crest">
        <small class="text-muted">Maximum file size: 2048kb. File formats accepted: jpeg, png, jpg, gif, svg.</small>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
      </div>
    </form>
  </div>


  </div>

@endsection
