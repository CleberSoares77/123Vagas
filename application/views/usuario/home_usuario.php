<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Diretório onde as imagens serão armazenadas
    $diretorioDestino = 'uploads/';
    
    // Certifique-se de que o diretório existe ou crie-o
    if (!is_dir($diretorioDestino)) {
        mkdir($diretorioDestino, 0777, true);
    }
    
    // Verifica se a imagem foi enviada sem erros
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
        $nomeImagem = $_FILES['imagem']['name'];
        $caminhoTemp = $_FILES['imagem']['tmp_name'];
        $caminhoFinal = $diretorioDestino . basename($nomeImagem);
        
        // Move o arquivo para o diretório de destino
        if (move_uploaded_file($caminhoTemp, $caminhoFinal)) {
            $titulo = htmlspecialchars($_POST['titulo']);
            $descricao = htmlspecialchars($_POST['descricao']);

            // Armazena as informações da vaga em um array para exibição
            $companies[] = [
                'name' => $titulo,
                'description' => $descricao,
                'image' => $caminhoFinal
            ];
        } else {
            echo "<p>Erro ao mover a imagem.</p>";
        }
    } else {
        echo "<p>Erro no envio da imagem.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Vagas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .card-img-top {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
<main role="main">
    <div class="container">
        <h5 class="mt-4">Adicionar Vagas</h5>
        <!-- Formulário para adicionar vagas -->
        <form action="" method="POST" enctype="multipart/form-data" class="mb-5">
            <div class="form-group">
                <label for="titulo">Título da Vaga</label>
                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título da vaga" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" name="descricao" id="descricao" rows="3" placeholder="Descrição da vaga" required></textarea>
            </div>
            <div class="form-group">
                <label for="imagem">Imagem</label>
                <input type="file" class="form-control-file" name="imagem" id="imagem" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Adicionar</button>
        </form>

        <div class="row">
            <!-- Exibição das vagas -->
            <?php if (!empty($companies)) { 
                foreach ($companies as $company) { ?>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="text-center"> <!-- Centralizando a imagem -->
                            <img class="card-img-top mx-auto" src="<?php echo $company['image']; ?>" alt="Company Image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $company['name']; ?></h5>
                            <p class="card-text"><?php echo $company['description']; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                                <small class="text-muted">Just now</small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } } else { ?>
                <p class="text-muted">Nenhuma vaga adicionada ainda.</p>
            <?php } ?>
        </div>
    </div>
</main>
</body>
</html>
