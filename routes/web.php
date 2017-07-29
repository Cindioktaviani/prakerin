<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function() {
	return view('about');
});


Route::get('/about1/1',function() {
	return view ('about.satu');
});

Route::get('/about2/2',function() {
	return view ('about.dua');
});

Route::get('/abou3/3',function() {
	return view ('about.tiga');
});

Route::get('/siswa/{nama}/{sekolah}/{umur}',function($a,$b,$c) {
	return 'nama saya :'.$a .'<br>' 
	       .'sekolah : '.$b .'<br>'
	       .'umur : '.$c; 

});


Route::get('nama/{nama}',function() {

	$a='john';
	return 'ini halaman about '. $a; 
});

Route::get('testmodel',function() {
	$b=App\Post::all();
	return $b;
});

Route::get('id', function (){
	$d=App\Post::find(1);
	return $d;

});

Route::get('model',function (){
      $c =App\Post::where('title','like','cepat nikah')->get();
      return $c;
});

Route::get('ubah',function(){
	$post = App\Post::find(1);
	$post->title ="ciri keluarga sakinah";
	$post->save();
	return $post;
});

Route::get('model2',function(){
	$post = new App\Post;
	$post->title ="Amalan pembuka jodoh";
	$post->content="solat malam,puasa sunah,silaturahmi,senyum,doa,tobat";
	$post->save();
	return $post;
});

Route::get('cektampilan',function() {
	return view('layouts.master');
});

Route::get('/orangtua',function(){
	$ortu = App\orangtua::all();
	foreach ($ortu as $key) {
		echo $key->nama_ayah;
		echo " dengan ";
		echo $key->nama_ibu;
		echo " mempunyai anak ";
		foreach ($key->siswa as $data) {
			echo "<li>".$data->nama."</li>";
			echo " umur ";
			echo $data->umur;
			echo " jenis kelamin ";
			echo $data->jk;
			echo " alamat ";
			echo $data->alamat;
		    echo "<hr>";
		}
	}
});

Route::get('/coba','mycontroller@index');
Route::get('/coba2','mycontroller@tampilanmodel');
Route::get('/coba3','mycontroller@tampilanview');
Route::get('/coba4','mycontroller@percobaan');



