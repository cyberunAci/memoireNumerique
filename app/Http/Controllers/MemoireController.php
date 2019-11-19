<?php

namespace App\Http\Controllers;

use App\Memoire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MemoireController extends Controller
{
    function index()
    {
        return view('memoire'); //memoire.blade.php
    }

    function ajout(Request $request){
        $array= Validator::make($request->all(), [
            'titre' => 'required',
            'resumer' => 'required',
            'description' => 'required',
            'auteur' => 'required',
            'id_categorie' => 'required',
            'id_mediatype' => 'required',
            'image' => 'required',
            'video' => 'required',
            'status' => 'required',
        ], ['required' => 'l\'attribut :attribute est requis'])->validate();

            $forminsert = Memoire::create(
                $array
            )->id;

            $array['id'] = $forminsert;
        return json_encode($array);
    }

    //TODO
    public function listMedia()
    {
        $media=Mediatype::all();
    }
}
