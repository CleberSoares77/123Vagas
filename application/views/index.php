<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
    .btnContactSubmit {
        width: 50%;
        border-radius: 1rem;
        padding: 1.5%;
        color: #fff;
        background-color: #0062cc;
        border: none;
        cursor: pointer;
        margin-right: 6%;
        background-color: white;
        color: blue;
        margin-top: 4%;
    }

    .register .nav-tabs .nav-link:hover {
        border: none;
    }

    .text-align {
        margin-top: -3%;
        margin-bottom: -9%;

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
                                <form method="post">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="Email" value="" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="senha" class="form-control" placeholder="Senha" value="" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="login" class="btn btn-primary" value="Login" />
                                        <a href="esqueceu_senha.php" class="btn btn-link text-white">Esqueceu senha do usuário?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show text-align form-new" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Login Empresa </h3>
                        <div class="row register-form">
                            <div class="col-md-12">
                                <form method="post">
                                    <div class="form-group">
                                        <input type="text" name="email1" class="form-control" placeholder="Email" value="" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="senha1" class="form-control" placeholder="Senha" value="" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="login1" class="btn btn-primary" value="Login" />
                                        <a href="esqueceu_senha.php" class="btn btn-link text-white">Esqueceu senha da empresa?</a>
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