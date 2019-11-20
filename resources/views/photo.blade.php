@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<h1 class="text-center">CATEGORIE PHOTO</h1>

<section class="container">
        <div class="gallery js-flickity"data-flickity-options='{ "freeScroll": true, "wrapAround": true }'>
            <div class="gallery-cell"><a id="lien1" href=""><img id="recentArticle-1" src=""></a></div>
            <div class="gallery-cell"><a id="lien2" href=""><img id="recentArticle-2" src=""></a></div>
            <div class="gallery-cell"><a id="lien3" href=""><img id="recentArticle-3" src=""></a></div>
        </div>



    <div class=" afficheImage row text-center m-2 cateVideo">

    </div>
    <div id="modal">
        
    </div>

</section>

    
@endSection