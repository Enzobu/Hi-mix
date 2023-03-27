<?php

include('link_db.php');

$sql = "SELECT * FROM `user`";
$requete = $db->query($sql);
$user = $requete->fetchAll();

if(array_key_exists('mail', $_POST) and array_key_exists('password', $_POST) and array_key_exists('name', $_POST) and array_key_exists('surname', $_POST)) {
    $nom = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $mail = htmlspecialchars($_POST['mail']);
    $pass = htmlspecialchars($_POST['password']);
    if ($nom == '' or $surname == '' or $mail == '' or $pass == '') {
        header('Location: /');
        exit();
    }
    $sql = "INSERT INTO `user`(`nom`, `prenom`, `mail`, `password`) VALUES (:nom, :surname, :mail, :pass)";
    $requete = $db->prepare($sql);
    $requete->execute(array(':nom' => $nom, ':surname' => $surname, ':mail' => $mail, ':pass' => $pass));

    header('Location: /admin/chambre.php');
    exit();
}

if(array_key_exists('session', $_GET)) {
    if ($_GET['session'] == 'destroy') {
        session_destroy();
        header('location: /');
    }
}




$sql = 'SELECT * FROM users WHERE id_user = :id';
$select = $db->prepare($sql);
$select->execute(['id' => $id]);
