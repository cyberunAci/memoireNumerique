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
                                      <p class="card-text">Actuellement : </p>
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
                <div id='admin_memoires' class="container py-3">

                    <div class="accordion" id="accordionExample">
                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Mémoire
                            </button>
                          </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                          <div class="card-body">
                            <h2>Ajouter une mémoire</h2>
                            <form onsubmit="add()">
                              <div class="form-group">
                                <label for="">Titre</label>
                                <input type="text" class="form-control" name="titre" id="titre" placeholder="Ajouter un titre" onblur="regExpTitre(this)" required>
                              </div>
                              <div class="form-group">
                                <label for="">Résumer</label>
                                <textarea class="form-control" name="resumer" id="resumer" placeholder="Ajouter un résumer" rows="3" onblur="regExpResumer(this)" required></textarea>
                              </div>
                              <div class="form-group">
                                <label for="">Description</label>
                                <textarea class="form-control" name="description" id="description" placeholder="Ajouter une description" rows="3" onblur="regExpDescription(this)" required></textarea>
                              </div>
                              <div class="form-group">
                                <label for="">Auteur</label>
                                <textarea class="form-control" name="auteur" id="auteur" placeholder="Ajouter l'auteur" rows="3" required></textarea>
                              </div>
                  
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Categorie</label>
                                <select class="form-control" id="id_categories" name="id_categories">
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="Type de média">Type de media</label>
                                <select class="form-control" id="id_mediatype" name="id_mediatype">
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="">Miniature</label>
                                <input type="text" class="form-control" name="image" id="image" placeholder="Ajouter votre lien de l'image" required>
                              </div>
                              <div class="form-group">
                                <label for="">Video</label>
                                <input type="text" class="form-control" name="video" id="video" placeholder="Ajouter votre lien de la video" onblur="regExpLien(this)" required>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Status</label>
                                <select class="form-control" id="status" name="status">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                </select>
                              </div>
                              <input type="submit" class="btn btn-primary" value="Envoyer">
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Catégorie
                            </button>
                          </h2>
                        </div>
                  
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                            <h2>Ajouter une catégorie</h2>
                            <!--Catégorie route a faire-->
                            <form onsubmit="categoriesBdd()">
                              <div class="form-group">
                                <label for="Catégorie">Catégorie</label>
                                <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom de la catégorie" required>
                                <label for="couleurCatégorie">Couleur</label>
                                <input type="color" class="form-control" name="couleur" id="couleur" required>
                                <label for="imageCatégorie">Image Catégorie</label>
                                <input type="text" class="form-control" name="image_categorie" id="image_categorie" placeholder="Url image catégorie" required>
                              </div>
                              <input type="submit" class="btn btn-primary" value="Ajouter">
                            </form>
                          </div>
                        </div>
                      </div>
                  
                  
                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Type
                            </button>
                          </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                          <div class="card-body">
                            <h2>Ajouter un média</h2>
                  
                            <form onsubmit="typesBdd()">
                              <div class="form-group">
                                <label for="type">Type</label>
                                <input type="text" class="form-control" name="type" id="type" placeholder="Nom du type de média" required>
                              </div>
                              <input type="submit" class="btn btn-primary" value="Ajouter">
                            </form>
                          </div>
                        </div>
                      </div>
                    </div><br><br>
                  
                <h3>Afficher des informations</h3>  
                <table id="table" class="table table-sm table-hover">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Titre</th>
                        <th scope="col">Resumer</th>
                        <th scope="col">Description</th>
                        <th scope="col">Auteur</th>
                        <th scope="col">Catégorie</th>
                        <th scope="col">Médiatype</th>
                        <th scope="col">Image</th>
                        <th scope="col">Video</th>
                        <th scope="col">Action</th>
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
               
            </div>
          </div>
        </div>
    </div>

@endSection
