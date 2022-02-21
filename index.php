<?php session_start(); ?>
<?php 
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
            <?= include("tasks.php") ?>
            <?= include("modal.php") ?>
        <?php endif ?>
    
    </body>
</html>