
<br/>
<script>
    var regex=/<?php $chaine?>/;
</script>
<?php
//var_dump($_POST);
$chaine = htmlspecialchars($_POST['titre']);

$sql = "SELECT * FROM jeu WHERE titre LIKE '$chaine' ";
$sth = $dbh->query($sql);
// Var_dump a retirer lorsque la requete SQL fonctionnera.
// Affichage
if ($sth === FALSE) {
    echo("Erreur : la requete SQL est incorrecte. <br/>");
} elseif (empty($sth)) {
    echo ("$chaine n'existe pas dans la base de données.");
} else {
    echo("Requete SQL acceptee. <br/>"); // A retirer par la suite
    $jeu = $sth->fetchAll(PDO::FETCH_ASSOC);
    echo ("Données du jeu: ");
    //var_dump($jeu);

        ?><table border='1px solid black'><?php foreach ($jeu as $donnee) { ?><tr><?php


        echo ("<td><p> ID n° : ". $donnee['id']." </p></td>");
        echo("<td><p>Titre: " . $donnee['titre'] . "</p></td> \r\n");
        echo("<td><p>Plateform: " . $donnee['plateform'] . "</p></td> \r\n ");
        echo("<td><p>Synopsis: " . $donnee['synopsis'] . "</p></td> \r\n ");
        $id = $donnee['id'];
        $titre=$donnee['titre'];
        echo("<td><p><a href='index.php?choix=ajoutpanier_jeu&id=$id&titre=$titre'>Ajouter dans votre panier</a></p></td> \r\n");
            ?></tr><?php
        }
        ?></table><?php

}
?>
