<?php $p = $this->session->userdata('usuario')?>
<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb border">
        <li class="breadcrumb-item">
          <a href="<?= base_url();?>usuario">Página Inicial</a>
        </li>
        <li class="breadcrumb-item active">Fórum</li>
      </ol>
      <div class="row border rounded">
        <div style="margin-bottom: 30px;">
          <div style="margin-bottom: 26px;">
            <h3><b>Qual a sua dúvida ?</b></h3>
          </div>
          <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-info" href="<?=base_url()?>forum/pergunta">
            <i class="fas fa-plus"></i> <b>FAÇA SUA PERGUNTA</b>
          </a>
          <a style="margin-bottom: 10px; margin-right: 10px;" class="btn btn-info" href="<?=base_url()?>forum/minhas_perguntas">
            <i class="fas fa-list-ul"></i> <b>MINHAS PERGUNTAS</b>          
          </a>
        </div>
        <?php foreach($ultimas as $u){ ?>
          <?php if ($u->status == 1){ ?>
              <div style="margin-bottom: 10px; padding: 15px;" class="bg-light border rounded col-sm-12">
                <div class="col-sm-12">
                  <b><i class="fas fa-user-circle"></i>
                     - <?= $u->nome_disciplina ?>  -  <?=date('d/m/Y',strtotime($u->data));?> 
                  </b> 
                </div>
                <div class="row">
                  <p style="font-size: 27px;"><?= $u->titulo ?></p>
                </div>
                <div class="col-sm-12">
                  <a href="<?= base_url()?>forum/acessar_pergunta/<?= $u->id?>" class="btn btn-dark">
                    <b>Ver Detalhes</b>
                  </a>
                  <?php if($p->tipo == 1){ ?>
                      <a href="<?= base_url();?>forum/excluir/<?= $u->id ?>" class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i>
                      </a>
                  <?php } ?>
                </div>
              </div>
          <?php } ?>
        <?php } ?>


























