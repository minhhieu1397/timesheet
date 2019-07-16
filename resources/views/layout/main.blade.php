<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Timesheet</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha256-azvvU9xKluwHFJ0Cpgtf0CYzK7zgtOznnzxV4924X1w=" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

</head>

<body>

	<div class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
		<h1 class="navbar-brand"><em>Timesheet</em></h1>
	</div>
  <!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
		<div class="container">
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="nav-item">
						<a class="nav-link text-success h5" href="{{route('timesheets.index')}}">View</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-success h5" href="{{route('timesheets.create')}}">Create</a>
					</li>
				</ul>
			</div>

			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="{{route('users.logout')}}">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

  <!-- Page Content -->		
	<div class="container">
		@yield('content')		
	</div>
  <!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.slim.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>