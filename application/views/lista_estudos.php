<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb border">
        <li class="breadcrumb-item">
          <a href="<?= base_url();?>usuario">Página Inicial</a>
        </li>
        <li class="breadcrumb-item active">Lista de Estudos</li>
      </ol>
      <div class="row bg-light rounded border">
        <div class="card text-white azul2 o-hidden h-100 col-sm-12">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw"><img class = "icones" src="<?= base_url();?>assets/img/icones_disciplinas/historia.png"></i>
              </div>
              <div class="mr-5">Pré-história (1° Ano)</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?= base_url();?>disciplina/bimestre">
              <span class="float-left">Acessar Conteúdo</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
            <a class="card-footer text-white clearfix small z-1" data-toggle="modal" data-target="#confirmacao" href="#">
              <span class="float-left">Remover</span>
              <span class="float-right">
                <i class="fa fa-fw fa-times text-white"></i>
              </span>
            </a>
          </div>
      </div>
      </div>

      <!--Alerta-->
      <div class="modal fade" id="confirmacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Deseja realmente remover este conteúdo de sua lista?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="#">Confirmar</a>
          </div>
        </div>
      </div>
    </div>

    <!--Alerta-->
    <div class="modal fade" id="confirmacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Deseja realmente remover este conteúdo de sua lista?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="<?= base_url();?>">Confirmar</a>
          </div>
        </div>
      </div>
    </div>

    <!--Alerta-->
  <div class="modal fade" id="confirmacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Deseja realmente remover este conteúdo de sua lista?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="<?= base_url();?>">Confirmar</a>
          </div>
        </div>
      </div>
    </div>    