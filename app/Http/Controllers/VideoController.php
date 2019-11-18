<?php

namespace App\Http\Controllers;

use App\Forminsert;
class VideoController extends Controller
{
    function index()
    {
        return view('video');
    }

    function ajout(){

        // return json_encode("toto");

        $tabVideo = Forminsert::all();
        return $tabVideo;
    }

    function getDescription($id) {
        
        $recupVideo = Forminsert::find($id);
        return view('description', ['recupVideo'=> $recupVideo]);
    }
}
