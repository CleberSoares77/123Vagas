<!DOCTYPE html>
<html lang="pt">
<head>
 <meta charset="UTF-8">
 <title>Tabela de Usuários</title>
 <style>
   table {
     border-collapse: collapse;
     width: 80%;
   }
   th, td {
     border: 1px solid black;
     padding: 8px;
     text-align: left;
   }
 </style>
</head>
<body>
  <h5>INDEX - LISTAR - USUÁRIO</h5>

  <table border="1">
   <thead>
       <tr>
           <th>ID</th>
           <th>Nome</th>
           <th>Sobrenome</th>
           <th>Contato</th>
           <th>Email</th>
           <th>Data de Nascimento</th>
           <th>Gênero</th>
           <th>Senha</th>
           <th>Editar</th>
           <th>Excluir</th>
       </tr>
   </thead>
   <tbody>
    <?php
    foreach($usuarios as $usuario)
    {
        echo '<tr>';
        echo '<td>'.$usuario->id.'</td>';
        echo '<td>'.$usuario->nome.'</td>';
        echo '<td>'.$usuario->sobrenome.'</td>';
        echo '<td>'.$usuario->contato.'</td>';
        echo '<td>'.$usuario->email.'</td>';
        echo '<td>'.date('d/m/Y', strtotime($usuario->dataNasc)).'</td>';
        echo '<td>'.$usuario->genero.'</td>';
        echo '<td>'.$usuario->senha.'</td>';
        echo '<td><a href="usuario/editar/'.$usuario->id.'">Editar</a></td>';
        echo '<td><a href="usuario/excluir/'.$usuario->id.'">Excluir</a></td>';
        echo '</tr>';
    }
    ?>
   </tbody>
  </table>
</body>
</html>
