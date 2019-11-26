<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediathequeController extends Controller
{
    
    function index()
    {
        return view('client.mediatheque');
    }
    function categorie()
    {
        return view('client.categorie');
    }
    function type()
    {
        return view('client.type');
    }

    /* TODO */
    function id($id)
    {
        $recupVideo = Memoire::find($id);
        return view('description', ['recupVideo'=> $recupVideo]);
    }
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
