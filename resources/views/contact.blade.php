<form onsubmit="send()" id="formContact">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div id="errorFormulaire"></div>

    <label for="nom">Nom et Prénom :</label>
    <input type="text" name="nom" id="nom">

    <label for="email">E-mail :</label>
    <input type="email"  name="email" id="email">

    <label for="objet">Objet :</label>
    <input type="text" name="objet" id="objet">

    <label for="message">Message :</label>
    <textarea name="message" id="message"></textarea>

    <input type="submit" value="Envoyer">

</form>

<script type="text/javascript" src="{{ asset('js/jquery-3.4.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>