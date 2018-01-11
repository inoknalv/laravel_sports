
@extends('layouts.back')
@section('content')

<h1 class="text-center"><img src="{{ URL::to('/img/ligue1.jpg' )}}" width="5%">&nbsp;Ligue 1 Conforama Standings</h1>

<hr>
<div class="container">
  <div class="col-lg-12 margin-tb">
        {{ csrf_field() }}
      <div class="table-responsive">
        <table id="myTable" class="table table-striped text-center tablesorter">
    <thead>
        <tr>
            <td class="align-middle">Rank</td>
            <td></td>
            <td>Name</td>
            <td>Games played</td>
            <td>Wins</td>
            <td>Draws</td>
            <td>Losses</td>
            <td>Points</td>
        </tr>
    </thead>
    <tbody>
    @foreach($teams as $key => $value)
        <tr>
            <td>{{ ++$key }}</td>
            <td><img src="{{ URL::to('/img/teams/').'/'.$value->crest }}" width="50px" height="50px"/></td>
            <td><a href="{{ URL::to('teams/' . $value->id) }}">{{ $value->name }}</a></td>
            <td>{{ $value->GP }}</td>
            <td>{{ $value->W }}</td>
            <td>{{ $value->D }}</td>
            <td>{{ $value->L }}</td>
            <td>{{ $value->points }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

      </div>
    </div>
  </div>
</div>



@endsection
