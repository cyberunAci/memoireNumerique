<?php

namespace App\Http\Controllers;

use App\Memoire;

class VideoController extends Controller
{
    function index()
    {
        return view('video');
    }

    function ajout(){

        // return json_encode("toto");

        $tabVideo = Memoire::all();
        return $tabVideo;
    }

    function getDescription($id) {
        
        $recupVideo = Memoire::find($id);
        return view('description', ['recupVideo'=> $recupVideo]);
    }
}
