<?php
$mysqli = include_once "bd.php";

if(isset($_POST['register'])){
    if(strlen($_POST['nombre']) >=1 && strlen($_POST['email']) >= 1){
        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $consulta = "INSERT INTO usuarios(Nombre, Email) VALUES  ('$nombre','$email')";
        } else{
            ?>
            <h3>Complete este campo</h3>
            <?php
        };
        }
// $nombre = $_POST['nombre'];
// $email = $_POST['email'];

// $insertInfo = "INSERT INTO usuarios(Nombre, Email) VALUES  ($nombre, $email)";
header('location: index.html.php' );
?>