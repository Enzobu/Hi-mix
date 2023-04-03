<?php

include('link_db.php');
session_start();

// password_hash($_POST['password'], PASSWORD_DEFAULT)
// password_verify($_POST['password'], $user['pass'])

$sql = "SELECT * FROM `user`";
$requete = $db->query($sql);
$user = $requete->fetchAll();

if(array_key_exists('mail', $_POST) and array_key_exists('password', $_POST)) {
    $mail = htmlspecialchars($_POST['mail']);
    $password = htmlspecialchars($_POST['password']);
    foreach ($user as $users) {
        if ($_POST['mail'] == $users['mail'] and password_verify($_POST['password'], $users['password'])) {
            $_SESSION['mail'] = $users['mail'];
            $_SESSION['isAdmin'] = $users['isAdmin'];
            
            header("Refresh: 0;url=/");
            die();
        }
    }
    header("Refresh: 0;url=/?error=1");

}

if(array_key_exists('session', $_GET)) {
    if ($_GET['session'] == 'destroy') {
        session_unset();
        session_destroy();
        header('location: /');
    }
}
