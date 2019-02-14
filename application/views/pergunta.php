    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb border">
        <li class="breadcrumb-item">
          <a href="<?= base_url();?>usuario">Página Inicial</a>
        </li>
        <li class="breadcrumb-item active">Fórum</li>
      </ol>
      <?php if($this->session->flashdata("Sucesso")):?>
      <div class="alert alert-info" role="alert">
        <?= $this->session->flashdata("Sucesso") ?> 
      </div>
      <?php endif ?>
      <?php if($this->session->flashdata("Erro")):?>
      <div class="alert alert-danger" role="alert">
        <?= $this->session->flashdata("Erro") ?> 
      </div>
      <?php endif ?>
      
      <div class="row border rounded">
        <div class="col-12">
          <div class="row bg-light border rounded">
            <div class="col-sm-12">
              <p><strong>Por: </strong><?= $Pergunta->nome?> em <?= date('d/m/Y',strtotime($Pergunta->data));?> </p>      
            </div>
            <div class="col-sm-12">
                <p><?= $Pergunta->topico ?></p>
            </div>
          <?php if(! empty($Pergunta->arquivo)){?>
          <div class="container-fluid">
            <img src="<?php echo base_url();?>/uploads/<?php echo $Pergunta->arquivo?>" class="img-thumbnail" alt="Cinque Terre" width="150" height="150">
            <br><br>
            <button value="<?php echo $Pergunta->arquivo; ?>" onclick="alterarArquivo(this)" class="btn btn-dark" href="#" data-target="#arquivo" data-toggle="modal">Visualizar Arquivo</button>
          </div>
          <?php } ?>
        </div>
         <div class="row">
              <div class="col-sm-12">
                <div class="form-group">

                    <form action="<?php echo base_url(); ?>forum/salvarResposta/<?php echo $Pergunta->id; ?>" method="post">
                      <textarea name="resposta" placeholder="Você sabe a resposta?" class="form-control" rows="5" id="comment"></textarea>
                      <br/>
                      <button class="btn btn-info" type="submit" >
                        <b>Responder</b>
                      </button>
                    </form>

                </div>
              </div>   
          </div>
          <div class="row bg-light rounded">
            <div class="col-sm-12">
                <h5 class= "font-weight-bold text-info">Respostas: </h5>
            </div>
            <div class="col-sm-12">
              <h5> <strong>Total: <?php echo count($Respostas); ?> </strong></h5>
            </div>
          </div>

          <br>
        <?php foreach ($Respostas as $d) { ?>
          <div class="row bg-light border">
            <div class="col-sm-12">
              <p><strong>Por: </strong><?= $d->nome ?> em <?=date('d/m/Y',strtotime($d->data));?></p>
            </div>
            <div class="col-sm-12">
              <p><?= $d->comentario ?></p>
              <a class="btn btn-info text-white"><span class="fa fa-thumbs-up"></span> Gostei</a>
              <a class="btn btn-danger text-white"><span class="fa fa-thumbs-down"></span> Não Gostei</a>
            </div>
          </div>

          <br>
        <?php } ?>

      </div>
    </div>

  <div class="modal fade" id="arquivo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body container">
        <iframe width="100%" height="100%" id="arquivoAtual" src="" frameborder="0"></iframe>
      </div>
    </div>
  </div>
</div>