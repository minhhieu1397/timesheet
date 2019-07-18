@extends ('layout.layout_login_sigin')
@section('content')

	<div class="row">
		<div class="col-md-4 offset-md-3">
			<h2 class="h1 text-center">Register</h2>

			{!! Form::open(['method' => 'POST', 'route' => 'users.store']) !!}
				<div>
					@if ($errors->any())
						<div class="alert alert-danger">
				   			<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
					        </ul>
					    </div>
					@endif
				</div>

				<div class="form-group">
	            	{{ Form::label('email', 'Email', ['class' => 'control-label']) }}
	            	{{ Form::text('email', null, ['class' => 'form-control']) }}
	       		</div>

	       		<div class="form-group">
	            	{{ Form::label('password', 'Password', ['class' => 'control-label']) }}
	       			{{ Form::password('password', ['class' => 'form-control']) }}
	       		</div>

	       		<div class="form-group">
	            	{{ Form::label('password_confirmation', 'Confirm Password', ['class' => 'control-label']) }}
	       			{{ Form::password('password_confirmation', ['class' => 'form-control']) }}
	       		</div>

	       		<div>
	       			{!! Form::submit( 'Register', ['class' => 'btn btn-primary']) !!}
				</div>
			{!! Form::close() !!}
		</div>
	</div>	


@stop()