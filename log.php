<?php

session_start();

$error = null;

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $db = new PDO('mysql:host=localhost;dbname=loginsystem', 'root', '');

    $sql = "SELECT * FROM user where email = '$email' ";
    $result = $db->prepare($sql);
    $result->execute();

    if ($result->rowCount() >0) {

        $data = $result->fetchAll();
        if (password_verify($pass, $data[0]['password'])) {
            echo "Connexion effectuée";
            $_SESSION['email'] = $email;
            
            $_SESSION['connecte'] = 1;
        
            header('Location: /');

            exit();

        } else {
            $error = "Identifiants incorrects !";
            echo $error;
        }
    }

    }
    else {
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user (email, password) VALUES ('$email', '$pass')";
        $req = $db->prepare($sql);
        $req->execute();

        echo "Enregistrement effectué";
    }

require 'php/auth.php'
?>

<style>

@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap');


    * {
        font-size: 30px;
        font-weight: 700;
        font-family: 'Montserrat',sans-serif;
    }
</style>