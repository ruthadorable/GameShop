<h1>Suppression d'un jeu </h1>
<br/>
<h1></h1>
<?php
$id=$_GET["id"];
$sql = "DELETE FROM jeu WHERE id='$id'";
// Var_dump a retirer lorsque la requete fonctionnera
var_dump($sql);
$nb_lignes_supprimees = $dbh->exec($sql);
// Affichage
if ($nb_lignes_supprimees === 1) {
 echo("Reussite du DELETE : 1 ligne a été supprimee en DB.");
} elseif ($nb_lignes_supprimees === 0){
 echo("Requete SQL syntaxiquement correcte MAIS aucune ligne n’a
 été supprimee en DB. Verifier la requete(table,colonnes...)");
} elseif ($nb_lignes_supprimees === FALSE) {
 echo("Requete SQL syntaxiquement incorrecte.");
}   
?>
