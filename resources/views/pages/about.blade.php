@extends('app')

@section('content')
<h1>About {{$name}}</h1>

@if(count($people)>0)
<h3>People I Like:</h3>
<ul>
    @foreach($people as $person)
        <li>{{$person}}</li>
    @endforeach
</ul>
@endif
<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis doloribus eaque neque quam! Ab asperiores eum iusto labore laborum porro quasi qui quia quibusdam quod reiciendis sequi, tempore temporibus voluptas?
</p>
@endsection