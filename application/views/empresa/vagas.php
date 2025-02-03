<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <title>Vagas</title>
  <style>
    table {
      border-collapse: collapse;
      width: 80%;
    }

    th,
    td {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
    }
  </style>
</head>

<body>
  <div class="w3-container">
    <h2>Cadastrar Nova Vaga</h2>
    <form action="/tcc/empresa/cadastrar-vaga" method="POST" enctype="multipart/form-data">
      @csrf <!-- Adicione isso se estiver usando Laravel para proteção CSRF -->
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

    <?php
    // Exemplo de um array de empresas com imagens e informações
    $companies = [
      ['image' => 'c:\Users\clebe\Downloads/Imagem do WhatsApp de 2024-08-09 à(s) 13.33.20_6768d331.jpg', 'name' => 'Vaga A', 'description' => 'Descrição da Vaga A'],
      ['image' => 'uploads/vaga_b.jpg', 'name' => 'Vaga B', 'description' => 'Descrição da Vaga B'],
      ['image' => 'uploads/vaga_c.jpg', 'name' => 'Vaga C', 'description' => 'Descrição da Vaga C'],
      ['image' => 'uploads/vaga_d.jpg', 'name' => 'Vaga D', 'description' => 'Descrição da Vaga D'],
      ['image' => 'uploads/vaga_e.jpg', 'name' => 'Vaga E', 'description' => 'Descrição da Vaga E'],
      ['image' => 'uploads/vaga_f.jpg', 'name' => 'Vaga F', 'description' => 'Descrição da Vaga F'],
    ];

    // Laço para exibir as empresas
    foreach ($companies as $company) {
    ?>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <div class="text-center"> <!-- Centralizando a imagem -->
            <img class="card-img-top mx-auto" src="<?php echo $company['image']; ?>" alt="Imagem da empresa">
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $company['name']; ?></h5>
            <p class="card-text"><?php echo $company['description']; ?></p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
              </div>
              <small class="text-muted">9 mins</small>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</body>

</html>