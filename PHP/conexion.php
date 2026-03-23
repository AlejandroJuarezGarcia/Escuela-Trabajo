<?php
$conexion = new mysqli("localhost","sistema-alumnos","mkcy2_5VJ2(K1_PjN3","sistema_alumnos_sistemaescolar");

if($conexion->connect_error){
    die("Error de conexion: " . $conexion->connect_error);
}
?>