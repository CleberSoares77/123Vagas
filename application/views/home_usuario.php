<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Home</title>
    <style>
        /* Estilos CSS */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .content {
            padding: 20px;
        }
        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .debug-info {
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Tela Home</h1>
    </div>
    <div class="content">
        <h2>Conteúdo da Tela</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget justo sed justo luctus finibus.</p>
        <div class="debug-info">
            <h3>Informações de Debug</h3>
            <p>Algumas informações de debug aqui...</p>
        </div>
        <button onclick="showDebugInfo()">Mostrar Debug</button>
    </div>
    <div class="footer">
        <p>Rodapé da Tela Home</p>
    </div>

    <script>
        function showDebugInfo() {
            var debugInfo = document.querySelector('.debug-info');
            debugInfo.style.display = 'block';
        }
    </script>
</body>
</html>
