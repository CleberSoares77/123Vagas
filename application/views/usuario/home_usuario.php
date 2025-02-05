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
  <div class="w3-container">
    <h2>Vagas Cadastradas</h2>
    <?php if (!empty($vagas)) : ?>
      <div class="w3-row-padding">
        <?php foreach ($vagas as $vaga) : ?>
          <div class="w3-col m4">
            <div class="w3-card">
              <img src="<?= base_url($vaga->imagem) ?>" alt="<?= htmlspecialchars($vaga->titulo) ?>" style="width:100%">
              <div class="w3-container">
                <h4><b><?= htmlspecialchars($vaga->titulo) ?></b></h4>
                <p><?= nl2br(htmlspecialchars($vaga->descricao)) ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php else : ?>
      <p>Nenhuma vaga cadastrada.</p>
    <?php endif; ?>
  </div>
</body>
</html>
