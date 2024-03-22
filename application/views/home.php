<!DOCTYPE html>
<html>
<head>
  <title>W3.CSS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    .w3-container.w3-teal h1 {
      text-align: center;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:7%">
    <h3 class="w3-bar-item">Menu</h3>
    <a href="#" class="w3-bar-item w3-button">Inicio</a>
    <a href="#" class="w3-bar-item w3-button">Painel</a>
    <a href="#" class="w3-bar-item w3-button">Pedidos</a>
    <a href="#" class="w3-bar-item w3-button">Itens</a>
    <a href="#" class="w3-bar-item w3-button">Usuário</a>
  </div>

  <!-- Page Content -->
  <div style="margin-left:7%">

    <div class="w3-container w3-teal">
      <h1>SOSVagas</h1>
    </div>

    <main role="main">
      <!-- Principal jumbotron, para a principal mensagem de marketing ou call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Olá, mundo!</h1>
          <p>Olá, sou Cléber</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Saiba mais &raquo;</a></p>
        </div>
      </div>

      <div class="container">
        <!-- Exemplo de linha de colunas -->
        <div class="row">
          <div class="col-md-4">
            <h2>Título</h2>
            <p><a class="btn btn-secondary" href="#" role="button">Ver detalhes &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Título</h2>
            <p><a class="btn btn-secondary" href="#" role="button">Ver detalhes &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Título</h2>
            <p><a class="btn btn-secondary" href="#" role="button">Ver detalhes &raquo;</a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

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
