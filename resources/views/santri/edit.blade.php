<form action="{{url('santri/edit')}}" method="post">
	<input type="hidden" name="id" value="{{$santri->id}}">
	<table>
		<tr>
			<td>Nama</td>
			<td>: <input type="text" name="nama" value="{{$santri->nama}}"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>: <input type="text" name="alamat" value="{{$santri->alamat}}"></td>
		</tr>
		<tr>
			<td>Tgl Lahir</td>
			<td>: <input type="date" name="tgl_lahir" value="{{$santri->tgl_lahir}}"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>: 
				<label><input type="radio" name="jenis_kelamin" value="L" {{($santri->jenis_kelamin == 'L')?'checked':''}} >Laki-laki</label> || 
				<label><input type="radio" name="jenis_kelamin" value="P" {{($santri->jenis_kelamin == 'L')?'':'checked'}} >Perempuan</label>
			</td>
		</tr>
		{{csrf_field()}}
		<tr>
			<td></td>
			<td><button type="submit">Update</button></td>
		</tr>
	</table>
</form>