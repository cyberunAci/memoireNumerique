<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{

    public function submit(Request $request)
    {

        

        $request->session()->put('info', $request->input());
        $info = $request->session()->get('info');
        $user = Users::where('name', $info['identifiant'])->first();
        $password = Users::where('password', $info['password'])->first();
        if (isset($info['identifiant']) == $user && isset($info['password']) == $password) {

            $array = Validator::make($request->all(), [
                'identifiant' => 'required',
                'password' => 'required',
            ], ['required' => 'l\'attribut :attribute est requis'])->validate();
            
            if ($request->session()->has('info')) {
                return redirect('/admin/dashboard');
            }
            /* $data = $request->session()->all();
            return $data; */
        } else {
            return redirect('/login');
        }
    }

    public function deconnexion(Request $request)
    {
        $request->session()->flush();
/*         $data = $request->session()->all();
 */        return redirect('/');
    }
}
