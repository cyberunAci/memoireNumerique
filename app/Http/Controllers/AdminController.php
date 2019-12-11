<?php

namespace App\Http\Controllers;

use App\Http\Resources\MemoiresRessource;
use App\Memoire;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        return view('admin.dashboard');
    }
    function memoiresView()
    {

        $memoires = Memoire::with([
            'media' => function ($q) {
                $q->with('type');
            },
            'categories'
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
}
