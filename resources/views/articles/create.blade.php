@extends('app')

@section('content')
    <h1>Write a new Article</h1>
    <br/>

    {!! Form::open(['url' => 'articles']) !!}
        @include('articles._form', ['submitButtonText' => 'Add Article'])
    {!! Form::close() !!}

    @include('errors.list')
@stop