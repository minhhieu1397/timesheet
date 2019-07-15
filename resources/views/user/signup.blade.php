@extends ('layout.layoutLoginSigin')
@section('In')

	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-4">
				<form action="{{ route('users.store') }}" method="POST" role="form" >
					{{ csrf_field() }}
					<h1>Register</h1>
					<div class="form-group">
						<label class="lbemail" for="email">Email:</label>
						<input type="text" class="form-control" id="email" placeholder="Email" name="email">	
					</div>

					<div class="form-group">
						<label class="lbemail" for="password">Password:</label>   		
						<input type="password" class="form-control" id="password" placeholder="Password" name="password">										       	
					</div>

					<div class="form-group">
						<label class="lbemail" for="password_confirmation">Confirm Password:</label>   		
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
	</div>


@stop()