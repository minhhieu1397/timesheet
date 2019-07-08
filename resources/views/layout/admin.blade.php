<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>

	<style type="text/css">
		

		.header{
			width: 100%;
			height: 150px;
			border: 1px solid #404040FF;
			margin: auto;	
			background-color:#141414FF ;
		}
		.timesheet	{
			color: #FFFFFFFF;
			font-size: 50px;
			font-family: Arnoldboecklin, fantasy;
			margin-left: 140px;
			margin-top:30px;
			font-style: oblique; 
		}

		.title	{
			color: #FFFFFFFF;
			font-size: 30px;
			font-family: Arnoldboecklin, fantasy;
			margin-left: 140px;
			margin-top:30px;
			font-style: oblique; 
		}
		.title ul{
			list-style: none;
		}
		.title ul li{
			float: left;
			line-height: 10px;
			margin-left: 15px;
		}
		.title ul li a{
			color: #FFFFFFFF;
			text-decoration: none;
			font-family: Coronetscript, cursive;
		}
		.title a:hover{
			text-decoration: underline;
		}
		.LR{
			width: 100%;
			height: 40px;
			background-color:#141414FF ;
		}
		.LR ul{
			list-style: none;
		}
		.LR ul li{
			float: right;
			line-height: 10px;
			margin-right: 15px;
		}
		.LR ul li a{
			color: #FFFFFFFF;
			text-decoration: none;
			font-family: Coronetscript, cursive;
		}
		.LR a:hover{
			text-decoration: underline;
		}

	</style>

<body>

		<div class="header" id="content">
			<div class="timesheet">
				Timesheet
			</div>
			<div class="title">
				<ul class="ul1">
					<li><a href="{{route('users.index')}}"> View Users</a></li>										
				</ul>
			</div>

			<div class="LR">
				<ul class="ul2">
					<li><a href="{{route('users.logout')}}"> Đăng xuất</a></li>					
				</ul>
			</div>
		</div>	
	
	<div class="top">		

		@yield ('content')
		
	</div>

</body>
</html>