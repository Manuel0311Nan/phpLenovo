<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];

$insertInfo = "INSERT INTO BBDD_lenovo(nombre, email) VALUES  (`$nombre`, `$email`)";
?>