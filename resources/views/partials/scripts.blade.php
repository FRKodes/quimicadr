<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
@if($_ENV['APP_ENV'] != 'production')
	<script type="text/javascript" src="{{ elixir('js/custom.min.js')}}"></script>
@else
	<script type="text/javascript" src="js/custom.js"></script>
@endif