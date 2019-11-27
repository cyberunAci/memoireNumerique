<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Http\Resources\MemoiresRessource;
use App\Status;
use App\Media;
use App\Mediatype;
use App\Memoire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MemoiresController extends Controller
{
    /* ********** BON ********** */
    // MEMOIRES
    function index()
    {
        return view('admin.memoires'); //memoires.blade.php
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
    function addCategories(Request $request)
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
    function addTypes(Request $request)
    {
        $array = Validator::make($request->all(), [
            'type' => 'required',
        ], ['required' => 'l\'attribut :attribute est requis'])->validate();

        $insertMedia = Mediatype::create(
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
    // liste des éléments TODO
    function getByCategories()
    {
        $categorie = Categorie::all();
        return json_encode($categorie);
    }
    // liste des éléments TODO
    function getByTypes()
    {
        $media = Media::all();
        return json_encode($media);
    }
    /* ********** TODO ********** c'est pas quoi en faire */
    // function affichage(Request $request)
    // {
    //     $memoire = Memoire::all();
    //     $media = Mediatype::all();
    //     $category = Categorie::all();

    function afficheCategories()
    {
        $categorie = Categorie::all();
        return json_encode($categorie);
    }

    function affichage(Request $request)
    {
        $memoire = Memoire::all();
        $media = Mediatype::all();
        $categories = Categorie::all();

        // $id_select = $request ->input('id_categorie');
        return ([$memoire, $media, $categories]);
    }

    // Recupère les dernières mémoires dans la bdd grace a la catégorie et le status

    function lastMemoires()
    {

        $out = Memoire::with([
            'media' => function ($t) {
                $t->with('type');
            },
            'categories',
            'status'
        ])
            ->orderBy('id', 'desc')
            ->limit(3)
            ->get();


        
        return MemoiresRessource::collection($out);
    }

    // Recupère les dernières videos dans la bdd grace au type de média

    function lastVideos()
    {

        $out = $this->lastByTypes('video');
        return MemoiresRessource::collection($out);
    }

    function lastPhotos()
    {
        $out = $this->lastByTypes('photo');
        return MemoiresRessource::collection($out);
    }

    private function lastByTypes($type)
    {

        $out = Memoire::with([
            'media' => function ($t) {
                $t->with('type');
            },
            'categories',
            'status'
        ])
            ->whereHas('media.types', function ($q) use ($type) {
                $q->where('type', $type);
            })
            ->orderBy('id', 'desc')
            ->get();

           
        return MemoiresRessource::collection($out);
    }
}
