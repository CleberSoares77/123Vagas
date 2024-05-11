<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Senha</title>
</head>
<body>
    <h1>Alterar Senha</h1>
    <p>Email: <?php echo $email; ?></p>
    <form action="http://localhost/tcc/usuario/nova_senha" method="POST">
        <label for="novaSenha">Nova Senha:</label>
        <input type="password" id="novaSenha" name="novaSenha" required><br><br>
        
        <label for="confirmarSenha">Confirmar Senha:</label>
        <input type="password" id="confirmarSenha" name="confirmarSenha" required><br><br>
        
        <input type="submit" value="Alterar Senha">
    </form>
</body>
</html>
