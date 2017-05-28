<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Gestor de base de datos DIANET">
<meta name="author" content="www.miprimohacewebs.com">

<title>Dialnet - @yield('title')</title>

<!-- CSS -->
<!-- Bootstrap Core CSS -->
<link href="{{ URL::asset('assets/css/bootstrap.min.css') }}"
	rel="stylesheet" media="all" type="text/css">

<!-- Custom CSS -->
<link href="{{ URL::asset('assets/css/sb-admin.css') }}"
	rel="stylesheet" media="all" type="text/css">
<!-- Morris Charts CSS -->
<link href="{{ URL::asset('assets/css/plugins/morris.css') }}"
	rel="stylesheet" media="all" type="text/css">

<!-- Custom Fonts -->
<link
	href="{{ URL::asset('assets/font-awesome/css/font-awesome.min.css') }}"
	rel="stylesheet" media="all" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<!-- menús -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span> <span
					class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html">SB Admin</a>
		</div>
		@include('templates.partials.menuTop')
		@include('templates.partials.menuSidebar')
	</nav>
	<!-- contenido -->
	@yield('cuerpo')
	<!-- Javascript -->
	<!-- jQuery -->
	<script src="{{ URL::asset('assets/js/jquery.js') }}"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>

	<!-- Morris Charts JavaScript -->
	<script
		src="{{ URL::asset('assets/js/plugins/morris/raphael.min.js') }}"></script>
	<script
		src="{{ URL::asset('assets/js/plugins/morris/morris.min.js') }}"></script>
	<script
		src="{{ URL::asset('assets/js/plugins/morris/morris-data.js') }}"></script>
</body>

</html>