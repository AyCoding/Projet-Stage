<?php
// $pseudo = $_POST['pseudo'];

// $pass = $_POST['motdepasse'];

// if ($pseudo === 'John' && $pass === 'Doe') {

//     session_start();

//     $_SESSION['connecte'] = 1;

//     // header('Location: /dashboard.php');

//     exit();

// } else {

//     $error = "Identifiants incorrects !";

// }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/cropped-ardenne-22-192x192.png" sizes="192x192">
    <link rel="stylesheet" href="src/css/styles.css">
    <title>Login - Ardennes Métropole</title>
</head>
<body>
    
    <div class="login__form">
        <h1>Se Connecter
            <img src="assets/ardenne.png" alt="">
        </h1>
        
        <form action="" method="post">

            <div class="form__group">
                <input type="text" name="pseudo" id="pseudo" required placeholder="Saisir l'identifiant">
            </div>
            
            <div class="form__group">
                <input type="password" name="motdepasse" id="password" required placeholder="Saisir le mot de passe">
            </div>

            <div class="form__group form__last">
                <button type="submit" id="submit">Se Connecter</button>
            </div>


        </form>
    </div>

</body>
</html>
<style>
    html,
    body {
    width: 100%;
    height: 100%;
    background-color: rgba(51, 51, 51, .1);
    display: flex;
    vertical-align: middle;
}
</style>