    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb border">
        <li class="breadcrumb-item text-info">
          <a href="<?= base_url();?>usuario">Página Inicial</a>
        </li>
        <li class="breadcrumb-item active">Disciplinas</li>
      </ol>
        <div class="row rounded bg-light border">
          <?php
            $u = $this->session->userdata('usuario');
        
            if ($u->tipo == 1){
          ?>
            <div style="padding-bottom: 12px" class="col-lg-12">
              <button class="btn btn-dark text-white" data-target="#confirmacao" data-toggle="modal">
                <span>
                  <i class="fas fa-plus"></i>
                  <b>
                    Cadastrar nova disciplina
                  </b>
                </span>
              </button>
            </div>
          <?php
          }
          ?>
          
        <?php foreach ($disciplinas as $d) {?>
          <div class="col-xl-6 col-sm-6 mb-3">
          <div class="card bg-info o-hidden h-100">
            <a class="btn btn-info" href="<?= base_url();?>conteudos/acessar/<?=$d->id_disciplina?>">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw col-sm-1 col-sm-11"><img class = "icones" src="<?= base_url();?>assets/img/icones_disciplinas/<?= $d->arquivo;?>"></i>
              </div>
              <div class="mr-5">
                <b><?=$d->nome_disciplina?></b>
              </div>
            </div>
            </a>  
            <?php
              $u = $this->session->userdata('usuario');
        
              if ($u->tipo == 1){
            ?>
            <a class="card-footer clearfix small z-1" href="<?= base_url();?>disciplinas/excluir/<?= $d->id_disciplina?>">
              <span class="float-left text-white">
                <i class="fas fa-trash-alt"></i> EXCLUIR
              </span>
            </a>
            <?php
              }
            ?>
          </div>
        </div>
  <?php } ?>
        </div>
      <div class="modal fade" id="confirmacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
      <div class="modal-dialog" role="document">
        <div class="modal-content  bg-info" >
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cadastrar Disciplina</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <?php $user = $this->session->userdata("usuario");?>
          <div class="row">
            <div class="col-sm-12" >


              
              <form action="<?=base_url();?>disciplinas/cadastrar" method="post">
              <div class="md-form">
                <i class="fas fa-pencil-alt"></i>
                <label for="form10">Nome:</label><br>
                <input class="form-control" id="form10" name="nome" type="text"><br>
                <input id="icone" name="icone" type="hidden" value="" >

                <i class="far fa-images"></i><label>Icone:</label><label><img class="bg-black" id="iconeAtual" src="" alt="" width="30px" height="30px"></label>
                <label class="form-control" id="labelIcones" for="sel1">Selecione um ícone</label>
                

                <ul id="listaIcones" class="custom_select_options">
                  <?php foreach($icones as $i): ?>
                  <li class="icone" id="<?php echo $i->id; ?>"> <img id="img_<?php echo $i->id; ?>" src="<?php echo base_url('assets/img/icones_disciplinas/'); echo $i->arquivo;  ?>" alt=""> </li>
                  <?php endforeach; ?>
                </ul>
                
                <br><br>
                <button class="btn btn-dark" type="submit" style="margin-top:10px;">Cadastrar</button>
              </form>



            </div>
          </div>
        </div>
      </div>
    </div>
    </div>