@extends('layouts.back')

@section('content')

    <h1 class="text-center">Insert a Player</h1>

    <hr>

    @include ('layouts.errors')

<div class="container">
  <div class="col-md-6 col-md-offset-3">
    <form method="post" action="/players/create" enctype="multipart/form-data">

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
        <input type="number" class="form-control" id="age" name="age" min="1" max="99">
      </div>

      <div class="form-group">
        <label for="country">Country</label>
        <input type="text" class="form-control" id="country" name="country">
      </div>

      <div class="form-group" id="radioposition">
      <label for="radioposition"> Position on the field </label>

            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="position" value="forward"> Forward
              </label>
            </div>

            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="position" value="midfielder"> Midfielder
              </label>
            </div>

            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="position" value="defender"> Defender
              </label>
            </div>

            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="position" value="goalkeeper"> Goalkeeper
              </label>
            </div>
          </div>

          <div class="form-group">
            <label for="team_id">Team</label>
            <select class="form-control" id="team_id" name="team_id">
              @foreach($teams as $team)
              <option value="{{ $team->id }}" > {{ $team->name }}</option>
              @endforeach
            </select>
          </div>

      <div class="form-group">
        <label for="number">Number</label>
        <input type="number" class="form-control" id="number" name="number" min="1" max="99">
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="8" cols="80"></textarea>
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
