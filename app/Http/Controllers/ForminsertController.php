<?php

namespace App\Http\Controllers;

use App\Forminsert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ForminsertController extends Controller
{
    function index()
    {
        return view('forminsert'); //forminsert.blade.php
    }


    function ajout (Request $request){
        $array= Validator::make($request->all(), [
            'titre' => 'required',
            'resumer' => 'required',
            'description' => 'required',
            'image' => 'required',
            'video' => 'required',
        ], ['required' => 'l\'attribut :attribute est requis'])->validate();

            $forminsert = Forminsert::create(
                $array
            )->id;

            $array['id'] = $forminsert;

        return json_encode($array);
    }
}
