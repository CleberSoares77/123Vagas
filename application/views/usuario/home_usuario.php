<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>SOSVagas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #f4f4f4;
    }

    .w3-container {
      width: 80%;
      max-width: 800px;
    }

    .vaga-card {
      width: 50%;
      margin-bottom: 20px;
      box-sizing: border-box;
    }

    .vaga-card img {
      width: 50%;
      height: auto;
    }

    .vaga-card .w3-container {
      padding: 15px;
      text-align: center;
    }

    .vaga-card h4 {
      margin-bottom: 10px;
    }

  </style>
</head>
<body>

  <div class="w3-container">
    <h2 style="text-align: center;">Vagas Cadastradas</h2>
    
    <?php if (!empty($vagas)) : ?>
      <div>
        <?php foreach ($vagas as $vaga) : ?>
          <div class="vaga-card w3-card">
            <img src="<?= base_url($vaga->imagem) ?>" alt="<?= $vaga->nome ?>">
            <div class="w3-container">
              <h4><b><?= $vaga->nome ?></b></h4>
              <p><?= $vaga->descricao ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php else : ?>
      <p style="text-align: center;">Nenhuma vaga cadastrada.</p>
    <?php endif; ?>

  </div>

</body>
</html>
