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
				<input type="text" name="a" class="form-control"  value="{{$siswa->nama}}" required="">
			</div>

			<div class="form-group">
				<label class="control-lable">Nama orangtua</label>
				<select class="form-control" name="b">
					@foreach($ortu as $data)
					<option value="{{$data->id}}">{{$data->nama_ibu}} dan {{$data->nama_ayah}}
					 </option>
					 @endforeach
				</select>
			</div>

			<div class="form-group">
				<label class="control-lable">Umur</label>
				<input type="number" name="c" class="form-control"  value="{{$siswa->umur}}" required="">
			</div>

			<div class="form-group">
				<label class="control-lable">Jenis kelamin</label>
				<select name="d">
				<option value="laki-laki">laki-laki</option>
				<option value="perempuan">perempuan</option>
				</select>
			</div>

			<div class="form-group">
				<label class="control-lable">Alamat</label>
				<textarea class="form-control" rows="10" name="e" class="form-control" required="">{{$siswa->alamat}}</textarea>	
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-success">Simpan</button>
				<button type="reset" class="btn btn-danger">reset</button>
			</div>

		</form>
	</div>
	</div>
	</div>
	@endsection