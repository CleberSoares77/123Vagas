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

        /* Eye icon styles */
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
            color: yellowgreen; /* cor do olho */
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
                                <form id="formUsuario" method="post" action="<?php echo site_url('Usuario/home_usuario'); ?>">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="Email" value="" required="">
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="password" id="senhaUsuario" name="senha" class="form-control" placeholder="Senha" value="" required="">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i id="olhoUsuario" class="fa fa-eye-slash eye-icon" onclick="togglePassword('senhaUsuario', 'olhoUsuario')"></i>
                                                </span>
                                            </div>
                                        </div>
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
                        <h3 class="register-heading">Login Empresa</h3>
                        <div class="row register-form">
                            <div class="col-md-12">
                                <form id="formEmpresa" method="post" action="<?php echo site_url('Empresa/login_action'); ?>">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="Email" value="" required="">
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="password" id="senhaEmpresa" name="senha" class="form-control" placeholder="Senha" value="" required="">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i id="olhoEmpresa" class="fa fa-eye-slash eye-icon" onclick="togglePassword('senhaEmpresa', 'olhoEmpresa')"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="login" class="btn btn-primary btnLoginSubmit" value="Login" />
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script>
        function togglePassword(passwordId, iconId) {
            var passwordField = document.getElementById(passwordId);
            var showPasswordIcon = document.getElementById(iconId);
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
    </script>
</body>
</html>
