<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btnContactSubmit {
            width: 50%;
            border-radius: 1rem;
            padding: 1.5%;
            color: blue;
            background-color: white;
            border: 1px solid blue;
            cursor: pointer;
            margin-right: 6%;
            margin-top: 4%;
        }

        .register .nav-tabs .nav-link:hover {
            border: none;
        }

        .text-align {
            padding: 10%;
            margin-left: 30%;
        }

        .form-new {
            margin-right: 22%;
            margin-left: 20%;
        }

        .register-heading {
            margin-left: 21%;
            margin-bottom: 10%;
            color: #e9ecef;
        }

        .register-heading h1 {
            margin-left: 21%;
            margin-bottom: 10%;
            color: #e9ecef;
        }

        .btnLoginSubmit {
            border: none;
            padding: 2%;
            width: 25%;
            cursor: pointer;
            background: #29abe2;
            color: #fff;
        }

        .btnForgetPwd {
            cursor: pointer;
            margin-right: 5%;
            color: #f8f9fa;
        }

        .register {
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            margin-top: 3%;
            padding: 3%;
            border-radius: 2.5rem;
        }

        .nav-tabs .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container register">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Usuário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Empresa</a>
                    </li>
                </ul>
                <div class="tab-content" id="Tela_Login">
                    <div class="tab-pane fade show active text-align form-new" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Login Usuário</h3>
                        <div class="row register-form">
                            <div class="col-md-12">
                                <form id="formUsuario" method="post" action="<?php echo site_url('Usuario/login_action'); ?>">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="Email" value="" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="senha" class="form-control" placeholder="Senha" value="" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="login" class="btn btn-primary btnLoginSubmit" value="Login" />
                                        <a href="usuario/esqueceu_senha" class="btn btn-link text-white btnForgetPwd">Esqueceu senha do usuário?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show text-align form-new" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Login Empresa </h3>
                        <div class="row register-form">
                            <div class="col-md-12">
                                <form id="formEmpresa" method="post">
                                    <div class="form-group">
                                        <input type="text" name="email1" class="form-control" placeholder="Email" value="" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="senha1" class="form-control" placeholder="Senha" value="" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="login1" class="btn btn-primary btnLoginSubmit" value="Login" />
                                        <a class="btn btn-link text-white btnForgetPwd">Esqueceu senha da empresa?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>

</html>

<script>
/*$(document).ready(function(){
    // Autenticação do usuário
    $("#formUsuario").submit(function(event){
        event.preventDefault(); // Evita o envio padrão do formulário
        
        // Aqui você pode adicionar qualquer lógica de validação do formulário, se necessário
        
        // Simulação de autenticação bem-sucedida para usuário
        var email = $("input[name='email']").val();
        var senha = $("input[name='senha']").val();
        // Supondo que você tenha uma função para verificar o login do usuário
        if (validarUsuario(email, senha)) {
            // Redireciona o usuário para a página de início do controlador Usuario
            window.location.href = "</?php echo base_url('usuario/home_usuario'); ?>";
        } else {
            alert("Credenciais inválidas. Por favor, tente novamente.");
        }
    });

    // Autenticação da empresa
    $("#formEmpresa").submit(function(event){
        event.preventDefault(); // Evita o envio padrão do formulário
        
        // Aqui você pode adicionar qualquer lógica de validação do formulário, se necessário
        
        // Simulação de autenticação bem-sucedida para empresa
        var email = $("input[name='email1']").val();
        var senha = $("input[name='senha1']").val();
        // Supondo que você tenha uma função para verificar o login da empresa
        if (validarEmpresa(email, senha)) {
            // Redireciona o usuário para a página de início do controlador Empresa
            window.location.href = "</?php echo base_url('empresa/home_empresa'); ?>";
        } else {
            alert("Credenciais inválidas. Por favor, tente novamente.");
        }
    });

    // Função de validação simulada do usuário (substitua por sua própria lógica)
    function validarUsuario(email, senha) {
        // Simulação de autenticação bem-sucedida
        if (email === "usuario@example.com" && senha === "senhausuario") {
            return true;
        } else {
            return false;
        }
    }

    // Função de validação simulada da empresa (substitua por sua própria lógica)
    function validarEmpresa(email, senha) {
        // Simulação de autenticação bem-sucedida
        if (email === "empresa@example.com" && senha === "senhaempresa") {
            return true;
        } else {
            return false;
        }
    }
});*/
</script>
 