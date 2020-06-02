@section('css')
<link rel="stylesheet" href="{{ asset('css/client/app.css') }}">

@endSection
@extends('layouts.app')
@section('content')

<div class="audio">
    <p>Environnements</p>

</div>
<div class="div1"> <img src="https://via.placeholder.com/250" alt=""></div>

       <h3>Afficher des informations</h3>  
                <table id="table" class="table">
                    <thead class="table-danger">
                      <tr>
                        <th scope="col">Titre</th>
                        <th scope="col">Resumer</th>
                        <th scope="col">Description</th>
                        <th scope="col">Auteur</th>
                        <th scope="col">Catégorie</th>
                        <th scope="col">Médiatype</th>
                        <th scope="col">Image</th>
                        <th scope="col">Video</th>
                        <th scope="col">Action </th>
                      </tr>
                    </thead>
                    <tbody id="affichagevoulu">
                      @foreach($memoires as $memoire)
                        <tr id='memoire_{{$memoire->id}}' class='memoire'>
                            <th scope="col" class='titre'>{{$memoire->titre}}</th>
                            <th scope="col" class='resumer'>{{$memoire->resumer}}</th>
                            <th scope="col" class='description'>{{$memoire->description}}</th>
                            <th scope="col" class='auteur'>{{$memoire->auteur}}</th>  
                            <th scope="col" class='type'>{{$memoire->media->mediatype->type}}</th>
                            <th scope="col" class='image'><img src='{{$memoire->media->image}}' width="50" height="50"></th>
                            <th scope="col" class='video'><a href='{{$memoire->media->video}}'>Lien vers video</a></th>
                            
                        </tr>
                       @endforeach 
                    </tbody>
                </table>
</div>

<!-- partial -->

@endSection

@section('js')
<script type="text/javascript" src="{{ asset('js/client/affichage.js') }}"></script>
@endSection
