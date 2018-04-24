<ul>
    @foreach($errors->all() as $row)
        <li> {{$row}} </li>
    @endforeach
</ul>


<form action="{{url('user/create')}}" method="post">
	<table>
		<tr>
			<td>Name </td>
			<td>: <input type="text" name="name" value="{{old('name')}}"></td>
		</tr>
		<tr>
			<td>Email </td>
			<td>: <input type="email" name="email" value="{{old('email')}}"><br></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>: <input type="password" name="password"></td>
		</tr>
		{{csrf_field()}}
		<tr>
			<td></td>
			<td><button type="submit">Submit</button></td>
		</tr>
	</table>
</form>