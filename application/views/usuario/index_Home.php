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
    <a href="/tcc/usuario/home_usuario" class="w3-bar-item w3-button">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="fas" style="font-size:24px" viewBox="0 0 16 16">
    <path d="M12.146.854a.5.5 0 0 1 .708 0l2.292 2.292a.5.5 0 0 1 0 .708l-9.292 9.292a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l9.292-9.292zM11.207 3L13 4.793 14.293 3.5 12.5 1.707 11.207 3zM10.5 3.707L2 12.207V14h1.793l8.5-8.5L10.5 3.707z" />
  </svg>
  Vagas
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

    <div class="w3-container w3-teal">
      <!--<h1>SOSVagas</h1>-->

      <form action="/recuperar-senha" method="POST">
        <div class="link">
        </div>
      </form>

    </div>

    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Olá, seja muito bem-vindo! Você está em vagas no Jequi</h1>
          <p class="lead text-muted"> Se você parou por aqui, provavelmente procura um emprego! No seu lado superior esquerdo está o que procura. Boa sorte! .</p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">

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