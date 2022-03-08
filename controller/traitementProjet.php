<?php

if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $tasks = $_POST['task'];
    $tasks1 = $_POST['task1'];

    $db = new PDO('mysql:host=localhost;dbname=tasks;charset=UTF8;', 'root', '');

    $sql = "INSERT INTO taskslists (title, task, task1) VALUES ('$title','$tasks', '$tasks1')";
    $req = $db->prepare($sql);
    $req->execute();
}