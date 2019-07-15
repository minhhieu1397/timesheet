@extends ('layout.main')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3> View</h3>

				<table class="table table-condensed">
					<thead>
						<tr class="table__title">
							<th>ID</th>
							<th>NAME</th>
							<th>SUBMIT DATE</th>
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
						<tr class="table__content">
							<td>{{$timesheet->id}}</td>
							<td>{{$timesheet->name}}</td>
							<td>{{$timesheet->submit_date}}</td>
							<td>{{$timesheet->start_time}}</td>
							<td>{{$timesheet->end_time}}</td>
							<td>{{$timesheet->details}}</td>
							<td>{{$timesheet->issue}}</td>
							<td>{{$timesheet->intention}}</td>
							<td>{{$timesheet->late_flg}}</td>
							<td> 
								<a href="{{route('timesheets.edit', $timesheet['id'])}}" >Edit</a>
							</td>
						</tr>						
					</tbody>
				</table>
			</div>
		</div>
	</div>

@stop()