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
						<th class="td1">ID  </th>
						<th class="td2">NAME      </th>
						<th class="td3">DATE           </th>
						<th class="td41">WORK      </th>
						<th class="td5">DIFFICULY        </th>
						<th class="td6">INTENTION        </th>
						<th class="td7">LATE           </th>
						<th ></th>
					</tr>
				</thead>
				<tbody>
					
					@foreach($timesheet as $t)

					<tr>
						<td class="td1">{{$t->id}}      </td>
						<td class="td2">{{$t->name}}      </td>
						<td class="td3">{{$t->_date}}           </td>
						<td class="td4">{{$t->_work}}      </td>
						<td class="td5">{{$t->difficulty}}        </td>
						<td class="td6">{{$t->intention}}        </td>
						<td class="td7">{{$t->late}}        </td>
						<td> 
							<a href="{{route('edit',$t['id'])}}" >Edit</a>
						</td>

					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>


@stop()