@extends ('layout.main')

@section('content')

	<div class="row">
		<div class="col-md-10 offset-md-1">
			<h1 class="h1 text-center">View</h1>
			<div class="text-center">
				@if (Session::has( 'success' ))
					{{ Session::get( 'success' ) }}
				@endif

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

			<table class="table table-condensed">
				<thead>
					<tr class="table__title">
						<th>ID</th>
						<th>NAME</th>
						<th>WORD DATE</th>
						<th>START TIME</th>
						<th>END TIME</th>
						<th>DETAILS</th>
						<th>ISSUE</th>
						<th>INTENTION</th>
						<th>LATE</th>
						<th ></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($timesheets as $timesheet)
						<tr class="table__content">
							<td>{{$timesheet->id}}</td>
							<td>{{$timesheet->name}}</td>
							<td>{{$timesheet->work_date}}</td>
							<td>{{$timesheet->start_time}}</td>
							<td>{{$timesheet->end_time}}</td>
							<td>{{$timesheet->details}}</td>
							<td>{{$timesheet->issue}}</td>
							<td>{{$timesheet->intention}}</td>
							<td>{{$timesheet->late_flg}}</td>
							<td> 
								<a href="{{route('timesheets.show', $timesheet['id'])}}" title="View TimeSheet!!!" >View</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{{ $timesheets->links('') }}
		</div>
	</div>

@stop()