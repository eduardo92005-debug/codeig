<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>santri</title>

  <link rel="stylesheet" href="<?= base_url('/static/css')?>/w3.css">
  <link rel="stylesheet" href="<?= base_url('/static/css')?>/santri.css">
  <link rel="stylesheet" href="<?= base_url('/static/css')?>/toastr.css">


  <style>
    .container {
      display: flex;
      flex-direction: column;
      max-width: 95%;
      margin: auto;
      width: 380px;
      margin-top: 5%;
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
  <div class="container">
    <div class="w3-panel w3-black">
      <h3>FALHA!!!!!!!!!!</h3>
      <p>A OPERACAO NAO FOI CONCLUIDA COM EXITO! VERIFICAR LOG</p>
        <br/>
    </div>

    <a href="http://www.santri.com.br">
        <img id="logo-santri" class="w3-right w3-margin-top" src="<?= base_url('/static/imagens')?>/logo_santri.svg"/>
    </a>
  </div>
</body>

</html>