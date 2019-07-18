@extends ('layout.main')
@section('content')

	<div class="row">
		<div class="col-md-4 offset-md-4">
				<h1>Add Timesheet</h1>
			
			{!! Form::open(['method' => 'POST', 'route' => 'timesheets.store']) !!}
				<div>
					@if ($errors->any())
						<div class="alert alert-danger">
				   			<ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
				</div>
				
        		<div class="form-group">
	            	{{ Form::label('name', 'Email', ['class' => 'control-label']) }}
	            	{{ Form::text('name', null, ['class' => 'form-control']) }}
	       		</div>

	       		<div class="form-group">
	            	{{ Form::label('work_date', 'Work Date (YYYY-MM-DD)', ['class' => 'control-label']) }}
	            	{{ Form::text('work_date', null, ['class' => 'form-control']) }}
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
	            	{{ Form::textarea('details', null, ['class' => 'name', 'rows' => 3]) }}
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