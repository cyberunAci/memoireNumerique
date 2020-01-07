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
            
            @include('admin.dashboard.etat')

            @include('admin.dashboard.donnees')

            @include('admin.dashboard.equipe')

          
            
      </div>
    </div>
  </div>
</div>
@endSection

