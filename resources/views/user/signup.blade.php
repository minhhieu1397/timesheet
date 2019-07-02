@extends ('layout.layoutLoginSigin')
@section('In')

	<div class="container">
		<div class="row">
			<div class="col-offset">
				<form action="{{ route('users.store') }}" method="POST" role="form" >
					{{ csrf_field() }}
					<legend class="Add"> Signup </legend>
					<div class="form-group">
						<label class="lbemail" for="">Email</label>

						<input type="text" class="form-control" id="Siemail" placeholder="Email" name="email">	

					</div>

					<div class="form-group">
						<label class="lbemail" for="">Password</label>
						
                		
						<input type="text" class="form-control" id="password" placeholder="Password" name="password">
						
						 				       	
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
					<button type="submit" class="btn btn-primary">Sign In</button>
					</div>

				</form>
			</div>
		</div>
		
	</div>


@stop()