<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
	    @if (session()->has('SUCCESS_MESSAGE'))
	    	<div class="alert alert-success">{{ session('SUCCESS_MESSAGE') }}</div>
		@endif

		@if(session()->has('ERROR_MESSAGE'))
		    <div class="alert alert-danger">
		        <p>{{ session('ERROR_MESSAGE') }}</p>
		    </div>
		@endif


        @yield('content')
    </div>
    
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>