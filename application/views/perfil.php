      <?php
            $dados = $this->session->userdata('usuario');
          ?>
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb border">
        <li class="breadcrumb-item">
          <a href="<?= base_url();?>usuario">Página Inicial</a>
        </li>
        <li class="breadcrumb-item active">Perfil</li>
      </ol>
      <div class="row rounded">
        <img class="rounded mx-auto d-block" src="data:image/png;base64,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"> 
      </div>
      <div style="padding-bottom: 15px;" class="col-sm-12">
           <button class="btn btn-dark mx-auto d-block"><i class="fa fa-camera"></i></button>
      </div>
      <div class="text-center">
        <p>
          <b>Nome: </b><?= $dados->nome?>
          <a href="#" data-toggle="modal" data-target="#altera_nome">
            <i class="fas fa-pencil-alt"></i>
          </a>
        </p>
        <p>
          <b>Email: </b><?= $dados->email?>
          <a href="#" data-toggle="modal" data-target="#altera_email">
            <i class="fas fa-pencil-alt"></i>
          </a>
        </p>
        <a class="btn btn-info" href="">
          <b>Alterar Senha</b>
        </a>
        <a class="btn btn-info" href="" data-toggle="modal" data-target="#excluir_conta">
            <b>Excluir Conta</b>
        </a>
      </div>

      <!--Alerta de exclusão de conta-->
      <div class="modal fade" id="excluir_conta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Você está prestes a excluir sua conta no CAP!</h5>
            <a href="#" class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </a>
          </div>
          <div class="modal-body">Tem certeza de que deseja excluir sua conta? todos os seus dados serão excluidos e você não poderá acessar este site a menos que crie uma nova conta no futuro. Esta ação é irreversivel!</div>
          <div class="modal-footer">
            <button class="btn btn-info" type="button" data-dismiss="modal">Cancelar</button>
            <a href="<?= base_url();?>usuario/excluir_conta" class="btn btn-danger text-white" aria-label="Close">Confirmar</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Alterar nome-->
    <div class="modal fade" id="altera_nome" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Você está prestes a excluir sua conta no CAP!</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Tem certeza de que deseja excluir sua conta? todos os seus dados serão excluidos e você não poderá acessar este site a menos que crie uma nova conta no futuro. Esta ação é irreversivel!</div>
          <div class="modal-footer">
            <button class="btn btn-info" type="button" data-dismiss="modal">Cancelar</button>
            <a href="<?= base_url();?>usuario/excluir_conta" class="btn btn-danger text-white" aria-label="Close">Alterar</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Alterar email-->
    <div class="modal fade" id="altera_email" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Você está prestes a excluir sua conta no CAP!</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Tem certeza de que deseja excluir sua conta? todos os seus dados serão excluidos e você não poderá acessar este site a menos que crie uma nova conta no futuro. Esta ação é irreversivel!</div>
          <div class="modal-footer">
            <button class="btn btn-info" type="button" data-dismiss="modal">Cancelar</button>
            <a href="<?= base_url();?>usuario/excluir_conta" class="btn btn-danger text-white" aria-label="Close">Alterar</a>
          </div>
        </div>
      </div>
    </div>