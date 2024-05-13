<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Conocimiento - Iniciar Sesión</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap');

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
        .header {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            text-transform: uppercase;
        }
        input[type="email"], input[type="password"], input[type="submit"] {
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
        input[type="submit"] {
            background-color: white;
            color: #764ba2;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #667eea;
            color: white;
        }
        .footer a {
            color: #FFF;
            text-decoration: none;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            ESTUDIANTE
        </div>
        <h3>Iniciar Sesión</h3>
        <form action="ValidarLogin.php" method="post">
            <input type="email" name="email" placeholder="Correo Institucional" required><br>
            <input type="password" name="password" placeholder="Contraseña" required><br>
            <input type="submit" value="Ingresar">
        </form>
        <div class="footer">
            <a href="/ruta_para_recuperar_contrasena.php">¿Olvidaste tu contraseña?</a>
        </div>
        <div class="footer">
            <a href="CrearEst.php">Crear cuenta</a>
        </div>
    </div>
</body>
</html>