@extends('layouts.app')

@section('content')
    <h1>Sign In</h1>
    <hr/>

    @include('layouts.notification')

    {!! Form::open(['url' => '/login', 'role' => 'form']) !!}
        <!-- Email Field -->
        <div class="form-group">
            {!! Form::label('email', 'Email Address', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <!-- Password Field -->
        <div class="form-group">
            {!! Form::label('password', 'Password', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
        </div>

        <!-- remember_me Field -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-3">
                {!! Form::label('remember', 'Remember me', [] ) !!}
                {!! Form::checkbox('remember', 1, null, ['class' => 'pull-left remember']) !!}
            </div>
        </div>

        <!-- Log In! Field -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">
                {!! Form::submit('Sign In', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    {!! Form::close() !!}
@endsection
