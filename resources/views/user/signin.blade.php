@extends ('layout.layoutLoginSigin')
@section('content')

	<div class="row">
		<div class="col-md-4 offset-md-3">
			<form action="{{ route('users.login.post') }}" method="POST" role="form">
				{{ csrf_field() }}
				 <h2 class="h1 text-center">Login</h2>
				<div class="form-group">
					<label for="email" class="control-label">Email</label>
					<input type="text" class="form-control" id="email" placeholder="Email" name="email">
				</div>

				<div class="form-group">
					<label for="password" class="control-label">Password</label>
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

@stop()