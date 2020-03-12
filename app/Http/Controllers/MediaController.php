<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoriesRessource;
use App\Http\Resources\MediasRessource;
use App\Media;
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
