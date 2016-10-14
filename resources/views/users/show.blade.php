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

@stop