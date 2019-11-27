<?php

namespace App\Http\Controllers;

use App\Categories;
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
