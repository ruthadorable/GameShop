
<h1>Réception des données de l'ajout d'un client</h1>

<!--Réception des données POST d'un client (nom, prenom, adresse, password, login) :
var_dump puis enregistrement dans des variables-->
<?php

//var_dump($_POST);
/*$n=$_POST["nom"];
$p=$_POST["prenom"];
$a=$_POST["adresse"];*/
$l=htmlspecialchars($_POST["login"]);
$pwd=htmlspecialchars($_POST["password"]);




?>

<h3>INSERT du login et password en DB</h3>
<?php

/*Code du prof*/

$id=1;

$sql="INSERT INTO membre VALUES (:id,:login,:pwd) ";
$sth=$dbh->prepare($sql);
$sth->bindvalue(':id',$id);
$sth->bindvalue(':login',$l);
$sth->bindvalue(':pwd',$pwd);
$requete_correcte=$sth->execute();

if($requete_correcte===FALSE)
{
    echo ("Erreur:la requête SQL est incorrecte. </br>");
}
else
{
    $nb_lignes_inserees=$sth->rowCount();

    echo("Réussite de l'insert: 1 ligne a été insérée en DB");
    $id++;
    echo("<h2>Vous pouvez vous connecter avec votre login et mot de passe</h2>");
}
?>
