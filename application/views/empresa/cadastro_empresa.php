<div class="container">
    <h1>Informações da Empresa</h1>

    <style>
            /* Estilo para destacar os nomes dos campos */
    .highlight-label {
        color: #000000; /* Cor do texto destacado */
        font-weight: bold; /* Negrito para destaque */
    }
    </style>

    <div class="form-box">
        <?php if (isset($empresa)) : ?>
            <form method="post" action="<?= base_url('empresa/update_empresa/' . $empresa['id']); ?>">
            <?php else : ?>
                <form method="post" action="<?= base_url('empresa/cadastro_empresa'); ?>">
                <?php endif; ?>

                <div class="mb-3 col-12">
                    <label for="nome" class="highlight-label">Nome:</label>
                    <input type="text" id="nome" name="nome" value="<?= isset($empresa) ? $empresa["nome"] : "" ?>">
                </div>

                <div class="mb-3 col-12">
                    <label for="cnpj" class="highlight-label">CNPJ:</label>
                    <input type="text" id="cnpj" name="cnpj" value="<?= isset($empresa) ? $empresa["cnpj"] : "" ?>">
                </div>

                <div class="mb-3 col-12">
                    <label for="contato" class="highlight-label">Contato:</label>
                    <input type="number" id="contato" name="contato" value="<?= isset($empresa) ? $empresa["contato"] : "" ?>">
                </div>

                <div class="mb-3 col-12">
                    <label for="email" class="highlight-label">Email:</label>
                    <input type="email" id="email" name="email" value="<?= isset($empresa) ? $empresa["email"] : "" ?>">
                </div>

                <div class="mb-3 col-12">
                    <label for="senha" class="highlight-label">Senha:</label>
                    <input type="password" id="senha" name="senha" value="<?= isset($empresa) ? $empresa["senha"] : "" ?>">
                </div>

                <div class="link">
                    <button type="submit" class="btn btn-primary mr-5">Salvar</button>
                    <a href="<?= base_url() ?>empresa" class="btn btn-danger btn-xs"> Cancelar</a>
                </div>



                </form>
    </div>
</div>