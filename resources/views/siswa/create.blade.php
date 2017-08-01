@extends('layouts.master')
@section('isi')
<div class="row">

<center><h1>Data siswa</h1></center>
<div class="panel panel-primary">
	<div class="panel-heading">Tambah Data siswa
	<div class="panel-title pull-right">
	<a href="{{ URL::previous() }}">kembali</a></div>
	</div>

	<div class="panel-body">
		<form action="{{route('siswa.store')}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<label class="control-lable">Nama</label>
				<input type="text" name="a" class="form-control" required="">
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
				<input type="number" name="c" class="form-control" required="">
			</div>

			     <div class="form-group">
              	<label class="control-lable">jenis kelamin</label><br>
				<input type="radio" name="d"  value="perempuan">perempuan
				<input type="radio" name="d" value="laki-laki">laki-laki
			</div>


			<div class="form-group">
				<label class="control-lable">Alamat</label>
				<textarea class="form-control" rows="10" name="e" class="form-control" required=""></textarea>	
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