@extends ('layout.main')

@section('content')
	


	<div class="view">
		<div class="view1">
			<h3 class="viewtitle"> View</h3>
		</div>
		<div class="viewbody">
			
			<table class="tableView">
				<thead>
					<tr class="namee">
						<th class="td1">ID</th>
						<th class="td2">NAME</th>
						<th class="td3">SUBMIT DATE</th>
						<th class="td3">START TIME</th>
						<th class="td3">END TIME</th>
						<th class="td41">DETAILS</th>
						<th class="td5">ISSUE</th>
						<th class="td6">INTENTION</th>
						<th class="td7">LATE</th>
						<th ></th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td class="td1">{{$timesheet->id}}</td>
						<td class="td2">{{$timesheet->name}}</td>
						<td class="td3">{{$timesheet->submit_date}}</td>
						<td class="td3">{{$timesheet->start_time}}</td>
						<td class="td3">{{$timesheet->end_time}}</td>
						<td class="td4">{{$timesheet->details}}</td>
						<td class="td5">{{$timesheet->issue}}</td>
						<td class="td6">{{$timesheet->intention}}</td>
						<td class="td7">{{$timesheet->late_flg}}</td>
						<td> 
							<a href="{{route('timesheets.edit',$timesheet['id'])}}" >Edit</a>
						</td>
					</tr>						
				</tbody>
				
			</table>
		</div>
	</div>


@stop()