<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Timesheet</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha256-azvvU9xKluwHFJ0Cpgtf0CYzK7zgtOznnzxV4924X1w=" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>			
	<div class="header">
		<div class="title">
			Timesheet
		</div>
		<div class="listtimesheet">
			<ul>
				<li><a href="{{route('timesheets.index')}}"> View</a></li>
				<li><a href="{{route('timesheets.create')}}"> Create</a></li>			
			</ul>
		</div>

		<div class="list">
			<ul>
				<li><a href="{{route('users.logout')}}"> Đăng xuất</a></li>					
			</ul>
		</div>
	</div>			
	
	<div class="top-normal">		
		@yield('content')		
	</div>
</body>
</html>