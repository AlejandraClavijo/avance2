<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$db = "sistema";
$conn = new mysqli($servidor, $usuario, $password, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else{
    
   echo"conectado";
}

?>

