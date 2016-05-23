@extends('app')

@section('content')
    <h1>{{$article->title}}</h1>
    <br/>
    <article>
        {{$article->body}}
    </article>
@stop