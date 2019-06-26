@extends ('layout.main')
@section('content')


<!-- <form action="{{ route('timesheet.edit') }}" method="POST" role="form">
					{{ csrf_field() }}
<div class="container">
		<div class="row">
			<div class="col-offset">
				
					<legend> Edit Timesheet</legend>
					<div class="form-group">
						<label for="">Name</label>
						<input type="text" class="form-control" id="name" placeholder="Name" name="name">	
						 @if ($errors->has('name'))

                    	<span class="text-danger">{{ $errors->first('name') }}</span>

                		@endif
					</div>

				
					
					<div class="form-group">
						<label for="">Work</label>
						<input type="text" class="form-control" id="work" placeholder="Work" name="_work">
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
				

					<button type="submit" class="btn btn-primary">Add</button>

				</form>
			</div>
		</div>
		
	</div> -->



@stop()