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
            /* Alterado para vermelho escuro */
            background: #8b0000;
            margin-top: 3%;
            padding: 1%;
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
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Olá, Usuário</a>
                    </li>
                </ul>
                <div class="tab-content" id="Tela_Login">
                    <div class="tab-pane fade show active text-align form-new" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Ops... infelizmente você não está cadastrado! clique em uma das opções acima.</h3>
                        <div class="row register-form">
                            <div class="col-md-12">
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
