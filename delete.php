<?php


require_once 'config/connect.php';


$id = $_GET['id'];


mysqli_query($connect, "DELETE FROM `Description of the problem` WHERE `Description of the problem`.`id` = '$id'");


header('Location: /');
echo readfile('index.php');