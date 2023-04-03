<?php
    include("../../isAdmin.php");
    include("../../link_db.php");
    $id = htmlspecialchars($_POST['id']);
    $nom = strtoupper(htmlspecialchars($_POST['nom']));
    $prenom = ucfirst(htmlspecialchars($_POST['prenom']));
    $civilite = htmlspecialchars($_POST['civilite']);
    $mail = htmlspecialchars($_POST['mail']);
    $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);
    $isAdmin = htmlspecialchars($_POST['isAdmin']);
    if ($id != '' and $nom != '') {
        $sql = "UPDATE `user` SET `nom`='$nom' WHERE `id`=$id";
        $requete = $db->query($sql);
    }
    if ($id != '' and $prenom != '') {
        $sql = "UPDATE `user` SET `prenom`='$prenom' WHERE `id`=$id";
        $requete = $db->query($sql);
    }
    if ($id != '' and $civilite != '') {
        $sql = "UPDATE `user` SET `civilite`='$civilite' WHERE `id`=$id";
        $requete = $db->query($sql);
    }
    if ($id != '' and $mail != '') {
        $sql = "UPDATE `user` SET `mail`='$mail' WHERE `id`=$id";
        $requete = $db->query($sql);
    }
    if ($id != '' and $password != '') {
        $sql = "UPDATE `user` SET `password`='$password' WHERE `id`=$id";
        $requete = $db->query($sql);
    }
    if ($id != '' and $isAdmin != '') {
        $sql = "UPDATE `user` SET `isAdmin`='$isAdmin' WHERE `id`=$id";
        $requete = $db->query($sql);
    }
    
    header('Location: /admin/user.php');
    exit();