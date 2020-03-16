<div class="accordion" id="accordionExample">




    <!--+++++++++++++++++++++++++++++ MODAL MEMOIRE +++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addMemoireModal">
        Ajout Mémoire
    </button>
    <!-- Modal memoire -->
    <div class="modal fade" id="addMemoireModal" tabindex="-1" role="dialog" aria-labelledby="addMemoireLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMemoireLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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
                                    @foreach($categories as $categorie)
                                        <option value='{{$categorie->id}}'>{{$categorie->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Type de média">Type de media</label>
                                <select class="form-control" id="id_mediatype" name="id_mediatype">
                                    @foreach($media as $medias)
                                        <option value='{{$medias->id}}'>{{$medias->type}}</option>
                                    @endforeach
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
                            <input type="submit" class="btn btn-primary" value="Envoyer">
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal memoire -->



    <!--++++++++++++++++++++++++++ MODAL CATEGORIE +++++++++++++++++++++++++++++++++++-->
    <!-- Modal catégorie -->

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCategorieModal">
        Ajout Catégorie
    </button>


    <div class="modal fade" id="addCategorieModal" tabindex="-1" role="dialog" aria-labelledby="addCategorieModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCategorieModal">Ajouter une catégorie</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <!--Catégorie route a faire-->
                    <form onsubmit="addCategorie()">
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
    </div>

    <!-- Modal catégorie -->
    <!-- Modal Type -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTypeModal">
        Ajout Type
    </button>


    <div class="modal fade" id="addTypeModal" tabindex="-1" role="dialog" aria-labelledby="addTypeModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCategorie">Ajouter un type</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Catégorie route a faire-->

                    <form onsubmit="addType()">
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" name="type" id="type" placeholder="Nom du type de média" required>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Ajouter">
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Type -->

    </div><br><br>