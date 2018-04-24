<form action="{{url('user/edit')}}" method="post">
	<input type="hidden" name="id" value="{{$user->id}}">
	<table>
		<tr>
			<td>Name</td>
			<td>: <input type="text" name="name" value="{{$user->name}}"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>: <input type="email" name="email" value="{{$user->email}}"></td>
		</tr>
		<tr>
			<td>Old Password</td>
			<td>: <input type="password" name="old_pass"> <input type="hidden" name="cur_pass" value="{{$user->password}}"></td>
		</tr>
		<tr>
			<td>New Password</td>
			<td>: <input type="password" name="password"></td>
		</tr>
		{{csrf_field()}}
		<tr>
			<td></td>
			<td><button type="submit">Update</button></td>
		</tr>
	</table>
</form>
<br>
@if(Session::has('user'))
{{Session::get('user')}}
@endif