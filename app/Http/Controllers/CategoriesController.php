<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Http\Resources\CategoriesRessource;
use App\Memoire;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

<<<<<<< HEAD
    public function categories() {
        $categorie = Categories::all();
=======

    public function categories()
    {
        $categorie = Categorie::with([
            'category'
        ])
        ->get();


>>>>>>> dd5bd29db5fe5bb503f158f1deeae62f8b2f1c7a
        return CategoriesRessource::collection($categorie);
    }
}
