@extends('layouts.master')

	@if ($errors->has('name'))
    	{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
    @endif

    @if ($errors->has('email'))
    	{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
    @endif

    @if ($errors->has('password'))
    	{!! $errors->first('password', '<span class="help-block">:message</span>') !!}
    @endif

@section('content')


	<form class="form" method="POST" action="{{ action('UsersController@store') }}">
		{!! csrf_field() !!}
		Name: <input class="form-control" type="text" name="name" value="{{ old('name') }}">
		Email: <input type='textarea' class="form-control" type="text" name="email" value="{{ old('email') }}">
		Password: <input class="form-control" type="text" name="password" value="{{ old('password') }}">
		<input class="btn-success btn" type="submit" >
	</form>
@stop