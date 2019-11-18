<?php

namespace App\Http\Controllers;

use App\Image;
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
        return view('image'); // affiche la vue image.blade.php
    }
    
        function add(){

            $tabImage = Image::all();  // Affiche la base de donnée image_migrate
            return $tabImage;
        }
}
