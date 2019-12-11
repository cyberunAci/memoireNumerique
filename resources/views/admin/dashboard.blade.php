@extends('layouts.app')
@section('content')
<div>
    <div class="titre-equipe">
        <h1>Dashboard</h1>
    </div>
      <div class="row m-5">
        <div class="col-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-memoires-tab" data-toggle="pill" href="#v-pills-memoires" role="tab" aria-controls="v-pills-memoires" aria-selected="true">Etat de la BDD</a>
            <a class="nav-link" id="v-pills-informations-tab" data-toggle="pill" href="#v-pills-informations" role="tab" aria-controls="v-pills-informations" aria-selected="false">Données</a>
            <a class="nav-link" id="v-pills-equipes-tab" data-toggle="pill" href="#v-pills-equipes" role="tab" aria-controls="v-pills-equipes" aria-selected="false">Équipe</a>
          </div>
        </div>
        <div class="col-9">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-memoires" role="tabpanel" aria-labelledby="v-pills-memoires-tab">
                <h3>Nombre d'élément présent dans la BDD :</h3>
                <div>
                          <div class="row">
                              <div class="col-sm-4">
                                <div class="card">
                                  <div class="card-body">
                                      <h5 class="card-title">Vidéos</h5>
                                      <p class="card-text">Actuellement :</p>
                                      <p class="card-text">En ligne : </p>
                                      <p class="card-text">En Attente: </p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card">
                                  <div class="card-body">
                                      <h5 class="card-title">Articles</h5>
                                      <p class="card-text">Actuellement : </p>
                                      <p class="card-text">En ligne : </p>
                                      <p class="card-text">En Attente: </p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                  <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Photos</h5>
                                        <p class="card-text">Actuellement : </p>
                                        <p class="card-text">En ligne : </p>
                                        <p class="card-text">En Attente: </p>
                                    </div>
                                  </div>
                                </div>
                            </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-informations" role="tabpanel" aria-labelledby="v-pills-informations-tab">
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
                            <th scope="col">{{$memoire->titre}}</th>
                            <th scope="col">{{$memoire->resumer}}</th>
                            <th scope="col">{{$memoire->description}}</th>
                            <th scope="col">{{$memoire->auteur}}</th>
                            <th scope="col">{{$memoire->categories->nom}}</th>
                            <th scope="col">{{$memoire->media->type->type}}</th>
                            <th scope="col"><img src='{{$memoire->media->image}}'></th>
                            <th scope="col"><a href='{{$memoire->media->video}}'>Lien vers video</a></th>
                            <th scope="col">
                            <button type='submit' onclick='deleteMemoire({{$memoire->id}})'>Supprimer</button>
                            </th>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>

                  {{-- /test --}}
            </div>
            <div class="tab-pane fade" id="v-pills-equipes" role="tabpanel" aria-labelledby="v-pills-equipes-tab">
                ... test ...
            </div>
          </div>
        </div>
    </div>
@endSection
@section('js')
<script type="text/javascript" src="{{ asset('js/admin/manageMemoires.js') }}"></script>
@endSection