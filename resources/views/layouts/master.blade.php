<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>VietMarketPlace</title>
	<link rel="stylesheet" href="{{asset('duy_frontend/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('duy_frontend/css/homepage.css')}}"/>
	<script src="{{asset('duy_frontend/js/jquery.min.js')}}"></script>
	<script src="{{asset('duy_frontend/js/bootstrap.min.js')}}"></script>
</head>
<body>
	@include('layouts.header')
	
	@yield('content')

	@yield('scripts')

	@include('layouts.footer')
</body>
</html>