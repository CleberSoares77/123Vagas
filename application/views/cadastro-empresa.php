<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        .link {
            margin-top: 20px;
            font-size: 16px;
            text-align: right;
            /* Alinha o texto do link à direita */
        }

        input {
            width: 40%; /* Alterado para ocupar 100% da largura da div */
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            display: inline-block;
        }

    </style>
</head>

<body>
    <div class="container">
        <h1>Cadastro de Empresa</h1>
        <div class="form-group">
            <form>
                <div class="mb-3 col-12">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
                </div>

                <div class="mb-3 col-12">
                <label for="cnpj">CNPJ:</label>
                <input type="text" id="cnpj" name="cnpj" required>
                </div>

                <div class="mb-3 col-12">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                </div>

                <div class="mb-3 col-12">
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" required>
                </div>

                <div class="mb-3 col-12">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required>
                </div>

                <div class="mb-3 col-12">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
                </div>

                <div class="mb-3 col-12">
                <label for="confirmarSenha">Confirmar Senha:</label>
                <input type="password" id="confirmarSenha" name="confirmarSenha" required>
                </div>

                <div class="link">
                        <button type="submit" class="btn btn-primary mr-5">Cadastrar</button>
                </div>

            </form>

            <div class="links">
                <a href="esqueceuSenha">Esqueceu a Senha?</a>
            </div>
        </div>
    </div>
</body>

</html>
