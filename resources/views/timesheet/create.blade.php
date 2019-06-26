@extends ('layout.main')
@section('content')


	<div class="container">
		<div class="row">
			<div class="col-offset">
				<form action="{{ route('timesheet.post') }}" method="POST" role="form">
					{{ csrf_field() }}
					<legend class="Add"> Add Timesheet</legend>
					<div class="form-group">
						<label for="">Name</label>
						<input type="text" class="form-control" id="name" placeholder="Name" name="name">	
						 @if ($errors->has('name'))

                    	<span class="text-danger">{{ $errors->first('name') }}</span>

                		@endif
					</div>

					<div class="form-group">
						<label for="">Date(YYYY-MM-DD)</label>
						<input type="text" class="form-control" id="date" placeholder="Date" name="_date">
						 @if ($errors->has('_date'))

                    	<span class="text-danger">{{ $errors->first('_date') }}</span>

                		@endif
					</div>
					
					<div class="form-group">
						<label for="">Work</label>
						<input type="text" class="form-work" id="work" placeholder="Work" name="_work">
						@if ($errors->has('_work'))

                    	<span class="text-danger">{{ $errors->first('_work') }}</span>

                		@endif
					</div>
					<div class="form-group">
						<label for="">Difficulty</label>
						<input type="text" class="form-control" id="difficulty" placeholder="Difficulty" name="difficulty">
					</div>

					<div class="form-group">
						<label for="">Intention</label>
						<input type="text" class="form-control" id="intention" placeholder="Intention" name="intention">
					</div>
					<div class="form-group">
						<label for="">Late</label>
						<input type="text" class="form-control" id="late" placeholder="Late" name="late">
					</div>
					<div class="btncre">
					<button type="submit" class="btn btn-primary">Add</button>
					</div>

				</form>
			</div>
		</div>
		
	</div>


@stop()