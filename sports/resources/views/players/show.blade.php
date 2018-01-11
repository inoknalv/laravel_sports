@extends('layouts.back')

@section('content')


<div class="container truc-muche">

  @foreach($info as $fact)
<div>

<img src="{{ URL::to('/img/players/').'/'.$fact->photo }}" width="200px" height="300px"/>

</div>

<div>

<h5>{{$fact->firstname}} {{$fact->lastname}}</h5>
<h6>{{$fact->name}} <img src="{{ URL::to('/img/teams/').'/'.$fact->crest }}" width="25px" height="25px"/></h6>
<p>Age: {{$fact->age}}</p>
<p>Country: {{$fact->country}}</p>
<p>Position: {{$fact->position}}</p>
<p>Number: {{$fact->number}}</p>
<p>Goals this season: {{$fact->goals}}</p>
<p>Assists this season: {{$fact->assists}}</p>
<p>Yellow cards: {{$fact->yellow}}</p>






@endforeach

</div>
</div>
@endsection
