<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Lista de Vagas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
      background: #fff;
      padding: 20px;
      border-radius: 4px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #333;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th,
    td {
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

    .action-links a {
      margin-right: 10px;
      text-decoration: none;
      color: #007BFF;
      font-weight: bold;
    }

    .action-links a:hover {
      text-decoration: underline;
    }

    .vaga-img {
      max-width: 100px;
      height: auto;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Lista de Vagas</h2>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome da Vaga</th>
          <th>Descrição</th>
          <th>Imagem</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($vagas)): ?>
          <?php foreach ($vagas as $vaga): ?>
            <tr>
              <td><?= $vaga->id ?></td>
              <td><?= htmlspecialchars($vaga->nome) ?></td>
              <td><?= htmlspecialchars($vaga->descricao) ?></td>
              <td>
                <?php if (!empty($vaga->imagem)): ?>
                  <img src="<?= base_url($vaga->imagem) ?>" alt="<?= htmlspecialchars($vaga->nome) ?>" class="vaga-img">
                <?php endif; ?>
              </td>
              <td class="action-links">
                <a href="<?= base_url('empresa/excluir_vaga/' . $vaga->id) ?>"
                  onclick="return confirm('Tem certeza que deseja excluir esta vaga?');">
                  Excluir
                </a>
                <hr style="border: 1px solid #ddd; margin: 5px 0;">
                <a href="<?= base_url('empresa/editar_vaga/' . $vaga->id) ?>"
                  onclick="return confirm('Tem certeza que deseja editar esta vaga?');">
                  Editar
                </a>
              </td>

            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="5" style="text-align:center;">Nenhuma vaga cadastrada.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</body>

</html>