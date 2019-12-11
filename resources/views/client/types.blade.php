
@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<h1>Partie "Type"</h1>

@foreach ($mediaTypes as $mediaType)
    <h1 class="text-center">{{$mediaType->type}}</h1>
    @foreach ($mediaType->memoires as $memoire)
        <p class="text-center">{{$memoire->titre}}</p>
    @endforeach
@endforeach

@endSection
@section('js')
        <script type="text/javascript" src="{{ asset('js/client/affichage.js') }}"></script>
@endSection