@extends('layouts.back')

@section('content')


<div class="container">
  <h2 class="text-center"><img src="{{ URL::to('/img/teams/').'/'.$team->crest }}" width="150px" height="150px"/></h1>
  <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="card card-inverse card-primary mb-3 text-center">
          <div class="card-block">
            <blockquote class="card-blockquote">
              <h3>{{ $team->name }}</h3>
              <div class="btn-group btn-group-lg" role="group">
                <button type="button" class="btn btn-success" disabled>W: {{ $team->h_wins + $team->a_wins }}</button>
                <button type="button" class="btn btn-warning" disabled>D: {{ $team->h_draws + $team->a_draws }}</button>
                <button type="button" class="btn btn-danger" disabled>L: {{ $team->h_loss + $team->a_loss }}</button>
              </div>
            </blockquote>
          </div>
        </div>
      </div>
  </div>

  <hr>
  <div class="row">
    <table id="myTable" class="table table-striped text-center tablesorter">
      <thead>
        <tr>
            <td></td>
            <td>Name</td>
            <td>Country</td>
            <td>Position</td>
            <td>Age</td>
            <td>Number</td>
        </tr>
      </thead>
      <tbody>
    @foreach($team->players as $player)
        <tr>
            <td><img src="{{ URL::to('/img/players/').'/'.$player->photo }}" width="50px" height="75px"></td>
            <td><a href="{{ URL::to('players/' . $player->id) }}">{{ $player->lastname }}&nbsp;{{ $player->firstname }}</a></td>
            <td>{{ $player->country }}</td>
            <td>{{ $player->position }}</td>
            <td>{{ $player->age }}</td>
            <td>{{ $player->number }}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
  </div>
  <div class="row">
    <div class="text-center">
        <a class="btn btn-primary" href="{{ URL::to('teams') }}"> Back</a>
    </div>
  </div>
</div>




@endsection
