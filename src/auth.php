<?php

session_start();
$login = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

if(authenticateFake($login, $password)){
  $_SESSION['auth'] = true;
  header('Location: index.php');
} else {
  header('Location: login.html');
}

function authenticateFake($user, $pass){
  try{
  $pdo = new PDO("mysql:host=mysql;dbname=egresso;port=3306", 'root', '123');
  $sql = 'select * from acesso where usuario=:user and senha =:pass';
  $result = $pdo->prepare($sql);

  $result->bindParam(":user", $user);
  $result->bindParam(":pass", $pass);
  $result->execute();
  $row = $result->rowCount();
  return $row;
  var_dump($result->fetchAll());
  }

  catch(Exception $e){
    echo $e->getMessage();
  }


}
