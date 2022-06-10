<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>santri</title>

  <link rel="stylesheet" href="<?= base_url('/static/css')?>/w3.css">
  <link rel="stylesheet" href="<?= base_url('/static/css')?>/santri.css">
  <link rel="stylesheet" href="<?= base_url('/static/css')?>/toastr.css">

  <link rel="stylesheet" href="<?= base_url('/static/css-awesome')?>/brands.css">
  <link rel="stylesheet" href="<?= base_url('/static/css-awesome')?>/fontawesome.css">
  <link rel="stylesheet" href="<?= base_url('/static/css-awesome')?>/regular.css">
  <link rel="stylesheet" href="<?= base_url('/static/css-awesome')?>/solid.css">
  <link rel="stylesheet" href="<?= base_url('/static/css-awesome')?>/svg-with-js.css">
  <link rel="stylesheet" href="<?= base_url('/static/css-awesome')?>/v4-shims.css">

    <style>
      #login {
        max-width: 95%;
        margin: auto;
        width: 380px;
        margin-top: 5%;
      }

      #logo-cliente {
        max-width: 100%;
        margin: auto;
        width: 700px;    
      }

      #logo-santri {
        max-width: 50%;
        margin: auto;
        width: 380px;    
      }
    </style>

  </head>
  <body>
    <script src="static/js/jquery.js"></script>

    <div id="login">
      <?php echo form_open('login/auth'); ?>
        <img id="logo-cliente" class="w3-margin-top" src="static/imagens/logo_cliente.jpg"/>
        <i class="fa fa-home w3-large"></i>
        <p>Insira seu usuario e senha:</p>
        <input class="w3-input w3-border w3-margin-top" name="usuario" id="usuario" type="text" placeholder="Usuário">
        <input class="w3-input w3-border w3-margin-top" name="senha" id="senha" type="password" placeholder="Senha">
        <input type="submit" class="w3-button w3-theme w3-margin-top w3-block" value="Logar"></button>
      <?php echo form_close(); ?>
      <a href="http://www.santri.com.br">
        <img id="logo-santri" class="w3-right w3-margin-top" src="static/imagens/logo_santri.svg"/>
      </a>
    </div>
  </body>
</html>