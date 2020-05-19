<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Http\Resources\CategoriesRessource;
use App\Http\Resources\MediaTypesRessource;
use App\Mediatype;
use Illuminate\Http\Request;

class MediathequeController extends Controller
{
    function index()
    {
        $lastMemoires = app('App\Http\Controllers\MemoiresController')->lastMemoires();
        $lastVideos = app('App\Http\Controllers\MemoiresController')->lastVideos();
        $lastPhotos = app('App\Http\Controllers\MemoiresController')->lastPhotos();
        // $categories = app('App\Http\Controllers\CategoriesController')->categories();
        $categories = Categories::all();

        return view('client.mediatheque', ['categories' => $categories]);
    }
    
    function types()
    {
        $types = MediaTypesRessource::collection(Mediatype::all());
        return view('client.types', ['types' => $types]);
    }

    function getDatas(Request $request)
    {
        $lastMemoires = app('App\Http\Controllers\MemoiresController')->lastMemoires();
        $lastVideos = app('App\Http\Controllers\MemoiresController')->lastVideos();
        $lastPhotos = app('App\Http\Controllers\MemoiresController')->lastPhotos();
        $categories = app('App\Http\Controllers\CategoriesController')->categories();


        // return view('client.mediatheque', ['lol' => "George"]);

        
        //TODO utiliser les ressources 
        return json_encode([
            'last' => $lastMemoires,
            'lastVideo' => $lastVideos,
            'lastPhotos' => $lastPhotos,
            'categories' => $categories
        ]);
    }
}
