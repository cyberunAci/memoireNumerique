<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Http\Resources\MemoiresRessource;
use App\Http\Resources\CategoriesRessource;
use App\Http\Resources\MediaTypesRessource;
use App\Media;
use App\Mediatype;
use App\Memoire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    
    function index()
    {
        return view('admin.dashboard');
    
    }
    function memoiresView()
    {

        $memoires = Memoire::with([
            'media' => function ($q) {
                $q->with('type');
            },
            'categories'
        ])->get();
        //all cat
        $cat=Categories::all();
        //All type
        $med=Mediatype::all();

        return view('admin.dashboard', [
            'memoires' => MemoiresRessource::collection($memoires), //Renvoi data de mémoire vers la view
            'categories' => CategoriesRessource::collection($cat), //Renvoi data de catégorie vers la view
            'media' => MediaTypesRessource::collection($med)    //Renvoi data de mediatype vers la view
            ]);
    }

    function descView()
    {
        return view('admin.description');
    }

    function equipeView()
    {
        return view('admin.equipe');
    }
    function formulaireview(){
        
        return view('admin.form');

    }
    // AJOUTER BDD
    function add(Request $request)
    {
        //ajouter en premier les media cad recupre video image et id type
        $array = Validator::make($request->all(), [
            'image' => 'required',
            'video' => 'required',
            'id_type' => 'required',

        ], ['required' => 'l\'attribut :attribute est requis'])->validate();

        $insertionMediaId = Media::create(
            $array
        )->id;

        //recuperer les valeur a ajouter dans la table memoire
        $array = Validator::make($request->all(), [
            'titre' => 'required',
            'resumer' => 'required',
            'description' => 'required',
            'auteur' => 'required',
            'id_categorie' => 'required',
            'id_status' => 'required',
        ], ['required' => 'l\'attribut :attribute est requis'])->validate();

        //il manque id_media qui est egal au dernier media ajouter  on le rajoute dans le $array
        $array['id_media'] = $insertionMediaId;
        //insertion en base de donne pour la table memoire 
        $insertionBDD = Memoire::create(
            $array
        )->id;

        $array['id'] = $insertionBDD;
        return json_encode($array);
    }

    /* ADD CATEGORIE */

    function addCategories(Request $request)
    {
        $array = Validator::make($request->all(), [
            'nom' => 'required',
            'couleur' => 'required',
            'image' => 'required',
        ], ['required' => 'l\'attribut :attribute est requis'])->validate();

        $insertCategorie = Categories::create(
            $array
        )->id;

        $array['id'] = $insertCategorie;
        return json_encode($array);
    }
    /* ADD TYPE */
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

    function getCategorie() {
        $categorie = Categories::all();
        return json_encode($categorie);
    }

    function getListMedia()
    {
        $media = Mediatype::all();
        return json_encode($media);
    }



}

