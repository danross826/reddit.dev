@extends('layouts.master')

@section('content')
	<h1>Index</h1>

	<table class="table table-striped table-bordered">


	<tr>
	    <th>Title</th>
	    <th>Url</th> 
	    <th>Content</th>
  	</tr>

@foreach ($users as $user)

	<tr>

	    <td>{{ $user->id }}</td>
	    <td>{{ $user->name }}</td>
	    <td>{{ $user->email }}</td>  
    </tr>  
	
@endforeach

{!! $users->render() !!}

	</table>

@stop