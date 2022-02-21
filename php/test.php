<?php
$title = "Verification";
$task = [
    "Zone B14",
    "Zone D14",
    "Section A80",
    "Inventaire Informatique"
]
?>

<link rel="stylesheet" href="src/css/styles.css">

<div class="title">
                    <h3 class="title__task">
                        <?php echo $title; ?>
                    </h3>

                    <div class="title__wrapper">
                        <h4>
                            <?php for ($i=0; $i < count($task) ; $i++) { 
                                # code...
                                echo "\n<h4>$task[$i]</h4>";
                            } ?>

                        </h4>
                        <!-- <h4>Zone D14</h4> -->
                        <div class="task__adds">
                            <h4>Ajouter tâches</h4>
                        </div>
                    </div>
                    <?php include("progress-line.php"); ?>                    
                </div>