<?php

namespace App\Http\Controllers;

use App\Memoire;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

        function index()
    {
        return view('photo'); // affiche la vue photo.blade.php
    }
    
        function add(){

            $tabImage = Memoire::all();  // Affiche la base de donnée image_migrate
            return $tabImage;
        }

}
