@extends('layouts.master')

@section('content')
		<h1>Index</h1>


		<table class="table table-striped table-bordered">


		<tr>
		    <th>Title</th>
		    <th>Url</th> 
		    <th>Content</th>
		    <th>Created On</th>
		    <th>Created By</th>
	  	</tr>

	@foreach ($posts as $post)

		<tr>

		    <td>{{ $post->title }}</td>
		    <td>{{ $post->url }}</td>
		    <td>{{ $post->content }}</td>
		    <td>{{ $post->created_at}}</td>
		    <td>{{ $post->user->name}}</td>  
	    </tr>  
		
	@endforeach

{{-- 	{!! $posts->render() !!} --}}

		</table>

	<div class="container">
		<div class="row">
		        <div class="col-md-6">
		    		<h2>Search Bar</h2>
			            <div id="custom-search-input">
			                <div class="input-group col-md-12">
			                	<form action="{{ action('PostsController@index') }}" method="GET" class="form">
				                    <input type="text" class="form-control input-lg" placeholder="Search Posts" name="search_post" />
				                    <span class="input-group-btn">
				                        <button class="btn btn-info btn-lg" type="submit">
				                            <i class="glyphicon glyphicon-search"></i>
				                        </button>
				                    </span>
			                    </form>

			                </div>
			            </div>
		        </div>
		</div>
	</div>

@stop