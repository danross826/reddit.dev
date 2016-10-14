
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
    <form method="POST" action="{{ action('PostsController@update', $post->id) }}">
        {!! csrf_field() !!}
        {!! method_field('PUT') !!}
        Title: <input type="text" name="title" value="{{ (old('title') == null) ? $post->title : old('title') }}">
        <br>
        Url: <input type="text" name="url" value="{{ (old('url') == null) ? $post->url : old('url') }}">
        <br>
        Content: <textarea name="content">{{ (old('content') == null) ? $post->content : old('content') }}</textarea>
        <br>
        <button class="btn btn-primary">Submit</button>
    </form>
@stop