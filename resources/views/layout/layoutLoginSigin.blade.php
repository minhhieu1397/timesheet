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

				<li><a href="{{route('users.login')}}"> Login </a></li>
				<li><a href="{{route('users.create')}}"> Register </a></li>			

				</ul>
			</div>
		</div>
				
	<div class="top">
		
		@yield ('In')
		
	</div>

</body>
</html>


