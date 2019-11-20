<?php

namespace App\Http\Controllers;

use App\Memoire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RechercheController extends Controller
{
    function recherche(Request $request)
    {
        $barreRecherche = $request->input('recherche');
        return view('recherche', ['recherche' => $barreRecherche]);
    }
}