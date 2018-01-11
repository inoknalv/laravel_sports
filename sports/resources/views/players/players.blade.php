@extends('layouts.back')

@section('content')

<h1 class="text-center"> Rankings by category</h1>

<div class="container text-center">

  <h2> Top Scorers </h2>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Name</th>
      <th scope="col">Team</th>
      <th scope="col">Number of goals</th>
    </tr>
  </thead>
  <tbody>
    @foreach($goals as $goal)
    <tr>
      <td><img src="{{ URL::to('/img/players/').'/'.$goal->photo }}" width="60px" height="90px"/></td>
      <td><a href="/players/{{$goal->id}}">{{ $goal->firstname}} {{ $goal->lastname}}</a></td>
      <td><img src="{{ URL::to('/img/teams/').'/'.$goal->crest }}" width="30px" height="30px">{{ $goal->trigram }}</td>
      <td>{{ $goal->goals}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

<div class="container text-center">

  <h2> Top Assists</h2>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Photo</th>
      <th scope="col">Name</th>
      <th scope="col">Team</th>
      <th scope="col">Number of assists</th>
    </tr>
  </thead>
  <tbody>
    @foreach($assists as $assist)
    <tr>
      <td><img src="{{ URL::to('/img/players/').'/'.$assist->photo }}" width="60px" height="90px"/></td>
      <td><a href="/players/{{$assist->id}}">{{ $assist->firstname}} {{ $assist->lastname}}</a></td>
      <td>{{$goal->trigram}}
      <td>{{ $assist->assists}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection
