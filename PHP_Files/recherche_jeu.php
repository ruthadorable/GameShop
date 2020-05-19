<h1>Recherche d'un jeu sur base du titre</h1>

<p class='bg-info'>Formulaire à envoyer en POST vers la réception de recherche_jeu</p>


<form method="POST" action="index.php?choix=recherche_jeu_reception">
    <div class='form-group'>
        <label for="titre">Titre du jeu (titre entier ou une partie du titre) : </label>
        <input id="titre" name="titre" type="text" class="form-control" value='FALL OUT'>
    </div>

    <input type="submit" value="Lancer la recherche" class='btn btn-success'> <br/>
</form> 
