<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Forgot Password</title>

    <!-- Bootstrap core CSS-->
    <link href="<?=base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?=base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?=base_url();?>assets/css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-info">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">
          <div class="text-center">
            <img style="width: 200px;" src="<?= base_url();?>assets/img/Logo_completa.png">
          </div>
        </div>
        <div class="card-body">
          <div class="text-center mb-4">
            <h4>Esqueceu sua senha?</h4>
            <p>Informe-nos seu e-mail que enviaremos a você instruções de como recuperar a sua senha.</p>
          </div>
          <form action="<?= base_url();?>" accept_charset="utf-8" method="post" class="form-login">
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Enter email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Enter email address</label>
              </div>
            </div>
            <button type="submit" class="btn btn-dark btn-block">Recuperar Senha</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="<?=base_url();?>usuario/cadastrar">Registrar uma conta</a>
            <a class="d-block small" href="<?=base_url();?>usuario/login">Página de Login</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
