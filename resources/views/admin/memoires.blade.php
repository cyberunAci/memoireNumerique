@extends('layouts.app')

@section('content')

<div class="container py-3">

  <h2>Ajouter une catégorie</h2>
  <!--Catégorie route a faire-->
  <form onsubmit="categorieBdd()">
    <div class="form-group">
      <label for="Catégorie">Catégorie</label>
      <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom de la catégorie" required>
    </div>
    <input type="submit" class="btn btn-primary" value="Ajouter">
  </form>
  <hr>

  <h2>Ajouter un média</h2>

  <form onsubmit="mediaBdd()">
    <div class="form-group">
      <label for="Média">Média</label>
      <input type="text" class="form-control" name="type" id="type" placeholder="Nom du type de média" required>
    </div>
    <input type="submit" class="btn btn-primary" value="Ajouter">
  </form>
  <hr>

  <h2>Ajouter une mémoire</h2>
  <form onsubmit="memoireBdd()">
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
      <select class="form-control" id="id_categorie" name="id_categorie">
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
    <input type="submit" class="btn btn-primary" onclick="getIdCat()" value="Envoyer">
  </form>


  <hr>

  <h2>Toutes les memoires</h2>

  <table id="table" class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Titre</th>
      <th scope="col">Resumer</th>
      <th scope="col">Description</th>
      <th scope="col">Auteur</th>
      <th scope="col">Catégorie</th>
      <th scope="col">Média</th>
      <th scope="col">Image</th>
      <th scope="col">Video</th>
      <th scope="col">Status</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody id="affichagevoulu">
  </tbody>
  </table>


</div>
@endSection