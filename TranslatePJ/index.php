<?php
  require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>DATA BASE</title>
</head>
<body>
  <table>
    <tr>
      <th>ID</th>
      <th>ID USER</th>
      <th>NAME</th>
      <th>STATUS</th>
      <th>&#9998;</th>
      <th>&#10006;</th>
    </tr>

    <?php
      $products = mysqli_query($connect, "SELECT * FROM `users`");
      $products = mysqli_fetch_all($products);
      foreach($products as $product) {
        ?>
          <tr>
            <td><?= $product[0] ?></td>
            <td><?= $product[1] ?></td>
            <td><?= $product[2] ?></td>
            <td><?= $product[3] ?></td> 
            <td><a href="update.php?id=<?= $product[0] ?>">UPDATE</a></td>
            <td><a href="vendor/delete.php?id=<?= $product[0] ?>">DELETE</a></td> 
          </tr>
        <?php
      }
    ?>
  </table>

  <h2>ADD NEW USER</h2>
  <form action="vendor/create.php" method="post">
    <p>ID USER</p>
    <input type="number" name="user_id">
    <p>USER NAME</p>
    <input type="text" name="name">
    <p>STATUS</p>
    <input type="text" name="status">
    <button type="submit">ADD</button>
  </form>

</body>
</html>