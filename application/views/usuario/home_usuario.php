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

  /* Estilo para as imagens no slideshow */
  .mySlides {
    display: none;
  }

  .w3-container h4 {
    margin-top: 10px;
    font-size: 20px;
    text-align: center;
  }
</style>

<body>
  <div class="w3-container">
    <h2>Vagas Cadastradas</h2>
    
    <?php if (!empty($vagas)) : ?>
    <div class="w3-content w3-display-container">
      <?php foreach ($vagas as $vaga) : ?>
        <div class="mySlides w3-display-container">
            <img src="<?= base_url($vaga->imagem) ?>" alt="<?= $vaga->nome ?>" style="width:100%">
            <div class="w3-container">
                <h4><b><?= $vaga->nome ?></b></h4>
                <p><?= $vaga->descricao ?></p>
            </div>
        </div>
      <?php endforeach; ?>
    </div>
    <?php else : ?>
        <p>Nenhuma vaga cadastrada.</p>
    <?php endif; ?>
    
  </div>

  <script>
    // Função do slideshow para exibir as vagas
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var slides = document.getElementsByClassName("mySlides");
      for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      slides[slideIndex-1].style.display = "block";  
      setTimeout(showSlides, 3000); // Muda a imagem a cada 3 segundos
    }
  </script>
</body>
</html>
