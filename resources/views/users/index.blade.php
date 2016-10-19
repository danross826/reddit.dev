@extends('layouts.master')

@section('content')
	<h1>Index</h1>

	<table class="table table-striped table-bordered">


	<tr>
	    <th>ID</th>
	    <th>Name</th> 
	    <th>Email</th>
  	</tr>

@foreach ($users as $user)

	<tr>

	    <td>{{ $user->id }}</td>
	    <td><a href="/users/{{ $user->id }}">{{ $user->name }}</a></td>
	    <td>{{ $user->email }}</td>  
    </tr>  
	
@endforeach

{!! $users->render() !!}

	</table>

	<div class="container">
		<div class="row">
		        <div class="col-md-6">
		    		<h2>Search Bar</h2>
			            <div id="custom-search-input">
			                <div class="input-group col-md-12">
			                	<form action="{{ action('UsersController@index') }}" method="GET" class="form">
				                    <input type="text" class="form-control input-lg" placeholder="Search Users" name="search_user" />
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