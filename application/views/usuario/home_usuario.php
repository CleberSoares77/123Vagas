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
      height: 70vh;
      margin: 0;
      background-color: #f4f4f4;
    }

    .w3-container {
      width: 80%;
      max-width: 800px;
    }

    .vaga-card {
      width: 100%;
      margin-bottom: 20px;
      box-sizing: border-box;
    }

    .vaga-card img {
      width: 70%;
      height: auto;
      cursor: pointer;
    }

    .vaga-card .w3-container {
      padding: 15px;
      text-align: center;
    }

    .vaga-card h4 {
      margin-bottom: 10px;
    }

    /* Estilo do modal */
    .modal {
      display: none; /* Escondido por padrão */
      position: fixed; /* Fica fixo na tela */
      z-index: 1; /* Fica por cima do conteúdo */
      left: 0;
      top: 0;
      width: 70%; /* Full width */
      height: 70%; /* Full height */
      overflow: auto; /* Se necessário, aparece a barra de rolagem */
      background-color: rgb(0, 0, 0); /* Cor de fundo */
      background-color: rgba(0, 0, 0, 0.9); /* Fundo preto com opacidade */
    }

    /* Estilo da imagem do modal */
    .modal-content {
      margin: 5% auto;
      display: block;
      max-width: 90%; /* Ajusta a largura da imagem */
      max-height: 80vh; /* Limita a altura da imagem */
      object-fit: contain; /* Ajusta a imagem para se adaptar à caixa sem distorcer */
    }

    /* Estilo para fechar o modal */
    .close {
      position: absolute;
      top: 15px;
      right: 35px;
      color: #f1f1f1;
      font-size: 40px;
      font-weight: bold;
      transition: 0.3s;
      cursor: pointer;
    }

    .close:hover,
    .close:focus {
      color: #bbb;
      text-decoration: none;
      cursor: pointer;
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
            <img src="<?= base_url($vaga->imagem) ?>" alt="<?= $vaga->nome ?>" onclick="openModal('modal-<?= $vaga->id ?>')">
            <div class="w3-container">
              <h4><b><?= $vaga->nome ?></b></h4>
              <p><?= $vaga->descricao ?></p>
            </div>
          </div>

          <!-- Modal de Imagem -->
          <div id="modal-<?= $vaga->id ?>" class="modal">
            <span class="close" onclick="closeModal('modal-<?= $vaga->id ?>')">&times;</span>
            <img class="modal-content" id="img-<?= $vaga->id ?>" src="<?= base_url($vaga->imagem) ?>" alt="<?= $vaga->nome ?>">
          </div>
        <?php endforeach; ?>
      </div>
    <?php else : ?>
      <p style="text-align: center;">Nenhuma vaga cadastrada.</p>
    <?php endif; ?>

  </div>

  <script>
    // Função para abrir o modal
    function openModal(modalId) {
      var modal = document.getElementById(modalId);
      modal.style.display = "block";
    }

    // Função para fechar o modal
    function closeModal(modalId) {
      var modal = document.getElementById(modalId);
      modal.style.display = "none";
    }

    // Fechar o modal se o usuário clicar fora da imagem
    window.onclick = function(event) {
      var modals = document.getElementsByClassName('modal');
      for (var i = 0; i < modals.length; i++) {
        if (event.target == modals[i]) {
          modals[i].style.display = "none";
        }
      }
    }
  </script>

</body>
</html>
