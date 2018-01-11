
@extends('layouts.back')
@section('content')

<h1 class="text-center">Users management</h1>

<hr>
<div class="container">
  <div class="col-lg-12 margin-tb">
        {{ csrf_field() }}
      <div class="table-responsive">
        <table id="myTable" class="table table-striped table-bordered text-center tablesorter">
    <thead>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email address</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('users/' . $value->id) }}">Display</a>
                <a class="btn btn-small btn-info" href="{{ URL::to('users/' . $value->id . '/edit') }}">Edit</a>
                <a class="btn btn-small btn-danger" href="{{ URL::to('users/' . $value->id . '/destroy') }}">Remove</a>
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
