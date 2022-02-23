<?php

$db = new PDO('mysql:host=localhost;dbname=tasks;charset=UTF8;', 'root', '');
$sql = "SELECT * FROM `taskslists`;";
// $sql = "SELECT * FROM taskslists; "
$result = $db->prepare($sql);
$result->execute();

$data = $result->fetchAll();

if ($data == null) {

} else {
    $title =  $data[0]['title'];

    $task = [
        $data[0]['task'],
        $data[0]['task1']
    ];
}
// Nom des tâches
// for ($k=0; $k < count($data); $k++) {
//     $tasks = [
//         $data[$k]['task'],
//         $data[$k]['task1'],
//     ];
// }

// echo $data[1]['title'];

// $test = array($title, $task[0])
// echo array($data)";
// $test = 'henry';
// echo $data[1]['title'];
?>

<meta charset="UTF-8">

<link rel="stylesheet" href="src/css/styles.css">

<?php for ($j=0; $j < 1 ; $j++): ?> 
    <!-- # code... -->

    <div class="title">
        <h3 class="title__task">
            <?= $data[$j]['title'] ?>
            <?= $j ?>
            
                    </h3>
                    
                    <div class="title__wrapper">
                            
                            <?php for ($k=0; $k < count($data); $k++): ?>
                                <?= $tasks = [
                                    $data[$k]['task'],
                                    $data[$k]['task1'],
                                ]; ?>
                                <?php for ($g=0; $g < count($tasks); $g++): ?> 
                                    <?= "-------" ?>
                                    <?= "\n<h4>$tasks[0]</h4>" ?>
                                    <?= "\n<h4>$tasks[1]</h4>" ?>
                                    <?php endfor ?>
                            <?php endfor ?>

                        <div class="task__adds">
                            <h4>Ajouter tâches</h4>
                        </div>
                    </div>
                    <?php include("progress-line.php"); ?>                    
                </div>
                <?php endfor ?>

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

<h1 style="text-align: center;">____________________</h1>