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
            </h3>
            <div class="title__wrapper">
                        <h4>
                            <?= $value['task']; ?>
                            <div>
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4 3h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm1 2v14h14V5H5z"/></svg> -->
                            <input type="checkbox">
                            
                            <svg class="delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M7 4V2h10v2h5v2h-2v15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6H2V4h5zM6 6v14h12V6H6zm3 3h2v8H9V9zm4 0h2v8h-2V9z"/></svg>
                            </div>
                        </h4>
                        <h4>
                            <?= $value['task1']; ?>
                            <div>
<!--                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4 3h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm1 2v14h14V5H5z"/></svg>-->
                            <input type="checkbox">

                                <svg class="delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M7 4V2h10v2h5v2h-2v15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6H2V4h5zM6 6v14h12V6H6zm3 3h2v8H9V9zm4 0h2v8h-2V9z"/></svg>
                            </div>
                        </h4>
                        <div class="form__task">
                            <form action="">
                                <!--<label for=""></label>-->
                                <input type="text" name="task" id="task" placeholder="Nom d'un tâches">
                        <div class="task__adds">
                            <button type="submit">Ajouter tâches</button>
<!--                            <h4>Ajouter tâches</h4>-->
                        </div>
                            </form>
                        </div>



                    </div>
                    <?php include("php/progress-line.php"); ?>                    
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