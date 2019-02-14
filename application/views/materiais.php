<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb border">
        <li class="breadcrumb-item">
          <a href="<?= base_url();?>">Página Inicial</a>
        </li>
        <li class="breadcrumb-item">
          <a href="<?= base_url();?>disciplinas">Disciplinas</a>
        </li>
        <li class="breadcrumb-item">
          <a href="<?= base_url();?>conteudos/acessar">Conteúdos</a>
        </li>
        <li class="breadcrumb-item active">Materiais</li>
      </ol>

      <div class="row bg-light border rounded">
        <div class="col-xl-12 col-sm-12 mb-3">
          <?php
            $p = $this->session->userdata('usuario');
            if ($p->tipo == 1){
          ?>
              <a class="btn btn-dark" href="#" data-target="#confirmacao" data-toggle="modal">
                <i class="fas fa-plus"></i>
                <b>
                  Adicionar novo material
                </b>
              </a>
            <?php
              }
            ?>
        </div>

        <ul class="nav col-sm-12" id="myTab" role="tablist">
          <li class="nav-item col-xl-3 col-sm-3 mb-3">
            <a class="nav-link active btn btn-info col-sm-12" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
            <i class="fas fa-file-pdf"></i>
            <b>Apostilas PDF</b>
            </a>
          </li>
          <li class="nav-item col-xl-3 col-sm-3 mb-3">
            <a class="nav-link btn btn-info col-sm-12" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
            <i class="fas fa-dumbbell"></i>
            <b>Exercícios</b>
            </a>
          </li>
          <li class="nav-item col-xl-3 col-sm-3 mb-3">
            <a class="nav-link btn btn-info col-sm-12" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
            <i class="fas fa-video"></i>
            <b>Video Aulas</b>
            </a>
          </li>
          <li class="nav-item col-xl-3 col-sm-3 mb-3">
            <a class="nav-link btn btn-info col-sm-12" href="<?= base_url(); ?>listaEstudos/cadastrar">
              <i class="fas fa-plus-square"></i> 
              <b>Lista de estudos</b>
            </a>
          </li>
        </ul>
        <div class="tab-content col-sm-12" id="myTabContent">

          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <table class="table">
              <?php if($this->session->userdata('usuario')->tipo==1){ ?>
              <tr class="row linhaTabelaMateriais">
                <th class="col-sm-9">Nome</th><th class="col-sm-2">Apostila</th><th class="col-sm-1">Excluir</th>
              </tr>
              <?php }else{ ?>
              <tr class="row linhaTabelaMateriais">
                <th class="col-sm-10">Nome</th><th class="col-sm-2">Apostila</th>
              </tr>
              <?php } ?>
              <?php
                foreach ($material as $m) {
                  if(($m->tipo)==1){
                    if($this->session->userdata('usuario')->tipo==1){
              ?>
              <tr class="row linhaTabelaMateriais">
                    <td class="col-sm-9"> <?php echo $m->nome; ?> </td>
                    <td class="col-sm-2"> <button value="<?php echo $m->arquivo; ?>" onclick="alterarApostila(this)" class="btn btn-dark" href="#" data-target="#apostila" data-toggle="modal">Visualizar</button></td>
                    <td class="col-sm-1"> <a class="btn btn-danger" href="<?php echo base_url(); ?>Materiais/excluir?excluir=<?php echo $m->id; ?>&conteudo=<?php echo $this->uri->segment(3); ?>"><i class="fas fa-trash-alt"></i></a> </td>
              </tr>
              <?php
                }else{
              ?>
              <tr class="row linhaTabelaMateriais">
                    <td class="col-sm-10"> <?php echo $m->nome; ?> </td>
                    <td class="col-sm-2"> <button value="<?php echo $m->arquivo; ?>" onclick="alterarApostila(this)" class="form-control btn btn-dark" href="#" data-target="#apostila" data-toggle="modal">Visualizar</button></td>
              </tr>
              <?php
                }}}
              ?>
            </table>
          </div>

          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <table class="table">
              <?php if($this->session->userdata('usuario')->tipo==1){ ?>
              <tr class="row linhaTabelaMateriais">
                <th class="col-sm-9">Nome</th><th class="col-sm-2">Exercício</th><th class="col-sm-1">Excluir</th>
              </tr>
              <?php }else{ ?>
              <tr class="row linhaTabelaMateriais">
                <th class="col-sm-10">Nome</th><th class="col-sm-2">Exercício</th>
              </tr>
              <?php } ?>
              <?php
                foreach ($material as $m) {
                  if(($m->tipo)==2){
                    if($this->session->userdata('usuario')->tipo==1){
              ?>
              <tr class="row linhaTabelaMateriais">
                    <td class="col-sm-9"> <?php echo $m->nome; ?> </td>
                    <td class="col-sm-2"> <button value="<?php echo $m->arquivo; ?>" onclick="alterarApostila(this)" class="btn btn-dark" href="#" data-target="#apostila" data-toggle="modal">Visualizar</button></td>
                    <td class="col-sm-1"> <a class="btn btn-danger" href="<?php echo base_url(); ?>Materiais/excluir?excluir=<?php echo $m->id; ?>&conteudo=<?php echo $this->uri->segment(3); ?>"><i class="fas fa-trash-alt"></i></a> </td>
              </tr>
              <?php
                }else{
              ?>
              <tr class="row linhaTabelaMateriais">
                    <td class="col-sm-10"> <?php echo $m->nome; ?> </td>
                    <td class="col-sm-2"> <button value="<?php echo $m->arquivo; ?>" onclick="alterarApostila(this)" class="form-control btn btn-dark" href="#" data-target="#apostila" data-toggle="modal">Visualizar</button></td>
              </tr>
              <?php
                }}}
              ?>
            </table>
          </div>

          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row">
                  <?php
                    foreach ($material as $m) {
                      if(($m->tipo)==3){
                  ?>
                    <div class="card col-xl-5 col-lg-5 col-md-12 col-sm-12 cardVideoAula">
                      <div class="card-header bg-white">
                        <h5 class="card-title"><?php echo $m->nome; ?></h5>
                      </div>
                      <div class="card-body">
                        <iframe height="200px" class="container" src="<?php echo $m->arquivo; ?>" frameborder="0"></iframe>
                      </div>
                      <div class="card-footer bg-white">
                        <button value="<?php echo $m->arquivo; ?>" onclick="alterarVideoAula(this)" class="btn btn-dark" href="#" data-target="#videoAula" data-toggle="modal">Expandir</button>
                        <?php if($this->session->userdata('usuario')->tipo==1){ ?>
                        <a class="btn btn-danger" href="<?php echo base_url(); ?>Materiais/excluir?excluir=<?php echo $m->id; ?>&conteudo=<?php echo $this->uri->segment(3); ?>"><i class="fas fa-trash-alt"></i> Excluir</a>
                        <?php } ?>
                      </div>
                    </div>
                  <?php
                    }}
                  ?>
              </div>
          </div>
          
        </div>

      

      <div class="modal fade" id="confirmacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content bg-info">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Adicione um material a esta disciplina</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="row">
            <div class="col-sm-12">
              
                <label for="">Tipo:</label><br>
                <select class="form-control" name="" id="selectMateriais" onchange="mudarFormMateriais(this)">
                  <option value="none">Selecione o Tipo de Material</option>
                  <option value="1">Apostila PDF</option>
                  <option value="2">Exercício</option>
                  <option value="3">Video Aula</option>
                </select>
                <br>

                <div id="divFormMateriais">
                  <form action="<?=base_url();?>materiais/cadastrar" role="form" method="post" enctype="multipart/form-data">
                    
                    <div id="divFormMateriais_cAr">
                      <label for="">Nome:</label>
                      <br>
                      <input name="nome" class="form-control zerar" type="text">
                      <br>
                      <label for="">Arquivo:</label>
                      <br>
                      <input class="zerar" name="arquivo" type="file">
                    </div>

                    <div id="divFormMateriais_nCaR">
                      <label for="">Nome:</label>
                      <br>
                      <input name="nome2" class="form-control zerar" type="text">
                      <br>
                      <label for="">URL da Video Aula:</label>
                      <br>
                      <input class="form-control zerar" name="arquivo2" type="text">
                    </div>

                    <input id="tipoMaterial" name="tipo" type="hidden">
                    <input name="fk_conteudo" value="<?php echo $this->uri->segment(3); ?>" type="hidden">

                    <br><br>
                    <button class="btn btn-dark" type="submit">Cadastrar</button>
                  
                  </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

  <div class="modal fade" id="apostila" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe width="100%" height="100%" id="apostilaAtual" class="col-sm-12" src="" frameborder="0"></iframe>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="videoAula" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe class="border" id="videoAulaAtual" width="100%" height="500px" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
    