<?php
    include("../../isAdmin.php");
    include("../../link_db.php");
    $id = htmlspecialchars($_POST['id']);
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
    if ($id != '' and $nom != '') {
        $sql = "UPDATE `user` SET `nom_clients`='$nom' WHERE `id_clients`=$id";
        $requete = $db->query($sql);
    }
    if ($id != '' and $prenom != '') {
        $sql = "UPDATE `user` SET `prenom_clients`='$prenom' WHERE `id_clients`=$id";
        $requete = $db->query($sql);
    }
    if ($id != '' and $mail != '') {
        $sql = "UPDATE `user` SET `mail`='$mail' WHERE `id_clients`=$id";
        $requete = $db->query($sql);
    }
    if ($id != '' and $adresse1 != '') {
        $sql = "UPDATE `user` SET `adresse1_clients`='$adresse1' WHERE `id_clients`=$id";
        $requete = $db->query($sql);
    }
    if ($id != '' and $adresse2 != '') {
        $sql = "UPDATE `user` SET `adresse2_clients`='$adresse2' WHERE `id_clients`=$id";
        $requete = $db->query($sql);
    }
    if ($id != '' and $cp != '') {
        $sql = "UPDATE `user` SET `cp_clients`='$cp' WHERE `id_clients`=$id";
        $requete = $db->query($sql);
    }
    if ($id != '' and $ville != '') {
        $sql = "UPDATE `user` SET `ville_clients`='$ville' WHERE `id_clients`=$id";
        $requete = $db->query($sql);
    }
    if ($id != '' and $dateDeNaissance != '') {
        $sql = "UPDATE `user` SET `date_naissance_clients`='$dateDeNaissance' WHERE `id_clients`=$id";
        $requete = $db->query($sql);
    }
    if ($id != '' and $password != '') {
        $sql = "UPDATE `user` SET `password`='$password' WHERE `id_clients`=$id";
        $requete = $db->query($sql);
    }
    if ($id != '' and $telephone != '') {
        $sql = "UPDATE `user` SET `telephone_clients`='$telephone' WHERE `id_clients`=$id";
        $requete = $db->query($sql);
    }
    if ($id != '' and $isAdmin != '') {
        $sql = "UPDATE `user` SET `isAdmin`='$isAdmin' WHERE `id_clients`=$id";
        $requete = $db->query($sql);
    }
    
    header('Location: /admin/user.php');
    exit();