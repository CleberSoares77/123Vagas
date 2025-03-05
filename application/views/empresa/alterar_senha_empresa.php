<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Senha</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin-top: 50px;
        }
        .container {
            background: white;
            width: 40%;
            margin: auto;
            padding: 20px;
            box-shadow: 0px 0px 10px gray;
            border-radius: 10px;
        }
        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            background: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .error {
            color: red;
            font-weight: bold;
        }
        .success {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Alterar Senha</h2>

        <!-- Exibir mensagens de sucesso ou erro -->
        <?php if ($this->session->flashdata('success')): ?>
            <p class="success"><?php echo $this->session->flashdata('success'); ?></p>
        <?php elseif ($this->session->flashdata('error')): ?>
            <p class="error"><?php echo $this->session->flashdata('error'); ?></p>
        <?php endif; ?>

        <form action="<?php echo base_url('usuario/atualizar_senha'); ?>" method="POST">
            <input type="hidden" name="email" value="<?php echo isset($email) ? $email : ''; ?>">

            <label for="novaSenha">Nova Senha:</label>
            <input type="password" id="novaSenha" name="novaSenha" required>

            <label for="confirmarSenha">Confirmar Senha:</label>
            <input type="password" id="confirmarSenha" name="confirmarSenha" required>

            <input type="submit" class="btn" value="Alterar Senha">
        </form>
    </div>
</body>
</html>
