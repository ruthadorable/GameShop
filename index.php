<?php
session_start();

include("./PHP_Files/db/connexion_db.php");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>GameShop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="jquery/jquery-3.3.1.min.js"></script>
        <script src="popper/popper.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="./bootstrap/css/style.css" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    </head>
    <body>

        <div class="container-fluid">
<?php
include("./PHP_Files/menu_header_footer/header.php");
if (isset($_SESSION['login'])) {
    include("./PHP_Files/menu_header_footer/menu_authentifie.php");
} else {
    include("./PHP_Files/menu_header_footer/menu_non_authentifie.php");
}
?>

            <?php
            if (isset($_GET['choix'])) {
                $choix=$_GET['choix'];
            } else {
                $choix="presentation";
            }

            switch( $choix ) {
                case "acces_non_autorise" :
                    include("./PHP_Files/acces_non_autorise.php");
                    break;
                case "presentation" :
                    include('./PHP_Files/presentation.php');
                    break;
                case "accueil" :
                    include("./PHP_Files/accueil.php");
                    break;
                case "ajout_spectacle_1_formulaire" :
                    include("./PHP_Files/ajout_spectacle_1_formulaire.php");
                    break;
                case "ajout_spectacle_2_reception" :
                    include("./PHP_Files/ajout_spectacle_2_reception.php");
                    break;
                case "formulaire_inscription" :
                    include("./PHP_Files/formulaire_inscription.php");
                    break;
                case "formulaire_inscriptionreception" :
                    include("./PHP_Files/formulaire_inscriptionreception.php");
                    break;
                case "authentification_start" :
                    include("./PHP_Files/authentification_start.php");
                    break;
                case "suppression_jeu" :
                    include("./PHP_Files/suppression_jeu.php");
                    break;
                case "authentification_stop" :
                    include("./PHP_Files/authentification_stop.php");
                    break;
                case "monpanier_liste" :
                    include("./PHP_Files/monpanier_liste.php");
                    break;
                case "modification_monpanier_formulaire" :
                    include("./PHP_Files/modification_monpanier_formulaire.php");
                    break;
                case "modification_monpanier_reception" :
                    include("./PHP_Files/modification_monpanier_reception.php");
                    break;
                case "recherche_jeu" :
                    include("./PHP_Files/recherche_jeu.php");
                    break;
                case "recherche_jeu_reception" :
                    include("./PHP_Files/recherche_jeu_reception.php");
                    break;
                case "ajout_jeu" :
                    include("./PHP_Files/ajout_jeu.php");
                    break;
                case "ajout_jeu_reception" :
                    include("./PHP_Files/ajout_jeu_reception.php");
                    break;

                case "xbox":
                    include ("./PHP_Files/xbox.php");
                    break;
                case "ps4":
                    include ("./PHP_Files/ps4.php");
                    break;
                case "wii":
                    include("./PHP_Files/wii.php");
                    break;
                case "figurines":
                    include("./PHP_Files/figurines.php");
                    break;
                case "listejeux":
                    include ("./PHP_Files/jeux.php");
                    break;
                case "jeux-disponible":
                    include ("./PHP_Files/jeuxdisponibles.php");
                    break;
                case "ajoutpanier_jeu":
                    include ("./PHP_Files/ajoutpanier_jeu.php");
                    break;
                case "suppressionpanier_jeu":
                    include ("./PHP_Files/suppressionpanier_jeu.php");
                    break;
                default :
                    echo("<p>Valeur du parametre choix non prise en charge</p>");
                    break;
            }
            ?>

            <?php
            include("./PHP_Files/menu_header_footer/footer.php");
            ?>

        </div>

    </body>
</html>
