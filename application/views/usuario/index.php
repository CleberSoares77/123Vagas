<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Área do Usuário - Lista de Usuários</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 20px;
    }
    .container {
      max-width: 1000px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 4px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h1 {
      text-align: center;
      color: #333;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    th, td {
      padding: 12px;
      border: 1px solid #ddd;
      text-align: left;
    }
    th {
      background-color: #007BFF;
      color: #fff;
    }
    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
    a {
      color: #007BFF;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
    .actions a {
      margin-right: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Área do Usuário - Lista de Usuários</h1>
    <table>
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
        if (!empty($usuarios)) {
          foreach ($usuarios as $usuario) {
            echo '<tr>';
            echo '<td>' . $usuario->id . '</td>';
            echo '<td>' . htmlspecialchars($usuario->nome) . '</td>';
            echo '<td>' . htmlspecialchars($usuario->sobrenome) . '</td>';
            echo '<td>' . htmlspecialchars($usuario->contato) . '</td>';
            echo '<td>' . htmlspecialchars($usuario->email) . '</td>';
            echo '<td>' . date('d/m/Y', strtotime($usuario->dataNasc)) . '</td>';
            echo '<td>' . htmlspecialchars($usuario->genero) . '</td>';
            echo '<td>' . htmlspecialchars($usuario->senha) . '</td>';
            echo '<td class="actions"><a href="' . base_url('usuario/editar/' . $usuario->id) . '">Editar</a></td>';
            echo '<td class="actions"><a href="' . base_url('usuario/excluir/' . $usuario->id) . '">Excluir</a></td>';
            echo '</tr>';
          }
        } else {
          echo '<tr><td colspan="10" style="text-align:center;">Nenhum usuário cadastrado.</td></tr>';
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
