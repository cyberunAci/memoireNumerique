<<<<<<< HEAD
 <div id='admin_memoires' class="container py-3">
     @include('admin.dashboard.addData')

     <h3>Afficher des informations</h3>
     <table class="table">
         <thead>
             <tr>
                 <th scope="col">#</th>
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
                 <th scope="col">1</th>
                 <td></td>
                   <td class='titre'>{{$memoire->titre}}</td>
                 <td class='resumer'>{{$memoire->resumer}}</td>
                 <td class='description'>{{$memoire->description}}</td>
                 <td class='auteur'>{{$memoire->auteur}}></td>
                 <td class='nom'>{{$memoire->categories->nom}}></td>
                 <td class='type'>{{$memoire->media->type->type}}></td>
                 <td class='image'><img src='{{$memoire->media->image}}' width="50"height="50"></td>
                 <td class='video'><a href='{{$memoire->media->video}}'>Lien vers video</a></td>
                <td><button type='submit' class="btn btn-danger" onclick='deleteMemoire({{$memoire->id}})'>Supprimer</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick='modalUpdate({{$memoire->id}})'>Editer</button>
                </td>
             </tr>
            
               @endforeach
         </tbody>
     </table>
<!---->
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

                         @method('PUT')

                         <div class="form-group">
                             <label for="">Titre</label>
                             <input type="text" class="form-control" name="editTitre" id="editTitre" placeholder="Modifier le titre" onblur="regExpTitre(this)" required>
                         </div>
                         <div class="form-group">
                             <label for="">Résumer</label>
                             <textarea class="form-control" name="editResumer" id="editResumer" placeholder="Modifier le résumé" rows="3" onblur="regExpResumer(this)" required></textarea>
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
                             <select class="form-control" id="editCategories" name="editCategories">
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="Type de média">Type de media</label>
                             <select class="form-control" id="editMediatype" name="editMediatype">
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
                     <button type="button" class="btn btn-primary">Envoyer</button>
                 </div>
             </div>
         </div>
     </div>
     </form>
=======

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
                            <th scope="col" class='titre'>{{$memoire->titre}}</th>
                            <th scope="col" class='resumer'>{{$memoire->resumer}}</th>
                            <th scope="col" class='description'>{{$memoire->description}}</th>
                            <th scope="col" class='auteur'>{{$memoire->auteur}}</th>
                            <th scope="col" class='nom'>{{$memoire->categories->nom}}</th>
                            <th scope="col" class='type'>{{$memoire->media->type->type}}</th>
                            <th scope="col" class='image'><img src='{{$memoire->media->image}}' width="50" height="50"></th>
                            <th scope="col" class='video'><a href='{{$memoire->media->video}}'>Lien vers video</a></th>
                            <th scope="col"><button type='submit' class="btn btn-danger" onclick='deleteMemoire({{$memoire->id}})'>Supprimer</button></th>
                            <th scope="col"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick='modalUpdate({{$memoire->id}})'>Editer</button></th>
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

                    
                    <form id="" onsubmit="">
                      
                      @method('PUT')
                      
                      <div class="form-group">
                        <label for="">Titre</label>
                        <input type="text" class="form-control" name="editTitre" id="editTitre" placeholder="Modifier le titre" onblur="regExpTitre(this)" required>
                      </div>
                      <div class="form-group">
                        <label for="">Résumer</label>
                        <textarea class="form-control" name="editResumer" id="editResumer" placeholder="Modifier le résumé" rows="3" onblur="regExpResumer(this)" required></textarea>
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
                        <select class="form-control" id="editCategories" name="editCategories">
                        @foreach($categories as $categorie)
                          <option value='{{$categorie->id}}'>{{$categorie->nom}}</option>
                        @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="Type de média">Type de media</label>
                        <select class="form-control" id="editMediatype" name="editMediatype">
                        @foreach($media as $medias)
                          <option value='{{$medias->id}}'>{{$medias->type}}</option>
                        @endforeach
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
                            <button type="button" class="btn btn-primary">Envoyer</button>
                          </div>
                        </div>
                      </div>
                      
                    </form>
                   
                </div>
               </div>    
>>>>>>> 505fa001fcdf1cc23d59c69be18148464fe31ac7
