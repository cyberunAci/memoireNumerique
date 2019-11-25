<?php

namespace App\Http\Controllers;


use App\Memoire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    function index()
    {
        $tabArticles = DB::table('memoire')    // Affiche la base de donnée image_migrate
        ->select('id', 'titre', 'image', 'description')
        ->where('titre' , '=', "Memoire")
        ->get();
        return view('memoires', ['tabArticles' => $tabArticles]); // affiche la vue image.blade.php
    }
    
    function add(){
        
        $tabArticle = Memoire::all();
        return $tabArticle;


    }
    
    function recup() {

        $all = Memoire::orderBy('id','desc')->take(3)->get();    
        return $all;

    }
}
