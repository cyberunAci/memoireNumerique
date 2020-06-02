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
            'status',
        ])->get();
        //all cat
        $cat = Categories::all();
        //All type
        $med = Mediatype::all();
        //All status
        $stat = MemoireStatus::all();

        return view('admin.dashboard', [
            'memoires' => MemoiresRessource::collection($memoires), //Renvoi data de mémoire vers la view
            'categories' => CategoriesRessource::collection($cat), //Renvoi data de catégorie vers la view
            'mediatypes' => MediaTypesRessource::collection($med), //Renvoi data de mediatype vers la view
            'status' => MemoireStatusRessource::collection($stat), //Renvoi data de status vers la view
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
    public function add(Request $request)
    {   
        $validator = Validator::make($request->all(), [

            'titre' => 'required',
            'resumer' => 'required',
            'description' => 'required',
            'auteur' => 'required',
            'id_categorie' => 'required',
            'id_type' => 'required',
            'image' => 'required',
            'video' => 'required',
            'id_status' => 'required',
        ], ['required' => 'l\'attribut :attribute est requis'])->validate();


        //tableau de mémoire
        $memoire = [
            'titre' => $validator['titre'],
            'resumer' => $validator['resumer'],
            'description' => $validator['description'],
            'auteur' => $validator['auteur'],
            'id_categorie' => $validator['id_categorie'],
            'id_status' => $validator['id_status'],
        ];

        //tableau de media
        $media = [
            'image' => $validator['image'],
            'video' => $validator['video'],
            'id_type' => $validator['id_type'],
        ];

        $memoireM = [];

        DB::transaction(function () use ($media, $memoire, &$memoireM) {
            $med = Media::create($media);
            $memoireM = $med->media()->create($memoire);
        });

        $memoireM = Memoire::with(['media'])->where('id', $memoireM->id)->first();

        return new MemoiresRessource($memoireM); 

    }

    /* ADD CATEGORIE */

    public function categoriesBdd(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'couleur' => 'required',
            'image' => 'required',
        ], ['required' => 'l\'attribut :attribute est requis'])->validate();

        $insertCategorie = Categories::create($validator);

        // TODO utiliser les ressources
        return new CategoriesRessource($insertCategorie);
    }

    /* ADD TYPE */
    public function typesBdd(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'required',
        ], ['required' => 'l\'attribut :attribute est requis'])->validate();

        $insertMedia = Mediatype::create($validator);

        //TODO utiliser les ressources
        return new MediaTypesRessource($insertMedia);
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
