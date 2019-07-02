<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	
</head>
<body>

		
	
			<div class="Cla" id="content">
				
				
				<ul class="ul2">
					<li><a href="{{route('users.signin')}}"> Signin </a></li>
					<li><a href="{{route('users.create')}}"> Signup </a></li>			

				</ul>
			</div>
		
	
	
	<div class="top">
		

		@yield ('In')
		

	</div>

</body>
</html>