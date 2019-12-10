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
        $categorie = Categories::with([
            'memoires'
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
>>>>>>> 1801ff2e6f5d101681a7cfda57b1ed2af89ae596
    }
}
