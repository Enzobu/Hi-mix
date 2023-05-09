<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../php/head_menu.php'); ?>
    <link rel="stylesheet" href="../css/menu/menu_simple/menu_simple.css">
    <title>Menu simple - Hi-Mix</title>
</head>
<body id="body">
    <header>
        <div class="header">
            <?php  include("../php/header_menu.php"); ?>
            <div class="title">
                <h1><strong>HI-MIX</strong></h1>
                <h2>Menu simple</h2>
            </div>
        </div>
    </header>

    <div class="bg-body-1" id="menus">
        <div class="compo-menu">
            <div class="compo-item">
                <div class="body-compo-item"><img src="../img/compo-menu/riz.jpg" alt=""></div>
                <div class="footer-compo-item">
                    Ajouter : 
                    <?php if(array_key_exists('mail', $_SESSION)) { ?>
                        <a href="">
                            <div class="ajouter-button">
                                <img src="../img/ajouter.svg" alt="Bouton ajouter">
                                <img src="../img/ajouter-vert.svg" alt="Bouton ajouter vert">
                            </div>
                        </a>
                    <?php } else { ?>
                        <a href="?error=2">
                            <div class="ajouter-button">
                                <img src="../img/ajouter.svg" alt="Bouton ajouter">
                                <img src="../img/ajouter-vert.svg" alt="Bouton ajouter vert">
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="compo-item">
                <div class="body-compo-item"><img src="../img/compo-menu/poid_chiche.jpg" alt=""></div>
                <div class="footer-compo-item">
                    Ajouter : 
                    <?php if(array_key_exists('mail', $_SESSION)) { ?>
                        <a href="">
                            <div class="ajouter-button">
                                <img src="../img/ajouter.svg" alt="Bouton ajouter">
                                <img src="../img/ajouter-vert.svg" alt="Bouton ajouter vert">
                            </div>
                        </a>
                    <?php } else { ?>
                        <a href="?error=2">
                            <div class="ajouter-button">
                                <img src="../img/ajouter.svg" alt="Bouton ajouter">
                                <img src="../img/ajouter-vert.svg" alt="Bouton ajouter vert">
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="compo-item">
                <div class="body-compo-item"><img src="../img/compo-menu/proteine.jpg" alt=""></div>
                <div class="footer-compo-item">
                    Ajouter : 
                    <?php if(array_key_exists('mail', $_SESSION)) { ?>
                        <a href="">
                            <div class="ajouter-button">
                                <img src="../img/ajouter.svg" alt="Bouton ajouter">
                                <img src="../img/ajouter-vert.svg" alt="Bouton ajouter vert">
                            </div>
                        </a>
                    <?php } else { ?>
                        <a href="?error=2">
                            <div class="ajouter-button">
                                <img src="../img/ajouter.svg" alt="Bouton ajouter">
                                <img src="../img/ajouter-vert.svg" alt="Bouton ajouter vert">
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="compo-item">
                <div class="body-compo-item"><img src="../img/compo-menu/tomate.jpg" alt=""></div>
                <div class="footer-compo-item">
                    Ajouter : 
                    <?php if(array_key_exists('mail', $_SESSION)) { ?>
                        <a href="">
                            <div class="ajouter-button">
                                <img src="../img/ajouter.svg" alt="Bouton ajouter">
                                <img src="../img/ajouter-vert.svg" alt="Bouton ajouter vert">
                            </div>
                        </a>
                    <?php } else { ?>
                        <a href="?error=2">
                            <div class="ajouter-button">
                                <img src="../img/ajouter.svg" alt="Bouton ajouter">
                                <img src="../img/ajouter-vert.svg" alt="Bouton ajouter vert">
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="compo-item">
                <div class="body-compo-item"><img src="../img/compo-menu/concombre.jpg" alt=""></div>
                <div class="footer-compo-item">
                    Ajouter : 
                    <?php if(array_key_exists('mail', $_SESSION)) { ?>
                        <a href="">
                            <div class="ajouter-button">
                                <img src="../img/ajouter.svg" alt="Bouton ajouter">
                                <img src="../img/ajouter-vert.svg" alt="Bouton ajouter vert">
                            </div>
                        </a>
                    <?php } else { ?>
                        <a href="?error=2">
                            <div class="ajouter-button">
                                <img src="../img/ajouter.svg" alt="Bouton ajouter">
                                <img src="../img/ajouter-vert.svg" alt="Bouton ajouter vert">
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="compo-item">
                <div class="body-compo-item"><img src="../img/compo-menu/oeuf.jpg" alt=""></div>
                <div class="footer-compo-item">
                    Ajouter : 
                    <?php if(array_key_exists('mail', $_SESSION)) { ?>
                        <a href="">
                            <div class="ajouter-button">
                                <img src="../img/ajouter.svg" alt="Bouton ajouter">
                                <img src="../img/ajouter-vert.svg" alt="Bouton ajouter vert">
                            </div>
                        </a>
                    <?php } else { ?>
                        <a href="?error=2">
                            <div class="ajouter-button">
                                <img src="../img/ajouter.svg" alt="Bouton ajouter">
                                <img src="../img/ajouter-vert.svg" alt="Bouton ajouter vert">
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="compo-item">
                <div class="body-compo-item"><img src="../img/compo-menu/patate.jpg" alt=""></div>
                <div class="footer-compo-item">
                    Ajouter : 
                    <?php if(array_key_exists('mail', $_SESSION)) { ?>
                        <a href="">
                            <div class="ajouter-button">
                                <img src="../img/ajouter.svg" alt="Bouton ajouter">
                                <img src="../img/ajouter-vert.svg" alt="Bouton ajouter vert">
                            </div>
                        </a>
                    <?php } else { ?>
                        <a href="?error=2">
                            <div class="ajouter-button">
                                <img src="../img/ajouter.svg" alt="Bouton ajouter">
                                <img src="../img/ajouter-vert.svg" alt="Bouton ajouter vert">
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-body-4">
        <p class="title-mail">Restons en contact !</p>
        <p class="text-mail">Inscrivez-vous pour être informé des sorties produit et promos exclusives, des infos, des recettes, et des conseils pour toujours être au top.</p>
        <div class="newslettre-info">
            🛈 Vous recevrez environ 2 mail par mois.
        </div>
        <form action="" method="GET">
            <input type="mail" name="mail" placeholder="Votre e-mail" required>
            <input type="submit" value="HOP !">
        </form>
    </div>

    <div class="scrollUp">
        <a href="menu-simple#top"><img src="../img/up-arrow.svg"/></a>
    </div>

    <footer>
        <?php include("../php/footer_menu.php"); ?>
    </footer>
    
</body>
</html>