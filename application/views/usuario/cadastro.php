<div class="container">
    <h1>Informações do Usuário</h1>

    <style>
        /* Estilo para destacar os nomes dos campos */
        .highlight-label {
            color: #000000;
            /* Cor do texto destacado */
            font-weight: bold;
            /* Negrito para destaque */
        }

        .eye-icon {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>


    <div class="form-box">
        <?php if (isset($usuario)) : ?>
            <form method="post" action="<?= base_url('usuario/update/' . $usuario['id']); ?>">
            <?php else : ?>
                <form method="post" action="<?= base_url('usuario/cadastro'); ?>">
                <?php endif; ?>


                <div class="mb-3 col-12">
                    <label for="nome" class="highlight-label">Nome:</label>
                    <input type="text" id="nome" name="nome" value="<?= isset($usuario) ? $usuario["nome"] : "" ?>">
                </div>

                <div class="mb-3 col-12">
                    <label for="sobrenome" class="highlight-label">Sobrenome:</label>
                    <input type="text" id="sobrenome" name="sobrenome" value="<?= isset($usuario) ? $usuario["sobrenome"] : "" ?>">
                </div>

                <div class="mb-3 col-12">
                    <label for="contato" class="highlight-label">Contato:</label>
                    <input type="number" id="contato" name="contato" value="<?= isset($usuario) ? $usuario["contato"] : "" ?>">
                </div>

                <div class="mb-3 col-12">
                    <label for="email" class="highlight-label">Email:</label>
                    <input type="email" id="email" name="email" value="<?= isset($usuario) ? $usuario["email"] : "" ?>">
                </div>

                <div class="mb-3 col-12">
                    <label for="dataNasc" class="highlight-label">Data de Nascimento:</label>
                    <input type="date" id="dataNasc" name="dataNasc" value="<?= isset($usuario) ? $usuario["dataNasc"] : "" ?>">
                </div>

                <div class="mb-3 col-12">
                    <label for="genero" class="highlight-label">Gênero:</label>
                    <select id="genero" name="genero">
                        <option value="">Selecione</option>
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                        <option value="outro">Outro</option>
                    </select>
                </div>

                <div class="mb-3 col-12 position-relative">
                    <label for="senha" class="highlight-label">Senha:</label>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
                    <input type="password" id="senha" name="senha" value="<?= isset($usuario) ? $usuario["senha"] : "" ?>">
                    <img id="olho" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABDUlEQVQ4jd2SvW3DMBBGbwQVKlyo4BGC4FKFS4+TATKCNxAggkeoSpHSRQbwAB7AA7hQoUKFLH6E2qQQHfgHdpo0yQHX8T3exyPR/ytlQ8kOhgV7FvSx9+xglA3lM3DBgh0LPn/onbJhcQ0bv2SHlgVgQa/suFHVkCg7bm5gzB2OyvjlDFdDcoa19etZMN8Qp7oUDPEM2KFV1ZAQO2zPMBERO7Ra4JQNpRa4K4FDS0R0IdneCbQLb4/zh/c7QdH4NL40tPXrovFpjHQr6PJ6yr5hQV80PiUiIm1OKxZ0LICS8TWvpyyOf2DBQQtcXk8Zi3+JcKfNafVsjZ0WfGgJlZZQxZjdwzX+ykf6u/UF0Fwo5Apfcq8AAAAASUVORK5CYII="/>

                </div>

                <div class="link">
                    <button type="submit" class="btn btn-primary mr-5">Salvar</button>
                    <a href="<?= base_url() ?>usuario" class="btn btn-danger btn-xs"> Cancelar</a>
                </div>

                </form>
    </div>

    <script>
        $(document).ready(function() {
            var senha = $('#senha');
            var olho = $("#olho");

            olho.mousedown(function() {
                senha.attr("type", "text");
            });

            olho.mouseup(function() {
                senha.attr("type", "password");
            });

            // para evitar o problema de arrastar a imagem e a senha continuar exposta
            olho.mouseout(function() {
                senha.attr("type", "password");
            });
        });
    </script>