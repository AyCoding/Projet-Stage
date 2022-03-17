<?php

session_start();

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $passConfirm = $_POST['passConfirm'];

    // Récupération de la base de données
    $db = new PDO('mysql:host=localhost;dbname=loginsystem;charset=UTF8;', 'root', '');

    $sql = "SELECT * FROM user WHERE email = '$email'; "; // On récupère dans la table "user" tout les email
    $result = $db->prepare($sql);
    $result->execute();

    if ($pass === $passConfirm) { // On vérifie que $pass et $passConfirm sont extrêmement égaux

        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user (email, password) VALUES ('$email','$pass')";
        $req = $db->prepare($sql);
        $req->execute();
        echo "Enregistrement effectuée";

        $_SESSION['email'] = $email;

        $_SESSION['connecte'] = true;
        header('Location: /');
    } else {
        $error = "Le mot de passe n'est pas identique !";
    }

}
