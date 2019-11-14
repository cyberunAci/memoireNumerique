@extends('layouts.app')

@section('content')
<div class="container py-3">
    <h1>Envoyer votre vidéo</h1>
<form onsubmit="insertBdd()">
    <div class="form-group">
        <label for="">Titre</label>
        <input type="text" class="form-control" name ="titre" id="titre"  placeholder="Ajouter un titre" onblur="regExpTitre(this)" required>
    </div>
    <div class="form-group">
        <label for="">Résumer</label>
        <textarea class="form-control" name="resumer" id="resumer" placeholder="Ajouter un résumer" rows="3" required></textarea>
    </div>
    <div class="form-group">
        <label for="">Description</label>
        <textarea class="form-control" name="description" id="description" placeholder="Ajouter une description" rows="3" required></textarea>
    </div>
    <div class="form-group">
        <label for="">Miniature</label>
        <input type="text" class="form-control" name="image" id="image" placeholder="Ajouter votre lien de l'image" required>
    </div>
    <div class="form-group">
        <label for="">Video</label>
        <input type="text" class="form-control" name="video" id="video"  placeholder="Ajouter votre lien de la video" onblur="regExpLien(this)" required>
    </div>
    <input type="submit" class="btn btn-primary" value="Envoyer">
  </form>
</div>
@endSection