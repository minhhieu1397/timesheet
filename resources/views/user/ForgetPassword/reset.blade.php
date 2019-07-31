@extends ('layout.layout_login_sigin')
@section('content')

	<div class="row">
		<div class="col-md-4 offset-md-3">
			<div class="form-group">
				{!! Form::open(['method' => 'PUT', 'route' => ['Users.putforgot.reset', $token]]) !!}
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<div class="form-group">
		            	{{ Form::label('new_password', 'New Password:', ['class' => 'control-label', ]) }}
		            	{{ Form::password('new_password', ['class' => 'form-control']) }}
			        </div>
			        <div class="form-group">
		            	{{ Form::label('new_password_confirmation', 'Confirm Password:', ['class' => 'control-label', ]) }}
		            	{{ Form::password('new_password_confirmation', ['class' => 'form-control']) }}
		        	</div>
			        <div>
		       			{!! Form::submit( 'Update', ['class' => 'btn btn-primary']) !!}
					</div>
				{!! Form::close() !!}
	    	</div>
		</div>
	</div>		

@stop()