<?php
    include("../../isAdmin.php");
    include("../../link_db.php");
    $nom = strtoupper(htmlspecialchars($_POST['nom']));
    $prenom = ucfirst(htmlspecialchars($_POST['prenom']));
    $mail = htmlspecialchars($_POST['mail']);
    $adresse1 = htmlspecialchars($_POST['adresse1']);
    $adresse2 = htmlspecialchars($_POST['adresse2']);
    $cp = htmlspecialchars($_POST['CP']);
    $ville = htmlspecialchars($_POST['ville']);
    $dateDeNaissance = htmlspecialchars($_POST['date_de_naisance']);
    $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);
    $telephone = htmlspecialchars($_POST['telephone']);
    $isAdmin = htmlspecialchars($_POST['isAdmin']);
    if ($nom == '' or $prenom == '' or $mail == '' or $adresse1 == '' or $adresse2 == '' or $cp == '' or $ville == '' or $dateDeNaissance == '' or 
    $password == '' or $telephone == '' or $isAdmin == '') {
        // header('Location: /admin/user.php');
        // exit();
        echo 'cest vide';
    }
    $sql = "INSERT INTO `user`(`nom_clients`, `prenom_clients`, `mail`, `adresse1_clients`, `adresse2_clients`, `CP_clients`, `ville_clients`, `date_naissance_clients`, `password`, `telephone_clients`, `isAdmin`) 
    VALUES ('$nom', '$prenom', '$mail', '$adresse1', '$adresse2', $cp, '$ville', '$dateDeNaissance', '$password', $telephone, $isAdmin)";
    $requete = $db->query($sql);
    
    header('Location: /admin/user.php');
    exit();
