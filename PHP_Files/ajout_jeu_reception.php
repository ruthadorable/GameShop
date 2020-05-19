<h1>Ajout Jeu Réception</h1>
<br/>
<h1>Réception d'un jeu</h1>
<?php
//var_dump($_POST);
$id=htmlspecialchars($_POST['id']);
$titre = htmlspecialchars($_POST['titre']);
$plateform=htmlspecialchars($_POST['plateform']);
$editeur=htmlspecialchars($_POST['editeur']);
$prix=htmlspecialchars($_POST['prix']);
$synopsis=htmlspecialchars($_POST['synopsis']);
$date=htmlspecialchars($_POST['date']);
$libre1=htmlspecialchars($_POST['libre1']);
$libre2=htmlspecialchars($_POST['libre2']);
$libre3='0';
$sql = "INSERT INTO jeu VALUES(:id,:titre,:plateform,:editeur,:date,:prix,:synopsis,:libre1,:libre2,:libre3)";
//requête préparées
$sth = $dbh->prepare($sql);

$sth->bindvalue(':id', $id);
$sth->bindvalue(':titre', $titre);
$sth->bindvalue(':plateform', $plateform);
$sth->bindvalue(':editeur', $editeur);
$sth->bindvalue(':date', $date);
$sth->bindvalue(':prix', $prix);
$sth->bindvalue(':synopsis', $synopsis);
$sth->bindvalue(':libre1', $libre1);
$sth->bindvalue(':libre2', $libre2);
$sth->bindvalue(':libre3',$libre3);

$requete_correcte= $sth->execute();
//var_dump($sql);
if ($requete_correcte === FALSE)
    {echo("Erreur: la requete SQL est incorrecte. <br/>");}
else {
    $nb_lignes_inserees = $sth->rowCount();
    //$nb_lignes_inserees = $dbh->exec($sql);
    //// Affichage du résultat : if ($nb_lignes_inserees===1) {...}}
// Var_dump a retirer lorsque la requete SQL fonctionnera.


    // Affichage
    if ($nb_lignes_inserees === 1) {
        echo("Reussite de l’INSERT : 1 ligne a été inseree en DB.");
        }
    elseif ($nb_lignes_inserees === 0){
            echo("Requete SQL syntaxiquement correcte MAIS aucune ligne n’a
            été inseree en DB. Verifier la requete (table, colonnes...)");
            }
    elseif ($nb_lignes_inserees === FALSE) {
                echo("Requete SQL syntaxiquement incorrecte.");
                }
}

?>
<br/>
