<?php
  session_start();
  if(!isset($_SESSION['auth']) || $_SESSION['auth'] === false)
    header('Location: login.html');


  $pdo = new PDO("mysql:host=mysql;dbname=egresso;port=3306", 'root', '123');
  $sql = "SELECT * FROM egressos";
  $result = $pdo->prepare($sql) or die($mysqli->error);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>

  <?php while ($dado = $result->fetch_afray()){?>
  <tr>
      <td><?php echo $result[""]; ?></td>
      <td><?php echo $result[""]; ?></td>
      <td><?php echo $result[""]; ?></td>
      <td><?php echo $result[""]; ?></td>
      <td><?php echo $result[""]; ?></td>
      
  </tr>
  <?php } ?>


  <h1>Home</h1>
  <a href="logout.php">logout</a>
</body>
</html>


