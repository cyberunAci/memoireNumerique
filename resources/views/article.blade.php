@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<h1 class="text-center">CATEGORIE ARTICLE</h1>

<section class="frederic">
    <div class="gallery js-flickity"data-flickity-options='{ "freeScroll": true, "wrapAround": true }'>
        <div class="gallery-cell"><a href=""><img id="recentArticle-1" src=""></a></div>
        <div class="gallery-cell"><a href=""><img id="recentArticle-2" src=""></a></div>
        <div class="gallery-cell"><a href=""><img id="recentArticle-3" src=""></a></div>
    </div>
</section>


    <div class="afficheArticles row text-center m-2 cateVideo">

    </div>

    
@endSection