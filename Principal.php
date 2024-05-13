<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página Principal - Sistema de Gestión de Conocimiento</title>
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
            .main-container {
                background-color: rgba(255, 255, 255, 0.2);
              
                border-radius: 20px;
                padding: 20px 40px 40px;
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
                transition: transform 0.3s ease;
            }
            .main-container:hover {
                transform: scale(1.05);
            }
            .university-header {
                font-size: 24px;
                font-weight: 700;
                margin-bottom: 20px;
                text-transform: uppercase;
            }
            .main-header {
                margin-bottom: 30px;
                font-size: 32px;
                font-weight: 400;
                letter-spacing: 1px;
                text-transform: uppercase;
            }
            .option-container {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }
            .option-box {
                border: 2px solid white;
                padding: 20px 0;
                border-radius: 15px;
                font-size: 20px;
                font-weight: 700;
                color: white;
                background: transparent;
                cursor: pointer;
                transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
            }
            .option-box:hover {
                background-color: white;
                color: #764ba2;
                transform: translateY(-10px);
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            }
            .footer {
                margin-top: 30px;
                font-size: 16px;
            }
        </style>
    </head>
    <body>

        <div class="main-container">
            <div class="university-header">
                Universidad Distrital Francisco José de Caldas
            </div>
            <div class="main-header">
                Sistema de gestión de conocimiento para análisis de sistemas
            </div>
            <div class="option-container">
                <div class="option-box">
                    <a href="estudiante.php" style="color: inherit; text-decoration: none;">Estudiante</a>
                </div>
                <div class="option-box">
                    <a href="administrador.php" style="color: inherit; text-decoration: none;">Administrador</a>
                </div>
            </div>
            <div class="footer">
                <a href="PoliticasTer.php" style="color: white; text-decoration: none;">Políticas de Términos y Condiciones</a>
            </div>
        </div>

    </body>
</html>
