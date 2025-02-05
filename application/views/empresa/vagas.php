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
      <form action="/cadastrarVaga" method="POST" enctype="multipart/form-data">
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