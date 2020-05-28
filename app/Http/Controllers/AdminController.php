<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoriesRessource;
use App\Http\Resources\MediaTypesRessource;
use App\Http\Resources\MediasRessource;
use App\Http\Resources\MemoiresRessource;
use App\Http\Resources\MemoireStatusRessource;
use App\Categories;
use App\Mediatype;
use App\MemoireStatus;
use App\Memoire;
use App\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $validator = Validator::make($request->all(), [
            'titre' => 'required',
            'resumer' => 'required',
            'description' => 'required',
            'auteur' => 'required',
            'id_categorie' => 'required',
            'id_status' => 'required',
            'image' => 'required',
            'video' => 'required',
            'id_type' => 'required',
            'id_status' => 'required',
        ], ['required' => 'l\'attribut :attribute est requis'])->validate();

        //table mémoire
        $memoire = [
            'titre' => $validator['titre'],
            'resumer' => $validator['resumer'],
            'description' => $validator['description'],
            'auteur' => $validator['auteur'],
            'id_categorie' => $validator['id_categorie'],
            'id_status' => $validator['id_status'],
        ];

        //table média 
        $media = [
            'image' => $validator['image'],
            'video' => $validator['video'],
            'id_type' => $validator['id_type'],
        ];

        $memoire = new Memoire;
        $memoire->titre = $request->get('titre');
        $memoire->resumer = $request->get('resumer');
        $memoire->description = $request->get('description');
        $memoire->auteur = $request->get('auteur');

        $categorie = new Categories;

        $media = new Media;
        $media->image = $request->get('image');
        $media->video = $request->get('video');
        $media->id_type = $request->get('id_type');

        DB::transaction(function () use ($memoire, $media, $categorie) {
            $media = $media->save();
            Media::find(1)->media()->save($memoire);
        }); 
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

    public function getListStatus()
    {
        $status = MemoireStatus::all();
        return new MemoireStatusRessource($status);
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
