<?php

$db = new PDO('mysql:host=localhost;dbname=tasks;charset=UTF8;', 'root', '');
$sql = "SELECT * FROM `taskslists`;";
$result = $db->prepare($sql);
$result->execute();

$data = $result->fetchAll();
?>

<?php foreach ($data as $key => $value): ?>

    <div class="title">
        <h3 class="title__task">
            <?= $value['title']; ?>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z"/>
                    <path d="M15.728 9.686l-1.414-1.414L5 17.586V19h1.414l9.314-9.314zm1.414-1.414l1.414-1.414-1.414-1.414-1.414 1.414 1.414 1.414zM7.242 21H3v-4.243L16.435 3.322a1 1 0 0 1 1.414 0l2.829 2.829a1 1 0 0 1 0 1.414L7.243 21z"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z"/>
                    <path d="M12 13.172l4.95-4.95 1.414 1.414L12 16 5.636 9.636 7.05 8.222z" fill="rgba(51,51,51,1)"/>
                </svg>
            </div>

        </h3>
        <div class="title__wrapper">
            <form action="" method="POST" name="task-form">
                <h4>
                    <?= $value['task']; ?>
                    <div>
                        <input type="checkbox" name="check" id="checkbox">

                        <svg class="delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                             height="24">
                            <path fill="none" d="M0 0h24v24H0z"/>
                            <path d="M7 4V2h10v2h5v2h-2v15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6H2V4h5zM6 6v14h12V6H6zm3 3h2v8H9V9zm4 0h2v8h-2V9z"/>
                        </svg>
                    </div>
                </h4>
                <h4>
                    <?= $value['task1']; ?>
                    <div>
                        <input type="checkbox" name="check" id="checkbox">

                        <svg class="delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                             height="24">
                            <path fill="none" d="M0 0h24v24H0z"/>
                            <path d="M7 4V2h10v2h5v2h-2v15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6H2V4h5zM6 6v14h12V6H6zm3 3h2v8H9V9zm4 0h2v8h-2V9z"/>
                        </svg>
                    </div>
                </h4>
                <div class="form__task">
                    <input type="text" name="task" id="task" placeholder="Nom d'un tâches">
                    <div class="task__adds">
                        <button type="submit">Mettre à jour</button>
                    </div>
            </form>
        </div>
    </div>
</div>

<?php endforeach ?>

<style>
    svg.delete, h4 svg {
        width: 30px;
        height: 30px;
        margin: auto 10px;
        fill: #222831;
    }

    input[type="checkbox"] {
        width: 25px;
        height: 25px;
        margin: auto 10px;
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

    h4 div {
        display: flex;
        align-items: center;
    }

    .task__adds button {
        width: 100%;
        font-weight: 700;
        font-size: 17px;
    }

    .form__task input {
        width: 50%;
        height: auto;
        margin: 10px 0;
        border: 1px solid rgba(51, 51, 51, .1);
        padding: 5px;
        border-radius: 5px;
    }

    .form__task input::placeholder {
        color: #333333;
        opacity: .5;
    }
</style>