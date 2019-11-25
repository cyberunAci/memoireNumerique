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
        return view('admin.memoires'); //memoires.blade.php
    }

    function supprimerMemoire(Request $request)
    {
        Memoire::find(['id'])->delete();
    
    
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

    //recuperation
    //     function getIdCat(Request $request){
    //      // $id_select = $request ->input('id_categorie');
    //       $id_select = $request ->id_categorie;
    //       $categorie = Categorie::where('id', '=', $id_select)->get('nom');
    // return $categorie[0];
    //     }



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


    // function affichage()
    // {
    //     $memoire = Memoire::all();
    //     $media = Media::all();
    //     $categorie = Categorie::all();



    //     return ([$memoire, $media, $categorie,]);
    // }




    function affichage(Request $request)
    {
        $memoire = Memoire::all();
        $media = Mediatype::all();
        $category = Categorie::all();

        // $id_select = $request ->input('id_categorie');
        return ([$memoire, $media, $category]);
    }
}
