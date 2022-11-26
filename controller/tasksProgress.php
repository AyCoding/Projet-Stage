<?php

$db = new PDO('mysql:host=localhost;dbname=tasks;charset=UTF8;', 'root', '');
$sql = "SELECT * FROM `tasksfinished`;";
$result = $db->prepare($sql);
$result->execute();

$data = $result->fetchAll();
?>

<?php foreach ($data as $key => $value): ?>

    <div class="title">

        <h3 class="title__task">
            <?= $value['title']; ?>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z"/>
                <path d="M12 13.172l4.95-4.95 1.414 1.414L12 16 5.636 9.636 7.05 8.222z" fill="rgba(51,51,51,1)"/>
            </svg>

        </h3>
        <div class="title__wrapper">
            <h4>
                <?= $value['task']; ?>
                <div>
                </div>
            </h4>
            <h4>
                <?= $value['task1']; ?>
                <div>
                </div>
            </h4>


            <div class="task__adds">
                <button type="submit">Ajouter tâches</button>
            </div>
        </div>
    </div>

<?php endforeach ?>