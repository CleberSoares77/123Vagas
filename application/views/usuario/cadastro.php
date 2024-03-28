<div class="container">
        <h1>Cadastro de Usuário</h1>
        <div class="form-box">
            <form method="post" action="<?= base_url('usuario/cadastro'); ?>">
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

                <div class="mb-3 col-12">
                    <label for="confirmaSenha">Confirmar Senha:</label>
                    <input type="password" id="confirmaSenha" name="confirmaSenha" >
                </div>

                <div class="link">
                    <button type="submit" class="btn btn-primary mr-5">Cadastrar</button>
                </div>

                <div>
                    <div class="links">
                        <a href="esqueceu-senha">Esqueceu a Senha?</a>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('cadastro-usuario').addEventListener('submit', function(event) {
                event.preventDefault(); // Evita o envio do formulário

                // Verifica se a senha e a confirmação de senha são iguais
                var senha = document.getElementById('senha').value;
                var confirmaSenha = document.getElementById('confirmaSenha').value;

                if (senha !== confirmaSenha) {
                    alert('As senhas não coincidem. Por favor, verifique.');
                    return;
                }

                // Simula o cadastro (pode ser substituído pelo código real de cadastro no backend)
                setTimeout(function() {
                    alert('Usuário cadastrado com sucesso!'); // Exibe a mensagem de sucesso
                    window.location.href = '<?= base_url('login'); ?>'; // Redireciona para a tela de login
                }, 1000); // Simula um atraso de 1 segundo (1000 milissegundos) para a mensagem aparecer
            });
        });
    </script>