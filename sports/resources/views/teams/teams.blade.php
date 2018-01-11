
@extends('layouts.back')
@section('content')

<h1 class="text-center">Team list&nbsp;@auth('admin')<a href="{{ URL::to('teams/create') }}"><button type="button" class="btn btn-primary">+ Add team</button></a>@endauth</h1>

<hr>
<div class="container">
  <div class="col-lg-12 margin-tb">
        {{ csrf_field() }}
      <div class="table-responsive">
        <table id="myTable" class="table table-striped table-bordered text-center tablesorter">
    <thead>
        <tr>
            <td>Name</td>
            <td>Trigram</td>
            <td>Team Crest</td>
            @auth('admin')
            <td>Actions</td>
            @endauth
        </tr>
    </thead>
    <tbody>
    @foreach($teams as $key => $value)
        <tr>
            <td><a href="{{ URL::to('teams/' . $value->id) }}">{{ $value->name }}</a></td>
            <td>{{ $value->trigram }}</td>
            <td><img src="{{ URL::to('/img/teams/').'/'.$value->crest }}" width="50px" height="50px"/></td>
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
