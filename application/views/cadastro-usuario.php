<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #49a2ab;
            color: black;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 40px;
            position: relative;
        }

        .form-box {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            position: relative;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            text-align: left;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: calc(100% - 12px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            display: inline-block;
        }

        input[type="date"] {
            width: calc(100% - 12px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            display: inline-block;
        }

        button[type="submit"] {
            background-color: #95a694;
            color: #010300;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            font-size: 18px;
            cursor: pointer;
            display: block;
            float: left;
            /* Botão flutuante à esquerda */
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .link {
            margin-top: 20px;
            font-size: 16px;
            text-align: right;
            /* Alinha o texto do link à direita */
        }


        .links {
            margin-top: 20px;
            font-size: 16px;
            text-align: left;
            /* Alinha o texto do link à direita */
        }

        .link a {
            color: #007bff;
            text-decoration: none;
            margin-left: 20px;
            /* Adiciona espaço entre os links */
        }

        .back-button {
            position: absolute;
            bottom: 10px;
            right: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Cadastro de Usuário</h1>
        <div class="form-box">
            <form>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="sobrenome">Sobrenome:</label>
                <input type="text" id="sobrenome" name="sobrenome" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="dataNascimento">Data de Nascimento:</label>
                <input type="date" id="dataNascimento" name="dataNascimento" required>

                <label for="genero">Gênero:</label>
                <select id="genero" name="genero" required>
                    <option value="">Selecione</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>

                <label for="confirmarSenha">Confirmar Senha:</label>
                <input type="password" id="confirmarSenha" name="confirmarSenha" required>

                <button type="submit">Cadastrar</button>


                <div class="link">
                    <a href="/">Voltar</a>
                </div>


            </form>

            
            <div class="links">
                    <a href="esqueceu-senha">Esqueceu a Senha?</a>
                </div>

        </div>

    </div>
</body>

</html>