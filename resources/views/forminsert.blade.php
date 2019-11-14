@extends('layouts.app')

@section('content')
<div class="container py-3">
    <h1>Envoyer votre vidéo</h1>
<form>
    <div class="form-group">
        <label for="">Titre</label>
        <input type="text" class="form-control" id="titre"  placeholder="Ajouter un titre">
    </div>
    <div class="form-group">
        <label for="">Résumer</label>
        <textarea class="form-control" id="description" placeholder="Ajouter une description" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="">Description</label>
        <textarea class="form-control" id="description" placeholder="Ajouter une description" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="">Miniature</label>
        <input type="file" class="form-control-file" id="file">
    </div>
    <div class="form-group">
        <label for="">Lien</label>
        <input type="text" class="form-control" id="titre"  placeholder="Ajouter votre lien">
    </div>
    <input type="submit" class="btn btn-primary" value="Envoyer">
  </form>
</div>
@endSection