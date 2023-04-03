<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('php/head.php'); ?>
    <link rel="stylesheet" href="css/my_account/my_account.css">
    <title>Panier - Hi-Mix</title>
</head>
<body id="body">
    <header>
        <div class="header">
            <?php  include("php/header.php"); ?>
            <div class="title">
                <div class="title">Mon compte</div>
                <div class="title"><a href="/php/login?session=destroy">Se déconnecter</a></div>
            </div>
        </div>
    </header>

    <div class="scrollUp">
        <a href="#top"><img src="img/up-arrow.png"/></a>
    </div>

    <footer>
        <?php include("php/footer.php"); ?>
    </footer>
</body>
</html>