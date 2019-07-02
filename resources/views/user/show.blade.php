@extends ('layout.admin')

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

					@foreach($timesheet as $t)
					<tr>

						<td class="td1">{{$t->id}}</td>
						<td class="td2">{{$t->name}}</td>
						<td class="td3">{{$t->submit_date}}</td>
						<td class="td3">{{$t->start_time}}</td>
						<td class="td3">{{$t->end_time}}</td>
						<td class="td4">{{$t->details}}</td>
						<td class="td5">{{$t->issue}}</td>
						<td class="td6">{{$t->intention}}</td>
						<td class="td7">{{$t->late_flg}}</td>
						
					</tr>
					@endforeach
					<div>

					</div>
				</tbody>
			</table>
			number of days late: <?php echo $late; ?>
		</div>
	</div>


@stop()