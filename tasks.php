<?php
require_once "php/auth.php";
est_connecte();
forcer_utilisateur_connecte();
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

    <div class="header__task">
            <div class="header__title">
                <h2 class="active">Projets en cours</h2>
                <h2 class="">Projets finis</h2>
            </div>

            <div class="content">
                <section class="active">
                    <div class="title">
                        <h3 class="title__task">Installation raccordements eau - Commune Neufmanil
                        </h3>

                        <div class="title__wrapper">
                            <h4>Section A1</h4>
                            <h4>Section B5</h4>
                            <div class="task__adds">
                                <h4>Ajouter tâches</h4>
                            </div>
                        </div>

                        <?php include("php/progress-line.php"); ?>
                        
                    </div>
                    <div class="title">
                        <h3 class="title__task">Installation raccordements eau - Commune Aiglemont</h3>

                        <div class="title__wrapper">
                            <h4>Section A1</h4>
                            <h4>Section B5</h4>
                            <div class="task__adds">
                                <h4>Ajouter tâches</h4>
                            </div>
                        </div>

                        <?php include("php/progress-line.php"); ?>


                    </div>

                    <?php include("php/test.php") ?>
                </section>

                <section class="">
                    <div class="title">
                        <h3 class="title__task">Installation raccordements eau - Commune Aiglemont
                        </h3>

                        <div class="title__wrapper">
                            <h4>Section A1</h4>
                            <h4>Section B5</h4>
                            <div class="task__adds">
                                <h4>Ajouter tâches</h4>
                            </div>
                        </div>

                        <?php include("php/progress-line.php"); ?>

                    </div>
                    <div class="title">
                        <h3 class="title__task">Installation raccordements eau - Commune Neufmanil</h3>

                        <div class="title__wrapper">
                            <h4>Section A1</h4>
                            <h4>Section B5</h4>
                            <div class="task__adds">
                                <h4>Ajouter tâches</h4>
                            </div>
                        </div>
                        
                        <?php include("php/progress-line.php"); ?>

                    </div>
                </section>
            </div>
        </div>
                
    <?php include("view/footer.php"); ?>
    </body>
</html>