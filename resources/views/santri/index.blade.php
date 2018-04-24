<br>
<a href="{{url('santri/create')}}">Create Santri</a><br><br>
<table border="1">
	<tr>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Tanggal Lahir</th>
		<th>Gender</th>
		<th>Aksi</th>
	</tr>

@foreach($santri as $row)

	<tr>
		<td>{{$row->nama}}</td>
		<td>{{$row->alamat}}</td>
		<td>{{$row->tgl_lahir}}</td>
		<td>{{$row->jenis_kelamin}}</td>
		<td>
			<a href="{{url('santri/edit/'.$row->id)}}">Edit</a> |
			<a href="{{url('santri/hapus/'.$row->id)}}">Hapus</a>
		</td>
	</tr>

@endforeach

</table>

<br><br>

@if(Session::has('santri'))
{{Session::get('santri')}}
@endif
