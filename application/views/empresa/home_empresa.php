<!DOCTYPE html>
<html>
<title>SOSVagas</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
  .link {
    text-align: right;
    /* Alinha o link "Voltar" à direita */
    margin-top: 10px;
  }
</style>

<body>

  <!-- Sidebar -->
  <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:8%">
    <h3 class="w3-bar-item">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
      </svg>
      Menu
    </h3>
    <a href="/tcc/empresa/vagas" class="w3-bar-item w3-button">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="fas" style="font-size:24px" viewBox="0 0 16 16">
        <path d="M12.146.854a.5.5 0 0 1 .708 0l2.292 2.292a.5.5 0 0 1 0 .708l-9.292 9.292a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l9.292-9.292zM11.207 3L13 4.793 14.293 3.5 12.5 1.707 11.207 3zM10.5 3.707L2 12.207V14h1.793l8.5-8.5L10.5 3.707z" />
      </svg>
      Vagas
    </a>

    <a href="/tcc/empresa" class="w3-bar-item w3-button">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0" />
        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z" />
      </svg>
      Usuário
    </a>
    <a href="/tcc" class="w3-bar-item w3-button">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0z" />
        <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708z" />
      </svg>
      Sair
    </a>

  </div>

  <!-- Page Content -->
  <div style="margin-left:8%">
    <style>
      .search-icon {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
      }
    </style>

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
    </div>

    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Oportunidades de Emprego no Jequi</h1>
          <p class="lead text-muted">ATENÇÃO! As vagas disponíveis são de totais responsabilidade do usuário que responde pela vaga.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <!-- Card Loop -->
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
            <!-- End Card Loop -->
          </div>
        </div>
      </div>
    </main>

    <footer class="container">
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
      window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!--<img src="img_car.jpg" alt="Car" style="width:100%">--->

    <div class="w3-container">

    </div>

  </div>


</body>

</html>