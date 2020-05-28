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
        //récupère les catégories
        $categorie = Categories::with([
            'categories'
        ])
        ->get();


        return CategoriesRessource::collection($categorie);

    function index()
    {   
        $test = Categories::with([
            "memoires"
        ])-> get();
        $categories = CategoriesRessource::collection($test);
        return view('client.categories');
    }
}

    // liste des Categories TODO
    function getMemoires()
    {
        $categorie = Categories::all();

        return CategoriesRessource::collection($categorie);
    }

}
