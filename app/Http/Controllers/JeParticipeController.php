<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JeParticipeController extends Controller
{
    function index() {
        return view('jeParticipe');
    }
}
