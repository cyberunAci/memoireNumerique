<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForminsertController extends Controller
{
    function index()
    {
        return view('forminsert'); //forminsert.blade.php
    }
}
