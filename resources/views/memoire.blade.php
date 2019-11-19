@extends('layouts.app')

@section('content')

<div class="container py-3">

<h2>Ajouter un média</h2>

<form onsubmit="mediaBdd()">
    <div class="form-group">
        <label for="Média">Média</label>
        <input type="text" class="form-control" name ="type" id="type"  placeholder="Nom du type de média" required>
    </div>
    <input type="submit" class="btn btn-primary" value="Ajouter">
</form>
<hr>


    <h2>Ajouter une mémoire</h2>
<form onsubmit="memoireBdd()">
    <div class="form-group">
        <label for="">Titre</label>
        <input type="text" class="form-control" name ="titre" id="titre"  placeholder="Ajouter un titre" onblur="regExpTitre(this)" required>
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
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
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
        <input type="text" class="form-control" name="video" id="video"  placeholder="Ajouter votre lien de la video" onblur="regExpLien(this)" required>
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
@endSection