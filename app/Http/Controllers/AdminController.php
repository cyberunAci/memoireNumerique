<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Http\Resources\CategoriesRessource;
use App\Http\Resources\MediaTypesRessource;
use App\Http\Resources\MediasRessource;
use App\Http\Resources\MemoiresRessource;
use App\Mediatype;
use App\Memoire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.dashboard');

    }
    public function memoiresView()
    {

        $memoires = Memoire::with([
            'media' => function ($q) {
                $q->with('mediatype');
            },
            'categories',
        ])->get();
        //all cat
        $cat = Categories::all();
        //All type
        $med = Mediatype::all();

        return view('admin.dashboard', [
            'memoires' => MemoiresRessource::collection($memoires), //Renvoi data de mémoire vers la view
            'categories' => CategoriesRessource::collection($cat), //Renvoi data de catégorie vers la view
            'mediatypes' => MediaTypesRessource::collection($med), //Renvoi data de mediatype vers la view
        ]);
    }

    public function descView()
    {
        return view('admin.description');
    }

    public function equipeView()
    {
        return view('admin.equipe');
    }
    public function formulaireview()
    {

        return view('admin.form');

    }
    // AJOUTER BDD
    //TODO cette fonction fait plusieurs choses, donc à corriger (deux validateur + deux insert)
    public function add(Request $request)
    {
        $data = [
            'image' => 'required',
            'video' => 'required',
        ];
        
        $array = Validator::make($request->all(), $data, [

            'titre' => 'required',
            'resumer' => 'required',
            'description' => 'required',
            'auteur' => 'required',
            'id_categorie' => 'required',
            'id_media' => 'required',
            'id_status' => 'required',
        ], ['required' => 'l\'attribut :attribute est requis'])->validate();

        $insertionBDD = Memoire::create(
            $array
        )->id;

        $array['id'] = $insertionBDD;
        return MemoiresRessource::collection($array);
    }

    /* ADD CATEGORIE */

    public function categoriesBdd(Request $request)
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

        // TODO utiliser les ressources
        return new CategoriesRessource($array);
    }

    /* ADD TYPE */
    public function typesBdd(Request $request)
    {
        $array = Validator::make($request->all(), [
            'type' => 'required',
        ], ['required' => 'l\'attribut :attribute est requis'])->validate();

        $insertMedia = Mediatype::create(
            $array
        )->id;

        $array['id'] = $insertMedia;

        //TODO utiliser les ressources
        return new MediaTypesRessource($array);
    }

    public function getCategorie()
    {
        $categorie = Categories::all();
        return new CategoriesRessource($categorie);
    }

    public function getListMedia()
    {
        $media = Mediatype::all();
        return new MediaTypesRessource($media);
    }

    /**
     * Supprime une memoire
     * @param $id 
     * @return 
     */
    function remove($id)
    {
        $status =  Memoire::destroy($id) ? 'ok' : 'nok';

        //TODO utiliser les ressources
        return json_encode(['status' => $status]);
    }

}
