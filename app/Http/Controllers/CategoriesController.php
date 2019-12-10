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
            'memoires'
        ])
        ->get();


        return CategoriesRessource::collection($categorie);
    }
}
