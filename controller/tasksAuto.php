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
                

                        <h4>
                            <?= $value['task']; ?>
                            <svg class="delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M7 4V2h10v2h5v2h-2v15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6H2V4h5zM6 6v14h12V6H6zm3 3h2v8H9V9zm4 0h2v8h-2V9z"/></svg>
                        </h4>
                        <h4>
                            <?= $value['task1']; ?>
                            <svg class="delete"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M7 4V2h10v2h5v2h-2v15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6H2V4h5zM6 6v14h12V6H6zm3 3h2v8H9V9zm4 0h2v8h-2V9z"/></svg>
                        </h4>
                        

                        <div class="task__adds">
                            <h4>Ajouter tâches</h4>
                        </div>
                    </div>
                    <?php include("php/progress-line.php"); ?>                    
                </div>
                
        <?php endforeach ?>

        <style>
                    svg.delete {
                        width: 30px;
                        height: 30px;
                    }

                    .delete:hover {
                        transition: .3s;
                        fill: rgba(200, 0, 0, 1);
                        cursor: pointer;
                    }

                    h4 {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                    }
        
        </style>

<?php 
//"\n<h4>$task[$key]</h4>" 
?>

<!-- <h1 style="text-align: center;">____________________</h1> -->