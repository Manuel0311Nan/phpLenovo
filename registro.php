<?php
require_once(dirname(__FILE__) . '/config/config.php');
$conexion = connectServer(SERVER, USER, PASS, DATABASE);

if(isset($_POST['register'])){
    if(strlen($_POST['nombre']) >=1 && strlen($_POST['email']) >= 1){
        $nombre =ucfirst(trim($_POST['nombre'])) ;
        $email =  trim($_POST['email']);
        $sentencia = $conexion->prepare("INSERT INTO usuarios(Nombre, Email) VALUES (:name, :email)");
        $sentencia ->bindParam(':name', $nombre);
        $sentencia ->bindParam(':email', $email);
        $sentencia->execute();
        echo'<script type="text/javascript">
         alert("Gracias, nos comunicaremos contigo muy pronto");
        window.location.href="index.php";
        </script>';
        } else{
            ?>
            <h3>Complete este campo</h3>
            <?php
        };
        };
?>