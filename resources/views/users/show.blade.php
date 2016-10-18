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
		    <th>Title</th>
		    <th>Url</th> 
		    <th>Content</th>
		    <th>Created On</th>
		    <th>Created By</th>
	  	</tr>

	@foreach ($user->posts as $post)

		<tr>

		    <td>{{ $post->title }}</td>
		    <td>{{ $post->url }}</td>
		    <td>{{ $post->content }}</td>
		    <td>{{ $post->created_at}}</td>
		    <td>{{ $post->user->name}}</td>  
	    </tr>  
		
	@endforeach


		</table>

<?php

var_dump($user);

?>
@stop
