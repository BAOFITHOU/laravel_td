<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<script type="text/javascript" src="{{asset('vendor/bootstrap.js') }}"></script>
	<script type="text/javascript" src="js/1.js"></script>
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="{{asset('css/style.css') }}">
	<link rel="stylesheet" href="{{asset('vendor/bootstrap.css') }}">
	<base href="{{ asset('') }}">
</head> 
<body>
	@include('layouts.headerntd')
	@yield('content')
	@include('layouts.footer')
</body>
</html>