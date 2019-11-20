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

        $recherche = DB::table('memoire')
            ->select('titre', 'resumer', 'description', 'auteur')
            ->where('titre' , '=', $barreRecherche)
            ->get();
        return view('recherche', ['recherche' => $recherche, 'barreRecherche' => $barreRecherche]);
    }
}