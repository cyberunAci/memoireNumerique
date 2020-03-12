<?php

namespace App\Http\Controllers;

use App\Http\Resources\MediasRessource;
use App\Media;
use Illuminate\Http\Request;

class TypesController extends Controller
{
        // liste des éléments TODO
        function getMemoires()
        {
            $media = Media::all();
    
            return MediasRessource::collection($media);
        }
}
