<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>santri</title>

  <link rel="stylesheet" href="<?= base_url('/static/css') ?>/w3.css">
  <link rel="stylesheet" href="<?= base_url('/static/css') ?>/santri.css">
  <link rel="stylesheet" href="<?= base_url('/static/css') ?>/toastr.css">

  <link rel="stylesheet" href="<?= base_url('/static/css-awesome') ?>/brands.css">
  <link rel="stylesheet" href="<?= base_url('/static/css-awesome') ?>/fontawesome.css">
  <link rel="stylesheet" href="<?= base_url('/static/css-awesome') ?>/regular.css">
  <link rel="stylesheet" href="<?= base_url('/static/css-awesome') ?>/solid.css">
  <link rel="stylesheet" href="<?= base_url('/static/css-awesome') ?>/svg-with-js.css">
  <link rel="stylesheet" href="<?= base_url('/static/css-awesome') ?>/v4-shims.css">

  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th,
    td {
      text-align: left;
      padding: 8px;
      border-bottom: 1px solid #ddd;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .wrapper {
      max-width: 95%;
      margin: auto;
      margin-top: 5%;
    }

    .pagination::before {
      content:"<<";
      margin-top: 8px;
      margin-right: 10px;
    }

    .pagination::after {
      content:">>";
      margin-top: 8px;
      margin-left: 10px;
    }
    .pagination {
      display: flex;
      list-style-type: none;
    }

    .pagination a {
      color: black;
      float: left;
      padding: 8px 16px;
      text-decoration: none;
    }

    li.active {
      background-color: #9c1d1c;
      color: white;
    }

    .pagination a:hover:not(.active) {
      background-color: #ddd;
    }
  </style>

</head>

<body>
  <script src="static/js/jquery.js"></script>
  <div class="wrapper">
    <div id="lista_usuarios" class="w3-margin w3-container w3-card">
      <input class="w3-input w3-border w3-margin-top" id="myInput" type="text" placeholder="Nome">
      <button class="w3-button w3-theme w3-margin-top" onclick="myFunction()">Buscar</button>
      <?php echo anchor('cadastro_usuarios/', 'Cadastrar novo usuário', 'class="w3-button w3-theme w3-margin-top w3-right"'); ?>
      <table id="myTable">
        <thead>
          <tr>
            <th>Nome</td>
            <th>Login</td>
            <th>Ativo</td>
            <th>Opções</td>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($usuarios as $usuario) : ?>
            <tr>
              <td><?= $usuario['NOME_COMPLETO'] ?></td>
              <td><?= $usuario['LOGIN'] ?></td>
              <td><?= $usuario['ATIVO'] ?></td>
              <td>
                <?php echo anchor('pesquisa_usuarios/delete/' . $usuario['USUARIO_ID'], '<i class="fas fa-user-times"></i>', 'class="w3-button w3-theme w3-margin-top"'); ?>
                <?php echo anchor('pesquisa_usuarios/edit' . $usuario['USUARIO_ID'], '<i class="fas fa-edit"></i>', 'class="w3-button w3-theme w3-margin-top"'); ?>
              </td>
            </tr>
          <?php endforeach; ?>
          <!--
            <tr>
              <td>João da Silva</td>
              <td>JOAO</td>
              <td>Sim</td>
              <td>
                <button class="w3-button w3-theme w3-margin-top"><i class="fas fa-user-times"></i></button>
                <button class="w3-button w3-theme w3-margin-top"><i class="fas fa-edit"></i></button>
              </td>
            </tr>
            -->
        </tbody>
      </table>
      <?php echo $pager->links(); ?>
    </div>
  </div>

  <script>
    function myFunction() {
      var input, filter, table, tr, td, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
  </script>
</body>

</html>