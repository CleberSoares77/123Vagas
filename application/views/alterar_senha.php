<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Senha</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #007bff, #6610f2);
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }

        h1 {
            font-size: 22px;
            color: #333;
            margin-bottom: 15px;
        }

        p {
            font-size: 14px;
            color: #555;
            margin-bottom: 10px;
        }

        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background: #007bff;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background: #0056b3;
        }

        .back-link {
            display: block;
            margin-top: 10px;
            font-size: 14px;
            color: #007bff;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Alterar Senha</h1>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        
        <form action="http://localhost/tcc/usuario/nova_senha" method="POST">
            <input type="password" id="novaSenha" name="novaSenha" placeholder="Nova Senha" required>
            <input type="password" id="confirmarSenha" name="confirmarSenha" placeholder="Confirmar Senha" required>
            <button type="submit" class="btn">Alterar Senha</button>
        </form>

        <a href="/tcc" class="back-link">Voltar</a>
    </div>
</body>
</html>
