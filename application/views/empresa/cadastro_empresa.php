<div class="container">
    <h1>Informações da Empresa</h1>
    <div class="form-box">
        <?php if (isset($empresa)) : ?>
            <form method="post" action="<?= base_url('empresa/update_empresa/' . $empresa['id']); ?>">
            <?php else : ?>
                <form method="post" action="<?= base_url('empresa/cadastro_empresa'); ?>">
                <?php endif; ?>

                <div class="mb-3 col-12">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" value="<?= isset($empresa) ? $empresa["nome"] : "" ?>">
                </div>

                <div class="mb-3 col-12">
                    <label for="cnpj">CNPJ:</label>
                    <input type="text" id="cnpj" name="cnpj" value="<?= isset($empresa) ? $empresa["cnpj"] : "" ?>">
                </div>

                <div class="mb-3 col-12">
                    <label for="contato">Contato:</label>
                    <input type="number" id="contato" name="contato" value="<?= isset($empresa) ? $empresa["contato"] : "" ?>">
                </div>

                <div class="mb-3 col-12">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?= isset($empresa) ? $empresa["email"] : "" ?>">
                </div>

                <div class="mb-3 col-12">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" value="<?= isset($empresa) ? $empresa["senha"] : "" ?>">
                </div>

                <div class="link">
                    <button type="submit" class="btn btn-primary mr-5">Salvar</button>
                    <a href="<?= base_url() ?>empresa" class="btn btn-danger btn-xs"> Cancelar</a>
                </div>



                </form>
    </div>
</div>