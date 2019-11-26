<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function createView() {
        return view('admin.create');
    }
    
    function descView() {
        return view('admin.description');
    }

    function equipeView() {
        return view('admin.equipe');
    }
}
