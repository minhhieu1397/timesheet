@extends ('layout.layoutLoginSigin')
@section('In')

	<div class="container">
		<div class="row">
			<div class="col-offset">
				<form action="{{ route('users.login.post') }}" method="POST" role="form">
					{{ csrf_field() }}
					<legend class="Add"> Login </legend>
					<div class="form-group">
						<label for="">Email</label>
						<input type="text" class="form-control" id="email" placeholder="Email" name="email">					
					</div>

					<div class="form-group">
						<label for="">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Password" name="password">						       	
					</div>
										
					<div class="btncre">
						<button type="submit" class="btn btn-primary">Login</button>
					</div>

					<div>
						@if ($errors->has('errorlogin'))
                    		<span class="text-danger">{{ $errors->first('errorlogin') }}</span>
                		@endif

                		@if (Session::has( 'success' ))
    						 {{ Session::get( 'success' ) }}
						@endif
					</div>
				</form>
			</div>
		</div>		
	</div>


@stop()