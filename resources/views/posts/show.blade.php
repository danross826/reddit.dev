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

		<div class="col-sm-2">
			<div class="row">
				
			</div>
			<div class="row">
				<p class="vote-score text-center" id="vote-score">{{ $post->voteScore() }}</p>
			</div>
			<div class="row">

			</div>
		</div>

@stop