@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<h1 class="text-center mb-5">Toutes les catégories</h1>
@foreach ($categories as $categorie)
        <h1 class="bg-light ">{{$categorie->nom}}</h1>
<div class="container">
    <div class="row">
        @foreach ($categorie->memoires as $memoire) 
            
                <div class="col md-4 mt-5">
                    <img src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/jcr_content/main-pars/image/visual-reverse-image-search-v2_intro.jpg" alt="" width="300px">
                    <p class="mt-5 mb-5">
                        {{ $memoire->titre }}
                    </p>
                </div>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione mollitia dolore perferendis libero cum. Non rem fuga asperiores repellendus, facere ipsam voluptate sequi aspernatur praesentium animi nesciunt maiores, quis nisi!
        @endforeach
    </div>
</div>
@endforeach

@endSection
@section('js')
<script type="text/javascript" src="{{ asset('js/client/affichage.js') }}"></script>
@endSection