<?php

namespace App\Http\Controllers;

use App\Memoire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RechercheController extends Controller
{
    function recherche(Request $request)
    {
        $barreRecherche = $request->input('recherche');
        // return view('recherche', ['recherche' => $barreRecherche]); //l'information circule entre les pages (RechercheController > recherche.blade.php)

        $recherche = DB::table('memoire')
            ->select('titre')
            ->where('titre' , '=', $barreRecherche)
            ->get();
        return view('recherche', ['recherche' => $recherche]);
    }
}