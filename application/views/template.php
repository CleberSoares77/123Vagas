<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.min.css'); ?>">
</head>
<body>

<div class="container">
    <!-- MENU -->
	<div class="d-flex justify-content-end mt-5">
    <a href="<?= base_url('login'); ?>" class="btn btn-primary mr-5">Login</a>
    <a href="<?= base_url('cadastro-usuario'); ?>" class="btn btn-success mx-5">Cadastro usuário</a>
    <a href="<?= base_url('cadastro-empresa'); ?>" class="btn btn-info ml-5">Cadastro empresa</a>
</div>


    <!-- CONTEÚDO -->
    <?= $contents; ?>
</div>

<script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>

</body>
</html>
