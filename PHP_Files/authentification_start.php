<?php
$login_tentative = $_POST['login'];
$password_tentative = $_POST['password'];

// COMPLETER AUTHENTIFICATION

$login = $_POST['login'];
$sql = "SELECT * FROM membre"
        . " WHERE login= :login";
$sth = $dbh->prepare($sql);
$sth->bindvalue(':login',$login);
$requete_correcte = $sth->execute();
if ($requete_correcte=== FALSE) {
    echo("Erreur: la requete SQL est incorrecte. <br/>");
    
    header('Location:index.php?choix=form&msg=err_sql');
    }
    else{
    $utilisateur = $sth->fetch(PDO::FETCH_ASSOC);
    if (empty($utilisateur)) {
        header('Location:index.php?choix=form&msg=err_login');
    } elseif ($password_tentative === $utilisateur['password']) {
        session_regenerate_id();
        ini_set('session.gc_maxlifetime', 10800);
        $_SESSION['login'] = $utilisateur['login'];
        header('Location:index.php');
    } else {
        header('Location:index.php?choix=form&msg=err_password');
    }
}
?>
