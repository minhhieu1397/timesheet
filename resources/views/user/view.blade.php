@extends ('layout.admin')

@section('admin')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1> View</h1>
				<table class="table table-condensed" >
					<thead>
						<tr class="table__title">
							<th class="nb1">ID</th>
							<th class="nb2">EMAIL</th>						
							<th class="nb3">VIEW</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($user as $user)
							<tr class="table__content">
								<td class="nb1">{{$user->id}}</td>
								<td class="nb2">{{$user->email}}</td>
								<td>
									<a href="{{route('users.show', $user['id'])}}">VIEW</a>
									<form action="{{route('users.destroy', $user['id'])}}" method="POST">
										{{ method_field('DELETE') }}
										{{ csrf_field() }}
										<button class="btn btn-danger" type="submig">Delete</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

@stop()
