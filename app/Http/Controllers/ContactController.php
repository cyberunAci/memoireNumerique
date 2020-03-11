<?php

namespace App\Http\Controllers;

use App\ContactModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    function index() {
        return view('client.contact');
    }

    function message(Request $request)
    {
        
        if (isset($_POST["nom"]) AND !empty($_POST["nom"]) AND isset($_POST["email"]) AND !empty($_POST["email"]) AND isset($_POST["objet"]) AND !empty($_POST["objet"]) AND isset($_POST["message"]) AND !empty($_POST["message"])) {

            $validateData = Validator::make(  //verifie les informations vis-a-vis de la BDD
                $request->all(),
                [
                    'nom' => 'required', //"required" -> ce champs est obligatoire
                    'email' => 'required',
                    'objet' => 'required',
                    'message' => 'required'
                ],
                [
                    'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreure
                ]
            )->validate();     
            /**
             * TODO INSERTION DS LA BASE DE DONNE
             */
            $donneesBdd = ContactModel::create( //Autre maniere d'envoyer les information [en lien avec le fichier Jeux.php (dans app/)]
                $validateData
            );

            //TODO utiliser les ressources
            return json_encode($donneesBdd);
        } else {
            return "Probleme avec le serveur";
        }
        
        
    }

}
