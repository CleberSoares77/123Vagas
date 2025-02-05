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

  <!-- Page Content -->
  <div style="margin-left:8%">
    <div class="w3-container">
      <h2>Cadastrar Nova Vaga</h2>

      <!-- Exibe mensagens de sucesso ou erro -->
      <?php if ($this->session->flashdata('success')): ?>
        <div class="w3-panel w3-green">
          <p><?php echo $this->session->flashdata('success'); ?></p>
        </div>
      <?php endif; ?>

      <?php if ($this->session->flashdata('error')): ?>
        <div class="w3-panel w3-red">
          <p><?php echo $this->session->flashdata('error'); ?></p>
        </div>
      <?php endif; ?>

      <form action="<?php echo base_url('Empresa/data'); ?>" method="POST" enctype="multipart/form-data">
        <div class="w3-section">
          <label for="nome"><b>Nome da Vaga</b></label>
          <input class="w3-input w3-border" type="text" name="nome" required>
        </div>
        <div class="w3-section">
          <label for="descricao"><b>Descrição da Vaga</b></label>
          <textarea class="w3-input w3-border" name="descricao" rows="3" required></textarea>
        </div>
        <div class="w3-section">
          <label for="imagem"><b>Imagem da Vaga</b></label>
          <input class="w3-input w3-border" type="file" name="imagem" accept="image/*" required>
        </div>
        <button type="submit" class="w3-button w3-green">Cadastrar Vaga</button>
      </form>
    </div>

  </div>
</body>

</html>
