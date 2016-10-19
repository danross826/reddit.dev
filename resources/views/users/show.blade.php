@extends('layouts.master')

@section('content')
	<h1>Show</h1>

	<table class="table table-striped table-bordered">


	<tr>
	    <th>ID</th>
	    <th>Name</th> 
	    <th>Email</th>
  	</tr>
	<tr>

	    <td>{{ $user->id }}</td>
	    <td>{{ $user->name }}</td>
	    <td>{{ $user->email }}</td>  
    </tr>  
	
	</table>
	<table class="table table-striped table-bordered">

		<tr>
			<th>Votes</th>
		    <th>Title</th>
		    <th>Url</th> 
		    <th>Content</th>
		    <th>Created On</th>
		    <th>Created By</th>
	  	</tr>


	@foreach ($user->posts as $post)

		<tr>
			<td>{{ $post->vote_score }}</td>
		    <td><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></td>
		    <td><a href="{{ $post->url }}">{{ $post->url }}</a></td>
		    <td>{{ $post->content }}</td>
		    <td>{{ $post->created_at}}</td>
		    <td>{{ $post->user->name}}</td>  
	    </tr>  


		
	@endforeach

		</table>

			<div class="row">
				<div class="col-sm-2">

					<p>Total Score: {{$score}}</p>
				</div>
			</div>

		@if(Auth::check())
			<div class="row">
				<div class="col-sm-2">

					<a href="{{ $user->id }}/edit" class="btn btn-default">Edit</a>
				</div>
			</div>
		@endif
@stop
