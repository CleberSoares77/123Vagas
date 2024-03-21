<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 600px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
            color: #333;
        }
        
        p {
            margin-top: 20px;
            text-align: center;
            color: #666;
        }
        
        form {
            margin-top: 20px;
            text-align: center;
        }
        
        input[type="email"] {
            width: 300px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
            box-sizing: border-box;
        }
        
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 3px;
        }
        
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h1>Recuperação de Senha</h1>
        <p>Digite seu endereço de e-mail</p>
        <form action="/recuperar-senha" method="POST">
            <input type="email" name="email" placeholder="Seu endereço de e-mail" required>
            <br>
            <input type="submit" value="Enviar">

            
            <div class="link">
                    <a href="/">Voltar</a>
                </div>
        </form>
    </div>
</body>
</html>
