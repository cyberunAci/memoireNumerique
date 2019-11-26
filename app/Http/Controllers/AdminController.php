<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function memoiresView() {
        return view('admin.memoires');
    }
    
    function descView() {
        return view('admin.description');
    }

    function equipeView() {
        return view('admin.equipe');
    }
}
