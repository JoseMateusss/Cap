<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CAP - Login</title>

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
          <form action="<?= base_url();?>usuario/autenticacao" accept_charset="utf-8" class="form-login" method="post" >
            <div class="form-group">
              <div class="form-label-group">
                <?php if($this->session->flashdata("danger")): ?>
                  <center><p class="text-danger"><?= $this->session->flashdata("danger") ?></p></center>
                <?php endif ?>
                <label for="inputEmail">E-mail</label>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="E-mail" required="required" autofocus="autofocus">
                
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <label for="inputPassword">Senha</label>
                <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required="required">
                
                <?php if($this->session->flashdata("sucsses")): ?>
                    <center><p class="alert alert-sucsses"><?= $this->session->flashdata("sucsses") ?></p></center>
                <?php endif ?>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Lembrar da senha
                </label>
              </div>
            </div>
            <button class="btn btn-dark btn-block" type="submit">Entrar</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="<?= base_url();?>usuario/cadastrar">Registrar uma conta</a>
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