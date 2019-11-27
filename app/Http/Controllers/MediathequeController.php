<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Categories;
=======
use App\Categorie;
>>>>>>> dd5bd29db5fe5bb503f158f1deeae62f8b2f1c7a
use Illuminate\Http\Request;

class MediathequeController extends Controller
{
    function index()
    {
        $lastMemoires = app('App\Http\Controllers\MemoiresController')->lastMemoires();
        $lastVideos = app('App\Http\Controllers\MemoiresController')->lastVideos();
        $lastPhotos = app('App\Http\Controllers\MemoiresController')->lastPhotos();
        // $categories = app('App\Http\Controllers\CategoriesController')->categories();
        $categories = Categorie::all();

        return view('client.mediatheque', ['categories' => $categories]);
    }
    function categories()
    {   
        $nom = Categories::all();
        return view('client.categories', ['categories' => $nom]);
    }
    function types()
    {
        return view('client.types');
    }

    function getDatas(Request $request)
    {
        $lastMemoires = app('App\Http\Controllers\MemoiresController')->lastMemoires();
        $lastVideos = app('App\Http\Controllers\MemoiresController')->lastVideos();
        $lastPhotos = app('App\Http\Controllers\MemoiresController')->lastPhotos();
        $categories = app('App\Http\Controllers\CategoriesController')->categories();


        // return view('client.mediatheque', ['lol' => "George"]);

        return json_encode([
            'last' => $lastMemoires,
            'lastVideo' => $lastVideos,
            'lastPhotos' => $lastPhotos,
            'categories' => $categories
        ]);
    }
}
