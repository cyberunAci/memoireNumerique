<?php

namespace App\Http\Controllers;

use App\Types;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function mediaTypes()
    {
        $types = Types::with([
            'memoires'
        ])
        ->get();


        return CategoriesRessource::collection($types);
    }
}
