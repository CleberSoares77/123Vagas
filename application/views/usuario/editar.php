<div class="container">
        <h1>Editar dados de usuário</h1>
        <div class="form-box">
            <form method="post" action="<?= base_url('usuario'); ?>">
                <div class="mb-3 col-12">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" >
                </div>

                <div class="mb-3 col-12">
                    <label for="sobrenome">Sobrenome:</label>
                    <input type="text" id="sobrenome" name="sobrenome" >
                </div>

                <div class="mb-3 col-12">
                    <label for="contato">Contato:</label>
                    <input type="number" id="contato" name="contato" >
                </div>

                <div class="mb-3 col-12">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" >
                </div>

                <div class="mb-3 col-12">
                    <label for="dataNasc">Data de Nascimento:</label>
                    <input type="date" id="dataNasc" name="dataNasc" >
                </div>

                <div class="mb-3 col-12">
                    <label for="genero">Gênero:</label>
                    <select id="genero" name="genero" >
                        <option value="">Selecione</option>
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                        <option value="outro">Outro</option>
                    </select>
                </div>

                <div class="mb-3 col-12">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" >
                </div>

                <div class="link">
                    <button type="submit" class="btn btn-primary mr-5">Salvar</button>
                </div>

            </form>
        </div>
    </div>