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
        <li class="nav-item"><a href="account"><img src="img/compte.svg" alt="mon compte"><p class="resonsive">Mon compte</p></a></li>
        <li class="nav-item"><a href="cart"><img src="img/panier.svg" alt="panier"><p class="resonsive">Panier</p></a></li>
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
        <li class="nav-item"><a onclick="popUpConnexion()"><img src="img/compte.svg" alt="mon compte"><p class="resonsive">Mon compte</p></a></li>
        <!-- ---------------------------------------------- -->
        <div class="pop-up-connexion-inscription pop-up-hide" id="pop-up-connexion">
            <div class="pop-up-connexion-inscription-header">
                Se connecter
            </div>
            <div class="pop-up-connexion-inscription-body">
                <form action="" method="POST">
                    <div class="form">
                        <div class="input-desc">E-mail :</div>
                        <input type="mail" placeholder="E-mail" required="required">
                        <div class="input-desc">Password :</div>
                        <input type="password" placeholder="Password"required="required">
                        <div class="input-desc"></div>
                        <input type="submit" value="Se connecter">
                    </div>
                </form>
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
                <form action="" method="POST">
                    <div class="form">
                        <div class="input-desc">Nom :</div>
                        <input type="text" placeholder="Name" required="required">
                        <div class="input-desc">Prénom :</div>
                        <input type="text" placeholder="Surname" required="required">
                        <div class="input-desc">E-mail :</div>
                        <input type="mail" placeholder="E-mail" required="required">
                        <div class="input-desc">Password :</div>
                        <input type="password" placeholder="Password"required="required">
                        <div class="input-desc">re-Password :</div>
                        <input type="password" placeholder="re-Password"required="required">
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
        <li class="nav-item"><a href="cart"><img src="img/panier.svg" alt="panier"><p class="resonsive">Panier</p></a></li>
    </ul>
</nav>
