
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
        <link rel="stylesheet" href="css/style.css" type="text/css">
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
                $choix = $_GET['choix'];
            } else {
                $choix = "presentation";
            }

            switch ($choix) {
                case "acces_non_autorise" :
                    include("./PHP_Files/acces_non_autorise.php");
                    break;
                case "presentation" :
                    include("./PHP_Files/presentation.php");
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
