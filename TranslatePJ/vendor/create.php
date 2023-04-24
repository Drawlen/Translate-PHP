<?php
require_once '../config/connect.php';

//print_r($_POST);

$user_id = $_POST['user_id'];
$name = $_POST['name'];
$status = $_POST['status'];

mysqli_query($connect, "INSERT INTO `users` (`id`, `user_id`, `name`, `status`) VALUES (NULL, '$user_id', '$name', '$status')");

header('Location: /');