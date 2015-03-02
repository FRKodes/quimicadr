<!DOCTYPE html>
<html lang="es">
<head>
	@include('partials.metas')
	@include('partials.styles')
</head>
<body>
	<header>
		@include('partials.navbar')
	</header>
	
	@yield('content')
	
	<footer>
		@include('partials.footer')
	</footer>
	
	@include('partials.scripts')
</body>
</html>