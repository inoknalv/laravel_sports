@extends('layouts.back')

@section('content')

    <h1 class="text-center">Insert a Coach</h1>

    <hr>

<div class="container">
  <div class="col-md-6 col-md-offset-3">
    <form method="post" action="/coaches/create">

      {{ csrf_field() }}

      <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname">
      </div>

      <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" id="firstname" name="firstname">
      </div>

      <div class="form-group">
        <label for="age">Age</label>
        <input type="number" class="form-control" id="age" name="age">
      </div>

      <div class="form-group">
        <label for="country">Country</label>
        <input type="text" class="form-control" id="country" name="country">
      </div>


      <div class="form-group">
        <label for="team_id">Team ID</label>
        <input type="text" class="form-control" id="team_id" name="team_id">
      </div>

      <div class="form-group">
        <label for="number">Number</label>
        <input type="number" class="form-control" id="number" name="number">
      </div>

        <div class="form-group">
          <label for="photo">Photo</label>
          <input type="file" class="form-control-file" id="photo" name="photo">
        </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
      </div>
    </form>
  </div>


  </div>

@endsection
