<?php

$server = "localhost";
$user = "root";
$pass = "";
$database="BBDD_lenovo";

function connectServer($server, $user, $pass, $database)
{
  try {
    $dsn = "mysql:host=$server;dbname=$database;charset=utf8";
    return new PDO($dsn, $user, $pass);
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
?>