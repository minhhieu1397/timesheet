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
						<th class="nb1">ID</th>
						<th class="nb2">EMAIL</th>						
						<th class="nb3">VIEW</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach($users as $users)
					<tr>
						<td class="nb1">{{$users->id}}</td>
						<td class="nb2">{{$users->email}}</td>
						<td><a href="{{route('users.show',$users['email'])}}" class="nb3">VIEW</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>


@stop()