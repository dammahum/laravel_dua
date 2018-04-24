<form action="{{url('santri/create')}}" method="post">
	<table>
		<tr>
			<td>Nama </td>
			<td>: <input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Alamat </td>
			<td>: <input type="text" name="alamat"><br></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>: <input type="date" name="tgl_lahir"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>: 
				<label><input type="radio" name="jenis_kelamin" value="L">Laki-laki</label>
				|| 
				<label><input type="radio" name="jenis_kelamin" value="P">Perempuan</label>
			</td>
		</tr>
		{{csrf_field()}}
		<tr>
			<td></td>
			<td><button type="submit">Submit</button></td>
		</tr>
	</table>
</form>