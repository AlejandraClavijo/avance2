<?php
include 'conexion.php';
$errores = [];
$exito = "";

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombres = filter_input(INPUT_POST, 'nombres', FILTER_SANITIZE_STRING);
    $apellidos = filter_input(INPUT_POST, 'apellidos', FILTER_SANITIZE_STRING);
    $curso = filter_input(INPUT_POST, 'curso', FILTER_SANITIZE_STRING);
    $cedula = filter_input(INPUT_POST, 'cedula', FILTER_SANITIZE_STRING);
    $correo = filter_input(INPUT_POST, 'correo', FILTER_SANITIZE_EMAIL);
    $contrasena = filter_input(INPUT_POST, 'contrasena', FILTER_SANITIZE_STRING);
    $confirmacion = filter_input(INPUT_POST, 'confirmacion', FILTER_SANITIZE_STRING);

    // Validación de correo institucional
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL) || !preg_match("/@udistrital\.edu\.co$/i", $correo)) {
        $errores[] = "El correo debe terminar en @udistrital.edu.co";
    }

    // Validación de coincidencia de contraseñas
    if ($contrasena !== $confirmacion) {
        $errores[] = "Las contraseñas no coinciden";
    }

    // Si no hay errores, procesar el registro
    if (count($errores) == 0) {
        // Encriptar contraseña antes de almacenarla
        $hash = password_hash($contrasena, PASSWORD_DEFAULT);

        // Preparar la consulta SQL para insertar datos
        $stmt = $conn->prepare("INSERT INTO usuarios (nombres, apellidos, curso, cedula, correo, contrasena) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $nombres, $apellidos, $curso, $cedula, $correo, $hash);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            $exito = "Registro exitoso. ¡Bienvenido!";
        } else {
            $errores[] = "Error al insertar en la base de datos: " . $stmt->error;
        }

        // Cerrar la consulta preparada
        $stmt->close();
    }

    // Cerrar la conexión
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crear cuenta</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Montserrat', sans-serif;
                margin: 0;
                padding: 0;
                background: linear-gradient(135deg, #667eea, #764ba2);
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
                color: white;
            }
            .container {
                background-color: rgba(255, 255, 255, 0.2);
               
                border-radius: 20px;
                padding: 20px;
                width: 30%;
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
                transition: transform 0.3s ease;
            }
            .container:hover {
                transform: scale(1.05);
            }
            input[type="text"], input[type="email"], input[type="password"], input[type="submit"], button {
                margin-top: 10px;
                margin-bottom: 10px;
                padding: 10px;
                width: calc(100% - 20px);
                border: 2px solid white;
                border-radius: 15px;
                background: transparent;
                color: white;
                font-size: 16px;
                font-weight: 400;
            }
            button {
                background-color: #667eea;
                color: white;
                cursor: pointer;
            }
            button:hover {
                background-color: white;
                color: #667eea;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Crear cuenta</h2>
            <?php
            if (!empty($errores)) {
                echo '<ul>';
                foreach ($errores as $error) {
                    echo "<li style='color: red;'>$error</li>";
                }
                echo '</ul>';
            }
            if (!empty($exito)) {
                echo "<p style='color: green;'>$exito</p>";
            }
            ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input type="text" name="nombres" placeholder="Nombres" required><br>
                <input type="text" name="apellidos" placeholder="Apellidos" required><br>
                <input type="text" name="curso" placeholder="Curso" required><br>
                <input type="text" name="cedula" placeholder="Cédula" required><br>
                <input type="email" name="correo" placeholder="Correo Institucional" required><br>
                <input type="password" name="contrasena" placeholder="Contraseña" required><br>
                <input type="password" name="confirmacion" placeholder="Confirmación de Contraseña" required><br>
                <input type="submit" value="Crear Cuenta">
                <button type="button" onclick="window.history.back();">Volver Atrás</button>
            </form>
        </div>
    </body>
</html>