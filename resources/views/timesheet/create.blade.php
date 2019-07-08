@extends ('layout.main')
@section('content')


	<div class="container">
		<div class="row">
			<div class="col-offset">
				<form action="{{ route('timesheets.store') }}" method="POST" role="form">
					{{ csrf_field() }}
					<legend class="Add"> Add Timesheet</legend>

					<div class="form-group">
						<label for="">Name</label>
						<input type="text" class="form-control" id="name" placeholder="Name" name="name">						
					</div>

					<div class="form-group">
						<label for="">Date(YYYY-MM-DD)</label>
						<input type="text" class="form-control" id="work_date" placeholder="Work Date" name="work_date">						
					</div>

					<div class="form-group">
						<label for="">Start time</label>
						<input type="text" class="form-control" id="start_time" placeholder="Start time" name="start_time">						
					</div>

					<div class="form-group">
						<label for="">End time</label>
						<input type="text" class="form-control" id="end_time" placeholder="End time" name="end_time">						
					</div>
					
					<div class="form-group">
						<label for="">Details</label>
						<input type="text" class="form-work" id="details" placeholder="Details" name="details">
						
					</div>

					<div class="form-group">
						<label for="">Issue</label>
						<input type="text" class="form-control" id="issue" placeholder="Issue" name="issue">
					</div>

					<div class="form-group">
						<label for="">Intention</label>
						<input type="text" class="form-control" id="intention" placeholder="Intention" name="intention">
					</div>

					<div>
						@if ($errors->has('details'))
                    		<span class="text-danger">{{ $errors->first('details') }}</span>
                		@endif
                		 
                		@if ($errors->has('work_date'))
                    		<span class="text-danger">{{ $errors->first('work_date') }}</span>
                		@endif

                		@if ($errors->has('issue'))
                    		<span class="text-danger">{{ $errors->first('issue') }}</span>
                		@endif
                		
                		@if (Session::has( 'success'))
    						 {{ Session::get( 'success' ) }}
						@endif
                		 
					</div>

					<div class="btncre">
						<button type="submit" class="btn btn-primary">Add</button>
					</div>
				</form>
			</div>
		</div>		
	</div>


@stop()