<?php

namespace App\Http\Controllers;


use App\Memoire;
use Illuminate\Http\Request;

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
        return view('article'); // affiche la vue image.blade.php
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
