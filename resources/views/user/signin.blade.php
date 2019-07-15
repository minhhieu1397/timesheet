@extends ('layout.layoutLoginSigin')
@section('In')

	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4">
				<form action="{{ route('users.login.post') }}" method="POST" role="form">
					{{ csrf_field() }}
					<h1>Login </h1>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" id="email" placeholder="Email" name="email">
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Password" name="password">
					</div>
										
					<div>
						@if ($errors->has('password'))
                    		<span class="text-danger">{{ $errors->first('password') }}</span>
                		@endif

                		@if ($errors->has('email'))
                    		<span class="text-danger">{{ $errors->first('email') }}</span>
                		@endif

                		@if ($errors->has('errorlogin'))
                    		<span class="text-danger">{{ $errors->first('errorlogin') }}</span>
                		@endif

                		@if (Session::has( 'success' ))
    						 {{ Session::get( 'success' ) }}
						@endif
					</div>
					
					<div class="btncre">
						<button type="submit" class="btn btn-primary">Login</button>
					</div>

				</form>
			</div>
		</div>		
	</div>


@stop()