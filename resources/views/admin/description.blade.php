@extends('layouts.app')
@section('content')

@if(isset($recupVideo)) 


<section class="descript">
    <div class="row divDesc">
        <div class="col-md-12">

            <h1 class="titreDesc">
                 <p>{{$recupVideo->titre}}</p> 
            </h1>

            <p class="paraDesc">
                    {{$recupVideo->description}}
            <img src="{{$recupVideo->image}}" alt=""></p>
        </div>
    </div>
    <div class="row resumer">
        <div class="col-md-12">
            <h1> Resumer</h1>
            <p>{{$recupVideo->resumer}}</p>
            <iframe class="w-100 iframeyoutube "   src="{{$recupVideo->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        @endif
    </div>


</section>
@endSection
