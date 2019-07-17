@extends ('layout.layoutLoginSigin')
@section('content')

	<div class="row">
		<div class="col-md-4 offset-md-3">
			<form action="{{ route('users.store') }}" method="POST" role="form" >
				{{ csrf_field() }}
				<h2 class="h1 text-center">Register</h2>
				<div class="form-group">
					<label class="control-label" for="email">Email:</label>
					<input type="text" class="form-control" id="email" placeholder="Email" name="email">	
				</div>

				<div class="form-group">
					<label class="control-label" for="password">Password:</label>   		
					<input type="password" class="form-control" id="password" placeholder="Password" name="password">										       	
				</div>

				<div class="form-group">
					<label class="control-label" for="password_confirmation">Confirm Password:</label>   		
					<input type="password" class="form-control" id="password_confirmation" placeholder="Confirm Password" name="password_confirmation">										       	
				</div>
				
				<div class="error1" >
					@if ($errors->has('password'))
                		<span class="text-danger">{{ $errors->first('password') }}</span>
            		@endif

            		@if ($errors->has('email'))
                		<span class="text-danger">{{ $errors->first('email') }}</span>
            		@endif
				</div>
				
				<div class="btncre">
					<button type="submit" class="btn btn-primary">SignIn</button>
				</div>

			</form>
		</div>
	</div>	


@stop()