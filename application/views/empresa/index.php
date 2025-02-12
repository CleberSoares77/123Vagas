<!DOCTYPE html>
<html lang="pt">
<head>
 <meta charset="UTF-8">
 <title>Tabela de Empresas</title>
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
  <h5>EMPRESA</h5>

  <table border="1">
   <thead>
       <tr>
           <th>ID</th>
           <th>Nome</th>
           <th>CNPJ</th>
           <th>Contato</th>
           <th>Email</th>
           <th>Senha</th>
           <th>Editar</th>
           <th>Excluir</th>
       </tr>
   </thead>
   <tbody>
    <?php
    foreach($empresas as $empresa)
    {
        echo '<tr>';
        echo '<td>'.$empresa->id.'</td>';
        echo '<td>'.$empresa->nome.'</td>';
        echo '<td>'.$empresa->cnpj.'</td>';
        echo '<td>'.$empresa->contato.'</td>';
        echo '<td>'.$empresa->email.'</td>';
        echo '<td>'.$empresa->senha.'</td>';
        echo '<td><a href="empresa/editar_empresa/'.$empresa->id.'">Editar</a></td>';
        echo '<td><a href="empresa/excluir_empresa/'.$empresa->id.'">Excluir</a></td>';
        echo '</tr>';
    }
    ?>
   </tbody>
  </table>
</body>
</html>
