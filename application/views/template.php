<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.min.css'); ?>">
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
    <!-- MENU -->
	<div class="d-flex justify-content-end mt-5 mb-5">
    <a href="<?= base_url('login'); ?>" class="btn btn-primary mr-5">Login</a>
    <a href="<?= base_url('usuario/cadastro'); ?>" class="btn btn-success mx-5">Cadastro usuário</a>
    <a href="<?= base_url('empresa/cadastro_empresa'); ?>" class="btn btn-secondary">Cadastro empresa</a>
</div>


    <!-- CONTEÚDO -->
    <?= $contents; ?>
</div>

<script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>

</body>
</html>
