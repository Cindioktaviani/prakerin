@extends('layouts.master')
@section('isi')
<div class="row">

<center><h1>Data Siswa</h1></center>
<div class="panel panel-primary">
	<div class="panel-heading">Edit Data Siswa
	<div class="panel-title pull-right">
	<a href="{{ URL::previous() }}">kembali</a></div>
	</div>

	<div class="panel-body">
		<form action="{{route('siswa.update',$siswa->id)}}" method="post">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value=" {{csrf_token()}}">

			<div class="form-group">
				<label class="control-lable">Nama</label>
				<input type="text" name="a" class="form-control"  value="{{$siswa->nama}}" readonly="">
			</div>

			<div class="form-group">
				<label class="control-lable">Nama orangtua</label>
				<input type="text" name="b" class="form-control" value="{{$siswa->orangtua->nama_ibu}} dan {{$siswa->orangtua->nama_ayah}}" 
				 readonly="">
		
				
			</div>

			<div class="form-group">
				<label class="control-lable">Umur</label>
				<input type="number" name="c" class="form-control"  value="{{$siswa->umur}}" readonly="">
			</div>

			<div class="form-group">
				<label class="control-lable">Jenis kelamin</label>
				<input type="text" name="d" class="form-control" value="{{$siswa->jk}}" readonly="">
			</div>

			<div class="form-group">
				<label class="control-lable">Alamat</label>
				<textarea class="form-control" rows="10" name="e" class="form-control" readonly="">{{$siswa->alamat}}</textarea>	
			</div>

	
		</form>
	</div>
	</div>
	</div>
	@endsection