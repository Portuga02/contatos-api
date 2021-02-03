<?php
$dsn = "mysql:host=localhost;dbname=cadastron;charset=utf8";
$user = "root";
$pass = "";

try {
    $PDO = new PDO($dsn, $user, $pass);
  
} catch (PDOException $erro) {
   
}
