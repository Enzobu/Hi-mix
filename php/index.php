<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('php/part/head.php'); ?>
    <link rel="stylesheet" href="css/index/index_main.css">
    <title>Hi-mix - Où l'innovation se marie avec restauration</title>
</head>
<body id="body">
    <header>
        <div class="header">
            <?php  include("php/part/header.php"); ?>
            <div class="title">
                <h1>HI-MIX</h1>
                <h2>Où L'INNOVATION SE MARIE AVEC RESTAURATION</h2>
            </div>
        </div>
    </header>

    <div class="bg-body-1">
        <div class="global-menu-titr"> <!-- J'ai enlever les 'e' au nom de la classe espece d'abruti -->
            <div class="titre-global-menu">
                <h2>Nos menus</h2>
                <h3>Mangez innovant, mangez sainement et à bas prix grâce à Hi-mix !</h3>
            </div>

            <div class="global-menu">
                <div class="menu first-menu">
                    <div class="titre-menu">
                        <h4>Menu étudiant</h4>
                        <h5>Pour un petit budget !</h5>
                    </div>
                    <div class="footer-menu">
                        <div class="prix">4.90 €</div>
                        <a href=""><div class="buton-choisir">Choisir</div></a>
                    </div>
                </div>

                <div class="menu second-menu">
                    <div class="titre-menu">
                        <h4>Menu simple</h4>
                        <h5>Pour quelqu'un de simple !</h5>
                    </div>
                    <div class="footer-menu">
                        <div class="prix">7.90 €</div>
                        <a href=""><div class="buton-choisir">Choisir</div></a>
                    </div>
                </div>
                
                <div class="menu third-menu">
                    <div class="titre-menu">
                        <h4>Menu maxi</h4>
                        <h5>Pour une maxi faim !</h5>
                    </div>
                    <div class="footer-menu">
                        <div class="prix">10.90 €</div>
                        <a href=""><div class="buton-choisir"><p>Choisir</p></div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg-body-2">
        <!-- Bandeau info livraison/payment -->
        <div class="info-livraison-paiement">
            <div class="item-info-livraison-paiement"><img src="img/livraison-rapide.png" alt="livraison rapide" class="img-ifo-livr_paymt">Livraison en moins de 24H</div>
            <div class="item-info-livraison-paiement"><img src="img/meilleur-prix" alt="meilleur prix" class="img-ifo-livr_paymt">Prix juste et dégressif (entre 3 et 5€ par repas)</div>
            <div class="item-info-livraison-paiement"><img src="img/livraison-de-colis.png" alt="livraison gratuite" class="img-ifo-livr_paymt">Livraison offerte dès 60€</div>
            <div class="item-info-livraison-paiement"><img src="img/paiement-par-carte-de-credit" alt="paiement en 3x" class="img-ifo-livr_paymt">Paiement sécuriser. Disponible en 3 ou 4x sans frais dès 69€</div>
        </div>
    </div>
    
    <div class="bg-body-3">
        <p>Bah la faut remplir hehe</p>
    </div>
    
    <div class="bg-body-4">
        <p class="title-mail">ET SI ON RESTAIT EN CONTACT ?!</p>
        <p class="text-mail">Inscrivez-vous pour être informé des sorties produit et promos exclusives, des infos, des recettes, et des conseils pour toujours être au top.</p>
        <form action="" method="GET">
            <input type="mail" name="mail" placeholder="Votre e-mail" required>
            <input type="submit" value="HOP !">
        </form>
    </div>

    <div class="scrollUp">
        <a href="#top"><img src="img/up-arrow.png"/></a>
    </div>

    <footer>
        <?php include("php/part/footer.php"); ?>
    </footer>
    
</body>
</html>    


<!-- rgba(255, 239, 231, 1) -->