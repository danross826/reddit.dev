@extends('layouts.master')

@section('content')
	<h1>Show</h1>

	<table class="table table-striped table-bordered">


	<tr>
		<th>Vote Score</th>
	    <th>Title</th>
	    <th>Url</th> 
	    <th>Content</th>
  	</tr>
	<tr>
		<td>{{ $post->vote_score }}</td>
	    <td>{{ $post->title }}</td>
	    <td>{{ $post->url }}</td>
	    <td>{{ $post->content }}</td>

    </tr>  
	
	</table>

		@if(Auth::check())
			<div class="col-sm-2">
				<div class="row">
					<form class="form" method="POST" action="{{ action('PostsController@addVote') }}">
					
						<input type="hidden" name="id" value="{{ $post->id }}">
						<input type="hidden" name="user_id" value="{{ $post->user_id }}">

						{!! csrf_field() !!}
						<input type="submit" value="Vote Up" class="btn btn-default">
					</form>
					<form class="form" method="POST" action="{{ action('PostsController@downVote') }}">
					
						<input type="hidden" name="id" value="{{ $post->id }}">
						<input type="hidden" name="user_id" value="{{ $post->user_id }}">

						{!! csrf_field() !!}
						<input type="submit" value="Vote Down" class="btn btn-default">
					</form>
					<form class="form" method="POST" action="{{ action('PostsController@destroy') }}">
					
						<input type="hidden" name="id" value="{{ $post->id }}">

						{!! csrf_field() !!}
						<input type="submit" value="Delete" class="btn btn-default">
					</form>
					<a href="{{ $post->id }}/edit" class="btn btn-default">Edit</a>
				</div>
		@endif



@stop