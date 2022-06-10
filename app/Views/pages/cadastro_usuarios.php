<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>santri</title>

  <link rel="stylesheet" href="static/css/w3.css">
  <link rel="stylesheet" href="static/css/santri.css">
  <link rel="stylesheet" href="static/css/toastr.css">

  <link rel="stylesheet" href="static/css-awesome/brands.css">
  <link rel="stylesheet" href="static/css-awesome/fontawesome.css">
  <link rel="stylesheet" href="static/css-awesome/regular.css">
  <link rel="stylesheet" href="static/css-awesome/solid.css">
  <link rel="stylesheet" href="static/css-awesome/svg-with-js.css">
  <link rel="stylesheet" href="static/css-awesome/v4-shims.css">

</head>
<style>
  .wrapper {
    max-width: 95%;
    margin: auto;
    margin-top: 5%;
  }
</style>
<body>
  <script src="static/js/jquery.js"></script>
  <div class="wrapper">
    <div id="lista_usuarios" class="w3-margin w3-container w3-card">
      <h3>Cadastro de usuários</h3>
      <div style="display: none;">
        <label>Usuário 1</label>
      </div>
    <?php echo form_open('cadastro_usuarios/store'); ?>
        <div>
          <label>Nome</label>
          <input type="text" name="nome" id="nome" class="w3-input w3-block w3-border">
        </div>

        <div>
          <label>Login</label>
          <input type="text" name="login" id="login" class="w3-input w3-block w3-border">
        </div>

        <div>
          <label>Ativo</label>
          <input type="text" name="ativo" id="ativo" class="w3-input w3-block w3-border">
        </div>

        <div>
          <label>Senha</label>
          <input type="password" name="senha" id="senha" class="w3-input w3-block w3-border">
        </div>


      <ul>
        <li id="opt_cadastrar_clientes"><input type="checkbox" checked value="cadastrar_clientes"> <label>Cadastrar clientes</label></li>
        <li id="opt_excluir_clientes"><input type="checkbox" value="excluir_clientes"> <label>Excluir clientes</label></li>
        <li id="opt_mais"><input type="checkbox" value="mais"> <label>E assim sucessivamente</label></li>
      </ul>

      <input type="submit" class="w3-button w3-theme w3-margin-top w3-margin-bottom" value="Gravar"></input>
      <?php echo anchor('pesquisa_usuarios/','Cancelar', 'class="w3-button w3-black w3-round w3-margin-top w3-margin-bottom w3-right"'); ?>
    <?php echo form_close(); ?>
    </div>
  </div>
</body>

</html>