<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Http\Resources\CategoriesRessource;
use App\Memoire;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    function index()
    {   
        $test = Categories::with([
            "memoires"
        ])-> get();
        $categories = CategoriesRessource::collection($test);
        return view('client.categories', ['categories' => $categories]);
    }
}
