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

    /*
    * ADD CATEGORIE 
    */ 
    function addCategorie(Request $request)
    {
        $array = Validator::make($request->all(), [
            'nom' => 'required',
            'couleur' => 'required',
            'image' => 'required',
        ], ['required' => 'l\'attribut :attribute est requis'])->validate();

        $categorie = Categories::create($array);

        return new CategoriesRessource($categorie);
    }

    /*
    * ADD TYPE
    */ 
    function addType(Request $request)
    {
        $array = Validator::make($request->all(), [
            'type' => 'required',
        ], ['required' => 'l\'attribut :attribute est requis'])->validate();

        $type = Mediatype::create($array);
        
        return new MediaTypesRessource($type);
    }

    /*
    * AFFICHE TOUT LES CATEGORIES
    */ 
    function getCategorie() {
        $categorie = Categories::all();
        return new CategoriesRessource($categorie);
    }

    /*
    * AFFICHE TOUT LES MEDIAS
    */ 
    function getListMedia()
    {
        $media = Mediatype::all();
        return new MediaTypesRessource($media);
    }

    /**
     * *********************  À VOIR PLUS TARD *****************************
     */

    // AJOUTER BDD
    //TODO cette fonction fait plusieurs choses, donc à corriger (deux validateur + deux insert)
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

        // TODO utiliser les ressources
        return new MemoiresRessource($array);
    }

    /*
    * EFFACER MEMOIRE
    */ 
    function remove($id)
    {
        $status =  Memoire::destroy($id) ? 'ok' : 'nok';

        //TODO utiliser les ressources
        /*FONCTIONNE PAS AVEC RESSOURCE À VOIR PLUS TARD*/ 
        return json_encode(['status' => $status]);
    }

}

