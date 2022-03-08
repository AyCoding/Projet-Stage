<?php

session_start();

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $db = new PDO('mysql:host=localhost;dbname=loginsystem;charset=UTF8;', 'root', '');

    $sql = "SELECT * FROM user WHERE email = '$email'; ";
    $result = $db->prepare($sql);
    $result->execute();

    if ($result->rowCount() > 0) {

        $data = $result->fetchAll();
        if (password_verify($pass, $data[0]["password"])) {
            echo "Connexion effectuée";
            $_SESSION['email'] = $email;

            $_SESSION['connecte'] = true;

            header('Location: /');

            exit();
        } else {
            $error = "Identifiants incorrects !";
        }
    }
}