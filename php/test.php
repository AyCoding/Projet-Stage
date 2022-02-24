<?php

$db = new PDO('mysql:host=localhost;dbname=tasks;charset=UTF8;', 'root', '');
$sql = "SELECT * FROM `taskslists`;";
// $sql = "SELECT * FROM taskslists; "
$result = $db->prepare($sql);
$result->execute();

$data = $result->fetchAll();
?>

<?php foreach ($data as $key => $value): ?>

    
    
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="src/css/styles.css">
        
        <!-- # code... -->
        
        <div class="title">
            
            <h3 class="title__task">
                <?= $value['title']; ?>
            </h3>
            <div class="title__wrapper">
                

                        <h4><?= $value['task']; ?></h4>
                        <h4><?= $value['task1']; ?></h4>
                        

                        <div class="task__adds">
                            <h4>Ajouter tâches</h4>
                        </div>
                    </div>
                    <?php include("progress-line.php"); ?>                    
                </div>
                
        <?php endforeach ?>

        <style>
                    .title__wrapper {position: relative;}
                    svg.delete {
                        position: absolute;
                        /* top: 0; */
                        right: 0;
                        width: 30px;
                        height: 30px;
                    }
                    </style>

<?php 
//"\n<h4>$task[$key]</h4>" 
?>

<!-- <h1 style="text-align: center;">____________________</h1> -->