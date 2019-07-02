@extends ('layout.main')
@section('content')



<form action="{{ route('timesheets.update',$timesheet->id) }}" method="POST" role="form">
					{{ csrf_field() }}
<div class="container">
		<div class="row">
			<div class="col-offset">
				
				<legend class="Add"> Edit Timesheet</legend>		
					
				<div class="form-group">
					<label for="">Details</label>
					<input type="text" class="form-work" id="details" placeholder="Details" name="details">
						
				</div>

				<div class="form-group">
					<label for="">Issue</label>
					<input type="text" class="form-control" id="issue" placeholder="Issue" name="issue" value="{{$timesheet->issue}}" required>
				</div>

				<div class="form-group">
					<label for="">Intention</label>
					<input type="text" class="form-control" id="intention" placeholder="Intention" name="intention" value="{{$timesheet->intention}}" required>
				</div>
				<div>
						 @if ($errors->has('name'))
                    	<span class="text-danger">{{ $errors->first('name') }}</span>
                		@endif
                		  
                			@if ($errors->has('details'))
                    	<span class="text-danger">{{ $errors->first('details') }}</span>
                		@endif		
				</div>
				
				<button type="submit" class="btn">Update</button>

			</form>
		</div>
	</div>		
</div>

@stop()