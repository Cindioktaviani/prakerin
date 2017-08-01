@extends('layouts.master')
@section('isi')
<div class="row">

<center><h1>Data Siswa</h1></center>
<div class="panel panel-primary">
	<div class="panel-heading">Data Siswa
	<div class="panel-title pull-right"><a href="/siswa/create">Tambah data</a></div>
	</div>
	<div class="panel-body">
		<table class="table">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Nama orangtua</th>
					<th>Umur</th>
					<th>Jenis kelamin</th>
					<th>Alamat</th>
					<th colspan="3">Action</th>
				</tr>
			</thead>
			<tbody>
			@foreach($siswa as $data)
			<tr>
			<td>{{$data->nama}}</td>
			<td>{{$data->orangtua->nama_ayah}} dan 
			    {{$data->orangtua->nama_ibu}}</td>
			<td>{{$data->umur}}</td>
			<td>{{$data->jk}}</td>
			<td>{{$data->alamat}}</td>
			<td>
			</td>

			<td>
				<a class="btn btn-warning" href="/siswa/{{$data->id}}/edit">edit</a></td>
			<td>
				<a class="btn btn-primary" href="/siswa/{{$data->id}}">show</a></td>
				<td>
				<form action="{{route('siswa.destroy',$data->id)}}" method="post">
					<input type="hidden" name="_method" value="DELETE">
					<input type="hidden" name="_token">
					<input class="btn btn-danger" type="submit" value="delete">{{csrf_field()}}
				</form>
			</td>
			</tr>
			@endforeach

			</tbody>
		</table>
	</div>
</div>
</div>
@endsection