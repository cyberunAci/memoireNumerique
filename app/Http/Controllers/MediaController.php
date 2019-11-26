<?php

namespace App\Http\Controllers;

use App\Memoire;
use Illuminate\Http\Request;
class MediaController extends Controller
{
    function id($id)
    {
        $recupVideo = Memoire::find($id);
        return view('description', ['recupVideo'=> $recupVideo]);
    }

    /* TODO */
    function recup()
    {
        $all = Memoire::orderBy('id','desc')->take(3)->get();
        return $all;
    }

    function liste()
    {
        $liste = Memoire::all();
        return $liste;
    }
}
