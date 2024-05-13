<?php

require_once 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Preparar la consulta SQL
    $stmt = $conn->prepare("SELECT contrasena_adm FROM administrador WHERE correo_adm = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($contrasena_adm);
    $stmt->fetch();

    if ($password === $contrasena_adm) {
        // Las credenciales son correctas, iniciar sesión
        session_start();
        $_SESSION['administrador'] = $email;
        header("Location: SistemaGestion.php"); // Redirigir al administrador al panel de control
        exit();
    } else {
        // Las credenciales son incorrectas
        echo "<script>alert('Credenciales incorrectas'); window.location.href='administrador.php';</script>";
    }
    $stmt->close();
}
$conn->close();
?>
