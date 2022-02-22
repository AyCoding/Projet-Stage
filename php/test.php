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

// echo $data[1]['title'];
for ($j=0; $j < count($data) ; $j++) { 
    # code...
    echo $data[$j]['title'];
}
// $test = array($title, $task[0])
?>
<meta charset="UTF-8">

<link rel="stylesheet" href="src/css/styles.css">
<?php foreach ($task as $key => $value): ?>
    <!-- # code... -->
    <?= $task[$key] ?>

    <?php endforeach ?>
    <div class="title">
        <h3 class="title__task">
                        <?php echo $title; ?>
                    </h3>
                    
                    <div class="title__wrapper">
                        <!-- <section> -->
                            <?php for ($i=0; $i < count($task) ; $i++): ?> 
                               <?= "\n<h4>$task[$i]</h4>" ?>
                               <!-- <input type="checkbox" name="task" id="check-tasks"> -->
                               <svg class="delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm1 2H6v12h12V8zm-4.586 6l1.768 1.768-1.414 1.414L12 15.414l-1.768 1.768-1.414-1.414L10.586 14l-1.768-1.768 1.414-1.414L12 12.586l1.768-1.768 1.414 1.414L13.414 14zM9 4v2h6V4H9z"/></svg>
                                <?php endfor ?>
                                <!-- </section> -->
                        <!-- <h4>Zone D14</h4> -->
                        <div class="task__adds">
                            <h4>Ajouter tâches</h4>
                        </div>
                    </div>
                    <?php include("progress-line.php"); ?>                    
                </div>

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