@extends ('layout.layout_login_sigin')
@section('content')

	<div class="row">
		<div class="col-md-4 offset-md-3">
			<h2 class="h1 text-center">Login</h2>

			{!! Form::open(['method' => 'POST', 'route' => 'users.login.post']) !!}
				
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

        		@if (Session::has( 'success' ))
					 {{ Session::get( 'success' ) }}
				@endif
				
        		<div class="form-group">
	            	{{ Form::label('email', 'Email', ['class' => 'control-label']) }}
	            	{{ Form::text('email', null, ['class' => 'form-control']) }}
	       		</div>

	       		<div class="form-group">
	            	{{ Form::label('password', 'Password', ['class' => 'control-label']) }}

	       			{{ Form::password('password', ['class' => 'form-control']) }}
	       		</div>
				<div>
	       			{!! Form::submit( 'Login', ['class' => 'btn btn-primary']) !!}
				</div>
			{!! Form::close() !!}
		</div>
	</div>		

@stop()