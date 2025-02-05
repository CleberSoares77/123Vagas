<!DOCTYPE html>
<html>
<title>SOSVagas</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
  .link {
    text-align: right;
    margin-top: 10px;
  }
</style>

<body>
  <div style="margin-left:8%">
    <div class="w3-container">
      <h2>Vagas Cadastradas</h2>
      <div class="w3-row-padding">
        <?php foreach ($vagas as $vaga): ?>
          <div class="w3-col m4">
            <div class="w3-card">
              <img src="<?= base_url($vaga->imagem) ?>" alt="<?= $vaga->nome ?>" style="width:100%">
              <div class="w3-container">
                <h4><b><?= $vaga->nome ?></b></h4>
                <p><?= $vaga->descricao ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</body>
</html>
