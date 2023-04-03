<?php
    include("../../isAdmin.php");
    include("../../link_db.php");
    $nom = strtoupper(htmlspecialchars($_POST['nom']));
    $prenom = ucfirst(htmlspecialchars($_POST['prenom']));
    $civilite = htmlspecialchars($_POST['civilite']);
    $mail = htmlspecialchars($_POST['mail']);
    $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);
    $isAdmin = htmlspecialchars($_POST['isAdmin']);
    if ($nom == '' or $prenom == '' or $civilite == '' or $mail == ''or $password == '') {
        header('Location: /admin/user.php');
        exit();
        // echo 'cest vide';
    }
    $sql = "INSERT INTO `user`(`nom`, `prenom`, `civilite`, `mail`, `password`, `isAdmin`) VALUES ('$nom', '$prenom', '$civilite', '$mail', '$password', $isAdmin)";
    $requete = $db->query($sql);
    
    header('Location: /admin/user.php');
    exit();
