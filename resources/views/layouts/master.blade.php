<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Hotel fictício">
	<meta name="author" content="Rodrigo Marcondes">

	<title>Hotel</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link href="/css/style.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid">
		@include ('layouts.nav')

		@yield ('content')

		@include ('layouts.footer')
	</div>

</body>
</html>
