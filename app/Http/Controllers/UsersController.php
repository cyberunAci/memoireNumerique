<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    /**
     * Partie connexion
     */
    public function submit(Request $request)
    {
        //Validation des inputs
        $login = Validator::make(
            $request->input(),
            [
                'identifiant' => 'required',
                'password' => 'required',
            ],
            [
                'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreure
            ]
        )->validate();
        //Stockage de session
        $request->session()->put('info', $login);

        //Recuperation des données dans la base de donnée 
        $user = Users::where('name', $login['identifiant'])->first();

        //Comparaison des données de session et des données de la bdd
        if ($user && md5($login['password']) == $user['password']) {
            //Si une session existe, accès autorisée    
            if ($request->session()->has('info')) {

                return redirect('/admin/dashboard');
            }
        } else {
            //Si non, acès refusé et redirection à la page de connexion
            return redirect('/login');
        }
    }

    /**
     * Function deconnexion
     */
    public function deconnexion(Request $request)
    {
        //Suppression de données de session
        $request->session()->flush();
        //Redirection à l'accueil
        return redirect('/');
    }


}
