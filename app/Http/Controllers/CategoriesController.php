<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Http\Resources\CategoriesRessource;
use App\Memoire;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function categories() {
        $categorie = Categories::all();
        return CategoriesRessource::collection($categorie);
    }
}
