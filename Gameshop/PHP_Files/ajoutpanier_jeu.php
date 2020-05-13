<h1>Ajout d'un jeu dans le panier </h1>
<br/>
<h1></h1>
<?php
$id=$_GET["id"];
$sql = "UPDATE jeu SET libre3 = '1' WHERE id = :id " ;

$sth = $dbh->prepare($sql);
$sth->bindvalue(':id',$id);
$requete_correcte = $sth->execute();
if ($requete_correcte=== FALSE) {
    echo("Erreur: la requete SQL est incorrecte. <br/>");}
else {$le_cours = $sth->fetch(PDO::FETCH_ASSOC);

// Var_dump a retirer lorsque la requete fonctionnera
//var_dump($sql);
$nb_lignes_ajoutees=$sth->rowCount();
// = $dbh->exec($sql);
// Affichage
    if ($nb_lignes_ajoutees === 1) {
        echo("Reussite de l'ajout : 1 ligne a été ajoutée dans le panier.");
    } elseif ($nb_lignes_ajoutees === 0){
        echo("Requête SQL syntaxiquement correcte MAIS aucune ligne n’a
                été supprimee en DB. Verifier la requete(table,colonnes...)");
    } elseif ($nb_lignes_ajoutees === FALSE) {
        echo("Requete SQL syntaxiquement incorrecte.");
    }
}
?>
