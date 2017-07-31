@extends('layouts.master')
@section('isi')
<div class="row">

<center><h1>Data Orangtua</h1></center>
<div class="panel panel-primary">
	<div class="panel-heading">Edit Data Orangtua
	<div class="panel-title pull-right">
	<a href="{{ URL::previous() }}">kembali</a></div>
	</div>

	<div class="panel-body">
	
			<div class="form-group">
				<label class="control-lable">Nama ayah</label>
				<input type="text" name="a" class="form-control" value="{{$ortu->nama_ayah}}" readonly="">
			</div>

			<div class="form-group">
				<label class="control-lable">Nama ibu</label>
				<input type="text" name="b" class="form-control" value="{{$ortu->nama_ibu}}" readonly="">
			</div>

			<div class="form-group">
				<label class="control-lable">Umur ayah</label>
				<input type="number" name="c" class="form-control"  value="{{$ortu->umur_ayah}}" readonly="">
			</div>

			<div class="form-group">
				<label class="control-lable">Umur ibu</label>
				<input type="number" name="d" class="form-control"  value="{{$ortu->umur_ibu}}" readonly="">
			</div>

			<div class="form-group">
				<label class="control-lable">Alamat</label>
				<textarea class="form-control" rows="10" name="e" class="form-control" readonly=""> {{$ortu->alamat}} </textarea>	
			</div>

		</form>
	</div>
	</div>
	</div>
	@endsection