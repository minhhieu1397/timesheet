@extends ('layout.main')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4">
				<form action="{{ route('timesheets.store') }}" method="POST" role="form">
					{{ csrf_field() }}
					<h1>Add Timesheet</h1>

					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" id="name" placeholder="Name" name="name">	
					</div>

					<div class="form-group">
						<label for="work_date">Date(YYYY-MM-DD)</label>
						<input type="text" class="form-control" id="work_date" placeholder="Work Date" name="work_date">	
					</div>

					<div class="form-group">
						<label for="start_time">Start time</label>
						<input type="text" class="form-control" id="start_time" placeholder="Start time" name="start_time">
					</div>

					<div class="form-group">
						<label for="end_time">End time</label>
						<input type="text" class="form-control" id="end_time" placeholder="End time" name="end_time">			
					</div>
					
					<div class="form-group">
						<label for="details">Details</label>
						<textarea type="text" class="form-control" id="details" placeholder="Details" name="details"></textarea>
					</div>

					<div class="form-group">
						<label for="issue">Issue</label>
						<input type="text" class="form-control" id="issue" placeholder="Issue" name="issue">
					</div>

					<div class="form-group">
						<label for="intention">Intention</label>
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