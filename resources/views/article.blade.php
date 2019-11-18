@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<h1 class="text-center">CATEGORIE ARTICLE</h1>

<section class="frederic">
    <div class="gallery js-flickity"data-flickity-options='{ "freeScroll": true, "wrapAround": true }'>
        <div class="gallery-cell"></div>
        <div class="gallery-cell"></div>
        <div class="gallery-cell"></div>
        <div class="gallery-cell"></div>
        <div class="gallery-cell"></div>
    </div>
</section>


    <div class="afficheArticles row text-center m-2 cateVideo">

    </div>

    
@endSection