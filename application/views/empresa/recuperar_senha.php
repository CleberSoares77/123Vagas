<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>
</head>
<body>
    <h2>Recuperação de Senha - Empresa</h2>

    <?php if ($this->session->flashdata('error')): ?>
        <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>

    <?php if ($this->session->flashdata('success')): ?>
        <p style="color: green;"><?php echo $this->session->flashdata('success'); ?></p>
    <?php endif; ?>

    <form method="POST" action="<?php echo base_url('empresa/recuperar_senha'); ?>">
        <label for="email">Digite seu e-mail:</label>
        <input type="email" name="email" required>
        <br><br>
        <input type="submit" value="Validar e-mail">
    </form>

    <br>
    <a href="<?php echo base_url('empresa/login'); ?>">Voltar ao login</a>
</body>
</html>
