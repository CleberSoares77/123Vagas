<div class="container register" style="background-color: black; color: white; padding: 20px;">
    <h1>Informações da Empresa</h1>

    <style>
        /* Estilo para destacar os nomes dos campos */
        .highlight-label {
            color: #FFFFFF; /* Cor do texto destacado */
            font-weight: bold; /* Negrito para destaque */
        }

        .eye-icon {
            cursor: pointer;
        }

        .input-group-append {
            margin-left: 10px;
        }

        .form-control {
            background-color: #ffffff; /* cor dos campos */
            color: black;
        }

        .form-control:focus {
            background-color: #004085; /* cor dentro dos campos */
            color: white;
        }

        .input-group-text {
            background-color: green;
            color: greenyellow; /* cor do olho */
        }

        .btn-primary {
            background-color: #007bff; /* cor do login */
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #004085;
            border-color: #004085;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        
        .register {
            background: -webkit-linear-gradient(left, #3931af, #00c6ff); /* cores do conteiner */
            margin-top: 3%;
            padding: 3%;
            border-radius: 2.5rem;
        }

    </style>

<div class="form-box">
  <?php if (isset($empresa)) : ?>
    <form method="post" action="<?= base_url('empresa/update_empresa/' . $empresa['id']); ?>">
  <?php else : ?>
    <form method="post" action="<?= base_url('empresa/cadastro_empresa'); ?>">
  <?php endif; ?>

    <!-- Campo Nome -->
    <div class="mb-3 col-6">
      <label for="nome" class="highlight-label">Nome:</label>
      <input type="text" id="nome" name="nome" class="form-control"
             value="<?= isset($empresa) ? $empresa["nome"] : "" ?>"
             required
             pattern="[A-Za-zÀ-ÿ\s]{2,}"
             title="Digite um nome válido (apenas letras e espaços, no mínimo 2 caracteres).">
    </div>

<!-- Campo CNPJ -->
<div class="mb-3 col-6">
  <label for="cnpj" class="highlight-label">CNPJ:</label>
  <input type="text" id="cnpj" name="cnpj" class="form-control"
         value="<?= isset($empresa) ? $empresa["cnpj"] : "" ?>"
         required
         pattern="^[0-9]{2}\.[0-9]{3}\.[0-9]{3}\/[0-9]{4}\-[0-9]{2}$"
         title="Digite um CNPJ válido no formato 00.000.000/0000-00.">
</div>


    <!-- Campo Contato -->
    <div class="mb-3 col-6">
      <label for="contato" class="highlight-label">Contato:</label>
      <input type="number" id="contato" name="contato" class="form-control"
             value="<?= isset($empresa) ? $empresa["contato"] : "" ?>"
             required
             min="1000000000"
             title="Digite um número de contato válido.">
    </div>

    <!-- Campo Email -->
    <div class="mb-3 col-6">
      <label for="email" class="highlight-label">Email:</label>
      <input type="email" id="email" name="email" class="form-control"
             value="<?= isset($empresa) ? $empresa["email"] : "" ?>"
             required
             title="Digite um email válido.">
    </div>

    <!-- Campo Senha -->
    <div class="mb-3 col-6 position-relative">
      <label for="senha" class="highlight-label">Senha:</label>
      <div class="input-group">
        <input type="password" id="senha" name="senha" class="form-control"
               value="<?= isset($empresa) ? $empresa["senha"] : "" ?>"
               required
               minlength="6"
               title="A senha deve ter no mínimo 6 caracteres.">
        <div class="input-group-append">
          <span class="input-group-text">
            <i id="olho" class="fa fa-eye-slash eye-icon" onclick="togglePassword('senha')"></i>
          </span>
        </div>
      </div>
    </div>

    <div class="link">
      <button type="submit" class="btn btn-primary mr-5">Salvar</button>
      <a href="<?= base_url() ?>empresa" class="btn btn-danger btn-xs">Cancelar</a>
    </div>
  </form>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script>
        function togglePassword(id) {
            var passwordField = document.getElementById(id);
            var showPasswordIcon = document.getElementById('olho');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                showPasswordIcon.classList.remove('fa-eye-slash');
                showPasswordIcon.classList.add('fa-eye');
            } else {
                passwordField.type = 'password';
                showPasswordIcon.classList.remove('fa-eye');
                showPasswordIcon.classList.add('fa-eye-slash');
            }
        }

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
</div>
