<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	
</head>
<body>

		
	
			<div class="Cla" id="content">
			
				<ul class="ul1">
					<li><a href="{{route('add')}}"> Home</a>   </li>
					<li><a href="{{route('view')}}"> View</a>   </li>
				
				</ul>
				<ul class="ul2">
					<li><a href="#"> Đăng xuất</a>   </li>
					
				</ul>
			</div>
		
	
	
	<div class="top">
		

		@yield ('content')
		

	</div>

</body>
</html>