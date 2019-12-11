<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Http\Resources\CategoriesRessource;
use App\Memoire;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
<<<<<<< HEAD


    public function categories()
    {
        $categorie = Categorie::with([
            'category'
        ])
        ->get();


        return CategoriesRessource::collection($categorie);
=======
    function index()
    {   
        $test = Categories::with([
            "memoires"
        ])-> get();
        $categories = CategoriesRessource::collection($test);
        return view('client.categories', ['categories' => $categories]);
>>>>>>> 897cd40597259909c41a76f00a6f97f98c29d218
    }
}
