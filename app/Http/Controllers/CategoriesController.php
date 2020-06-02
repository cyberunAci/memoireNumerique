<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Http\Resources\CategoriesRessource;
use App\Http\Resources\MemoiresRessource;
use App\Memoire;
use Illuminate\Database\Eloquent\Builder;

class CategoriesController extends Controller
{

    public function categories()
    {
        //récupère les catégories
        $categorie = Categories::with([
            'categories',
        ])
            ->get();

        return CategoriesRessource::collection($categorie);
        }
    function index()
    {   
        $test = Categories::with([
            "memoires"
        ])-> get();
        $categories = CategoriesRessource::collection($test);
        return view('client.categories');
    }

    // liste des Categories TODO
    public function getMemoires()
    {
        $categorie = Categories::all();

        return CategoriesRessource::collection($categorie);
    }

    public function getEnvironnement()
    {
        $environnement = Categories::where('nom','=','Environnement')->first();
        $memoires = Memoire::whereHas('categories', function (Builder $query) use ($environnement){
            $query->where('id_categorie', '=',  $environnement->id);
        })->get();
        return view('client.environnement', ['memoires' => $memoires]);
    }

}
