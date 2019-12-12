<?php

namespace App\Http\Controllers;

use App\Http\Resources\MemoiresRessource;
use App\Memoire;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function memoiresView()
    {

        $memoires = Memoire::with([
            'media' => function ($q) {
                $q->with('type');
            },
            'category'
        ])->get();

        return view('admin.memoires', ['memoires' => MemoiresRessource::collection($memoires)]);
    }

    function descView()
    {
        return view('admin.description');
    }

    function equipeView()
    {
        return view('admin.equipe');
    }
    function formulaireview(){
        
        return view('admin.form');
    }
}
