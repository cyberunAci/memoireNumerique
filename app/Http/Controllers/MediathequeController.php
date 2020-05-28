<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Http\Resources\CategoriesRessource;
use App\Http\Resources\MediasRessource;
use App\Media;
use Illuminate\Http\Request;

class MediathequeController extends Controller
{
    function index()
    {
        $lastMemoires = app('App\Http\Controllers\MemoiresController')->lastMemoires();
        $lastPhotos = app('App\Http\Controllers\MemoiresController')->lastPhotos();
        // $categories = app('App\Http\Controllers\CategoriesController')->categories();   
        $lastVideos = Media::where('id_type', '=', 1)->get();
        $categories = Categories::all();

        return view('client.mediatheque', ['lastVideos' => $lastVideos]);

    }

    function getOneVideo($id) {
        $dataVideo = Media::find($id);
        return view('client.video');
    }

    function vueEnvir() {
        return view('client.environnement');
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
        return json_encode('client.mediatheque', [
            'last' => $lastMemoires,
            'lastVideo' => $lastVideos,
            'lastPhotos' => $lastPhotos,
            'categories' => $categories
        ]);
    }

    // function getVideos(){

    //     $dataVideos = 
    // }
}
