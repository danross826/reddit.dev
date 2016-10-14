@extends('layouts.master')


	@if ($errors->has('title'))
    	{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
    @endif

    @if ($errors->has('content'))
    	{!! $errors->first('content', '<span class="help-block">:message</span>') !!}
    @endif

    @if ($errors->has('url'))
    	{!! $errors->first('url', '<span class="help-block">:message</span>') !!}
    @endif

@section('content')
	<form class="form" method="POST" action="{{ action('PostsController@store') }}">
		{!! csrf_field() !!}
		Title: <input class="form-control" type="text" name="title" value="{{ old('title') }}">
		Content: <input type='textarea' class="form-control" type="text" name="content" value="{{ old('content') }}">
		URL: <input class="form-control" type="text" name="url" value="{{ old('url') }}">
		<input class="btn-success btn" type="submit" >
	</form>
@stop