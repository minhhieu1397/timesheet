@extends ('layout.main')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4">
				<form action="{{ route('timesheets.update',$timesheet->id) }}" method="POST" role="form">
					{{ method_field('PUT') }}
					{{ csrf_field() }}

				<h1> Edit Timesheet</h1>
						
				<div class="form-group">
					<label for="detail">Details</label>
					<textarea rows="3" type="text" class="form-control" id="detail" placeholder="Details" name="details" required></textarea>
				</div>
					
				<div class="form-group">
					<label for="issue">Issue</label>
					<input type="text" class="form-control" id="issue" placeholder="Issue" name="issue"  required>
				</div>

				<div class="form-group">
					<label for="intention">Intention</label>
					<input type="text" class="form-control" id="intention" placeholder="Intention" name="intention" required>
				</div>
				<div>
					@if ($errors->has('name'))
	                	<span class="text-danger">{{ $errors->first('name') }}</span>
	            	@endif
	            		  
	            	@if ($errors->has('details'))
	                	<span class="text-danger">{{ $errors->first('details') }}</span>
	            	@endif		
	
				<button type="submit" class="btn btn-primary">Update</button>

				</form>
			</div>
		</div>		
	</div>

@stop()