<div class="container">
    <h1>Informações do Usuário</h1>
    <div class="form-box">
        <?php if (isset($usuario)) : ?>
            <form method="post" action="<?= base_url('usuario/update/' . $usuario['id']); ?>">
            <?php else : ?>
                <form method="post" action="<?= base_url('usuario/cadastro'); ?>">
                <?php endif; ?>


                <div class="mb-3 col-12">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" value="<?= isset($usuario) ? $usuario["nome"] : "" ?>">
                </div>

                <div class="mb-3 col-12">
                    <label for="sobrenome">Sobrenome:</label>
                    <input type="text" id="sobrenome" name="sobrenome" value="<?= isset($usuario) ? $usuario["sobrenome"] : "" ?>">
                </div>

                <div class="mb-3 col-12">
                    <label for="contato">Contato:</label>
                    <input type="number" id="contato" name="contato" value="<?= isset($usuario) ? $usuario["contato"] : "" ?>">
                </div>

                <div class="mb-3 col-12">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?= isset($usuario) ? $usuario["email"] : "" ?>">
                </div>

                <div class="mb-3 col-12">
                    <label for="dataNasc">Data de Nascimento:</label>
                    <input type="date" id="dataNasc" name="dataNasc" value="<?= isset($usuario) ? $usuario["dataNasc"] : "" ?>">
                </div>

                <div class="mb-3 col-12">
                    <label for="genero">Gênero:</label>
                    <select id="genero" name="genero">
                        <option value="">Selecione</option>
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                        <option value="outro">Outro</option>
                    </select>
                </div>

                <div class="mb-3 col-12">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" value="<?= isset($usuario) ? $usuario["senha"] : "" ?>">
                </div>

                <div class="link">
                    <button type="submit" class="btn btn-primary mr-5">Salvar</button>
                    <a href="<?= base_url() ?>usuario" class="btn btn-danger btn-xs"> Cancelar</a>
                </div>

                </form>
    </div>
</div>