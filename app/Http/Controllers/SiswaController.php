<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\siswa;
use App\orangtua;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $siswa = siswa::all();
        return view('siswa.index',compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ortu = orangtua::all();
         return view('siswa.create',compact('ortu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $siswa = new siswa;
        $siswa->nama = $request->a;
        $siswa->orangtua_id = $request->b;
        $siswa->umur = $request->c;
        $siswa->jk = $request->d;
        $siswa->alamat = $request->e;
        $siswa->save();
        return redirect('siswa');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
          $siswa = siswa::findOrfail($id);
        return view ('siswa.show',compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ortu = orangtua::all();
        $siswa = siswa::findOrfail($id);
        return view ('siswa.edit',compact('siswa','ortu'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $siswa = siswa::findOrfail($id);
        $siswa->nama = $request->a;
        $siswa->orangtua_id = $request->b;
        $siswa->umur = $request->c;
        $siswa->jk = $request->d;
        $siswa->alamat = $request->e;
        $siswa->save();
        return redirect('siswa');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $siswa = siswa::findOrfail($id);
        $siswa->delete();
        return redirect('siswa');
    }
}
