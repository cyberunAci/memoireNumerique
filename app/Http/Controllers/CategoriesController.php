<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Http\Resources\CategoriesRessource;
use App\Memoire;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{


    public function categories()
    {
        $categorie = Categories::with([
            'category'
        ])
        ->get();


        return CategoriesRessource::collection($categorie);
    function index()
    {   
        $test = Categories::with([
            "memoires"
        ])-> get();
        $categories = CategoriesRessource::collection($test);
        return view('client.categories', ['categories' => $categories]);
    }
}

    // liste des Categories TODO
    function getMemoires()
    {
        $categorie = Categories::all();

        return CategoriesRessource::collection($categorie);
    }

}
