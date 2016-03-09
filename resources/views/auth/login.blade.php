@extends('app')
@section('content')
    <div class="col-md-4 col-md-offset-4">
        {!! Form::open(['url'=>'/login']) !!}

        <div class="form-group">
            {!! Form::label('name', 'name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'email:') !!}
            {!! Form::email('email', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'password:') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>

        {!! Form::submit('login', ['class'=>'btn btn-primary form-control']) !!}

        {!! Form::close() !!}
        @include('errors.list')
    </div>

@stop