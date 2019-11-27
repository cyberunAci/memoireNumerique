@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<h1>Partie "Categorie"</h1>

@foreach ($categories as $categorie)
    <h1 class="text-center">{{$categorie->nom}}</h1>
    @foreach ($categorie->memoires as $memoire)
        <p class="text-center">{{$memoire->titre}}</p>
    @endforeach
@endforeach

@endSection
@section('js')
<script type="text/javascript" src="{{ asset('js/client/affichage.js') }}"></script>
@endSection