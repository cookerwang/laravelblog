@extends('app')
@section('content')
    <h1>撰写新文章</h1>
    {!! Form::open(['action'=>'ArticleController@store']) !!}
    @include('articles.form')
    {!! Form::close() !!}
    @include('errors.list')
@stop