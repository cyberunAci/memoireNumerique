<?php

namespace App\Http\Controllers;


use App\Categories;
use App\Http\Resources\CategoriesRessource;
use App\Http\Resources\MediasRessource;
use App\Http\Resources\MediaTypesRessource;
use App\Http\Resources\MemoiresRessource;
use App\MemoireStatus;
use App\Media;
use App\Mediatype;
use App\Memoire;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MemoiresController extends Controller
{
    /* ********** BON ********** */
    // MEMOIRES
    function index()
    {

        return view('admin.memoires'); //TODO memoires.blade.php
    }

    /**
     * Return all memoires
     */
    function all()
    {
        $out = Memoire::all();
        return MemoiresRessource::collection($out);
    }

    // AJOUTER les memoires
    function add(Request $request)
    {
        $array = Validator::make($request->all(), [
            'titre' => 'required',
            'resumer' => 'required',
            'description' => 'required',
            'auteur' => 'required',
            'id_categorie' => 'required',
            'id_type' => 'required',
            'image' => 'required',
            'video' => 'required',
            'status' => 'required',
        ], ['required' => 'l\'attribut :attribute est requis'])->validate();

        
    }


    // AJOUTER Categorie
    function addCategorie(Request $request)
    {
        $array = Validator::make($request->all(), [
            'nom' => 'required',
            'couleur' => 'required',
            'image' => 'required',
        ], ['required' => 'l\'attribut :attribute est requis'])->validate();

        $insertCategorie = Categories::create(
            $array
        );
        return new CategoriesRessource($insertCategorie);
    }



    // AJOUTER Type
    function addType(Request $request)
    {
        $array = Validator::make($request->all(), [
            'type' => 'required',
        ], ['required' => 'l\'attribut :attribute est requis'])->validate();

        $insertMedia = Mediatype::create(
            $array
        );

        return new MediaTypesRessource($insertMedia);
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
    

    // OBTENIR DONNÉES À MODIFIER
    function edit($id)
    {
        $where = array('id' => $id);
        $data['memoires'] = Memoire::where($where)->first();
        
        // $dataResource = new MemoiresRessource($data);

        //TODO utliser les ressources
        return view('admin.edit', $data); //TODO: RETOUR de la view dans l'url ²    
    }

    // MODIFIER
    function update( Request $request, $id)
    {
        //Validé la donnée 
        $array = Validator::make($request->all(), 
        [
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

        //Vérifier que la mémoire (id) existe

        if ($array = Memoire::find($id)){  
            $array->titre = 'titre';
            $array->resumer = 'resumer';
            $array->description = 'description';
            $array->auteur = 'auteur';
            $array->id_categorie = 'id_categorie';
            $array->id_type = 'id_mediatype';
            $array->image = 'image';
            $array->video = 'video';
            $array->id_status = 'status';
            
            $array->save(); //save
        }    
         
    }

    /* ********** TODO ********** c'est pas quoi en faire */
    
    // function affichage(Request $request) // pour admin
    // {
    //     $memoire = Memoire::all();
    //     $media = Mediatype::all();
    //     $categories = Categories::all();

    //     $id_select = $request ->input('id_categorie')
    //     return ([$memoire, $media, $categories]);
    // }

    // Recupère les dernières mémoires dans la bdd grace a la catégorie et le status

    
    function lastMemoires()
    {

        $out = Memoire::with([
            'media' => function ($t) {
                $t->with('mediatype');
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
                $t->with('mediatype');
            },
            
        ])
            ->whereHas('media.mediatype', function ($q) use ($type) {
                $q->where('type', $type);
            })
            ->orderBy('id', 'desc','created_at')
            ->get();

           
        return MemoiresRessource::collection($out);
    }
}
