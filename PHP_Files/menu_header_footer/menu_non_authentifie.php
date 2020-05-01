
<nav class="navbar navbar-expand-md bg-secondary navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="index.php?choix=presentation">Présentation</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?choix=accueil">Accueil</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?choix=listejeux">Jeux</a></li>
        <li class="nav-item">
            <div class="dropdown">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                    Consoles
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="index.php?choix=ps4">PS4</a>
                    <a class="dropdown-item" href="index.php?choix=xbox">XBOX</a>
                    <a class="dropdown-item" href="index.php?choix=wii">Wii</a>
                    
                </div>
            </div>
            
            </a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?choix=figurines">Figurines</a></li>
        <a href="menu_non_authentifie.php"></a>
        <li class="nav-item"><a class="nav-link bg-warning" href="index.php?choix=formulaire_inscription">Créer Mon Compte</a></li>
           

    </ul>
    <!--COMPLETER bouton de connexion-->

    <form class="form-inline ml-auto" action="index.php?choix=authentification_start" method="POST">
        <label for="login">
            <?php
            if (isset($_GET['msg'])) {
                echo("Information.");
            }
            ?>
        </label>
        <input id="login" name="login" class="form-control mr-sm-2" value="login" type="text">
        <input id="password" name="password" class="form-control mr-sm-2" value="mot de passe" type="text">



        <button class="btn btn-succes" type="submit">Se connecter</button>
        
    </form> 
</nav>
