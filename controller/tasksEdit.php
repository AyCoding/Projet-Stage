<?php
$db = new PDO('mysql:host=localhost;dbname=tasks;charset=UTF8;', 'root', '');
$sql = "SELECT * FROM `taskslists`;";
$result = $db->prepare($sql);
$result->execute();

$data = $result->fetchAll();