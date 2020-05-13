<?php
//COMPLETER redirection
?>
<style>
fieldset
{
    border:2px solid green;
    -moz-border-radius:8px;
    -webkit-border-radius:8px;
    border-radius:8px;
    margin: 0 350px 0 350px ;
}
.form-group input{
    width: 250px;
}
</style>

<center>

<fieldset>
    <legend>Formulaire d'inscription</legend>
<form method="POST" action="index.php?choix=formulaire_inscriptionreception">
    <div class='form-group'>
        <label for="nom">Nom : </label>
        <input id="nom" name="nom" type="text" class="form-control" value=''>
    </div>

    <div class='form-group'>
        <label for="prenom">Prénom : </label>
        <input id="prenom" name="prenom" type="text" class="form-control" value=''>
    </div>

    <div class='form-group'>
        <label for="adresse">Adresse : </label>
        <input id="adresse" name="adresse" type="text" class="form-control" value=''>
    </div>

    <div class='form-group'>
        <label for="login">Login : </label>
        <input id="login" name="login" type="text" class="form-control" value=''>
    </div>

    <div class='form-group'>
        <label for="password">Password : </label>
        <input id="password" name="password" type="number" class="form-control" value=''>
    </div>

    <input type="submit" value="S'inscrire" class='btn btn-success'> <br/>
</form>
</fieldset>
<br/>
</center>
