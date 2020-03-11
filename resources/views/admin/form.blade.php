
<form action="equipe"  onsubmit="formulaire()">
    
    <label for="nom"> NOM :</label>
    <input type="text" id="nom">
    <label for="password"> MOT DE PASSE :</label>
    <input type="password" id="password">
    <input type="submit" value="soumettre" >
  
</form>
<div id="donnee">

</div>


<script src="{{ asset('js/admin/login.js') }}"></script>
<script src="{{ asset('js/jquery-3.4.1.js') }}"></script>