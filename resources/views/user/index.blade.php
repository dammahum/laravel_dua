<br>
<a href="{{url('user/create')}}">Create User</a><br><br>
<table border="1">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Option</th>
	</tr>

@foreach($user as $row)

	<tr>
		<td>{{$row->name}}</td>
		<td>{{$row->email}}</td>
		<td>
			<a href="{{url('user/edit/'.$row->id)}}">Edit</a> |
			<a href="{{url('user/hapus/'.$row->id)}}">Hapus</a>
		</td>
	</tr>

@endforeach

</table>

<br><br>

@if(Session::has('user'))
{{Session::get('user')}}
@endif

{{$user->links()}}
