<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{
    function index()
    {
        return view('video');
    }

    function add(){


        $tabVideo = Video::all();
        return $tabVideo;
    }
}
