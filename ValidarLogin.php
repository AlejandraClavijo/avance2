<?php

require_once 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Preparar la consulta SQL
    $stmt = $conn->prepare("SELECT contrasena FROM usuarios WHERE correo = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($contrasena_hash);
    $stmt->fetch();

    if (password_verify($password, $contrasena_hash)) {
        // El usuario existe y la contraseña coincide, iniciar sesión
        session_start();
        $_SESSION['usuario'] = $email;  // Guardar el email en sesión para usarlo después
        header("Location: SistemaGestion.php"); // Redirigir al usuario a la página de bienvenida
        exit();
    } else {
        // Usuario no encontrado o contraseña incorrecta
        echo "<script>alert('Credenciales incorrectas'); window.location.href='estudiante.php';</script>";
    }
    $stmt->close();
}
$conn->close();

?>
