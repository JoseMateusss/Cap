<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Register</title>

    <!-- Bootstrap core CSS-->
    <link href="<?=base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?=base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?=base_url();?>assets/css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-info">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">
          <div class="text-center">
            <img style="width: 200px;" src="<?= base_url();?>assets/img/Logo_completa.png">
          </div>
        </div>
        <div class="card-body">
          <form action="<?= base_url();?>usuario/novoUsuario" accept_charset="utf-8" method="post" class="form-login">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-12">
                  <div class="form-label-group">
                   <label for="firstName">Nome</label>
                   <input type="text" id="firstName" class="form-control" placeholder="Digite seu nome" required="required" autofocus="autofocus" name="nome">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <label for="inputEmail">Email</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Digite seu e-mail" required="required" name="login">
               
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <label for="inputPassword">Senha</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="required" name="senha">
                   
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <label for="confirmPassword">Confirmar senha</label>
                    <input type="password" id="confirmPassword" class="form-control" placeholder="confirmar senha" required="required">
                    
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-dark btn-block">Registrar</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="<?= base_url();?>usuario/login">Página de Login</a>
            <a class="d-block small" href="<?= base_url();?>usuario/recuperar_senha">Esqueceu a senha?</a>
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