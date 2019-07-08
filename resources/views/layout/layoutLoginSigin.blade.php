<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"> 
	<style type="text/css">
		

		.header{
			width: 100%;
			height: 150px;
			border: 1px solid #404040FF;
			margin: auto;	
			background-color:#141414FF ;
		}

		.title	{
			color: #FFFFFFFF;
			font-size: 50px;
			font-family: Arnoldboecklin, fantasy;
			margin-left: 140px;
			margin-top:30px;
			font-style: oblique; 
		}

		.LR{
			width: 100%;
			height: 40px;
			border: 1px solid #404040FF;
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

</head>
<body>		
	
		<div class="header" id="content">	
			<div class="title">
				Timesheet
			</div>
			<div class="LR">
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
