@extends('layouts.app')
@section('content')

<form class="formulaires formulaire"  method="get" action="form" >
    @csrf
    <label for="nom"> NOM :</label>
    <input type="text" id="nom" name="nom" class="inputLog">
    <label for="password"> MOT DE PASSE :</label>
    <input type="password" id="password" name="password" class="inputLog">
    <input type="submit" value="soumettre" class="submitLog" >
  
</form>
<div id="donnee">

</div>
<script src="{{ asset('js/admin/login.js') }}"></script>

@endSection
