<?php

namespace App\Http\Controllers;

use App\ContactModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    function index() {
        return view('contact');
    }

    function message(Request $request)
    {
        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $objet = $_POST["objet"];
        $message = $_POST["message"];

        if (isset($nom) AND !empty($nom) AND isset($email) AND !empty($email) AND isset($objet) AND !empty($objet) AND isset($message) AND !empty($message)) {

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
            return json_encode($donneesBdd);
            return json_encode($validateData);
        } else {
            return "probleme";
        }
        
        
    }

}
