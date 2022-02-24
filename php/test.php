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
    $title2 =  $data[1]['title'];

    $task = [
        $data[0]['task'],
        $data[0]['task1']
    ];
}

for ($p=0; $p < count($data); $p++) {
    $titre = $data[$p]['title'];
}

// echo count($data);

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

$number = count($data);
// $test = ["Vérif","Henry","Modus", "Jean-Louis", "MJ", "SPNWH"]
?>

<?php foreach ($data as $key => $value): ?>
    <?php foreach ($data as $taskKey => $task): ?>
        <?php foreach ($data as $key => $title): ?>
        
        
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="src/css/styles.css">
        
        <!-- # code... -->
        
        <div class="title">
            
            <h3 class="title__task">
                <?= $title['title']; ?>
            </h3>
            <div class="title__wrapper">


                        <h4><?= $task['task']; ?></h4>
                        <h4><?= $task['task1']; ?></h4>
                        
                        
                        <?php //for ($k=0; $k < count(array($data)); $k++) {
                            //      $tasks = [
                            //          $data[$k]['task'],
                            //         $data[$k]['task1'],
                            //     ];
                            //     for ($g=0; $g < 1; $g++) {
                            //         echo "-------";
                            //         echo "\n<h4>$tasks[0] 11</h4>";
                            //         echo "\n<h4>$tasks[1] 22</h4>";
                            //     }
                            // }
                            ?>

                        <div class="task__adds">
                            <h4>Ajouter tâches</h4>
                        </div>
                    </div>
                    <?php include("progress-line.php"); ?>                    
                </div>
                <?php endforeach ?>
            <?php endforeach ?>
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