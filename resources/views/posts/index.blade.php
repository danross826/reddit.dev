@extends('layouts.master')

@section('content')
		<h1>Index</h1>


		<table class="table table-striped table-bordered">


		<tr>
		    <th>Title</th>
		    <th>Url</th> 
		    <th>Content</th>
		    <th>Created On</th>
	  	</tr>

	@foreach ($posts as $post)

		<tr>

		    <td>{{ $post->title }}</td>
		    <td>{{ $post->url }}</td>
		    <td>{{ $post->content }}</td>
		    <td>{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}</td>  
	    </tr>  
		
	@endforeach

	{!! $posts->render() !!}

		</table>

@stop