<h1>Suppression d'un jeu dans le panier </h1>
<br/>
<h1></h1>
<?php
$id=$_GET["id"];

$sql = "UPDATE jeu SET libre3 = '0' WHERE id = '$id' " ;
// Var_dump a retirer lorsque la requete fonctionnera
var_dump($sql);
$nb_lignes_supprimees = $dbh->exec($sql);
// Affichage
if ($nb_lignes_supprimees === 1) {
 echo("Reussite de la suppression : 1 ligne a été supprimée du panier.");
} elseif ($nb_lignes_supprimees === 0){
 echo("Requête SQL syntaxiquement correcte MAIS aucune ligne n’a
 été supprimee en DB. Verifier la requete(table,colonnes...)");
} elseif ($nb_lignes_supprimees === FALSE) {
 echo("Requete SQL syntaxiquement incorrecte.");
}
?>
