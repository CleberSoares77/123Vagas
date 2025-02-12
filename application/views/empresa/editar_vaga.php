<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Editar Vaga</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .form-box {
            max-width: 600px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form-box label {
            font-weight: bold;
        }
        .form-box input,
        .form-box textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-box button {
            padding: 10px 20px;
            border: none;
            background-color: #28a745;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-box a {
            padding: 10px 20px;
            background-color: #dc3545;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            margin-left: 10px;
        }
        .alert {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }
        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
    <div class="form-box">
        <h2>Editar Vaga</h2>
        
        <!-- Exibe mensagens de sucesso ou erro -->
        <?php if($this->session->flashdata('error')): ?>
          <div class="alert alert-error"><?= $this->session->flashdata('error'); ?></div>
        <?php endif; ?>
        <?php if($this->session->flashdata('success')): ?>
          <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
        <?php endif; ?>
        
        <form method="post" action="<?= base_url('empresa/update_vaga/'.$vaga->id); ?>" enctype="multipart/form-data">
            <!-- Campo Nome da Vaga -->
            <div>
                <label for="nome">Nome da Vaga:</label>
                <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($vaga->nome); ?>" required>
            </div>
            <!-- Campo Descrição -->
            <div>
                <label for="descricao">Descrição:</label>
                <textarea id="descricao" name="descricao" required><?= htmlspecialchars($vaga->descricao); ?></textarea>
            </div>
            <!-- Campo Imagem -->
            <div>
                <label for="imagem">Imagem:</label>
                <?php if(!empty($vaga->imagem)): ?>
                <div>
                    <img src="<?= base_url($vaga->imagem); ?>" alt="Imagem da vaga" style="max-width:200px;">
                </div>
                <?php endif; ?>
                <input type="file" id="imagem" name="imagem">
                <small>Deixe em branco se não quiser atualizar a imagem.</small>
            </div>
            <div style="margin-top: 15px;">
                <button type="submit">Atualizar Vaga</button>
                <a href="<?= base_url('empresa/lista_vagas'); ?>">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>
