<?php session_start(); ?>
<?php 
require "controller/traitementProjet.php";
require_once "php/auth.php";
est_connecte();
?>
<html>
    <head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="assets/cropped-ardenne-22-192x192.png" sizes="192x192">
        <link rel="stylesheet" href="src/css/styles.css">
        <title>Gestion des projets - Ardennes Métropole</title>
    </head>
    <body>

        <?php include("view/header.php"); ?>
        <?php if (est_connecte()): ?>
            <?= include("view/tasks.php") ?>
            <?= include("view/modal.php") ?>
            <?php endif ?>
            
    <script src="src/js/app.js"></script>

    </body>
</html>

<style>
    svg {fill:#333;}
</style>