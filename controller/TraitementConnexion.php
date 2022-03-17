<?php

session_start();

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Récupération de la base de données
    $db = new PDO('mysql:host=localhost;dbname=loginsystem;charset=UTF8;', 'root', '');

    $sql = "SELECT * FROM user WHERE email = '$email'; "; // On récupère dans la table "user" tout les email
    $result = $db->prepare($sql);
    $result->execute();

    if ($result->rowCount() > 0) {

        $data = $result->fetchAll(); // aller chercher toutes les données de $result
        if (password_verify($pass, $data[0]["password"])) { // Vérification du mot de passe
            echo "Connexion effectuée";
            $_SESSION['email'] = $email;

            $_SESSION['connecte'] = true;

            header('Location: /');

            exit();
        } else {
            $error = "Mot de passe incorrects !";
        }
    } else {
        $error = "Adresse email incorrects ! ";
    }
}