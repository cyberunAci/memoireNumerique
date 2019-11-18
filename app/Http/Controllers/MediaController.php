<?php

namespace App\Http\Controllers;

use App\MediaModel;
use Illuminate\Http\Request;
class MediaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    function recup(){


        $all = MediaModel::orderBy('id','desc')->take(3)->get();
      

        
    
        return $all;
    }
}
