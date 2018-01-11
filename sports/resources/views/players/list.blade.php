
@extends('layouts.back')
@section('content')

<h1 class="text-center">Players list&nbsp;@auth('admin')<a href="{{ URL::to('players/create') }}"><button type="button" class="btn btn-primary">+ Add player</button></a>@endauth</h1>

<hr>
<div class="container">
  <div class="col-lg-12 margin-tb">
        {{ csrf_field() }}
      <div class="table-responsive">
        <table id="myTable" class="table table-striped table-bordered text-center tablesorter">
    <thead>
        <tr>
            <td>Name</td>
            <td>Trigram</td></td>
            <td>Photo</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($players as $key => $value)
        <tr>
            <td><a href="{{ URL::to('players/' . $value->id) }}">{{ $value->lastname }} {{ $value->firstname }}</a></td>
            <td>{{ $value->trigram }}</td>
            <td><img src="{{ URL::to('/img/players/').'/'.$value->photo }}" width="50px" height="75px"/></td>
            <td>
                @auth('admin')
                <a class="btn btn-small btn-info" href="{{ URL::to('teams/' . $value->id . '/edit') }}">Edit</a>
                <a class="btn btn-small btn-danger" href="{{ URL::to('teams/' . $value->id . '/destroy') }}">Remove</a>
                @endauth
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

      </div>
    </div>
  </div>
</div>



@endsection
