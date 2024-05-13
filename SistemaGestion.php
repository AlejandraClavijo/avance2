<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap');

        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #667eea, #764ba2);
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.2);
            
            border-radius: 20px;
            padding: 20px;
            width: 50%;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
            margin-top: 50px;
        }

        .container:hover {
            transform: scale(1.05);
        }
        
        h1 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .module-boxes {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
        }

        .module-box {
            flex: 1;
            background-color: #667eea;
            padding: 20px;
            border-radius: 15px;
            transition: background-color 0.3s ease;
            margin: 0 10px;
        }

        .module-box:hover {
            background-color: #764ba2;
        }

        .module-box a {
            color: white;
            text-decoration: none;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <h1>Universidad Distrital Jose Francisco de Caldas</h1>
    <h1>BIENVENDO AL SISTEMA DE GESTION DE CONOCIMIENTO PARA ANALISIS DE SISTEMAS</h1>
    <h2>Selecciona el módulo de tu interés</h2>
    <div class="container">
        <div class="module-boxes">
            <div class="module-box">
                <a href="InfProyecto.php">INFORMACION DEL PROYECYO</a>
            </div>
            <div class="module-box">
                <a href="#">VALIDACION</a>
            </div>
            <div class="module-box">
                <a href="#">ENLACES</a>
            </div>
            <div class="module-box">
                <a href="#">PORTAL WEB</a>
            </div>
        </div>
    </div>
</body>