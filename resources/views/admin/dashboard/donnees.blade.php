
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
                            <th scope="col"><img src='{{$memoire->media->image}}' width="50" height="50"></th>
                            <th scope="col"><a href='{{$memoire->media->video}}'>Lien vers video</a></th>
                            <th scope="col">
                            <button type='submit' class="btn btn-danger" onclick='deleteMemoire({{$memoire->id}})'>Supprimer</button>
                            </th>
                            <th scope="col">

                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick='updateMemoire({{$memoire->id}})'>Editer</button>

                            </th>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modifier mémoire</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                  <form onsubmit="">
                    <div class="form-group">
                      <label for="">Titre</label>
                      <input type="text" class="form-control" name="editTitre" id="editTitre" placeholder="Modifier le titre" onblur="regExpTitre(this)" required>
                    </div>
                    <div class="form-group">
                      <label for="">Résumer</label>
                      <textarea class="form-control" name="editResume" id="editResume" placeholder="Modifier le résumé" rows="3" onblur="regExpResumer(this)" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="">Description</label>
                      <textarea class="form-control" name="editDescription" id="editDescription" placeholder="Modifier la description" onblur="regExpDescription(this)" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="">Auteur</label>
                      <textarea class="form-control" name="editAuteur" id="editAuteur" placeholder="Modifier l'auteur" rows="3" required></textarea>
                    </div>
        
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Categorie</label>
                      <select class="form-control" id="editCategorie" name="editCategorie">
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="Type de média">Type de media</label>
                      <select class="form-control" id="editMedia" name="editMedia">
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Miniature</label>
                      <input type="text" class="form-control" name="editImage" id="editImage" placeholder="Modifier le lien de l'image" required>
                    </div>
                    <div class="form-group">
                      <label for="">Video</label>
                      <input type="text" class="form-control" name="editVideo" id="editVideo" placeholder="Modifier le lien de la video" onblur="regExpLien(this)" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Status</label>
                      <select class="form-control" id="editStatus" name="editStatus">
                        <option value="1">1</option>
                        <option value="2">2</option>
                      </select>
                    </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                          <button type="button" class="btn btn-primary">Modifier</button>
                        </div>
                      </div>
                    </div>
                   </div>
                  </form>