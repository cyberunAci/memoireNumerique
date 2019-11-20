@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<h1 class="text-center">CATEGORIE PHOTO</h1>

<section class="container">
    <div class="gallery js-flickity" data-flickity-options='{ "freeScroll": true, "wrapAround": true }'>
        <div class="gallery-cell"><a id="lien1" href=""><img id="recentArticle-1" src=""></a></div>
        <div class="gallery-cell"><a id="lien2" href=""><img id="recentArticle-2" src=""></a></div>
        <div class="gallery-cell"><a id="lien3" href=""><img id="recentArticle-3" src=""></a></div>
    </div>



    <div class=" addImage row m-2 cateVideo">
        @foreach ($tabImages as $item)

        <div class="carte text-center col-md-3">
            <a href="#"><img src="{{$item->image}}" alt="Avatar" style="width:90%"></a>
            <div class="contain">
                <h4><b>{{$item->titre}}</b></h4>
                <p> blabla</p>
            <input class="bouton" type="button" onclick="document.getElementById('myModal{{$item->id}}').style.display = 'block';" id="myBtn" value="plus d'info" />
            </div>
        </div>

        <div id="myModal{{$item->id}}" style="display:none" class="modal">
            <div class="modal-content">
                <span onclick="document.getElementById('myModal{{$item->id}}').style.display = 'none';" class="close">&times;</span>
                <p class="text-center">{{$item->description}}</p>
            </div>
        </div>

        @endforeach
    </div>
    <div class=" afficheImage row text-center m-2 cateVideo">

    </div>
    <div id="modal">

    </div>




</section>


@endSection