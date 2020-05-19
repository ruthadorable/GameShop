<h1>Ajout d'un jeu : formulaire</h1>
<p class='bg-info'>Formulaire à envoyer en POST vers la réception de ajout_jeu</p>
<p class='bg-info'>Champs : id,titre, plateform,editeur,date_de_sortie,prix,synopsis,libre1,libre2</p>
<form method="POST" action="index.php?choix=ajout_jeu_reception">

    <div class='form-group'>
        <label for="id"> Numéro id : </label>
        <input id="id" name="id" type="number" class="form-control" value=''>
    </div>
    <div class='form-group'>
        <label for="titre">Titre : </label>
        <input id="titre" name="titre" type="text" class="form-control" value='Fall OUT 76'>
    </div>

    <div class='form-group'>
        <label for="plateform">Plateforme : </label>
        <input id="plateform" name="plateform" type="text" class="form-control" value='PS4'>
    </div>
    <div class='form-group'>
        <label for="editeur">Editeur : </label>
        <input id="editeur" name="editeur" type="text" class="form-control" value='Ubisoft'>
    </div>
    <div class='form-group'>
        <label for="date">Date de sortie : </label>
        <input id="date" name="date" type="date" class="form-control" value='8/12/2018'>
    </div>
    <div class='form-group'>
        <label for="prix">Prix : </label>
        <input id="prix" name="prix" type="number" class="form-control" value='54 euros'>
    </div>
    <div class='form-group'>
        <label for="synopsis">Synopsis : </label>
        <input id="synopsis" name="synopsis" type="text" class="form-control" value='texte à entrer'>
    </div>
    <div class='form-group'>
        <label for="libre1">Thème ou Genre : </label>
        <input id="libre1" name="libre1" type="text" class="form-control" value='...'>
    </div>
    <div class='form-group'>
        <label for="libre2">Age : </label>
        <input id="libre2" name="libre2" type="text" class="form-control" value='...'>
    </div>


    <input type="submit" value="Ajouter ce jeu" class='btn btn-success'> <br/>
</form> 
