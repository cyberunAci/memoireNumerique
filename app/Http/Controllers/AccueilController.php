<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    function index()
    {
        return view('client.accueil'); //memoire.blade.php
    }
}
