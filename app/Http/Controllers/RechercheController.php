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

        $recherche = Memoire::
            select('titre', 'resumer', 'description', 'auteur')
            ->where('titre' , 'like', "%$barreRecherche%") // "..." permet de lire une variable dans un string et %...% permet de lire l'element sans être absolue (test = test de memoir... // avant test = test != test de ...)
            ->get();
        return view('client.recherche', ['recherche' => $recherche, 'barreRecherche' => $barreRecherche]);
    }
}