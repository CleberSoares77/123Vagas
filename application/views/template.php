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
	<p><a href="<?= base_url('login'); ?>">Login</a> | <a href="<?= base_url('cadastro-usuario');
	  ?>">Cadastro usuário</a> | <a href="<?= base_url('cadastro-empresa'); ?>">Cadastro empresa</a></p>

	<!-- CONTEÚDO -->
	<?= $contents; ?>
</div>

<script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>

</body>
</html>