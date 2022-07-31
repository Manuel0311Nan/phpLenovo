<?php

// session_start();

// $conn = mysqli_connect(
//     'localhost',
//     'root',
//     '',
//     'bbdd_lenovo'
// );

$server= 'localhost';
$user = 'root';
$pass = "";
$database = "bbdd_lenovo";

$mysqli = new mysqli($server, $user, $pass, $database);
if($mysqli->connect_errno){
  echo "falló la conexión a mysql: (" . $myslqi ->connect_errno . ") ";
}
return $mysqli;

// function connectServer($server, $user, $pass, $database)
// {
//   try {
//     $dsn = "mysql:host=$server;dbname=$database;charset=utf8";
//     return new PDO($dsn, $user, $pass);
//     echo 'Conexión realizada';
//   } catch (PDOException $e) {
//     echo $e->getMessage();
//   }
// };
?>