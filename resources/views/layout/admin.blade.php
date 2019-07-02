<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	
</head>
<body>

		
	
			<div class="Cla" id="content">
			
				<ul class="ul1">
					<li><a href="{{route('users.index')}}"> View Users</a>   </li>
										
				
				</ul>
				<ul class="ul2">
					<li><a href="{{route('users.logout')}}"> Đăng xuất</a>   </li>
					
				</ul>
			</div>
		
	
	
	<div class="top">
		

		@yield ('content')
		

	</div>

</body>
</html>