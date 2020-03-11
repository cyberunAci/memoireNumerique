<?php

namespace App\Http\Controllers;

use App\Mediatype;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function types() {
        $mediaType = Mediatype::all();
        return MediaTypesRessource::collection($mediaType);
    }
}
