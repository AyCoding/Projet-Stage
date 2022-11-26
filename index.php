<?php
session_start();

require "controller/traitementProjet.php";
require "php/auth.php";
est_connecte();
?>
<html lang="fr">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/styles.css">
    <title>Gestion des projets - Ardennes Métropole</title>
</head>
<body>

<?php require("view/header.php"); ?>

<?php if (!est_connecte()): ?>
    <section class="no-co">
        <h4>Veuillez-vous connecter pour accéder au gestionnaire de projet</h4>
        <a href="login.php">Se connecter</a>
    </section>

<?php endif ?>

<?php if (est_connecte()): ?>
    <?= require("view/tasks.php") ?>
    <?= require("view/modal.php") ?>
<?php endif ?>

<script src="src/js/app.js"></script>
<script src="src/js/formulaire.js"></script>

</body>
</html>