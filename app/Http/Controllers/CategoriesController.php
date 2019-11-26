<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Http\Resources\CategoriesRessource;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function categories() {
        $categorie = Categorie::all();
        return CategoriesRessource::collection($categorie);
    }
}
