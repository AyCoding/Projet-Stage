<?php $error = null; ?>
<?php require "controller/traitementInscription.php"; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/styles.css">
    <title>S'incrire - Ardennes Métropole</title>
</head>
<body>

<div class="login__form">
    <h1>S'inscire
        <!--<img src="assets/ardenne.png" alt="">-->
    </h1>

    <form name="signup" method="POST" action="signup.php">

        <div class="form__group">
            <input type="email" name="email" id="pseudo" required placeholder="Saisir l'adresse email">
        </div>

        <div class="form__group">
            <input type="password" name="pass" id="password" required placeholder="Saisir le mot de passe">
        </div>
        <div class="form__group">
            <input type="password" name="passConfirm" id="passwordConfirm" required
                   placeholder="Confirmer le mot de passe">
        </div>

        <div class="form__group form__last">
            <button type="submit" name="submit" id="submit">S'inscrire</button>
        </div>

        <?php if ($error): ?>
            <div class="alert">
                <?= $error ?>
            </div>
        <?php endif ?>

    </form>
    <p>Vous avez déjà un compte,
        <a href="login.php" style="color: darkblue; text-decoration: underline;">
            Connectez-vous
        </a>
    </p>

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

    .alert {
        background-color: rgba(255, 0, 0, .5);
        color: #FFF;
        width: 100%;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>