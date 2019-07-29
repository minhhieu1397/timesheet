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
				<li class="nav-item">
					<a class="nav-link text-success h5" href="{{route('users.account')}}">account management</a>
				</li>

				@can ('isAdmin')
					<li class="nav-item">
						<a class="nav-link text-success h5" href="{{route('users.index')}}">Admin</a>
					</li>
				@endcan
			</ul>
		</div>

		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto list-inline">
				<li class="nav-item">
					<a class="list_title" href="{{route('users.logout')}}">Logout &nbsp;</a>
				</li>

			</ul>
		</div>
	</div>
</nav>