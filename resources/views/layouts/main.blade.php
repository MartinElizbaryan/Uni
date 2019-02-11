<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	
	<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">


    <!-- Fonts -->
    

	{{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"> --}}
	
	
</head>
<body>
	

<div class="wrapper">
	
	@include('global.left_menu')

	<div class="main-panel">
		@include('global.header')

		<div class="content">
	        <div class="container-fluid">
	        	@include("errors.errors")
	            
	              
	              @yield('content')

	         
	        </div>
		</div>


	</div>

</div>	





</body>
@stack("_js")
{{-- <script src="{{ asset('js/global.js') }}"></script> --}}
<!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</html>