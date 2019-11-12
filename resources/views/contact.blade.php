<form onsubmit="send()" id="formContact">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div id="errorFormulaire"></div>

    <label for="nom">Nom et Prénom :</label>
    <input type="text" name="nom" id="nom" onblur="regExp(this)">

    <label for="email">E-mail :</label>
    <input type="email"  name="email" id="email" onblur="regExpEmail()">

    <label for="objet">Objet :</label>
    <input type="text" name="objet" id="objet" onblur="regExp(this)">

    <label for="message">Message :</label>
    <textarea name="message" id="message"  onblur="regExp(this)"></textarea>

    <input type="submit" value="Envoyer">

</form>

<script type="text/javascript" src="{{ asset('js/jquery-3.4.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>