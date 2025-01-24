<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Vagas</title>
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
  <h5>Adicionar vagas</h5>

  <!-- Formulário para adicionar vagas com upload de imagem -->
  <form action="processar_vaga.php" method="POST" enctype="multipart/form-data">
    <table border="1">
      <thead>
        <tr>
          <th>Título da Vaga</th>
          <th>Descrição</th>
          <th>Imagem</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input type="text" name="titulo" placeholder="Título da vaga" required></td>
          <td><textarea name="descricao" placeholder="Descrição da vaga" rows="3" required></textarea></td>
          <td><input type="file" name="imagem" accept="image/*" required></td>
          <td><button type="submit">Enviar</button></td>
        </tr>
      </tbody>
    </table>
  </form>
</body>
</html>
