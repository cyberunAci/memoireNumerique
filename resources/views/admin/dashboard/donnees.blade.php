
                <div id='admin_memoires' class="container py-3">
@include('admin.dashboard.addData')
                  
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
                            <button type='submit' class="btn btn-danger" onclick='deleteMemoire({{$memoire->id}})'>Supprimer</button>
                            </th>
                            <th scope="col">

                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick='editMemoire({{$memoire->id}})'>Editer</button>


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
                                <input type="text" class="form-control" name="editTitre" id="editTitre" placeholder="Ajouter un titre" required>
                              </div>
                              <div class="form-group">
                                <label for="">Résumer</label>
                                <textarea class="form-control" name="editResume" id="editResume" placeholder="Ajouter un résumer" rows="3" required></textarea>
                              </div>
                              <div class="form-group">
                                <label for="">Description</label>
                                <textarea class="form-control" name="editDescription" id="editDescription" placeholder="Ajouter une description" rows="3" required></textarea>
                              </div>
                              <div class="form-group">
                                <label for="">Auteur</label>
                                <textarea class="form-control" name="editAuteur" id="editAuteur" placeholder="Ajouter l'auteur" rows="3" required></textarea>
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
                                <input type="text" class="form-control" name="editImage" id="editImage" placeholder="Ajouter votre lien de l'image" required>
                              </div>
                              <div class="form-group">
                                <label for="">Video</label>
                                <input type="text" class="form-control" name="editVideo" id="editVideo" placeholder="Ajouter votre lien de la video" required>
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
                            </th>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
