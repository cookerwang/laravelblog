@extends('app')
@section('content')
    {!! Form::model($article, ['method'=>'patch', 'url'=>'/article/update']) !!}
    {!! Form::hidden('id', null) !!}
    @include('articles.form')
    {!! Form::close() !!}
    @include('errors.list')
@stop