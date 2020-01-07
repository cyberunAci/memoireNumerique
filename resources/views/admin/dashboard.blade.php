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
          @include('admin.dashboard.etat')
        </div>
        <div class="tab-pane fade" id="v-pills-equipes" role="tabpanel" aria-labelledby="v-pills-equipes-tab">
          toto
          @include('admin.dashboard.equipe')
        </div>
        <div class="tab-pane fade" id="v-pills-informations" role="tabpanel" aria-labelledby="v-pills-informations-tab">
          @include('admin.dashboard.donnees')
        </div>
      </div>
    </div>
  </div>
</div>
@endSection