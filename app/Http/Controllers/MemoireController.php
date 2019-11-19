<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Media;
use App\Mediatype;
use App\Memoire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MemoireController extends Controller
{
    function index()
    {
        return view('memoire'); //memoire.blade.php
    }

    function ajoutCategorie(Request $request)
    {
        $array = Validator::make($request->all(), [
            'nom' => 'required',
        ], ['required' => 'l\'attribut :attribute est requis'])->validate();

        $insertCategorie = Categorie::create(
            $array
        )->id;

        $array['id'] = $insertCategorie;
        return json_encode($array);
    }

    function ajoutMedia(Request $request)
    {
        $array = Validator::make($request->all(), [
            'type' => 'required',
        ], ['required' => 'l\'attribut :attribute est requis'])->validate();

        $insertMedia = Media::create(
            $array
        )->id;

        $array['id'] = $insertMedia;
        return json_encode($array);
    }

    function allMedia()
    {
        $media = Media::all();
        return json_encode($media);
    }

    function allCategorie()
    {
        $categorie = Categorie::all();
        return json_encode($categorie);
    }

    function ajout(Request $request)
    {
        $array = Validator::make($request->all(), [
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

}
