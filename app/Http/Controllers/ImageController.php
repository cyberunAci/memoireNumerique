<?php

namespace App\Http\Controllers;

use App\Memoire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        
        $tabImages = DB::table('memoire')    // Affiche la base de donnée image_migrate
        ->select('id', 'titre', 'image', 'description')
        ->where('titre' , '=', "photo")
        ->get();
        return view('client.photo', ['tabImages' => $tabImages]);
    }
    
        function add(){

            $tabImage = Memoire::all();  // Affiche la base de donnée image_migrate
            return $tabImage;
        }


}
