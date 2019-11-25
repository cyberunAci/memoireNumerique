<?php

namespace App\Http\Controllers;

use App\Memoire;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    function index()
    {
        $tabVideos = DB::table('memoire')    // Affiche la base de donnée image_migrate
        ->select('titre', 'image', 'description')
        ->where('titre' , '=', "video")
        ->get();
        return view('client.video', ['tabVideos' => $tabVideos]); // affiche la vue image.blade.php
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
