@extends ('layout.admin')
@section('admin')

	<div class="row">
		<div class="col-md-10 offset-md-1">
			<h1 class="text-center"> View</h1>		
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
					</tr>
				</thead>
				<tbody>
					@php $late = 0; @endphp
					@foreach ($timesheets as $t)
						@php
						if ($t->late_flg)
							$late++;
						@endphp
						<tr class="table__content">
							<td>{{$t->id}}</td>
							<td>{{$t->name}}</td>
							<td>{{$t->submit_date}}</td>
							<td>{{$t->start_time}}</td>
							<td>{{$t->end_time}}</td>
							<td>{{$t->details}}</td>
							<td>{{$t->issue}}</td>
							<td>{{$t->intention}}</td>
							<td>{{$t->late_flg}}</td>				
						</tr>
					@endforeach
				</tbody>
			</table>
			number of days late: {{ $late }}
		</div>
	</div>
	
@stop()