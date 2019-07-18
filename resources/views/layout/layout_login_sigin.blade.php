<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Timesheet</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"> 

</head>

<body>

<!-- Navigation -->
	<div class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
		<h1 class="Timesheet">Timesheet</h1>
	</div>
	<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
		<div class="container">
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link list_title" href="{{route('users.login')}}">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link list_title" href="{{route('users.create')}}">Register</a>
					</li>
				</ul>
			</div>
		</div>
	</nav> -->
	@include('partial/login_register_nav')
	

  <!-- Page Content -->	
	<div class="container">
		@yield ('content')
	</div>

</body>

</html>