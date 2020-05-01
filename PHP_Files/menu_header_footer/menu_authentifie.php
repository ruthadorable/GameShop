<style>
    form button .btn .btn-success{
        float:right;
        
    }
</style>
<nav class="navbar navbar-expand-sm bg-success navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="index.php?choix=presentation">Présentation</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?choix=accueil">Accueil</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?choix=listejeux">Jeux</a></li>
        <li class="nav-item">
                <div class="dropdown">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                        Consoles
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="index.php?choix=ps4">PS4</a>
                        <a class="dropdown-item" href="index.php?choix=xbox">XBOX</a>
                        <a class="dropdown-item" href="index.php?choix=wii">Wii</a>
                        
                    </div>
                </div>
                
            </li>
        <li class="nav-item"><a class="nav-link" href="index.php?choix=figurines">Figurines</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?choix=jeux-disponible">Jeux disponibles</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?choix=recherche_jeu">Rechercher un jeu</a></li>
        <?php if($_SESSION['login']==='ruthadorable'){?>
        <li class="nav-item"><a class="nav-link" href="index.php?choix=ajout_jeu">Ajouter un jeu en DB</a></li>
        <?php }?>
        <li class="nav-item"><a class="nav-link" href="">Bienvenu <?php $pseudo=$_SESSION['login']; echo("$pseudo");?> !</a></li>
        <li class="nav-item"><a  class="nav-link bg-warning" href="index.php?choix=monpanier_liste"> Mon Panier</a> </li>
           
    </ul>
        
        <form class="form-inline ml-auto" action="index.php?choix=authentification_stop" method="POST">
        <label for="login">
            <?php
            if (isset($_GET['msg'])) {
                echo("Information.");
            }
            
            ?>
        </label>
           
            

        <button class="btn btn-dark" type="submit">Se Déconnecter</button>
        
    </form> 
    
    
</nav>
