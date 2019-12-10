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
        $categorie = Categorie::with([
            'category'
        ])
        ->get();


        return CategoriesRessource::collection($categorie);
    }
}
