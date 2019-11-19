@extends('layouts.app')
@section('content')
<div class="blockFormulaire">
    <h2>Je participe !</h2>
    <p class="descriptionFormulaire container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, sapiente assumenda est iure fuga temporibus alias nulla? Blanditiis corrupti neque possimus nobis nemo magni hic aperiam doloremque excepturi, aspernatur nam?</p>
    <hr>
    <div id="errorFormulaire"></div>
    <form onsubmit="sendJeParticipe()" id="formJeParticipe" class="formulaire container">

        <label for="nomJeParticipe">Nom et Prénom :</label>
        <input type="text" name="nom" id="nomJeParticipe" onblur="regExp(this)">
    
        <label for="emailJeParticipe">E-mail :</label>
        <input type="email"  name="email" id="emailJeParticipe" onblur="regExpEmail(this)">
    
        <label for="titreVideoJeParticipe">Titre de la vidéo :</label>
        <input type="text" name="titre" id="titreVideoJeParticipe" onblur="regExp(this)">
    
        <label for="descriptionVideoJeParticipe">Déscription de la vidéo :</label>
        <textarea name="description" id="descriptionVideoJeParticipe"  onblur="regExp(this)"></textarea>
    
        <label for="lienVideoJeParticipe">Lien de la vidéo :</label>
        <input type="text" name="lien" id="lienVideoJeParticipe" onblur="regExpLien(this)">
    
        <input type="submit" value="Envoyer" id="btn-submit">
    </form>
</div>
@endSection