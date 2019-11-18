<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<form onsubmit="sendContact()" id="formContact" class="formulaire">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <label for="nom">Nom et Prénom :</label>
    <input type="text" name="nom" id="nomContact" onblur="regExp(this)">

    <label for="email">E-mail :</label>
    <input type="email"  name="email" id="emailContact" onblur="regExpEmail(this)">

    <label for="objet">Objet :</label>
    <input type="text" name="objet" id="objetContact" onblur="regExp(this)">

    <label for="message">Message :</label>
    <textarea name="message" id="messageContact"  onblur="regExp(this)"></textarea>

    <input type="submit" value="Envoyer" id="btn-submit">

    <div id="errorFormulaire"></div>
</form>

<script type="text/javascript" src="{{ asset('js/jquery-3.4.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>