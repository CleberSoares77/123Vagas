<?php
// Verificar se a requisição é do tipo POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Verificar se os campos estão presentes
    if (isset($_POST['titulo'], $_POST['descricao'], $_FILES['imagem'])) {
        
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];

        // Processar o upload da imagem
        $imagem = $_FILES['imagem'];
        $imagemNome = $imagem['name'];
        $imagemTemp = $imagem['tmp_name'];
        $imagemErro = $imagem['error'];

        // Definir o diretório de destino para a imagem
        $diretorioDestino = 'uploads/';
        
        // Verificar se o diretório existe, caso contrário, criar
        if (!is_dir($diretorioDestino)) {
            mkdir($diretorioDestino, 0777, true);
        }

        // Verificar se não houve erro no upload da imagem
        if ($imagemErro === 0) {
            // Gerar um nome único para o arquivo
            $imagemNovoNome = uniqid('', true) . '.' . pathinfo($imagemNome, PATHINFO_EXTENSION);
            $imagemDestino = $diretorioDestino . $imagemNovoNome;

            // Mover a imagem para o diretório de destino
            if (move_uploaded_file($imagemTemp, $imagemDestino)) {
                echo "Vaga adicionada com sucesso!";
                echo "<br>Título: " . htmlspecialchars($titulo);
                echo "<br>Descrição: " . htmlspecialchars($descricao);
                echo "<br>Imagem salva como: " . $imagemNovoNome;
            } else {
                echo "Erro ao mover a imagem.";
            }
        } else {
            echo "Erro no upload da imagem.";
        }

    } else {
        echo "Todos os campos devem ser preenchidos.";
    }
} else {
    echo "Método inválido.";
}
?>
