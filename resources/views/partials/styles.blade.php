<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic' rel='stylesheet' type='text/css'>
@if($_ENV['APP_ENV'] == 'production')
	<link rel="stylesheet" href="{{ elixir('css/all.min.css')}}">
	<link rel="stylesheet" href="slick/slick-all.css">
@else
	<link rel="stylesheet" href="css/app.css">
	<link rel="stylesheet" href="slick/slick-all.css">
	<link rel="stylesheet" href="css/main.css">
@endif