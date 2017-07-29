@extends('layouts.master')
@section('isi')

@foreach ($ortu as $data) <hr>
	   Nama ayah : {{$data->nama_ayah}} <br>
	   Nama ibu  : {{$data->nama_ibu}} <br>
	   Umur ibu  : {{$data->umur_ibu}}<br>
	   Umur ayah : {{$data->umur_ayah}}<br>
	   Nama anak :
		@foreach ($data->siswa as $key) 
			<li>{{$key->nama}}</li>
		    @endforeach
		    <hr>
	        @endforeach
@endsection