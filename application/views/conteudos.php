    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb border">
        <li class="breadcrumb-item">
          <a href="<?= base_url();?>">Página Inicial</a>
        </li>
        <li class="breadcrumb-item active">Conteúdos</li>
      </ol>
      <?php
        $u = $this->session->userdata('usuario');
      ?>
      <div class="row bg-light rounded border">
      <?php
        if ($u->tipo == 1){
      ?>
      
        <div style="padding-bottom: 12px;" class="col-sm-12">
          <button class="btn btn-dark" data-target="#confirmacao" data-toggle="modal">
            <i class="fas fa-plus"></i>
            <b>
              Cadastrar novo conteúdo
            </b>
          </button>
        </div>
      <?php
        }
      ?>
        <div style="padding-bottom: 12px;" class="bg-light col-sm-12 rounded text-grey">
            <b>1º ano: </b>
        </div>
        <?php foreach ($conteudo as $c){
          if($c->serie==1){

        ?>
          <div class="col-sm-5 col-xl-3 mb-3">
            <div class="card bg-info text-white o-hidden h-100">
              <a class="text-white btn btn-info" href='<?= base_url();?>/materiais/acessar/<?= $c->id?>'>
                <div class="card-body">
                  <div class="text-center">
                    <b>
                      <?=$c->nome?>
                    </b>
                  </div>
                </div>
              </a>
              <?php
                $u = $this->session->userdata('usuario');
        
                if ($u->tipo == 1){
              ?>
              <a class="card-footer clearfix small z-1" href="#">
              <span class="float-left text-white">
                <i class="fas fa-trash-alt"></i> EXCLUIR
              </span>
              </a>
            <?php
                }
            ?>  
            </div>
          </div>
        <?php 
              }
            }
         ?>

         <div style="padding-bottom: 12px;" class="bg-light col-sm-12 rounded text-grey">
            <b>2º ano:</b> 
        </div>
        <?php foreach ($conteudo as $c){
          if($c->serie==2){

        ?>
          <div class="col-sm-5 col-xl-3 mb-3">
            <div class="card bg-info text-white o-hidden h-100">
              <a class="text-white btn btn-info" href='<?= base_url();?>/materiais/acessar/<?= $c->id?>'>
                <div class="card-body">
                  <div class="text-center">
                    <b>
                      <?=$c->nome?>
                    </b> 
                  </div>
                </div>
              </a>
              <?php
                $u = $this->session->userdata('usuario');
        
                if ($u->tipo == 1){
              ?>
              <a class="card-footer clearfix small z-1" href="#">
              <span class="float-left text-white">
                <i class="fas fa-trash-alt"> </i> EXCLUIR
              </span> 
              </a>
            <?php
                }
            ?>  
            </div>
          </div>
        <?php 
              }
            }
         ?>

         <div style="padding-bottom: 12px;" class="bg-light col-sm-12 rounded text-grey">
            <b>3º ano: </b>
        </div>
        <?php foreach ($conteudo as $c){
          if($c->serie==3){

        ?>
          <div class="col-sm-5 col-xl-3 mb-3">
            <div class="card bg-info text-white o-hidden h-100">
              <a class="text-white btn btn-info" href='<?= base_url();?>/materiais/acessar/<?= $c->id?>'>
                <div class="card-body">
                  <div class="text-center">
                    <b>
                      <?=$c->nome?>
                    </b>
                  </div>
                </div>
              </a>
              <?php
                $u = $this->session->userdata('usuario');
        
                if ($u->tipo == 1){
              ?>
              <a class="card-footer clearfix small z-1" href="#">
              <span class="float-left text-white">
                <i class="fas fa-trash-alt"></i> EXCLUIR
              </span>
              </a>
            <?php
                }
            ?>  
            </div>
          </div>

        <?php 
              }
            }
         ?>
      </div>
    </div>



  <div class="modal fade" id="confirmacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content bg-info">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Adicione os dados abaixo para cadastrar um conteudo nesta disciplina</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="row">
            <div class="col-sm-12">



              <form action="<?=base_url();?>conteudos/cadastrar" method="post">
                <div class="form-group">
                  <i class="fas fa-pencil-alt"></i>
                  <label>Nome:</label>
                  <input class="form-control" type="text" name="nome">
                </div>

                <div class="form-group">
                  <label>Ano: </label><br>
                  <select class="form-control" name="serie">
                    <option value="1">1º Ano</option>
                    <option value="2">2º Ano</option>
                    <option value="3">3º Ano</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Descrição:</label><br>
                  <textarea class="form-control" name="descricao"></textarea>
                </div>

                <div class="form-group">
                  <button class="btn btn-dark">Cadastrar</button>
                </div>
              </form>



            </div>
          </div>
        </div>
      </div>
    </div>
