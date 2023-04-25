<?php
require_once '../config/connect.php';

$id = $_POST['id'];
$status = $_POST['status'];

mysqli_query($connect, "UPDATE `users` SET `status` = '$status' WHERE `users`.`id` = '$id'");


header('Location: /');