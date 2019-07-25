@extends ('layout.admin')

@section('content')
	
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<h1 class="text-center">List users</h1>
			<div class="form-group">
				{!! Form::open(['method' => 'GET', 'route' => 'users.search']) !!}
		            {{ Form::text('search', null) }}
		       		{!! Form::submit( 'Seach', ['class' => 'btn-primary']) !!}
				{!! Form::close() !!}
			</div>
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
			<table class="table table-condensed" >
				<thead>
					<tr class="table__title">
						<th>ID</th>
						<th>NAME</th>
						<th>EMAIL</th>						
						<th>VIEW</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($users as $user)
						<tr class="table__content">
							<td>{{$user->id}}</td>
							<td>{{$user->name}}</td>
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
			{{ $users->links('') }}
		</div>
	</div>
@stop()
