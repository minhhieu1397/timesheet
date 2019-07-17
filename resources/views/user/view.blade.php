@extends ('layout.admin')

@section('content')
	
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<h1 class="text-center">List users</h1>
			<table class="table table-condensed" >
				<thead>
					<tr class="table__title">
						<th>ID</th>
						<th>EMAIL</th>						
						<th>VIEW</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($user as $user)
						<tr class="table__content">
							<td>{{$user->id}}</td>
							<td>{{$user->email}}</td>
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
@stop()
