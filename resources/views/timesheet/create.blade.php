@extends ('layout.main')
@section('content')

	<div class="row">
		<div class="col-md-3 offset-md-5">
				<h1 class="h1 text-center text-primary">Add Timesheet</h1>
			
			{!! Form::open(['method' => 'POST', 'route' => 'timesheets.store']) !!}

				@if ($errors->any())
					<div class="alert alert-danger">
			   			<ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif
				
	       		<div class="form-group">
	            	{{ Form::label('work_date', 'Work Date (MM-DD-YYYY)', ['class' => 'control-label']) }}
	            	{{ Form::date('work_date', null, ['class' => 'form-control']) }}
	       		</div>

	       		<div class="form-group">
	            	{{ Form::label('start_time', 'Start Time', ['class' => 'control-label']) }}
	            	{{ Form::text('start_time', null, ['class' => 'form-control']) }}
	       		</div>

	       		<div class="form-group">
	            	{{ Form::label('end_time', 'End Time', ['class' => 'control-label']) }}
	            	{{ Form::text('end_time', null, ['class' => 'form-control']) }}
	       		</div>

	       		<div class="form-group">
	            	{{ Form::label('details', 'Details', ['class' => 'control-label']) }}
	            	{{ Form::textarea('details', null, ['class' => 'form-control', 'rows' => 3]) }}
	       		</div>

	       		<div class="form-group">
	            	{{ Form::label('issue', 'Issue', ['class' => 'control-label']) }}
	            	{{ Form::text('issue', null, ['class' => 'form-control']) }}
	       		</div>

	       		<div class="form-group">
	            	{{ Form::label('intention', 'Intention', ['class' => 'control-label']) }}
	            	{{ Form::text('intention', null, ['class' => 'form-control']) }}
	       		</div>

	       		
				<div>
	       			{!! Form::submit( 'Create', ['class' => 'btn btn-primary']) !!}
				</div>
			{!! Form::close() !!}

		</div>
	</div>		
@stop()