<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orangtua;

class mycontroller extends Controller
{
    //
    public function index()
    {
    	$a = "Cindi oktaviani";
    	return $a;
    }

    public function tampilanmodel()
    {
    	$ortu = orangtua::all();
    	return $ortu;
    }

    public function tampilanview()
    {
    	return view('about');
    }

    public function percobaan()
    {
    	$ortu = orangtua::all();
    	return view ('index',compact('ortu'));
    }

 
}
