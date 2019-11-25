<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Media;
use App\Mediatype;
use App\Memoire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CreateController extends Controller
{
    /* ********** BON ********** */
    // MEMOIRES
    function index()
    {
        return view('admin.create'); //memoires.blade.php
    }
    // AJOUTER
    function add(Request $request)
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

        $insertionBDD = Memoire::create(
            $array
        )->id;

        $array['id'] = $insertionBDD;
        return json_encode($array);
    }
    // AJOUTER Categorie
    function addCategorie(Request $request)
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
    // AJOUTER Type
    function addType(Request $request)
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
    // SUPRIMER
    function remove()
    {
        Memoire::find(['id'])->delete();
    }
    // MODIFIER
    function update()
    {
        //
    }
    // liste des éléments
    function getByCategorie()
    {
        //
    }

    /* ********** TODO ********** */
    function afficheMedia()
    {
        $media = Media::all();
        return json_encode($media);
    }

    function afficheCategorie()
    {
        $categorie = Categorie::all();
        return json_encode($categorie);
    }

    function affichage(Request $request)
    {
        $memoire = Memoire::all();
        $media = Mediatype::all();
        $category = Categorie::all();

        // $id_select = $request ->input('id_categorie');
        return ([$memoire, $media, $category]);
    }
}
