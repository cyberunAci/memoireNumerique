<?php

namespace App\Http\Controllers;

use App\JeParticipeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JeParticipeController extends Controller
{
    function index() {
        return view('client.jeParticipe');
    }

    function message(Request $request)
    {
        if (isset($_POST["nom"]) AND !empty($_POST["nom"]) AND isset($_POST["email"]) AND !empty($_POST["email"]) AND isset($_POST["titreVideo"]) AND !empty($_POST["titreVideo"]) AND isset($_POST["descriptionVideo"]) AND !empty($_POST["descriptionVideo"]) AND isset($_POST["lienVideo"]) AND !empty($_POST["lienVideo"])) {

            $validateData = Validator::make(  //verifie les informations vis-a-vis de la BDD
                $request->all(),
                [
                    'nom' => 'required', //"required" -> ce champs est obligatoire
                    'email' => 'required',
                    'titreVideo' => 'required',
                    'descriptionVideo' => 'required',
                    'lienVideo' => 'required'
                ],
                [
                    'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreure
                ]
            )->validate();
    
            /**
             * TODO INSERTION DS LA BASE DE DONNEE
             */
            $donneesBdd = JeParticipeModel::create( //Autre maniere d'envoyer les information [en lien avec le fichier Jeux.php (dans app/)]
                $validateData
            );

            //TODO utiliser les ressources
            return json_encode($donneesBdd);
        } else {
            return "Probleme avec le serveur";
        }
        
        
    }
}
