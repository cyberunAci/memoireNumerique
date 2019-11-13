<form onsubmit="sendJeParticipe()" id="formJeParticipe">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div id="errorFormulaireJeParticipe"></div>

    <label for="nom">Nom et Prénom :</label>
    <input type="text" name="nom" id="nomJeParticipe" onblur="regExp(this)">

    <label for="email">E-mail :</label>
    <input type="email"  name="email" id="emailJeParticipe" onblur="regExpEmail(this)">

    <label for="titre">Titre de la vidéo :</label>
    <input type="text" name="titre" id="titreVideoJeParticipe" onblur="regExp(this)">

    <label for="description">Déscription de la vidéo :</label>
    <textarea name="description" id="descriptionVideoJeParticipe"  onblur="regExp(this)"></textarea>

    <label for="lien">Lien de la vidéo :</label>
    <input type="text" name="lien" id="lienVideoJeParticipe" onblur="regExpLien(this)">

    <input type="submit" value="Envoyer">

</form>

<script type="text/javascript" src="{{ asset('js/jquery-3.4.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>