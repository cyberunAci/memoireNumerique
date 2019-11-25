@section('css')

<link rel="stylesheet" href="{{ asset('css/formulaire.css') }}">

@endSection
@extends('layouts.app')
@section('content')
<div class="blockFormulaire">
    <h2>Nous contacter !</h2>
    <p class="descriptionFormulaire container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, sapiente assumenda est iure fuga temporibus alias nulla? Blanditiis corrupti neque possimus nobis nemo magni hic aperiam doloremque excepturi, aspernatur nam?</p>
    <hr>
    <div id="errorFormulaire"></div>
    <form onsubmit="sendContact()" id="formContact" class="formulaire container">

        <label for="nomContact">Nom et Prénom :</label>
        <input type="text" name="nom" id="nomContact" onblur="regExp(this)">

        <label for="emailContact">E-mail :</label>
        <input type="email"  name="email" id="emailContact" onblur="regExpEmail(this)">

        <label for="objetContact">Objet :</label>
        <input type="text" name="objet" id="objetContact" onblur="regExp(this)">

        <label for="messageContact">Message :</label>
        <textarea name="message" id="messageContact"  onblur="regExp(this)"></textarea>

        <input type="submit" value="Envoyer" id="btn-submit">

        <div id="errorFormulaire"></div>
    </form>
</div>
@endSection

@section('js')
<script type="text/javascript" src="{{ asset('js/client/contact.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/client/regex.js') }}"></script>

@endSection