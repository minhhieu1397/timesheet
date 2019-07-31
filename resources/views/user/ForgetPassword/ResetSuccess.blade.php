@extends ('layout.success')
@section('content')
		<div class="row">
			<div class="col-md-4 offset-md-3">
				<h2 class="h1 text-center">Login</h2>
					<h1 class="text-center">
						@if (Session::has( 'success' ))
							{{ Session::get( 'success' ) }}
						@endif
					</h1>
					<div>
						<a href="{{route('users.login')}}">Click to login</a>
					</div>
			</div>
		</div>

@stop()