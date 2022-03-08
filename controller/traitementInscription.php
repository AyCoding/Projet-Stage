<?php

session_start();

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $passConfirm = $_POST['passConfirm'];

    $db = new PDO('mysql:host=localhost;dbname=loginsystem;charset=UTF8;', 'root', '');

    $sql = "SELECT * FROM user WHERE email = '$email'; ";
    $result = $db->prepare($sql);
    $result->execute();


    if ($pass === $passConfirm) {

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
