<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
	<div class="container">
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="nav-item">
					<a class="nav-link text-success h5" href="{{route('users.index')}}">View User</a>
				</li>
			</ul>
		</div>

		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link list_title" href="{{route('users.logout')}}">Logout</a>
				</li>
			</ul>
		</div>
	</div>
</nav>