<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>

<?php
    $conecta = mysqli_connect("localhost", "root", "","tcc");

    //checar conexao
    if(!$conecta){
        echo "NÃO CONECTADO!";
    }
    echo "CONECTADO AO BANCO COM SUCESSO!";

    $email = $_POST['email'];

    $email = mysqli_real_escape_string($conecta, $email);

    $sql = "SELECT email FROM cadastro_usuario WHERE email='$email'";

    $return = mysqli_query($conecta, $sql);

    if(mysqli_num_rows($return) > 0){
        echo "EMAIL JÁ CADASTRADO!<br>";
    }else{
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $contato = $_POST['contato'];
        $email = $_POST['email'];
        $dataNasc = $_POST['dataNasc'];
        $genero = $_POST['genero'];
        $senha = $_POST['senha'];
        $confimaSenha = $_POST['confirmaSenha'];
    }

    $sql = "INSERT INTO cadastro_usuario(nome,sobrenome,contato,email,dataNasc,genero,senha,confirmaSenha) 
    values ('$nome,$sobrenome,$contato,$email,$dataNasc,$genero,$senha,$confirmaSenha')";

    $retorno = mysqli_query($conecta, $sql);

    echo"USUARIO CADASTRADO COM SUCESSO!";

?>
    
</body>
</html>