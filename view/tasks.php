<?php
require_once "php/auth.php";
est_connecte();
forcer_utilisateur_connecte();
?>
    <div class="header__task">
        <div class="header__title">
            <h2 class="title__project active">Projets en cours</h2>
            <h2 class="title__project">Projets finis</h2>
        </div>

        <div class="content">
            <section class="active">
                <div class="add__project">
                    <h2>Ajout d'un projet</h2>

                </div>
                <?php include("controller/tasksAuto.php"); ?>
            </section>

            <section class="">

                <?php include("controller/tasksProgress.php"); ?>

            </section>
        </div>
    </div>

<?php include("view/footer.php"); ?>