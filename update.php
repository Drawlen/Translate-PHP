<?php
  require_once 'config/connect.php';
  $user_id = $_GET['id'];
  $user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id`='$user_id'");
  $user = mysqli_fetch_assoc($user);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>UPDATE USER DATA</title>
</head>
<body>

  <a href="/">MAIN</a>
  <hr>

  <h2>UPDATE DATA</h2>
  <form action="vendor/update.php" method="post">
    <input type="hidden" name="id" value="<?= $user['id'] ?>">
    <p>STATUS</p>
    <input type="text" name="status" value="<?= $user['status'] ?>">
    <button type="submit">UPDATE</button>
  </form>
  
</body>
</html>