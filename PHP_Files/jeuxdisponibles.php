<h1>Liste des jeux</h1>
<p class='bg-info'>SELECT des jeux de la table jeu DB et affichage des données des jeux</p>

<?php
$sql = "SELECT * FROM jeu";
$sth = $dbh->query($sql);

if ($sth === FALSE) {
    echo("Erreur : la requete SQL est incorrecte. <br/>");
} else {
    //echo("Requete SQL acceptee. <br/>"); // A retirer par la suite
    $les_jeux = $sth->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($les_jeux); // A supprimer par la suite
    ?><table border='1px solid black'><?php foreach ($les_jeux as $un_jeu) { ?><tr><?php
            echo("<td><h4> n°: " . $un_jeu['id'] . "</h4></td> \r\n ");
            echo("<td><p><h3> Titre du jeu : " . $un_jeu['titre'] . "</h3></p></td> \r\n");
            echo("<td><p> Plateform : " . $un_jeu['plateform'] . "</p></td> \r\n ");
            echo("<td><p> Prix : " . $un_jeu['prix'] . "</p></td> \r\n ");
            $id = $un_jeu['id'];
            echo("<td><p><a href='index.php?choix=ajoutpanier_jeu&id=$id'>Ajouter dans votre panier</a></p></td> \r\n");
            ?></tr><?php
        }
        ?></table><?php
    }
    ?>
