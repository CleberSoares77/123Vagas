<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="login-container">
            <div class="mb-3 col">
                <h1>Login Empresa</h1>
            </div>

            <form action="<?php echo base_url('dashboard/homeEmpresa'); ?>" method="post" class="row"> <!-- Definindo a action para redirecionar para outra página -->
                <div class="mb-3 col-12">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Digite o e-mail" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3 col-12">
                    <label for="exampleInputCnpj" class="form-label">CNPJ</label>
                    <input type="text" class="form-control" id="exampleInputCnpj" name="cnpj" placeholder="Digite o CNPJ" required>
                </div>
                <div class="mb-3 col-12">
                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Digite a senha" required>
                </div>
                <div class="mb-3 col">
                    <button type="submit" class="btn btn-primary mb-2">Entrar</button>
                </div>
                <div class="mb-3 col">
                    <a href="<?php echo base_url('dashboard/formEmpresa'); ?>" class="btn btn-success">Criar Conta</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>