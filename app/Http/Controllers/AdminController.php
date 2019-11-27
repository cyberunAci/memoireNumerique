<?php

namespace App\Http\Controllers;

use App\Http\Resources\MemoiresRessource;
use App\Memoire;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function memoiresView()
    {
        $memoires = MemoiresRessource::collection(Memoire::all());
        return view('admin.memoires', ['memoires' => $memoires]);
    }

    function descView()
    {
        return view('admin.description');
    }

    function equipeView()
    {
        return view('admin.equipe');
    }
}
