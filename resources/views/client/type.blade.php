
@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<h1>Partie "Type"</h1>
{{-- TODO
        Ancien fichier video.blade.php -> voir categorie.blade.php;
        Probleme à reglé responsive
--}}
@endSection
@section('js')
        <script type="text/javascript" src="{{ asset('js/client/affichage.js') }}"></script>
@endSection