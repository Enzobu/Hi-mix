<?php
session_start();
?>

<div class="header-buton">
    <div onclick="changerLeft('0');" class="header-icon"><img src="img/menu.svg" alt="menu"></div>
    <li class="nav-item"><a href="">HI-MIX</a></li>
    <div onclick="changerLeft2('-18rem');" class="blur" id="blur"></div>
</div>
<nav class="nav" id="nav">
    <ul class="nav-list">
        <li class="nav-item" onclick="changerLeft2('-18rem');"><a href="#menus">Menus</a></li>
        <li class="nav-item" onclick="changerLeft2('-18rem');"><a href="#pourquoi-hi-mix">Hi-Mix ?</a></li>
    </ul>
    <ul class="nav-list">
        <li class="nav-item"><a href="/">HI-MIX</a></li>
    </ul>
    <ul class="nav-list">
        <?php
        if(array_key_exists('mail', $_SESSION)) {
            echo '<li class="nav-item"><a href="account"><img src="img/compte.svg" alt="mon compte"><p class="resonsive">Mon compte</p></a></li>';
        } else {
            echo '<li class="nav-item"><a href="account"><img src="img/compte.svg" alt="mon compte"><p class="resonsive">Mon compte</p></a></li>';
        }
        ?>
        <li class="nav-item"><a href="/cart.php"><img src="img/panier.svg" alt="panier"><p class="resonsive">Panier</p></a></li>
        <li class="nav-item"><a href="mail"><p>Test mail</p></a></li>
    </ul>
</nav>
<nav class="navR" id="nav">
    <ul class="nav-list">
        <li class="nav-item"><a href="/#menus">Menus</a></li>
        <li class="nav-item"><a href="/#pourquoi-hi-mix">Hi-Mix ?</a></li>
    </ul>
    <ul class="nav-list">
        <li class="nav-item"><a href="/">HI-MIX</a></li>
    </ul>
    <ul class="nav-list">
    <?php
        if(array_key_exists('mail', $_SESSION)) {
            echo '<li class="nav-item"><a href="/my-account.php"><img src="img/compte.svg" alt="mon compte"><p class="resonsive">Mon compte</p></a></li>';
        } else {
            echo '<li class="nav-item"><a onclick="popUpConnexion()"><img src="img/compte.svg" alt="mon compte"><p class="resonsive">Mon compte</p></a></li>';
        }
        ?>
        <!-- ---------------------------------------------- -->
        <div class="pop-up-connexion-inscription pop-up-hide" id="pop-up-connexion">
            <div class="pop-up-connexion-inscription-header">
                Se connecter
            </div>
            <div class="pop-up-connexion-inscription-body">
                <form action="/php/login.php" method="POST">
                    <div class="form">
                        <div class="input-desc">E-mail :</div>
                        <input type="mail" placeholder="E-mail" name="mail" required="required">
                        <div class="input-desc">Password :</div>
                        <input type="password" placeholder="Password" name="password" required="required">
                        <div class="input-desc"></div>
                        <input type="hidden" name="url" value="<?php echo $_SERVER['REQUEST_URI']; ?>">
                        <input type="submit" value="Se connecter">
                    </div>
                </form>
                <div class="error">
                    <?php
                        if(array_key_exists('error', $_GET)) {
                            if($_GET['error'] == 1) {
                                echo"<div class=\"error-message\">Adresse mail ou mot de passe</div>";
                            }
                            if($_GET['error'] == 2) {
                                echo"<div class=\"error-message\">Veuillez vous connectez avant d'ajouter au panier</div>";
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="pop-up-connexion-inscription-footer">
                Pas encore inscrit ? <a onclick="popUpInscription(); popUpConnexion()">S'inscrire !</a>
            </div>
        </div>
        <!-- ---------------------------------------------- -->

        <!-- ---------------------------------------------- -->
        <div class="pop-up-connexion-inscription pop-up-hide" id="pop-up-inscription">
            <div class="pop-up-connexion-inscription-header">
                S'inscrire
            </div>
            <div class="pop-up-connexion-inscription-body">
                <form action="php/signin.php" method="POST">
                    <div class="form">
                        <div class="input-desc">Nom :</div>
                        <input type="text" placeholder="Name" name="name" required="required">
                        <div class="input-desc">Prénom :</div>
                        <input type="text" placeholder="Surname" name="surname" required="required">
                        <div class="input-desc">E-mail :</div>
                        <input type="mail" placeholder="E-mail" name="mail" required="required">
                        <div class="input-desc">Password :</div>
                        <input type="password" placeholder="Password" name="password" required="required">
                        <div class="input-desc">re-Password :</div>
                        <input type="password" placeholder="re-Password" required="required">
                        <div class="input-desc"></div>
                        <input type="submit" value="Se connecter">
                    </div>
                </form>
            </div>
            <div class="pop-up-connexion-inscription-footer">
                Déjà inscrit ? <a onclick="popUpInscription(); popUpConnexion()">Se connecter !</a></a>
            </div>
        </div>
        <!-- ---------------------------------------------- -->
        <li class="nav-item"><a href="/cart.php"><img src="img/panier.svg" alt="panier"><p class="resonsive">Panier</p></a></li>
    </ul>
</nav>


<?php

if(array_key_exists('error', $_GET)) {
    echo '<script>';
    echo 'var element = document.getElementById("pop-up-connexion");
        element.classList.toggle("pop-up-hide");';
    echo '</script>';
}

?>