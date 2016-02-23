<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Module Backend</title>
		<link href="{{asset('css/app.css')}}" rel="stylesheet">
	</head>
	<body>
		@yield('content')
	</body>
	<footer>
		<script src="{{asset('js/app.js')}}"></script>
		<script>
			$(document).ready(function() {

			});
		</script>
	</footer>
</html>