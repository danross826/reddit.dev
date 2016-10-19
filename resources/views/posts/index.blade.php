@extends('layouts.master')

@section('content')
		<h1>Index</h1>


		<table class="table table-striped table-bordered">


		<tr>
			<th>Vote Score</th>
		    <th>Title</th>
		    <th>Url</th> 
		    <th>Content</th>
		    <th>Created On</th>
		    <th>Created By</th>
	  	</tr>

	@foreach ($posts as $post)

		<tr>
			<td>{{ $post->vote_score }}</td>
		    <td><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></td>
		    <td><a href="{{ $post->url }}">{{ $post->url }}</a></td>
		    <td>{{ $post->content }}</td>
		    <td>{{ $post->created_at}}</td>
		    <td><a href="/users/{{ $post->user->id }}">{{ $post->user->name }}</a></td>
	    </tr>
		
	@endforeach

	{!! $posts->render() !!}

		</table>

	<div class="container">
		<div class="row">
		        <div class="col-md-6">
		    		<h2>Search Bar</h2>
			            <div id="custom-search-input">
			                <div class="col-md-12">
			                	<form action="{{ action('PostsController@index') }}" method="GET" class="form">
				                   

				                   <input type="text" class="form-control input-lg" placeholder="Search Posts" name="search_post" />

				                  	<div class="radio">
				                  		<label>
										<input type="radio" name="sort" value="created_at" id="optionsRadios1">
										Order by date.
										</label>
									</div>
									<div class="radio">
										<label>
										<input type="radio" name="sort" value="vote_score" id="optionsRadios2">
										Order by vote.
										</label>
									</div>

				                        <button class="btn btn-info btn-lg" type="submit">
				                            <i class="glyphicon glyphicon-search"></i>
				                        </button>




			                    </form>

			                </div>
			            </div>
		        </div>
		</div>
	</div>

@stop