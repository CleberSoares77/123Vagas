<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela Principal</title>
  <!-- Adicione o link para o CSS do Chakra UI aqui -->
</head>

<body>
  <div style="max-width: 500px; margin: 20px auto;">
    <div style="background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
      <h1>Olá, Seja bem-vindo(a)</h1>
      <p>Sistema de divulgação de vagas de empregos na região do médio Vale do Jequitinhonha.</p>
      <p>Caso sua intenção seja fornecer oportunidades de empregos:</p>
      <a href="<?php echo base_url('dashboard/loginEmpresa'); ?>" style="text-decoration: none;">
        <button style="background-color: #3182ce; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; margin-right: 10px;">
          <strong>Cadastro Empresa</strong>
        </button>
      </a>
      <p>Está procurando uma oportunidade de emprego:</p>
      <a href="<?php echo base_url('dashboard/login'); ?>" style="text-decoration: none;">
        <button style="background-color: #38a169; color: #fff; border: none; padding: 10px 20px; border-radius: 5px;">
          <strong>Cadastro Usuário</strong>
        </button>
      </a>
    </div>
  </div>
</body>

</html>
